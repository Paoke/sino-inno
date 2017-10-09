<?php

namespace Index\Controller;
use Index\Common\CommonController;
use Model\ArticleModel;


class ArticleController extends CommonController
{

    public function article1(){

        $articleModel=new ArticleModel();
        $intCount=$articleModel->count("acid=1 and status=1");

        $page=  getpage($intCount, 8);
        $arrShow=$page->show();
        $arrData=$articleModel->search("acid=1 and status=1", $page->firstRow.','.$page->listRows, "arid desc");
        $arrGroom=$articleModel->search("acid=1 and status=1", 6, "read_times desc");

        $this->assign('arrShow',$arrShow);
        $this->assign('arrData',$arrData['rows']);
        $this->assign('arrGroom',$arrGroom['rows']);
        $this->display();

    }

}