<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function index()
    {
        $email = "241230065@unmuhpnk.ac.id";
        $telepon = "0895411380164";
        $alamat = "Singkawang";

        return view('kontak', compact('email', 'telepon', 'alamat'));
    }
}