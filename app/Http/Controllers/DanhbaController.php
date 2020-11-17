<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DanhbaController extends Controller
{
    //
    public function index() {
        return view ('pages.danhba.nhamoigioi');
    }

    public function index1() {
        return view ('pages.danhba.doanhnghiep');
    }

    public function singlepost1() {
        return view ('pages.danhba.singlepost1');
    }
}
