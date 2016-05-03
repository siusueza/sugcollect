<?php
	error_reporting(E_ALL ^ E_DEPRECATED);
	$con = mysql_connect("localhost","root","");
		if (!$con)
		{
			die('Could not connect: ' . mysql_error());
		}

	mysql_query("SET NAMES 'utf8'",$con); 
	mysql_select_db("sugcollect", $con);

?>