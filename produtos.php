<?php

require __DIR__.'/vendor/autoload.php';

use \App\Entity\Produto;
use \App\Session\Login;

$produtos = Produto::getProdutos();

//obriga o usuário a estar logado
Login::requireLogin();

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/listagem.php';
include __DIR__.'/includes/footer.php';