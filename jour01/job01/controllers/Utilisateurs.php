<?php
require "./models/Utilisateurs.php";
class Utilisateurs extends Utilisateurs_Model
{
    private $us;
    function __construct()
    {
        if (empty($us)) {
            include "./config/db.php";
            $this->us = new Utilisateurs_Model($user, $pass, $host, $dbname);
        }
    }

    function getUsers()
    {
        $users = $this->us->getUsers();
        return ($users);
    }

    function addUser($firstname, $lastname, $email)
    {   
        $data = $this->us->addUser($firstname, $lastname, $email);
        return($data);
    }
}
