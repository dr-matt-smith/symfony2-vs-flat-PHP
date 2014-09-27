<?php
// controllers.php

function error_action($route, $uri, $callingScriptPath) {
    global $twig;

    $args_array = array(
        'route' => $route,
        'uri' => $uri,
        'callingScriptPath' => $callingScriptPath,
    );
    echo $twig->render('error.html.twig', $args_array);
}


function list_action() {
	global $twig;

	$posts = get_all_posts();
	$args_array = array(
		'posts' => $posts
	);

    echo $twig->render('list.html.twig', $args_array);
}

function about_action() {
    global $twig;

    $args_array = array(
    );
    echo $twig->render('about.html.twig', $args_array);
}

function show_action($id) {
    global $twig;

    $post = get_post_by_id($id);
    $args_array = array(
        'post' => $post
    );
    echo $twig->render('show.html.twig', $args_array);
}
