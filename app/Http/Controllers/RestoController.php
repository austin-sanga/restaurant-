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
}
