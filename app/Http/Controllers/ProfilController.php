<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        $nama = "Syafiq Indirwan";
        $nim = "241230065";
        $prodi = "Sistem Informasi";

        return view('profil', compact('nama', 'nim', 'prodi'));
    }
}