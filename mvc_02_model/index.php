<?php
// index2.php

// ------------------
// INCLUDES
// ------------------
require_once 'model.php';

// ------------------
// get content from DB
// ------------------
$posts = get_all_posts();

// ------------------
// generate view
// ------------------
require 'templates/list.php';
