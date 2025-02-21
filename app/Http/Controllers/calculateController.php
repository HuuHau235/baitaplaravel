<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculateController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function calculateTotal(Request $request)
    {
        $a = $request-> a;
        $b = $request-> b;
        $total = $a + $b;
        return view('welcome', ['result' => $total]);
    }
}