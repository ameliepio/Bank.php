<?php
require ("../entities/User.php");

class UserManager
{
    // Instance de PDO
    //attibuts bdd
    //Méthode qui retourne la connexion à la base de données

    public function getDb()
    {
        $db = new PDO('mysql:host=localhost;dbname=bank', 'root', 'root');
        return $db;
    }
    //Méthode qui ajoute un utilisateur en base de données

    //faire une function add

    // function password

    function password($password)
    {
    global $bdd;
    $request=$bdd->prepare('SELECT id  FROM user  WHERE User=? AND password=?');
    $request->execute(array($_POST['user'],$_POST['psw']));
    $password=$request->fetchAll();;
    }



  }
