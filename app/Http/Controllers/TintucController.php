<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TintucController extends Controller
{
    //
    public function index(){
        return view('pages.tintucbds.tintuc');
    }


    public function tinthitruong()
    {
        return view('pages.tintucbds.tinthitruong');
    }

    public function phantich()
    {
        return view('pages.tintucbds.phantich');
    }

    public function chinhsach()
    {
        return view('pages.tintucbds.chinhsach');
    }
    public function quyhoach()
    {
        return view('pages.tintucbds.quyhoach');
    }
    public function bdsthegioi()
    {
        return view('pages.tintucbds.bdsthegioi');
    }
    public function taichinhbds()
    {
        return view('pages.tintucbds.taichinhbds');
    }
}
