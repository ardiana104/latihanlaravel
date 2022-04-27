<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\customers;
class PulsauserController extends Controller
{
    public function index(){
        $customers = Customers::all();
        return view('customers.index',compact(['customers']));
    }
    public function create()
    {
        return view('customers.create');
    }
    public function store(Request $request)
    {
        // dd($request->except(['_token','submit']));
        customers::create($request->except(['_token','submit']));
        return redirect('/pulsauser');
    }
    public function edit ($id)
    {
        $customers = Customers::find($id);
        return view('customers.edit',compact(['customers']));
    }
    public function update ($id, Request $request)
    {
        $customers = Customers::find($id);
        $customers->update($request->except(['_token','submit']));
        return redirect('/pulsauser');
    }
    public function destroy ($id)
    {
        $customers = Customers::find($id);
        $customers->delete();
        return redirect('/pulsauser');
    }
}