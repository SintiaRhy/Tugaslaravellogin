<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index(){
        $nama = "Sintia Rahayu";
        $pelajaran = ["Algoritma dan Pemrograman", "PBO", "Pemrograman Web"];
        return view('biodata', ['nama' => $nama, 'matkul' => $pelajaran]);
    }
}
