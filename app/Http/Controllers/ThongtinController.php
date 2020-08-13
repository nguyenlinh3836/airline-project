<?php

namespace App\Http\Controllers;
use App\Hanhkhach;
use App\News;
use App\LoaiVe;
use Illuminate\Http\Request;
use App\thongtin;

class ThongtinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('thongtin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hanhkhach = new Hanhkhach();
        $hanhkhach->danh_xung = $request->danh_xung;
        $hanhkhach->ho = $request->ho;
        $hanhkhach->ten = $request->ten;
        $hanhkhach->ngay_sinh= $request->ngay_sinh;
        $hanhkhach->gioi_tinh= $request->gioi_tinh;
        $hanhkhach->sdt= $request->sdt;
        $hanhkhach->email = $request->email;
        $hanhkhach->save();
        return redirect(route('thanhtoan'));
    }

    public function  storeprice(Request $request){
        $price = new LoaiVe();
        $price-> loaive = $request->get('radio');
        $price->save();
        return redirect(route('thongtin'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
