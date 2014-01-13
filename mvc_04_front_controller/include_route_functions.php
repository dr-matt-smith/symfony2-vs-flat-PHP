<?php
//------------------------------------------
// file: include_route_functions.php
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
// function: simpleRoute()
// Author: Matt Smith
// last changed: Jan 2014
//---------------------------------------------------
// ensure that the last character of given string is NOT a forward slash
// (unless empty, or a single forward slash character)
// e.g.
//		INPUT = /
//		OUTPUT = /
//
//		INPUT =
//		OUTPUT = /
//
//		INPUT = /show
//		OUTPUT = /show
//
//		INPUT = /show/
//		OUTPUT = /show
//
//		INPUT = /show/2
//		OUTPUT = /show/2
//
//		INPUT = /show/2/
//		OUTPUT = /show/2
//---------------------------------------------------
function simpleRoute($path){
    if(empty($path) || ('/' == $path)){
        // case 1: If empty (or just a slash), then return just a slash
        return '/';
    } else {
        $lastChar = substr( $path, -1);
        if('/' != $lastChar){
            // case 2: does not end in forward slash, return unchanged
            return $path;
        } else {
            // case 3: else return $path with a slash removed from the end
            return substr($path, 0, -1);
        }
    }
}