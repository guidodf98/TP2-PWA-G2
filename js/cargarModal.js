var myModal = new bootstrap.Modal(document.getElementById('modal-pelicula'), {
  keyboard: false
})

function cargarDatosYMostrar(numPelicula) {
  cargarDatos(numPelicula)
  myModal.show();
}

function cargarDatos(numPelicula) {
  $.ajax({
    type: "POST",
    url: "../data/movieData.json",
    dataType: "json",
    success: function (response) {
      $("#modal-pelicula").html(cadenaInfoPelicula(response.peliculas[numPelicula]));
    }
  });

}


// CADENAS
function cadenaInfoPelicula(pelicula) {
  return `
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title">${pelicula.titulo}</h3>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <table class="table">
              <tbody>
                <tr>
                  <th scope="row">Genero</th>
                  ${cadenaElemTabla(pelicula.genero)}
                </tr>
                <tr>
                  <th scope="row">Dirección</th>
                  ${cadenaElemTabla(pelicula.direccion)}
                </tr>
                <tr>
                  <th scope="row">Guión</th>
                  ${cadenaElemTabla(pelicula.guion)}
                </tr>
                <tr>
                  <th scope="row">Reparto principal</th>
                  ${cadenaElemTabla(pelicula.reparto)}
                </tr>
                <tr>
                  <th scope="row">Año</th>
                  <td colspan="3">${pelicula.anio}</td>
                </tr>
                <tr>
                  <th scope="row">Duración</th>
                  <td colspan="3">${pelicula.duracion}</td>
                </tr>
                <tr>
                  <th scope="row">Puntuación</th>
                  <td colspan="3">${pelicula.puntuacion}</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="modal-footer">
            <p style="font-size: 1.1rem">${pelicula.sinopsis}</p>
          </div>
        </div>
      </div>
      `
}

function cadenaElemTabla(colElementos) {
  cadena = "";
  i = 0;

  for (let i = 0; i < colElementos.length; i++) {
    const elemento = colElementos[i];
    if (i == colElementos.length - 1) {
      colspan = 4 - (i * 2);
      cadena += `<td colspan='${colspan}'>${elemento}</td>`;
    } else {
      cadena += `<td>${elemento}</td>`;
    }
  }

  return cadena;
}
