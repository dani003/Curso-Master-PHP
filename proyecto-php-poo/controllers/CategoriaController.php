<?php

require_once 'models/categoria.php';

class categoriaController{
    public function index(){
        Utils::isAdmin(); //Para comprobar que es admin el usuario
        $categoria = new Categoria();
        $categorias = $categoria->getAll();

        require_once 'views/categoria/index.php';
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
