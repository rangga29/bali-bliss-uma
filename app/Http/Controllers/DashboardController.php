<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class DashboardController extends Controller
{
    public function index()
    {
        return view('backend.dashboard', [
            'messageUnreadCount' => Message::where('is_replied', false)->count(),
            'messages' => Message::orderBy('created_at', 'DESC')->get()
        ]);
    }

    public function detail(Message $message)
    {
        return view('backend.message-detail', [
            'messageUnreadCount' => Message::where('is_replied', false)->count(),
            'message' => $message,
            'messagePhone' => $this->formatPhoneNumber($message['phone'])
        ]);
    }

    function formatPhoneNumber($phoneNumber) {
        $phoneNumber = preg_replace('/[^0-9]/', '', $phoneNumber);
        if (str_starts_with($phoneNumber, '0')) {
            $phoneNumber = '62' . substr($phoneNumber, 1);
        }
        return $phoneNumber;
    }

    public function sendEmail(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $to_email = $request->email;
        $subject = $request->subject;
        $message = $request->message;

        Mail::raw($message, function($mail) use ($to_email, $subject) {
            $mail->to($to_email)
                ->subject($subject);
        });

        return response()->json(['message' => 'Email berhasil dikirim']);
    }
}
