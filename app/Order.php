<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //获取订单中商品的信息
    public function order_product(){
        return $this->hasMany('App\OrderProduct');
    }
}
