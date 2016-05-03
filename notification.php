<meta charset='utf-8'>
<?php 
	include 'db.php';
	$query = "select * from notification";
	$result = mysql_query($query);
	while($row = mysql_fetch_array($result))
	{
		echo "<li><a href='#' class='noti' style='line-height:25px;'>";
		echo "【".$row['sort']."】".$row['title']." ";
		echo "</a>";
		echo "<p style='line-height:25px; width:720px; display:none'>".$row['details']."</p>";
		echo "<span style='float:right'><a href='#'>删除</a></span></li>";
	}
	echo "<script src='notification.js'></script>";
?>

