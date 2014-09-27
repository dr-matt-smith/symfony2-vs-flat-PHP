<?php
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