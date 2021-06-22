$('.borrarFoto').click(function() {
    $('#foto').val("");
    $(".borrarFoto").addClass('notBlock');
    $("#img").remove();
    $(document).ready(function() {
        $(".texto").css("display", "flex");
        $(".texto").text('CARGAR FOTO');
    });
});