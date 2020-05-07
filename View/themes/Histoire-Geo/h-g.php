<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administrateur</title>
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<link href="https://fonts.googleapis.com/css?family=Lato:400,700&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/0ed05156d4.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<header>
<?php
          include("../../navbarB.php");
        ?>
</header>

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
                ?> <br>        <form action="../../upload.php">
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
                ?>         <form action="../../upload.php">
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