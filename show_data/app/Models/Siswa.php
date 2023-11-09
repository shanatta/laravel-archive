<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    public static function data_siswa()
    {
    $data = [
        'nama' => "Kana",
        'kelas' => 'XII RPL 1',
        'presensi' => '28',

        'nama2' => "Natalia",
        'kelas2' => 'XII RPL 2',
        'presensi2' => '29'
    ];

    return $data;

}
} 
