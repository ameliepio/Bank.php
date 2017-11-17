<?php

 require '../model/connexion.php';
 require '../model/AccountManager.php';


 // je crée mon manager pour pouvoir me connecter a la base de donnée
 // create my manager for connection bdd
 $manager = new AccountManager($bdd);
 // var_dump($manager);
 if (isset($_POST['update']) ){

   $data=$manager->getAccount($_POST['NameAccountUpdate']);
   $account = new Account($data);

}

if (isset($_POST['addAccount'])){
   echo'test';
// $accountupdate=$account->hydrate($_POST);
// $accountupdate = $manager->updateAccount($accountupdate);

// var_dump($data);
var_dump($account);
}
;
include "../views/edit.php";
