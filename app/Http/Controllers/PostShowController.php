<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostShowController extends Controller
{
    public function __invoke(Post $post)
    {
        dd($post);
    }
}
