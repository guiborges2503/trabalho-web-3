<?php

namespace App\Controller;

use App\Model\CategoriaModel;
use App\Model\ProdutoModel;


class ProdutoController extends Controller
{
    
    public static function index() 
    {
        
        $model = new ProdutoModel();
        $model->getAllRows();

        parent::render('Produto/ProdutoListar.php');
        
    }

    
    public static function form()
    {
        
        $modelCategoria = new CategoriaModel();
        $modelCategoria->getAllRows();

        include 'Model/ProdutoModel.php';
        $model = new ProdutoModel();

        if(isset($_GET['id']))
            $model = $model->getById( (int) $_GET['id']);

        parent::render('Produto/FormProduto.php');
    }

  
    public static function save() {

        

        $produto = new ProdutoModel();
        $produto->id = $_POST['id'];
        $produto->codigo= $_POST['codigo'];
        $produto->produto= $_POST['produto'];
        $produto->descricao = $_POST['descricao'];
        $produto->valor = $_POST['valor'];
        $produto->data = $_POST['data'];
        $produto->id = $_POST['id'];
        $produto->save();

        header('location: /produto');
    }

    public static function delete()
    {
        

        $model = new ProdutoModel();
        $model->delete( (int) $_GET['id'] );

        header("Location: /produto");
    }
}