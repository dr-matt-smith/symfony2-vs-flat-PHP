<?php
// show.php

// ------------------
// INCLUDES
// ------------------
require_once 'model.php';

// ------------------
// get content from DB
// ------------------
$id = $_GET["id"];
$post = get_post_by_id($id);

// ------------------
// generate view
// ------------------
require 'templates/show.php';