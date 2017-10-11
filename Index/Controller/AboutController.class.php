<?php


namespace Index\Controller;
use Index\Common\CommonController;


class AboutController extends CommonController
{

    public function introduce(){

        $arrData=D('config')->where(array('key' => 'about'))->find();
        $arrDevelop=D('config')->where(array('key' => 'summary'))->order('time desc')->find();
        $this->assign('arrData',$arrData);
        $this->assign('arrDevelop',$arrDevelop);
        $this->display();

    }

    public function team(){
        $arrData=D('config')->where(array('key' => 'organization'))->find();
        $arrMember=D('team')->where('category=1 and status=1')->select();
        $arrAdvisor=D('team')->where('category=2 and status=1')->select();
        $arrDevelop=D('config')->where(array('key' => 'summary'))->order('time desc')->find();

        $this->assign('arrData',$arrData);
        $this->assign('arrMember',$arrMember);
        $this->assign('arrAdvisor',$arrAdvisor);
        $this->assign('arrDevelop',$arrDevelop);
        $this->display();
    }

    public function develop($time){

        $arrTime=D('config')->where(array('key' => 'summary'))->order('time desc')->field('time')->select();
        $arrData=D('config')->where(array('key' => 'summary','time'=>$time))->order('time desc')->find();
        $this->assign('arrTime',$arrTime);
        $this->assign('arrData',$arrData);
        $this->assign('time',$time);
        $this->display();

    }

}