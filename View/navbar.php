<!DOCTYPE html>
<html lang="en">
<header>
<navh class="navbar navbar-dark bg-dark">

<a href="accueil.php"><h1 class="text-success bg-dark">Home</h1></a>


    <div class="container">

    <input class="form-control mr-0" type="search" placeholder="Nom du thème ou de la matière recherchée" aria-label="Search">
    <button class="btn btn-outline-info btn-sm my-0  ">Chercher</button>
    </div>
    
        <?php

        //session_start();

        if(isset($_SESSION["role"]) == false){
            $_SESSION["role"] ="visiteur";
            ?>
            <button class="btn btn-outline-light btn-sm my-0 pull-right"><a href="login.php">Connectez vous !!!!</a></button>

            <button class="btn btn-outline-light btn-sm my-0 pull-right"><a href="inscription.php">Inscrivez vous !!!</a></button>
        <?php
        }
        else{
            ?>
            <button class="btn btn-outline-light btn-sm my-0 pull-right"><a href="profil.php">Profil</a></button>
            <?php
        }
        ?>

</navh>


</header> 