<?php include_once '../includes/head.php' ?>
<?php include_once '../includes/navbar.php' ?>

<main class="container mb-3">
  <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#div-tab" type="button" role="tab" aria-controls="div-tab" aria-selected="true">Inicio</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="exe-2-tab" data-bs-toggle="tab" data-bs-target="#div-tab" type="button" role="tab" aria-controls="div-tab" aria-selected="false">Ejercicio 2</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="exe-3-tab" data-bs-toggle="tab" data-bs-target="#div-tab" type="button" role="tab" aria-controls="div-tab" aria-selected="false">Ejercicio 3</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="exe-4-tab" data-bs-toggle="tab" data-bs-target="#div-tab" type="button" role="tab" aria-controls="div-tab" aria-selected="false">Ejercicio 4</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="exe-5-tab" data-bs-toggle="tab" data-bs-target="#div-tab" type="button" role="tab" aria-controls="div-tab" aria-selected="false">Ejercicio 5</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="exe-6-tab" data-bs-toggle="tab" data-bs-target="#div-tab" type="button" role="tab" aria-controls="div-tab" aria-selected="false">Ejercicio 6</button>
    </li>
  </ul>
  <div class="tab-content" id="myTabContent">

    <div class="exe-div tab-pane fade show active m-1 px-2 pb-3" id="div-tab" role="tabpanel" aria-labelledby="home-tab">
      <h1>Inicio</h1>
    </div>

  </div>

</main>

<?php include_once '../includes/footer.php' ?>
<?php include_once '../includes/foot.php' ?>