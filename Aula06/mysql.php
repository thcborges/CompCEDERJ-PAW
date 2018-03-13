<?php
// Conectando ao MySQL
$mysqli = new mysqli("localhost", "root", "");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "\n";

// Criando banco de dados
if (!$mysqli->query("CREATE DATABASE IF NOT EXISTS `teste`;")) {
    echo "Falha ao criar o BANCO DE DADOS: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
} else {
    echo "BANCO DE DADOS criado com sucesso\n";
}

// Criando permissões para usuário
if (!$mysqli->query("CREATE USER IF NOT EXISTS 'thcborges'@'localhost' IDENTIFIED BY '123456';")) {
    echo "Usuário não foi criado thcborges criado\n";
} else {
    echo "Usuário thcborges criado\n";
}
if (!$mysqli->query("GRANT ALL ON paw.* TO 'thcborges'@'localhost'")) {
    echo "Previlégios não concedidos a thcborges\n";
} else {
    echo "Previlégios concedidos a thcborges\n";
}
if (!$mysqli->query("GRANT ALL ON paw.* TO 'thcborges'@'%' IDENTIFIED BY '123456'")) {
    echo "Previlégios não concedidos a thcborges\n";
} else {
    echo "Previlégios concedidos a thcborges\n";
}


$mysqli = new mysqli("localhost", "thcborges", "123456", "paw");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo "thcborges em ". $mysqli->host_info . "\n";

if (!$mysqli->query(
    "CREATE TABLE IF NOT EXISTS cliente (
	id INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(50) NOT NULL,
    endereco VARCHAR(80),
    PRIMARY KEY (id),
    KEY nomecliente(nome)
)"
)) {
    echo "Tabela cliente não criada: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error . "\n";
} else {
    echo "Tabela cliente criada" . "\n";
}
if (!$mysqli->query(
    "CREATE TABLE IF NOT EXISTS conta (
	numero INT NOT NULL AUTO_INCREMENT,
    saldo DECIMAL(16,2) DEFAULT 0.0,
    PRIMARY KEY (numero)
)"
)) {
    echo "Tabela conta não criada: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error . "\n";
} else {
    echo "Tabela conta criada" . "\n";
}
if (!$mysqli->query(
    "CREATE TABLE IF NOT EXISTS possui (
	idcliente INT NOT NULL,
    numconta INT,
    PRIMARY KEY (idcliente, numconta)
);"
)) {
    echo "Tabela possui não criada: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error . "\n";
} else {
    echo "Tabela possui criada" . "\n";
}
