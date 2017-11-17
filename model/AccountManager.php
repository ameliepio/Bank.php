<?php

require("../entities/Account.php");

class AccountManager
{
    // Instance de PDO
    //attibuts bdd
      //Méthode qui retourne la connexion à la base de données

      public function getDb() {
        $db = new PDO('mysql:host=localhost;dbname=bank', '', '');
        return $db;
      }

      //Méthode qui ajoute un utilisateur en base de données
      public function addAccount(Account $account) {
        //1 Se connecter à la bse de données
      $db = $this->getDb();
        //2 Préparer l'insertion en BD
        $request = $db->prepare("INSERT INTO bankaccount (NameAccount,Amount) VALUES(:NameAccount,:Amount)");
        //3 Executer la requête avec les bonnes valeurs
        $request->execute([
          ":NameAccount"=> $account->getNameAccount(),
          ":Amount"=> $account->getAmount()]);
      }

      //Méthode qui récupère tous les utilisateurs enregistrés

      public function getAccounts() {
        //1 Je me connecte à la base de données
        $db = $this->getDb();
        //2 Je récupère toutes les lignes de la base de données avec une requête SQL
        $request = $db->query("SELECT * FROM bankaccount");
        //3 je récupère toutes les données sous forme d'un tableau associatif
        $data = $request->fetchAll(PDO::FETCH_ASSOC);
        //4 Je boucle sur le tableau pour transformer chaque sous-tableau en objet
        foreach ($data as $key => $value) {
          $data[$key] = new Account($value);
        }
        //5 Je retourne le résultat
        return $data;
      }

      //Méthode récupère un utilisateur en base de données

      public function getAccount($NameAccount){
        $db = $this->getDb();

        $request = $db->prepare("SELECT * FROM bankaccount WHERE NameAccount= ?");
        $request->execute([$NameAccount]);


// renvoi pas le tbl assoc
      $request= $request->fetch(PDO::FETCH_ASSOC);


        return $request;

      }

     function deleteAccount($account)
     {
         global $bdd;
         $request = $bdd->prepare('DELETE FROM bankaccount WHERE id = :id');
         $request->execute(array(
             'id' => $account->getId()
         ));
     }
      function updateAccount($account)
      {
          global $bdd;
          $request = $bdd->prepare('UPDATE bankaccount SET NameAccount = :NameAccount,  Amount = :Amount WHERE id = :id');
          $request->execute(array(
            'NameAccount' => $account->getNameAccount(),
              'Amount' => $account->getAmount(),
              'id' => $account->getId()
          ));
        }
            }
