<?php
// show.php

// ------------------
// connect to DB and get data
// ------------------
$link = mysql_connect('localhost', 'fred', 'smith'); 
mysql_select_db('blog_db', $link);

$id = $_GET["id"];
$id = mysql_real_escape_string($id);

$result = mysql_query("SELECT title, body FROM post WHERE ID=$id", $link); 
$post = mysql_fetch_assoc($result);

mysql_close($link);

// ------------------
// generate view
// ------------------
require 'templates/show.php';