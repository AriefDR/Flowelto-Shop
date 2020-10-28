<?php

namespace App\Http\Controllers;

use App\Flower;
use App\User;

class ManagerController extends Controller
{
    public function getHome()
    {
        $userCount = User::all()->count();
        $flowers = Flower::all();
        $countData = Flower::all()->count();
        return view('managerView.homeManager', compact('flowers', 'countData', 'userCount'));
    }
}
