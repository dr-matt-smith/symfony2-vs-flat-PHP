<?php
// index.php
// set up the TWIG environment and variables
require_once 'mvc/includes/aa_INC_autoloader.php'; 

// load and initialize any global libraries
require_once 'mvc/model.php'; 
require_once 'mvc/controllers.php';



// route the request internally
$uri = $_SERVER['REQUEST_URI']; 

/*
--- try to extract FILE name
--- try to extract PATH AFTER file name
--- $_GET to extra valus

--- action = show? - as simple intro to controllers? or not?
--- action = list?
//
// get current file name
//
$thisPage = $_SERVER['PHP_SELF'];
$filename = ltrim(strrchr($thisPage, '/'), '/');

*/


if( ($uri == '/index.php') || ($uri == '/') )
{
	list_action(); 
} 
else if ($uri == '/index.php/show' && isset($_GET['id'])) 
{
	show_action($_GET['id']); 
}
else
{
	header('Status: 404 Not Found'); 
	echo "<html><body><h1>Page Not Found</h1> uri = $uri </body></html>";
}

?>