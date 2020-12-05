<?php

namespace App\Http\Controllers;

use App\Address;
use App\Category;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
        $remember = $request->input('remember');
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $remember)) {
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

        return redirect()->route('login')->with('success', 'Your Account has Been Created');
    }

    public function getchangePassword()
    {
        if (Auth::user()->role == "manager")
            return view('managerView.changePassword');
        else {
            $category = Category::all();
            return view('changepassword', compact('category'));
        }
    }

    public function postchangePassword(Request $request)
    {
        $request->validate([
            'newPass' => 'required|min:8|confirmed'
        ]);

        if (!(Hash::check($request->oldPass, Auth::user()->password)))
            return back()->withErrors(['Your Current Password is Does Not Match']);
        if (strcmp($request->oldPass, $request->newPass) == 0)
            return back()->withErrors('Your New Password cannot be The Same with the Current Password');

        $user = Auth::user();
        $user->password = bcrypt($request->newPass);
        $user->save();

        if (Auth::user()->role == "manager")
            return redirect()->route('homeManager')->with('success', 'Password Changed Successfuly');
        else
            return redirect()->route('home')->with('success', 'Password Changed Successfuly');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
