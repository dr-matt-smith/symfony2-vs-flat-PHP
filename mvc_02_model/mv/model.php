<?php
// model.php

function open_database_connection() {
    $username = 'fred';
    $password = 'smith';
    $host = 'localhost';
    $db = 'blog_db';

    $link = mysqli_connect($host, $username, $password, $db);
    return $link;
}

function close_database_connection($link)
{
	mysqli_close($link);
}

function get_all_posts()
{
    $link = open_database_connection();

    $query = "SELECT id, title FROM post";
    $recordSet = mysqli_query($link, $query);

    $posts = array();
    while( $row = mysqli_fetch_assoc($recordSet) ){
        $posts[] = $row;
    }

	close_database_connection($link);
	return $posts;
}

function get_post_by_id($id)
{
    $link = open_database_connection();

    $id = mysqli_real_escape_string($link, $id);

    $query = "SELECT title, body FROM post WHERE ID=$id";
    $recordSet = mysqli_query($link, $query);

    $post = mysqli_fetch_assoc($recordSet);

    close_database_connection($link);
	return $post;
}