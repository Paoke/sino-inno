<?php


namespace Admin\Controller;

use Common\Controller\CommonControllers;

class SetupController extends CommonControllers
{
    public function bannerList()
    {
        $arrData = D('banner')->order('orderid asc')->select();
        $this->assign('arrData', $arrData);
        $this->assign('size', sizeof($arrData));
        $this->display();
    }

    public function add($action)
    {

        if ($action == 'banner') {
            $intMax = D("$action")->max('orderid');
            $_POST['img'] = $_POST['img_position'];
            $_POST['time'] = date('Y-m-d');
            $_POST['orderid'] = $intMax + 1;
        } else {
            $_POST['name'] = $_POST['name'];
            $_POST['logo'] = $_POST['img_position'];
            $_POST['link'] = $_POST['link'];
        }

        $_POST['status'] = '1';

        $intNum = D("$action")->add($_POST);
        if ($intNum) {
            echo 'true';
        } else {
            echo 'false';
        }
    }

    public function viewPic($img)
    {
        $this->assign('img', $img);
        $this->display();
    }

    public function editWord()
    {
        if (IS_POST) {
            $data = I('post.');
            foreach ($data as $key => $value) {
                D('config')->where(array('key' => $key))->data(array('value' => $value))->save();
            }
            echo 'true';
        } else {
            $arrData = D('config')->select();
            $this->assign('arrData', $arrData);
            $this->display();
        }
    }

    public function cooperationList()
    {
        $arrData = D('cooperation')->select();
        $this->assign('arrData', $arrData);
        $this->assign('size', sizeof($arrData));
        $this->display();
    }
}