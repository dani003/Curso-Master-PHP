<?php

class Producto{
	private $id;
	private $categoria_id;
	private $nombre;
	private $descripcion;
	private $precio;
	private $stock;
	private $oferta;
    private $fecha;
	private $imagen;

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
     * Get the value of Categoria Id
     *
     * @return mixed
     */
    public function getCategoriaId()
    {
        return $this->categoria_id;
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
     * Get the value of Descripcion
     *
     * @return mixed
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Get the value of Precio
     *
     * @return mixed
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Get the value of Stock
     *
     * @return mixed
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * Get the value of Oferta
     *
     * @return mixed
     */
    public function getOferta()
    {
        return $this->oferta;
    }

    /**
     * Get the value of Fecha
     *
     * @return mixed
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Get the value of Imagen
     *
     * @return mixed
     */
    public function getImagen()
    {
        return $this->imagen;
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
     * Set the value of Categoria Id
     *
     * @param mixed $categoria_id
     *
     * @return self
     */
    public function setCategoriaId($categoria_id)
    {
        $this->categoria_id = $categoria_id;

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

        return $this;
    }

    /**
     * Set the value of Descripcion
     *
     * @param mixed $descripcion
     *
     * @return self
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $this->db->real_escape_string($descripcion);

        return $this;
    }

    /**
     * Set the value of Precio
     *
     * @param mixed $precio
     *
     * @return self
     */
    public function setPrecio($precio)
    {
        $this->precio = $this->db->real_escape_string($precio);

        return $this;
    }

    /**
     * Set the value of Stock
     *
     * @param mixed $stock
     *
     * @return self
     */
    public function setStock($stock)
    {
        $this->stock = $this->db->real_escape_string($stock);

        return $this;
    }

    /**
     * Set the value of Oferta
     *
     * @param mixed $oferta
     *
     * @return self
     */
    public function setOferta($oferta)
    {
        $this->oferta = $this->db->real_escape_string($oferta);

        return $this;
    }

    /**
     * Set the value of Fecha
     *
     * @param mixed $fecha
     *
     * @return self
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Set the value of Imagen
     *
     * @param mixed $imagen
     *
     * @return self
     */
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;

        return $this;
    }

    public function getAll(){
        $productos = $this->db->query("SELECT * FROM productos ORDER BY id DESC;");
        return $productos;
    }
	public function getOne(){
		$producto = $this->db->query("SELECT * FROM productos WHERE id = {$this->getId()}");
		return $producto->fetch_object();
	}

	public function save(){
		$sql = "INSERT INTO productos VALUES(NULL,'{$this->getCategoriaId()}','{$this->getNombre()}', '{$this->getDescripcion()}', {$this->getPrecio()}, {$this->getStock()},NULL ,CURDATE(), '{$this->getImagen()}');";
		$save = $this->db->query($sql);
		/* //Para depurar sql
		echo $sql;
		echo "<br />";
		echo $this->db->error;
		die();
		*/
		$result = false;
		if($save){
			$result = true;
		}
		return $result;
	}

	public function edit(){
		$sql = "UPDATE productos SET nombre='{$this->getNombre()}', descripcion='{$this->getDescripcion()}', precio={$this->getPrecio()}, stock={$this->getStock()}, categoria_id={$this->getCategoriaId()}  ";

		if($this->getImagen() != null){
			$sql .= ", imagen='{$this->getImagen()}'";
		}

		$sql .= " WHERE id={$this->id};";


		$save = $this->db->query($sql);

		$result = false;
		if($save){
			$result = true;
		}
		return $result;
	}


	public function delete(){
		$sql = "DELETE FROM productos WHERE id={$this->id}";
		$delete = $this->db->query($sql);

		$result = false;
		if($delete){
			$result = true;
		}
		return $result;
	}

}

 ?>
