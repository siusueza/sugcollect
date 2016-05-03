<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>校园建设建议征集系统</title>
	<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">
	<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="/jquery/jquery-1.11.1.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function()
	{
		$("#notificationbutton").click(function()
		{
			$("#notification").show();
			$("#news").hide();
			$("#messhall").hide();
		});

  		$("#newsbutton").click(function()
  		{
  			$("#news").show();
  			$("#notification").hide();
  			$("#messhall").hide();
  		});
	});
	</script>
</head>
<body>
	<?php 
		include 'header.php';
	 ?>
	<div class="container-fluid">
		<div class="row">
			<div class="btn-group col-sm-offset-1" role="group">
				<button id="notificationbutton" type="button" class="btn btn-default" style="width:200px">公告</button>
  				<button id="newsbutton" type="button" class="btn btn-default" style="width:200px">最新动态</button>
				<button id="newsbutton" type="button" class="btn btn-default" style="width:200px">食堂</button>
  				<a class="btn btn-default" style="width:200px" href="publish.php">发帖</a>
  				<a class="btn btn-default" style="width:200px" href="publish.php">发布公告</a>
  				<button type="button" class="btn btn-default" style="width:200px">我的消息</button>
			</div>
			<div id="notification" class="col-md-offset-2" style="width:750px">
				<?php
					include 'notification.php';
				?>
			</div>
			<div id="news" class="col-md-offset-2" style="display:none">
				<?php
					include 'shownews.php';
				?>
			</div>
			<div id="messhall" class="col-md-offset-2" style="display:none">
					messhallbutton
			</div>
		</div>
	</div>
	<div class="col-sm-offset-4" style="padding-bottom:60px;"/>	
	<div style="position:absolute;bottom:0;height:60px;text-center;">
	<?php 
		include 'footer.php';
	 ?>	
	</div>
</body>
</html>