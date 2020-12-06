<?php

namespace App\Http\Controllers;

use App\Flower;
use App\Transaction;
use App\User;

class ManagerController extends Controller
{
    /**
     * Fungsi ini akan menampilkan home manager
     * Halaman ini khusus untuk manager dan terdapat dashboard simple
     * Yang brisi data nya berisi jumlah Transaksi, Users, Flowers
     */
    public function getHome()
    {
        $userCount = User::all()->count();
        $flowers = Flower::all();
        $countData = Flower::all()->count();
        $countTR = Transaction::all()->count();
        return view('managerView.homeManager', compact('flowers', 'countData', 'userCount', 'countTR'));
    }
}
