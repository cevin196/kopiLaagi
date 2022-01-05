<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PesananController extends Controller
{
    public function store(Request $request)
    {

        foreach ($request->jumlah as $key => $pesan) {
            echo "jumlah: " . $pesan .  " id: " . $request->id[$key] . "<br>";
        }
    }
}