<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chuyenbay extends Model
{
   protected $table= "chuyenbay";

   public function Thongtinve(){
       return $this->belongsTo('app\Thongtinve','chuyenbay_id','id');
   }
}
