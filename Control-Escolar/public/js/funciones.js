$("#habilitar").click(function () {
    swal({
            title: "¿Estás seguro?",
            text: "Una vez deshabilitado, el usuario no podrá acceder al sistema",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                swal("¡El usuario a sido deshabilitado de manera correcta!", {
                    icon: "success",
                });
                $(this).toggleClass("red green");
                document.getElementById("habilitar").innerHTML = "DESHABILITADO";
            } else {
                swal("¡El usuario se mantendrá activo!");
            }
        });
});