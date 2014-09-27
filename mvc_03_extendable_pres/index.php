<?php
// index.php

// ------------------
// INCLUDES
// ------------------
require_once 'mv/model.php';

// ------------------
// get content from DB
// ------------------
$posts = get_all_posts();

// ------------------
// generate view
// ------------------
require 'mv/templates/index.php';
