<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class personalController extends Controller
{
    public function index(){
        return view ('personalform');
    }
    public function display(Request $request)
{
    // Validate dữ liệu
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'age' => 'nullable|numeric',
        'date' => 'nullable|string',
        'phone' => 'nullable|numeric',
        'web' => 'nullable|url',
        'address' => 'nullable|string',
    ]);

    // Gán dữ liệu vào mảng `$personal`
    $personal = [
        'name' => $validated['name'],
        'age' => $validated['age'] ?? null,
        'date' => $validated['date'] ?? null,
        'phone' => $validated['phone'] ?? null,
        'web' => $validated['web'] ?? null,
        'address' => $validated['address'] ?? null,
    ];

    // Trả về view với kết quả
    return view('personalform')->with('personal', $personal);
}

}