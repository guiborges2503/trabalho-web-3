<?php

namespace App\DAO;

use App\Model\UsuarioModel;
use \PDO;

class UsuarioDAO extends DAO
{
    function __construct() {
        parent::__construct();
    }

    function insert(UsuarioModel $model) {
        
        $sql = "INSERT INTO usuario
                (nome, usuario, email, senha) 
                VALUES (?, ?, ?, ?)";
        
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->usuario);
        $stmt->bindValue(5, $model->email);
        $stmt->bindValue(7, $model->senha);
        $stmt->execute();
    }

    function getAllRows(){
        $sql = "SELECT * FROM usuario";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function selectById(int $id){
        $sql = "SELECT * FROM usuario WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("App\Model\UsuarioModel");
    }

    public function update(UsuarioModel $model){
        $sql = "UPDATE usuario SET nome=?, usuario=?, email=?, senha=? WHERE id=? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->usuario);
        $stmt->bindValue(5, $model->email);
        $stmt->bindValue(7, $model->senha);
        $stmt->bindValue(8, $model->id);
        $stmt->execute();
    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM usuario WHERE id = ? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}