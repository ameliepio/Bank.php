<?php


require '../model/connexion.php';
require '../model/AccountManager.php';


// je crée mon manager pour pouvoir me connecter a la base de donnée
//create manager for connection bdd
$manager = new AccountManager($bdd);

// si on rempli le formulaire
// if you fill in the form
if (isset($_POST['name account']) AND isset($_POST['bank operation']) AND isset($_POST['amount']) ){
  // update an article

  $account = $manager->getAccount($_GET['id']);
  $account->hydrate($_POST);
  $manager->updateAccount($account);

  // header("Location: article.php?id=".$_GET['id']);
}else if (isset($_POST['name account']) && isset($_POST['bank operation']) && isset($_POST['amount'])) {
  // create an article
  $account = new Account([$_POST['name account'], $_POST['bank operation'], $_POST['amount']]);
  $account->hydrate($_POST);
  $manager->addAccount($account);
  // header("Location: index.php");
} else if (isset($_POST['delete'])) {
  $account = $manager->getAccount($_POST['delete']);
  $manager->deleteAccount($account);
  // header("Location: index.php");
}
if (isset($_GET['id'])) {

  //utilisation du model
$account = $manager->getAccount($_GET['id']);
  //affichage de la vue avec binding de users

} else echo 'aucun article selectioné dans l url';

require '../views/payement.php';
