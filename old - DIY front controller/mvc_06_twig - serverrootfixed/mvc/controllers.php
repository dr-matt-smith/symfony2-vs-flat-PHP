<?php
// controllers.php

function list_action() {
	global $twig;

	$posts = get_all_posts();
	$args_array = array(
		'posts' => $posts
	);

    echo $twig->render('index.html.twig', $args_array);
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
