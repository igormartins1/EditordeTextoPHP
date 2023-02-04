<?php

include_once 'conexao.php';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Contrato</title>
</head>
<body>
    <a href="cadastrar.php">Cadastrar</a><br>
    <a href="index.php">Listar</a><br><br>

    <h2>Listar Artigos</h2>


    <?php
        $query_artigos = "SELECT ID, titulo, conteudo, data FROM artigos ORDER BY ID DESC";
        $result_artigos = $conn->prepare($query_artigos);
        $result_artigos->execute();
    
        while($row_artigos = $result_artigos->fetch(PDO::FETCH_ASSOC)){
            extract($row_artigos);
            echo "ID: $ID <br>";
            echo "Titulo: $titulo <br>";
            echo "Conteúdo: $conteudo <br>";
            echo "<hr>";
        }

    ?>

</body>
</html>