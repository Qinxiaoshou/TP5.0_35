<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:79:"F:\wamp64\www\TP5.0_35\TP5.0\public/../application/before\view\blogc\index.html";i:1502777861;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>首页-HuiZhou</title>
	<link rel="stylesheet" type="text/css" href="/before/css/reset.css">
	<link rel="stylesheet" type="text/css" href="/before/css/base.css">
	<link rel="stylesheet" type="text/css" href="/before/css/index.css">
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

		<!-- 内容开始 -->
		<div class="content w">
			<ul class="list">
				<?php if(is_array($list) || $list instanceof \think\Collection): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$blog): $mod = ($i % 2 );++$i;?>
				<li>
					<div>
						<h3 class="title">
							<a href="<?php echo url('before/ablogshow/ablogshow',array('title' =>$blog['title'])); ?>"><?php echo $blog['title']; ?></a>
						</h3>
						<p class="ctime"><?php echo $blog['create_time']; ?>	</p>
						<div class="content-text">

						</div>
					</div>
					<div class="rmore"><a href="<?php echo url('before/ablogshow/ablogshow',array('title' =>$blog['title'])); ?>">阅读更多</a></div>
				</li>
				<?php endforeach; endif; else: echo "" ;endif; ?>

			</ul>
		</div>


		<!-- 下一页 -->
		<div class="next w">
			<?php echo $page; ?>
			<!--<a href="">下一页<i class="son"> >></i></a>-->
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