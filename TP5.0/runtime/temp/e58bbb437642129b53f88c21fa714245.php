<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:82:"F:\wamp64\www\TP5.0_35\TP5.0\public/../application/before\view\blogc\timeline.html";i:1502715902;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>时间轴-HuiZhou</title>
	<link rel="stylesheet" type="text/css" href="/before/css/reset.css">
	<link rel="stylesheet" type="text/css" href="/before/css/base.css">
	<link rel="stylesheet" type="text/css" href="/before/css/timeline.css">
	<link rel="stylesheet" type="text/css" href="/before/font/iconfont/iconfont.css">
	<link rel="Shortcut Icon" href="/before/images/luo.jpg">
</head>
<body>
		<!-- 导航和logo文字开始 -->
		<div class="onepx"></div>
		<div class="nav w">
			<span class="logo-text"><a href="<?php echo url('showblog/showblog'); ?>">HuiZhou</a></span>
			<span class="guid">
				<ul>
					<li><a href="<?php echo url('showblog/showblog'); ?>">首页</a></li>
					<li><a href="<?php echo url('timeline/timeline'); ?>">时间轴</a></li>
					<li><a href="<?php echo url('about/about'); ?>">关于</a></li>
				</ul>
			</span>
		</div>
        <h1 class="th w">时间轴</h1>
		<!-- 内容开始 -->
		<div class="content w">
			
			<ul class="list">
				<?php if(is_array($list) || $list instanceof \think\Collection): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$blog): $mod = ($i % 2 );++$i;?>
				<li>
					<span class="creattime"><?php echo $blog['create_time']; ?></span>
					<span class="blgo-title">
						<a href="<?php echo url('before/ablogshow/ablogshow',array('title' =>$blog['title'])); ?>"><?php echo $blog['title']; ?></a>
					</span>
				</li>
				<?php endforeach; endif; else: echo "" ;endif; ?>

			</ul>
		</div>

		
		<!-- 页脚 -->
		<div class="footer">
			<div class="fc w">
				<div class="content">
					<div class="piclink">
						<a class="iconfont icon-youxiang" href="#">
						</a>
						<a class="iconfont icon-githubsquare" href="#">
						</a>
						<a class="iconfont icon-Q" href="#">
						</a>
						<a class="iconfont icon-zhihu" href="#">
						</a>
				    </div>
				     <p>由 ThinkPHP5.0 强力驱动 主题 - Even<br>
				        © 2017 - Now  HuiZhou
				    </p>
				</div>
			</div>	
		</div>
</body> 
</html>