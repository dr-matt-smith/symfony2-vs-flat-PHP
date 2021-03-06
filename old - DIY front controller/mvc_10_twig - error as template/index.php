<?php
// index2.php

// ------------------
// INCLUDES
// ------------------

// include our functions to simplify the URI for routing
require_once 'include_route_functions.php';

// load and initialize any global libraries
require_once 'mvc/model.php';
require_once 'mvc/controllers.php';

// Twig functions
require_once 'Twig/Autoloader.php';

// ------------------
// TWIG setup
// ------------------
// set up the templating object: $twig
Twig_Autoloader::register();
$pathToMyTwigTemplates = 'mvc/templates';
$loader = new Twig_Loader_Filesystem( $pathToMyTwigTemplates );
$cacheOptionArray = array('cache' => false);
$twig = new Twig_Environment($loader, $cacheOptionArray);

// ------------------
// get the routing info
// ------------------

// get full URI (including any URL-encoded variables)
$uri = $_SERVER['REQUEST_URI'];

// get reference to this script (for return links from HTML pages ...)
$callingScriptPath = $_SERVER['SCRIPT_NAME'];

// get everything after the script name, excluding any variables
if (array_key_exists('PATH_INFO', $_SERVER)) {
    $pathInfo = $_SERVER['PATH_INFO'];
} else {
    // if no such array key, then we must be running default script for this directory (index2.php)
    $pathInfo = '/';
}

// ensure route ends with a forward slash
$route = simpleRoute($pathInfo);


// ------------------
// routing logic
// ------------------
if ($route == '/'){
    // route: /
    list_action();
} else if ($route == '/about'){
    // route: /about
    about_action();
} else if ($route == '/show' && isset($_GET['id'])){
    // route: /show
    // parameters: id=<n>
    show_action($_GET['id']);
} else {
    // route: /error
    error_action($route, $uri, $callingScriptPath);
}