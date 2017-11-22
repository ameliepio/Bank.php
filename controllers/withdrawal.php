<?php
require '../model/connexion.php';
require '../model/AccountManager.php';
// require '../entities/Account.php';


// / je crée mon manager pour pouvoir me connecter a la base de donnée
// create my manager for connection bdd
$manager = new AccountManager($bdd);
// var_dump($manager);

if (isset($_POST['addwithdrawal']))
{
    $data = $manager->getAccount($_POST['addwithdrawal']);
    $account = new Account($data);
}

if (isset($_POST['withdrawalAccount']))
{
    $data = $manager->getAccount($_POST['NameAccount']);
    $account = new Account($data);
    $account->withdrawal($_POST['Amount']);
    $manager->updateAccount($account);
    header("location:index.php");
};

include "../views/withdrawal.php";
