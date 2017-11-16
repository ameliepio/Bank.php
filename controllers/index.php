<?php

 require '../model/connexion.php';
 require '../model/AccountManager.php';


 // je crée mon manager pour pouvoir me connecter a la base de donnée
 // create my manager for connection bdd
 $manager = new AccountManager($bdd);
 // var_dump($bdd);

 if (isset($_POST['DeleteAccount'])) {
   $donnees=$manager->getAccount($_POST['NameAccount']);
   $account = new Account($donnees);
   $accountdelete = $manager->deleteAccount($account);

  //  $manager->deleteAccount($account);
  //  header("Location: index.php");
 }

 $accounts=$manager->getAccounts();

//  if (isset($_POST['NameAccount']) AND isset($_POST['Amount'])){
//    $donnees= $manager->getAccount($_GET['id']);
//    $account = new Account($donnees);
//    $accountupdate=$manager->updateAccount($account);
//      header("Location: edit.php?id=".$_GET['id']);
// var_dump($account);

// } else if (isset($_POST['NameAccount']) && isset($_POST['Amount'])) {
//     // create an a Account
//     $account = new Account([$_POST['NameAccount'], $_POST['Amount'],]);
//
//     $manager->addAccount($account);
// //     header("Location: index.php");
// }


include "../views/indexVue.php";
include "../views/edit.php";
