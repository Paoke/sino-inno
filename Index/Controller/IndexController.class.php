<?php

namespace Index\Controller;
use Index\Common\CommonController;


class IndexController extends CommonController
{
    public function index(){
        $arrBanner=D('banner')->where('status=1')->order('orderid asc')->select();
        $arrArticle=D('article')->where('status=1')
            ->field('arid,title,summary,acid,read_times,indeximg,thumbimg,from,time')
            ->limit(5)->order('arid desc')
            ->select();
        $this->assign('arrBanner',$arrBanner);
        $this->assign('arrArticle',$arrArticle);
        $this->display();
    }
}