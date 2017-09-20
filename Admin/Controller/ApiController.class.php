<?php

namespace Admin\Controller;
use Common\Controller\CommonControllers;

class ApiController extends CommonControllers
{
    public function uploadPic($type){
        $info=  picture();
        if($info){
            $arrRet=array(
                'result'=>'true',
                'img'=>$info["$type"]['savepath'].$info["$type"]['savename']
            );
        }else{
            $arrRet=array(
                'result'=>'false'
            );
        }
        echo json_encode($arrRet);
    }

    public function orderMember($datasheet,$column,$id, $pnid)
    {

        $ret = order($datasheet, $column, $id, $pnid);

        if ($ret) {
            echo 'true';
        } else {
            echo 'false';
        }
    }

    public function startOrStop($datasheet,$column,$id, $status)
    {
        $intNum = D("$datasheet")->where("$column=" . $id)->setField('status', trim($status));
        if ($intNum) {
            echo 'true';
        } else {
            echo 'false';
        }
    }

    public function delete($datasheet,$column,$id)
    {
        $intNum = D("$datasheet")->where("$column=" . $id)->delete();
        if ($intNum) {
            echo 'true';
        } else {
            echo 'false';
        }
    }
}