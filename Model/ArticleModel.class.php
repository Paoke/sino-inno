<?php


namespace Model;
use Think\Model;


class ArticleModel extends Model
{
    /*
     *
     * param1 string $condition 查询条件
     * param2 string $limit 查询条数
     * param3 string $sort 排序
     * return array 返回结果
     */
    public function search($condition,$limit,$sort){
        $arrRows = $this -> where($condition) -> order($sort) -> limit($limit) -> select();
        $intCount= count($arrRows);
        $arrData=array("rows"=>$arrRows ? $arrRows:array(),"count"=>$intCount ? $intCount:0);
        return $arrData;
    }

    /*
     * 获取总数目
     * param1 string $condition 查询条件
     * return int
     */
    public function count($condition){
        $intCount=D("article") ->where($condition) ->count();
        return $intCount;
    }
}