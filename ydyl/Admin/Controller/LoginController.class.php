<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
      $this->display();
    }

    public function login()
    {
      if (!IS_POST) {
        $this->error('页面不存在');
        exit;
      }
      function check_verify($code, $id = ''){
        $verify = new \Think\Verify();
        return $verify->check($code, $id);
    }
    $code=I('post.code');
    if(!check_verify($code)){
      $this->error('验证码错误');
    }
        $username=I('username');
        $pwd=I('password','','md5');
        $where['username']=$username;
        $where['password']=$pwd;
        //var_dump($pwd);exit;
        $result=M('admin')->where($where)->select();
        if (!$result) {
          $this->error('同户名或密码错误');
        }else{
          session('type','admin');
          session('user',$username);
          session('adid',$result[0]['id']);
          session('name',$result[0]['name']);
          $this->success('登录成功',U('Admin/Index/index'));
        }


    }

    public function verify(){
      $Verify = new \Think\Verify();
    $Verify->entry();
    }

    public function logout()
    {
      session(null);
      $this->success('退出成功',U('Admin/Index/index'));
    }
}
