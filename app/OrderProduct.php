<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    //
    //获取订单商品的订单信息
    public function product(){
        return $this->belongto('App\Order');
    }
}
