<?php

namespace App\Http\Controllers;

use App\Models\lesson;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function create(){
        return view('adminPages/loginSystem/registrer');
    }
    public function doCreate(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'confirmed']
        ]);

        $user = new User();
        $user->name = \request('name');
        $user->email = \request('email');
        $user->password = Hash::make(\request('name'));
        $user->save();

        Auth::login($user);
        return redirect()->route('admin.index');
    }

    public function login(){
        return view('adminPages/loginSystem/login');
    }
    public function doLogin(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email', 'exists:users,email,verifiedAdmin,true'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                return redirect()->route('admin.index');
        }

        return back();
    }

    public function index(){
        return view('adminPages/indexPage');
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }

}