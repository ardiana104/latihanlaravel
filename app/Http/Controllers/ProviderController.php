<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProviderController extends Controller
{
    public function index(){
        $provaider = provaider::all();
        return view('provaider.index',compact(['provaider']));
    }
}