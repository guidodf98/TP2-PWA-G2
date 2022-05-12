<?php include_once '../includes/head.php' ?>
<?php include_once '../includes/navbar.php' ?>

<main class="pb-4 pt-0 text-white-50 bg-dark">

  <div id="header" class="row bg-dark container mx-auto">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32">
          <use xlink:href="#bootstrap"></use>
        </svg>
        <span class="fs-4 text-white">My Movies Blog</span>
      </a>

      <ul class="nav nav-pills">
        <li class="nav-item"><a href="#" class="nav-link" aria-current="page">Home</a></li>
        <li class="nav-item"><a href="#" class="nav-link active">Estrenos</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Géneros</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Must See</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Este Año</a></li>
      </ul>
    </header>
  </div>

  <div id="fila-1" class="row text-white bg-dark px-4 py-5 text-center shadow container mx-auto">
    <div class="py-5">
      <h1 class="display-5 fw-bold">Estrenos</h1>
      <div class="col-lg-6 mx-auto">
        <p class="fs-5 fw-bold mb-4">Accedé al listado de estrenos para este mes.</p>
      </div>
    </div>
  </div>

  <div class="row px-4 mt-3 container mx-auto">
    <div class="col-md-4">
      <select id="week-select" class="form-select" aria-label="week-select">
        <option selected>Seleccione una semana</option>
      </select>
    </div>
    <div class="col-md-8">
      <select id="movie-select" class="form-select d-none" aria-label="movie-select">

      </select>
    </div>
  </div>

  <div class="container container mx-auto">
    <h1 id="no-content" class="text-center mt-5 text-muted">(Seleccione una película)</h1>
    <div id="table-info" class="row mt-3 d-none">
      <div class="col-md-4">
        <img id="movie-img" src="../img/noimg.png" class="img-fluid">
      </div>
      <div class="col-md-8">
        <div id="movie-title">
          <h2 id="title"></h2>
          <div class="facts">
            <span id="release"></span>
            <span id="genres"></span>
            <span id="runtime"></span>
          </div>
        </div>
        <div id="movie-info">
          <h2 id="tagline" class="text-muted fst-italic pt-1"></h2>
          <h3>Resumen</h3>
          <div>
            <p id="overview"></p>
          </div>
          <div class="row">
            <div class="col-lg-6 col-md-12">
              <ul id="cast-1" class="list-group list-group">
              </ul>
            </div>
            <div class="col-lg-6 col-md-12">
              <ul id="cast-2" class="list-group list-group">
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</main>

<?php include_once '../includes/footer.php' ?>
<?php include_once '../includes/foot.php' ?>