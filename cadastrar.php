<?php

include_once 'conexao.php';

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dist/ui/trumbowyg.min.css">
    <title>Editar Contrato</title>
</head>

<body>
    <a href="cadastrar.php">Cadastrar</a><br>
    <a href="index.php">Listar</a><br><br>

    <h2>Cadastrar Clausulas</h2>

     <!-- insercao no banco de dados teste  -->

    <?php

        $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
         var_dump($dados);

    ?>



    <form method="POST" action="">

        <label>Titulo</label>

        <input type="text" name="titulo" id="titulo" placeholder="Titulo Artigo"><br><br>

        <label>Termos do Contrato</label>

        <textarea name="conteudo" id="trumbowyg-editor" cols="30" rows="5" placeholder="Conteúdo do Artigo"></textarea><br><br>


        <input type="submit" value="Cadastrar" name="SendCadArtigo">

    </form>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <script src="dist/trumbowyg.min.js"></script>

    <script>
        $('#trumbowyg-editor').trumbowyg({
            btns: [
                ['undo', 'redo'], // Only supported in Blink browsers
                ['formatting'],
                ['strong', 'em', 'del'],
                ['superscript', 'subscript'],
                ['link'],
                ['insertImage'],
                ['justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull'],
                ['unorderedList', 'orderedList'],
                ['horizontalRule'],
                ['removeformat'],
                ['fullscreen']
            ],
            autogrow: true
        });
    </script>





</body>

</html>