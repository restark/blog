<?php
namespace Admin\Controller;
use Admin\Controller;
class ImgController extends CommonController {
	public function index()
	{
		$count=M('allimg')->count();
		$pagenumber=ceil($count/20);
        $page = new \Think\Page($count,20);
        $show       = $page->show();
        $result=M('allimg')->order('id desc')->limit($page->firstRow.','.$page->listRows)->select();
        $this->domain=$_SERVER['SERVER_NAME'];
        $this->news=$result;
        $this->page=$page->show();
		$this->display();
	}

	public function addimg()
	{
		$this->display();
	}

	public function doadd()
	{
		if (!IS_POST) {
            $this->error('非法操作');
        }
        //var_dump($_POST);//exit;
        $data['title']=I('post.title');
        $data['editorname']=I('post.editorname');
        $data['comefrom']=I('comefrom');
        $data['intime']=time();
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
           
        }
        $result=M('allimg')->add($data);
         if ($result) {
            $this->success('发布成功',U('Admin/Img/index'));
        }else{
            $this->error('发布失败');
        }
	}

    public function delimg()
    {
        $where['id']=I('get.id');
        $result=M('allimg')->where($where)->delete();
        if ($result) {
            $this->success('删除成功',U('Admin/Img/index'));
        }else{
            $this->error('删除失败');
        }
    }
}
