<?php

namespace App\Http\Controllers;

use App\Category;
use App\Flower;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CategoryFlowerController extends Controller
{
    /**
     * Fungsi ini akan menampilkan halaman category
     * Bagian ini hanya bisa di lihat oleh manager
     * User tidak dapat mengakses halaman ini
     */
    public function index()
    {
        $category = Category::paginate(8);
        return view('managerView.indexCategory', compact('category'));
    }
    /**
     * Fungsi ini akan befungsi sebagai search engine
     * Search Engine ini hanya mencari category yang berada di DB
     * Dan menampilkan 1 halam 8 item dengan menggunakan pagination
     */
    public function searchCategory($asdas)
    {
        $category = Category::all();
        $flowers = Flower::with('category')->whereHas('category', function ($query) use ($asdas) {
            $query->where('slug', $asdas);
        })->paginate(8);
        return view('search', compact('flowers', 'category'));
    }
    /**
     * Fungsi ini akan menampilkan halaman create category
     * Tampilan ini berisi form yang harus di isi oleh manager
     * Dan hanya dapat di akses oleh manager
     */
    public function create()
    {
        return view('managerView.createCategory');
    }
    /**
     * Fungsi ini akan befungsi sebagai insert data ke dalam DB
     * Terdapat beberapa validasi yang harus di sesuai
     * Gambar akan di hash dan memasukan semua data category ke DB
     */
    public function store(Request $request)
    {
        $request->validate([
            'categoryName' => 'required|min:5|unique:category_flowers,category_name',
            'categoryImg' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $category = new Category;
        $category->category_name = $request->categoryName;
        $category->slug = Str::slug($request->categoryName, '-');

        if ($request->has('categoryImg')) {
            $filename = time() . Hash::make($request->file('categoryImg')->getClientOriginalName()) . '.' . $request->file('categoryImg')->extension();
            $request->file('categoryImg')->storeAs('category', $filename, 'public');
            $category->category_img = $filename;
        }

        $category->save();
        return redirect()->route('category.index')->with('success', 'Success Input Data Category');
    }
    /**
     * Fungsi ini akan menampilkan edit category
     * Tampilan ini akan beruba form yang berisi data dari DB
     * Yang dapat di ubah sesuai keingin manager
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('managerView.editCategory', compact('category'));
    }
    /**
     * Fungsi ini akan befungsi sebagai update data category
     * Terdapat beberapa validasi yang harus sesuai
     * jika validasi berhasil maka data category akan terupdate
     */
    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $request->validate([
            'categoryName' => 'required|min:5|unique:category_flowers,category_name',
            'categoryImg' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $category->category_name = $request->categoryName;
        $category->slug = Str::slug($request->categoryName, '-');

        if ($request->has('categoryImg')) {
            $filename = time() . Hash::make($request->file('categoryImg')->getClientOriginalName()) . '.' . $request->file('categoryImg')->extension();
            $request->file('categoryImg')->storeAs('category', $filename, 'public');
            $category->category_img = $filename;
        }

        $category->update();
        return redirect()->route('category.index')->with('success', 'Success Update Data Category');
    }
    /**
     * Fungsi ini akan befungsi sebagai delete data category
     * Hanya manager yang dapat melakukan fungsi ini
     * Data akan terhapus dari DB untuk selamanya
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->route('category.index')->with('success', 'Category has been Delete');
    }
}
