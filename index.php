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
 <!-- AOS.JS -->
 <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
 <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
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
      <!-- <div class="action-hero">
       <a href="https://wa.me/5511949214071?text=Olá,%20vim%20pelo%20site%20e%20gostaria%20de%20um%20orçamento." target="_blank"><img src="<?= $BASE_URL ?>/front-end/assets/img/icons/Phone.svg" alt="">Fale pelo WhatsApp</a>
      </div> -->
      <a href="https://wa.me/5511949214071?text=Olá,%20vim%20pelo%20site%20e%20gostaria%20de%20um%20orçamento." class="btn neon-pulse" target="_blank">
       <span>Falar no WhatsApp</span>
      </a>
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
     <div class="title" data-aos="zoom-in">
      <h1>Seu <span style="color: var(--surface-color);">Notebook</span> ou <span style="color: var(--surface-color);">PC</span> funcionando <br> do jeito certo</h1>
      <p>Se você precisa de um desses serviços, entre em contato agora mesmo.</p>
     </div>
     <div class="info-container">
      <div class="info-content">
       <div data-aos="zoom-in">
        <div class="info-play">Vídeo</div>
        <div class="info-text">
         <span class="info-destaque"><img src="<?= $BASE_URL ?>front-end/assets/img/icons/Laptop Coding.svg" alt="">Notebook - <span class="accent-color">Assista o Vídeo</span></span>
         <h2 class="h4">Montagem e Upgrade de <span class="surface-color">Notebook</span></h2>
         <p>Instalações de peças, otimização e configuração para deixar seu notebook mais rápido, eficiente e pronto para qualquer tarefa.</p>
         <a href="<?= $BASE_URL ?>fale-conosco.php" class="btn-contato-info"><img src="<?= $BASE_URL ?>front-end/assets/img/icons/phone-etapas.png" alt="">Entre em contato</a>
        </div>
       </div>
      </div>


      <div class="info-content">
       <div class="reverse-col" data-aos="zoom-in">
        <div class="info-play">Vídeo</div>
        <div class="info-text">
         <span class="info-destaque"><img src="<?= $BASE_URL ?>front-end/assets/img/icons/pc-gamer.svg" alt="">PC Gamer - <span class="accent-color">Assista o Vídeo</span></span>
         <h2 class="h4">Montagem e Upgrade de <span class="surface-color">PC Gamer</span></h2>
         <p>Instalações de peças, otimização e configuração para deixar seu notebook mais rápido, eficiente e pronto para qualquer tarefa.</p>
         <a href="<?= $BASE_URL ?>fale-conosco.php" class="btn-contato-info"><img src="<?= $BASE_URL ?>front-end/assets/img/icons/phone-etapas.png" alt="">Entre em contato</a>
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
  <section class="servico" id="servico">
   <div class="container">
    <div class="content">
     <div class="title" data-aos="zoom-in">
      <h1>Conheça nossos serviços</h1>
      <p>Serviços rápidos para pessoa física</p>
     </div>
     <div class="container-servico" data-aos="zoom-in">
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
     <div class="service-itens-container" data-aos="zoom-in">
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
     <div class="service-text" data-aos="zoom-in">
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
     <div class="title" data-aos="zoom-in">
      <h1>Benefícios <b class="surface-color">/</b> Vantagens</h1>
      <p>Confira os benefícios e vantagens de contratar nossos serviços</p>
     </div>
     <div class="beneficios-container" data-aos="zoom-in">
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
     <div class="details-img" data-aos="zoom-in">
      <img src="<?= $BASE_URL ?>front-end/assets/img/instalacao-ssd-notebook.svg" alt="Imagem de notebook junto com ssd">
     </div>
     <div class="details-text" data-aos="zoom-in">
      <p class="text-details">Notebook Lento? Notebook travando? Não acessa sistema?
      </p>
      <h3 class="accent-color">Faça um Upgrade com SSD</h3>
      <p>Colocar um SSD no seu notebook ou computador é uma das melhores melhorias que você pode fazer. Ele deixa o sistema muito mais rápido, reduz o tempo de inicialização e faz programas abrirem quase instantaneamente.</p>
      <div class="details-btn">
       <a href="<?= $BASE_URL ?>fale-conosco.php"><img src="<?= $BASE_URL ?>front-end/assets/img/icons/Phone.svg" alt="">Quero um orçamento</a>
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

  <!-- ATENDIMENTO -->
  <section class="procura" id="atendimento">
   <div class="container">
    <div class="content">
     <div class="title" data-aos="zoom-in">
      <h1>Qual tipo de atendimento você está procurando?</h1>
     </div>
     <div class="container-procura" data-aos="zoom-in">
      <div class="procura-item">
       <img src="<?= $BASE_URL ?>front-end/assets/img/icons/pc-conserto.svg" alt="">
       <a href="https://wa.me/5511949214071?text=Olá,%20vim%20pelo%20site%20e%20gostaria%20de%20um%20orçamento%20para%20meu%20computador." target="_blank"><img src="<?= $BASE_URL ?>front-end/assets/img/icons/whatsApp-logo.svg" alt="">Atendimento <br> Computador</a>
      </div>
      <div class="procura-item">
       <img src="<?= $BASE_URL ?>front-end/assets/img/icons/Laptop.svg" alt="">
       <a href="https://wa.me/5511949214071?text=Olá,%20vim%20pelo%20site%20e%20gostaria%20de%20um%20orçamento%20para%20meu%20Macbook." target="_blank"><img src="<?= $BASE_URL ?>front-end/assets/img/icons/whatsApp-logo.svg" alt="">Atendimento <br> Macbook</a>
      </div>
      <div class="procura-item">
       <img src="<?= $BASE_URL ?>front-end/assets/img/icons/Laptop-1.svg" alt="">
       <a href="https://wa.me/5511949214071?text=Olá,%20vim%20pelo%20site%20e%20gostaria%20de%20um%20orçamento%20para%20meu%20Notebook." target="_blank"><img src="<?= $BASE_URL ?>front-end/assets/img/icons/whatsApp-logo.svg" alt="">Atendimento <br> Notebook</a>
      </div>
      <div class="procura-item">
       <img src="<?= $BASE_URL ?>front-end/assets/img/icons/imac-conserto.svg" alt="">
       <a href=https://wa.me/5511949214071?text=Olá,%20vim%20pelo%20site%20e%20gostaria%20de%20um%20orçamento%20para%20meu%20Imac.""><img src="<?= $BASE_URL ?>front-end/assets/img/icons/whatsApp-logo.svg" alt="">Atendimento <br> Imac</a>
      </div>
      <div class="procura-item">
       <img src="<?= $BASE_URL ?>front-end/assets/img/icons/atendimento-informatica.svg" alt="">
       <a href="https://wa.me/5511949214071?text=Olá,%20vim%20pelo%20site%20e%20gostaria%20de%20um%20orçamento%20personalizado."><img src="<?= $BASE_URL ?>front-end/assets/img/icons/whatsApp-logo.svg" alt="">Atendimento <br> Personalizado</a>
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
     <div class="details-img" data-aos="zoom-in">
      <!-- <img src="<?= $BASE_URL ?>front-end/assets/img/instalacao-ssd-notebook.svg" alt="Imagem de notebook junto com ssd"> -->
      <h4>Etapas para <br> reparar <br> seu <span class="accent-color">Notebook</span></h4>
      <p>Veja como e fácil o processo</p>
     </div>
     <div class="details-text" data-aos="zoom-in">
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

  <!-- DICAS -->
  <section class="dicas" id="dicas">
   <div class="container">
    <div class="content">
     <div class="title" data-aos="zoom-in">
      <h1>Veja como melhorar o desempenho do seu <span class="surface-color">PC</span> ou <span class="surface-color">Notebook</span></h1>
     </div>
     <div class="dicas-container">
      <div class="dicas-title-container">

       <div class="dica-item">
        <div class="active" data-tab="ssd"><img src="<?= $BASE_URL ?>front-end/assets/img/icons/SSD.svg" alt=""><span>Por que colocar um</span>SSD</div>
       </div>

       <div class="dica-item">
        <div data-tab="memoria"><img src="<?= $BASE_URL ?>front-end/assets/img/icons/instalacao-memoria.svg" alt=""><span>Upgrade de</span> Memória</div>
       </div>

       <div class="dica-item">
        <div data-tab="video"><img src="<?= $BASE_URL ?>front-end/assets/img/icons/placa-de-video-instalacao.svg" alt=""><span>Placa de</span> Vídeo</div>
       </div>

       <div class="dica-item">
        <div data-tab="limpeza"><img src="<?= $BASE_URL ?>front-end/assets/img/icons/limpeza-interna-notebook-computador.svg" alt="">Limpeza <span>interna</span></div>
       </div>

      </div>



      <!-- conteúdo -->
      <div class="conteudo-dicas-container active" id="ssd">
       <div class="conteudo-text">
        <h4>Seu <span class="surface-color">computador está lento?</span> Talvez a solução seja mais simples do que você imagina.</h4>
        <p>Se o seu notebook ou PC demora para ligar, trava ao abrir programas ou simplesmente não acompanha o seu ritmo, a troca para um SSD (Solid State Drive) pode transformar completamente o desempenho da sua máquina.</p>
        <h4 class="accent-color">Por que colocar um SSD?</h4>
        <ul>
         <li><img src="<?= $BASE_URL ?>front-end/assets/img/icons/arrow_icon.svg" alt="">Inicialização muito mais rápida (em segundos)</li>
         <li><img src="<?= $BASE_URL ?>front-end/assets/img/icons/arrow_icon.svg" alt="">Programas abrem quase instantaneamente</li>
         <li><img src="<?= $BASE_URL ?>front-end/assets/img/icons/arrow_icon.svg" alt="">Mais desempenho no dia a dia</li>
         <li><img src="<?= $BASE_URL ?>front-end/assets/img/icons/arrow_icon.svg" alt="">Menor consumo de energia</li>
         <li><img src="<?= $BASE_URL ?>front-end/assets/img/icons/arrow_icon.svg" alt="">Mais durabilidade (sem partes mecânicas)</li>
        </ul>
        <p>Em muitos casos, você não precisa investir em um computador novo. Um simples upgrade com SSD já entrega uma performance incrível, economizando dinheiro e aumentando a vida útil do seu equipamento.</p>
        <p>👉 Quer deixar seu computador rápido de verdade? Fale comigo e faça um upgrade sem dor de cabeça.</p>
       </div>
       <div class="conteudo-img">
        <img src="<?= $BASE_URL ?>front-end/assets/img/ssd-troca-instalacao.png" alt="">
       </div>
      </div>

      <!-- memoria -->
      <div class="conteudo-dicas-container " id="memoria">
       <div class="conteudo-text">
        <h4>Seu computador trava ao abrir vários programas? Talvez a solução seja mais simples do que você imagina.</h4>

        <p>Se o seu <span class="surface-color">notebook ou PC </span>fica lento ao usar vários aplicativos ao mesmo tempo, trava com muitas abas abertas ou apresenta lentidão no dia a dia, um upgrade de memória RAM pode melhorar drasticamente o desempenho da sua máquina.</p>

        <h4 class="accent-color">Por que fazer upgrade de memória RAM?</h4>
        <ul>
         <li><img src="<?= $BASE_URL ?>front-end/assets/img/icons/arrow_icon.svg" alt="">Mais velocidade e fluidez no sistema</li>
         <li><img src="<?= $BASE_URL ?>front-end/assets/img/icons/arrow_icon.svg" alt="">Melhor desempenho em multitarefas</li>
         <li><img src="<?= $BASE_URL ?>front-end/assets/img/icons/arrow_icon.svg" alt="">Menos travamentos e lentidão</li>
         <li><img src="<?= $BASE_URL ?>front-end/assets/img/icons/arrow_icon.svg" alt="">Navegação mais rápida e estável</li>
         <li><img src="<?= $BASE_URL ?>front-end/assets/img/icons/arrow_icon.svg" alt="">Melhor desempenho em jogos e programas pesados</li>
        </ul>
        <p>Em muitos casos, você não precisa investir em um computador novo. Apenas aumentando a memória RAM, seu equipamento já ganha muito mais desempenho, estabilidade e velocidade para acompanhar sua rotina.</p>
        <p>👉 Quer deixar seu computador mais rápido e sem travamentos? Fale comigo e faça um upgrade sem dor de cabeça.</p>
       </div>
       <div class="conteudo-img">
        <img src="<?= $BASE_URL ?>front-end/assets/img/troca-de-memoria-ram.png" alt="">
       </div>
      </div>

      <!-- Video -->
      <div class="conteudo-dicas-container " id="video">
       <div class="conteudo-text">
        <h4>Seu computador <span class="surface-color">não aguenta jogos</span>, edições ou programas pesados? Talvez a solução seja um upgrade de placa de vídeo.</h4>

        <p>Se o seu notebook ou PC apresenta travamentos em jogos, baixa qualidade gráfica, lentidão em renderizações ou dificuldade para rodar programas mais pesados, a troca da placa de vídeo pode transformar completamente o desempenho da sua máquina.</p>

        <h4 class="accent-color">Por que fazer upgrade de placa de vídeo?</h4>
        <ul>
         <li><img src="<?= $BASE_URL ?>front-end/assets/img/icons/arrow_icon.svg" alt="">Mais desempenho em jogos</li>
         <li><img src="<?= $BASE_URL ?>front-end/assets/img/icons/arrow_icon.svg" alt="">Melhor qualidade gráfica</li>
         <li><img src="<?= $BASE_URL ?>front-end/assets/img/icons/arrow_icon.svg" alt="">Mais FPS e fluidez</li>
         <li><img src="<?= $BASE_URL ?>front-end/assets/img/icons/arrow_icon.svg" alt="">Melhor performance em edição de vídeo e design</li>
         <li><img src="<?= $BASE_URL ?>front-end/assets/img/icons/arrow_icon.svg" alt="">Renderizações mais rápidas</li>
        </ul>
        <p>Em muitos casos, você não precisa trocar o computador inteiro. Um upgrade de placa de vídeo já pode entregar muito mais desempenho, qualidade visual e velocidade para acompanhar sua rotina ou seus jogos favoritos.</p>

        <p>👉 Quer mais potência e desempenho no seu computador? Fale comigo e faça um upgrade sem dor de cabeça.</p>
       </div>
       <div class="conteudo-img">
        <img src="<?= $BASE_URL ?>front-end/assets/img/placa-de-video-instalacao.png" alt="">
       </div>
      </div>

      <!-- Limpeza -->
      <div class="conteudo-dicas-container " id="limpeza">
       <div class="conteudo-text">
        <h4>Seu notebook está <span class="surface-color">esquentando demais</span> ou fazendo muito barulho? Talvez ele esteja precisando de uma limpeza interna.</h4>

        <p>Com o tempo, poeira e sujeira se acumulam dentro do computador, prejudicando a ventilação e causando superaquecimento, travamentos e perda de desempenho no dia a dia.</p>

        <h4 class="accent-color">Por que fazer uma limpeza interna?</h4>
        <ul>
         <li><img src="<?= $BASE_URL ?>front-end/assets/img/icons/arrow_icon.svg" alt="">Reduz o superaquecimento</li>
         <li><img src="<?= $BASE_URL ?>front-end/assets/img/icons/arrow_icon.svg" alt="">Melhora o desempenho da máquina</li>
         <li><img src="<?= $BASE_URL ?>front-end/assets/img/icons/arrow_icon.svg" alt="">Diminui travamentos e lentidão</li>
         <li><img src="<?= $BASE_URL ?>front-end/assets/img/icons/arrow_icon.svg" alt="">Ajuda na refrigeração do sistema</li>
         <li><img src="<?= $BASE_URL ?>front-end/assets/img/icons/arrow_icon.svg" alt="">Reduz o barulho das ventoinhas</li>
        </ul>
        <p>Em muitos casos, uma simples limpeza interna já faz o computador voltar a trabalhar com mais estabilidade, desempenho e segurança, evitando problemas futuros e até danos em componentes.</p>

        <p>👉 Quer deixar seu computador mais frio, silencioso e eficiente? Fale comigo e faça uma limpeza interna profissional sem dor de cabeça.</p>
       </div>
       <div class="conteudo-img">
        <img src="<?= $BASE_URL ?>front-end/assets/img/limpeza-notebook-interna.png" alt="">
       </div>
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
  <!-- Faixa 3 - detalhes -->
  <section class="faixa-detalhes">
   <div class="container">
    <div class="content">
     <div class="details-img" data-aos="zoom-in">
      <img src="<?= $BASE_URL ?>front-end/assets/img/tela-quebrada.svg" alt="Imagem de notebook junto com ssd">
     </div>
     <div class="details-text" data-aos="zoom-in">
      <p class="text-details">Notebook com a tela quebrada? Com riscos? Com manchas?
      </p>
      <h3 class="accent-color">Tela nova instalada</h3>
      <p class="weak">Mão de obra inclusa, trabalhamos apenas com telas <span class="accent-color">NOVAS</span>!</p>
      <p>Tela Notebook LENOVO - Tela Notebook DELL - Tela Notebook SAMSUMG - Tela Notebook HP - Tela Notebok ACER - Tela Notebook POSITIVO - Tela Notebok ASUS - Tela Notebook LG </p>
      <div class="details-btn">
       <a href="<?= $BASE_URL ?>fale-conosco.php"><img src="<?= $BASE_URL ?>front-end/assets/img/icons/Phone.svg" alt="">Quero um orçamento</a>
      </div>

     </div>
    </div>
   </div>
  </section>
  <!-- /Faixa 3 - detalhes -->
  <!-- DIVISOR DE PÁGINA -->
  <div class="divisor-pag">
   <img src="<?= $BASE_URL ?>front-end/assets/img/divisor/divisor-up.png" alt="">
  </div>
  <!--/DIVIDOR DE PÁGINA -->

  <!-- DESTEMUNHAS -->
  <section class="testemunhas">
   <div class="container">
    <div class="content">
     <div class="title" data-aos="zoom-in">
      <h1>O que nossos Clientes dizem</h1>
     </div>

     <div class="testemunhas-container">
      <div class="card-testemunhas" data-aos="fade-right"
       data-aos-offset="300"
       data-aos-easing="ease-in-sine">
       <div class="card-item-test">
        <div class="card-star"><img src="<?= $BASE_URL ?>front-end/assets/img/icons/star-group.svg" alt=""></div>
        <p>"Levei meu notebook para manutenção e ficou perfeito! Atendimento rápido, transparente e muito profissional.” <br> Carlos M.</p>
       </div>
       <div class="card-item-test">
        <div class="card-star"><img src="<?= $BASE_URL ?>front-end/assets/img/icons/star-group.svg" alt=""></div>
        <p>“Meu computador estava extremamente lento, depois do upgrade ficou muito mais rápido. Recomendo demais!” <br> Fernanda A.</p>
       </div>
       <div class="card-item-test">
        <div class="card-star"><img src="<?= $BASE_URL ?>front-end/assets/img/icons/star-group.svg" alt=""></div>
        <p>“Ótimo atendimento e serviço de qualidade. Explicou tudo certinho e resolveu meu problema no mesmo dia.” <br> Rafael S.</p>
       </div>
      </div>
      <div class="card-testemunhas" data-aos="fade-left"
       data-aos-anchor="#example-anchor"
       data-aos-offset="500"
       data-aos-duration="500">
       <div class="card-item-test">
        <div class="card-star"><img src="<?= $BASE_URL ?>front-end/assets/img/icons/star-group.svg" alt=""></div>
        <p>“Depois da manutenção, meu PC ficou muito mais rápido. Trabalho impecável!” <br>
         Juliana R.</p>
       </div>
       <div class="card-item-test">
        <div class="card-star"><img src="<?= $BASE_URL ?>front-end/assets/img/icons/star-group.svg" alt=""></div>
        <p>“Achei que teria que comprar outro computador, mas o upgrade resolveu tudo.” <br>
         Marcos L.</p>
       </div>
       <div class="card-item-test">
        <div class="card-star"><img src="<?= $BASE_URL ?>front-end/assets/img/icons/star-group.svg" alt=""></div>
        <p>“Atendimento excelente e resultado melhor ainda. Meu notebook virou outro!” <br>
         Patrícia S.</p>
       </div>
      </div>
     </div>
    </div>
   </div>
  </section>

  <!-- DIVISOR DE PÁGINA -->
  <div class="divisor-pag">
   <img src="<?= $BASE_URL ?>front-end/assets/img/divisor/divisor-to.png" alt="Divisor de página">
  </div>
  <!-- Faixa 4 - detalhes -->
  <section class="faixa-detalhes">
   <div class="container">
    <div class="content">
     <div class="details-img" data-aos="zoom-in">
      <img src="<?= $BASE_URL ?>front-end/assets/img/teclado-gamer.png" alt="Imagem de notebook junto com ssd">
     </div>
     <div class="details-text" data-aos="zoom-in">
      <p class="text-details">Teclado de notebook falhando? Caiu líquido? Não funciona?
      </p>
      <h3 class="accent-color">Faça um orçamento</h3>

      <p>Teclado Notebook Dell, Teclado Notebook Lenovo, Teclado Notebook Samsung, Teclado Notebook Acer, Teclado Notebook Positivo, Teclado Notebook HP, Teclado Notebook Asus, Teclado Notebook LG etc.</p>
      <div class="details-btn">
       <a href="<?= $BASE_URL ?>fale-conosco.php"><img src="<?= $BASE_URL ?>front-end/assets/img/icons/Phone.svg" alt="">Vamos conversar</a>
      </div>

     </div>
    </div>
   </div>
  </section>
  <!-- /Faixa 4 - detalhes -->
  <!-- DIVISOR DE PÁGINA -->
  <div class="divisor-pag">
   <img src="<?= $BASE_URL ?>front-end/assets/img/divisor/divisor-up.png" alt="">
  </div>
  <!--/DIVIDOR DE PÁGINA -->

  <!-- PROFISSIONAL  -->
  <section class="profissional" id="profissional">
   <div class="container">
    <div class="content">
     <div class="title" data-aos="zoom-in">
      <h1>Quem vai cuidar do seu computador</h1>
      <p>Especialista em notebooks, com foco em qualidade e confiança.</p>
     </div>
     <div class="profi-container">
      <div>
       <div class="profi-box" data-aos="zoom-in">
        <h5>Kassio Kennedy</h5>
        <div>
         <p>Hardware <br> Desenvolvedor Web</p>
         <span><a href="#"><img src="<?= $BASE_URL ?>front-end/assets/img/icons/instagram.svg" alt=""></a> <a href=""><img src="<?= $BASE_URL ?>front-end/assets/img/icons/Linkedin.svg" alt=""></a></span>
        </div>
       </div>
       <img src="<?= $BASE_URL ?>front-end/assets/img/informatica-manutencao-suporte.png" alt="">
      </div>
      <p data-aos="zoom-in">Atuo na área de informática há mais de 5 anos e, nos últimos 2 anos, venho me especializando em desenvolvimento web. Ofereço soluções rápidas, seguras e eficientes para notebooks, computadores e projetos digitais. Meu compromisso é entregar desempenho, qualidade e a melhor experiência para cada cliente.</p>
     </div>
    </div>
   </div>
  </section>

  <!-- DIVISOR DE PÁGINA -->
  <div class="divisor-pag">
   <img src="<?= $BASE_URL ?>front-end/assets/img/divisor/divisor-to.png" alt="Divisor de página">
  </div>
  <!-- Faixa 5 - detalhes -->
  <section class="faixa-detalhes">
   <div class="container">
    <div class="content">
     <div class="details-img" data-aos="zoom-in">
      <img src="<?= $BASE_URL ?>front-end/assets/img/troca-de-bateria-notebook.png" alt="Imagem de notebook junto com ssd">
     </div>
     <div class="details-text" data-aos="zoom-in">
      <p class="text-details">Notebook não carrega mesmo ligado na tomada?
       Bateria não carrega? Notebook não está segura carga?
      </p>
      <h3 class="accent-color">Baterias Novas</h3>
      <p class="weak">Bateria para Notebooks, interna e externa mão de obra inclusa</p>
      <p>Bateria Notebook Dell, Bateria Notebook Lenovo, Bateria Notebook Samsung, Bateria Notebook Acer, Bateria Notebook Positivo, Bateria Notebook HP, Bateria Notebook Asus, Bateria Notebook LG etc.</p>
      <div class="details-btn">
       <a href="<?= $BASE_URL ?>fale-conosco.php"><img src="<?= $BASE_URL ?>front-end/assets/img/icons/Phone.svg" alt="">Quero um orçamento</a>
      </div>

     </div>
    </div>
   </div>
  </section>
  <!-- /Faixa 5 - detalhes -->
  <!-- DIVISOR DE PÁGINA -->
  <div class="divisor-pag">
   <img src="<?= $BASE_URL ?>front-end/assets/img/divisor/divisor-up.png" alt="">
  </div>
  <!--/DIVIDOR DE PÁGINA -->

  <!-- PERGUNTAS FREQUENTES -->
  <section class="perguntas">
   <div class="container">
    <div class="content">
     <div class="title" data-aos="zoom-in">
      <h1>Perguntas frequentes</h1>
      <p>Dúvida? Estamos aqui para ajudar.</p>
     </div>
     <div class="container-perguntas" data-aos="zoom-in">
      <div class="perguntas-item">
       <div class="perguntas-dropdown-container">
        <div class="drop-down">
         <div class="item-text">Existe alguma taxa de diagnóstico?</div>
         <span class="arrow activeDrop" data-item="um"><img src="<?= $BASE_URL ?>front-end/assets/img/icons/check_fale_conosco.svg" alt="Icon arroww"></span>
        </div>
        <div class="drop-resposta activeDrop" id="um">A análise pode variar conforme o tipo de problema e equipamento. Antes de qualquer serviço, explicamos tudo com transparência e informamos os valores necessários.</div>
       </div>
      </div>
      <div class="perguntas-item">
       <div class="perguntas-dropdown-container">
        <div class="drop-down">
         <div class="item-text">Formatar o computador apaga meus arquivos?</div>
         <span class="arrow" data-item="dois"><img src="<?= $BASE_URL ?>front-end/assets/img/icons/check_fale_conosco.svg" alt="Icon arroww"></span>
        </div>
        <div class="drop-resposta " id="dois">Dependendo do serviço, os arquivos podem ser preservados. Sempre orientamos e verificamos a possibilidade de backup antes da formatação.</div>
       </div>
      </div>
      <div class="perguntas-item">
       <div class="perguntas-dropdown-container">
        <div class="drop-down">
         <div class="item-text">Quanto tempo demora o serviço?</div>
         <span class="arrow" data-item="tres"><img src="<?= $BASE_URL ?>front-end/assets/img/icons/check_fale_conosco.svg" alt="Icon arroww"></span>
        </div>
        <div class="drop-resposta " id="tres">O prazo pode variar conforme o problema, mas muitos atendimentos são realizados no mesmo dia ou em até 24 horas após a análise do equipamento.</div>
       </div>
      </div>
      <div class="perguntas-item">
       <div class="perguntas-dropdown-container">
        <div class="drop-down">
         <div class="item-text">Vocês fazem orçamento antes do serviço?</div>
         <span class="arrow" data-item="quatro"><img src="<?= $BASE_URL ?>front-end/assets/img/icons/check_fale_conosco.svg" alt="Icon arroww"></span>
        </div>
        <div class="drop-resposta " id="quatro">Sim! Primeiro analisamos o equipamento e explicamos o problema antes de realizar qualquer procedimento.</div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </section>

  <!-- DIVISOR DE PÁGINA -->
  <div class="divisor-pag">
   <img src="<?= $BASE_URL ?>front-end/assets/img/divisor/divisor-to.png" alt="Divisor de página">
  </div>
  <!-- Faixa 5 - detalhes -->
  <section class="faixa-detalhes">
   <div class="container">
    <div class="content">
     <div class="details-img" data-aos="zoom-in">
      <img style="max-width: 350px;" src="<?= $BASE_URL ?>front-end/assets/img/dobradica-quebrada.png" alt="Imagem da dobradiça quebrada do notebook">
     </div>
     <div class="details-text" data-aos="zoom-in">
      <p class="text-details">Notebook com a dobradiça quebrada? Tela abrindo torta? Tampa estalando ao abrir?
      </p>
      <h3 class="accent-color">Reparo de dobradiça</h3>
      <p>Realizamos conserto e recuperação de dobradiças para notebooks com segurança e acabamento profissional.</p>
      <div class="details-btn">
       <a href="<?= $BASE_URL ?>fale-conosco.php"><img src="<?= $BASE_URL ?>front-end/assets/img/icons/Phone.svg" alt="">Vamos conversar</a>
      </div>

     </div>
    </div>
   </div>
  </section>
  <!-- /Faixa 5 - detalhes -->
  <!-- DIVISOR DE PÁGINA -->
  <div class="divisor-pag">
   <img src="<?= $BASE_URL ?>front-end/assets/img/divisor/divisor-up.png" alt="">
  </div>
  <!--/DIVIDOR DE PÁGINA -->

 </main>




 <!-- FOOTER -->
 <?php require_once("./front-end/assets/template/footer.php"); ?>