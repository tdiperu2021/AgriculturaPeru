var botonb = document.getElementById('eyeb');
var inputb = document.getElementById('passwordb');
botonb.addEventListener('click', mostrarContraseña);
function mostrarContraseña(){
    if(inputb.type == "password"){
        inputb.type = "text";
        botonb.className = "icon-eye-off";
    }else{
        inputb.type = "password";
        botonb.className = "icon-eye";
    }
}