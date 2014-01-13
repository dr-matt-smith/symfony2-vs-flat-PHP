<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>List of Posts</title>
</head>

<body>
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