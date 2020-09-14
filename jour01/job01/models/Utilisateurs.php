<?php
require "../config/db.php";

class Utilisateurs_Model{
    private $bdd = "";
    function __construct($user, $pass, $host, $dbname)
    {
        if (empty($this->bdd)) {
            try {
                $this->bdd = new PDO($host,$dbname,$user,$pass,array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            } catch (PDOException $e) {
                die('Erreur : ' . $e->getMessage());
            }
        }
    }

    function getUsers(){
        try {
            $sql = "SELECT * FROM utilisateurs";
            $sth = $this->bdd->prepare($sql);
            $users = $sth->fetchAll();
            return($users); 
        } catch (PDOException $e){
            die('Erreur : '. $e->getMessage());
        }
        

    }

    function addUsers($firstname, $lastname, $email)
    {
        try{
            $sql = "INSERT INTO 'utilisateurs' ( 'firstname', 'lastname', 'email') VALUES (?,?,?);";
            $this->bdd->prepare($sql)->execute([$firstname, $lastname, $email]);
            return("Cet utilisateur a bien été ajouté");  
        } catch (PDOException $e){
            die('Erreur : '.$e->getMessage());
        }
        
    }
}
