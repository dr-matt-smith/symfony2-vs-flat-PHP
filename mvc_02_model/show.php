<?php
// show.php

// ------------------
// INCLUDES
// ------------------
require_once 'mv/model.php';

// ------------------
// get data
// ------------------
$id = $_GET["id"];
$post = get_post_by_id($id);

// ------------------
// generate view
// ------------------
require 'mv/templates/show.php';
