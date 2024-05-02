<?php

namespace App\Http\Controllers;

use App\Models\Admin\Category\Category;
use App\Models\Admin\Post\Post;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index(){

        $lastnews     = Post::latest()->where('status',1)->first();
        $latestnews   = Post::latest()->take(4)->get();
        $categorypost = Category::with('posts')->get();
        // $datesearch = Post::whereDate('created_at', $request->from_date)->paginate(10);
        // return $categorypost  ;
        return view('homepage' ,compact('lastnews','latestnews','categorypost'));
    }
}
