<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thongtinve extends Model
{
    protected $table = "thongtinve";
    protected $fillable = ['giave','chuyenbay_id','the_id','hk_id'];
    public function thongtinve(){
        return $this->hasMany('app\Hanhkhach','hk_id','id');
    }
    public  function thongtinve2(){
        return $this->hasMany('app\Chuyenbay','chyenbay_id','id');
    }
    public  function thongtinve3(){
        return $this->hasMany('app\datve','the_id','id');
    }


}
