<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category\Category;
use App\Models\Admin\Category\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $subcategories = SubCategory::latest()->paginate(5);
        return view('admin.category.subcategory.index',compact('subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.category.subcategory.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request->all();
        $request->validate([
            'name'        => 'required',
            'description' => 'required',
            'category_id' => 'required'
        ]);

        $data=[
            'name'        => $request->name,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'slug'        => Str::slug($request->name),
            'author_id'   => Auth::user()->id,
        ];

        if($request->file('thumbnail')){
            $file_name = $request->file('thumbnail')->store('thumbnail/subcategory/');
            $data['thumbnail'] = $file_name;
        }

        SubCategory::create($data);

        return redirect()->route('subcategory.index');
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
        $subcategory = SubCategory::where('id', $id)->first();
        $categories = Category::all();
        // return $category;
        return view('admin.category.subcategory.edit', compact('subcategory','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = [
            'name'        => $request->name,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'slug'        => Str::slug($request->name),
            'author_id'   => Auth::user()->id,
        ];
        if($request->file('thumbnail')){
            $file_name = $request->file('thumbnail')->store('portfolio/thumbnail');
            $data['thumbnail'] = $file_name;
        }


        SubCategory::firstwhere('id', $id)->update($data);
        Session::flash('update');
        return redirect()->route('subcategory.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $subcategory = SubCategory::findOrFail($id);
        Storage::disk('public')->delete('thumbnail/subcategory/' . $subcategory->image);
        $subcategory->delete();
        return redirect()->route('subcategory.index');
    }
}
