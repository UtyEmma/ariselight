<?php

namespace App\Services;

use App\Notifications\MainNotification;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\Notification;

class Notify extends MailMessage {

    public function __construct(string $subject = '') {
        $this->subject($subject);
    }

    function send($receivers, $channels){
        return Notification::send($receivers, new MainNotification($channels, $this));
    }

    function sendNow($receivers, $channels){
        return Notification::sendNow($receivers, new MainNotification($channels, $this));
    }

}
