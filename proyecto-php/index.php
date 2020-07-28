<?php
require_once 'includes/cabecera.php';
require_once 'includes/lateral.php';
 ?>
    <!--Barra Lateral -->
    <?php
    require_once 'Includes/lateral.php';
     ?>
    <!--Contenido principal -->
    <div id="principal">
        <h1>Ultimas entradas</h1>
        <?php
            $entradas = conseguirEntradas($db, true);
            if(!empty($entradas)):
                while($entrada = mysqli_fetch_assoc($entradas)):
        ?>
                    <article class="entrada">
                        <a href="entrada.php?id=<?=$entrada['id']?>">
                            <h2><?=$entrada['titulo']?></h2>
                            <span class="fecha"><?=$entrada['categoria'].' | '.$entrada['fecha']?></span>
                            <p>
                                <?=substr($entrada['descripcion'], 0, 180)."..."?>
                            </p>
                        </a>
                    </article>
        <?php
                endwhile;
            endif;
        ?>
        <div id="ver-todas">
            <a href="entradas.php">Ver todas las entradas</a>
        </div>
    </div><!-- FIN PRINCIPAL-->
<!--Pie de pagina -->
<?php
require_once 'Includes/pie.php';
 ?>
    </body>
</html>
