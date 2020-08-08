<?php

class Utils{
    public static function deleteSession($name){
        if(isset($_SESSION[$name])){
            $_SESSION[$name] = null;
            unset($_SESSION[$name]);
        }
        return $name;
    }

    public static function isAdmin(){
        if(!isset($_SESSION['admin'])){
            header("Location: ".base_url);
        }else{
            return true;
        }
    }

    public static function isIdentity(){
        if(!isset($_SESSION['identity'])){
            header("Location: ".base_url);
        }else{
            return true;
        }
    }

    public static function showCategorias(){
        require_once 'models/categoria.php';
        $categoria = new Categoria();
        $categorias = $categoria->getAll();

        return $categorias;
    }

    public static function statsCarrito(){
        $stats = array(
            'count' => 0,
            'total' => 0
        );
        if(isset($_SESSION['carrito'])){
            $stats['count'] = count($_SESSION['carrito']);

            foreach ($_SESSION['carrito'] as $index => $producto) {
                $stats['total'] += $producto['precio']*$producto['unidades'];
            }
        }
        return $stats;
    }

    public static function showStatus($status){
        $value = 'pendiente';
        if($status == 'confirm'){
            $value = 'pendiente';
        }elseif($status == 'preparation'){
            $value = 'En preparacion';
        }elseif($status == 'ready'){
            $value = 'Preparado para enviar';
        }elseif($status == 'sended'){
            $value = 'Enviado';
        }
        return $value;
    }
}

 ?>
