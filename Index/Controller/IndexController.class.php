<?php

namespace Index\Controller;
use Index\Common\CommonController;


class IndexController extends CommonController
{
    public function index(){
        $arrBanner=D('banner')->where('status=1')->order('orderid asc')->select();
        $arrArticle=D('article')->where('status=1')
            ->field('arid,title,summary,acid,read_times,indeximg,thumbimg,from,time')
            ->limit(11)->order('time desc,arid desc')
            ->select();
        $arrActivity=D('activity')->where('status=1')->limit(3)->order('acid desc')->select();

        foreach ($arrActivity as $k=>$v){
            $arrActivity[$k]['start_time']=date('Y-m-d H:i',strtotime($v['start_time']));
            $arrActivity[$k]['end_time']=date('H:i',strtotime($v['end_time']));
            if(strtotime($v['start_time'])>time()){
                $arrActivity[$k]['status']=1;
            }else{
                $arrActivity[$k]['status']=0;
            }
        }
        $arrCooperation=D('cooperation')->where('status=1')->order('category asc,coid asc')->select();

        $this->assign('arrBanner',$arrBanner);
        $this->assign('arrArticle',$arrArticle);
        $this->assign('arrActivity',$arrActivity);
        $this->assign('arrCooperation',$arrCooperation);
        $this->display();
    }
}