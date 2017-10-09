<?php


namespace Admin\Controller;
use Common\Controller\CommonControllers;


class ActivityController extends CommonControllers
{

    public function activityList()
    {
        $arrData = D('activity')->order('acid desc')->select();
        $this->assign('arrData', $arrData);
        $this->assign('size', sizeof($arrData));
        $this->display();
    }

    public function addActivity(){
        if(IS_POST){
            $_POST['actimg']=$_POST['indeximg_position'];
            $intNum = D('activity')->add($_POST);
            if ($intNum) {
                echo 'true';
            } else {
                echo 'false';
            }
        }else{
            $this->display();
        }
    }

    public function editActivity($acid){
        if(IS_POST){
            $_POST['actimg']=$_POST['indeximg_position'];
            $intNum=D('activity')->where("acid=$acid")->save($_POST);
            if ($intNum) {
                echo 'true';
            } else {
                echo 'false';
            }
        }else{
            $arrData=D('activity')->where("acid=$acid")->find();
            $this->assign('arrData',$arrData);
            $this->display();
        }
    }

}