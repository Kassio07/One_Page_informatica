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
  <!-- Hiro -->
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
  <section class="section-info">
   <div class="container">
    <div class="content">
     <div class="title">
      <h1>Seu <span style="color: var(--surface-color);">Notebook</span> ou <span style="color: var(--surface-color);">PC</span> funcionando <br> do jeito certo</h1>
      <p>Se você precisa de um desses serviços, entre em contato agora mesmo.</p>
     </div>
     <div class="info-container">
      <div class="info-content">
       <div>
        <div class="info-play">Vídeo</div>
        <div class="info-text">
         <span class="info-destaque"><img src="<?= $BASE_URL ?>front-end/assets/img/icons/Laptop Coding.svg" alt="">Notebook - <span class="accent-color">Assista o Vídeo</span></span>
         <h2 class="h4">Montagem e Upgrade de <span class="surface-color">Notebook</span></h2>
         <p>Instalações de peças, otimização e configuração para deixar seu notebook mais rápido, eficiente e pronto para qualquer tarefa.</p>
         <a href="" class="btn-contato-info"><img src="<?= $BASE_URL ?>front-end/assets/img/icons/phone-etapas.png" alt="">Entre em contato</a>
        </div>
       </div>
      </div>


      <div class="info-content">
       <div class="reverse-col">
        <div class="info-play">Vídeo</div>
        <div class="info-text">
         <span class="info-destaque"><img src="<?= $BASE_URL ?>front-end/assets/img/icons/pc-gamer.svg" alt="">PC Gamer - <span class="accent-color">Assista o Vídeo</span></span>
         <h2 class="h4">Montagem e Upgrade de <span class="surface-color">PC Gamer</span></h2>
         <p>Instalações de peças, otimização e configuração para deixar seu notebook mais rápido, eficiente e pronto para qualquer tarefa.</p>
         <a href="" class="btn-contato-info"><img src="<?= $BASE_URL ?>front-end/assets/img/icons/phone-etapas.png" alt="">Entre em contato</a>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </section>

  <!-- DIVISOR DE PÁGINA -->
  <div class="divisor-pag">
   <img src="<?= $BASE_URL ?>front-end/assets/img/divisor/divisor-to.png" alt="">
  </div>
  <!--/DIVIDOR DE PÁGINA -->

  <!-- SERVIÇOS -->
  <section class="servico">
   <div class="container">
    <div class="content">
     <div class="title">
      <h1>Conheça nossos serviços</h1>
      <p>Serviços rápidos para pessoa física</p>
     </div>
     <div class="container-servico">
      <div class="serv-pc">
       <h3>Montagem de <span class="surface-color">PC Gamer</span></h3>
       <p>Seu PC Gamer montando com precisão e alta performance</p>
       <div class="service-img">
        <img src="<?= $BASE_URL ?>front-end/assets/img/pc-gamer-montagem.png" alt="">
       </div>
      </div>
      <div class="serv-notebook">
       <h3>Manutenção de <span class="accent-color">Notebook</span></h3>
       <p>Deixe seu Notebook mais rápido, seguro e funcionando como novo</p>
       <div class="service-img">
        <img src="<?= $BASE_URL ?>front-end/assets/img/manutencao-de-notebook.png" alt="">
       </div>
      </div>
      <div class="serv-suporte">
       <h3>Suporte <span class="surface-color">Remoto</span></h3>
       <p>Atendimento remoto ágil para resolver seu problema na hora
       </p>
       <div class="service-img">
        <img src="<?= $BASE_URL ?>front-end/assets/img/suporte-remoto.png" alt="">
       </div>
      </div>
     </div>
     <div class="service-itens-container">
      <div class="service-item">
       <img src="<?= $BASE_URL ?>front-end/assets/img/icons/Edit Pencil.svg" alt=""> Troca de pasta térmica
      </div>
      <div class="service-item">
       <img src="<?= $BASE_URL ?>front-end/assets/img/icons/iMac.svg" alt=""> Troca de Tela
      </div>
      <div class="service-item">
       <img src="<?= $BASE_URL ?>front-end/assets/img/icons/SSD.svg" alt=""> Instalação de SSD
      </div>
      <div class="service-item">
       <img src="<?= $BASE_URL ?>front-end/assets/img/icons/Micro SD.svg" alt=""> Instalação de memória
      </div>
      <div class="service-item">
       <img src="<?= $BASE_URL ?>front-end/assets/img/icons/Windows 8.svg" alt=""> Formatação
      </div>
      <div class="service-item">
       <img src="<?= $BASE_URL ?>front-end/assets/img/icons/backup.svg" alt="Icone de Backup"> Backup
      </div>
      <div class="service-item">
       <img src="<?= $BASE_URL ?>front-end/assets/img/icons/limpeza-notebook.svg" alt="Icone de Backup"> Limpeza
      </div>
     </div>
     <div class="service-text">
      <p><b>Oferecemos soluções completas para o seu notebook</b>, desde formatação, upgrades e troca de peças até manutenção preventiva e corretiva. Trabalhamos com agilidade, transparência e foco em desempenho, garantindo que seu equipamento funcione com máxima eficiência. Seja qual for o problema, nós temos a solução certa para você.</p>
     </div>
    </div>
   </div>
  </section>
  <!-- /SERVIÇOS -->
  <!-- DIVISOR DE PÁGINA -->
  <div class="divisor-pag">
   <img src="<?= $BASE_URL ?>front-end/assets/img/divisor/divisor-up.png" alt="">
  </div>
  <!--/DIVIDOR DE PÁGINA -->

  <!-- BENEFICIOS / VANTAGENS -->
  <section class="beneficios">
   <div class="container">
    <div class="content">
     <div class="title">
      <h1>Benefícios <b class="surface-color">/</b> Vantagens</h1>
      <p>Confira os benefícios e vantagens de contratar nossos serviços</p>
     </div>
     <div class="beneficios-container">
      <div class="beneficios-item">
       <span><img src="<?= $BASE_URL ?>front-end/assets/img/icons/suporte-remoto.svg" alt=""></span>
       <p>Atendimento rápido e personalizado</p>
      </div>
      <div class="beneficios-item">
       <span><img src="<?= $BASE_URL ?>front-end/assets/img/icons/garantia.svg" alt=""></span>
       <p>Produtos com procedência e garantia</p>
      </div>
      <div class="beneficios-item">
       <span><img src="<?= $BASE_URL ?>front-end/assets/img/icons/equipe-info.svg" alt=""></span>
       <p>Equipe com anos de experiência</p>
      </div>
      <div class="beneficios-item">
       <span><img src="<?= $BASE_URL ?>front-end/assets/img/icons/suporte-tecnico.svg" alt=""></span>
       <p>Suporte técnico completo e confiável</p>
      </div>
      <div class="beneficios-item">
       <span><img src="<?= $BASE_URL ?>front-end/assets/img/icons/equipamentos-informatica.svg" alt=""></span>
       <p>Variedade de equipamentos e acessórios</p>
      </div>
      <div class="beneficios-item">
       <span><img src="<?= $BASE_URL ?>front-end/assets/img/icons/empresa-suporte.svg" alt=""></span>
       <p>Solução para casa oyu empresa</p>
      </div>

     </div>

    </div>
   </div>
  </section>

  <!-- DIVISOR DE PÁGINA -->
  <div class="divisor-pag">
   <img src="<?= $BASE_URL ?>front-end/assets/img/divisor/divisor-to.png" alt="Divisor de página">
  </div>
  <!--/DIVIDOR DE PÁGINA -->

  <!-- Faixa 1 - detalhes -->
  <section class="faixa-detalhes">
   <div class="container">
    <div class="content">
     <div class="details-img">
      <img src="<?= $BASE_URL ?>front-end/assets/img/instalacao-ssd-notebook.svg" alt="Imagem de notebook junto com ssd">
     </div>
     <div class="details-text">
      <p>Notebook Lento? Notebook travando? Não acessa sistema?
      </p>
      <h3 class="accent-color">Faça um Upgrade com SSD</h3>
      <p>Colocar um SSD no seu notebook ou computador é uma das melhores melhorias que você pode fazer. Ele deixa o sistema muito mais rápido, reduz o tempo de inicialização e faz programas abrirem quase instantaneamente.</p>
      <div class="details-btn">
       <a href=""><img src="<?= $BASE_URL ?>front-end/assets/img/icons/Phone.svg" alt="">Faça um orçamento</a>
      </div>
     </div>
    </div>
   </div>
  </section>
  <!-- DIVISOR DE PÁGINA -->
  <div class="divisor-pag">
   <img src="<?= $BASE_URL ?>front-end/assets/img/divisor/divisor-up.png" alt="">
  </div>
  <!--/DIVIDOR DE PÁGINA -->

  <!-- PROCURA -->
  <section class="procura">
   <div class="container">
    <div class="content">
     <div class="title">
      <h1>Qual tipo de atendimento você está procurando?</h1>
     </div>
     <div class="container-procura">
      <div class="procura-item">
       <img src="<?= $BASE_URL ?>front-end/assets/img/icons/pc-conserto.svg" alt="">
       <a href=""><img src="<?= $BASE_URL ?>front-end/assets/img/icons/whatsApp-logo.svg" alt="">Atendimento <br> Computador</a>
      </div>
      <div class="procura-item">
       <img src="<?= $BASE_URL ?>front-end/assets/img/icons/Laptop.svg" alt="">
       <a href=""><img src="<?= $BASE_URL ?>front-end/assets/img/icons/whatsApp-logo.svg" alt="">Atendimento <br> Macbook</a>
      </div>
      <div class="procura-item">
       <img src="<?= $BASE_URL ?>front-end/assets/img/icons/Laptop-1.svg" alt="">
       <a href=""><img src="<?= $BASE_URL ?>front-end/assets/img/icons/whatsApp-logo.svg" alt="">Atendimento <br> Notebook</a>
      </div>
      <div class="procura-item">
       <img src="<?= $BASE_URL ?>front-end/assets/img/icons/imac-conserto.svg" alt="">
       <a href=""><img src="<?= $BASE_URL ?>front-end/assets/img/icons/whatsApp-logo.svg" alt="">Atendimento <br> Imac</a>
      </div>
      <div class="procura-item">
       <img src="<?= $BASE_URL ?>front-end/assets/img/icons/atendimento-informatica.svg" alt="">
       <a href=""><img src="<?= $BASE_URL ?>front-end/assets/img/icons/whatsApp-logo.svg" alt="">Atendimento <br> Personalizado</a>
      </div>
     </div>
    </div>
   </div>
  </section>

  <!-- DIVISOR DE PÁGINA -->
  <div class="divisor-pag">
   <img src="<?= $BASE_URL ?>front-end/assets/img/divisor/divisor-to.png" alt="Divisor de página">
  </div>
  <!--/DIVIDOR DE PÁGINA -->

  <!-- Faixa 2 - detalhes -->
  <section class="faixa-detalhes">
   <div class="container">
    <div class="content">
     <div class="details-img">
      <!-- <img src="<?= $BASE_URL ?>front-end/assets/img/instalacao-ssd-notebook.svg" alt="Imagem de notebook junto com ssd"> -->
      <h4>Etapas para <br> reparar <br> seu <span class="accent-color">Notebook</span></h4>
      <p>Veja como e fácil o processo</p>
     </div>
     <div class="details-text">
      <!-- <p>Notebook Lento? Notebook travando? Não acessa sistema?
      </p>
      <h3 class="accent-color">Faça um Upgrade com SSD</h3>
      <p>Colocar um SSD no seu notebook ou computador é uma das melhores melhorias que você pode fazer. Ele deixa o sistema muito mais rápido, reduz o tempo de inicialização e faz programas abrirem quase instantaneamente.</p>
      <div class="details-btn">
       <a href=""><img src="<?= $BASE_URL ?>front-end/assets/img/icons/Phone.svg" alt="">Faça um orçamento</a>
      </div> -->

      <div class="details-passo-passo">
       <div>
        <span>1</span>
        <div class="arrow"><img src="<?= $BASE_URL ?>front-end/assets/img/icons/arrow.svg" alt=""></div>
        <img src="<?= $BASE_URL ?>front-end/assets/img/icons/etapa1.svg" alt="">
        <p>Ligue para (11) 94921-4071</p>
        <p>Apresenta o defeito e o problema</p>
       </div>
       <div> <span>2</span>
        <div class="arrow"><img src="<?= $BASE_URL ?>front-end/assets/img/icons/arrow.svg" alt=""></div><img src="<?= $BASE_URL ?>front-end/assets/img/icons/notebook-iMac.svg" alt="">
        <p>Entregue seu Notebook</p>
        <p>Traga em mãos ou solicite a retirada</p>
       </div>
       <div> <span>3</span><img src="<?= $BASE_URL ?>front-end/assets/img/icons/entrega-notebook.svg" alt="">
        <p>Aguarde o Conserto</p>
        <p>Aprove o orçamento e aguarde conserto</p>
       </div>

      </div>
     </div>
    </div>
   </div>
  </section>
  <!-- /Faixa 2 - detalhes -->
  <!-- DIVISOR DE PÁGINA -->
  <div class="divisor-pag">
   <img src="<?= $BASE_URL ?>front-end/assets/img/divisor/divisor-up.png" alt="">
  </div>
  <!--/DIVIDOR DE PÁGINA -->



 </main>




 <!-- FOOTER -->
 <?php require_once("./front-end/assets/template/footer.php"); ?>