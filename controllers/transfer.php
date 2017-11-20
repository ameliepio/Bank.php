<?php

 require '../model/connexion.php';
 require '../model/AccountManager.php';

 // / je crée mon manager pour pouvoir me connecter a la base de donnée
 // create my manager for connection bdd
 $manager = new AccountManager($bdd);
 // var_dump($manager);
 if (isset($_POST['addwithdrawal']) ){

   $data=$manager->getAccount($_POST['withdrawal']);
   $account = new Account($data);
 var_dump($account);


 }
 if (isset($_POST['transferAccount'])){


 $balance=new Account($_POST);
 $manager->withdrawal($balance);
  header("location:index.php");
 };



 include "../views/transfer.php";
