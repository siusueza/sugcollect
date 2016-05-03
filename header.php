<nav class="navbar navbar-inverse index-nav" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" id = "nav-title" href="./">sugcollect</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
    	<?php
        if(isset($_COOKIE['login_name'])){
          echo "<li><a>Hello " . $_COOKIE['login_name'] ."</a></li><li><a href='logout.php'>登出</a></li>";
        }
        else{
          echo "<li><a href='login.html'>登录</a></li>";
        }
    	 ?>	
    </ul>
  </div><!-- /.container-fluid -->
</nav>