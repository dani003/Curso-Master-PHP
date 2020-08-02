<?php

class UsuarioController{

    public function mostrarTodos(){
        require_once 'models/usuario.php';
        //Todas las variables/constantes que esten en esta funcion
        //seran visibles en la vista del mismo nombre que la funcion
        $usuario = new Usuario();

        $todos_los_usuarios = $usuario->conseguirTodos('usuarios');
        require_once 'views/usuarios/mostrar-todos.php';
    }

    public function crear(){
        require_once 'views/usuarios/crear.php';
    }
}


 ?>
