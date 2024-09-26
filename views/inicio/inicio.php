<?php

include '../templates/header.php';

?>

<main class="">
  <section class="m-4 p-4 d-flex container-fluide align-items-center gap-3">
    <article class="">
      <h2 class="">Bienvenido al gestor de tu Biblio-TK</h2>
      <p>En esta sección podrás administrar tus libros, añadir nuevos, editar y eliminar los existentes.
        También podrás añadir y eliminar socios y gestionar sus fichas. ¡Nunca fue tan fácil dirigir tu biblioteca!
      </p>
    </article>
    <article class="">
      <img src="../img/1366_2000.jpg" alt="imagen-inicio" width="600vh">
    </article>
  </section>
  <section class="bg-body-tertiary container-fluide m-0 p-4">
    <h3 class="text-dark">Libros más vendidos</h3>
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <!-- Listado de libros más vendidos -->
      <?php foreach ($libros as $libro) : ?>
        <div class="col">
          <div class="card h-100">
            <img src="../img/<?= $libro->imagen ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?= $libro->título ?></h5>
              <p class="card-text">Año de publicación: <?= $libro->año_publicación ?></p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </section>
</main>

<?php

include '../templates/footer.php';

?>