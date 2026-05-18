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


window.addEventListener("scroll", ()=>{
 const navScroll = document.querySelector(".menu-nav");

 if(window.scrollY > 50){
  navScroll.style.top = "5px";
  navScroll.style.opacity = .9;

 }else{
  navScroll.style.top = "30px";
 }
})


// Tab - DICAS

const tabs = document.querySelectorAll(".dica-item div");
const contents = document.querySelectorAll(".conteudo-dicas-container");
const contentsText = document.querySelectorAll(".conteudo-text");

tabs.forEach((tab)=>{
  tab.addEventListener("click", ()=>{
    const target = tab.getAttribute("data-tab");

    tabs.forEach((item) =>{
      item.classList.remove("active");
    });

    contents.forEach((content)=>{
      content.classList.remove("active");
    });

    tab.classList.add("active");
    document.getElementById(target).classList.add("active");
  });
});

