<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administrateur</title>
</head>
<body style="background-color:rgba(255,133,79,80);">

    <br>
    
<?php
    session_start(); // toujours pour commencer 
        if(isset($_SESSION["role"])) // vérification de si une session role est active 
        {
            if($_SESSION["role"] == "administrateur")
            {
                echo "Félicitation vous êtes sur la page administrateur.";
                echo "Vous pouvez repartir vers la page d'acceuil si vous le désirez";
                ?> <br>        <form action="/action_page.php">
                <input type="file" id="myFile" name="filename">
                <input type="submit">
              </form><?php
            }
            else
            {
            if($_SESSION["role"] == "utilisateur") // si mon role correspond a ce que je veux on affiche le résultat
            {
                echo "Félicitation vous êtes sur la page utilisateur.";
                echo "Vous pouvez repartir vers la page d'acceuil si vous le désirez";
                ?>         <form action="/action_page.php">
                <input type="file" id="myFile" name="filename">
                <input type="submit">
              </form>
              <?php
                
            }
            else // sinon message d'erreur 
            {
            echo "Vous n'avez pas été accrédité.";
            ?> <br><a href="../../Accueil.php"> Vers page d'acceuil!</a><?php
            }
          }
        }
        else
        {
            echo "Merci de vous rendre sur la page d'accueil en premier lieu.";
            ?> <br><a href="../../Accueil.php"> Vers page d'acceuil </a><?php
        }

        
    ?>
</body>
</html>