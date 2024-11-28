<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {

        $data = [
            'title' => 'Data User',
            'users' => [
                [
                    'username' => 'raflysyahnaufal',
                    'name' => 'Rafly',
                    'email' => 'rafly@gmail.com'
                ],
                [
                    'username' => 'ucup',
                    'name' => 'Ucup Ni Bos',
                    'email' => 'ucup@gmail.com'
                ],
                [
                    'username' => 'ramasihitam',
                    'name' => 'Rama, SH',
                    'email' => 'rama@gmail.com'
                ],
            ]
            ];

        return view('user.index', $data);
    }
}
