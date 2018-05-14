<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
	

	public function index()
	{
		$this->display();
	}

	public function login()
	{
		$where['phone']=I('post.phone');
		$where['password']=md5(I('post.password'));
		$result=M('member')->where($where)->find();
		if ($result) {
			session('mid',$result['id']);
			session('name',$result['name']);
			echo 1;
		}else{
			echo 0;
		}
	}

	public function forget()
	{
		$this->display();
	}

	public function sendforget()
	{
		$phone=I('get.phone');
		$where['phone']=$phone;
		$resulta=M('member')->where($where)->find();
		if (!$resulta) {
			echo 3;exit;
		}
		$code=rand(0,9).rand(0,9).rand(0,9).rand(0,9);
		//var_dump($code);exit;
		include ('./ThinkPHP/Library/Org/Alidayu/TopSdk.php');
		$c = new \TopClient;
		$c->appkey ='23388263';
		$c->secretKey = 'cb86f7a0493d2fe6557cd99f4865cc8e';
		$req = new \AlibabaAliqinFcSmsNumSendRequest;
		$req->setExtend("123456");
		$req->setSmsType("normal");
		$req->setSmsFreeSignName("变更验证");
		$req->setSmsParam('{"code":"'.$code.'","product":"ydyl"}');
		$req->setRecNum($phone);
		$req->setSmsTemplateCode("SMS_10676511");
		$resp = $c->execute($req);
		if ($resp && $resp->result) {
			session('phone',$phone);
            session('xgcode',$code);
            echo 1;
        } else {
            echo 0;
        }
	}

	public function repass()
	{
		$phone=I('post.phone');
		$rephone=session('phone');
		if ($phone!=$rephone) {
			echo 3;exit;
		}
		$code=I('post.code');
		$xgcode=session('xgcode');
		if ($code!=$xgcode) {
			echo 4;exit;
		}
		$where['phone']=$phone;
		$data['password']=md5(I('post.password'));
		$result=M('member')->where($where)->save($data);
		if ($result) {
			echo 1;
		}else{
			echo 0;
		}
	}

	public function register()
	{
		$this->display();
	}

	public function sendcode()
	{
		$tcode=I('get.tcode');
		function check_verify($code, $id = ''){
        	$verify = new \Think\Verify();
        	return $verify->check($code, $id);
    	}
		if(!check_verify($tcode)){
      		echo 3;exit;
    	}
		$phone=I('get.phone');
		$where['phone']=$phone;
		$resulta=M('member')->where($where)->find();
		if ($resulta) {
			echo 4;exit;
		}
		$code=rand(0,9).rand(0,9).rand(0,9).rand(0,9);
		//var_dump($code);exit;
		include ('./ThinkPHP/Library/Org/Alidayu/TopSdk.php');
		$c = new \TopClient;
		$c->appkey ='23388263';
		$c->secretKey = 'cb86f7a0493d2fe6557cd99f4865cc8e';
		$req = new \AlibabaAliqinFcSmsNumSendRequest;
		$req->setExtend("123456");
		$req->setSmsType("normal");
		$req->setSmsFreeSignName("注册验证");
		$req->setSmsParam('{"code":"'.$code.'","product":"ydyl"}');
		$req->setRecNum($phone);
		$req->setSmsTemplateCode("SMS_10676513");
		$resp = $c->execute($req);
		if ($resp && $resp->result) {
            session('zccode',$code);
            echo 1;
        } else {
            echo 0;
        }
	}

	public function doregister()
	{
		$code=I('post.code');
		$zccode=session('zccode');
		if ($code!=$zccode) {
			echo 3;exit;
		}
		$where['phone']=I('post.phone');
		$result=M('member')->where($where)->find();
		if ($result) {
			echo 4;exit;
		}
		$data['phone']=I('post.phone');
		$data['name']=I('post.name');
		$data['password']=md5(I('post.password'));
		$resulta=M('member')->add($data);
		if ($resulta) {
			echo 1;
		}else{
			echo 0;
		}
		
	}

	public function verify(){
    	$Verify = new \Think\Verify();
    	$Verify->entry();
    }

    public function islogin()
    {
    	$id=session('mid');
    	$name=session('name');
    	if (!$id || !$name) {
    		$msg['status']=0;
    		$msg['message']="未登录";
    	}else{
    		$msg['status']=1;
    		$msg['data']['id']=$id;
    		$msg['data']['name']=$name;
    	}
    	echo json_encode($msg);
    }

    public function loginout()
    {
    	session(null);
    	echo 1;
    }
}