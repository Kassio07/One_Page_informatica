"use strict";

// Menu nav - Mobil
const open = document.querySelector(".open-menu");
const close = document.querySelector(".close-menu");
const navMenu = document.querySelector(".menu-nav");

open.addEventListener("click", () => {
  navMenu.classList.add("active");
  open.classList.add("active");
  close.classList.add("active");
});

close.addEventListener("click", () => {
  navMenu.classList.remove("active");
  close.classList.remove("active");
  open.classList.remove("active");
});
