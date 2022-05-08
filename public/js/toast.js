var boton = document.getElementById('addProduct');

var toast = Swal.mixin({
    toast: true,
    icon: 'success',
    animation: false,
    position: 'top-right',
    showConfirmButton: false,
    timer: 2000,
});

function multiplicar(){
    var n1 = document.getElementById("quantity").value;
    var n2 = document.getElementById("cost").value;
    var result = document.getElementById("final_cost");
    var n3 = n1 * n2;
    result.value = n3;
}

Array.from(document.querySelectorAll("[name='quantity']")).forEach(i => {
    boton.addEventListener('click', function(){
        multiplicar();
    });
});
