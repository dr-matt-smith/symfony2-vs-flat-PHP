<?php
// ------------------
// INCLUDES
// ------------------

// load and initialize any global libraries
require_once 'mvc/model.php';
require_once 'vendor/setup_twig.php';
require_once 'vendor/Epi/Epi.php';

// ------------------
// routing logic - choose which controller to call
// ------------------

Epi::init('route');

getRoute()->get('/', 'index');
getRoute()->get('/about', 'about');
getRoute()->get('/show', 'show');
getRoute()->get('.*', 'error404');
getRoute()->run();

// ------------------
// the controller functions
// ------------------

function index() {
    global $twig;

    $posts = get_all_posts();
    $args_array = array(
        'posts' => $posts
    );
    $template = 'index';
    echo $twig->render($template.'.html.twig', $args_array);
}

function about(){
    global $twig;

    $args_array = array();
    $template = 'about';
    echo $twig->render($template.'.html.twig', $args_array);
}


function show(){
    global $twig;

    $id = $_GET["id"];
    $post = get_post_by_id($id);
    $args_array = array(
        'post' => $post
    );
    $template = 'show';
    echo $twig->render($template.'.html.twig', $args_array);
}

function error404() {
    echo "<h1>404 Page Does Not Exist</h1>";
    echo nav();
}
