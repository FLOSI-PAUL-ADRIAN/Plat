<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<link href="https://fonts.googleapis.com/css?family=Lato:400,700&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/0ed05156d4.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <?php
          include("navbar.php");
        ?>
</head>
<body style="background-color:rgba(255,133,79,80);">
    <div class="text-center rounded" style="margin-left:30%;margin-right:30%;margin-top:5%;margin-bottom:5%;padding:40px;background-color:rgba(255,255,255,1);">
    <h1>S'inscrire</h1>
    <br>
        <form>
            <div class="form-group">
                <label for="mail">Email</label>
                <input type="email" class="form-control" name="mail">
            </div>
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" name="nom">
            </div>
            <div class="form-group">
                <label for="Prenom">Prénom</label>
                <input type="text" class="form-control" name="prenom">
            </div>
            <div class="form-group">
                <label for="date">Date de naissance</label>
                <input type="text" class="form-control" name="date">
                <small class="form-text text-muted">JJ/MM/AAAA</small>
            </div>
            <div class="form-group">
                <label for="pass">Mot de passe</label>
                <input type="password" class="form-control" name="pass">
            </div>
            <div class="form-group">
                <label for="pass">Verification du mot de passe</label>
                <input type="password" class="form-control" name="pass">
            </div>
            <br>
            <a href="login.php" class="btn btn-outline-secondary">Se connecter</a>
            <button type="submit" class="btn btn-danger">S'inscrire</button>
        </form>
    </div>
</body>
</html>