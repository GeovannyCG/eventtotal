//Declaracion de los DOM's
let showPass = document.getElementById("flexSwitchCheckDefault"); //DOM del checkBox para mostrar contraseña.
let inputPass = document.getElementById("exampleInputPassword1"); //DOM para el input de la contraseña.

//Funcion para mostrar contraseña en la interfaz
function mostrarContrasena() {

    showPass.addEventListener("change", (e) => {//Escuchar evento de cuando se active el checkBox
        if(showPass.checked) { //Si el estado del checkBox es activo.
            inputPass.type = "text"; //Cambiara el tipo del input a un "text" para que muestre los caracteres.
        } else {
            inputPass.type = "password"; //En cambio si esto no es asi, se colocara el type del input en "Password" para ocultar los caracteres.
        }
    });
}

mostrarContrasena(); //Mandar a llamar la funcion para si ejecucion.
