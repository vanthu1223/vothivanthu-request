<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function getUser(Request $request){
        $input = $request->all();
        return view('result',compact('input'));
    }
}
