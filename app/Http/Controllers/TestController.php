<?php

namespace App\Http\Controllers;
use App\Models\Test;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function report(){
        $tests=Test::latest()->paginate(10);


        return view('Test/index', compact('tests'));
    }

    public function create(){

        return view('Test/Create');
    }
   
}
