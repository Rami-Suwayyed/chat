<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function __construct()
    {
        $this->authorizeResource(Post::class, 'post');
    }

    public function index() {
        $posts = Post::all();
        return view('posts')->with('posts', $posts);
    }
}
