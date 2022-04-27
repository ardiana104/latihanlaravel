<?php

namespace App\Http\Controllers;
use App\Models\Panen;
use Illuminate\Http\Request;

class PanenController extends Controller
{
    public function index(){
        $panen = Panen::all();
        return view('panen.index',compact(['panen']));
    }
    public function create()
    {
        return view('panen.create');
    }
    public function store(Request $request)
    {
        panen::create($request->except(['_token','submit']));
        return redirect('/panen');
    }
    public function edit ($id)
    {
        $panen = Panen::find($id);
        return view('panen.edit',compact(['panen']));
    }
    public function update ($id, Request $request)
    {
        $panen = Panen::find($id);
        $panen->update($request->except(['_token','submit']));
        return redirect('/panen');
    } 
    public function destroy($id)
    {
        $panen = Panen::find($id);
        $warga->delete();
        return redirect('/panen');
    }
}