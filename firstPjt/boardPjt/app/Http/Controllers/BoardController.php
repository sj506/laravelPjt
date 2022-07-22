<?php

namespace App\Http\Controllers;

use App\Models\Board;
use Illuminate\Console\View\Components\Task;
use Illuminate\Http\Request;

class BoardController extends Controller
{
    public function index()
    {
        return view('board/index')->with('list', Board::orderBy('id', 'DESC')->get());
    }

    public function create()
    {
        return view('board/create');
    }

    public function store(Request $req)
    {
        $board = new Board([
            "title" => $req->input("title"),
            "ctnt" => $req->input("ctnt"),
            "hits" => 0,
        ]);

        $board->save();

        return redirect()->route('boards');
    }

    public function show(Request $req)
    {
        $id = $req->input('id');
        $board = Board::findOrFail($id);

        $board->hits++;
        $board->save();

        return view('board/show')->with('data', Board::findOrFail($id));
    }

    public function del(Request $req)
    {
        $id = $req->input('id');

        Board::findOrFail($id)->delete();

        return redirect()->route('boards');
    }

    public function upd(Request $req)
    {
        $id = $req->input('id');

        return view('board/upd')->with('data', Board::findOrFail($id));
    }

    public function updProc(Request $req)
    {
        $id = $req->input('id');
        $title = $req->input('title');
        $ctnt = $req->input('ctnt');

        $board = Board::findOrFail($id);

        $board->title = $title;
        $board->ctnt = $ctnt;

        $board->save();

        return redirect()->route('boards');
    }
}
