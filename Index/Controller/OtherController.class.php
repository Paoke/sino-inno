<?php


namespace Index\Controller;
use Index\Common\CommonController;

class OtherController extends CommonController
{

    public function partner(){

        $arrCooperation=D('cooperation')->where('status=1')->order('category asc,coid asc')->select();
        $this->assign('arrCooperation',$arrCooperation);
        $this->display();

    }

    public function declaration(){

        $arrData=D('config')->where(array('key' => 'declaration'))->find();
        $this->assign('arrData',$arrData);
        $this->display();
    }

}