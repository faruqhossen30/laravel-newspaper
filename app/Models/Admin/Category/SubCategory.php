<?php

namespace App\Models\Admin\Category;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'thumbnail',
        'author_id',
        'category_id',

    ];

    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }
}
