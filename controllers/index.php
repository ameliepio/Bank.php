<?php

 require '../model/connexion.php';
 require '../model/AccountManager.php';


 // je crée mon manager pour pouvoir me connecter a la base de donnée
 // create my manager for connection bdd
 $manager = new AccountManager($bdd);
 // var_dump($bdd);

 // je recupere et j'affiche ma liste de compte
 // I get back and I display my list of compte
 $accounts=$manager->getAccounts();
 // var_dump($accounts);

 if (isset($_POST['DeleteAccount'])) {
   $account = $manager->getAccount($_POST['DeleteAccount']);
   $manager->deleteAccount($account);
   // header("Location: index.php");
 }






include "../views/indexVue.php";
