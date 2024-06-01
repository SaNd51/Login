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
        return view('events/user');
    }

    public function store(Request $request)
    {
        $users = new Event;

        $users->email = $request->email;
        $users->password = $request->password;

        $users->save();

        return redirect('/');

    }
}