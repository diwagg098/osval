<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $content = DB::table('product')->where('status', 'ready')->get();
        return view('welcome', compact('content'));
    }
}
