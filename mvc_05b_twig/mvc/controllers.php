<?php
// controllers.php

function list_action() {
	global $twig;

	$posts = get_all_posts();
	$args_array = array(
		'posts' => $posts
	);

    echo $twig->render('list.html.twig', $args_array);
} 

function show_action($id, $callingScriptPath) {
	global $twig;

	$post = get_post_by_id($id);
	$args_array = array(
		'post' => $post,
        'callingScriptPath' => $callingScriptPath
	);
	echo $twig->render('show.html.twig', $args_array);
}