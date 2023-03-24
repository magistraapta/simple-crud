<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mahasiswas;

class mhsController extends Controller
{
    public function show(){
        return view('index', [
            "title"=>"Home",
            "mhs"=>mahasiswas::all()
        ]);
    }
}
