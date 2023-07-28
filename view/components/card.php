<?php
function generarCard($libro, $mostrarBotonBorrar = true) {
    ?>
    <div class="col-md-3">
        <div class="card" style="width: 20rem; height: 35rem; margin: 3rem;">
            <img src="<?php echo $libro['portada']; ?>" class="card-img-top" alt="Portada del libro" style="width: 100%; height: 18rem; object-fit: cover;">
            <div class="card-body">
                <a href="informacion_libro.php?isbn=<?php echo $libro['ISBN']; ?>" class="link-text" style="text-decoration:none;text-align:left;font-weight: 800;color: #581C87;"><h2 class="card-title"><?php echo $libro['titulo'];?></h2></a>
                <h3 class="card-title" style="text-align: left;font-weight: 400;"><?php echo $libro['autor']; ?></h3>
                <h5 class="card-title" style="text-align: left;font-weight: 300;">ISBN: <?php echo $libro['ISBN']; ?></h5>

                <?php
                if ($mostrarBotonBorrar) {
                    echo '<a href="./view/logic/delete.php?id=' . $libro['ISBN'] . '" class="btn btn-danger" style="background: #C084FC; color: white; border: none; font-weight: 600;">Borrar</a>';
                }
                ?>

            </div>
        </div>
    </div>
    <?php
}
?>
