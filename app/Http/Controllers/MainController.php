<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        // return view('main', ['value' => $value]);
        // return view('main')->with('value', $value);
        // echo 'I am inside the echo';

         return view('home');

    }

    public function newNote(){

    echo 'new note';

    }


}

    
