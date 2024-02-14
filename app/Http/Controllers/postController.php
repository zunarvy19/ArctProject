<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class postController extends Controller
{

    public function dashboardUser(){

        $data = Post::all();
        return view('/dashboardUser',[
            'data' => $data
        ]);
    }
    public function news(Post $post)
    {
        $data = Post::all();
        return view('/news',[
            'data' => $data
        ]);
    }
}
