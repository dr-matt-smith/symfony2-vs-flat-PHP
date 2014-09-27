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

$posts = get_all_posts();
$args_array = array(
    'posts' => $posts
);

echo $twig->render('list.html.twig', $args_array);