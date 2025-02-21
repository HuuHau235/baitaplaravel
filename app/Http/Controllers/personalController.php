<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class personalController extends Controller
{
    public function index(){
        return view ('personalform');
    }
    public function display(Request $request){
        $personal = [
            'name'=>$name = $request -> input("name"),
            'age'=>$age = $request -> input("age"),
            'date'=>$date = $request -> input("date"),
            'phone'=>$phone = $request -> input("phone"),
            'web'=>$web = $request -> input("web"),
            'address'=>$address = $request -> input("address")
        ];
        return view ('personalform')->with('personal',$personal);
    }
}