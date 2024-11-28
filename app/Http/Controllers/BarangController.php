<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index() {

        $data = [
            'title' => 'Barang',
            'barangs' => [
                [
                    'kode' => 'BRG001',
                    'nama' => 'Buku',
                    'kategori' => 'Alat Tulis',
                    'harga' => 10000,
                    'stok' => 10
                ],
                [
                    'kode' => 'BRG002',
                    'nama' => 'Baju',
                    'kategori' => 'Pakaian',
                    'harga' => 90000,
                    'stok' => 18
                ],
                [
                    'kode' => 'BRG003',
                    'nama' => 'Laptop',
                    'kategori' => 'Elektronik',
                    'harga' => 7800000,
                    'stok' => 8
                ],
            ]
            ];

        return view('barang.index', $data);
    }
}
