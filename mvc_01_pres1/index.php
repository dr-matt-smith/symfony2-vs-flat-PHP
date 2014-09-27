<?php
// index.php

// ------------------
// connect to DB and get data
// ------------------

$username = 'fred';
$password = 'smith';
$host = 'localhost';
$db = 'blog_db';

$link = mysqli_connect($host, $username, $password, $db);

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$query = "SELECT id, title FROM post";
$recordSet = mysqli_query($link, $query);

// ------------------
// store post records in an array
// ------------------
$posts = array();
while( $row = mysqli_fetch_assoc($recordSet) ){
    $posts[] = $row;
}

mysqli_close($link);

// ------------------
// generate view
// ------------------
require 'templates/list.php';
