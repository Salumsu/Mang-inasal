const notAuths = document.querySelectorAll(".not-auth");
const loginPopup = document.querySelector("#login-popup");

notAuths.forEach((notAuth) => {
  notAuth.addEventListener("click", () => {
    loginPopup.classList.toggle("active");
  });
});
