<?php
require '../model/connexion.php';
require '../model/AccountManager.php';
// require '../entities/Account.php';



// / je crée mon manager pour pouvoir me connecter a la base de donnée
// create my manager for connection bdd
$manager = new AccountManager($bdd);
// var_dump($manager);

if (isset($_POST['addtransfer']))
{
    $data = $manager->getAccount($_POST['addtransfer']);
    $account = new Account($data);
}

if (isset($_POST['transferAccount']))
{
    $data = $manager->getAccount($_POST['NameAccount']);
    $account = new Account($data);
    $account->transfer($_POST['Amount']);
    $manager->updateAccount($account);
    header("location:index.php");
};
include "../views/transfer.php";
