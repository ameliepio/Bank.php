<?php

class Account
{
    private $id;
    private $NameAccount;
    private $Amount;


    public function __construct($data)
    {
        $this->hydrate($data);
    }

      public function hydrate(array $data)
    {
        foreach ($data as $key => $value)
        {
            // On récupère le nom du setter correspondant à l'attribut.
            $method = 'set'.ucfirst($key);
            // Si le setter correspondant existe.
            if (method_exists($this, $method))
            {
                // On appelle le setter.
                $this->$method($value);
            }


}
}

    /**
     * Get the value of Id
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of Id
     *
     * @param mixed id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of Name Account
     *
     * @return mixed
     */
    public function getNameAccount()
    {
        return $this->NameAccount;
    }

    /**
     * Set the value of Name Account
     *
     * @param mixed NameAccount
     *
     * @return self
     */
    public function setNameAccount($NameAccount)
    {
        $this->NameAccount = $NameAccount;

        return $this;
    }



    /**
     * Get the value of Bank Operation
     *
     * @return mixed
     */
    public function getBankOperation()
    {
        return $this->BankOperation;
    }

    /**
     * Set the value of Bank Operation
     *
     * @param mixed BankOperation
     *
     * @return self
     */
    public function setBankOperation($BankOperation)
    {
        $this->BankOperation = $BankOperation;

        return $this;
    }

    /**
     * Get the value of Amount
     *
     * @return mixed
     */
    public function getAmount()
    {
        return $this->Amount;
    }


    /**
     * Set the value of Amount
     *
     * @param mixed Amount
     *
     * @return self
     */


    public function setAmount($Amount)
    {
        $this->Amount = $Amount;

        return $this;
    }
    function withdrawal($balance){

    $this->Amount-=$balance;
    $this->setAmount($this->Amount);

    }
    function transfer($balance){

    $this->Amount+=$balance;
    $this->setAmount($this->Amount);


}
}
