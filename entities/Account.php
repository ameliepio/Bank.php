<?php

class Account
{
    private $id;
    private $nameAccount;
    private $bankoperation;
    private $amount;


    public function __construct($donnees)
    {
        $this->hydrate($donnees);
    }

      public function hydrate(array $donnees)
    {
        foreach ($donnees as $key => $value)
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
        return $this->nameAccount;
    }

    /**
     * Set the value of Name Account
     *
     * @param mixed nameAccount
     *
     * @return self
     */
    public function setNameAccount($nameAccount)
    {
        $this->nameAccount = $nameAccount;

        return $this;
    }

    /**
     * Get the value of Bankoperation
     *
     * @return mixed
     */
    public function getBankoperation()
    {
        return $this->bankoperation;
    }

    /**
     * Set the value of Bankoperation
     *
     * @param mixed bankoperation
     *
     * @return self
     */
    public function setBankoperation($bankoperation)
    {
        $this->bankoperation = $bankoperation;

        return $this;
    }

    /**
     * Get the value of Amount
     *
     * @return mixed
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set the value of Amount
     *
     * @param mixed amount
     *
     * @return self
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

}
    
