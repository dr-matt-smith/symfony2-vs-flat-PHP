<?php
// ------------------
// INCLUDES
// ------------------

// load and initialize any global libraries
require_once 'mv/model.php';
require_once 'vendor/setup_twig.php';


// ------------------
// code for this page
// ------------------
$posts = get_all_posts();
$args_array = array(
    'posts' => $posts
);

echo $twig->render('list.html.twig', $args_array);