<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        $com = Comment::orderby('id', 'desc')->get();
        return view('admin.comment', compact('com'));
    }

    public function status(Request $request, $id, $status)
    {
        $data = Comment::find($id);

        $data->status = $status;
        $data->save();
        return back();
    }
}
