<?php

    //on créer une nouvelle calsse permettant de ce connecter a la base de donné 
    class connexionBDD{
        private $host ='localhost';
        private $name ='projetWeb';
        private $user ='root';
        private $mdr ='root';
        private $connexion;
    
        function construct($host = null, $name = null, $user = null,  $mdp = null){
            if($host !=null){
                $this->host =$host;
                $this->name =$name; 
                $this->user =$user;
                $this->mdp =$mdp;
            }
            try{
                $this->connexion = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->name,
                $this->user, $this->mdp, array(PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES UTF8',
                PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
            }
            catch (PDOException $e){
                echo 'Erreur : Impossible de se connecter à la BDD'
                die();
            }

        }
    
    
    //Cette fonction permet de gagner du temps lorsque l'on intérroge la base de donnée

    public function query($sql, $data = array()){
        $req = $this->connexion->prepare($sql);
        $req->execute($data);
        return $req;
    }

    //Cette fonction permet d'ajouter des éléments au sein de la base de donnée 
    public function insert($sql, $data =array()){
        $req =$this->connexion->prepare($sql);
        $req->execute($data);
    }
}

$DB =new connexionBDD();
?>