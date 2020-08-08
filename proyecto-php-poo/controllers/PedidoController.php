<?php

require_once 'models/pedido.php';

class pedidoController{
    public function hacer(){
        require_once 'views/pedido/hacer.php';
    }

    public function add(){
        if(isset($_SESSION['identity'])){
            $usuario_id = $_SESSION['identity']->id;
            $provincia = isset($_POST['provincia']) ? $_POST['provincia'] : false;
            $direccion = isset($_POST['direccion']) ? $_POST['direccion'] : false;
            $localidad = isset($_POST['localidad']) ? $_POST['localidad'] : false;
            $stats = Utils::statsCarrito();
            $coste = $stats['total'];

            if($provincia && $direccion && $localidad){
                //guardar datos en la base de datos
                $pedido = new Pedido();
                $pedido->setUsuarioId($usuario_id);
                $pedido->setProvincia($provincia);
                $pedido->setDireccion($direccion);
                $pedido->setLocalidad($localidad);
                $pedido->setCoste($coste);

                $save = $pedido->save();
                //Guardar linea_pedido
                $save_linea = $pedido->save_linea();

                if($save && $save_linea){
                    $_SESSION['pedido'] = 'completo';
                }else{
                    $_SESSION['pedido'] = 'failed';
                }
            }else{
                $_SESSION['pedido'] = 'failed';
            }
            header("Location: ".base_url.'pedido/confirmado');
        }else{
            //redirigir al index
            header("Location: ".base_url);
        }
    }

    public function confirmado(){
        if(isset($_SESSION['identity'])){
            $identity = $_SESSION['identity'];
            $pedido = new Pedido();
            $pedido->setUsuarioId($identity->id);
            $pedido = $pedido->getOneByUser();

            $pedido_productos = new Pedido();
            $productos = $pedido_productos->getProductsByPedido($pedido->id);
        }
        require_once 'views/pedido/confirmado.php';
    }
    public function mis_pedidos(){
        Utils::isIdentity();
        $usuario_id = $_SESSION['identity']->id;
        $pedido = new Pedido();

        //Sacar los pedidos del usuario
        $pedido->setUsuarioId($usuario_id);
        $pedidos = $pedido->getAllByUser();

        require_once 'views/pedido/mis_pedidos.php';
    }

    public function detalle(){
        Utils::isIdentity();
        if(isset($_GET['id'])){
            $id = $_GET['id'];

            //Sacar los datos del pedido
            $pedido = new Pedido();
            $pedido->setId($id);
            $pedido = $pedido->getOne();

            //Sacar los productos
            $pedido_productos = new Pedido();
            $productos = $pedido_productos->getProductsByPedido($id);


            require_once 'views/pedido/detalle.php';
        }else{
            header("Location: ".base_url.'pedido/mis_pedidos');
        }


    }

    public function gestion(){
        Utils::isAdmin();
        $gestion = true;

        $pedido = new Pedido();
        $pedidos = $pedido->getAll();

        require_once 'views/pedido/mis_pedidos.php';
    }

    public function estado(){
        Utils::isAdmin();
        if(isset($_POST['pedido_id']) && isset($_POST['estado'])){
            //Recojo los datos del formulario
            $id = $_POST['pedido_id'];
            $estado = $_POST['estado'];

            //Update del pedido
            $pedido = new Pedido();
            $pedido->setId($id);
            $pedido->setEstado($estado);

            $pedido->updateOne();

            header("Location: ".base_url.'pedido/detalle&id='.$id);

        }else{
            header("Location: ".base_url);
        }
        require_once 'views/pedido/mis_pedidos.php';
    }
}
 ?>
