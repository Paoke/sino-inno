<?php

//照片上传

function picture(){
    $upload=new Think\Upload();
    $upload->maxSize=8145728;
    $upload->autoSub=true;
    $upload->exts=array('jpg','gif','png','jpeg');
    $upload->rootPath='./Upload/';
    $upload->savePath='';
    $upload->subName=array('date','Ymd');
    $info=$upload->upload();
    return $info;
}

function order($datasheet,$column,$id,$pnid){

    $orderid1=D("$datasheet")
        ->where("$column=".$pnid)
        ->field('orderid')
        ->find();
    $orderid2=D("$datasheet")
        ->where("$column=".$id)
        ->field('orderid')
        ->find();

    $intNum1=D("$datasheet")
        ->where("$column=".$id)
        ->setField('orderid',(int)($orderid1['orderid']));
    $intNum2=D("$datasheet")
        ->where("$column=".$pnid)
        ->setField('orderid',(int)($orderid2['orderid']));

    if($intNum1&&$intNum2){
        return true;
    }else{
        return false;
    }
}

/**
 * TODO 基础分页的相同代码封装，
 * @param $count 要分页的总记录数
 * @param int $pagesize 每页查询条数
 * @return \Think\Page
 */
function getpage($count, $pagesize)
{
    $p = new Think\Page($count, $pagesize);
    $p->setConfig('header', '<li class="rows">共<b>%TOTAL_ROW%</b>条记录&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</li>');
    $p->setConfig('prev', '<<');
    $p->setConfig('next', '>>');
    $p->setConfig('last', '末页');
    $p->setConfig('first', '首页');
    $p->setConfig('theme', '%FIRST%%UP_PAGE%%LINK_PAGE%%DOWN_PAGE%%END%%HEADER%');
    $p->lastSuffix = false; //最后一页不显示为总页数
    return $p;
}