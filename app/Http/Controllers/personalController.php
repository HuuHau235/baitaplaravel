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
    $userSession = session('userSession',[]);
        $user = [
            'name'    => $request->input('name'),
            'age'     => $request->input('age'),
            'date'    => $request->input('date'),
            'phone'   => $request->input('phone'),
            'web'     => $request->input('web'),
            'address' => $request->input('address')
        ];
        $userSession[] = $user;
        session(['userSession'=> $userSession]);
        return view('personalform')->with('userSession',$userSession);
    // Trả về view với kết quả
}

}