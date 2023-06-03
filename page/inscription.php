<?php
    include '../init/initinc.php' ;
    include '../init/addRowFile.php' ;
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
    <h1>Page d'inscription</h1>

    <a href="../index.php">retour page d'acceuil</a>

    <form action="" method="post">
        <div>
            <label for="pseudo">Pseudo</label>
            <input type="text" name="pseudo" id="pseudo">
        </div>
        <div>
            <label for="mdp">Mot de passe</label>
            <input type="text" name="mdp" id="mdp">
        </div>

        <button>envoyer</button>

    </form>
</body>
</html>