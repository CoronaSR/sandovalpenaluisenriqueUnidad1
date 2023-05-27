
function mensajeError(titulo, texto) {
  Swal.fire({
    title: titulo,
    text: texto,
    icon: 'error'
  });
}


function mensajeExito(title, vista) {
  Swal.fire({
    title: title,
    icon: 'success',
    showCloseButton: false,
    showCancelButton: false,
    showConfirmButton: false,
    focusConfirm: false,
    allowOutsideClick: false
  })

  setTimeout(function() {
    window.location.href = vista;
  }, 4000);
}


function campoInvalido(alerta, campo) {
  Swal.fire({
    title: alerta,
    text: campo,
    icon: 'warning'
  });
}