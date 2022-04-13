<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\restaurant;

class RestoController extends Controller
{
    //
    function index()
    {
        return view('home');
    }

    function list()
    {
        $data =  restaurant::all();
        return view('list', ['data'=>$data]);
    }

    function add(Request $req)
    {
        $resto = new restaurant;
        $resto->name=$req->name;
        $resto->email=$req->email;
        $resto->address=$req->address;
        $resto->save();

        // flash session initiation
        $req->session()->flash('status','Restaurant entered succesfully'); 

        return redirect('list');
    }

    function delete($id)
    {
        restaurant::find($id)->delete();
        session()->flash('status','Restaurant deleted successfully');
        return redirect('list');
    }

    function edit($id)
    {
        $data = restaurant::find($id);
        return view('edit',['data'=>$data]);
    }

    function update(Request $req)
    {
        $resto = restaurant::find($req->id);
        $resto->name=$req->name;
        $resto->email=$req->email;
        $resto->address=$req->address;
        $resto->save();

        // flash session initiation
        $req->session()->flash('status','Restaurant updated succesfully'); 

        return redirect('list');
    }
}

