$(document).ready(function () {
  cargarDatos();

  function cargarDatos() {
    $.ajax({
      type: "POST",
      url: "../data/movieData.json",
      dataType: "json",
      success: function (response) {
        $("#imagenes-thumb").html(cadenaThumbnails(response.peliculas));
        $("#imagenes-nombres").html(cadenaListaPeliculas(response.peliculas));
        $("#portadas-peliculas").html(cadenaPortadas(response.peliculas));
      }
    });

  }

  // CADENAS
  function cadenaListaPeliculas(peliculas) {
    cadena = "";
    numero = 0;

    peliculas.forEach(pelicula => {
      cadena += `
        <button 
          id="btn-${numero}" 
          class="list-group-item list-group-item-action m-1 border-0" 
          type="button" 
          onclick="cargarDatosYMostrar(${numero})" 
          data-bs-target="#myCarousel" 
          data-bs-slide-to="${numero}" 
          aria-current="true" 
          aria-label="Slide ${numero}">
            <p class="mb-0 text-white">${pelicula.titulo}</p>
        </button>
      `
      numero += 1;
    });

    return cadena;
  }

  function cadenaThumbnails(peliculas) {
    cadena = "";
    numero = 0;

    peliculas.forEach(pelicula => {
      cadena += `
        <div class="col d-flex justify-content-center">
          <button class="m-1 p-0" type="button" data-bs-target="#myCarousel" data-bs-slide-to="${numero}" aria-current="true" aria-label="Slide ${numero}">
            <img src="${pelicula.portada}" class="d-block mx-auto w-100" alt="${pelicula.titulo}">
          </button>
        </div>
      `
      numero += 1;
    });

    return cadena;
  }

  function cadenaPortadas(peliculas) {
    cadena = "";
    numero = 1;
    primera = " active";

    peliculas.forEach(pelicula => {
      cadena += `
        <div class="carousel-item${primera}">
          <img src="${pelicula.portada}" class="d-block mx-auto my-auto shadow-lg" alt="portada ${pelicula.titulo}">
        </div>
      `
      numero += 1;
      primera = "";
    });

    return cadena;
  }
});