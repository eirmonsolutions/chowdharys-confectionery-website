<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuCategory extends Model
{
    protected $fillable = ['name'];

    public function subCategories()
    {
        return $this->hasMany(MenuSubCategory::class);
    }

    public function items()
    {
        return $this->hasMany(MenuItem::class);
    }
}