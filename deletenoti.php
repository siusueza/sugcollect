<?php
	include 'db.php';
	$ti=$_GET["title"];
	$del = "delete from notification where title='$ti'";
	mysql_query($del);
?>