<?php

namespace App\Http\Controllers\Api\Mobile\V1\Captains;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
  
    public function home()
    {
        dd(Auth::id());
        dd('sdf');
    }
}
