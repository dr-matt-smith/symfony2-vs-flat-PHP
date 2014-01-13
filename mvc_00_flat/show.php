<?php
// show.php

// ------------------
// connect to DB and get data
// ------------------

$link = mysql_connect('localhost', 'fred', 'smith'); 
mysql_select_db('blog_db', $link);

$id = $_GET["id"];
$id = mysql_real_escape_string($id);


$result = mysql_query("SELECT title, body FROM post WHERE ID=$id", $link); 
$row = mysql_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Show a post</title>
</head>

<body>
<h1>Show a post</h1>
<a href="index.php">
&lt; back to list of posts
</a> 
<hr/>

<h2>
<?php echo $row['title'] ?>
</h2>
<p>
<?php echo $row['body'] ?>
</p>

</body>
</html>

<?php
mysql_close($link);
?>