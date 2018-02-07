<!DOCTYPE html>
<?php
isset($_REQUEST["n"]) ? $var = $_GET["n"] : $var = false;
isset($_REQUEST["menu"]) ? $menu = $_REQUEST["menu"]: $menu = "";
?>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="thcborges, ">
    <meta name="author" content="Thiago da Cunha Borges">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Condicionais</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
          integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <!-- <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"> -->
    <!-- <link rel="stylesheet" href=""> -->
</head>
<body>
<div class="container mt-5">
    <?php if (!$menu): ?>
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link active" href="#">Active</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>
        </ul>
    <?php else: ?>
    <?php endif; ?>
    <div class="alert <?php $var ? $alert = "alert-success" : $alert = "alert-dark"; echo $alert; ?>">
        <?php if ($var): ?>
        <?php
        if ($var < 5)
            echo "Valor menor que 5";
        elseif ($var < 10)
            echo "Valor entre 5 e 10";
        else
            echo "Valor maior que 10";
        ?>
        <?php else: ?>
            <form action="condicionais.php" method="get">
                <div class="form-group">
                    <label for="numero">Digite um número: </label>
                    <input type="number" class="form-control" id="numero" value="5" name="n">
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        <?php endif; ?>

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
