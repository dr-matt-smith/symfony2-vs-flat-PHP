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
$args_array = array();

echo $twig->render('about.html.twig', $args_array);