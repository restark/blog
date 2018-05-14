<?php
namespace Admin\Controller;
use Admin\Controller;
class NewsController extends CommonController {
    public function index(){
        
        $where['onetype']=I('get.onetype');
        $where['twotype']=I('get.twotype');
       // var_dump($where);
        if (!$where['onetype'] || !$where['twotype']) {
            $where='1=1';
        }
       // var_dump($where);
        $count=M('news')->where($where)->count();
        
        $pagenumber=ceil($count/20);
        $page = new \Think\Page($count,20);
        $show       = $page->show();
        $result=M('news')->where($where)->order('id desc')->limit($page->firstRow.','.$page->listRows)->select();
        $this->news=$result;
        $this->page=$page->show();
        $this->display();
    }

    public function type()
    {
        $msg=M('type')->select();
        foreach ($msg as $key => $value) {
            $where['sid']=$value['id'];
            $msg[$key]['next']=M('nexttype')->where($where)->select();
            unset($where);
        }
        echo json_encode($msg);
    }

    public function onetype()
    {
        $msg=M('type')->select();
        echo json_encode($msg);
    }

    public function twotype()
    {
        if (!IS_POST) {
            $msg['status']=0;
            $msg['data']="非法操作";
            echo json_encode($msg);exit;
        }
        $where['sid']=I('post.id');
        $msg['data']=M('nexttype')->where($where)->select();
        if ($msg['data']) {
            $msg['status']=1;
        }
        echo json_encode($msg);
    }

    public function addtype()
    {
        $this->display();
    }

    public function addonetype()
    {
        if (!IS_POST) {
            $msg['status']=0;
            $msg['data']="非法操作";
            echo json_encode($msg);exit;
        }
        $data['name']=I('post.name');
        $result=M('type')->add($data);
        if ($result) {
            echo 1;
        }else{
            echo 0;
        }
    }

    public function addtwotype()
    {
        if (!IS_POST) {
            $msg['status']=0;
            $msg['data']="非法操作";
            echo json_encode($msg);exit;
        }
        $data['name']=I('post.name');
        $data['sid']=I('post.id');
        $result=M('nexttype')->add($data);
        if ($result) {
            echo 1;
        }else{
            echo 0;
        }
    }

    public function delonetype()
    {
        
        if (!IS_POST) {
            $msg['status']=0;
            $msg['data']="非法操作";
            echo json_encode($msg);exit;
        }
        $where['id']=I('post.id');
        $result=M('type')->where($where)->delete();

        $wherea['sid']=I('post.id');
        $resulta=M('nexttype')->where($wherea)->delete();
        if ($result) {
            echo 1;
        }else{
            echo 0;
        }
    }

    public function deltwotype()
    {
        if (!IS_POST) {
            $msg['status']=0;
            $msg['data']="非法操作";
            echo json_encode($msg);exit;
        }
        $wherea['id']=I('post.id');
        $result=M('nexttype')->where($wherea)->delete();
        if ($result) {
            echo 1;
        }else{
            echo 0;
        }
    }

   


    public function addnew()
    {

        if (!IS_POST) {
            $this->error('非法操作');
        }
        //var_dump($_POST);//exit;
        $data['title']=I('post.title');
        $data['message']=I('post.content');
        $data['editorname']=I('post.editorname');
        $data['comefrom']=I('comefrom');
        $data['onetype']=I('post.onetype');
        $data['twotype']=I('post.twotype');
        $data['isleft']=(int)I('post.left');
        $data['newsdescribe']=I('post.describe');
        $data['isvideo']=(int)I('post.isvideo');
        $data['intime']=time();
        $data['isdel']=0;
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     31457280 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg','mp4','.avi','wmv','mkv','mov');// 设置附件上传类型
        $upload->rootPath  =      './Uploads/'; // 设置附件上传根目录
        $upload->savePath  =      ''; // 设置附件上传（子）目录
// 上传文件 
        $info   =   $upload->upload();
        
        if(!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        }else{// 上传成功 获取上传文件信息
            $data['himg']='/Uploads/'.$info[0]['savepath'].$info[0]['savename'];

            $data['videopath']='/Uploads/'.$info[1]['savepath'].$info[1]['savename'];
           
        }
        //var_dump($data);exit;
        $result=M('news')->add($data);
        if ($result) {
            $this->success('发布成功',U('Admin/News/news'));
        }else{
            $this->error('发布失败');
        }
   
    }

    public function delnews()
    {
        $where['id']=I('get.id');
        $result=M('news')->where($where)->delete();
        if ($result) {
            $this->success('删除成功');
        }else{
            $this->error('删除失败');
        }
    }

    public function change ()
    {
    	//header("Content-Type: text/html; charset=UTF-8");
    	$id=I('get.id');
    	$where['id']=$id;
    	$new=M('news')->where($where)->find();
    	$this->assign('id',$id);
    	$this->assign('new',$new);
    	$this->display();
    }

    public function changemessage()
    {
    	 
    	//header("Content-Type: text/html; charset=UTF-8");
    	$id=I('get.id');
    	$where['id']=$id;
    	$new=M('news')->where($where)->find();
        $wheren['id']=$new['onetype'];
        $onetype=M('type')->where($wheren)->find();
        $wheret['id']=$new['twotype'];
        $twotype=M('nexttype')->where($wheret)->find();
        $new['onetype']=$onetype['name'];
        $new['twotype']=$twotype['name'];
    	echo json_encode($new);
    
    }

    public function dochange()
    {
    	//var_dump($_POST);
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     31457280 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg','mp4','.avi','wmv','mkv','mov');// 设置附件上传类型
        $upload->rootPath  =      './Uploads/'; // 设置附件上传根目录
        $upload->savePath  =      ''; // 设置附件上传（子）目录
// 上传文件 
        $info   =   $upload->upload();
        
        if($info) {// 上传错误提示错误信息
            $c=$info[0]['savepath'];
            $d=$info[0]['savename'];
            if ($c & $d) {
               $data['himg']='/Uploads/'.$info[0]['savepath'].$info[0]['savename']; 
            }
            

            $a=$info[1]['savepath'];
            $b=$info[1]['savename'];
            if ($a & $b) {
               $data['videopath']='/Uploads/'.$info[1]['savepath'].$info[1]['savename']; 
            }
        }
        $data['title']=I('post.title');
        $onetype=I('post.onetype');
        $twotype=I('post.twotype');
        if ($onetype!='') {
            $data['onetype']=$onetype;
        }
        if ($twotype!='') {
            $data['twotype']=$twotype;
        }
        $data['editorname']=I('post.editorname');
        $data['comefrom']=I('comefrom');
        $data['newsdescribe']=I('describe');
        $data['isleft']=I('left');
        $data['isvideo']=I('isvideo');
        $data['message']=I('message');
        var_dump($data);
        $where['id']=I('post.id');
        $result=M('news')->where($where)->save($data);
        if ($result) {
            $this->success('修改成功',U('Admin/News/index'));
        }else{
            $this->error('修改失败');
        }
    }
}