<?php
// ------------------
// INCLUDES
// ------------------

// load and initialize any global libraries
require_once 'model.php';

// Twig functions
require_once 'Twig/Autoloader.php';

// ------------------
// TWIG setup
// ------------------
// set up the templating object: $twig
Twig_Autoloader::register();
$pathToMyTwigTemplates = 'templates';
$loader = new Twig_Loader_Filesystem( $pathToMyTwigTemplates );
$cacheOptionArray = array('cache' => false);
$twig = new Twig_Environment($loader, $cacheOptionArray);

// ------------------
// code for this page
// ------------------

global $twig;

$post = get_post_by_id($id);
$args_array = array(
    'post' => $post
);
echo $twig->render('show.html.twig', $args_array);