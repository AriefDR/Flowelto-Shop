<?php

namespace App\Http\Controllers;

use App\Category;
use App\Flower;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Str;

class FlowerController extends Controller
{

    public function index()
    {
        $flowers = Flower::all();
        return view('managerView.indexFlowers', compact('flowers'));
    }

    public function search(Request $request)
    {
        $category = Category::all();
        $search_q = $request->input('search');
        $flowers = Flower::paginate(8);

        if (Auth::user() && Auth::user()->role == "manager") {
            if (!empty($search_q))
                $flowers = Flower::where('flower_name', 'like', '%' . $search_q . '%')
                    ->orWhereHas('category', function ($query) use ($search_q) {
                        $query->where('category_name', 'like', '%' . $search_q . '%');
                    })->paginate(8);
            return view('managerView.searchManager', compact('flowers', 'category'));
        } else if (!Auth::user() || Auth::user()->role == "user") {
            if (!empty($search_q))
                $flowers = Flower::where('flower_name', 'like', '%' . $search_q . '%')
                    ->orWhereHas('category', function ($query) use ($search_q) {
                        $query->where('category_name', 'like', '%' . $search_q . '%');
                    })->paginate(8);
            return view('search', compact('flowers', 'category'));
        }
    }

    public function create()
    {
        $flowers = Flower::all();
        $category = Category::all();
        return view('managerView.createFlowers', compact('flowers', 'category'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required|numeric',
            'flowerName' => 'required|min:5|unique:flowers,flower_name',
            'flowerStock' => 'required|integer|min:1',
            'flowerPrice' => 'required|integer|min:50000',
            'desFlower' => 'required|min:20',
            'flowerImg' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $filename = time() . Hash::make($request->file('flowerImg')->getClientOriginalName()) . '.' . $request->file('flowerImg')->extension();
        $request->file('flowerImg')->storeAs('public/flower', $filename);

        $slug = Str::slug($request->flowerName, '-');

        $flowers = new Flower;
        $flowers->flower_name = $request->flowerName;
        $flowers->slug = $slug;
        $flowers->stock = $request->flowerStock;
        $flowers->flower_description = $request->desFlower;
        $flowers->category_id = $request->category;
        $flowers->flower_price = $request->flowerPrice;
        $flowers->flower_img = $filename;
        $flowers->save();
        return redirect()->route('flower.index')->with('success', 'Success input data Flower');
    }


    public function show($slug)
    {
        $flower = Flower::where('slug', $slug)->first();
        if (empty($flower)) abort(404);
        if (!Auth::check() || Auth::user()->role == "user") {
            $category = Category::all();
            return view('detail', compact('flower', 'category'));
        }
        return view('managerView.detailFlower', compact('flower'));
    }


    public function edit($id)
    {
        $flower = Flower::findOrFail($id);
        $category = Category::all();
        return view('managerView.editFlowers', compact('flower', 'category'));
    }


    public function update(Request $request, $id)
    {
        $flowers = Flower::findOrFail($id);

        $request->validate([
            'category' => 'required|numeric',
            'flowerName' => 'required|min:5|unique:flowers,flower_name',
            'flowerStock' => 'required|integer|min:1',
            'flowerPrice' => 'required|integer|min:50000',
            'desFlower' => 'required|min:20',
            'flowerImg' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);
        $flowers->flower_name = $request->flowerName;
        $flowers->stock = $request->flowerStock;
        $flowers->flower_description = $request->desFlower;
        $flowers->category_id = $request->category;
        $flowers->flower_price = $request->flowerPrice;

        if ($request->hasFile('flowerImg')) {
            $filename = time() . Hash::make($request->file('flowerImg')->getClientOriginalName()) . '.' . $request->file('flowerImg')->extension();
            $request->file('flowerImg')->storeAs('public/img', $filename);
            $flowers->flower_img = $filename;
        } else {
            $flowers->flower_img = $flowers->flower_img;
        }

        $flowers->update();
        return redirect()->route('flower.index');
    }
    public function destroy($id)
    {
        $flowers = Flower::findOrFail($id);
        $flowers->delete();

        return redirect()->back()->with('success', 'Flower has been Delete');
    }
}
