<html>
<head>
    <title></title>
    <link rel="stylesheet" href="../../assets/abas.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

    <script>
        $(document).ready(function () {
//            //para testar se funciona o jquery
//            alert("funcionou")
        $("#abas ul li").click(function () {
            $("#abas ul li").removeClass("selecionado");
            $(this).addClass("selecionado");
            $(".conteudo").hide();
            //guardo o valor da id de quem eu cliquei
            var meuId = $(this).attr("id");
            //uso o valor para chamar a classe
            $("."+meuId).show();
        });
    });

    </script>

</head>
<body>

<div id="abas">
        <ul>
            <li id="aba1">Aba 1 </li>
            <li id="aba2">Aba 2</li>
            <li id="aba3">Aba 3</li>
        </ul>
</div>

<div id="conteudos">
    <div class="conteudo aba1">
        Conteudo da Aba 1
    </div>

    <div class="conteudo aba2">
        Conteudo da Aba 2
    </div>

    <div class="conteudo aba3">
        Conteudo da Aba 3
    </div>
</div>

</body>
</html>