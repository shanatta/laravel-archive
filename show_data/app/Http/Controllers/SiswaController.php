<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    //

    public function index () {

        $data = Siswa::data_siswa();

        return view('testing', $data);
    }

    public function show () {

        $data = Siswa::data_siswa();

        return view('show', $data);
    }

    public function data ($presensi) {
        $data['siswa']= [
            '1' => [
                'nama' => 'Arni ',
                'kelas' => 'XII RPL 1',
                'presensi' => 6
            ],

            '2' => [
                'nama' => 'Camela',
                'kelas' => 'XII RPL 1',
                'presensi' => 9
            ],

            '3' => [
                'nama' => 'Devi',
                'kelas' => 'XII RPL 1',
                'presensi' => 11
            ],

            '4' => [
                'nama' => 'Dona',
                'kelas' => 'XII RPL 1',
                'presensi' => 14
            ],

            '5' => [
                'nama' => 'Zack',
                'kelas' => 'XII RPL 1',
                'presensi' => 666
            ]
            ];

            $data ['presensi'] = $presensi;


            return view('layout.data', $data);
    }
} 
