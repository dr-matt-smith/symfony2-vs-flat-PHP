<?php
//------------------------------------------
// file: uri_simplify_functions.php
//------------------------------------------
//
// useful functions to simplify the uri
//
// in a nutshell, we want to ignore everything before the "/" after the 'index.php' script name in the URI
// AND remove any URL-encoded parameters
//
// example outputs:
//
//		INPUT = /
//		OUTPUT = /
//
//		INPUT = /index.php
//		OUTPUT = /
//
//		INPUT = /index.php/
//		OUTPUT = /
//
//		INPUT = /index.php/show?id=2
//		OUTPUT = /show
//
//		INPUT = localhost:8888/symfony2_from_flat/mvc_05_front_working/index.php
//		OUTPUT = /
//
//------------------------------------------



//---------------------------------------------------
// fuction: removeParameters()
// Author: Matt Smith
// last changed: Jan 2014
// based upon: http://ie2.php.net/manual/en/function.strrchr.php
//---------------------------------------------------
// return contents of $uri up to, but excluding the location of a question mark
// (original string returned if no question mark)
// e.g.
//		INPUT = /index.php/show?id=2
//		OUTPUT = /index.php/show
//
//		INPUT = /index.php/
//		OUTPUT = /index.php/
//---------------------------------------------------
function removeParameters($uri)
{
    // Returns everything before $needle (inclusive).
    $needle = '?';
    $haystack = $uri;

    $result = $uri;
    $questionMarkPos = strpos($haystack, $needle);
    if($questionMarkPos > 0) {
        $result = substr($haystack, 0, $questionMarkPos);
    }

    return $result;
}

//---------------------------------------------------
// function: routeAfterScriptName()
// Author: Matt Smith
// last changed: Jan 2014
// based upon:
//---------------------------------------------------
// return contents of $uri after $scriptName
// e.g.
//		INPUT = /index.php/show?id=2
//		OUTPUT = /show?id=2
//
//		INPUT = /
//		OUTPUT = /
//
//		INPUT = /index.php
//		OUTPUT = /
//
//		INPUT = localhost:8888/symfony2_from_flat/mvc_05_front_working/index.php/show?id=2
//		OUTPUT = /show?id=2
//---------------------------------------------------
function routeAfterScriptName($uri, $scriptName)
{

    // Returns everything before $needle (inclusive).
    $needle = $scriptName;
    $haystack = $uri;

    $endPos = strlen($haystck) - 1;
    $scriptNameStartPos = strpos($haystack,$needle);
    $scriptNameEndPos = $scriptNameStartPos + strlen($scriptName);
    if($question_mark_pos > 0) {
        $result = substr($haystack, $scriptNameStartPos, $endPos);
    }

    return $result;
}

//---------------------------------------------------
// function: routeAfterScriptName()
// Author: Matt Smith
// last changed: Jan 2014
// based upon:
//---------------------------------------------------
// return contents of $uri after $scriptName
// e.g.
//		INPUT = /index.php/show?id=2
//		OUTPUT = /index.php/show
//
//		INPUT = /index.php/
//		OUTPUT = /index.php/
//---------------------------------------------------
function simplifyURI($uri, $scriptPath){

    echo "uri = '$uri'";
    echo '<hr>';

    echo "scriptPath = '$scriptPath'";
    echo '<hr>';

    // (1) remove any URL-encoded parameters
    $uriLessParameters = removeParameters($uri);

    echo '(1) remove any URL-encoded parameters';
    echo '<br>';
    echo "uriLessParameters = '$uriLessParameters'";
    echo '<hr>';

    // (2) find script name position
    $needle = $scriptName;
    $haystack = $uriLessParameers;

    $scriptNameStartPos = strpos($haystack,$needle);

    echo '(2) find script name position';
    echo '<br>';
    echo "scriptNameStartPos = $scriptNameStartPos";
    echo '<hr>';

    // (3) remove everything BEFORE script name
    $uriLessScriptPrefix = substr($uriLessParameters, $scriptNameStartPos);


    echo '(3) remove everything BEFORE script name';
    echo '<br>';
    echo "uriLessScriptPrefix = '$uriLessScriptPrefix'";
    echo '<hr>';

    // (4) remove script name from beginning of string
    $scriptNameLength = strlen($scriptName);
    $uriLessScriptName = substr($uriLessScriptPrefix, (-1 * $scriptNameLength));

    $simplifiedURI = $uriLessScriptName;

    echo '(4) remove script name from beginning of string';
    echo '<br>';
    echo "simplifiedURI = '$simplifiedURI'";
    echo '<hr>';

    return $simplifiedURI;

}

//---------------------------------------------------
// function: slashLastChar()
// Author: Matt Smith
// last changed: Jan 2014
//---------------------------------------------------
// ensure that the last character of given string is always a forward slash
// (so add one if required)
// e.g.
//		INPUT = /
//		OUTPUT = /
//
//		INPUT =
//		OUTPUT = /
//
//		INPUT = /show
//		OUTPUT = /show/
//
//		INPUT = /show/
//		OUTPUT = /show/
//
//		INPUT = /show/2
//		OUTPUT = /show/2/
//---------------------------------------------------
function slashLastChar($path){
    // case 1: If empty, then return just a slash
    if(empty($path)){
        return '/';
    } else {
        $reversedPath = strrev($path);
        $lastChar = substr( $reversedPath, 0, 1);
        // case 2: if last char is a slash, then return ppath unchanged
        if('/' == $lastChar){
            return $path;
        } else {
            // case 3: else return $path with a slash appended to the end
            return $path.'/';
        }
    }
}