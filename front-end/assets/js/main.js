"use strict";
if (typeof AOS !== "undefined") {
  AOS.init();
}

// Faixa topo
window.addEventListener("scroll", () => {
  if (window.scrollY > 50) {
    document.querySelector(".menu-nav").style.top = "0px";
  } else {
    document.querySelector(".menu-nav").style.top = "30px";
  }
});

//  Menu nav - Mobil
const open = document.querySelector(".open-menu");
const close = document.querySelector(".close-menu");
const navMenu = document.querySelector(".menu-nav");
const linksMenu = document.querySelectorAll(".menu-nav ul li a");

if (open && close && navMenu) {
  open.addEventListener("click", () => {
    navMenu.classList.add("active");
    open.classList.add("active");
    close.classList.add("active");
    document.querySelector("main").style.opacity = ".1";
  });

  close.addEventListener("click", () => {
    navMenu.classList.remove("active");
    close.classList.remove("active");
    open.classList.remove("active");
    document.querySelector("main").style.opacity = "1";
  });

  linksMenu.forEach((item) => {
    item.addEventListener("click", () => {
      navMenu.classList.remove("active");
      close.classList.remove("active");
      open.classList.remove("active");
      document.querySelector("main").style.opacity = "1";
    });
  });
}

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

// ENVIO DE FORM
const formNewslatter = document.querySelector("#formNewslatter");
const formFaleConosco = document.querySelector("#formFaleConosco");
const msgAlert = document.querySelector(".msg-alert");

function envioForm(form, msgAlert, paginaOrigem) {
  if (!form) return;

  form.addEventListener("submit", async (e) => {
    e.preventDefault();

    try {
      const formData = new FormData(form);

      const response = await fetch(paginaOrigem, {
        method: "POST",
        body: formData,
      });

      const result = await response.text();

      msgAlert.innerHTML = result;

      form.reset();
    } catch (error) {
      msgAlert.innerHTML = "Erro ao enviar formulário.";
    }
  });
}

envioForm(formNewslatter, msgAlert, "enviar-email.php");
envioForm(formFaleConosco, msgAlert, "enviar-email.php");
