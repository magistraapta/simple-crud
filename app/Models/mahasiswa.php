<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'NIM',
        'password'
    ];

    public static function show(){
        return self::$fillable;
    }
}
