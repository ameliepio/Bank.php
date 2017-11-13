<?php
//I Charger les classes et outils nécessaires
require_once("../model/AccountManager.php");
require_once("../entities/Account.php");
require_once("../services/formsVerif.php");

$AccountManager = new AccountManager();
$formsVerif = new formsVerif();

//II Executer la logiques (if, variables, transformations...)
if(isset($_POST["addAccount"])) {
  //Vérifier que toutes les entrées sont pleines
  // $erreur = $formsVerif->isFormEmpty($_POST);
  // //Si certainnes sont vides, j'affiche un message d'erreur
  //     echo 'tot';
  if (isset($erreur)) {
    echo $erreur;
  }
  else {
    // Créer un objet utilisateur sur la base du formulaire soumis
      $account = new Account($_POST);


    //Grace au Usermanager enregistrer l'objet créé BD
      $AccountManager->addAccount($account);
      header("location:index.php");
  }
}

//On récupère un tableau contenant les infos utilisateur depuis la BD
// $account=$AccountManager->getAccount($_POST);
// III Afficher la vue
include "../views/payement.php";
 ?>
