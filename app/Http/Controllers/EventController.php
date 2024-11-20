<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController
{
    public function index() {
        return view('events');
    }
}
