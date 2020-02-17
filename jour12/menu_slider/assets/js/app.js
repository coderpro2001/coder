// référence éléments du DOM
const menu = document.querySelector("#menu");
const sliderMenu = document.querySelector(".slide");

// écouteur sur le click
menu.addEventListener("click", function() {
  sliderMenu.classList.toggle("slide");
});
