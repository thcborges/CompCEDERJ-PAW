<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="thcborges, ">
    <meta name="author" content="Thiago da Cunha Borges">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Entrada de dados com form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
          integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <!-- <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"> -->
    <!-- <link rel="stylesheet" href=""> -->
</head>
<body>
<div class="container">
    <form action="pegaEntrada.php" method="get">
        <div class="form-group">
            <label for="assunto">Entre com o assunto:</label>
            <input type="text" name="assunto" value="Todos" class="form-control" id="assunto">
            <small class="form-text text-muted">Digite Todos para ver todos os assuntos</small>
            <label for="ano">Ano:</label>
            <input type="number" min="1900" max="2018" name="ano" id="ano">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary">
        </div>
    </form>
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
