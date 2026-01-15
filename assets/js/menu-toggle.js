const parishMenu = document.getElementById("parishNavbarMenu");
const parishMenuToggle = document.getElementById("parishMenuToggle");

parishMenuToggle.addEventListener("click", () => {
  const isOpen = parishMenu.classList.toggle("menu-open");

  parishMenu.style.display = isOpen ? "block" : "none";
  parishMenu.setAttribute("aria-expanded", isOpen);
});
