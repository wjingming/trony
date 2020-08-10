<?php
namespace app\index\controller;

use think\Controller;

    class Api extends controller
    {
        public function report()
        {
            $id = input('id');
            if(isset($id) && $id=1){
<<<<<<< HEAD
                return '测试成功';
=======
                return '测试成功，参数为'.$id;
>>>>>>> dabc4502263c4d549e0a7050efd6620914dd5abc
            }else{
                return '缺少参数';
            }
        }
        
    }
?>