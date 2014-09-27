<?php
//------ page title ---------
$title = 'About';

ob_start();
//------------------ page content - START ---------------
?>
<h1>About</h1>
<p>
I am the about page
</p>
<?php
//------------------ page content - END ---------------
$content = ob_get_clean();

//-------- now include template to use $title and $content ----
include 'base_layout.php';