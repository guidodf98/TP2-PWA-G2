<?php include_once '../includes/head.php' ?>
<?php include_once '../includes/navbar.php' ?>

<main class="container mt-5">

  <div class="container" style="min-height: 300px;">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Usuario</th>
          <th scope="col">Nombre</th>
          <th scope="col">Email</th>
        </tr>
      </thead>
      <tbody id="paginacion-contenido"></tbody>

    </table>

  </div>
  <div class="row row-cols-auto justify-content-center align-items-center">
    <div class="col">
      <button id="pag-anterior" class="btn btn-outline-primary disabled" value="0"><i class="fa-solid fa-angle-left"></i></button>
    </div>
    <div id="botones-paginacion" class="col py-3 text-center"></div>
    <div class="col">
      <button id="pag-siguiente" class="btn btn-outline-primary" value="5"><i class="fa-solid fa-angle-right"></i></button>
    </div>
  </div>
</main>

<?php include_once '../includes/footer.php' ?>
<?php include_once '../includes/foot.php' ?>