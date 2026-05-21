"use strict";
 AOS.init();
 
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

window.addEventListener("scroll", () => {
  const navScroll = document.querySelector(".menu-nav");

  if (window.scrollY > 50) {
    navScroll.style.top = "5px";
    navScroll.style.opacity = 0.9;
  } else {
    navScroll.style.top = "30px";
  }
});

// Tab - DICAS

const tabs = document.querySelectorAll(".dica-item div");
const contents = document.querySelectorAll(".conteudo-dicas-container");
const contentsText = document.querySelectorAll(".conteudo-text");

tabs.forEach((tab) => {
  tab.addEventListener("click", () => {
    const target = tab.getAttribute("data-tab");

    tabs.forEach((item) => {
      item.classList.remove("active");
    });

    contents.forEach((content) => {
      content.classList.remove("active");
    });

    tab.classList.add("active");
    document.getElementById(target).classList.add("active");
  });
});

// PERGUNTAS DROPDOWN
const arrowDrop = document.querySelectorAll(".drop-down .arrow");
const dropResposta = document.querySelectorAll(".drop-resposta");

arrowDrop.forEach((item) => {
  item.addEventListener("click", () => {
    const target = item.getAttribute("data-item");
    const resposta = document.getElementById(target);

    const isActive = resposta.classList.contains("activeDrop");

    arrowDrop.forEach((i) => {
      i.classList.remove("activeDrop");
    });

    dropResposta.forEach((drop) => {
      drop.classList.remove("activeDrop");
    });

    if (!isActive) {
      item.classList.add("activeDrop");
      resposta.classList.add("activeDrop");
    }
  });
});
