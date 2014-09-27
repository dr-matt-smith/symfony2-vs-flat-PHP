<?php
// show.php

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

$id = $_GET["id"];
$id = mysqli_real_escape_string($link, $id);

$query = "SELECT title, body FROM post WHERE ID=$id";
$recordSet = mysqli_query($link, $query);

$post = mysqli_fetch_assoc($recordSet);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Show a post</title>
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
<h1>Show a post</h1>
<h2>
    <?php echo $post['title'] ?>
</h2>
<p>
    <?php echo $post['body'] ?>
</p>

</body>
</html>

<?php
mysqli_close($link);