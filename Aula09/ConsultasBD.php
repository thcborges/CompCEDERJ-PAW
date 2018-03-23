<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="thcborges, ">
    <meta name="author" content="Thiago da Cunha Borges">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Consultas a Banco de Dados</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
          integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <!-- <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"> -->
    <!-- <link rel="stylesheet" href=""> -->
</head>
<body>
<pre>
    <?php
    echo "Neste exemplo, quando você clicou no botão <abrir navegador>, uma tabela
    chamada cliente foi criada, com atributos: id, nome e endereço. Para repetir 
    este exemplo, fora do contexto da aula, á necessário criar esta tabela manualmente
    no servidor mysql.\n\n";

    // (1) abrir conexão com o mysql no servidor remoto ao PHP
    $con = mysqli_connect($_SERVER["REMOTE_ADDR"], "thcborges", "123456");

    // selecionar banco de dados
    mysqli_select_db($con, "paw");

    // (2) consulta ao bd paw sobre tabela cliente
    $res = mysqli_query($con,"SELECT * FROM cliente");

    // (3) recupera linhas da tabela
    while ($row = mysqli_fetch_row($res)) {
        // (4) imprime valores de atributos
        $str = sprintf("%2d: %-30s - %-30s\n", $row[0], $row[1], $row[2]);
        echo $str;
    }

    echo "\n\n\n";

    $res = mysqli_query($con, "SELECT * FROM cliente");
//    while ($field = mysqli_fetch_field($res))
//        var_dump($field->name);

    print str_pad("Field", 20).str_pad("Type", 14).str_pad("Null", 6).str_pad("Key", 5).str_pad("Extra", 12)."\n";
    $fields = array();
    for ($i=0; $i < mysqli_num_fields($res); $i++) {
        $info = mysqli_fetch_field($res);
        $fields[] = $info->name;
        print str_pad($info->name, 20);
        print str_pad($info->type, 6);
        print str_pad("(".$info->max_length.")", 8);

//        if ($info->not_null != 1) print "YES";
//        else print str_pad("", 6);

//        if ($info->primary_key == 1) print "PRI";
//        elseif ($info->multiple_key == 1) print "MUL";
//        elseif ($info->unique_key == 1) print "UNI";

//        if ($info->zerofill) print "Zero filled";
        print "\n";
    }
    $title = sprintf("%2s | %-30s | %-30s\n", $fields[0], $fields[1], $fields[2]);
    echo $title;
    while ($row = mysqli_fetch_object($res)) {
        $str = sprintf("%2s | %-30s | %-30s\n", $row->id, $row->nome, $row->endereco);
        echo $str;
    }

    // (5) fechar conexão
    mysqli_close($con);
    ?>
</pre>
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
