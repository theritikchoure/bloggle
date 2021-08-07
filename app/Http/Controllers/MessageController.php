<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        $msg = Message::orderby('id', 'desc')->get();
        return view('admin.messages', compact('msg'));
    }

    public function delete($id)
    {
        $msg = Message::find($id);
        $data = $msg->delete();

        return back()->with('success', 'Message Deleted!!');
    }
}
