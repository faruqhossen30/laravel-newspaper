<?php

namespace App\Models\Admin\Post;

use App\Models\Admin\Category\Category;
use App\Models\Admin\Category\SubCategory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'description',
        'thumbnail',
        'meta_title',
        'meta_description',
        'video_ifrem',
        'tags',
        'visibility',
        'keyword',
        'status',
        'division_id',
        'district_id',
        'upazila_id',
        'user_id',
    ];


    public function categories()
    {
        return $this->belongsToMany(Category::class, 'post_categories');
    }
    public function subcategories()
    {
        return $this->belongsToMany(SubCategory::class, 'post_sub_categories');
    }
}
