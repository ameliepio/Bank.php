<?php

 require '../model/connexion.php';
 require '../model/UserManager.php';


 // / je crée mon manager pour pouvoir me connecter a la base de donnée
 // create my manager for connection bdd
$manager = new UserManager($bdd);

if (isset($_POST['connect'])){

// if( isset($_POST['psw'])&& isset($_POST['user'])){
$data = $manager->getNameUser($_POST['connect']);

    // Créer un objet utilisateur sur la base du formulaire soumis
      $user= new User($data);

    //Grace au Usermanager enregistrer l'objet créé BD
      $UserManager->addUser($user);
      header("location:index.php");
  }

  if (isset($_POST['connexion']))
  {
      $data = $manager->getNameUser($_POST['psw'])&& isset($_POST['user']);
      $user = new User($data);

      header("location:index.php");
  };

include "../views/user.php";
