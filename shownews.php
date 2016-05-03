
<?php 
	include 'db.php';
	$query = "select article.sort,article.title,article.details,user.name from article,writer,user where article.id = writer.articleid and writer.userid = user.id and writer.operation = '发帖'";
	$result = mysql_query($query);
	while($row = mysql_fetch_array($result))
	{
		echo "<div class='show' style='line-height:25px; width:720px'><a href='./showdetails.php?sort=$row[sort]&title=$row[title]&name=$row[name]&details=$row[details]'>";
		echo "【".$row['sort']."】".$row['title']."</a> ";
		echo "<span style='float:right'>".$row['name']."</span></div>";
	}
?>

