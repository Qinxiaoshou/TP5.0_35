<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:79:"F:\wamp64\www\TP5.0_35\TP5.0\public/../application/index\view\index\test28.html";i:1477636467;}*/ ?>
{--layout name="layout" /--}
{--__NOLAYOUT__--}
<h2>用户列表（<?php echo $count; ?>）</h2> 
<?php if(is_array($list) || $list instanceof \think\Collection): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$user): $mod = ($i % 2 );++$i;?>
<div class="info">
ID：<?php echo $user['user_id']; ?><br/>
昵称：<?php echo $user['nickname']; ?><br/>
邮箱：<?php echo $user['email']; ?><br/>
生日：<?php echo $user['birthday']; ?><br/>
</div>
<?php endforeach; endif; else: echo "" ;endif; ?>