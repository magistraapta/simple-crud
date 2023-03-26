<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mahasiswa;

class mhsController extends Controller
{
    public function show(){
        return view('index', [
            "title"=>"Home",
            "mhs"=>mahasiswa::all()
        ]);
    }

    public function find($id){


        return view('detail', [
            "title"=>"Detail Mahasiswa",
            "mhs"=>mahasiswa::find($id)
        ]);
    }
}
