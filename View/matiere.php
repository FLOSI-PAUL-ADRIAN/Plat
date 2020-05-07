
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="search.css">
    <!--navbar--> 
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<link href="https://fonts.googleapis.com/css?family=Lato:400,700&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/0ed05156d4.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">  
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    


    <script>
function myFunction() {
  // Declare variables
  var input, filter, ul, li, a, i;
  input = document.getElementById("mySearch");
  filter = input.value.toUpperCase();
  ul = document.getElementById("myMenu");
  li = ul.getElementsByTagName("li");

  // Loop through all list items, and hide those who don't match the search query
  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("a")[0];
    if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
}
</script>

    <title>Theme</title>
</head>
<body style="background-color:rgba(255,133,79,80);" >
<?php
          include("navbar.php");
        ?>

        <div> 

        <input type="text" id="mySearch" onkeyup="myFunction()" placeholder="Search.." title="Type in a category">

<ul id="myMenu">
<li><a href="./themes/Histoire-Geo/h-g.php">Histoire - Géographie</a></li>  
  <li><a href="./themes/Info/info.php">Informatique</a></li>  
    <li><a href="./themes/Langues/langues.php">Langues</a></li>
  <li><a href="./themes/Litterature/litte.php">Littérature</a></li>
<li><a href="./themes/Sciences/sciences.php">Sciences</a></li>
</ul>
        </div>

        <input type="file" />


        <br>
        <br>
        <br>



<br><br><br><br>

        <br><br><br>


        <?php
    session_start(); // toujours pour commencer 
    if (isset($_SESSION["role"]) == false) { // vérification de si une session role est active 
        $_SESSION["role"] = "visiteur";
    }
    if (isset($_GET["choix"])) {  // si mon choix (fait dans le form) alors mon role  
        if ($_GET["choix"] == "administrateur") {
            $_SESSION["role"] = "administrateur";
        }
        if ($_GET["choix"] == "utilisateur") {
            $_SESSION["role"] = "utilisateur";
        }
        if ($_GET["choix"] == "visiteur") {
            $_SESSION["role"] = "visiteur";
        }
    }
    ?>
    <br>

    <form action="matiere.php" method="get">
        <input type="submit" value="administrateur" name="choix">  <!-- la valeur correspond au role est le name renseigne la varible -->
    </form>
    <form action="matiere.php" method="get">
        <input type="submit" value="utilisateur" name="choix">
    </form>
    <form action="matiere.php" method="get">
        <input type="submit" value="visiteur" name="choix">
    </form>
    <br>
    <?php 
    echo "Votre role actuel est " . $_SESSION["role"] . ".";
    ?>





</body>
</html>
