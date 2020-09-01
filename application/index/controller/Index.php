<?php

namespace app\index\controller;

use think\DB;
use think\Controller;
use app\index\controller\Base;

class Index extends base
{
  private $user;

  protected function initialize()
  {
    $this->user = session('username');
  }
  public function index()
  {
    if (!$this->user) {
      $this->redirect("/login");
    }
    return $this->fetch('index');
  }

  public function login()
  {
    return $this->fetch('defau');
  }
}
