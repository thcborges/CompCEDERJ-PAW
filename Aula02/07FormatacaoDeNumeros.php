<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="thcborges, ">
    <meta name="author" content="Thiago da Cunha Borges">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Formatação de números</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <!-- <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"> -->
    <!-- <link rel="stylesheet" href=""> -->
</head>
<body>
<?php
// sprintf
$preco = 25;
$fpreco = sprintf("%01.2f", $preco);
echo "$fpreco<br>";
// number_format
$preco = 25000;
$fpreco = number_format($preco);
echo "$fpreco <br>";
// na aula a professora fala de formas de alterar o formato do número
// segue abaixo como separar:
$valor_inteiro = 25000;
$quantidade_casas_decimais = 2;
$separador_decimal = ",";
$separador_milhar = ".";
$fpreco = number_format($valor_inteiro, $quantidade_casas_decimais, $separador_decimal, $separador_milhar);
echo "$fpreco<br>";

echo "<p>Veja mais <a href='http://php.net/manual/pt_BR/function.number-format.php' target='_blank'>clicando aqui</a></p>";
?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>