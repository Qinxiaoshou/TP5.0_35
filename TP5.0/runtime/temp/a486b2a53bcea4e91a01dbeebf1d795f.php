<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:77:"F:\wamp64\www\TP5.0_35\TP5.0\public/../application/index\view\user\login.html";i:1502179822;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登录界面</title>
    <style type="text/css">
        div{
            height:500px;
            width:300px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
<div>
    <h1>登录界面</h1>
    <form method="post" class="form" action="<?php echo url('index/rigest/login'); ?>">
        姓名: <input type="text" class="text" name="username"/><br>
        密码:<input type="password" class="text" name="password"/><br>
        <!--邮箱:<input type="text"  class="text" name="email" /><br>-->
        <input type="submit" name="btn" value="登录">
    </form>
    <a href="<?php echo url('index/rigest/rigest'); ?>">注册</a>
</div>

</body>
</html>