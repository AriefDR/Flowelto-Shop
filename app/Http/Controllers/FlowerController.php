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
    /**
     * Fungsi ini akan menampilkan halaman
     * user harus mengikuti validasi di bawah ini
     * jika validasi ini sesuai maka user dapat login
     */
    public function index()
    {
        $flowers = Flower::paginate(8);
        return view('managerView.indexFlowers', compact('flowers'));
    }
    /**
     * Fungsi ini akan befungsi sebagai search engine untuk manager dan user
     * Search ini dapat di gunakan untuk mencari nama bunga, category, dan harga
     * Lalu akan menampilkan datanya berupa pagination 8 item untuk 1 halamnya
     */
    public function search(Request $request)
    {
        $category = Category::all();
        $search_q = $request->input('search');
        $flowers = Flower::paginate(8);

        if (Auth::user() && Auth::user()->role == "manager") {
            if (!empty($search_q))
                $flowers = Flower::where('flower_name', 'like', '%' . $search_q . '%')
                    ->orWhere('flower_price', 'like', '%' . $search_q . '%')
                    ->orWhereHas('category', function ($query) use ($search_q) {
                        $query->where('category_name', 'like', '%' . $search_q . '%');
                    })->paginate(8);
            return view('managerView.searchManager', compact('flowers', 'category'));
        } else if (!Auth::user() || Auth::user()->role == "user") {
            if (!empty($search_q))
                $flowers = Flower::where('flower_name', 'like', '%' . $search_q . '%')
                    ->orWhere('flower_price', 'like', '%' . $search_q . '%')
                    ->orWhereHas('category', function ($query) use ($search_q) {
                        $query->where('category_name', 'like', '%' . $search_q . '%');
                    })->paginate(8);
            return view('search', compact('flowers', 'category'));
        }
    }
    /**
     * Fungsi ini akan menampilkan form create flower
     * Terdapat form yang hanya dapat di isi oleh manager
     * User tidak dapat mengakses halaman ini
     */
    public function create()
    {
        $flowers = Flower::all();
        $category = Category::all();
        return view('managerView.createFlowers', compact('flowers', 'category'));
    }
    /**
     * Fungsi ini akan befungsi sebagai insert data flower ke DB
     * Terdapat beberapa validasi yang harus di ikui oleh manager
     * Gambar akan di hash dan semua data flower akan di masukan ke DB
     */
    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required|numeric',
            'flowerName' => 'required|min:5|unique:flowers,flower_name',
            'flowerPrice' => 'required|integer|min:50000',
            'desFlower' => 'required|min:20',
            'flowerImg' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $filename = time() . Hash::make($request->file('flowerImg')->getClientOriginalName()) . '.' . $request->file('flowerImg')->extension();
        $request->file('flowerImg')->storeAs('flower', $filename, 'public');

        $slug = Str::slug($request->flowerName, '-');

        $flowers = new Flower;
        $flowers->flower_name = $request->flowerName;
        $flowers->slug = $slug;
        $flowers->flower_description = $request->desFlower;
        $flowers->category_id = $request->category;
        $flowers->flower_price = $request->flowerPrice;
        $flowers->flower_img = $filename;
        $flowers->save();
        return redirect()->route('flower.index')->with('success', 'Success input data Flower');
    }

    /**
     * Fungsi ini akan menampilkan halaman detail dari flower
     * Manajer atau user dapat menghakses halaman ini
     * Tetapi berbeda url dan file blade yang berbeda
     */
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

    /**
     * Fungsi ini akan menampilkan tampilan edit flower
     * Tampilan ini berisi sebuah form yang datanya di ambil dari DB
     * Hanya manager yang dapat mengakses halam ini
     */
    public function edit($id)
    {
        $flower = Flower::findOrFail($id);
        $category = Category::all();
        return view('managerView.editFlowers', compact('flower', 'category'));
    }

    /**
     * Fungsi ini akan befungsi sebagai update flower
     * Terdapat validasi yang harus di ikuti oleh manager
     * Data akan terupdate ke DB jika semua validasi benar
     */
    public function update(Request $request, $id)
    {
        $flowers = Flower::findOrFail($id);

        $request->validate([
            'category' => 'required|numeric',
            'flowerName' => 'sometimes|required|min:5',
            'flowerPrice' => 'required|integer|min:50000',
            'desFlower' => 'required|min:20',
            'flowerImg' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);
        $flowers->flower_name = $request->flowerName;
        $flowers->flower_description = $request->desFlower;
        $flowers->category_id = $request->category;
        $flowers->flower_price = $request->flowerPrice;

        if ($request->hasFile('flowerImg')) {
            $filename = time() . Hash::make($request->file('flowerImg')->getClientOriginalName()) . '.' . $request->file('flowerImg')->extension();
            $request->file('flowerImg')->storeAs('flower', $filename, 'public');
            $flowers->flower_img = $filename;
        } else {
            $flowers->flower_img = $flowers->flower_img;
        }

        $flowers->update();
        return redirect()->route('flower.index');
    }

    /**
     * Fungsi ini akan befungsi delete data flower
     * Hanya manager yang dapat melakukan delete flower
     * Dan data flower yang di delete akan terhapus dari DB
     */
    public function destroy($id)
    {
        $flowers = Flower::findOrFail($id);
        $flowers->delete();

        return redirect()->back()->with('success', 'Flower has been Delete');
    }
}
