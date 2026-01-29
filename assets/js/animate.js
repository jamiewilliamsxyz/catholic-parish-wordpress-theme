/* Hero */

document.addEventListener("DOMContentLoaded", () => {
  const hero = document.querySelector(".parish-hero");
  hero.classList.add("parish-hero-has-loaded");
});

/* Cards */

const cards = document.querySelectorAll(".parish-animate-card");
const archiveCards = document.querySelectorAll(".parish-animate-archive-card");

const cardsObserver = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add("parish-card-in-view");
    } else {
      entry.target.classList.remove("parish-card-in-view");
    }
  });
}, {});

const archiveCardsObserver = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      console.log(entry.target);
      entry.target.classList.add("parish-card-in-view");
    } else {
      entry.target.classList.remove("parish-card-in-view");
    }
  });
}, {});

cards.forEach((card) => {
  cardsObserver.observe(card);
});

archiveCards.forEach((archiveCard) => {
  archiveCardsObserver.observe(archiveCard);
});
