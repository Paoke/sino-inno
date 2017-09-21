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

        }else{
            $this->display();
        }
    }

}