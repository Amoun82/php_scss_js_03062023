<?php

var_dump(file_exists("inscritpion.txt"));

if(file_exists("../inscription.txt") == false)
{
    $f = fopen("inscription.txt", "a");
    
    fclose($f);
    echo 'le fichier existe' ;
}else {
    echo "le fichier n'existe pas" ; 
}


