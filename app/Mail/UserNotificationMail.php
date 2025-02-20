<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserNotificationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $subject;
    public $messageData;
    public $template;

    public function __construct($subject, $messageData, $template)
    {
        $this->subject = $subject;
        $this->messageData = $messageData;
        $this->template = $template;
    }

    public function build()
    {
        return $this->subject($this->subject)
                    ->view($this->template)
                    ->with($this->messageData);
    }
}
