<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:80:"F:\wamp64\www\TP5.0_35\TP5.0\public/../application/index\view\rigest\rigest.html";i:1502175656;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>注册用户</title>
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
         <h1>注册界面</h1>
         <form method="get" class="form" action="<?php echo url('index/rigest/add'); ?>">
             姓名: <input type="text" class="text" name="username"/><br>
             密码:<input type="password" class="text" name="password"/><br>
             邮箱:<input type="text"  class="text" name="email" /><br>
             <input type="submit" name="btn" value="注册">
         </form>
     </div>

</body>
</html>