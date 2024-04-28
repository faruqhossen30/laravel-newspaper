<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category\Category;
use App\Models\Admin\Category\PostCategory;
use App\Models\Admin\Category\PostSubCategory;
use App\Models\Admin\Category\SubCategory;
use App\Models\Admin\Post\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::latest()->paginate(10);
        return view('admin.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $subcategories = SubCategory::get();
        return view('admin.post.create', compact('categories','subcategories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // return $request->all();

        // $request->validate([
        //     'title'            => 'required',
        //     'description'      => 'required',
        //     'video_ifrem'      => 'required',
        //     'meta_title'       => 'required',
        //     'meta_description' => 'required',
        //     'keyword'          => 'required',
        //     'status'           => 'required'
        // ]);

        $data = [
            'title'            => $request->title,
            'slug'             => Str::slug($request->title),
            'description'      => $request->description,
            'video_ifrem'      => $request->video_ifrem,
            'meta_title'       => $request->meta_title,
            'meta_description' => $request->meta_description,
            'keyword'          => $request->keyword,
            'visibility'       => $request->visibility,
            'status'           => $request->status,

        ];

        if ($request->file('thumbnail')) {
            $file_name = $request->file('thumbnail')->store('thumbnail/post');
            $data['thumbnail'] = $file_name;
        }

        $post =  Post::create($data);

        $categoryids = $request->category_ids;
        $subcategoryids = $request->sub_category_ids;
        $postid      = $post->id;

        // return $subcategoryids ;
        foreach ($categoryids as $key => $catid) {
            PostCategory::create([
                'category_id' => $catid,
                'post_id'     => $postid
            ]);
        }


        foreach($subcategoryids as $key => $subcatid) {

            PostSubCategory::create([
                'sub_category_id' => $subcatid,
                'post_id'         => $postid
            ]);
        }
        return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::with('categories','subcategories')->where('id', $id)->first();
        $categories = Category::all();
        $sub_categories = SubCategory::all();
        // return $post;
        $cat_ids = $post->categories->pluck('id')->toArray();
        // return $cat_ids;
        $sub_cat_ids = $post->subcategories->pluck('id')->toArray();
        // return $sub_cat_ids;

        return view('admin.post.edit', compact('post', 'categories','sub_categories','cat_ids','sub_cat_ids','sub_cat_ids'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = [
            'title'            => $request->title,
            'slug'             => Str::slug($request->title),
            'description'      => $request->description,
            'video_ifrem'      => $request->video_ifrem,
            'meta_title'       => $request->meta_title,
            'meta_description' => $request->meta_description,
            'keyword'          => $request->keyword,
            'visibility'       => $request->visibility,
            'status'           => $request->status,
        ];
        if ($request->file('thumbnail')) {
            $file_name = $request->file('thumbnail')->store('thumbnail/post');
            $data['thumbnail'] = $file_name;
        }

        if(!empty($request->category_ids)){
            PostCategory::where('post_id', $id)->delete();
             foreach($request->category_ids as $cat){
                PostCategory::create([
                    'post_id'=> $id,
                    'category_id' => $cat
                ]);
             }
        }
        if(!empty($request->sub_category_ids)){
            PostSubCategory::where('post_id', $id)->delete();
             foreach($request->sub_category_ids as $subcat){
                PostSubCategory::create([
                    'post_id'=> $id,
                    'sub_category_id' => $subcat
                ]);
             }
        }

        Post::firstwhere('id', $id)->update($data);
        Session::flash('update');
        return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::findOrFail($id);
        Storage::delete($post->thumbnail);
        $post->delete();
        return redirect()->route('post.index');
    }
}
