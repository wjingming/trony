<?php
namespace app\index\controller;

use think\Controller;

    class Api extends controller
    {
        public function report()
        {
            $id = input('id');
            if(isset($id) && $id=1){
                return '测试成功';
            }else{
                return '缺少参数';
            }
        }
        
    }
?>