<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;

class mahasiswas 
{
    private static $data_mhs = [
        [
            "nama"=>"harry",
            "NIM"=>"F1D002233",
            "email"=>"harry@gmail.com"
        ],
        [
            "nama"=>"Jerry",
            "NIM"=>"F1D004455",
            "email"=>"jerry@gmail.com"
        ]
    ];

    public static function all (){
        return self::$data_mhs;
    }
}
