<?php
namespace Admin\Controller;
use Think\Controller;
class CommonController extends Controller{


    public function __construct()
    {
        parent::__construct();
        

        if (empty($_SESSION['adid']) || session('type')!='admin') {
            redirect(U('Admin/Login/index'));
            exit;

        }
    	//dump($this);
    }
	
	/*public function checklogins(){
		
		echo 1;

        if (empty($_SESSION['AdId']) || session('type')!='cms_admin') {
            redirect(U('Admin/Login/index'));
            exit;

        }
	}*/

   
    
}