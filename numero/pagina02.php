<?php

    $numero1 = 0;
    $numero2 = 0;

    if(isset($_POST["bt_numero1"])){

        $numero1 = $_POST["bt_numero1"];
        $numero2 = $_POST["bt_numero2"];

        echo("O número recebido foi : " . $numero1);
        echo("<br>");
        echo("O número recebido foi : " . $numero2);
    }





    if($numero1 > $numero2){
        echo("<h2>");
            echo ("O $numero1 é maior");
        echo("</h2>");
    }elseif ($numero2> $numero1){
        echo("<h2>");
            echo ("O $numero2 é maior");
        echo("</h2>");
    }else{
        echo("<h2>");
            echo("O $numero1 e $numero2 são iguais");
        echo("</h2>");    
    }


    
    
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tabela</title>
</head>
<body>
    <h1>Resultado</h1>
    <a href="form.php">Voltar</a>
    
</body>
</html>