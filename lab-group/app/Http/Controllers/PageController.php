<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PageController extends Controller
{   
    public function home()
    {
        $message = "Welcome to homepack.";
        return view('pages.home', compact('message'));
    }

    public function about()
    {
        $message = "this is about the page.";
        return view('pages.about', compact('message'));
    }

    public function contact()
    {
        $message = "reach us through the contact pages.";
        return view('pages.contact', compact('message'));
    }
}
