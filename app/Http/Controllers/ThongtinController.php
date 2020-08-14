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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hanhkhach = new Hanhkhach();
        $hanhkhach->danhxung = $request->get('danhxung');
        $hanhkhach->ho = $request->get('ho');
        $hanhkhach->ten = $request->get('ten');
        $hanhkhach->ngay_sinh= $request->get('ngay_sinh');
        $hanhkhach->gioi_tinh= $request->get('gioi_tinh');
        $hanhkhach->sdt= $request->get('sdt');
        $hanhkhach->email = $request->get('email');
        $hanhkhach->save();
        return redirect('thanhtoan');
    }

    public function  storeprice(Request $request){
        $price = new LoaiVe();
        $price-> tongtien = $request->get('radio');
        $price->save();
        return redirect('Hanhkhach');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);

        return view('huyve.post', compact('post'));
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
        $post = Post::findOrFail($id);
        $post->delete();

        return view('huyve.post', compact('post'));
    }
}
