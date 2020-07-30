<?php

class Usuario{

    const URL_COMPLETA = "http://localhost/";
    public $email;
    public $password;


    /**
     * Get the value of Email
     *
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of Email
     *
     * @param mixed $email
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;

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
     * @param mixed $password
     *
     * @return self
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

}

$usuario = new Usuario();
//Es una constante, entonces se accede con ::
echo $usuario::URL_COMPLETA;

var_dump($usuario);




 ?>
