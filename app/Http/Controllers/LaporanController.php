<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index() {


        $data = [
            'title' => 'Laporan',
            'laporans' => [
                [
                    'kode_barang' => 'BRG001',
                    'nama_barang' => 'Buku',
                    'kategori' => 'Alat Tulis',
                    'tanggal' => '22 Nov 2024',
                    'jumlah' => 8
                ],
                [
                    'kode_barang' => 'BRG002',
                    'nama_barang' => 'Baju',
                    'kategori' => 'Pakaian',
                    'tanggal' => '23 Nov 2024',
                    'jumlah' => 6
                ],
                [
                    'kode_barang' => 'BRG003',
                    'nama_barang' => 'Laptop',
                    'kategori' => 'Elektronik',
                    'tanggal' => '23 Nov 2024',
                    'jumlah' => 2
                ],
            ]
        ];

        return view('laporan.index', $data);
    }
}
