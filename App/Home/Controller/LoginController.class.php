<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function login(){
        $this->display();
    }
    public function islogin(){

        if($_POST['userName'] && $_POST['userPassword'])
        {
            $where['userName']= $_POST['userName'];
            $where['userPassword']= $_POST['userPassword'];
            $where['_logic']='and';

//          $where['字段名']=array(表达式，查询条件);*/

            $data=M('user')->where($where)->select();

            $count=count($data);

            if($count>0){
                $this->success('登录中...', U("Index/home"));
                session_start();
                session('uid', $data[0]['id']);
//                $_SESSION['uid']= $data[0]['id'];
//                dump( $data[0]['id']);
            }else{
                $this->error('该用户不存在');

            }

        } else{
            echo '用户名或密码不能为空';

        }
    }
    public function loginOut(){
        session('uid',null);
        $this->success('注销成功', U("Login/login"));

    }

}