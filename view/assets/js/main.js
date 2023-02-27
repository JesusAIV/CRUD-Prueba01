(function () {
    $(document).ready(function () {
        $('a.editar').click(function () {
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
    });
})()