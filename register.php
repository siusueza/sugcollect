<meta charset="UTF-8">
<?php
	include 'db.php';

	@$number = $_POST["Number"];
	@$name = $_POST["Name"];
	@$nicname = $_POST["Nicname"];
	@$pswd = $_POST["Password"];
	@$rpswd = $_POST["Repassword"];
	$ins = "insert into user (name,pswd,time,role) values ('$nicname','$pswd',NOW(),'student')";


	$sel = mysql_query("select * from user where name = '$nicname'");

	$rep = mysql_query("select truename from student where number = '$number'");

	$rept = (mysql_fetch_array($rep));


	if($rpswd != $pswd)
	{
		echo "密码不一致";
	}
	else if(mysql_num_rows($sel) > 0)
	{
		echo "用户名已存在";
	}
	else if($name != $rept[0])
	{
		echo "学号与姓名不匹配";
	}
	else
	{
		mysql_query($ins);
        echo "注册成功";
	}
	mysql_close($con);
	
?>