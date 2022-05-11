<?php include_once '../includes/head.php' ?>
<?php include_once '../includes/navbar.php' ?>


<main class="pb-4 pt-0" style="background-color: #333">

  <div id="banner-puntuadas" class="row text-center container-fluid shadow mx-auto p-0" style="background-color: #000000">
    <img src="../img/banner-peliculas-puntuadas.png" alt="banner peliculas mejor puntuadas" class="img-fluid mx-auto p-0">
  </div>

  <!-- Miniaturas -->
  <div id="imagenes-thumb" class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-6 my-3 container mx-auto"></div>

  <div id="imagenes" class="row mb-4 mt-5 container-lg mx-auto">
    <!-- Titulo Pelicula -->
    <div id="imagenes-nombres" class="list-group text-center col-12 col-md-4 pe-0 my-3"></div>

    <!-- Portada Pelicula -->
    <div id="myCarousel" class="col-12 col-md-8 carousel slide align-self-center" data-bs-interval="false">
      <div id="portadas-peliculas" class="carousel-inner"></div>
    </div>
  </div>

  <!-- Datos Pelicula -->
  <div id="info-peliculas"></div>

  <!-- Modal -->
  <div class="modal fade" id="modal-pelicula" tabindex="-1" aria-labelledby="modal-peliculaLabel" aria-hidden="true">
    <div class="modal-dialog"></div>
  </div>

</main>


<?php include_once '../includes/footer.php' ?>
<?php include_once '../includes/foot.php' ?>