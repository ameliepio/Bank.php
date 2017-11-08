<?php

class bankManager
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
}
