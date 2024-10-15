<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\model\User; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;
use Whoops\Run;

class FormController extends Controller
{
    public function insertData(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:4|max:12',
        ]);

        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));  
        $user->save();

        $request->session()->flash('status', 'Registration successful!');
        $request->session()->put('user', $user->name);
        return redirect('/');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->input('email'))->first();

        if ($user && password_verify($request->input('password'), $user->password)) {
            $request->session()->put('user', $user->name);
            return redirect('/');
        }

        return back()->withErrors(['email' => 'The provided credentials do not match our records.']);
    }

    public function logout()
    {
        session()->flush(); 
        return redirect('/');  
    }
}
