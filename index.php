<?php

require_once 'controller/LivroController.php';

$acao = isset($_GET['acao']) ? $_GET['acao'] : '';

switch($acao){
    case 'cadastrar':
        $LivroController = new LivroController();
        $LivroController->cadastrarLivro($_POST['titulo'], $_POST['autor'], $_POST['genero']);
        break;
    default:
        include 'view/formCadastrarLivro.php';
}