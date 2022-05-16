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

     public function update(ProdutoModel $model)
    {
        $sql = "UPDATE pessoa SET codigo=?, produto=?, descricao=?, data=?, valor=? WHERE id=? ";

        $stmt = $this->conexao->prepare($sql);
     
        $stmt->bindValue(1, $model->codigo);
        $stmt->bindValue(1, $model->produto);
        $stmt->bindValue(3, $model->descricao);
        $stmt->bindValue(4, $model->data);
        $stmt->bindValue(5, $model->valor);
        $stmt->bindValue(8, $model->id);
        
        $stmt->execute();
    }
    
    function getAllRows(){
        $sql = "SELECT * from produto";
        
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function selectById(int $id)
    {
        include_once 'Model/ProdutoModel.php';

        $sql = "SELECT * FROM produto WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("ProdutoModel"); 
    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM produto WHERE id = ? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}