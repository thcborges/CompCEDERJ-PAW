<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="thcborges, ">
    <meta name="author" content="Thiago da Cunha Borges">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!--    <meta http-equiv="refresh" content="1">-->
    <title>Date e Operadores Relacionais</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
          integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <!-- <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"> -->
    <!-- <link rel="stylesheet" href=""> -->
</head>
<body class="m-5">
<div class="container">
    <h1>Date e Operadores Relacionais</h1>
<!--    --><?php //date_default_timezone_set("America/Sao_Paulo"); ?>
    <h2 class="bg-primary text-center p-3">
        date_default_timezone_get(): <strong><?php echo date_default_timezone_get();?></strong>
    </h2>
    <?php $timestamp = date("D d/m/Y H:i:s"); ?>
    <p class="mt-4">
        <strong>date("D d/m/Y H:i:s")</strong>
        <?php echo $timestamp; ?>
    </p>
    <p>
        <a href="http://php.net/manual/pt_BR/function.date.php" class="btn btn-success" target="_blank">
            Link para formatar a função date()
        </a>
    </p>
    <p>
        Hoje em segundos, contados a partir de
        <strong>
            <?php echo date("D d/m/Y H:i:s", 0) ?>:
        </strong>
        <br>
        <strong>
            <?php echo strtotime("today") ?>
        </strong>

    </p>
    <p>
        // As transparências desses exemplos estão erradas.<br>
        // Abaixo segue uma implementação melhor para cada exemplo.<br>
        // O HTML é só para melhor visualização no navigador.<br>
    </p>
    <p>
        <strong>
            date("D d/m/Y H:i:s", <span style="color: red">strtotime("now+24hours")</span>):
        </strong>
        <?php echo date("D d/m/Y H:i:s", strtotime("now+24hours")) ?>
    </p>
    <p>
        <strong>
            date("D d/m/Y H:i:s", <span style="color: red">strtotime("last saturday")</span>):
        </strong>
        <?php echo date("D d/m/Y H:i:s", strtotime("last saturday")) ?>
    </p>
    <p>
        <strong>
            date("D d/m/Y H:i:s", <span style="color: red">strtotime("8pm + 3 days")</span>):
        </strong>
        <?php echo date("D d/m/Y H:i:s", strtotime("8pm + 3 days")) ?>
    </p>
    <p>
        <strong>
            date("D d/m/Y H:i:s", <span style="color: red">strtotime("next year gmt")</span>):
        </strong>
        <?php echo date("D d/m/Y H:i:s", strtotime("next year gmt")) ?>
    </p>
    <p>
        <strong>
            date("D d/m/Y H:i:s", <span style="color: red">strtotime("this 4am")</span>):
        </strong>
        <?php echo date("D d/m/Y H:i:s", strtotime("this 4am")) ?>
    </p>
    <p>
        <strong>
            date("D d/m/Y H:i:s", <span style="color: red">strtotime("2 weeks ago")</span>):
        </strong>
        <?php echo date("D d/m/Y H:i:s", strtotime("2 weeks ago")) ?>
    </p>
    <?php
    $hoje = strtotime("today");
    $data = strtotime("last Saturday");
    $intervalo = $hoje - $data;
    ?>

    <p>
        <strong>Intervalo: <span style="color: blue">strtotime("today") - strtotime("last Saturday")</span></strong>
        <?php echo date(
            "D d/m/Y H:i:s",
            strtotime("today") - strtotime("last Saturday")
        ) ?><br>
        <strong>diferença em segundos: </strong>
        <?php echo strtotime("today") - strtotime("last Saturday") ?><br>
        <strong>diferença em em horass: </strong>
        <?php echo (strtotime("today") - strtotime("last Saturday"))/60/60 ?>
    </p>
    <p><a class='btn btn-primary' href="https://secure.php.net/manual/pt_BR/language.operators.php" target='_blank'>Operadores do PHP</a></p>
    <?php
    $idade = 18;
    if ($idade < 13)  // MENOR DE 13!!!! Essas transparências estão muito zoadas!!!
        $status = "menor_de_idade";
    else
        $status = "adulto";
    echo "<p>$status</p>"

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
