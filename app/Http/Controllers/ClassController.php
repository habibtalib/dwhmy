<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClassesController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index() {

        return view('classes.index', compact('classes'));

    }

    public function show(Classes $classes) {

        return view('classes.show', compact('classes'));

    }

    public function create() {

        return view('classes.create');

    }
}
