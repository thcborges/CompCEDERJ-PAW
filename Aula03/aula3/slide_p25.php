<html>
<head>
<title> PHP: Express\&otilde;es Regulares </title>
</head>
<body>
<?php 
  echo preg_match("^[A-Z].*", "O gato pulou do telhado"), "<br>";
  echo preg_match("^[A-Z].*", "O"), "<br>";
  echo preg_match("^[A-Z].*", ""), "<br>";
  echo preg_match("^[0-9]{5}(\-[0-9]{3})?$","21920-030"), "<br>";
  echo preg_match("^[0-9]{5}(\-[0-9]{3})?$","21920"), "<br>";
  echo preg_match("^[0-9]{5}(\-[0-9]{3})?$","A2192"), "<br>";
  echo preg_match("^[0-9]{5}(\-[0-9]{3})?$","30000"), "<br>";
?>
</body>
</html>

