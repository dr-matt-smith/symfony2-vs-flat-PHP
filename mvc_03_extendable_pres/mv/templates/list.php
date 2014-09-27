<?php
//------ page title ---------
$title = 'List of Posts';

ob_start()
//------------------ page content - START ---------------
?>
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
<?php
//------------------ page content - END ---------------
$content = ob_get_clean();

//-------- now include template to use $title and $content ----
include 'base_layout.php';