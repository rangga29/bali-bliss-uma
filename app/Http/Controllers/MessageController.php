<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MessageController extends Controller
{
    public function index()
    {
        return Message::all();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'max:254'],
            'phone' => ['required'],
            'message' => ['required'],
        ]);

        do {
            $randomString = Str::random(20);
        } while (Message::where('ucode', $randomString)->exists());
        $data['ucode'] = $randomString;

        Message::create($data);
        return redirect()->back()->with('success', 'Your message has been submitted successfully.');
    }

    public function show(Message $message)
    {
        return $message;
    }
}
