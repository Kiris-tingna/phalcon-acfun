<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2016/8/14
 * Time: 17:57
 */
namespace Mptt;
use PaCategory as PaCategory;
use \Phalcon\Di as Di;
/**
 * Class Mptt
 * 预排序遍历树结构
 * @package Mptt
 */
class Mptt
{
    /**
     * 查询子集
     */
    static public function listById($pid)
    {
        return PaCategory::find("pid = $pid");
    }

    /**
     * 查询子孙节点的范围
     */
    static public function listByRange($id)
    {
        $cate = PaCategory::findFirst(array(
            'columns'=> 'lft, rgt',
            'conditions'=>"id = ?1",
            'bind'=>array(1 => $id)
        ));

        return PaCategory::find(array(
            'conditions'=>"lft BETWEEN ?1 AND ?2",
            'bind'=>array(1 => $cate->lft, 2 => $cate->rgt)
        ));
    }

    /**
     * 查询某代的子集
     */
    static public function insert($pid, $name)
    {
        $manager = Di::getDefault()->get('modelsManager');
        if($pid == 0)
        {
            $maxright = PaCategory::maximum(array(
                'column'=>"rgt",
                'condition'=>'pid = 0'
            ));
            $_left = $maxright + 1;
        }else{
            $cate = PaCategory::findFirst("id = $pid");
            $_left = $cate->rgt;
        }

        $phql = "UPDATE PaCategory SET rgt = rgt + 2 WHERE rgt >= $_left";
        $manager->executeQuery($phql);
        $phql = "UPDATE PaCategory SET lft = lft + 2 WHERE lft > $_left";
        $manager->executeQuery($phql);

        $pa_category = new PaCategory();
        $pa_category->name = $name;
        $pa_category->pid = $pid;
        $pa_category->lft = $_left;
        $pa_category->rgt = $_left + 1;

        if(!$pa_category->save()){
            return false;
        }else{
            return true;
        }
    }
}