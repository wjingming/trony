<?php

namespace app\index\controller;

use think\Controller;
use app\index\model\Admin;

class Base extends Controller
{
    public function _initialize()
    {
        print_R(1);die;
        if(!session('username')){
            print_r(1);die;
            $this->error('请先登录！',url('/login'));
        }else{
            print_r(2);die;
        }
    }
}
