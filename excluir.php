<?php

require __DIR__.'/vendor/autoload.php';

use \App\Entity\Produto;
use App\Session\Login;


//obriga o usuário a estar logado
Login::requireLogin();


//VALIDAÇÃO DO ID
if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
  header('location: produtos.php?status=error');
  exit;
}

//CONSULTA
$produto = Produto::getProduto($_GET['id']);

//VALIDAÇÃO 
if(!$produto instanceof Produto){
  header('location: produtos.php?status=error');
  exit;
}

//VALIDAÇÃO DO POST
if(isset($_POST['excluir'])){

  $produto->excluirProduto();

  header('location: produtos.php?status=success');
  exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/confirmar-exclusao.php';
include __DIR__.'/includes/footer.php';