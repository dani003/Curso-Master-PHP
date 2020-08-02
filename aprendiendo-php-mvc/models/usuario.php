<?php

require_once 'ModeloBase.php';

class Usuario extends ModeloBase{
    public $nombre;
    public $apellidos;
    public $email;
    public $password;

    //conexion al constructor del padre (ModeloBase (extends ModeloBase)) para tener
    //acceso a la base de datos
    public function __construct(){
        parent::__construct();
    }
    /**
     * Get the value of Nombre
     *
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Get the value of Apellidos
     *
     * @return mixed
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

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
     * Get the value of Password
     *
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }
    /**
     * Set the value of Nombre
     *
     * @param mixed $nombre
     *
     * @return self
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Set the value of Apellidos
     *
     * @param mixed $apellidos
     *
     * @return self
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
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
 ?>
