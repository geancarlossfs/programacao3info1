<?php

    $mascara = $_POST['mascara'];
    $priOct = $_POST['priOct'];
    $segOct = $_POST['segOct'];
    $terOct = $_POST['terOct'];
    $ultOct = $_POST['ultOct'];
    $bits = 32 - $mascara;

    function calculos($mascara, $priOct, $segOct, $terOct, $ultOct, $bits)
    {
        $ip = $priOct.".".$segOct.".".$terOct.".".$ultOct."/".$mascara;

        $mascaradecimal = 256 - pow(2, $bits);
        $mascaraA = "255.255.255." . $mascaradecimal;
        //mascara de sub-rede definida

        $intervalo = 256 - $mascaradecimal;
        $qntdsubrede = 256 / $intervalo;
        //quantidade subredes definida

        $qntendsubrede = $intervalo;
        //quantidade de endereços por subrede definida

        $hosts = $qntendsubrede - 2;
        //quantidade hosts por subredes definida

        $subrede = (int)($ultOct / $intervalo);
        //subrede que o ip se encontra

        $primeiroEnderecoRede = $subrede * $intervalo;

        $prihost = $primeiroEnderecoRede + 1;
        $primeirohost = $priOct. "." . $segOct . "." . $terOct . "." . $prihost . "/" . $mascara;
        //primeiro endereço de host da subrede

        $broadcast = $primeiroEnderecoRede + $intervalo - 1;
        $ipbroadcast = $priOct. "." . $segOct . "." . $terOct . "." . $broadcast . "/" . $mascara;

        $ulthost = ($broadcast - 1);
        $ultimohost = $priOct. "." . $segOct . "." . $terOct . "." . $ulthost . "/" . $mascara;
        //ultimo endereço host da subrede


        //broadcast da subrede

        //classe que o ip pertence
        if ($priOct <= 126 and $priOct >= 1) {
            $classe = "Classe A";
            if ($priOct == 10) {
                $o = "Privado";
            } else {
                $o = "Público";
            }

        } elseif ($priOct <= 191 and $priOct >= 128) {
            $classe = "Classe B";
            if ($priOct == 172 and $segOct >= 16 and $segOct <= 31) {
                $o = "Privado";
            } else {
                $o = "Público";
            }
        } elseif ($priOct <= 223 and $priOct >= 192) {
            $classe = "Classe C";
            if ($priOct == 192 and $segOct == 168) {
                $o = "Privado";
            } else {
                $o = "Público";
            }
        } elseif ($priOct <= 239 and $priOct >= 224) {
            $classe = "Classe D";
            $o = "Público";
        } elseif ($priOct <= 255 and $priOct >= 240) {
            $classe = "Classe E";
            $o = "Público";
        }

        echo "IP = ".$ip.". A rede possui ".$qntdsubrede." subredes, ".$qntendsubrede." endereços por subrede e ".$hosts." hosts por subrede.
         O primeiro endereço de host onde o endereço de IP se encontra é ".$primeirohost.", o último é ". $ultimohost." e 
         o endereço de broadcast é ".$ipbroadcast.". A máscara de rede em decimal é ".$mascaraA.". A classe do ip é ".$classe." e 
         é um endereço ".$o.".";
    }

    calculos($mascara,$priOct,$segOct, $terOct, $ultOct, $bits);