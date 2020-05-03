<!DOCTYPE html>
<html lang="en">
<header>
    <navh class="navbar navbar-dark bg-dark">

<h1 class="text-success bg-dark"><a href="accueil.php">Home</h1>


<div class="container">

    <input class="form-control mr-0" type="search" placeholder="Nom du thème ou de la matière recherchée" aria-label="Search">
    <button class="btn btn-outline-info btn-sm my-0 ">Chercher</button>

</div>
<!--<button class="btn btn-outline-danger btn-sm my-0 "><a href="Inscription.php">Inscription</button>-->

<button class="btn btn-outline-light btn-sm my-0 "><a href="login.php">Se connecter</button>

<?php
            session_start();
            if(!isset($_SESSION['name']))
                echo '<a class="btn bg-lightred" href="login.php">Se connecter</a>';
            ?>

</navh>
<ul>
<?php
    include("connexion.php"); 
?>

</header> 