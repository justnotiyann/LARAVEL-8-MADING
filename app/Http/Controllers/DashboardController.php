<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        return view('home');

    }

    public function login()
    {
        return view('login');

    }

    public function register()
    {
        return view('register');
    }


    public function dashboard()
    {
        $result = Berita::orderBy('created_at', 'desc')->get();
        // return view('admin');
        return view('admin', [
            'result' => $result
        ]);
    }

}
