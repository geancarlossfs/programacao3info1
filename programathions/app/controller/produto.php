
<?php

require_once ('../models/ProdutoCrud.php');

if (isset($_GET['action'])){
    $action = $_GET['action'];
}else{
    $action = 'index';
}

switch($action){
    case 'index':

        $crud = new ProdutoCrud();
        $produtos = $crud->getProdutos();

        include ('../view/template/cabecalho.php');
        include ('../view/produtos/index.php');
        include ('../view/template/rodape.php');

        break;

    case 'show':
        $id = $_GET['id'];
        $crud = new ProdutoCrud();
        $produto = $crud->getProduto($id);

        include ('../view/template/cabecalho.php');
        include ('../view/produtos/show.php');
        include ('../view/template/rodape.php');

        break;

    case 'inserir':

        if (!isset($_POST['gravar'])) {
            include('../view/template/cabecalho.php');
            include('../view/produtos/inserir.php');
            include('../view/template/rodape.php');
        }else{
            $produto = new Produto(null, $_POST['nome'], $_POST['descricao'], $_POST['preco'], $_POST['foto']);
            $crud = new ProdutoCrud();
            $crud->insertProduto($produto);
            header('Location: produto.php');
        }
        break;

    case 'alterar':
        if (!isset($_POST['gravar'])) {
            $id = $_GET['id'];
            $crud = new ProdutoCrud();
            $produto = $crud->getProduto($id);

            include('../view/template/cabecalho.php');
            include('../view/produtos/alterar.php');
            include('../view/template/rodape.php');
        }else{
            $produto = new Produto($_POST['id'], $_POST['nome'], $_POST['descricao'],$_POST['preco'], $_POST['foto']);
            $crud = new ProdutoCrud();
            $res = $crud->updateProduto($produto);
            //echo $res;
            header('Location: produto.php');
        }
        break;

    case 'excluir':

        $crud = new ProdutoCrud();
        $crud->deleteProduto($_GET['id']);
        header('Location: produto.php');
}

?>

