<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    //
    public function index()
    {
        $nama ="Muhammad Rikzan";
        $pelajaran = ["pkn","bhs indo","agama"];
        return view('biodata',['nama'=>$nama,'matkul'=>$pelajaran]);
    }
}
