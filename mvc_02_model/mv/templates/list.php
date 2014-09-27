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
    <?php foreach ($posts as $post): ?>
        <li>
            <a href="show.php?id=<?php echo $post['id'] ?>">
                <?php echo $post['title'] ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>
</body>
</html>