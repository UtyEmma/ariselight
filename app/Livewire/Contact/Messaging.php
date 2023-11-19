<?php

namespace App\Livewire\Contact;

use App\Enums\Roles;
use App\Models\Messages;
use App\Models\User;
use Livewire\Component;

class Messaging extends Component {

    public $name, $email, $subject, $message;

    public $success, $error;

    function send(){
        $this->error = '';
        $this->success = '';

        $validated = $this->validate([
            'name' => 'required|string',
            'email' => 'required|string|email',
            'subject' => 'required|string',
            'message' => 'required|string'
        ]);

        try {
            Messages::create($validated);
            $admins = User::where('role', Roles::ADMIN)->get();

            notify('You have a new inquiry from '.$this->name)
                ->line("Name: ".$this->name)
                ->line("Email Address: ".$this->email)
                ->line("Subject: ".$this->subject)
                ->line("Message:")
                ->line($this->message)
                ->send($admins, ['mail']);
        } catch (\Throwable $th) {
            $this->error = 'We encountered an error while sending your message. Please try again!';
        }

        $this->reset();

        $this->success = 'Your message has been sent successfully!';
    }

    public function render()
    {
        return view('livewire.contact.messaging');
    }
}
