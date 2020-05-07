<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administrateur</title>
</head>
<body>

<h1>Page administrateur </h1>
    <br>
    
<?php
    session_start(); // toujours pour commencer 
        if(isset($_SESSION["role"])) // vérification de si une session role est active 
        {
            if($_SESSION["role"] == "administrateur")
            {
                echo "Félicitation vous êtes sur la page administrateur.";
                echo "Vous pouvez repartir vers la page d'acceuil si vous le désirez";
                ?> <br><a href="Accueil.php"> Vers page d'acceuil </a><?php
            }
            else
            {
            echo "Vous n'avez pas été accrédité";
            ?> <br><a href="/themes/Accueil.php"> Vers page d'acceuil </a><?php
            }
        }
        else
        {
            echo "Merci de vous rendre sur la page d'accueil en premier lieu.";
            ?> <br><a href="./themes/Accueil.php"> Vers page d'acceuil </a><?php
        }
    ?>
</body>
</html>