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

var_dump($account);



}
if (isset($_POST['editAccount'])){


 $accountupdate=new Account($_POST);
 $manager->updateAccount($accountupdate);
  header("location:index.php");
}


;
include "../views/edit.php";
