<?php

$files = array();

// Ouverture du répetoire courant
// Pour le changer utiliser chdir() avant opendir()
$handle = opendir(".");

// Parcours des fichiers et dossiers du répertoire courant
while($file = readdir($handle)) {
    if($file != "." && $file != "..") {
        $files[] = $file;
    }
}

var_dump($files) ;

// Fermeture du répertoire courant
closedir($handle);

// Tri du tableaunat
sort($files);

// Affichage des fichiers et dossiers triés
foreach($files as $v) {
    echo $v . "<br />";
}


$current_dir = getcwd();
echo str_replace("\\", "/", $current_dir); // Utilisateurs de Windows, pensez à changer vos antislashes


$_COOKIE["name"] = "test de cookie" ;
