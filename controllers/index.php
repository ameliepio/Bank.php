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

 if (isset($_POST['NameAccount']) AND isset($_POST['Amount'])){
   // update an article

   $adonnees= $manager->getAccount($_POST['id']);
   $account = new Account($donnees);
   $accountupdate=$manager->updateAccount($account);
      var_dump($account);
}

include "../views/indexVue.php";
