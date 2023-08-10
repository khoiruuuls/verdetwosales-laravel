<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Homepage',
            'doc' => 'home',
            'aminities' => [
                'Sky Lounge', 'Ballroom', 'Pavilion', 'Chef Kitchen', 'Pool', 'Theater', 'Games Room', 'Gym', 'Kids Playroom'
            ]
        ];
        return view('home', $data);
    }

    public function residences()
    {
        $data = [
            'title' => 'Residences',
            'doc' => 'residences'
        ];

        return view('residences', $data);
    }

    public function neighborhood()
    {
        $data = [
            'title' => 'Neighborhood',
            'doc' => 'neighborhood'
        ];

        return view('neighborhood', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact',
            'doc' => 'contact',
            'message' => 'Halo%2C%0A%0ASaya%20mendapat%20informasi%20dari%20verdetwosales.com%20tertarik%20untuk%20melihat%20properti%20dari%20Verde%20Two.%20Saya%20ingin%20informasi%20lebih%20lanjut%20tentang%20properti%20yang%20tersedia.%0A%0ATerima%20kasih!'
        ];

        return view('contact', $data);
    }
}
