<?php
// controllers.php

function list_action($callingScriptPath) {
	global $twig;

	$posts = get_all_posts();
	$args_array = array(
		'posts' => $posts,
        'callingScriptPath' => $callingScriptPath
    );

    echo $twig->render('list.html.twig', $args_array);
}


function about_action($callingScriptPath) {
    global $twig;

    $args_array = array(
        'callingScriptPath' => $callingScriptPath
    );
    echo $twig->render('about.html.twig', $args_array);
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