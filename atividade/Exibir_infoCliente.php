<?php

    $nome = 0;
    $genero = 0;
    $telefone = 0;
    $endereco = 0;
    $cidade = 0;
    $estado = 0;
    $pais = 0;
    $rg= 0;
    $cpf = 0;
    $sus = 0;
    


    if(isset($_POST["bt_nome"])){

        $nome = $_POST["bt_nome"];
        $genero = $_POST["bt_genero"];
        $telefone = $_POST["bt_telefone"];
        $endereco = $_POST["bt_endereco"];
        $cidade = $_POST["bt_cidade"];
        $estado = $_POST["bt_estado"];
        $pais = $_POST["bt_pais"];
        $rg = $_POST["bt_rg"];
        $cpf = $_POST["bt_cpf"];
        $sus = $_POST["bt_sus"];
        

        echo("O nome recebido foi : " . $nome);
        echo("<br>");
        echo("O gênero recebido foi : " . $genero);
        echo("<br>");
        echo("O telefone recebido foi : " . $telefone);
        echo("<br>");
        echo("O endereço recebido foi : " . $endereco);
        echo("<br>");
        echo("O cidade recebido foi : " . $cidade);
        echo("<br>");
        echo("O estado recebido foi : " . $estado);
        echo("<br>");
        echo("O país recebido foi : " . $pais);
        echo("<br>");
        echo("O RG recebido foi : " . $rg);
        echo("<br>");
        echo("O CPF recebido foi : " . $cpf);
        echo("<br>");
        echo("O SUS recebido foi : " . $sus);
        echo("<br>");
       
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente</title>
</head>
<body>
    <h1>Resultado</h1>
    <a href="cliente.php">Voltar</a>
    
</body>
</html>