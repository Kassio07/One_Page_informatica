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
  <div class="hiro" id="hiro">
   <div class="container">
    <div class="hiro-content">
     <div class="hiro-col-content">
      <div class="destaque-hiro">
       <div class="item">Atendimento em domicílio</div>
       <div class="item">Orçamento grátis </div>
       <div class="item">Suporte remoto</div>
      </div>
      <div class="text-hiro">
       <ul>
        <li>> Formatação</li>
        <li>> Instalação de sistemas</li>
        <li>> Upgrade</li>
        <li>> Limpeza interna</li>
        <li>> Remoção de vírus e malwares</li>
       </ul>
       <p class="small" style="color: #666;">Cuidamos do seu notebook ou PC do diagnóstico ao reparo, deixando seu equipamento mais rhápido, seguro e funcionando como novo.</p>
      </div>
      <div class="action-hiro">
       <a href="#">Faça um Orçamento</a>
      </div>
     </div>
    </div>
   </div>
  </div>
 </main>




 <!-- FOOTER -->
 <?php require_once("./front-end/assets/template/footer.php"); ?>