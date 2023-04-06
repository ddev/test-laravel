<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function index()
    {
        $messages = Message::all();
        return view('messages.index', compact('messages'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required',
        ]);

        Message::create($request->all());
        return redirect()->route('messages.index')->with('success', 'Message saved successfully.');
    }
}
