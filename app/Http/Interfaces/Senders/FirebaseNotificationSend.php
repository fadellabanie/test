<?php

namespace App\Http\Interfaces\Senders;

use App\Http\Interfaces\Senders\SendableInterface;
use App\Http\Traits\Notification;
use App\Models\SnapchatOrder;

class FirebaseNotificationSend implements SendableInterface
{
    use Notification;

    public $to; ## device token
    public $title;
    public $message;

    public function __construct($to, $title, $message)
    {
        $this->to = $to;
        $this->title = $title;
        $this->message = $message;
    }

    public function notifiable()
    {
       return $this->send($this->to, $this->title, $this->message);
    }
}