<?php
//------ page title ---------
$title = 'Show a post';

ob_start()
//------------------ page content - START ---------------
?>
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
<?php
//------------------ page content - END ---------------
$content = ob_get_clean();

//-------- now include template to use $title and $content ------
include 'base_layout.php';