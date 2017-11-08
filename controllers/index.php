<?php

 require '../model/connexion.php';
 require '../model/bankManager.php';


 // je crée mon manager pour pouvoir me connecter a la base de donnée
 // create my manager for connection bdd
 $manager = new bankManager($bdd);

 // je recupere et j'affiche ma liste de vehicules
 // I get back and I display my list of vehicles
 $account=$manager->getVehicles();


 // on crée une boucle qui parcours l'objet
 // create a loop that traverses the object

 foreach ($account as $key=>$value){
     $class = ucfirst($value['name account']);
     $account[$key] = new $class($value);
     //var_dump($value);
 }
 //var_dump($vehicles);

include "../views/indexVue.php";
