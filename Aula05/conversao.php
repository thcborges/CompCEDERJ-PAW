<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="thcborges, ">
    <meta name="author" content="Thiago da Cunha Borges">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Conversão de tipos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
          integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <!-- <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"> -->
    <!-- <link rel="stylesheet" href=""> -->
</head>
<body>
<div class="container">
    <div>
        <?php
        $var = "4tro";
        settype($var, "integer");
        var_dump($var);
        ?>
    </div>
    <div>
        <?php
        $array = array(null, true, false, 0, 5, 3.8, "0", "10", "6 m", "foo");
        $tipos = array("integer", "boolean", "string", "float", "array");
        ?>
        <table class="table table-striped table-dark">
            <thead>
            <tr>
                <th scope="col">$var</th>
                <th scope="col">(int) $var</th>
                <th scope="col">(bool) $var</th>
                <th scope="col">(string) $var</th>
                <th scope="col">(float) $var</th>
                <th scope="col">(array) $var</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($array as $item): ?>
                <tr>
                    <th scope="row"><?php var_dump($item)?></th>
                    <?php foreach ($tipos as $tipo): ?>
                        <td>
                            <?php
                            $var = $item;
                            settype($var, $tipo);
                            var_dump($var)
                            ?>
                        </td>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div>
        <h3>Conversão Automática</h3>
        <?php
        $var = (int)"100" + 15;
        echo $var."<br>";
        $var = (float)"100" + 15.0;
        var_dump($var);
        echo $var."<br>";
        $var = 39 ." passos";
        echo $var."<br>";
        $var = 39 + (int)" passos";
        echo $var."<br>";
        $var = 40 + (int)"1 ladrão";
        echo $var."<br>";
        ?>
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
