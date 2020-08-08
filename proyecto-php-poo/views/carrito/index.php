<h1>Carrito de la Comprar</h1>

<table>
    <tr>
        <th>Imagen</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Unidades</th>
    </tr>
    <?php foreach ($carrito as $indice => $elemento):
        $producto = $elemento['producto'];
    ?>
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
                <?=$elemento['unidades']?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
<br/>
<div class="total-carrito">
    <?php $stats = Utils::statsCarrito() ?>
    <h3>Precio Total: <?=$stats['total']?></h3>
    <a href="<?=base_url?>pedido/hacer" class="button button-pedido">Hacer Pedido</a>
</div>
