<?php

$mysqli = new mysqli("localhost", "thcborges", "123456", "paw");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo "thcborges em ". $mysqli->host_info . "\n";

if ($result = $mysqli->query("show databases")) {
    var_dump($result->fetch_all());
}

if ($result = $mysqli->query("show tables")) {
    var_dump($result->fetch_all());
}

if ($use = $mysqli->query("use paw")) {
    echo "Tabela cliente: \n";
    if ($result = $mysqli->query("show columns from cliente"))
        var_dump($result->fetch_all());
    echo "Tabela conta: \n";
    if ($result = $mysqli->query("show columns from conta"))
        var_dump($result->fetch_all());
    echo "Tabela possui: \n";
    if ($result = $mysqli->query("show columns from possui"))
        var_dump($result->fetch_all());

    if ($result = $mysqli->query(
        "CREATE TABLE test (a INT NOT NULL AUTO_INCREMENT,
                                  b VARCHAR(20) DEFAULT '**',
                                  c DATETIME DEFAULT '2001-01-01 00:00:00',
                                  PRIMARY KEY (a));")) {
        echo "Tabela test criada.\n";
    }
    if ($result = $mysqli->query("INSERT INTO test (a, b, c) VALUES (NULL, \"abc\", \"1958-02-28 23:00:00\")")) {
        echo "valores inserido.\n";
    }
    if ($result = $mysqli->query("SELECT * FROM test")) {
        var_dump($result);
    }
    if ($result = $mysqli->query("DROP TABLE test;")){
        echo "Tabela test apagada.\n";
    }
};
