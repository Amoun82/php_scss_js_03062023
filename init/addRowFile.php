<?php

require_once "variable.php" ;

var_dump($_SESSION) ;

$file = $_SESSION["file"] ;

/* echo "chemin du fihier" ;
var_dump($file) ;

echo "test si le fichier existe" ;
var_dump(file_exists($file)) ; */

if(file_exists($file) == true)
{
    $f = fopen($file, "a");
    
    if(isset($_POST["pseudo"]) && isset($_POST["mdp"]))
    {
        var_dump($_POST) ;

        $pseudo = $_POST["pseudo"] ;
        $mdp = $_POST["mdp"] ;

        var_dump((date("Y-m-d H:i:s"))) ;
        $date = (date("Y-m-d H:i:s")) ;
        var_dump(empty($pseudo)) ;

        
        if(empty($pseudo) && empty($mdp))
        {
            $message .= '<div>Attention, votre pseudo et votre mdp est vide!</div>';
        }else {
            $mdp = hash('ripemd160', $mdp);
            fwrite($f, $pseudo." - ".$mdp." - ".$date."\n");
        }
    }

    

    fclose($f);
    echo 'le fichier existe' ;
}else {
    echo "le fichier n'existe pas" ; 
}