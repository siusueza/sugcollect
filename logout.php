<?php 
	setcookie("login_name","",time()-3600);
	setcookie("login_role","",time()-3600);
	setcookie("login_id","",time()-3600);
    echo "<script>"; 
    echo "location.href='index.php'"; 
    echo "</script>"; 
 ?>