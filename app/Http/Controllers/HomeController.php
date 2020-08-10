<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function uudai()
  {
      return view('Uudai');
  }

    public function trangthai()
    {
        return view('trangthai');
    }
    public function uudai2()
    {
        return view('Uudai2');
    }
    public function gioithieu()
    {
        return view('Gioithieu');
    }
    public function muave()
    {
        return view('Muave');
    }
}
