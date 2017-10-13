<?php

namespace Index\Controller;
use Index\Common\CommonController;
use Model\ArticleModel;



class ArticleController extends CommonController
{


    public function article($acid){

        $articleModel=new ArticleModel();
        $intCount=$articleModel->count("acid=$acid and status=1");

        $page=  getpage($intCount, 8);
        $arrShow=$page->show();
        $arrData=$articleModel->search("acid=$acid and status=1", $page->firstRow.','.$page->listRows, "time desc,arid desc");
        $arrGroom=$articleModel->search("acid=$acid and status=1", 6, "read_times desc");

        $this->assign('arrShow',$arrShow);
        $this->assign('arrData',$arrData['rows']);
        $this->assign('arrGroom',$arrGroom['rows']);
        $this->assign('intCount',$arrGroom['count']);
        $this->assign('acid',$acid);
        $this->display();

    }

    public function detail($arid){

        D('article')->where("arid=$arid")->setInc('read_times');
        $articleModel=new ArticleModel();
        $arrData=D('article')->where("arid=$arid")->find();

        $acid=$arrData['acid'];
        $arrGroom=$articleModel->search("acid=$acid and status=1 and arid !=$arid", 2, "read_times desc");

        $this->assign('arrData',$arrData);
        $this->assign('arrGroom',$arrGroom['rows']);
        $this->display();

    }

    public function trade(){

        $articleModel=new ArticleModel();
        $intCount=$articleModel->count("acid=6 and status=1");

        $page=  getpage($intCount, 8);
        $arrShow=$page->show();
        $arrData=$articleModel->search("acid=6 and status=1", $page->firstRow.','.$page->listRows, "time desc,arid desc");
        $arrGroom=$articleModel->search("acid=6 and status=1", 4, "read_times desc");

        $this->assign('arrShow',$arrShow);
        $this->assign('arrData',$arrData['rows']);
        $this->assign('arrGroom',$arrGroom['rows']);
        $this->display();
    }

    public function tradeDetail($arid){

        D('article')->where("arid=$arid")->setInc('read_times');
        $articleModel=new ArticleModel();
        $arrData=D('article')->where("arid=$arid")->find();

        $acid=$arrData['acid'];
        $arrGroom=$articleModel->search("acid=$acid and status=1 and arid !=$arid", 2, "read_times desc");

        $this->assign('arrData',$arrData);
        $this->assign('arrGroom',$arrGroom['rows']);
        $this->display();
    }

}