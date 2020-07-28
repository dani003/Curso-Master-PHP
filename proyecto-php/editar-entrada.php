<?php
require_once 'includes/redireccion.php';
require_once 'includes/conexion.php';
require_once 'includes/helpers.php';

    $entrada_actual = conseguirEntrada($db, $_GET['id']);

    if(!isset($entrada_actual['id'])){
        header("Location: index.php");
    }
 ?>
<?php
require_once 'includes/cabecera.php';
require_once 'includes/lateral.php';
 ?>

 <div id="principal">

     <h1>Editar Entradas</h1>
     <p>
         Edita Tu Entrada <?=$entrada_actual['titulo']?>
     </p>
 </br>
     <form action="guardar-entrada.php?editar=<?=$entrada_actual['id']?>" method="POST">
         <label for="titulo">Titulo</label>
         <input type="text" name="titulo" value="<?= $entrada_actual['titulo']?>" >
         <div class="alerta alerta-error">
              <?php echo isset($_SESSION['errores_entradas']) ? mostrarError($_SESSION['errores_entradas'], 'titulo') : ''; ?>
         </div>

         <label for="descripcion">Descripcion</label>
         <textarea type="text" name="descripcion"><?= $entrada_actual['descripcion']?></textarea>
         <?php echo isset($_SESSION['errores_entradas']) ? mostrarError($_SESSION['errores_entradas'], 'descripcion') : ''; ?>


         <label for="categoria">Categoria</label>
         <select name="categoria">
             <?php $categorias = conseguirCategorias($db);
             if(!empty($categorias)):
                 while($categoria = mysqli_fetch_assoc($categorias)):
             ?>
                    <option value="<?=$categoria['id']?>" <?=($categoria['id'] == $entrada_actual['categoria_id']) ? 'selected="selected"' : ''?>>
                        <?=$categoria['nombre']?>
                    </option>
             <?php
                endwhile;
             endif;
              ?>
         </select>
         <?php echo isset($_SESSION['errores_entradas']) ? mostrarError($_SESSION['errores_entradas'], 'descripcion') : ''; ?>

         <input type="submit" value="Guardar">
     </form>
     <?php borrarErrores(); ?>
 </div>

 <?php
 require_once 'Includes/pie.php';
  ?>
