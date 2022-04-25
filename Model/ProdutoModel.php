<?php

class ProdutoModel
{
   
    public $id, $codigo, $produto, $descricao;
    public $data;
    public $valor;


    
    public function save()
    {
        include 'DAO/ProdutoDAO.php';

        $dao = new ProdutoDAO();

        if($this->id == null) 
        {
         
            $dao->insert($this);
        } else {

        }
                
    }
    public function getAllRows(){
        include "DAO/ProdutoDAO.php";

        $dao = new ProdutoDAO();
        
        $this->rows = $dao->getAllRows();
    }    
}