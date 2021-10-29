<?php

require __DIR__.'/vendor/autoload.php';

define('TITLE','Editar Produto');

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
if(isset($_POST['descricao'])){

  $produto->descricao = $_POST['descricao'];
  $produto->cod_barras = $_POST['cod_barras'];
  $produto->valor = $_POST['valor'];
  $produto->icms = $_POST['icms'];
  $produto->ipi = $_POST['ipi'];
  $produto->atualizarProduto();

  header('location: produtos.php?status=success');
  exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario_edit.php';
include __DIR__.'/includes/footer.php';