<?php

namespace App\Http\Interfaces\Senders;

use App\Http\Interfaces\Senders\SendableInterface;
use App\Http\Interfaces\Senders\SmsSend;
use App\Http\Interfaces\Senders\FirebaseNotificationSend;
use Illuminate\Support\Facades\Log;


class SenderFactory
{
    public function initialize(string $type, $to, $message, $title = ""): SendableInterface
    {
        switch ($type) {
            case 'firebase-notification':
                $class =  new FirebaseNotificationSend($to, $title, $message);
                $class->notifiable();
                return $class;
            case 'sms':
                $class =  new SmsSend($to, $message);
                $class->notifiable();
                return $class; 
            case 'email':
                $class =  new EmailSend($to, $message);
                $class->notifiable();
                return $class;
            default:
                throw new \Exception("Sender method not supported");
                break;
        }
    }
}