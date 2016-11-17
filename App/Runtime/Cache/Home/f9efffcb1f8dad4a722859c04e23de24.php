<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>goods</title>
    <link rel="stylesheet" href="/Myphp/Public/bootstrap/dist/css/bootstrap.css"/>
    <link rel="stylesheet" href="/Myphp/Public/HomeStatic/public.css"/>
    <script type="text/javascript"  language="javascript" src="/Myphp/Public/jquery/dist/jquery.js" ></script>
    <script type="text/javascript" language="javascript"  src="/Myphp/Public/bootstrap/dist/js/bootstrap.js" ></script>
</head>
<body>

<br/><br/><br/>
<form method="post"  action="<?php echo U('Login/islogin');?>" class="form-inline">
    用户名：<input type="text" class="form-control" name="userName" />
    密码：  <input type="password"  class="form-control" name="userPassword" />
    <input class="btn" type="submit" value="登陆"/>
    <a class="btn btn-primary" href="<?php echo U('Reg/reg');?>">注册</a>
</form>



</body>
</html>