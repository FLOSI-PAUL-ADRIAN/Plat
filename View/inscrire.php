<div class="text-center rounded" style="margin-left:30%;margin-right:30%;margin-top:5%;margin-bottom:5%;padding:40px;background-color:rgba(255,255,255,1);">
    <h1>S'inscrire</h1>
<?php
    
    /* page: inscription.php */
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
    //echo mysqli_query($mysqli,"CREATE TABLE IF NOT EXISTS `".$BDD['db']."`.`membres` ( `id` INT NOT NULL AUTO_INCREMENT , `pseudo` VARCHAR(25) NOT NULL , `mdp` CHAR(32) NOT NULL , PRIMARY KEY (`id`)) ENGINE = MyISAM;")?"Table membres créée avec succès, vous pouvez maintenant supprimer la ligne ". __LINE__ ." de votre fichier ". __FILE__ ."!":"Erreur création table membres: ".mysqli_error($mysqli);
    //la table est créée avec les paramètres suivants:
    //champ "id": en auto increment pour un id unique, peux vous servir pour une identification future
    //champ "Email": en varchar de 0 à 25 caractères
    //champ "mdp": en char fixe de 32 caractères, soit la longueur de la fonction md5()
    //fin création automatique
//par défaut, on affiche le formulaire (quand il validera le formulaire sans erreur avec l'inscription validée, on l'affichera plus)
$AfficherFormulaire=1;
//traitement du formulaire:
if(isset($_POST['Email'],$_POST['Nom'],$_POST['Prenom'],$_POST['Mot de passe'])){//l'utilisateur à cliqué sur "S'inscrire", on demande donc si les champs sont défini avec "isset"
    if(empty($_POST['Email'])){//le champ Email est vide, on arrête l'exécution du script et on affiche un message d'erreur
        echo "Le champ Email est vide.";
    } elseif(strlen($_POST['Email'])>40){//le Email est trop long, il dépasse 40 caractères
        echo "Le Email est trop long, il dépasse 40 caractères.";
    } elseif(strlen($_POST['Nom'])>32){//le Nom est trop long, il dépasse 32 caractères
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
    } elseif(mysqli_num_rows(mysqli_query($mysqli,"SELECT * FROM membres WHERE Email='".$_POST['Email']."'"))==1){//on vérifie que cet Email n'est pas déjà utilisé par un autre membre
        echo "Ce Email est déjà utilisé.";
    } else {
        //toutes les vérifications sont faites, on passe à l'enregistrement dans la base de données:
        
        if(!mysqli_query($mysqli,"INSERT INTO membres SET Email='".$_POST['Email']."', Nom='".$_POST['Nom']."', Prenom='".$_POST['Prenom']."', Mot de passe='".md5($_POST['Mot de passe'])."'")){//on crypte le mot de passe avec la fonction propre à PHP: md5()
            echo "Une erreur s'est produite: ".mysqli_error($mysqli);
        } else {
            echo "Vous êtes inscrit avec succès!";
            //on affiche plus le formulaire
            $AfficherFormulaire=0;
        }
    }
}
if($AfficherFormulaire==0){
   ?>
    <a href="accueil.php"></a>
   <?php 
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
 
            <div class="form-group">
                <label for="Email">Email</label>
                <input type="email" class="form-control" name="Email">
            </div>
            <div class="form-group">
                <label for="Nom">Nom</label>
                <input type="text" class="form-control" name="Nom">
            </div>
            <div class="form-group">
                <label for="Prenom">Prénom</label>
                <input type="text" class="form-control" name="Prenom">
            </div>
            <div class="form-group">
                <label for="Mot de passe">Mot de passe</label>
                <input type="password" class="form-control" name="Mot de passe">
            </div>
            <br>
            <a href="login.php" class="btn btn-outline-secondary">Se connecter</a>
            <input type="submit" class="btn btn-danger" value="S'incrire">
        </form>
    <?php
}
?>