<?php
// index.php

// ------------------
// connect to DB and get data
// ------------------

$link = mysql_connect('localhost', 'fred', 'smith'); 
mysql_select_db('blog_db', $link);
$result = mysql_query('SELECT id, title FROM post', $link); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>List of Posts</title>
</head>

<body>
<h1>List of Posts</h1>
<ul>
	<?php while ($row = mysql_fetch_assoc($result)): ?>
		<li>
			<a href="show.php?id=<?php echo $row['id'] ?>">
			<?php echo $row['title'] ?>
			</a> 
		</li>
	<?php endwhile; ?> 
</ul>
</body>
</html>

<?php
mysql_close($link);
?>