const btnToggle = document.getElementById("btnMenu"); //DOM del btn de menu en version "Desktop"
const sidebar = document.querySelector(".sidebar"); //DOM del sidebar en version "Desktop"
const wrapper = document.querySelector('.wrapper'); //DOm del Wrapper principal en version "Desktop"

btnToggle.addEventListener("click", () => {
  //Implementacion de evento al boton de menu en version "Desktop"

  sidebar.classList.toggle("active"); //Implementacion de la clase de Toggle al sidebar
  if (sidebar.classList.contains("active")) {
    //Se compara si el sidebar cuenta con la clase #active
    wrapper.setAttribute("style", "left:200px; width: calc(100% - 200px)"); //Si es asi aplica estilos de desplazamiento del contenido del Wrapper principal
    return;
  }
  wrapper.setAttribute("style", "left: 80px"); //En todo clase se le agrega el atibuto de dezplazar en contenido del Wrapper principal
});
