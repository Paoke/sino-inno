<?php

/**
 * 前台公共控制器
 */

namespace Index\Common;
use Think\Controller;

class CommonController extends Controller{
    
    function __construct() {
        parent::__construct();
        if(session('word')==null){
            $strSql="SELECT * FROM `sino_config` WHERE `key` IN  ('record_no','copyright','support','address')";
            $arrWord=D('config')->query($strSql);
            session('word',$arrWord);
        }else{

        }
    }
}

