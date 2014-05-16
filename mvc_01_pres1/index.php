<?php
// index2.php

// ------------------
// connect to DB and get data
// ------------------
$link = mysql_connect('localhost', 'fred', 'smith');
mysql_select_db('blog_db', $link);
$result = mysql_query('SELECT id, title FROM post', $link); 
mysql_close($link);

// ------------------
// store post records in an array
// ------------------
$posts = array();
while ($row = mysql_fetch_assoc($result)) 
{
	$posts[] = $row;
}

// ------------------
// generate view
// ------------------
require 'templates/list.php';
