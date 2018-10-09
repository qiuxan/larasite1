<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //

    public function home()
    {

        $task = [

            'Go to store',
            'Go to market',
            'Go to work'

        ];
        return view('welcome', [
            'task' => $task,
            'foo' => request('title'),

        ]);

    }

    public function about()
    {
        return view('about');


    }

    public function contact()
    {
        return view('contact');


    }
}