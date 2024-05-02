<?php

namespace App\Models\Admin\Category;

use App\Models\Admin\Post\Post;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'slug', 'thumbnail', 'author_id', 'status'];


    public function posts()
    {
        return $this->belongsToMany(Post::class,'post_categories');
    }
    public function subcategories()
    {
        return $this->hasMany(SubCategory::class, 'category_id');
    }
}
