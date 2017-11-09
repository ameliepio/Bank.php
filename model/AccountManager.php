<?php

class AccountManager
{
    // Instance de PDO
    //attibuts bdd

    private $bd;

    public function __construct($bd)
    {
        $this->setDb($bd);
    }
    // Methods

    public function setDb(PDO $bd)
    {
        $this->bd = $bd;
    }
    function addAccount($account)
     {
         global $bdd;
         $request = $bdd->prepare('INSERT INTO bankaccount(nameAccount,bankoperation, amount) VALUES(:nameAccount, :bankoperation, :amount)');
         $request->execute(array(
             "nameAccount" => $account->getNameAccount(),
             "bankoperation" => $account->getBankoperation(),
             "amount" => $account->getAmount(),
         ));
         // bonus: we return an value indicate the user is added
         return "account Added";
     }

     function getAccount($id)
     {
         global $bdd;
         $request = $bdd->prepare('SELECT * FROM bankaccount WHERE id = :id');
         $request->execute(array(
             "id" => $id
         ));
         $request->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Account', array(array('nameAccount','bankoperation','amount')));
         $account = $request->fetch();
         return $account;
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
         $request = $bdd->prepare('UPDATE bankaccount SET nameAccount = :nameAccount, bankoperation = :bankoperation, amount = :amount WHERE id = :id');
         $request->execute(array(
           "nameAccount" => $account->getNameAccount(),
           "bankoperation" => $account->getBankoperation(),
           "amount" => $account->getAmount(),
             'id' => $account->getId()
         ));
         //bonus return value indicate the user is update
         return 'account updated';
     }

}
