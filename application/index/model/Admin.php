<?php
namespace app\index\model;

use think\Model;
use think\Db;

class Admin extends Model
{
	public function login($data){
        $user=Db::name('user')->where('username','=',$data['username'])->find();
        $user['password'] = md5($user['password']);
		if($user){
			if($user['password'] == md5($data['password'])){
				session('username',$user['username']);
				return 3; //信息正确
			}else{
				return 2;//密码错误
			}
		}else{
			return 1;//用户不存在
		}
	}
}