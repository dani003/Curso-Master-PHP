<?php

class Pedido{
	private $id;
	private $usuario_id;
	private $provincia;
	private $localidad;
	private $direccion;
	private $coste;
	private $estado;
    private $fecha;
	private $hora;

    private $db;


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
         * Get the value of Usuario Id
         *
         * @return mixed
         */
        public function getUsuarioId()
        {
            return $this->usuario_id;
        }

        /**
         * Get the value of Provincia
         *
         * @return mixed
         */
        public function getProvincia()
        {
            return $this->provincia;
        }

        /**
         * Get the value of Localidad
         *
         * @return mixed
         */
        public function getLocalidad()
        {
            return $this->localidad;
        }

        /**
         * Get the value of Direccion
         *
         * @return mixed
         */
        public function getDireccion()
        {
            return $this->direccion;
        }

        /**
         * Get the value of Coste
         *
         * @return mixed
         */
        public function getCoste()
        {
            return $this->coste;
        }

        /**
         * Get the value of Estado
         *
         * @return mixed
         */
        public function getEstado()
        {
            return $this->estado;
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
         * Get the value of Hora
         *
         * @return mixed
         */
        public function getHora()
        {
            return $this->hora;
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
         * Set the value of Usuario Id
         *
         * @param mixed $usuario_id
         *
         * @return self
         */
        public function setUsuarioId($usuario_id)
        {
            $this->usuario_id = $usuario_id;

            return $this;
        }

        /**
         * Set the value of Provincia
         *
         * @param mixed $provincia
         *
         * @return self
         */
        public function setProvincia($provincia)
        {
            $this->provincia = $this->db->real_escape_string($provincia);
        }

        /**
         * Set the value of Localidad
         *
         * @param mixed $localidad
         *
         * @return self
         */
        public function setLocalidad($localidad)
        {
            $this->localidad = $this->db->real_escape_string($localidad);
        }

        /**
         * Set the value of Direccion
         *
         * @param mixed $direccion
         *
         * @return self
         */
        public function setDireccion($direccion)
        {
            $this->direccion = $this->db->real_escape_string($direccion);

        }

        /**
         * Set the value of Coste
         *
         * @param mixed $coste
         *
         * @return self
         */
        public function setCoste($coste)
        {
            $this->coste = $coste;

            return $this;
        }

        /**
         * Set the value of Estado
         *
         * @param mixed $estado
         *
         * @return self
         */
        public function setEstado($estado)
        {
            $this->estado = $estado;

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
         * Set the value of Hora
         *
         * @param mixed $hora
         *
         * @return self
         */
        public function setHora($hora)
        {
            $this->hora = $hora;

            return $this;
        }


	public function __construct() {
		$this->db = Database::connect();
	}

    public function getAll(){
        $pedidos = $this->db->query("SELECT * FROM pedidos ORDER BY id DESC;");
        return $pedidos;
    }

	public function getOne(){
		$pedidos = $this->db->query("SELECT * FROM pedidos WHERE id = {$this->getId()}");
		return $pedidos->fetch_object();
	}

    public function getOneByUser(){
        $sql = "SELECT p.id, p.coste FROM pedidos p "
        ."WHERE p.usuario_id = {$this->getUsuarioId()} ORDER BY id DESC LIMIT 1";
/*
        echo $sql;
		echo "<br />";
		echo $this->db->error;
		die();*/

		$pedido = $this->db->query($sql);
		return $pedido->fetch_object(); //copn fetch_object por que devolvemos un array de objetos
	}

    public function getAllByUser(){
        $sql = "SELECT  p.* FROM pedidos p "
        ."WHERE p.usuario_id = {$this->getUsuarioId()} ORDER BY id DESC";

		$pedido = $this->db->query($sql);
		return $pedido; //copn fetch_object por que devolvemos un array de objetos
	}

    public function getProductsByPedido($id){
        //$sql = "SELECT * FROM productos WHERE id IN "
        //."(SELECT producto_id FROM lineas_pedido WHERE pedido_id = {$id})";

        $sql = "SELECT pr.*, lp.unidades FROM productos pr "
        ."INNER JOIN lineas_pedido lp ON pr.id = lp.producto_id "
        ."WHERE lp.pedido_id={$id}";

        $productos = $this->db->query($sql);
		return $productos; //Sin fetch_object por que devolvemos solo un objetos
    }

	public function save(){
		$sql = "INSERT INTO pedidos VALUES(NULL,{$this->getUsuarioId()},'{$this->getProvincia()}','{$this->getLocalidad()}', '{$this->getDireccion()}', {$this->getCoste()}, 'confirm',CURDATE(), CURTIME());";
		$save = $this->db->query($sql);
		/* //Para depurar sql
		echo $sql;
		echo "<br />";
		echo $this->db->error;
		die();*/

		$result = false;
		if($save){
			$result = true;
		}
		return $result;
	}

    public function save_linea(){
        $sql = "SELECT LAST_INSERT_ID() as 'pedido';";
		$query = $this->db->query($sql);
        $pedido_id = $query->fetch_object()->pedido;

        foreach ($_SESSION['carrito'] as $elemento){
            $producto = $elemento['producto'];

            $insert = "INSERT INTO lineas_pedido VALUES (NULL, {$pedido_id}, {$producto->id}, {$elemento['unidades']})";
            $save = $this->db->query($insert);

             //Para depurar sql
             /*
    		var_dump($producto);
    		echo "<br />";
            var_dump($insert);
            echo "<br />";
    		echo $this->db->error;
    		die();*/
        }

        $result = false;
		if($save){
			$result = true;
		}
		return $result;
    }
    public function updateOne(){
        $sql = "UPDATE pedidos SET estado='{$this->getEstado()}'";
		$sql .= " WHERE id={$this->getId()};";

		$save = $this->db->query($sql);

		$result = false;
		if($save){
			$result = true;
		}
		return $result;
    }

}

 ?>
