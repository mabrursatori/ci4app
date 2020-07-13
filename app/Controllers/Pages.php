<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => "Home"
        ];
        return view('pages/index', $data);
    }

    public function about()
    {
        $data = [
            'title' => "About Me"
        ];
        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => "About Me",
            'alamat' => [
                [
                    'tipe' => "Rumah",
                    'alamat' => "Sumber",
                    'kota' => "Cirebon"
                ],
                [
                    'tipe' => "Kantor",
                    'alamat' => "Regol",
                    'kota' => "Bandung"
                ]
            ]
        ];
        return view('pages/contact', $data);
    }
}
