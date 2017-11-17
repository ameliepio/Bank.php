<?php

 require '../model/connexion.php';
 require '../model/AccountManager.php';


 // je crée mon manager pour pouvoir me connecter a la base de donnée
 // create my manager for connection bdd
 $manager = new AccountManager($bdd);

 if (isset($_POST['DeleteAccount'])) {
   $data=$manager->getAccount($_POST['NameAccount']);
   $account = new Account($data);
   $accountdelete = $manager->deleteAccount($account);

 }

 $accounts=$manager->getAccounts();

include "../views/indexVue.php";
