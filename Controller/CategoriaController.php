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
        include 'Model/CategoriaModel.php'; 
        $model = new CategoriaModel();

        if(isset($_GET['id'])) 
            $model = $model->getById( (int) $_GET['id']); 
            

        include 'View/modules/Categoria/FormCategoria.php'; 
    }
    
    public static function save() {

        include 'Model/CategoriaModel.php'; 

        $Categoria = new CategoriaModel();
        $Categoria->id = $_POST['id'];
        $Categoria->nome = $_POST['nome'];
        
       
        $Categoria->save();  

        header("Location: /categoria"); 
    }

    public static function delete()
    {
        include 'Model/CategoriaModel.php'; 

        $model = new CategoriaModel();
        $model->delete( (int) $_GET['id'] ); 

        header("Location: /categoria"); 
     }
}