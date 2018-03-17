SELECT * FROM cliente;

SELECT nome
FROM cliente
WHERE nome LIKE "%Pereira";

SELECT nome, numconta
FROM cliente, possui
WHERE id=idcliente
ORDER BY numconta;

SELECT nome, numconta, saldo
FROM cliente, possui, conta
WHERE id=idcliente
      AND numconta=numero;

SELECT nome, numconta
FROM cliente
INNER JOIN possui ON id=idcliente;

SELECT nome, numconta, saldo
FROM cliente
INNER JOIN possui ON id=idcliente
INNER JOIN conta ON numconta=numero
ORDER BY saldo;

SELECT nome, numconta
FROM cliente
LEFT JOIN possui ON id=idcliente;

SELECT c1.nome, c2.nome
FROM cliente c1, cliente c2
WHERE c1.endereco=c2.endereco
AND c1.nome < c2.nome;

SELECT nome, endereco
FROM cliente
ORDER BY nome;

SELECT nome, endereco
FROM cliente
WHERE endereco LIKE "Rua%"
ORDER BY endereco;

SELECT nome, numconta
FROM cliente, possui
WHERE id = idcliente
GROUP BY nome;

SELECT nome, COUNT(*) AS qtdContas
FROM cliente, possui
WHERE id=idcliente
GROUP BY nome;

SELECT nome, AVG(saldo) AS saldo
FROM cliente, possui, conta
WHERE id = idcliente
AND numconta = numero
GROUP BY nome;

SELECT AVG(saldo) FROM conta;

SELECT nome, AVG(saldo)
FROM cliente, possui, conta
WHERE id = idcliente
AND numero = numconta
GROUP BY nome
HAVING COUNT(*) > 1;

CREATE TABLE cliente_saldo (nome VARCHAR(50), saldo DECIMAL(16,2));

INSERT INTO cliente_saldo (nome, saldo)
SELECT nome, AVG(saldo)
FROM cliente, possui, conta
WHERE id = idcliente
AND numconta = numero
GROUP BY nome;

SELECT * FROM cliente_saldo;
