<?php
    include "init/initinc.php" ;
    include "init/creationFile.php";

    $_SESSION["file"] = getcwd()."\inscription.txt";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projet php et scss et js</title>
    <link rel="stylesheet" href="/asset/style/style.css">
</head>
<body>
    <h1>Page d'acceuil</h1>

    <a href="page/Connexion.php">Connexion</a>
    <a href="page/inscription.php">Inscription</a>

</body>
</html>