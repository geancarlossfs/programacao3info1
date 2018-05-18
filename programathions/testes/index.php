<?php

if(isset($_GET[['acao']])){
    $acao = $_GET['acao'];
}else{
    $acao = 'index';
}

switch ($acao){
    case 'index':
        include "app/view/principal/index.php";
}