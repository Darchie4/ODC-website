<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\BoardTitle;
use Illuminate\Http\Request;

class BoardTitelController extends Controller
{
    public function create(Request $request){

        $request->validate([
            'name' => ['required', 'string'],
            'sorting_index' => ['required', 'integer'],
        ]);

        if (BoardTitle::where('sorting_index', \request('sorting_index'))->exists()) {
            return back()->withErrors(['msg' => 'Der eksistere allerede en titel med det index']);
        }

        $boardTitle = new BoardTitle();
        $boardTitle->name = \request('name');
        $boardTitle->sorting_index = \request('sorting_index');
        $boardTitle->save();

        return back();
    }

    public function update(Request $request, BoardTitle $boardTitle){
        $request->validate([
            'name' => ['required', 'string'],
            'sorting_index' => ['required', 'integer'],
        ]);

        if (BoardTitle::where('sorting_index', \request('sorting_index'))->first()->id != $boardTitle->id) {
            return back()->withErrors(['msg' => 'Der eksistere allerede en titel med det index']);
        }

        $boardTitle->update([
            'name' => \request('name'),
            'sorting_index' => \request('sorting_index'),
        ]);

        return back();
    }
}
