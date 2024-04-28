<?php

namespace App\Http\Controllers\Admin\Ajax;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category\SubCategory;
use Illuminate\Http\Request;

class AjaxCategoryController extends Controller
{
    public function CategorytoSubcategory(Request $request, $id)
    {
        $subcategory = SubCategory::where('category_id', $id)->orderBy('name', 'asc')->get();

        // return $subcategory;
        $data = view('admin.post.ajax.ajaxcategory', compact('subcategory'))->render();
        return $data;
    }
}
