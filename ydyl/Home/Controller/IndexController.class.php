<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->display();
    }

    public function type()
    {
        $result=M('type')->order("id desc")->select();
        foreach ($result as $key => $value) {
            $where['sid']=$value['id'];
            $result[$key]['two']=M('nexttype')->where($where)->order("id desc")->select();
        }
        echo json_encode($result);
    }

    public function indexdata()
    {
        $result=M('type')->select();
        foreach ($result as $key => $value) {
            $wheren['onetype']=$value['id'];
            $resultn=M('news')->where($wheren)->order('id desc')->limit(5)->select();
            foreach ($resultn as $k => $v) {
                $resultn[$k]['intime']=date('Y-m-d',$v['intime']);
            }
            $result[$key]['news']=$resultn;
        }
        //var_dump($result);
        echo json_encode($result);
    }

    public function indexfor()
    {
        $where['name']="轮播图";
        $result=M('type')->where($where)->find();
        $wheret['sid']=$result['id'];
        $resultt=M('nexttype')->where($wheret)->find();
        $wheren['twotype']=$resultt['id'];
        $resultnew=M('news')->where($wheren)->order('id desc')->limit(8)->select();
        echo json_encode($resultnew);
    }

    public function indexcool()
    {
        $wheres['name']="时政新闻";
        $results=M('type')->where($wheres)->find();
        $whereso['onetype']=$results['id'];
        $resultso=M('news')->where($whereso)->order('id desc')->limit(6)->select();
        $msg['onthree']=$resultso;


        $where['name']="首页头条";
        $result=M('type')->where($where)->find();
        $wheret['onetype']=$result['id'];
        $msg['one']=M('news')->where($wheret)->order('id desc')->limit(4)->select();

        $wherel['onetype']=(int)$result['id'];
        $wherel['isleft']=1;

        $msg['left']=M('news')->where($wherel)->order('id desc')->limit(5)->select();


        $wheren['sid']=$result['id'];
        $resultn=M('nexttype')->where($wheren)->select();
        foreach ($resultn as $key => $value) {
            $wherer['twotype']=$value['id'];
            $wherer['isleft']=0;
            $resultn[$key]['news']=M('news')->where($wherer)->order('id desc')->limit(7)->select();
        }
        $msg['right']=$resultn;


        echo json_encode($msg);
    }

    public function indexvideo()
    {
        $where['isvideo']=1;
        $result=M('news')->where($where)->order('id desc')->limit(7)->select();
        echo json_encode($result);
    }

    public function indeximg()
    {
        $result=M('allimg')->order('id desc')->limit(5)->select();
        echo json_encode($result);
    }

    public function chanye()
    {
        $this->display();
    }

    /*public function testadd()
    {
        $result=M('type')->select();

        foreach ($result as $key => $value) {
            //echo 1;
           $wheret['sid']=$value['id'];
           $resultt=M('nexttype')->where($wheret)->select();
           foreach ($resultt as $k => $v) { 
            $data['title']='测试数据';
            $data['onetype']=$value['id'];
            $data['twotype']=$v['id'];
            $data['himg']='/Uploads/2018-04-27/5ae2b2f74376d.jpg';
            $data['message']="测试数据测试数据测试数据测试数据";
            M('news')->add($data);
           }
        }
    }

    public function videoaa()
    {
        $wheret['isleft']=1;
        $data['isvideo']=1;
        $data['videopath']='/Uploads/2018-04-28/5ae34c16601b0.mp4';
        M('news')->where($wheret)->save($data);
    }

    public function delsome()
    {
        $where['id']=array(array('gt',0)) ;
        $a=M('news')->where($where)->delete();
        //var_dump($a);
    }
}*/
    public function twolistright()
    {
        $where['sid']=I('post.id');
        $result=M('nexttype')->where($where)->order('id desc')->select();
        foreach ($result as $key => $value) {
            $wheren['twotype']=$value['id'];
            $result[$key]['news']=M('news')->where($wheren)->order('id desc')->limit(7)->select();
        }
        $msg['right']=$result;
        foreach ($msg['right'] as $k => $v) {
            $msg['right'][$k]['intime']=date('Y-m-d H:i:s',$v['intime']);
        }

        $wheret['onetype']=I('post.id');
        $msg['three']=M('news')->where($wheret)->order('id desc')->limit(6)->select();
        foreach ($msg['three'] as $k1 => $v1) {
            $msg['three'][$k1]['intime']=date('Y-m-d H:i:s',$v1['intime']);
        }
        
        echo json_encode($msg);
    }

    public function twolistleft()
    {
        $where['twotype']=I('post.id');
        $msg['list']=M('news')->where($where)->order('id desc')->limit(40)->select();
        foreach ($msg['list'] as $k => $v) {
            $msg['list'][$k]['intime']=date('Y-m-d H:i:s',$v['intime']);
        }
        $wherev['twotype']=I('post.id');
        $msg['video']=M('news')->where($wherev)->order('id desc')->limit(1)->select();
        foreach ($msg['video'] as $k1 => $v1) {
            $msg['video'][$k1]['intime']=date('Y-m-d H:i:s',$v1['intime']);
        }
        echo json_encode($msg);
    }

    public function clicktwo()
    {
        $where['twotype']=I('post.id');
        $msg['list']=M('news')->where($where)->order('id desc')->limit(40)->select();
        foreach ($msg['list'] as $k => $v) {
            $msg['list'][$k]['intime']=date('Y-m-d H:i:s',$v['intime']);
        }
        echo json_encode($msg);
    }

    public function threelist()
    {
        $id=I('post.id');
        //$id=2855;
        //echo 1;
        $where['id']=$id;
        $result=$where['id']=M('news')->where($where)->find();
        $result['intime']=date('Y-m-d H:i:s',$result['intime']);
        $whereo['id']=$result['onetype'];
        $msg['one']=M('type')->where($whereo)->find();
        $wheren['id']=$result['twotype'];
        $msg['two']=M('nexttype')->where($wheren)->find();
        $whereother['sid']=$result['onetype'];
        $whereother['id']=array('neq',$result['twotype']);
        $resultother=M('nexttype')->where($whereother)->order('id desc')->select();
        //var_dump($resultother);
        foreach ($resultother as $key => $value) {
        	$whereon['twotype']=$value['id'];
            //var_dump($whereon);
        	$news=M('news')->where($whereon)->order('id desc')->limit(7)->select();
            //var_dump($news);
            foreach ($news as $k1 => $v1) {
                $news[$k1]['intime']=date('Y-m-d H:i:s',$v1['intime']);
            }
            $resultother[$key]['news']=$news;
        }
        //var_dump($resultother);
        $msg['right']=$resultother;
        $wherethis['onetype']=$result['onetype'];
        $more=M('news')->where($wherethis)->order('id desc')->limit(40)->select();
        foreach ($more as $k => $v) {
            $more[$k]['intime']=date('Y-m-d H:i:s',$v['intime']);
        }
        $msg['more']=$more;
        $msg['news']=$result;
        echo json_encode($msg);

    }

    public function indexthree()
    {
        $where['id']=I('get.id');
        $news=M('news')->where($where)->find();
        $news['message']=htmlspecialchars_decode($news['message']);
        $this->assign('news',$news);
    	$this->display();
    }

    public function searchnews()
    {
        if (!IS_POST) {
            echo 0;exit;
        }
        $keywords=I('post.keywords');
        $where['title']=array('like',"%$keywords%");
        $result=M('news')->where($where)->select();
        foreach ($result as $key => $value) {
        	$result[$key]['intime']=date('Y-m-d H:i:s',$value['intime']);
        	$wherea['id']=$value['onetype'];
        	$resulta=M('type')->where($wherea)->find();
        	$result[$key]['onename']=$resulta['name'];
        }
        echo json_encode($result);

    }

    public function indexsearch()
    {
        $this->display();
    }

    public function cydlm()
    {
        $where['sid']=20;
        $result=M('nexttype')->where($where)->order('id desc')->select();
        foreach ($result as $key => $value) {
            $wheren['twotype']=$value['id'];
            $result[$key]['news']=M('news')->where($wheren)->order('id desc')->limit(7)->select();
        }
        $msg['right']=$result;
        foreach ($msg['right'] as $k => $v) {
            $msg['right'][$k]['intime']=date('Y-m-d H:i:s',$v['intime']);
        }

        $wheret['onetype']=20;
        $msg['three']=M('news')->where($wheret)->order('id desc')->limit(6)->select();
        foreach ($msg['three'] as $k1 => $v1) {
            $msg['three'][$k1]['intime']=date('Y-m-d H:i:s',$v1['intime']);
        }
        
        echo json_encode($msg);
    }
}