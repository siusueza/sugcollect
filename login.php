<meta charset = "utf-8">
<?php 
    include 'db.php';

    $name = $_POST["Nicname"]; 
    $pswd = $_POST["Password"];

    $query = sprintf("SELECT * FROM user where name= '%s' and pswd = '%s'",$name,$pswd);

    $result = mysql_query($query);
    $num = mysql_num_rows($result);
    if($num == 0)
    {
        echo '用户名密码错误!';
    }
    else
    {
        while($row = mysql_fetch_array($result))
        {
            setcookie("login_name",$row['name'],time()+3600);
            setcookie("login_role",$row['role'],time()+3600);
            setcookie("login_id",$row['id'],time()+3600);
        }
        echo "<script>";
        echo "location.href='index.php'";
        echo "</script>";
    }
    mysql_close($con);        
?>