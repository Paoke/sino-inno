<?php

namespace Admin\Controller;
use Common\Controller\CommonControllers;


class AboutController extends CommonControllers
{
    public function edit($id){
        if(IS_POST){
            $_POST['value']=$_POST['content'];
            D('config')->where("id=$id")->save($_POST);
            echo 'true';

        }else{
            $arrData=D('config')->where("id=$id")->find();
            $this->assign('arrData',$arrData);
            if($id==5){
                $template='editAbout';
            }elseif($id==6){
                $template='editOrganization';
            }else{
                $template='editDeclaration';
            }
            $this->display($template);
        }
    }

    public function teamList($category){
        $arrData=D('team')->where("category=$category")->order('orderid asc')->select();
        $this->assign('size', sizeof($arrData));
        $this->assign('arrData',$arrData);
        $this->display();
    }

    public function addMember(){
        if(IS_POST){
            $intMax = D("team")->where('category='.$_POST['category'])->max('orderid');
            $_POST['header']=$_POST['img_position'];
            $_POST['orderid']=$intMax + 1;
            $intNum=D('team')->add($_POST);
            if ($intNum) {
                echo 'true';
            } else {
                echo 'false';
            }
        }else{
            $this->display();
        }
    }

    public function editMember($teid){
        if(IS_POST){
            $_POST['header']=$_POST['img_position'];
            $intNum=D('team')->where("teid=$teid")->save($_POST);
            if ($intNum) {
                echo 'true';
            } else {
                echo 'false';
            }
        }else{
            $arrData=D('team')->where('teid='.$teid)->find();
            $arrData['summary']=str_replace("<br>","\n",$arrData['summary']);
            $this->assign('arrData',$arrData);
            $this->display();
        }
    }

    public function summaryList(){
        $key='summary';
        $arrData=D('config')->where(array('key' => $key))->select();
        $this->assign('arrData',$arrData);
        $this->assign('size', sizeof($arrData));
        $this->display();
    }

    public function addSummary(){
        if(IS_POST){
            $_POST['value']=$_POST['content'];
            $_POST['key']='summary';
            $intNum = D("config")->add($_POST);

            if ($intNum) {
                echo 'true';
            } else {
                echo 'false';
            }
        }else{
            $this->display();
        }
    }

    public function editSummary($id){
        if(IS_POST){
            $_POST['value']=$_POST['content'];
            $_POST['key']='summary';
            $intNum=D('config')->where("id=$id")->save($_POST);
            if ($intNum) {
                echo 'true';
            } else {
                echo 'false';
            }
        }else{
            $arrData=D('config')->where('id='.$id)->find();
            $this->assign('arrData',$arrData);
            $this->display();
        }
    }
}