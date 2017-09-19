<?php

namespace Admin\Controller;
use Common\Controller\CommonControllers;


class UsersController extends CommonControllers
{
    public function adminShow()
    {
        $this->display();
    }

    public function adminEdit()
    {
         if(IS_POST){
             $intNum = D('admin')->where("adminusername='" . session('arrUser')['adminusername'] . "' and password='" . session('arrUser')['password'] . "'")->save($_POST);
             if ($intNum) {
                 $arrData = array(
                     'result' => 'true'
                 );
             } else {
                 $arrData = array(
                     'result' => 'false'
                 );
             }
             $arrUser = D('admin')->where("adminusername='" . $_POST['adminusername'] . "' and password='" . session('arrUser')['password'] . "'")->find();
             session('arrUser', $arrUser);
             $this->ajaxReturn(json_encode($arrData));
         }else{
             $this->display();
         }
    }

    public function changePassword()
    {
        if (IS_POST) {
            $intNum = D('admin')->where("adminusername='" . session('arrUser')['adminusername'] . "' and password='" . session('arrUser')['password'] . "'")->save($_POST);
            if ($intNum) {
                $arrData = array(
                    'result' => 'true'
                );
            } else {
                $arrData = array(
                    'result' => 'false'
                );
            }
            $arrUser = D('admin')->where("adminusername='" . session('arrUser')['adminusername'] . "' and password='" . $_POST['password'] . "'")->find();
            session('arrUser', $arrUser);
            $this->ajaxReturn(json_encode($arrData));
        } else {
            $this->assign('arrUser', session('arrUser'));
            $this->display();
        }
    }
}