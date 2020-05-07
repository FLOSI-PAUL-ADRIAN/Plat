<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Inscritpion</title>
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
<?php
  
//connexion à la base de données:
$BDD = array();
$BDD['host'] = "localhost";
$BDD['user'] = "root";
$BDD['pass'] = "root";
$BDD['db'] = "trischool";
$mysqli = mysqli_connect($BDD['host'], $BDD['user'], $BDD['pass'], $BDD['db']);
if(!$mysqli) {
    echo "Connexion non établie.";
    exit;
}
    //création automatique de la table membres, une fois créée, vous pouvez supprimer les lignes de code suivantes:
    //echo mysqli_query($mysqli,"CREATE TABLE IF NOT EXISTS `".$BDD['db']."`.`membres` ( `id` INT NOT NULL AUTO_INCREMENT ,  `Nom` VARCHAR(32) NOT NULL , `Prenom` VARCHAR(32) NOT NULL, `Mot de passe` CHAR(32) NOT NULL, PRIMARY KEY (`id`)) ENGINE = MyISAM;")?"Table membres créée avec succès, vous pouvez maintenant supprimer la ligne ". __LINE__ ." de votre fichier ". __FILE__ ."!":"Erreur création table membres: ".mysqli_error($mysqli);
    //la table est créée avec les paramètres suivants:
    //champ "id": en auto increment pour un id unique, peux vous servir pour une identification future
    //champ "mdp": en char fixe de 32 caractères, soit la longueur de la fonction md5()
    //fin création automatique
//par défaut, on affiche le formulaire (quand il validera le formulaire sans erreur avec l'inscription validée, on l'affichera plus)
$AfficherFormulaire=1;
//traitement du formulaire:
if(isset($_POST['Nom'],$_POST['Prenom'],$_POST['Mot de passe'])){//l'utilisateur à cliqué sur "S'inscrire", on demande donc si les champs sont défini avec "isset"
 if(strlen($_POST['Nom'])>32){//le Nom est trop long, il dépasse 32 caractères
        echo "Le Nom est trop long, il dépasse 32 caractères.";
    } elseif(strlen($_POST['Prenom'])>32){//le Prenom est trop long, il dépasse 32 caractères
        echo "Le Prenom est trop long, il dépasse 40 caractères.";
    } elseif(strlen($_POST['Mot de passe'])>32){//le Mot de passe est trop long, il dépasse 32 caractères
        echo "Le Mot de Passe est trop long, il dépasse 40 caractères.";
    } elseif(!preg_match("#^[a-z]+$#",$_POST['Nom'])){//le champ Nom est renseigné mais ne convient pas au format qu'on souhaite qu'il soit, soit: que des lettres minuscule + des chiffres 
        echo "Le Nom doit être renseigné en lettres minuscules sans accents, sans caractères spéciaux.";
    } elseif(!preg_match("#^[a-z]+$#",$_POST['Prenom'])){//le champ Prenom est renseigné mais ne convient pas au format qu'on souhaite qu'il soit, soit: que des lettres minuscule + des chiffres 
        echo "Le Prenom doit être renseigné en lettres minuscules sans accents, sans caractères spéciaux.";
    } elseif(empty($_POST['Mot de passe'])){//le champ mot de passe est vide
        echo "Le champ Mot de passe est vide.";
    } else {
        //toutes les vérifications sont faites, on passe à l'enregistrement dans la base de données:
        
        if(!mysqli_query($mysqli,"INSERT INTO membres SET  Nom='".$_POST['Nom']."', Prenom='".$_POST['Prenom']."', Mot de passe='".md5($_POST['Mot de passe'])."'")){//on crypte le mot de passe avec la fonction propre à PHP: md5()
            echo "Une erreur s'est produite: ".mysqli_error($mysqli);
        } else {
            echo "Vous êtes inscrit avec succès!";
            //on affiche plus le formulaire
            $AfficherFormulaire=0;
        }
    }
}

if($AfficherFormulaire==1){
    ?>
    <!-- 
    Les balises <form> sert à dire que c'est un formulaire
    on lui demande de faire fonctionner la page inscription.php une fois le bouton "S'inscrire" cliqué
    on lui dit également que c'est un formulaire de type "POST"
     
    Les balises <input> sont les champs de formulaire
    type="text" sera du texte
    type="password" sera des petits points noir (texte caché)
    type="submit" sera un bouton pour valider le formulaire
    name="nom de l'input" sert à le reconnaitre une fois le bouton submit cliqué, pour le code PHP
     -->
    <br />
    <form method="post" action="inscription.php">
        Nom : <input type="text" name="Nom">
        <br />
        Prenom : <input type="text" name="Prenom">
        <br />
        Mot de passe : <input type="password" name="Mot de passe">
        <br />
        <input type="submit" value="S'inscrire">
        <a href="login.php" class="btn btn-outline-secondary">Se connecter</a>
        </form>
    <?php
}
?>
</html>