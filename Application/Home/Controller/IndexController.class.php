<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
	public function index(){
		$this->display();
    }
    public function upload(){

    	$config = array(
    'maxSize'    =>    3145728,
    'rootPath'   =>    './Uploads/',
    'savePath'   =>    '',
    'saveName'   =>    array('uniqid',''),
    'exts'       =>    array('jpg', 'gif', 'png', 'jpeg'),
    'autoSub'    =>    true,
    'subName'    =>    array('date','Ymd'),
);
$upload = new \Think\Upload($config);// 实例化上传类
    $upload->maxSize   =     3145728 ;// 设置附件上传大小
    $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
    $upload->rootPath  =     './Uploads/'; // 设置附件上传根目录
    $upload->savePath  =     ''; // 设置附件上传（子）目录
    // 上传文件 
    $info   =   $upload->upload();
    if(!$info) {// 上传错误提示错误信息
        $this->error($upload->getError());
    }else{// 上传成功
       $this->ajaxreturn(array("msg"=>1),"json");
    }
    }
}
