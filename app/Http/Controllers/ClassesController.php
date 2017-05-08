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

        $classes = array();

        return view('classes.index', compact('classes'));

    }

    public function show(classes $class) {

        return view('classes.show', compact('class'));

    }

    public function create() {

        return view('classes.create');

    }
}
