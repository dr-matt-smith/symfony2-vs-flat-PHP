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
$id = $_GET["id"];
$post = get_post_by_id($id);
$args_array = array(
    'post' => $post
);
echo $twig->render('show.html.twig', $args_array);