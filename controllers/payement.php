<?php


require '../model/connexion.php';
require '../model/bankManager.php';


// je crée mon manager pour pouvoir me connecter a la base de donnée
//create manager for connection bdd
$manager = new bankManager($bdd);

// si on rempli le formulaire
// if you fill in the form
if (isset($_POST['name account']) AND isset($_POST['bank operation']) AND isset($_POST['amount']) ){
//on crée un objet
// create an object
$account =new $_POST['name account']($_POST);
// inserer mon vehicule crée en bdd
// insert my vehicle created in bdd
$manager->add($account);
}

include '../views/payement.php';
