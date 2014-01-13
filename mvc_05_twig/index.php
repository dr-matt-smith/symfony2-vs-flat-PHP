<?php
// index.php

// ------------------
// INCLUDES
// ------------------

// include our functions to simplify the URI for routing
require_once 'mvc/includes/uri_simplify_functions.php';

// set up the TWIG environment and variables
require_once 'mvc/includes/aa_INC_autoloader.php';

// load and initialize any global libraries
require_once 'mvc/model.php';
require_once 'mvc/controllers.php';

// ------------------
// get the routing info
// ------------------

// get full URI (including any URL-encoded variables)
$uri = $_SERVER['REQUEST_URI'];

// get reference to this script (for return links from HTML pages ...)
$callingScriptPath = $_SERVER['SCRIPT_NAME'];

// get everything after the script name, excluding any variables
$pathInfo = $_SERVER['PATH_INFO'];

// ensure route ends with a forward slash
$route = simpleRoute($pathInfo);


// ------------------
// routing logic
// ------------------
if ($route == '/'){
    // route: /
    list_action();
} else if ($route == '/show' && isset($_GET['id'])){
    // route: /show
    // parameters: id=<n>
    show_action($_GET['id'], $callingScriptPath);
} else {
    // route: ??unknown??
    header('Status: 404 Not Found - bad PATH / ROUTE / MISSING PARAMETERS');
    echo "<!DOCTYPE html><html lang='en'><head><title>error no found</title></head><body>";
    echo '<h1>bad PATH / ROUTE / MISSING PARAMETERS</h1>';
    echo "<p>URI = '$uri'</p>";
    echo "<p>callingScriptPath = '$callingScriptPath'</p>";
    echo "<p>route = '$route'</p>";
    echo '</body></html>';
}