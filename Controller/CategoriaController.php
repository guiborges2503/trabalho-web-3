<?php


class CategoriaController 
{
    
    public static function index() 
    {
        include 'Model/CategoriaModel.php'; 
        $model = new CategoriaModel();
        $model->getAllRows();
        include 'View/modules/Categoria/CategoriaListar.php';
    }

    public static function form()
    {
        include 'View/modules/Categoria/CategoriaCadastro.php';
    }

    public static function save() {

        include 'Model/CategoriaModel.php'; 

        $Categoria = new CategoriaModel();
        $Categoria->id = $_POST['id'];
        $Categoria->nome = $_POST['nome'];
        
       
        $Categoria->save();  

        header("Location: /Categoria"); 
    }
}