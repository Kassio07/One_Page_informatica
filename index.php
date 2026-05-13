<?php
require_once("./back-end/config/url.php");

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <!-- Google Fonts -->
 <link rel="preconnect" href="https://fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
 <!-- CSS do projeto -->
 <link rel="stylesheet" href="./front-end/assets/css/main.css">
 <!-- JS -->
 <script src="./front-end/assets/js/main.js" defer></script>
 <title>K7 Informática</title>
</head>

<body>
 <!--  HEADER -->
 <?php require_once("./front-end/assets/template/header.php"); ?>


 <!-- MAIN -->
 <main>
  <!-- hero -->
  <section class="hero" id="hero">
   <div class="container">
    <div class="hero-content">
     <div class="hero-col-content">
      <div class="destaque-hero">
       <div class="item">Atendimento em domicílio</div>
       <div class="item">Orçamento grátis </div>
       <div class="item">Suporte remoto</div>
      </div>
      <div class="text-hero">
       <ul>
        <li><span style="color: var(--accent-color);">></span> Formatação</li>
        <li><span style="color: var(--accent-color);">></span> Instalação de sistemas</li>
        <li><span style="color: var(--accent-color);">></span> Upgrade</li>
        <li><span style="color: var(--accent-color);">></span> Limpeza interna</li>
        <li><span style="color: var(--accent-color);">></span> Remoção de vírus e malwares</li>
       </ul>
       <p class="small" style="color: #666;">Cuidamos do seu notebook ou PC do diagnóstico ao reparo, deixando seu equipamento mais rápido, seguro e funcionando como novo.</p>
      </div>
      <div class="action-hero">
       <a href="#"><img src="<?= $BASE_URL ?>/front-end/assets/img/icons/Phone.svg" alt="">Faça um Orçamento</a>
      </div>
     </div>
    </div>
   </div>
  </section>


  <!-- Slide - faixa -->
  <section class="slide-faixa">
   <div class="slide-container">
    <div class="slide-content">
     <div class="slide-item"><img src="<?= $BASE_URL ?>front-end/assets/img/icons/Windows 8-1.svg" alt=""> Windows 11</div>
     <div class="slide-item"><img src="<?= $BASE_URL ?>front-end/assets/img/icons/Apple Inc.svg" alt=""> Apple</div>
     <div class="slide-item"><img src="<?= $BASE_URL ?>front-end/assets/img/icons/Windows 8-1.svg" alt=""> Windows 10</div>
     <div class="slide-item"><img src="<?= $BASE_URL ?>front-end/assets/img/icons/Linux Server.svg" alt=""> Linux</div>
     <div class="slide-item"><img src="<?= $BASE_URL ?>front-end/assets/img/icons/Windows 8-1.svg" alt=""> Windows 8</div>
     <div class="slide-item"><img src="<?= $BASE_URL ?>front-end/assets/img/icons/Workstation.svg" alt=""> PC Gamer</div>
     <div class="slide-item"><img src="<?= $BASE_URL ?>front-end/assets/img/icons/Windows 8-1.svg" alt=""> Windows 7</div>
     <div class="slide-item"><img src="<?= $BASE_URL ?>front-end/assets/img/icons/Laptop Coding.svg" alt=""> Notebook</div>

     <!-- Duplicação de item -->

     <div class="slide-item"><img src="<?= $BASE_URL ?>front-end/assets/img/icons/Windows 8-1.svg" alt=""> Windows 11</div>
     <div class="slide-item"><img src="<?= $BASE_URL ?>front-end/assets/img/icons/Apple Inc.svg" alt=""> Apple</div>
     <div class="slide-item"><img src="<?= $BASE_URL ?>front-end/assets/img/icons/Windows 8-1.svg" alt=""> Windows 10</div>
     <div class="slide-item"><img src="<?= $BASE_URL ?>front-end/assets/img/icons/Linux Server.svg" alt=""> Linux</div>
     <div class="slide-item"><img src="<?= $BASE_URL ?>front-end/assets/img/icons/Windows 8-1.svg" alt=""> Windows 8</div>
     <div class="slide-item"><img src="<?= $BASE_URL ?>front-end/assets/img/icons/Workstation.svg" alt=""> PC Gamer</div>
     <div class="slide-item"><img src="<?= $BASE_URL ?>front-end/assets/img/icons/Windows 8-1.svg" alt=""> Windows 7</div>
     <div class="slide-item"><img src="<?= $BASE_URL ?>front-end/assets/img/icons/Laptop Coding.svg" alt=""> Notebook</div>

    </div>
   </div>
  </section>

  <!-- Informação -->
  <section class="section">
   <div class="container">
    <div class="content">
     <div class="title">
      <h1>Seu <span style="color: var(--surface-color);">Notebook</span> ou <span style="color: var(--surface-color);">PC</span> funcionando <br> do jeito certo</h1>
      <p>Se você precisa de um desses serviços, entre em contato agora mesmo.</p>
     </div>
    </div>
   </div>
  </section>
 </main>




 <!-- FOOTER -->
 <?php require_once("./front-end/assets/template/footer.php"); ?>