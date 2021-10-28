<?php

require __DIR__.'/vendor/autoload.php';

define('TITLE', 'Cadastrar Produto');


//VALIDAÇÃO DO POST

use App\Entity\Produto;
use App\Session\Login;

//obriga o usuário a estar logado
Login::requireLogin();


if(isset($_POST['descricao'],$_POST['valor'])){
    $produto = new Produto();
    $produto->descricao = $_POST['descricao'];
    $produto->valor = $_POST['valor'];
    $produto->barras = $_POST['barras'];
    $produto->icms = $_POST['icms'];
    $produto->ipi = $_POST['ipi'];
    $produto->cadastrarProduto();

    header('location: produtos.php?status=success');
    exit;
    
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario.php';
include __DIR__.'/includes/footer.php';