<?php

class Categoria{
    private $id;
    private $nombre;
    private $db;

    public function __construct() {
		$this->db = Database::connect();
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
     * Get the value of Nombre
     *
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }
    /**
     * Set the value of Id
     *
     * @param mixed $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
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
        $this->nombre = $this->db->real_escape_string($nombre);
    }

    public function getAll(){
        $categorias = $this->db->query("SELECT * FROM categorias ORDER BY id DESC;");
        return $categorias;
    }

    public function getOne(){
        $categoria = $this->db->query("SELECT * FROM categorias WHERE id={$this->getId()}");
        return $categoria->fetch_object();;
    }

    public function save(){
    	$sql = "INSERT INTO categorias VALUES(NULL, '{$this->getNombre()}');";
    	$save = $this->db->query($sql);

    	$result = false;
    	if($save){
    		$result = true;
    	}
    	return $result;
    }


}

 ?>
