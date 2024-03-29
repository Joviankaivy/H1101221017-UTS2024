<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InputdataController extends Controller{
    public function index() 
    {
        return view('inputdata');
    }
}