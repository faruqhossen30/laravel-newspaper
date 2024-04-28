<?php

namespace App\Models\Admin\Category;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostSubCategory extends Model
{
    use HasFactory;

    protected $fillable = ['post_id','sub_category_id'];
}
