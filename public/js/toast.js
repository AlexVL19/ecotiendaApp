
var toast = Swal.mixin({
    toast: true,
    icon: 'success',
    animation: false,
    position: 'top-right',
    showConfirmButton: false,
    timer: 2000,
});

document.getElementById('boton').addEventListener('click', function(){
    event.preventDefault();
    toast.fire({
        animation: true,
        title: 'Producto añadido al carrito'
    });
});
