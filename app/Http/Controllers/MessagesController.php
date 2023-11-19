<?php

namespace App\Http\Controllers;

use App\Models\Messages;
use App\Models\User;
use Illuminate\Http\Request;

class MessagesController extends Controller {

    function send(Request $request){
        // dd($request->all());
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email',
            'subject' => 'required|string',
            'message' => 'required|string'
        ]);

        try {
            Messages::create($validated);

            notify('You have a new inquiry from '.$request->name)
                ->line("Name: ".$request->name)
                ->line("Email Address: ".$request->email)
                ->line("Subject: ".$request->subject)
                ->line("Message:")
                ->line($request->message)
                ->send(User::all(), ['mail']);
        } catch (\Throwable $th) {
            return back()->with('error', 'We encountered an error while sending your message. Please try again!');
        }

        return back()->with('success', 'Your message has been sent successfully!');
    }

}
