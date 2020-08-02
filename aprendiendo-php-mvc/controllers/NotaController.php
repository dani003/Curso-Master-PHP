<?php

class NotaController{
    public function listar(){
        //Modelo
        require_once 'models/nota.php';

        //Logica del controlador
        $nota = new Nota();
        /*
        $nota->setNombre("Hola");
        $nota->setContenido('Hola mundo Php MVC');
*/
        $notas = $nota->conseguirTodos('notas');
        //Vista
        require_once 'views/nota/listar.php';
    }

    public function crear(){
        //Modelo
        require_once 'models/nota.php';
        $nota = new Nota();
        $nota->setUsuarioId(1);
        $nota->setTitulo("nota php mvc");
        $nota->setDescripcion("descripcion");
        $guardar = $nota->guardar();
        /*
        //para ver errores con la base de datos
        echo $nota->db->error;
        die();
        */

        header("Location: index.php?controller=nota&action=listar");
    }

    public function borrar(){

    }
}

 ?>
