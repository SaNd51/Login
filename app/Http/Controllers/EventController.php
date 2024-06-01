<?php

namespace App\Http\Controllers;

use Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function user()
    {
        return view('events.user');
    }

    public function store(Request $request)
    {
        $users = new Event;

        $request->email;
        $request->password;

        $users::save();

        return view('index');

    }
}