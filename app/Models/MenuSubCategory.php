<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuSubCategory extends Model
{
    protected $fillable = ['menu_category_id', 'name'];

    public function category()
    {
        return $this->belongsTo(MenuCategory::class, 'menu_category_id');
    }

    public function items()
    {
        return $this->hasMany(MenuItem::class);
    }
}