<?php

namespace App\Http\Controllers;

use App\Models\Admin\Category\Category;
use App\Models\Admin\Post\Post;
use Illuminate\Http\Request;

class SinglapostController extends Controller
{
    public function singlepost(Request $request, $id){


        $post = Post::firstWhere('id', $id);
        $latestnews   = Post::latest()->take(6)->get();
        // return  $post;
        return view('singlepost',compact('post','latestnews'));
    }
}
