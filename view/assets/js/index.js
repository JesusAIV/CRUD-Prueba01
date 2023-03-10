(function () {
    $(document).ready(function () {
        $('a.editar').click(function ( event ) {
            event.preventDefault();

            var id = $(this).parents("tr").find("td").eq(0).html();
            var producto = $(this).parents("tr").find("td").eq(1).html();
            var price = $(this).parents("tr").find("td").eq(2).html();
            var Imagen = $(this).parents("tr").find("td").eq(3).find("img").attr("src");

            $('#id-produc').val(id);
            $('#name').val(producto);
            $('#price').val(price);
            $('#uppimagensrc').attr("src", Imagen)
            $('#btn-guardar').val("Guardar")
            $('#btn-guardar').attr("name", "update-produc")
        });

        $('#new-produc').click(function () {
            event.preventDefault();
            $('#id').val("");
            $('#name').val("");
            $('#price').val("");
            $('#uppimagensrc').attr("src", "http://localhost:8085/CRUD-Prueba01/view/assets/img/noimage.jpg")
            $('#btn-guardar').val("Guardar")
            $('#btn-guardar').attr("name", "save-produc")
        });

        $("#imagen-prod").change(function () {
            var img = this.files[0];
            var imagen = new FileReader;
            console.log("imagen ", imagen);
            imagen.readAsDataURL(img);
            $(imagen).on("load", function (event) {
                var rutaImagen = event.target.result;
                $("#uppimagensrc").attr("src", rutaImagen);
            })
        })

        $('#delete').click(function ( event ) {
            event.preventDefault();
        });
    });
})()