<?php
	$title = 'Show a post';
?>

<?php ob_start() ?>
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
<?php $content = ob_get_clean() ?>

<?php include 'layout.php' ?>
