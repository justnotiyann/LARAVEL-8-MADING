<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        
    $credentials = $request->validate([
        'email' => 'required',
        'password' => 'required',
    ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
 
        //jika berhasil login maka diarahkan ke routes dashboard
        return redirect()->intended('dashboard');
    }

       return back()->with('fail','Something Wrong');
    }

    public function register(Request $request){
        $request->validate([
            'name' => 'required|string|min:3|regex:/^[a-zA-Z\s]+$/',
            'email' => 'required|min:3|email|unique:users',
            'username' => 'required|min:3|unique:users',
            'password' => 'required|min:6',
        ]);
    
       User::create([
        'name'=>$request->name,
        'email'=>$request->email,
        'username'=>$request->email,
        'password'=>bcrypt($request->password),
       ]);
       
       echo'Berhasil disimpan';
    }

    
}
