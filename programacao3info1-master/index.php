<?php

if (isset($_GET['acao'])){
    $acao = $_GET['acao'];
}else{
    $acao = 'index';
}

    require 'programathions/app/models/CategoriaCrud.php';

    switch ($acao){
        case 'index':

            $crud = new CategoriaCrud();
            $categorias = $crud->getCategorias();

            include 'programathions/app/view/principal/abas.php';
        break;


    }