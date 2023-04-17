<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Product extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'price',
        'category_id',
    ];
    protected $table = 'products';

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
