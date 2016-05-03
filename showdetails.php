<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>发布帖子</title>
	<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">
	<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="lanrenzhijia.css" media="all">
	<script src="jquery.min.js"></script>
	<script>
	jQuery(document).ready(function($) {
		$('.theme-login').click(function(){
			$('.theme-popover-mask').fadeIn(100);
			$('.theme-popover').slideDown(200);
		})
		$('.theme-poptit .close').click(function(){
			$('.theme-popover-mask').fadeOut(100);
			$('.theme-popover').slideUp(200);
		})

	})	
	</script>
</head>
<body>
	<?php 
		include 'header.php';
	 ?>
	<div class="container-fluid">
		<div class="row">
			<table width="1000" class="col-sm-offset-2">
			<tr>
				<td colspan="3">
				<?php
					echo "【$_GET[sort]】";
					echo "$_GET[title]";
					echo "<a class='theme-login' href='#' style='float:right'>回复</a>";
				?>
				<hr size="300"/>
				</td>
			</tr>

			<tr>
				<td width="50">
				<?php
					echo "$_GET[name]";
				?>
				<hr size="300"/>
				</td>

				<td width="450">
				<?php
					echo "$_GET[details]";
				?>
				<span style='float:right'>2016.3.29</span>
				<hr size="300"/>
				</td>

			</tr>

			<tr>
				<td width="50">
				薛雨晴
				<hr size="300"/>
				</td>

				<td width="450">
				同感！一到期末到处都没位置！！！
				<span style='float:right'>2016.3.29</span>
				<hr size="300"/>
				</td>
			</tr>

			<tr>
				<td width="50">
				monica
				</td>

				<td width="450">
				楼主说出了我们的心声……
				<span style='float:right'>2016.3.30</span>
				</td>
			</tr>

			</table>
			<hr width="1000" size="10" class="col-sm-offset-2" />
		</div>

	</div>
	<div class="col-sm-offset-4" style="padding-bottom:60px;"/>	
	<div style="position:absolute;bottom:0;height:60px;text-center;">
	<?php 
		include 'footer.php';
	 ?>	
	</div>
	<div class="theme-popover">
    <div class="theme-poptit">
        <a href="javascript:;" title="关闭" class="close">×</a>
         <h3>回帖</h3>
    </div>
    <div class="theme-popbod dform">
        <form class="theme-signin" name="loginform" action="" method="post">
        <input class="ipt" type="text" name="log" style="width:400px;height: 200px" />
        <div><button class="btn btn-lg btn-primary" type="submit" style="width:20px;position:relative;top:10px;float: right;">发布</button></div>
        </form>
     	</div>
	</div>
	<div class="theme-popover-mask"></div>
</body>
</html>