<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestingController extends Controller
{
    public function index()
    {
        echo 'hello dari controller';
    }

    public function create()
    {
        echo 'dari fungsi create';
    }
}
