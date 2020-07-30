<?php
namespace app\index\controller;

use think\Controller;

class Index extends controller
{
    public function index()
    {
      return $this->fetch('index@index/index');
    }
    
    public function defau()
    {
      return $this->fetch('defau');
    }
}
