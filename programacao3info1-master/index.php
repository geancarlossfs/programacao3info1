<?php

    require 'programathions/app/models/CategoriaCrud.php';
    require 'programathions/app/models/ProdutoCrud.php';

if (isset($_GET['acao'])){
    $acao = $_GET['acao'];
}else{
    $acao = 'index';
}

    switch ($acao){
        case 'index':

            $crud = new CategoriaCrud();
            $categorias = $crud->getCategorias();

            $crud = new ProdutoCrud();
            $produtos = $crud->getProdutos();

            include 'programathions/app/view/template/cabecalho.php';
            include 'programathions/app/view/principal/abas.php';
        break;


    }