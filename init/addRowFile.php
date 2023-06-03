<?php

var_dump($_SESSION) ;

$file = $_SESSION["file"] ;

echo "chemin du fihier" ;
var_dump($file) ;

echo "test si le fichier existe" ;
var_dump(file_exists($file)) ;

if(file_exists($file) == true)
{
    $f = fopen($file, "a");
    
    if(isset($_POST["pseudo"]) && isset($_POST["mdp"]))
    {
        $pseudo = $_POST["pseudo"] ;
        $mdp = $_POST["mdp"] ;
        var_dump($_POST) ;
        fwrite($f, $pseudo." - ".$mdp."\n");
    }

    

    fclose($f);
    echo 'le fichier existe' ;
}else {
    echo "le fichier n'existe pas" ; 
}