<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/9/30 0030
 * Time: 15:41
 */

namespace Home\Controller;
use Think\Controller;
class RegController extends Controller
{
    public function reg()
    {

            $this->display();

        }



    public function add()
    {
        echo "reg2 ";
        if ($_POST["userName"] && $_POST["userPassword"]) {
            echo "<br />";
            echo "Welcome " . $_POST['userName'] . "<br />";
            echo "You are " . $_POST['userPassword'] . "password";
            $data['userName'] = $_POST['userName'];
            $data['userPassword'] = $_POST['userPassword'];
            $User = M('user');
            $result = $User->add($data);
            if ($result) {    //设置成功后跳转页面的地址，默认的返回页面是$_SERVER['HTTP_REFERER']
                $this->success('新增成功', 'reg');
            } else {    //错误页面的默认跳转页面是返回前一页，通常不需要设置    $this->error('新增失败');
                exit();
            }
        }else{
            echo "请检查是否有未填写的信息 ";
        }
    }
}