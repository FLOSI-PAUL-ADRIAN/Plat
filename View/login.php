<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Login</title>
</head>
<body style="background-color:rgba(255,133,79,80);">
    <div class="text-center rounded" style="margin-left:30%;margin-right:30%;margin-top:10%;padding:40px;background-color:rgba(255,255,255,1);">
    <h1>Se connecter</h1>
    <br>
        <form>
            <div class="form-group">
                <label for="mail">Email</label>
                <input type="email" class="form-control" name="mail">
            </div>
            <div class="form-group">
                <label for="pass">Mot de passe</label>
                <input type="password" class="form-control" name="pass">
            </div>
            <br>
            <button type="submit" class="btn btn-danger">Se connecter</button>
            <a href="inscription.php" class="btn btn-outline-secondary">S'inscrire</a>
        </form>
    </div>
</body>
</html>