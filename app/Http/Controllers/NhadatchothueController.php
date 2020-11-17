<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NhadatchothueController extends Controller
{
    //
    public function index() {
        return view('pages.nha_dat_cho_thue.index');
    }

    public function cho_thue_can_ho() {
        return view('pages.nha_dat_cho_thue.cho_thue_can_ho');
    }

    public function cho_thue_nha_rieng() {
        return view('pages.nha_dat_cho_thue.cho_thue_nha_rieng');
    }

    public function cho_thue_nha_mat_pho() {
        return view('pages.nha_dat_cho_thue.cho_thue_nha_mat_pho');
    }

    public function cho_thue_nha_tro() {
        return view('pages.nha_dat_cho_thue.cho_thue_nha_tro');
    }

    public function cho_thue_van_phong() {
        return view('pages.nha_dat_cho_thue.cho_thue_van_phong');
    }

    public function cho_thue_cua_hang() {
        return view('pages.nha_dat_cho_thue.cho_thue_cua_hang');
    }

    public function cho_thue_nha_kho() {
        return view('pages.nha_dat_cho_thue.cho_thue_nha_kho');
    }

    public function cho_thue_bds_khac() {
        return view('pages.nha_dat_cho_thue.cho_thue_bds_khac');
    }
}
