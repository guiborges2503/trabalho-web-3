<?php

class CategoriaDAO
{
    
    private $conexao;


    
    function __construct() 
    {
       
        $dsn = "mysql:host=localhost:3307;dbname=db_sistema";
        $user = "root";
        $pass = "etecjau";
        
        
        $this->conexao = new PDO($dsn, $user, $pass);
    }

        function insert(CategoriaModel $model) 
    {
       
        $sql = "INSERT INTO categoria 
                (id, nome) 
                VALUES (?, ?)";
        
        
        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->id);
        $stmt->bindValue(2, $model->nome);
        
        
        
        $stmt->execute();      
    }

    function getAllRows(){
        $sql = "SELECT * from categoria";
        
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }
}