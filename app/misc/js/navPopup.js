let popUp = document.querySelector(".nav-pop-up");
let openButton = document.querySelector(".menu-bar");
let closeButton = document.querySelector(".close");

openButton.addEventListener("click", () => {
  popUp.classList.add("active");
});

closeButton.addEventListener("click", () => {
  popUp.classList.remove("active");
});
