<?php


class ProdutoController 
{
    
    public static function index() 
    {
        include 'Model/ProdutoModel.php'; 
        $model = new ProdutoModel();
        $model->getAllRows();
        include 'View/modules/Produto/ProdutoListar.php';
    }

    public static function form()
    {
        include 'View/modules/Produto/ProdutoCadastro.php';
    }

    public static function save() {

        include 'Model/ProdutoModel.php'; 

        $Produto = new ProdutoModel();
        $Produto->codigo = $_POST['codigo'];
        $Produto->produto = $_POST['produto'];
        $Produto->descricao = $_POST['descricao'];
        $Produto->data = $_POST['data'];
        $Produto->valor = $_POST['valor'];
       
        $Produto->save();  

        header("Location: /produto"); 
    }
}