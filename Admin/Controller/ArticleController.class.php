<?php

namespace Admin\Controller;
use Common\Controller\CommonControllers;

class ArticleController extends CommonControllers
{
    public function categoryList()
    {
        $arrData = D('article_category')->select();
        $this->assign('arrData', $arrData);
        $this->assign('size', sizeof($arrData));
        $this->display();
    }


    public function add($action){
        if(IS_POST){
            if($action=='article'){
                $intMax = D("$action")->max('orderid');
                $_POST['indeximg']=$_POST['indeximg_position'];
                $_POST['thumbimg']=$_POST['thumbimg_position'];
                $_POST['orderid']=$intMax + 1;
            }
            $intNum = D("$action")->add($_POST);
            if ($intNum) {
                echo 'true';
            } else {
                echo 'false';
            }
        }else{
            $this->display();
        }
    }

    public function addArticle(){
        $arrData = D('article_category')->select();
        $this->assign('arrData', $arrData);
        $this->display();
    }

    public function articleList(){
        $arrData = D('article')->order('arid desc')->select();
        $arrCategories=D('article_category')->select();
        $this->assign('arrData', $arrData);
        $this->assign('size', sizeof($arrData));
        $this->assign('arrCategories',$arrCategories);
        $this->display();
    }

    public function editArticle($arid){
        if(IS_POST){
            $_POST['indeximg']=$_POST['indeximg_position'];
            $_POST['thumbimg']=$_POST['thumbimg_position'];
            $intNum=D('article')->where('arid='.$arid)->save($_POST);
            if($intNum){
                echo "true";
            }else{
                echo "false";
            }
        }else{
            $arrData=D('article')->where('arid='.$arid)->find();
            $arrCategories=D('article_category')->select();
            $this->assign('arrData',$arrData);
            $this->assign('arrCategories',$arrCategories);
            $this->display();
        }
    }
}