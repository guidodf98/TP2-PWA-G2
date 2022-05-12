var colUsuarios = getJsonArray("../data/usuarios.json");
var pagAnterior = $("#pag-anterior");
var pagSiguiente = $("#pag-siguiente");

agregarUsuarios(0, 5);
agregarBotones(colUsuarios);


pagAnterior.click(function (e) {
  let valor = parseInt(this.value);
  actualizarTabla(valor - 5, valor)
});

pagSiguiente.click(function (e) {
  let valor = parseInt(this.value);
  actualizarTabla(valor, valor + 5)
});


function actualizarTabla(desde, hasta) {
  pagAnterior.val(desde);
  pagSiguiente.val(hasta);
  
  agregarUsuarios(desde, hasta);
  habilitarBotones();
  botonActivo(hasta);
}

function botonActivo(hasta) {
  let botones = $(".boton-paginacion");
  botones = Object.values(botones);

  botones.map(boton => {
    if (boton.value == hasta) {
      $(boton).addClass("active");
    } else {
      $(boton).removeClass("active");
    }
  });
}

function habilitarBotones() {
  if (pagAnterior.val() < 5) {
    $(pagAnterior).addClass("disabled");
  } else {
    $(pagAnterior).removeClass("disabled");

  }

  if (pagSiguiente.val() > colUsuarios.length) {
    $(pagSiguiente).addClass("disabled");
  } else {
    $(pagSiguiente).removeClass("disabled");
  }
}

function getJsonArray(url) {
  var array;
  $.ajax({
    url: url,
    async: false,
    dataType: 'json',
    success: function (data) {
      array = Object.values(data)[0];
    }
  });
  return array;
}

// AGREGAR CADENAS
function agregarBotones(usuarios) {
  let cantUsuarios = usuarios.length;
  let i = 0;
  do {
    $("#botones-paginacion").append(cadenaBotonesPaginacion(i + 5));
    i += 5;
  } while (i < cantUsuarios);
}

function agregarUsuarios(desde, hasta) {
  $("#paginacion-contenido").html(cadenaUsuarios(desde, hasta));
}


// CADENAS
function cadenaUsuarios(desde, hasta) {
  cadena = "";
  i = desde;

  while (i < hasta) {
    if (typeof colUsuarios[i] !== 'undefined') {
      cadena += cadenaUsuario(colUsuarios[i]);
    }
    i++;
  }

  return cadena;
}

function cadenaUsuario(usuario) {
  return `
      <tr>
        <th scope="row">${usuario.id}</th>
        <td>${usuario.username}</td>
        <td>${usuario.fullName}</td>
        <td>${usuario.email}</td>
      </tr>
    `
}

function cadenaBotonesPaginacion(val) {
  return `
      <button class="btn btn-outline-primary boton-paginacion my-1" value="${val}" onclick="actualizarTabla(${val - 5},${val})">${val / 5}</button>
    `
}
