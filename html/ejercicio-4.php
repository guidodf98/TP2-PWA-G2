<?php include_once '../includes/head.php' ?>
<?php include_once '../includes/navbar.php' ?>

<!-- <main class="container bg-dark text-white-50 p-5"> -->
<main class="pb-4 pt-0 text-white" style="background-color: #333">
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
        <li class="nav-item"><a href="#" class="nav-link">Estrenos</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Géneros</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Must See</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Este Año</a></li>
        <li class="nav-item"><a href="#" class="nav-link active">Registro</a></li>
      </ul>
    </header>
  </div>

  <div id="fila-1" class="row container mx-auto text-white bg-dark px-4 py-5 text-center shadow">
    <div class="py-5">
      <h1 class="display-5 fw-bold">Registro</h1>
      <div class="col-lg-6 mx-auto">
        <p class="fs-5 fw-bold mb-4">Recibe novedades sobre nuestra página en tu casilla de correo y accede a descargas <b>ilimitadas</b>.</p>
      </div>
    </div>
  </div>

  <div class="container-fluid mt-5">
    <div class="row justify-content-center">
      <div class="col-md-5">
        <form id="signup" novalidate>
          <div class="mb-3">
            <label for="fullName" class="form-label">Nombre completo</label>
            <input type="text" class="form-control" id="fullName" name="fullName">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email">
          </div>
          <div class="mb-3">
            <label for="username" class="form-label">Nombre de usuario</label>
            <input type="text" class="form-control" id="username" name="username" aria-describedby="usernamehelp">
            <div id="usernamehelp" class="form-text d-none fs-6">1231</div>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="password" name="password">
          </div>
          <div class="mb-3">
            <label for="passwordRepeat" class="form-label">Repita la contraseña</label>
            <input type="password" class="form-control" id="passwordRepeat" name="passwordRepeat">
          </div>
          <button id="btn-sub" type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</main>

<?php include_once '../includes/footer.php' ?>
<?php include_once '../includes/foot.php' ?>