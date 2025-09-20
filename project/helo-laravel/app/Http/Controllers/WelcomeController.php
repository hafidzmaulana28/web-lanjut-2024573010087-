<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function show()
    {
        $message = "welcome to the club";
        return view('mywelcome', ['message' => $message]);
    }
}
