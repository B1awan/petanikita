<?php

namespace App\Controllers;

class Halaman_con extends BaseController
{
    public function index()
    {
        $data = [
            'title' => "Beranda"
        ];
        return view('halaman/beranda',$data);
    }

    public function pasar()
    {
        $data = [
            'title' => "Pasar"
        ];
        return view('halaman/pasar', $data);
    }

    public function komunitas()
    {
        $data = [
            'title' => "Komunitas"
        ];
        return view('halaman/komunitas', $data);
    }
}
