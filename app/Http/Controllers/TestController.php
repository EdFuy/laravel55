<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class TestController extends Controller
{
    //
    public function test(){
        $order_product_list = App\Order::find(1)->order_product();
    }
}
