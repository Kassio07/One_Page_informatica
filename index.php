<?php 
session_start();
$pagina = isset($_GET['pagina']) ? $_GET['pagina'] : "home";

// PÁGINAS PERMITIDAS
$paginasPermitidas = array(
  "home",
  "fale-conosco"
);

if(in_array($pagina, $paginasPermitidas)){
  include($pagina .".php");
}else{
  include("home.php");
}
?>