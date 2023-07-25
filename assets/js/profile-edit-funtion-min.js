//Se le implementa un Evento en el boton de editar el formulario para hacer cambios en el HTML del formulario del perfil
document.getElementById('btnEditar').addEventListener("click", () => { 
    
    //Se le retira la propiedad que bloquea la edicion al formulario del perfil para poder editarlo
    document.getElementById('deshabilitar').removeAttribute('disabled');

    //ademas de que se se hace el cambio de boton par poder accionar el formulario una vez que el usuario ya haya terminado de editar sus datos
    document.getElementById('editar-boton').innerHTML = '<input type="submit" value="Confirmar" id="enviar">';
    
});
