const menuContainer = document.getElementById("parishNavbarMenuContainer");
const backdrop = document.getElementById("parishMenuBackdrop");
const content = document.getElementById("parishContentContainer");
const toggle = document.getElementById("parishMenuToggle");

const openMenu = () => {
  menuContainer.classList.add("parish-menu-open");
  backdrop.classList.add("parish-menu-open");
  backdrop.classList.add("parish-menu-open");
  backdrop.hidden = false;
  content.setAttribute("inert", "");
  toggle.setAttribute("aria-expanded", "true");
};

const closeMenu = () => {
  menuContainer.classList.remove("parish-menu-open");
  backdrop.classList.remove("parish-menu-open");
  backdrop.classList.remove("parish-menu-open");
  backdrop.hidden = true;
  content.removeAttribute("inert");
  toggle.setAttribute("aria-expanded", "false");
};

// Toggle on icon click
toggle.addEventListener("click", () => {
  menuContainer.classList.contains("parish-menu-open")
    ? closeMenu()
    : openMenu();
});

// Close on outside click
backdrop.addEventListener("click", closeMenu);
