<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index() {

        $events = array();

        return view('event.index', compact('events'));

    }

    public function show(Event $event) {

        return view('event.show', compact('event'));

    }

    public function create() {

        return view('event.create');

    }
}
