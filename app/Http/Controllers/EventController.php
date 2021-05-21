<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    //
    public function home(){
        return view('events.home');
    }

    public function about(){
        return view('events.about');
    }

    public function speakers(){
        return view('events.speakers');
    }

    public function schedule(){
        return view('events.schedule');
    }

    public function pricing(){
        return view('events.pricing');
    }

    public function blog(){
        return view('events.blog');
    }

    public function contact(){
        return view('contact.blog');
    }



}
