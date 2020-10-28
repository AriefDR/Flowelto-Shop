<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CategoryFlowerController extends Controller
{
    public function index()
    {
        $category = Category::all();
        return view('managerView.indexCategory', compact('category'));
    }

    public function create()
    {
        return view('managerView.createCategory');
    }

    public function store(Request $request)
    {
        $request->validate([
            'categoryName' => 'required|min:5|unique:category_flowers,category_name',
            'categoryImg' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $category = new Category;
        $category->category_name = $request->categoryName;

        if ($request->has('categoryImg')) {
            $filename = time() . Hash::make($request->file('categoryImg')->getClientOriginalName()) . '.' . $request->file('categoryImg')->extension();
            $request->file('categoryImg')->storeAs('public/category', $filename);
            $category->category_img = $filename;
        }

        $category->save();
        return redirect()->route('category.index')->with('success', 'Success Input Data Category');
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('managerView.editCategory', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $request->validate([
            'categoryName' => 'required|min:5|unique:category_flowers,category_name',
            'categoryImg' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $category->category_name = $request->categoryName;
        if ($request->has('categoryImg')) {
            $filename = time() . Hash::make($request->file('categoryImg')->getClientOriginalName()) . '.' . $request->file('categoryImg')->extension();
            $request->file('categoryImg')->storeAs('public/category', $filename);
            $category->category_img = $filename;
        }

        $category->update();
        return redirect()->route('category.index')->with('success', 'Success Update Data Category');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->back()->with('success', 'Category has been Delete');
    }
}
