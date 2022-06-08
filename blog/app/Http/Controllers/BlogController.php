<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function index(){
        return view('home');
    }
    public function about(){
        $text = "laravel lorem";
        $text3 = "<p>laravel lorem3</p>";
        return view('about', ['text' => $text,
                             'text2' => 'laravel lorem2',
                             'text3' => $text3
                             ]);
    }
    public function article(){
        return view('article');
    }
    public function contact(){
        return view('contact');
    }
}
