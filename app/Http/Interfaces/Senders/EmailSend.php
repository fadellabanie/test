<?php

namespace App\Http\Interfaces\Senders;

use App\Mail\AdvertisementEmail;
use Illuminate\Support\Facades\Mail;
use App\Http\Interfaces\Senders\SendableInterface;

class EmailSend implements SendableInterface
{

    public $to; ## Mobile Number 966530976456
    public $message; ## English Message

    public function __construct($to, $message)
    {
        $this->to = $to;
        $this->message = $message;
    }

    public function notifiable()
    {
       // Mail::to($this->to)->send(new AdvertisementEmail($this->message));
    }
}