<?php
include_once '../vendor/autoload.php';

Epi::init('route');

getRoute()->get('/', 'home');
getRoute()->get('/contact', 'contactUs');
getRoute()->get('.*', 'error404');
getRoute()->run();

function home() {
    echo 'You are at the home page';
    echo nav();
}

function contactUs() {
    echo 'Send us an email at <a href="mailto:foo@bar.com">foo@bar.com</a>';
    echo nav();
}

function error404() {
    echo "<h1>404 Page Does Not Exist</h1>";
    echo nav();
}

function nav() {
    return <<<MKP
    <ul>
      <li><a href="/">home</a></li>
      <li><a href="/contact">Contat Us</a></li>
      <li><a href="/blog/article.html">blog</a></li>
      <li><a href="/does-not-exist">page which does not exist</a></li>
    </ul>
MKP;
}


function list_action() {
    global $twig;

    $posts = get_all_posts();
    $args_array = array(
        'posts' => $posts
    );

    echo $twig->render('list.html.twig', $args_array);
}
