<?php

namespace App\Http\Controllers;

use App\Models\Admin\Category\Category;
use App\Models\Admin\Post\Post;
use Illuminate\Http\Request;

class CategoryPostController extends Controller
{
   public function categorypost(Request $request ,$id){

    $category     = Category::firstWhere('id', $id);
    $latestnews   = Post::latest()->take(6)->get();
    $categorypost = Category::with('posts') ->orderBy('id', 'asc')
    ->where('status', 1)
    ->latest()
    ->get();


    // return $categorypost ;
    return view('categorypost',compact('category','latestnews','categorypost'));

   }
}
