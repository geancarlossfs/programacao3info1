<html>
<head>
    <title></title>
    <link rel="stylesheet" href="programathions/app/assets/abas.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

    <script>
        $(document).ready(function () {

            $("#aba1").click(function () {
                $("#aba1").toggleClass("selecionado");

                //guardo o valor da id de quem eu cliquei
                var meuId = $(this).attr("id");
                //uso o valor para chamar a classe
                $("."+meuId).toggle();
            });

            $("#aba2").click(function () {
                $("#aba2").toggleClass("selecionado");

                //guardo o valor da id de quem eu cliquei
                var meuId = $(this).attr("id");
                //uso o valor para chamar a classe
                $("."+meuId).toggle();
            });

            $("#aba3").click(function () {
                $("#aba3").toggleClass("selecionado");

                //guardo o valor da id de quem eu cliquei
                var meuId = $(this).attr("id");
                //uso o valor para chamar a classe
                $("."+meuId).toggle();
            });

        });

    </script>

</head>
<body>

<div id="abas">
        <ul>
            <?php foreach ($categorias as $categoria): ?>
                <li id="aba<?= $categoria->getId()?> "><?= $categoria->getNome()?></li>
            <?php endforeach; ?>
        </ul>
</div>

<div id="conteudos">

<!--    aqui vai um foreach para os produtos o leo e viado-->
<!--    cada produto sera uma div-->
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