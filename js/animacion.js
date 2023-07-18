///////////////////////////////menu hamburguesa///////////////////////////////////////////////
const contenedorBoton = document.querySelector(".contenedor-boton");
const contenedorMenu = document.querySelector(".contenedor-menu");

contenedorBoton.addEventListener("click", () => {
  contenedorMenu.classList.toggle("contenedor-menu_visible");
  if (contenedorMenu.classList.contains("contenedor-menu_visible")) {
    contenedorBoton.setAttribute("aria-label", "Cerrar menú");
  } else {
    contenedorBoton.setAttribute("aria-label", "Abrir menú");
  }
});

const contenedormenuLinks = document.querySelectorAll(
  '.contenedor-menu a[href^="#"]'
);

contenedormenuLinks.forEach((contenedormenuLink) => {
  contenedormenuLink.addEventListener("click", function () {
    contenedorMenu.classList.remove("contenedor-menu_visible");
  });
});
///////////////////////////////////////////////////////
