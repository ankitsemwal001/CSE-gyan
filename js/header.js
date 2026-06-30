const menuBtn = document.getElementById("menu-btn");
const mobileMenu = document.getElementById("mobile-menu");
const menuIcon = document.getElementById("menu-icon");
const closeIcon = document.getElementById("close-icon");

if (menuBtn && mobileMenu && menuIcon && closeIcon) {
  menuBtn.addEventListener("click", () => {
    mobileMenu.classList.toggle("translate-x-full");

    menuIcon.classList.toggle("hidden");
    closeIcon.classList.toggle("hidden");

    const isOpen = !mobileMenu.classList.contains("translate-x-full");
    menuBtn.setAttribute("aria-expanded", isOpen);
  });
}

const notesBtn = document.getElementById("notes-btn");
const notesDropdown = document.getElementById("notes-dropdown");
const notesArrow = document.getElementById("notes-arrow");

if (notesBtn && notesDropdown && notesArrow) {
  notesBtn.addEventListener("click", () => {
    notesDropdown.classList.toggle("hidden");
    notesArrow.classList.toggle("rotate-180");

    const isOpen = !notesDropdown.classList.contains("hidden");
    notesBtn.setAttribute("aria-expanded", isOpen);
  });
}

const exploreBtn = document.getElementById("explore-btn");
const exploreDropdown = document.getElementById("explore-dropdown");
const exploreArrow = document.getElementById("explore-arrow");

if (exploreBtn && exploreDropdown && exploreArrow) {
  exploreBtn.addEventListener("click", () => {
    exploreDropdown.classList.toggle("hidden");
    exploreArrow.classList.toggle("rotate-180");

    const isOpen = !exploreDropdown.classList.contains("hidden");
    exploreBtn.setAttribute("aria-expanded", isOpen);
  });
}
