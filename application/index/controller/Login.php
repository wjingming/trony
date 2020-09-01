<?php

namespace app\index\controller;

use think\Controller;
use app\index\model\Admin;
use think\DB;

class Login extends controller
{
    public function login()
    {
        if (request()->isPost()) {
            $admin = new Admin();
            $data = input('post.');
            $num = $admin->login($data);
            if ($num == 3) {
                $this->success('登录成功', '/index');
            } else {
                $this->error('用户名或密码错误');
            }
        }
        return $this->fetch('login');
    }

    public function index()
    {

        return $this->fetch('index');
    }
}
