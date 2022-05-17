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

    public function update(CategoriaModel $model)
    {
        $sql = "UPDATE categoria SET nome=? WHERE id=? ";

        $stmt = $this->conexao->prepare($sql);
     
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->id);
       
        $stmt->execute();
    }

    function getAllRows(){
        $sql = "SELECT * from categoria";
        
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function selectById(int $id)
    {
        include_once 'Model/CategoriaModel.php';

        $sql = "SELECT * FROM categoria WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("CategoriaModel"); 
    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM categoria WHERE id = ? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}