<html>
<head>
<title> PHP: Arrays, list </title>
</head>
<body>
<p> Exemplo de utiliza&ccedil;&atilde;o de arrays, list <br>
<?php
//   $tshirtinfo = array("Tam"=>"g","cor"=>"azul","preco"=>12.00);
//   asort($tshirtinfo);
//   list($primvalor,$segvalor) = $tshirtinfo;
//   echo $primvalor,"<br>";
//   echo $segvalor,"<br>";

   echo 'Este exemplo não devolve valores para as
   variáveis $primvalor e $segvalor porque a construção
   list somente funciona em arrays com &iacute;ndices
   numéricos. Havia um erro no exemplo original de onde este
   programa foi retirado. Veja o resultado abaixo, com o mesmo exemplo
   com o array indexado com ídices numéricos: <br><br>';

   $tshirtinfo = array("g","azul",12.00);
   sort($tshirtinfo);
   list($primvalor,$segvalor) = $tshirtinfo;
   echo $primvalor,"<br>";
   echo $segvalor,"<br>";

?>
</body>
</html>
