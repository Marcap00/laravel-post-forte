<?php

namespace App\Http\Controllers\api;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index() {
        $posts = Post::with('categories', 'user')->orderBy('date','desc')->get();

        return response()->json([
            "success" => true,
            "data" => $posts,
        ]);
    }
}
