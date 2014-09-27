<?php
//-----------------------------------------------
//--- include Epiphany code
//-----------------------------------------------
include_once 'vendor/Epi.php';
Epi::init('route');

//-----------------------------------------------
//--- associate routes with functions
//-----------------------------------------------
getRoute()->get('/', 'index');
getRoute()->get('/contact', 'contact');
getRoute()->get('.*', 'error404');
getRoute()->run();

//-----------------------------------------------
// --- here are the functions - to output HTML pages
//-----------------------------------------------
function index(){
    echo '
    <p>
    You are looking at the output from function home()
    </p>
    <hr>
    <h1>page: Home</h1>
    <p>
    welcome to our wonderful website !
    </p>
    ';
    echo nav();
}

function contact(){
    echo '
    <p>
    You are looking at the output from function contact()
    </p>
    <hr>
    <h1>Contact Us</h1>
    <p>
    Why not email us at: <a href="mailto:enquiries@itb.com">enquiries@itb.com</a>
    </p>
    ';
    echo nav();
}

function error404() {
    echo "<strong>my website's custom ERROR message</strong>";
    echo "<h1>404 Page Does Not Exist</h1>";
    echo nav();
}

function nav() {
    return <<<MKP
    <ul>
      <li><a href="./">home</a></li>
      <li><a href="./contact">Contact Us</a></li>
      <li><a href="./does-not-exist">page which does not exist</a></li>
    </ul>
MKP;
}


// more documentation - e.g. classes for routes at:
// https://github.com/jmathai/epiphany/blob/master/docs/Route.markdown