<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendEmail extends Controller
{
   public function index() 
     {
        Mail::to($request->user())->send(new OrderShipped($order));
    }
}
