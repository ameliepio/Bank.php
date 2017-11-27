<?php

class Account
{
    private $id;
    private $name_user;
    private $password;


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
     * Get the value of Name User
     *
     * @return mixed
     */
    public function getNameUser()
    {
        return $this->name_user;
    }

    /**
     * Set the value of Name User
     *
     * @param mixed name_user
     *
     * @return self
     */
    public function setNameUser($name_user)
    {
        $this->name_user = $name_user;

        return $this;
    }

    /**
     * Get the value of Password
     *
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of Password
     *
     * @param mixed password
     *
     * @return self
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

}
