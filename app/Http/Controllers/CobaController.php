<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CobaController extends Controller
{
    public  function coba()
    {
        $data['nama'] =  "Kiki Darmawan";
        $data['alamat'] =  "Ciranjang";
        $fruits = ['Mangga', 'Sirsak', 'Jeruk', 'Apel', 'Anggur'];
        return view('coba', [
            'data'  => $data,
            'buah'  => $fruits
        ]);
    }
}
