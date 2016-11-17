<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/10/9 0009
 * Time: 10:19
 */

namespace Home\Controller;


class ListController  extends CommonController
{

    public function goodsList(){
//获取分类
        $goodsClass=M('goodsclass')->select();
//        dump($goodsClass);
        $this->goods_class=$goodsClass;


        $goods=M('goods');
//       $goods= $goods ->join('think_goodsclass ON think_goods.goodsclass = think_goodsclass.class_id ')->order('id')->select();
////        dump($goods);
//
//获取表的字段名
//        $fields = $goods->getDbFields();
//        dump( $fields);

        if($_GET['goodsname']!="") {
            $data['goodsname']= array('like','%'.$_GET['goodsname'].'%');
        }
        if(($_GET['goods_class']!="-1")&&($_GET['goods_class']!=null)){
            $data['goodsclass']=$_GET['goods_class'];
        }
//        $goodslist=$goods->where($data)->join('think_goodsclass ON think_goods.goodsclass = think_goodsclass.class_id ')->order('id')->page('1,10')->select();
        $tatal=$goods->where($data)->join('think_goodsclass ON think_goods.goodsclass = think_goodsclass.class_id ')->order('id')->limit($page->firstRow.','.$page->listRows)->count();


        $page= new \Think\Page($tatal,10);// 实例化分页类 传入总记录数和每页显示的记录数(10)$show       = $Page->show();// 分页显示输出
        $pagenum=$page->show();
        $goodslist=$goods->where($data)->join('think_goodsclass ON think_goods.goodsclass = think_goodsclass.class_id ')->order('id')->limit($page->firstRow.','.$page->listRows)->select();
        $this->assign('goodslist',$goodslist);
        $this->assign('page',$pagenum);

        $this->display();

    }

    public function goodsAdd(){
        $goodsClass=M('goodsclass')->select();
//        dump($goodsClass);
        $this->goods_class=$goodsClass;

        $this->display();


    }

    public function goodsDel($id){
        echo  $id;
        $goods=M('goods');
        $where['id']=$id;
        $result = $goods -> where($where)->delete();
        if ($result) {
            $this->success('删除成功',U('List/goodsList'));
        } else {
            exit();
        }
    }
    public function goodsUpdate(){

        $goods=M('goods');
        $where['id']=$_POST['goodsId'];
        $data['goodsname'] = $_POST['goodsName'];
        $data['goodsprice'] = $_POST['goodsPrice'];
        $data['goodsclass'] = $_POST['goods_class'];
        $result = $goods -> where($where)->save($data);
        if ($result) {
            $this->success('修改成功',U('List/goodsList'));
        } else {
            exit();
        }
    }

    public function goods_Add(){

        if ($_POST["goodsName"]&& $_POST['goodsPrice'] && $_POST['goods_class']) {
            $data['goodsname'] = $_POST['goodsName'];
            $data['goodsprice'] = $_POST['goodsPrice'];
            $data['goodsclass'] = $_POST['goods_class'];
            $goods=M('goods');
            $result = $goods->add($data);
                if ($result) {
                    $this->success('新增成功',U('List/goodsAdd'));
                } else {
                    exit();
                }
        } else {
            $this->error('请检查是否有未填写的信息',U('List/goodsAdd'));
        }

    }
    public function goodsClass(){

       $list=M('goodsclass')->select();
//        dump($list);
        $this->list=$list;
        $this->display();
    }
    public function AddGoodsClass()
    {
        if ($_POST["className"]) {
            $data['className'] = $_POST['className'];
            $goodsClass = M('goodsclass');
            $where['className']=$_POST['className'];

            $count =M('goodsclass')->where($where)->select();

            $count=count($count);
            if($count<1){
                $result = $goodsClass->add($data);
                if ($result) {
                    $this->success('新增成功',U('List/goodsClass'));
                } else {
                    exit();
                }

            }else{
                $this->error('此分类已存在',U('List/goodsClass'));
            }

        } else {
            $this->error('请检查是否有未填写的信息',U('List/goodsClass'));
        }

    }



}