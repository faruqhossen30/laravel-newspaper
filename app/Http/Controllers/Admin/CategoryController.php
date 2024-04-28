<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Image ;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::latest()->paginate(10);
        return view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request->all();

        $request->validate([
            'name'=>'required'
        ]);

        $data=[
            'name'=> $request->name,
            'slug'=> Str::slug($request->name),
            'author_id'=> Auth::user()->id,
        ];

        if($request->file('thumbnail')){
            $file_name = $request->file('thumbnail')->store('thumbnail/category');
            $data['thumbnail'] = $file_name;
        }

        Category::create($data);

        return redirect()->route('category.index');
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
        $category = Category::where('id', $id)->first();
        // return $category;
        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = [
            'name'=> $request->name,
            'slug'=> Str::slug($request->name),
            'author_id'=> Auth::user()->id,
        ];
        if($request->file('thumbnail')){
            $file_name = $request->file('thumbnail')->store('portfolio/thumbnail');
            $data['thumbnail'] = $file_name;
        }


        Category::firstwhere('id', $id)->update($data);
        Session::flash('update');
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);
        Storage::disk('public')->delete('portfolio/thumbnail' . $category->image);
        $category->delete();
        return redirect()->route('category.index');
    }
}
