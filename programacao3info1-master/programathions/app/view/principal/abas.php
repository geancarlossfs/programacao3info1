<html>
<head>
    <title></title>
    <link rel="stylesheet" href="programathions/app/assets/abas.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

    <script>
        $(document).ready(function () {
            //
            // $("#aba1").click(function () {
            //     $("#aba1").toggleClass("selecionado");
            //
            //     //guardo o valor da id de quem eu cliquei
            //     var meuId = $(this).attr("id");
            //     //uso o valor para chamar a classe
            //     $("."+meuId).toggle();
            // });
            //
            // $("#aba2").click(function () {
            //     $("#aba2").toggleClass("selecionado");
            //
            //     //guardo o valor da id de quem eu cliquei
            //     var meuId = $(this).attr("id");
            //     //uso o valor para chamar a classe
            //     $("."+meuId).toggle();
            // });
            //
            // $("#aba3").click(function () {
            //     $("#aba3").toggleClass("selecionado");
            //
            //     //guardo o valor da id de quem eu cliquei
            //     var meuId = $(this).attr("id");
            //     //uso o valor para chamar a classe
            //     $("."+meuId).toggle();
            // });

            $("li").click(function () {
                var meuId = $(this).attr("id");


                $("."+meuId).toggle();
            });

            $(".titulo").click(function () {
                var elemPai = $(this).parent();

                elemPai.find(".descricao").toggle();
            })

        });

    </script>

</head>
<body>

<div id="abas">
        <ul>
            <?php foreach ($categorias as $categoria): ?>
                <li id="aba<?= $categoria->getId()?>"><?= $categoria->getNome()?></li>
            <?php endforeach; ?>
        </ul>


</div>

<div id="conteudos"> Relação dos produtos

<!--    aqui vai um foreach para os produtos-->
<!--    cada produto sera uma div-->
    <?php foreach ($produtos as $produto): ?>
        <div class="conteudo aba<?= $produto->getIdcategoria();?>">
            <div class="titulo">  <?= $produto->getNome();?>  </div>
            <div class="descricao">  <?= $produto->getDescricao();?>  </div>
        </div>
    <?php endforeach; ?>
</div>

</body>
</html>