<?php
require_once("./back-end/config/url.php");

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
 <!-- Head de todas as páginas -->
 <?php include("./front-end/assets/template/head.php") ?>
 <title>Fale Conosco</title>
</head>

<body>
 <!--  HEADER -->
 <header>
  <?php require_once("./front-end/assets/template/header.php"); ?>
  <!-- / HEADER -->
  <main>

   <section class="fale-conosco">
    <div class="container">
     <div class="content">
      <div class="title" data-aos="zoom-in">
       <h1>Fale Conosco</h1>
       <p>Deixe sua mensagem, entraremos em contato o mais breve possível </p>
      </div>
      <div class="container-fale">
       <div class="fale-info">
        <div class="info-endereco">
         <img src="<?= $BASE_URL ?>front-end/assets/img/icons/local.svg" alt="">
         <p>Endereço</p>
         <p class="small">Rua Presidente Bartolomeu Mitre, 51 - São Paulo, SP</p>
        </div>
        <div class="info-contact">
         <div class="info-phone">
          <img src="<?= $BASE_URL ?>front-end/assets/img/icons/phone-fale-conosco.svg" alt="">
          <p>Telefone</p>
          <p class="small">(11)94921-4071</p>
         </div>
         <div class="info-email">
          <img src="<?= $BASE_URL ?>front-end/assets/img/icons/email.svg" alt="">
          <p>E-mail</p>
          <p class="small">k7informatica@gmail.com.br</p>
         </div>
        </div>
       </div>
       <div class="fale-form-container">
        <form id="formFaleConosco">
         <input type="hidden" name="formulario" value="fale_conosco">
         <div class="inputs-container">
          <div class="input-nome">
           <label for="nome">Nome:</label>
           <input type="text" name="nome" id="nome" placeholder="Digite seu nome" required>
          </div>
          <div class="input-email">
           <label for="email">E-mail:</label>
           <input type="email" name="email" id="faleEmail" placeholder="Digite seu e-mail" required>
          </div>
         </div>
         <div class="inputs-container">
          <div class="input-telefone">
           <label for="telefone">Telefone/Celular:</label>
           <input type="tel" name="telefone" id="telefone" placeholder="Telefone ou Celular" required>
          </div>
          <div class="input-interesse">
           <label for="interesse">Selecione o Serviço:</label>
           <select name="interesse" id="interesse">
            <option value="">Selecione</option>
            <option value="">Manutenção de Notebook</option>
            <option value="">Formatação</option>
            <option value="">Upgrade SSD Memória</option>
            <option value="">Troca de Teclado</option>
            <option value="">Troca de Tela</option>
            <option value="">Dobradiça</option>
            <option value="">Montagem PC Gamer</option>
            <option value="">Montagem PC Gamer</option>
           </select>
          </div>
         </div>
         <div class="input-message">
          <label for="message">Mensagem:</label>
          <textarea name="message" id="mesage" placeholder="Deixe um resumo do problema" rows="6"></textarea>
         </div>
         <div class="input-btn">
          <button>Enviar</button>
         </div>
         <!-- MSG Alerta -->
         <div class="msg-alert"></div>
        </form>
       </div>
      </div>
     </div>
    </div>
   </section>

   <!-- DIVISOR DE PÁGINA -->
   <div class="divisor-pag-to">
   </div>
   <!--/DIVIDOR DE PÁGINA -->

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
   <div class="divisor-pag-up">
   </div>
   <!--/DIVIDOR DE PÁGINA -->
  </main>
  <!-- FOOTER -->
  <footer>
   <?php require_once("./front-end/assets/template/footer.php"); ?>