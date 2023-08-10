<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class PostIndexController extends Controller
{
    public function __invoke()
    {
        return view('posts.index');
    }
}
