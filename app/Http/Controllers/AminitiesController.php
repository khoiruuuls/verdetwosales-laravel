<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AminitiesController extends Controller
{

    public function index($page)
    {
        if ($page == 'sky-lounge') {
            $data = [
                'title' => ucfirst(str_replace('-', ' ', $page)),
                'doc' => $page,
                'text_1' => 'ini',
                'text_2' => 'dari',
                'text_3' => $page,
            ];
        } else if ($page == 'ball-room') {
            $data = [
                'title' => ucfirst(str_replace('-', ' ', $page)),
                'doc' => $page,
                'text_1' => 'ini',
                'text_2' => 'dari',
                'text_3' => 'ball room',
            ];
        } else if ($page == 'pavilion') {
            $data = [
                'title' => ucfirst(str_replace('-', ' ', $page)),
                'doc' => $page,
                'text_1' => 'ini',
                'text_2' => 'dari',
                'text_3' => $page,
            ];
        } else if ($page == 'chef-kitchen') {
            $data = [
                'title' => ucfirst(str_replace('-', ' ', $page)),
                'doc' => $page,
                'text_1' => 'ini',
                'text_2' => 'dari',
                'text_3' => $page,
            ];
        } else if ($page == 'pool') {
            $data = [
                'title' => ucfirst(str_replace('-', ' ', $page)),
                'doc' => $page,
                'text_1' => 'ini',
                'text_2' => 'dari',
                'text_3' => $page,
            ];
        } else if ($page == 'theater') {
            $data = [
                'title' => ucfirst(str_replace('-', ' ', $page)),
                'doc' => $page,
                'text_1' => 'ini',
                'text_2' => 'dari',
                'text_3' => $page,
            ];
        } else if ($page == 'games-room') {
            $data = [
                'title' => ucfirst(str_replace('-', ' ', $page)),
                'doc' => $page,
                'text_1' => 'ini',
                'text_2' => 'dari',
                'text_3' => $page,
            ];
        } else if ($page == 'gym') {
            $data = [
                'title' => ucfirst(str_replace('-', ' ', $page)),
                'doc' => $page,
                'text_1' => 'ini',
                'text_2' => 'dari',
                'text_3' => $page,
            ];
        } else if ($page == 'kids-playroom') {
            $data = [
                'title' => ucfirst(str_replace('-', ' ', $page)),
                'doc' => $page,
                'text_1' => 'ini',
                'text_2' => 'dari',
                'text_3' => $page,
            ];
        }
        return view('home.aminities', $data);
    }
}
