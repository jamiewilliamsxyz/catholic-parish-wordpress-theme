const menuContainer = document.getElementById("parishNavbarMenuContainer");
const backdrop = document.getElementById("parishMenuBackdrop");
const content = document.getElementById("parishContentContainer");
const toggle = document.getElementById("parishMenuToggle");

toggle.addEventListener("click", () => {
  const isOpen = menuContainer.classList.toggle("menu-open");
  backdrop.classList.toggle("menu-open", isOpen);
  toggle.classList.toggle("menu-open", isOpen);
  backdrop.hidden = !isOpen;

  content.toggleAttribute("inert", isOpen);
  toggle.setAttribute("aria-expanded", isOpen);
});
