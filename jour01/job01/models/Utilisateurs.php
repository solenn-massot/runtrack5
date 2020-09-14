<?php

class Utilisateurs_Model
{
    private $bdd = "";
    function __construct($user, $pass, $host, $dbname)
    {
        if (empty($this->bdd)) {
            try {
                $this->bdd = new PDO('mysql:host=' . $host . ';dbname=' . $dbname . '', $user, $pass, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            } catch (PDOException $e) {
                die('Erreur : ' . $e->getMessage());
            }
        }
    }

    function getUsers()
    {
        try {
            $sql = "SELECT * FROM utilisateurs";
            $sth = $this->bdd->prepare($sql);
            $sth->execute();
            $users = $sth->fetchAll();
            return ($users);
        } catch (PDOException $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

    function addUser($firstname, $lastname, $email)
    {
        try {
            $sql = $this->bdd->prepare("SELECT * FROM utilisateurs WHERE email = '$email'");
            $sql->execute();
            $result = $sql->fetchAll();
            if (!empty($result)) {
                return ("exist");
            } else {
                $sth = "INSERT INTO `utilisateurs`(`id`, `firstname`, `lastname`, `email`) VALUES (NULL,?,?,?)";
                $sql2 = $this->bdd->prepare($sth);
                $sql2->execute(array($firstname, $lastname, $email));
                return ("ok");
            }

        } catch (PDOException $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }
}
