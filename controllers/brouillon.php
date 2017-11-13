<?php


// require '../model/connexion.php';
// require '../model/AccountManager.php';


// je crée mon manager pour pouvoir me connecter a la base de donnée
//create manager for connection bdd
$manager = new AccountManager($bdd);

// si on rempli le formulaire
// if you fill in the form
if (isset($_POST['NameAccount']) AND isset($_POST['BankOperation']) AND isset($_POST['Amount'])){
  // update an article

  $account = $manager->getAccount($_GET['id']);
  $account->hydrate($_POST);
  $manager->updateAccount($account);

  // header("Location: article.php?id=".$_GET['id']);
}else if (isset($_POST['NameAccount']) && isset($_POST['BankOperation']) && isset($_POST['Amount'])) {
  // create an article
  $account = new Account([$_POST['NameAccount'], $_POST['BankOperation'], $_POST['Amount']]);
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
