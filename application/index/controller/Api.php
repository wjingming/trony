<?php
namespace app\index\controller;

use think\Controller;

    class Api extends controller
    {
        public function report()
        {
            $id = input('id');
            if(isset($id)){
                return '测试成功，参数为'. $id;
            }else{
                return '缺少参数，请检查后重试';
            }
        }
    }
