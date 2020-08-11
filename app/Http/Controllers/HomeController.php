<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function uudai()
    {
        return view('Uudai');
    }
    public function uudai2()
    {
        return view('Uudai2');
    }

    public function trangthai()
    {
        return view('trangthai');
    }
    public function gioithieu()
    {
        return view('Gioithieu');
    }
    public function muave()
    {
        return view('Muave');
    }
    public function ve()
    {
        return view('ve');
    }
    public function thongtin()
    {
        return view('thongtin');
    }
    public function thanhtoan()
    {
        return view('thanhtoan');
    }
}
