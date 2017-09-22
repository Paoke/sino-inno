<?php


namespace Admin\Controller;
use Common\Controller\CommonControllers;


class ActivityController extends CommonControllers
{

    public function activityList()
    {
        $arrData = D('activity')->select();
        $this->assign('arrData', $arrData);
        $this->assign('size', sizeof($arrData));
        $this->display();
    }

    public function addActivity(){
        if(IS_POST){
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