<?php


namespace Index\Controller;
use Index\Common\CommonController;


class AboutController extends CommonController
{

    public function introduce(){

        $arrData=D('config')->where(array('key' => 'about'))->find();
        $this->assign('arrData',$arrData);
        $this->display();

    }

    public function team(){
        $arrData=D('config')->where(array('key' => 'organization'))->find();
        $arrMember=D('team')->where('category=1 and status=1')->select();
        $arrAdvisor=D('team')->where('category=2 and status=1')->select();

        $this->assign('arrData',$arrData);
        $this->assign('arrMember',$arrMember);
        $this->assign('arrAdvisor',$arrAdvisor);
        $this->display();
    }

}