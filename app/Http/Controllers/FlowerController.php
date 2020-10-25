<?php

namespace App\Http\Controllers;

use App\Category;
use App\Flower;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class FlowerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $flowers = Flower::all();
        return view('managerView.indexFlowers', compact('flowers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $flowers = Flower::all();
        return view('managerView.createFlowers', compact('flowers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $flowers = new Flower;
        $request->validate([
            'category' => 'required|numeric',
            'flowerName' => 'required|min:5|unique:flowers,flower_name',
            'flowerPrice' => 'required|integer|min:50000',
            'desFlower' => 'required|min:20',
            'flowerImg' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        if ($request->hasFile('flowerImg')) {
            $filename = time() . Hash::make($request->file('flowerImg')->getClientOriginalName()) . '.' . $request->file('flowerImg')->extension();
            $request->file('flowerImg')->storeAs('/public/img/', $filename);

            $flowers->flower_name = $request->flowerName;
            $flowers->flower_description = $request->desFlower;
            $flowers->flower_price = $request->flowerPrice;
            $flowers->flower_img = $filename;
            $flowers->category_id = $request->category;
            $flowers->save();

            return redirect()->route('flower.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Flower  $flower
     * @return \Illuminate\Http\Response
     */
    public function show(Flower $flower)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Flower  $flower
     * @return \Illuminate\Http\Response
     */
    public function edit(Flower $flower)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Flower  $flower
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Flower $flower)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Flower  $flower
     * @return \Illuminate\Http\Response
     */
    public function destroy(Flower $flower)
    {
        //
    }
}
