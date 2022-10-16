<?php

namespace App\Http\Controllers;

use App\Models\Wisata;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $data = Wisata::inRandomOrder()->limit(3)->get();
        return view('welcome', compact('data'));
    }
}
