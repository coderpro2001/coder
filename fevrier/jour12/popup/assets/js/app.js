// on récupère les références des éléments du DOM
const modal = document.querySelector("#modal-container");
const closeBtn = document.querySelector("#close-button");

// fonction pour ouvrir la modal
function displayPopup() {
  //   document.body.removeEventListener("mouseout", displayPopup);
  modal.style.display = "block";
}

// fonction pour fermer la modal
function hidePopup() {
  modal.style.display = "none";
}

// on ajoute un écouteur pour l'événement mouseout sur la fenêtre du navigateur qui ne sera exécuté qu'une fois
window.addEventListener("mouseout", displayPopup, { once: true });

// on ajoute un écouteur sur l'événement click sur le bouton de fermeture de la modal
closeBtn.addEventListener("click", hidePopup);
