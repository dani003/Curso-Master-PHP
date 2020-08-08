<?php

require_once 'models/categoria.php';
require_once 'models/producto.php';

class categoriaController{

    public function index(){
        Utils::isAdmin(); //Para comprobar que es admin el usuario
        $categoria = new Categoria();
        $categorias = $categoria->getAll();

        require_once 'views/categoria/index.php';
    }

    public function ver(){
        if(isset($_GET['id'])){
            $id= $_GET['id'];
            //Conseguir categoria
            $categoria = new Categoria();
            $categoria->setId($id);
            $categoria = $categoria->getOne();

            //Conseguir producto
            $producto = new Producto();
            $producto->setCategoriaId($id);
            $productos = $producto->getAllCategory();
        }

        require_once 'views/categoria/ver.php';
    }

    public function crear(){ //se llama con :: por que es metodo estatic
        Utils::isAdmin(); //Para comprobar que es admin el usuario
        require_once 'views/categoria/crear.php';
    }

    public function save(){
        Utils::isAdmin(); //Para comprobar que es admin el usuario

        //Guardar la categoria en la bd
        if(isset($_POST) && isset($_POST['nombre'])){

            $categoria = new Categoria();
            $categoria->setNombre($_POST['nombre']);
            $save = $categoria->save();
        }
        header("Location: ".base_url."categoria/index");
    }
} ?>
