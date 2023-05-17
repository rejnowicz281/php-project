const nowaKsiazkaButton = document.getElementById("nowa-ksiazka-button");
const modal = document.querySelector(".modal");
const zamknijModalButton = document.getElementById(
    "zamknij-modal-button"
);

const overlay = document.querySelector(".overlay");

function openModal() {
    modal.classList.remove("hidden");
    overlay.classList.remove("hidden");
}

function closeModal() {
    modal.classList.add("hidden");
    overlay.classList.add("hidden");
}

nowaKsiazkaButton.addEventListener("click", openModal);

overlay.addEventListener("click", closeModal)

zamknijModalButton.addEventListener("click", closeModal);