<?php

$uri_parse = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

//echo $uri_parse;
//echo "<hr />";

include 'Controller/PessoaController.php';
include 'Controller/ProdutoController.php';

switch($uri_parse)
{
    case '/pessoa':
        PessoaController::index();
    break;

    case '/pessoa/form':
        PessoaController::form();
    break;

    case '/pessoa/save':
        PessoaController::save();
    break;


    case '/produto':
        ProdutoController::index();
    break;

    case '/produto/form':
        ProdutoController::form();
    break;

    case '/produto/save':
        ProdutoController::save();
    break;


     case '/formulario':
        include 'View/formulario.php';
    break;

    case '/processa':
        echo "vai pegar o que o usuário digitou <br />";
        echo $_POST['nome'];
        echo "<br />";
        var_dump($_POST);
    break;

    case '/produto':
        echo "listar produtos";
    break;

    case '/produto/ver':
        echo "ver detalhes de produto";
    break;

    case '/produto/delete':
        echo "remover produto";
    break;

    case '/produto/salvar':
        echo "salva no banco de dados";
    break;

    case '/formularioproduto':
        include 'View/modules/Produto/ProdutoCadastro.php';
    break;

    case '/formulariopessoa':
        include 'View/modules/Pessoa/FormPessoa.php';
    break;

    default:
        echo "erro 404";
    break;

}
