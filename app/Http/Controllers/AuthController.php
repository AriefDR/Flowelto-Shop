<?php

namespace App\Http\Controllers;

use App\Address;
use App\Category;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function getLogin()
    {
        $category = Category::all();
        return view('login', compact('category'));
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended('/manager/home');
        }
        return redirect()->back()->withErrors('Email and Password doesnt match');
    }

    public function getRegister()
    {
        $category = Category::all();
        return view('register', compact('category'));
    }

    public function postRegister(Request $request)
    {
        $request->validate([
            'username' => 'required|min:5',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',
            'address' => 'required|min:10',
            'gender' => 'required|in:male,female',
            'dob' => 'required|date',
            'phone' => 'required|numeric|min:12|regex:/[0-9]{4}[0-9]{4}[0-9]{4}/'
        ]);

        $user = new User;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->gender = $request->gender;
        $user->dob = $request->dob;
        $user->phone_number = $request->phone;
        $user->role = "user";
        $user->save();

        $adrs = new Address;
        $adrs->address = $request->address;
        $user->address()->save($adrs);
        $adrs->save();

        return redirect()->route('login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
