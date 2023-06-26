
const controls = document.querySelectorAll(".control");
let currentFilme = 0;
const filmes = document.querySelectorAll(".filme");
const maxFilme = filmes.length;

controls.forEach((control) => {
  control.addEventListener("click", (e) => {
    isLeft = e.target.classList.contains("arrow-left");

    if (isLeft) {
      currentFilme -= 4;
    } else {
      currentFilme += 4;
    }

    if (currentFilme >= maxFilme) {
      currentFilme = 0;
    }

    if (currentFilme < 0) {
      currentFilme = maxFilme - 1;
    }

    filmes.forEach((item) => item.classList.remove("current-item"));

    filmes[currentFilme].scrollIntoView({
      behavior: "smooth",
      inline: "center"
    });

    filmes[currentFilme].classList.add("current-item");
  });
});
