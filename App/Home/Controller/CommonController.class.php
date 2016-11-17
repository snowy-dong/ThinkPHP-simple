<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/10/9 0009
 * Time: 9:15
 */

namespace Home\Controller;
use Think\Controller;

class CommonController extends Controller
{
    public function _initialize()
    {
        //判断用户是否已经登录
        if (!isset($_SESSION['uid'])) {
            $this->error('请先登录再进行浏览', U('Login/login'), 1);
        }
    }
}