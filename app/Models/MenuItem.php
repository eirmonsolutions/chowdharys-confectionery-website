<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    protected $fillable = [
        'menu_category_id',
        'menu_sub_category_id',
        'name',
        'price',
    ];

    public function category()
    {
        return $this->belongsTo(MenuCategory::class, 'menu_category_id');
    }

    public function subCategory()
    {
        return $this->belongsTo(MenuSubCategory::class, 'menu_sub_category_id');
    }
}