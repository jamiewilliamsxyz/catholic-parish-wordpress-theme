/* Hero */

document.addEventListener("DOMContentLoaded", () => {
  const hero = document.querySelector(".parish-hero");
  hero.classList.add("parish-hero-has-loaded");
});

/* Cards */

const cards = document.querySelectorAll(".parish-animate-card");

const cardsObserver = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add("parish-card-in-view");
    } else {
      entry.target.classList.remove("parish-card-in-view");
    }
  });
}, {});

cards.forEach((card) => {
  cardsObserver.observe(card);
});
