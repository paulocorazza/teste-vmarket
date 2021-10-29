<?php

require __DIR__.'/vendor/autoload.php';

define('TITLE','Cadastrar Produto');

use App\Entity\Produto;
use App\Session\Login;

Login::requireLogin();

if(isset($_POST['descricao'])){

    $produto = new Produto();
    $produto->descricao = $_POST['descricao'];
    $produto->cod_barras = $_POST['cod_barras'];
    $produto->icms = $_POST['icms'];
    $produto->ipi = $_POST['ipi'];
    $produto->valor = $_POST['valor'];
    $produto->cadastrarProduto();

    header('location: produtos.php?status=success');
    exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario.php';
include __DIR__.'/includes/footer.php';
