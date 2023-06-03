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
    
    if(isset($_POST["pseudo"]) && isset($_POST["mdp"]) && isset($_POST["email"]) && isset($_POST["ConfirmMdp"]))
    {
        var_dump($_POST) ;

        $pseudo = $_POST["pseudo"] ;
        $mdp = $_POST["mdp"] ;
        $email = $_POST["email"] ;
        $ConfirmMdp = $_POST["ConfirmMdp"] ;

        var_dump((date("Y-m-d H:i:s"))) ;
        $date = (date("Y-m-d H:i:s")) ;

        var_dump(empty($pseudo)) ;

        
        if(empty($pseudo) && empty($mdp) && empty($email))
        {
            $message .= '<div>Attention, votre pseudo et votre mdp est vide!</div>';
        }else {
            $mdp = hash('ripemd160', $mdp);
            $ConfirmMdp =  hash('ripemd160', $ConfirmMdp);

            echo "test mot de passe :" ;
            var_dump(strcmp($mdp, $ConfirmMdp)) ;
            
            if(strcmp($mdp, $ConfirmMdp) !== 0)
            {
                $message .= '<div>Attention, vos mot de passe ne correspond pas!</div>';
            }else{
                fwrite($f, $pseudo." - ".$mdp." - ".$date."\n");
                $message .= '<div>Inscription ok</div>';
            }
        }
    }

    fclose($f);
    echo 'le fichier existe' ;
}else {
    echo "le fichier n'existe pas" ; 
}