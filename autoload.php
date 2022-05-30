<?php

spl_autoload_register(function ($nome_da_classe) 
{
    $arquivo_controller = 'Controller/' . $nome_da_classe . '.php';
    $arquivo_model = 'Model/' . $nome_da_classe . '.php';
    $arquivo_dao = 'DAO/' . $nome_da_classe . '.php';

    if(file_exists($arquivo_controller))
        include $arquivo_controller;
    else if (file_exists($arquivo_model))
        include $arquivo_model;
    else if (file_exists($arquivo_dao))
        include $arquivo_dao;

}); 