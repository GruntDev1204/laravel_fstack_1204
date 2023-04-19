<?php

namespace App\Http\Controllers;

use App\Models\img;
use Illuminate\Http\Request;

class tets extends Controller
{
    public function testview(){
        return view('test');
    }
    public function post(Request $request){
        $data = $request->all();
        img::create($data);
        return redirect()->back();
    }
}
