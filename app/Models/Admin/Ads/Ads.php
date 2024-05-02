<?php

namespace App\Models\Admin\Ads;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ads extends Model
{
    use HasFactory;
    protected $fillable = ['header_ads','post_ads','footer_ads','sidebar_ads'];
}
