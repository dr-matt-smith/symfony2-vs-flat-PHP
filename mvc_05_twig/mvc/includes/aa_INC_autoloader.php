<?php

require_once 'mvc/lib/Twig/Autoloader.php';
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('mvc/templates');

//$cache_option_array = array('cache' => '/path/to/compilation_cache');
$cache_option_array = array('cache' => false);
$twig = new Twig_Environment($loader, $cache_option_array);

?>