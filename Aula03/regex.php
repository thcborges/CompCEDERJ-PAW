<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="thcborges, ">
    <meta name="author" content="Thiago da Cunha Borges">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Expressões Regulares</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
          integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <!-- <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"> -->
    <!-- <link rel="stylesheet" href=""> -->
</head>
<body>
<div class="container mt-5">
    <h1>Expressões Regulares</h1>
    <p>
        // o ereg foi descontinuado a partir do PHP 7.0 <br>
        // Para o uso das expressões regulares é necessário usar os delimitadores "/" para o inicio e fim da expressão.
    </p>
    <?php
    // Para o uso das expressões regulares é necessário usar os delimitadores "/" para o inicio e fim da expressão.
    $patterns = [
        "/^[A-Z].*/",                   // String iniciada com letra maiuscula
        "/^[0-9]{5}(\-[0-9]{3})?$/",    // Teste de CEP
        "/^.+@.+\.com$/"                // String parecida com email. contendo @ e terminada com .com
    ];
    // o ereg foi descontinuado a partir do PHP 7.0
    $strings = [
            "O gato pulou do telhado",
            "21920-030",
            "21920",
            "xpto@company.com"
    ];
    ?>

    <?php foreach ($patterns as $pattern): ?>
        <div class="row">
        <?php foreach ($strings as $string):  ?>
                <div class="col-md m-1 <?php echo preg_match($pattern, $string) ? "bg-success" : "bg-danger" ?>">
                    $patern:
                    <strong class="text-white">
                        <?php echo $pattern ?>
                    </strong> <br>
                    $string:
                    <strong class="text-white">
                        <?php echo $string ?>
                    </strong> <br>
                    preg_match($pattern, $string):
                    <strong class="<?php echo preg_match($pattern, $string) ? "text-warning" : "text-muted" ?>">
                        <?php var_dump(preg_match($pattern, $string)) ?>
                    </strong>
                </div>
        <?php endforeach; ?>
        </div>
    <?php endforeach; ?>
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
