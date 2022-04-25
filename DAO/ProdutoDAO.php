<?php

class ProdutoDAO
{
    
    private $conexao;


    
    function __construct() 
    {
       
        $dsn = "mysql:host=localhost:3307;dbname=db_sistema";
        $user = "root";
        $pass = "etecjau";
        
        
        $this->conexao = new PDO($dsn, $user, $pass);
    }

        function insert(ProdutoModel $model) 
    {
       
        $sql = "INSERT INTO Produto 
                (codigo, produto, descricao, data, valor) 
                VALUES (?, ?, ?, ?, ?)";
        
        
        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->codigo);
        $stmt->bindValue(2, $model->produto);
        $stmt->bindValue(3, $model->descricao);
        $stmt->bindValue(4, $model->data);
        $stmt->bindValue(5, $model->valor);
        
        
        
        $stmt->execute();      
    }

    function getAllRows(){
        $sql = "SELECT * from produto";
        
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }
}