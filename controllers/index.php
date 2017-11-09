<?php

 require '../model/connexion.php';
 require '../model/AccountManager.php';


 // je crée mon manager pour pouvoir me connecter a la base de donnée
 // create my manager for connection bdd
 $manager = new AccountManager($bdd);

 // je recupere et j'affiche ma liste de vehicules
 // I get back and I display my list of vehicles
 $account=$manager->getAccount($account);


 // on crée une boucle qui parcours l'objet
 // create a loop that traverses the object

 foreach ($account as $key=>$value){
     $class = ucfirst($value['name account']);
     $account[$key] = new $class($value);
     //var_dump($value);
 }

include "../views/indexVue.php";
