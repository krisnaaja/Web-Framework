<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriBarangController extends Controller
{
    public function index() {

        $data = [
            'title' => 'Kategori Barang',
            'kategoris' => [
                [
                    'name' => 'Alat Tulis',
                ],
                [
                    'name' => 'Pakaian',
                ],
                [
                    'name' => 'Elektronik',
                ],
            ]
        ];

        return view('kategori-barang.index', $data);
    }
}
