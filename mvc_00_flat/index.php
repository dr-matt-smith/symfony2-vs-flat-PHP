<?php
// index.php

// ------------------
// connect to DB and get data
// ------------------

$username = 'fred';
$password = 'smith';
$host = 'localhost';
$db = 'blog_db';

$link = mysqli_connect($host, $username, $password, $db);

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$query = "SELECT id, title FROM post";
$recordSet = mysqli_query($link, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>List of Posts</title>
    <style>
        @import "css/blog.css";
    </style>
</head>

<body>

<header>welcome to the BLOG</header>

<nav>
    <ul>
        <li><a href="index.php">Index (list)</a></li>
        <li><a href="about.php">About</a></li>
    </ul>
</nav>

<!-- ************ page specific content ********** -->
<h1>List of Posts</h1>
<ul>
    <?php
    while( $row = mysqli_fetch_assoc($recordSet) ):
        $id = $row['id'];
        $title = $row['title'];
    ?>
		<li>
			<a href="show.php?id=<?php echo $id?>">
			<?php echo $title ?>
			</a> 
		</li>
	<?php endwhile; ?> 
</ul>
</body>
</html>

<?php
mysqli_close($link);