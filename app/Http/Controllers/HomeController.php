<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function hello()
    {
        $fruits = ['banana', 'orange', 'peach', 'strawberry'];
    
        return view('hello', [
            'fruits' => $fruits
        ]);
    }

    public function contact()
    {
        return view('contact');
    }
}
