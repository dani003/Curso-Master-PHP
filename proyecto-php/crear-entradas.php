<?php require_once 'includes/redireccion.php' ?>
<?php require_once 'includes/cabecera.php';
      require_once 'includes/lateral.php'; ?>

 <div id="principal">

     <h1>Crear Entradas</h1>
     <p>
         Añade nuevas entradas al blog para que los usuarios puedan
         leerlas y disfrutar de nuestro contenido
     </p>
 </br>
     <form action="guardar-entrada.php" method="POST">
         <label for="titulo">Titulo</label>
         <input type="text" name="titulo">
         <div class="alerta alerta-error">
              <?php echo isset($_SESSION['errores_entradas']) ? mostrarError($_SESSION['errores_entradas'], 'titulo') : ''; ?>
         </div>

         <label for="descripcion">Descripcion</label>
         <textarea type="text" name="descripcion"></textarea>
         <?php echo isset($_SESSION['errores_entradas']) ? mostrarError($_SESSION['errores_entradas'], 'descripcion') : ''; ?>


         <label for="categoria">Categoria</label>
         <select name="categoria">
             <?php $categorias = conseguirCategorias($db);
             if(!empty($categorias)):
                 while($categoria = mysqli_fetch_assoc($categorias)):
             ?>
                    <option value="<?=$categoria['id']?>">
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

 <?php require_once 'Includes/pie.php'; ?>
