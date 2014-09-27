<?php

// templates/base_layout.php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>
    	<?php echo $title ?>
    </title>
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
<?php echo $content ?>
</body>
</html>