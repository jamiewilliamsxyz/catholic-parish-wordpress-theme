const menuContainer = document.getElementById("parishNavbarMenuContainer");
const toggle = document.getElementById("parishMenuToggle");
const backdrop = document.getElementById("parishMenuBackdrop");
const content = document.getElementById("parishContentContainer");

toggle.addEventListener("click", () => {
  const isOpen = menuContainer.classList.toggle("menu-open");
  backdrop.classList.toggle("backdrop-active", isOpen);
  backdrop.hidden = !isOpen;

  content.toggleAttribute("inert", isOpen);
  toggle.setAttribute("aria-expanded", isOpen);
});
