<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

class TestController extends ApiController
{
    //
    public function index(){

//        return $this->message('请求成功');
        return $this->failed('请求失败','404');
    }


}
