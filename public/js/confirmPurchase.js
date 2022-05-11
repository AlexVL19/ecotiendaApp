var confirmar = document.getElementById('confirm')

confirmar.addEventListener('click', function() {
    Swal.fire({
        icon: 'success',
        title: '¡Compra completada!',
      })
});