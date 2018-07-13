<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>JobProgramathions</title>

    <link rel="stylesheet" href="stilo.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script>
        $(document).ready(function(){
            $("#botao").click(function () {
                    var pri = $('#pri').val();
                    var seg = $('#seg').val();
                    var ter = $('#ter').val();
                    var qua = $('#ult').val();
                    var mas = $('#mascara').val();
                $.post("functions.php",
                    {
                        priOct : pri, segOct : seg, terOct : ter, ultOct : qua, mascara : mas
                    },
                    function (data) {
                        $("#conteudo").html(data);
                    });
                });
            });

    </script>

</head>
<body>

<h1>Calcule o seu endereço IP aqui</h1>
<div id="input">
    <form method="post" id="formulario">
        <input type="number"  name="priOct" id="pri">.
        <input type="number" name="segOct" id="seg">.
        <input type="number" name="terOct" id="ter">.
        <input type="number" name="ultOct" id="ult">/
        <input type="number" min="24" max="32" name="mascara" id="mascara">
        <input type="button" id="botao" value="enviar">
    </form>
</div>
    <div id="conteudo">


    </div>

</body>
</html>