<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="thcborges, ">
    <meta name="author" content="Thiago da Cunha Borges">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="refresh" content="1">
    <title>Arrays</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
          integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <!-- <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"> -->
    <!-- <link rel="stylesheet" href=""> -->
</head>
<body>
<div class="container m-5 mb-5">
<?php
echo "<div class='row'>";
$numeros = array(5, 4, 3, 2, 1);
$palavras = array("Web", "Database", "Applications");
// Escrever o terceiro elemento do array
echo "<div class='col alert alert-success'>$numeros[2]</div>";  // Escreve o número 3
// Escrever o primeiro elemento do array de strings
echo "<div class='col alert alert-success'>$palavras[0]</div>";  // Escreve a palavra Web
echo "</div>";

echo "<div class='row'>";
$numeros = array(1=> "um", "dois", "três", "quatro");
echo "<pre class='col alert alert-primary'><code>";
var_dump($numeros);
echo "</code></pre>";

$animal[] = "tigre";
$animal[] = "girafa";
$animal[] = "elefante";
echo "<pre class='col alert alert-primary'><code>";
var_dump($animal);
echo "</code></pre>";
echo "</div>";

echo "<div class='row'>";
$moeda = array("BR"=>"Real", "EUA"=>"dolar");
echo "<pre class='col alert alert-primary'><code>";
var_dump($moeda);
echo "</code></pre>";
echo "<p class='col alert alert-warning'>A unidade monetária brasileira é o <strong>{$moeda["BR"]}</strong></p>";
echo "<pre class='col alert alert-primary'><code>";
print_r($moeda);
echo "</code></pre>";
echo "</div>";

echo "<div class='row'>";
$moeda['EUA'] = "";
echo "<pre class='col alert alert-primary'><code>";
print_r($moeda);
echo "</code></pre>";

unset($moeda['EUA']);
echo "<pre class='col alert alert-primary'><code>";
print_r($moeda);
echo "</code></pre>";
echo "</div>";

echo "<div class='row'>";
echo "<pre class='col alert alert-primary'><code>";
print_r($animal);
echo "</code></pre>";
// Ordenação de arrays com chaves numéricas
sort($animal);
echo "<pre class='col alert alert-primary'><code>sort()<br>";
print_r($animal);
echo "</code></pre>";

// Ordenação reversa de arrays com chaves numéricas
rsort($animal);
echo "<pre class='col alert alert-primary'><code>rsort()<br>";
print_r($animal);
echo "</code></pre>";

$moeda['EUA'] = "Dólar";
// Oredenação de arrays com chaves alfanuméricas
asort($moeda);
echo "<pre class='col alert alert-primary'><code>asort()<br>";
print_r($moeda);
echo "</code></pre>";

// Oredenação reversa de arrays com chaves alfanuméricas
arsort($moeda);
echo "<pre class='col alert alert-primary'><code>arsort()<br>";
print_r($moeda);
echo "</code></pre>";
echo "</div>";

echo "<div class='row'>";
// Ordenação das chaves do array
ksort($moeda);
echo "<pre class='col alert alert-primary'><code>ksort()<br>";
print_r($moeda);
echo "</code></pre>";

// Ordenação reversa das chaves do array
krsort($moeda);
echo "<pre class='col alert alert-primary'><code>krsort()<br>";
print_r($moeda);
echo "</code></pre>";

// usort() ordena a partir de uma funçào de ordenação indicada pelo programador

echo "</div>";

echo "<div class='row'>";

$tshirtinfo = array("g","azul",12.00);
sort($tshirtinfo);
list($primvalor, $segvalor) = $tshirtinfo;
echo "<p class='col alert alert-secondary'>$primvalor<br>$segvalor<br></p>";

$Tam = "m";
$tshirtinfo = array(
    "Tam" => "g",
    "cor" => "azul",
    "preco" => 12.00
);
asort($tshirtinfo);
extract($tshirtinfo, EXTR_PREFIX_SAME, "xxx");
echo "<p class='col alert alert-dark'>", $Tam, " ", $cor, " ", $preco, " ", $xxx_Tam, "</p>";

echo "</div>";

echo "<div class='row'>";
$capitais = array("PA"=>"Belem","AM"=>"Manaus","PI"=>"Teresina");
ksort($capitais);
foreach ($capitais as $estado => $cidade)
{
    echo "<p class='col alert alert-danger'>$cidade, $estado</p>";
}
echo "</div>";

echo "<div class='row justify-content-center'>";

$prod['roupa']['tshirt'] = 12.00;
$prod['roupa']['calças'] = 32.00;
$prod['cama']['colcha'] = 45.00;
$prod['cama']['lençol'] = 22.00;
$prod['móvel']['mesa'] = 120.00;
$prod['móvel']['sofa'] = 640.00;

echo '<pre class=\'alert alert-primary\'><code>';
print_r($prod);
echo '</code></pre>';

echo "<table class='ml-5 table table-striped table-dark table-bordered w-50'>";
echo "<tr><th scope='col' class='text-center'>Produto</th><th scope='col' class='text-center'>Preço</th></tr>";
foreach ($prod as $categoria) {
    foreach ($categoria as $produto => $preco) {
        $f_preco = sprintf("%01.2f", $preco);
        echo "<tr><td class='text-center'>$produto</td><td class='text-center'>R$$f_preco</td></tr>";
    }
}
echo "</table>";

echo "</div>";


?>
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
