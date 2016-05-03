<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>发布帖子</title>
	<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">
	<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
<body>
	<?php 
		include 'header.php';
	 ?>
	<div class="container-fluid">
		<div class="row">
			<form class="form-signin" role="form" action="publishnews.php" method="post">
				<div class="col-md-offset-2" >
				    <div class="input-group" style="float: left;">
				      	<select class="form-control" name="sort">
					  	<option>食堂</option>
			  		    <option>宿舍</option>
					  	<option>教室</option>
					  	<option>校医院</option>
					  	<option>校园环境</option>
					  	<option>其他</option>
					 	</select> 
					</div>
					<div style="float: left;">
						<input type="text" name="title" class="form-control" placeholder="标题" />
					</div>  
					<p><div style="width:1000px;float:none;position: relative;top: 10px;"> <textarea class="form-control" rows="20" name="detail" placeholder="正文"></textarea></p>
					
					<button class="btn btn-lg btn-primary col-sm-offset-9" type="submit" style="width:200px;position:relative;top:10px;">发布</button></div>
	  			</div>
	  		</form>
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