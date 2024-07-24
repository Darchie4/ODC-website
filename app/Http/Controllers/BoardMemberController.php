<?php

namespace App\Http\Controllers;

use App\Models\BoardMember;
use App\Models\BoardTitle;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class BoardMemberController extends Controller
{
    public function index(): Factory|View|Application
    {
        return view('aboutPages/board', ['boardMembers' => BoardMember::getMembersSortedByTitle()]);
    }

    public function adminIndex(): Factory|View|Application
    {
        return view('adminPages/board/index', ['boardMembers' => BoardMember::getMembersSortedByTitle()]);
    }

    public function create(): Factory|View|Application
    {
        return view('adminPages/board/create', ['boardTitles' => BoardTitle::all()->sortBy('sorting_index')]);
    }

    public function doCreate(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string'],
            'description' => ['required', 'string'],
            'elected_year' => ['required', 'integer', 'min:' . now()->year - 4],
            'img' => ['required', 'image'],
            'boardTitle' => ['required', 'exists:board_titles,id'],
        ]);

        $uploadedFile = $request->file('img');
        $fileName = time() . '_' . $uploadedFile->getClientOriginalName();
        $request->file('img')->storeAs('/boardMembersData/image', $fileName, 'public');

        $boardMember = new BoardMember();
        $boardMember->name = \request('name');
        $boardMember->description = \request('description');
        $boardMember->elected_year = \request('elected_year');
        $boardMember->img_path = $fileName;
        $boardMember->boardTitle()->associate(\request('boardTitle'));
        $boardMember->save();

        return redirect(route('admin.board.index'));
    }

    public function update(BoardMember $boardMember): Factory|View|Application
    {
        return view('adminPages/board/update', ['boardTitles' => BoardTitle::all()->sortBy('sorting_index'), 'boardMember' => $boardMember]);
    }

    public function doUpdate(Request $request, BoardMember $boardMember): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string'],
            'description' => ['required', 'string'],
            'elected_year' => ['required', 'integer', 'min:' . now()->year - 4],
            'img' => ['sometimes', 'image'],
            'boardTitle' => ['required', 'exists:board_titles,id'],
        ]);

        if ($request->file() != null){
            $uploadedFile = $request->file('img');
            $fileName = time() . '_' . $uploadedFile->getClientOriginalName();
            $request->file('img')->storeAs('/boardMembersData/image', $fileName, 'public');
            $boardMember->img_path = $fileName;
        }

        $boardMember->name = \request('name');
        $boardMember->description = \request('description');
        $boardMember->elected_year = \request('elected_year');
        $boardMember->boardTitle()->associate(\request('boardTitle'));
        $boardMember->save();

        return redirect(route('admin.board.index'));
    }

    public function destroy(BoardMember $boardMember): RedirectResponse
    {
        $boardMember->delete();
        return redirect(route('admin.board.index'));
    }

}
