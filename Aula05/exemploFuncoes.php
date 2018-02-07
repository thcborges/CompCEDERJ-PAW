<?php include "funcoes.php"?>
<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="thcborges, ">
    <meta name="author" content="Thiago da Cunha Borges">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Exemplo de Funções</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
          integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <!-- <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"> -->
    <!-- <link rel="stylesheet" href=""> -->
</head>
<body>
<div class="container">
    <div>
        <?php
        display_logo();
        format_nome();
        echo "$nome";
        formatNome();
        ?>
    </div>
    <div>
        <?php
        echo calcula_soma(20, 30), "<br>";
        echo calcula_soma(20*20, 32+2), "<br>";
        //        echo calcula_soma(), "<br>";   // O PHP 7 não aceita mais não passar os valores por parâmetro

        ?>
    </div>
    <div>
        <?php
        echo calculaSoma(20, 30), "<br>";
        echo calculaSoma(20*20, 32+2), "<br>";
        echo calculaSoma(), "<br>";

        ?>
    </div>
    <div>
        <?php
        $numeros = array(10, 20, 30, 40, 50);
        somaArray($numeros);
        ?>
    </div>
    <div>
        <?php
        $var1 = 5;
        echo $var1. "<br>";
        dobro($var1);
        echo "dobro($var1)<br>";
        echo $var1. "<br>";
        ?>
    </div>
    <div>
        <?php
        $x = 5;
        $y = &$x;
        $x++;
        echo $x."<br>";
        echo $y."<br>";
        ?>
    </div>
    <div>
        <h3>soma.inc</h3>
        <?php
        include "soma.inc";
        $result = soma(20, 34);
        echo $result;
        ?>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
        integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
        integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1"
        crossorigin="anonymous"></script>
</body>
</html>
