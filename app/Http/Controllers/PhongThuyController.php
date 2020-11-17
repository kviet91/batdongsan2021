<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhongThuyController extends Controller
{
    //
    public function index() {
        return view ('pages.phongthuy.phongthuy');
    }

    public function index1() {
        return view ('pages.phongthuy.phongthuytoancanh');
    }

    public function index2() {
        return view ('pages.phongthuy.tuvanphongthuy');
    }

    public function index3() {
        return view ('pages.phongthuy.phongthuynhao');
    }

    public function index4() {
        return view ('pages.phongthuy.phongthuyvanphong');
    }

    public function index5() {
        return view ('pages.phongthuy.phongthuytheotuoi');
    }
}

