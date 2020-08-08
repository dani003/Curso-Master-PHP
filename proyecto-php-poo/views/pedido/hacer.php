<?php if(isset($_SESSION['identity'])): ?>
    <h1>Hacer Pedido</h1>
    <p>
        <a href="<?=base_url?>carrito/index">Ver los productos y el precio del pedido</a>
    </p>
    <br/>
    <h3>Direccion para el envio</h3>
    <form class="" action="<?=base_url?>pedido/add" method="POST">
        <label for="provincia">Provincia</label>
        <input type="text" name="provincia" required>

        <label for="localidad">Localidad</label>
        <input type="text" name="localidad" required>

        <label for="direccion">direccion</label>
        <input type="text" name="direccion" required>

        <input type="submit" value="Confirmar Pedido">
    </form>
<?php else: ?>
    <h1>Necesitas estar identificado</h1>
    <p>Necesitas estar logeado en la web para poder realizar tu pedido </p>
<?php  endif;?>
