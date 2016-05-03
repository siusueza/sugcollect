<meta charset="utf-8">
<?php 
    include 'db.php';

    $sort = $_POST["sort"]; 
    $title = $_POST["title"];
    $detail = $_POST["detail"];   

    $ins1 = "insert into article (sort,title,details) values ('$sort','$title','$detail')";
    $sel = "select id from article where title='$title' and details='$detail'";
    

    if(isset($_COOKIE['login_name']))
        {
            mysql_query($ins1);
            $res = mysql_query($sel);
            $resarray = mysql_fetch_array($res);
            $id = $resarray[0];
            $ins2 = "insert into writer (userid,articleid,latestime,operation) values ('$_COOKIE[login_id]','$id',NOW(),'发帖')";
            mysql_query($ins2);
            echo "发布成功";
        }
        else
        {
            echo "<script>";
            echo "location.href='login.html'";
            echo "</script>";
        }
    

    mysql_close($con);        
?>