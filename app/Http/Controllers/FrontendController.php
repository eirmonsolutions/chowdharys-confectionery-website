<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MenuCategory;

class FrontendController extends Controller
{
    public function menu()
    {
        $categories = MenuCategory::latest()->get();

        return view('menu', compact('categories'));
    }

    public function menuDetails($id)
    {
        $category = MenuCategory::with([
            'subCategories.items'
        ])->findOrFail($id);

        return view('menu-details', compact('category'));
    }
}