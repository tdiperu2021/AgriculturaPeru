$(function() {

    /* $("#status").hide(); */

    var window_focus;

    $(window).focus(function() {
        window_focus = true;
    }).blur(function() {
        window_focus = false;
    });

    $("#foto").bind("click", function() {
        /* $(".gif").show(); */
        /* $("#status").show(); */
        var loopFocus = setInterval(function() {
            if (window_focus) {
                clearInterval(loopFocus);
                /* $(".gif").hide(); */
                /* $("#status").hide(); */
                if ($("#foto").val() === '') {
                    alert('No ha seleccionado un archivo');
                } else if ($("#foto").val() != '') {

                    var libreta = $("#foto")[0].files[0].size;

                    if (libreta > 0) {
                        alert('El archivo ha cargado correctamente');
                        /* $(document).ready(function() {
                            $(".foto").css("display", "none");
                            $(".fotoPerfil").css("display", "flex");
                        }); */
                        $(document).ready(function() {
                            $(".texto").css("display", "flex");
                            $(".texto").text('FOTO CARGADA');
                        });
                    }
                }
            }

        }, 500);
    });
});