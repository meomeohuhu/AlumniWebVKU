<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForumController
{
    public function index() {
        return view('forum');
    }
}
