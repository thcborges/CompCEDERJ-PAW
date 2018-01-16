<!DOCTYPE html>
<html lang="pt_br">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="">
  <meta name="keywords" content="thcborges, ">
  <meta name="author" content="Thiago da Cunha Borges">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Strings</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <!-- <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"> -->
  <!-- <link rel="stylesheet" href=""> -->
</head>
<body>
<?php // Diferença entre ' e "
$string1 = "Hello, World";
$string2 = 'Hello, World';
echo '$string1: ' . $string1 . '<br>';
echo '$string2: ' . $string2 . '<br>';
echo $string1 == $string2 ? "As strings são iguais.<br>" : "As strings são diferentes.<br>";

$idade = 12;
$resut1 = "$idade";
$resut2 = '$idade';
echo "$resut1<br>";
echo $resut2 . "<br>";

$string1 = "string entre \naspas";
$string2 = 'string entre \napos';
echo $string1 . "<br>";
echo $string2 . "<br>";

$idade = 10;
$string1 = "Há '$idade' pessoas";
$string1 = "Há \"$idade\" pessoas";
$string2 = 'Há "$idade" pessoas';
echo $string1, "<br>\n";
echo "$string2<br>";
?>
<?php // Concatenação
$string1 = "Hello";
$string2 = "World!";
$string = $string1 . ", " . $string2 . "<br>";
echo $string;

$string = "Hello,";
$string .= " World!";
echo $string . "<br>";
?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>
