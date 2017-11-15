<?php

try {
    $bdd = new PDO('mysql:host=localhost;dbname=bank;charset=utf8', '', '');

}

catch (Exception $e)

{

    die('Erreur : ' . $e->getMessage());

}
