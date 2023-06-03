<?php


session_start() ;

$_COOKIE["name"] = "test de cookie" ;

var_dump($_SESSION) ;
var_dump($_COOKIE) ;