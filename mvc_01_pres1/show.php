<?php
// show.php

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

$id = $_GET["id"];
$id = mysqli_real_escape_string($link, $id);

$query = "SELECT title, body FROM post WHERE ID=$id";
$recordSet = mysqli_query($link, $query);

$post = mysqli_fetch_assoc($recordSet);
mysqli_close($link);

// ------------------
// generate view
// ------------------
require 'templates/show.php';