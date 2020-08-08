<?php if(isset($_SESSION['pedido']) && $_SESSION['pedido'] == 'completo'): ?>
    <h1>Tu Pedido se ha Confirmado</h1>
    <p>
        Tu pedido ha sido guardado con exito, una vez que realices la
        transferencia bancaria a la cuenta 782456612132 con el coste del pedido, sera procesado y enviado
    </p>
    <?php if(isset($pedido)): ?>
        <h3>Datos del pedido</h3>

            Numero de pedido: <?=$pedido->id?> <br/>
            Total a pagar: <?=$pedido->coste?> $ <br/>
            Productos: <br/>
            <table>
                <tr>
                    <th>Imagen</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Unidades</th>
                </tr>
                <?php while($producto = $productos->fetch_object()): ?>
                    <tr>
                        <td>
                            <?php if($producto->imagen != null): ?>
                                <img src="<?=base_url?>uploads/images/<?=$producto->imagen?>" alt="Camiseta logo" class="img_carrito"/>
                            <?php else: ?>
                                <img src="<?=base_url?>assets/img/camiseta.png" class="img_carrito"/>
                            <?php endif; ?>
                        </td>
                        <td>
                            <a href="<?=base_url?>producto/ver&id=<?=$producto->id?>"><?=$producto->nombre?></a>
                        </td>
                        <td>
                            <?=$producto->precio?>
                        </td>
                        <td>
                            <?=$producto->unidades?>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </table>
    <?php endif; ?>
<?php elseif(isset($_SESSION['pedido']) && $_SESSION['pedido'] != 'completo'): ?>
    <h1>Tu pedido no ha sido procesado</h1>
<?php endif; ?>
