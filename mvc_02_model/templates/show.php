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
<?php echo $post['title'] ?>
</h2>
<p>
<?php echo $post['body'] ?>
</p>

</body>
</html>