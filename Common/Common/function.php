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