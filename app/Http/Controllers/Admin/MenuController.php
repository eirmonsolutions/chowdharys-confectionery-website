<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MenuCategory;
use App\Models\MenuSubCategory;
use App\Models\MenuItem;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function dashboard()
    {
        $categories = MenuCategory::with(['subCategories.items', 'items'])->latest()->get();
        $subCategories = MenuSubCategory::with('category')->latest()->get();
        $items = MenuItem::with(['category', 'subCategory'])->latest()->get();

        return view('dashboard', compact('categories', 'subCategories', 'items'));
    }

    public function storeCategory(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        MenuCategory::create([
            'name' => $request->name,
        ]);

        return back()->with('success', 'Category added successfully.');
    }

    public function storeSubCategory(Request $request)
    {
        $request->validate([
            'menu_category_id' => 'required|exists:menu_categories,id',
            'name' => 'required|string|max:255',
        ]);

        MenuSubCategory::create([
            'menu_category_id' => $request->menu_category_id,
            'name' => $request->name,
        ]);

        return back()->with('success', 'Sub category added successfully.');
    }

    public function storeMenuItem(Request $request)
    {
        $request->validate([
            'menu_category_id' => 'required|exists:menu_categories,id',
            'menu_sub_category_id' => 'nullable|exists:menu_sub_categories,id',
            'name' => 'required|string|max:255',
            'price' => 'nullable|numeric',
        ]);

        MenuItem::create([
            'menu_category_id' => $request->menu_category_id,
            'menu_sub_category_id' => $request->menu_sub_category_id,
            'name' => $request->name,
            'price' => $request->price,
        ]);

        return back()->with('success', 'Menu item added successfully.');
    }

    public function getSubCategories($categoryId)
    {
        return MenuSubCategory::where('menu_category_id', $categoryId)
            ->select('id', 'name')
            ->get();
    }
}