-- FORMAS BÁSICAS:

SHOW DATABASES;

USE paw;

SHOW TABLES;

SHOW COLUMNS  FROM cliente;

SHOW COLUMNS FROM possui;

SHOW COLUMNS FROM conta;

SHOW STATUS;

SHOW INDEX FROM cliente;

SHOW INDEX FROM possui;

SHOW INDEX FROM conta;

CREATE DATABASE teste;

USE teste;

CREATE TABLE tabela1 (a INT, b CHAR(10));

CREATE TABLE tabela2 (x INT, y DECIMAL(20,3));

SHOW TABLES;


-- REMOVENDO BANCO DE DADOS E TABELAS:

DROP TABLE tabelA2;

DROP DATABASE teste;


-- ALTERANDO TABELAS:

USE paw;

CREATE TABLE test (a INT, b CHAR(10));

ALTER TABLE test ADD COLUMN (c TIMESTAMP);

ALTER TABLE test DROP COLUMN b;

SHOW COLUMNS FROM test;


-- INSERINDO DADOS NA TABELA:

DROP TABLE test;

CREATE TABLE test (
  a INT NOT NULL AUTO_INCREMENT,
  b VARCHAR(20) DEFAULT '**',
  c DATETIME DEFAULT '2001-01-01 00:00:00',
  PRIMARY KEY (a)
);

INSERT INTO paw.test VALUES ();

INSERT INTO paw.test SET paw.test.c = 951225190000;

INSERT INTO paw.test (a, b, c) VALUES (NULL, "abc", "1958-02-28 23:00:00");

SELECT * FROM paw.test;

INSERT INTO paw.test VALUES ();

SELECT LAST_INSERT_ID();


-- COMANDO SELECT:

SELECT a, b FROM paw.test;

SELECT CONCAT(1+3*LOG(2), " xyz");

SELECT 1>0 AND 2>1;

-- CLAUSULA WHERE:

SELECT * FROM paw.test;

SELECT b FROM paw.test WHERE A > 2;

SELECT a FROM paw.test WHERE b < "b" OR a > 2;


-- REMOVENDO REGISTROS:

DROP TABLE paw.test;

CREATE TABLE test (
  a INT,
  b CHAR(20)
);

INSERT INTO test VALUES (1, "a"), (2, "b"), (3, "c");

SELECT * FROM paw.test;

DELETE  FROM paw.test WHERE paw.test.b = 'b';

SELECT * FROM paw.test;

DELETE FROM paw.test;

SELECT * FROM paw.test;


-- ATUALIZANDO TABELAS:

INSERT INTO test VALUES (1, "a"), (2, "b"), (3, "c");

UPDATE paw.test SET paw.test.a = paw.test.a + 1, paw.test.b = UPPER(paw.test.b);

UPDATE paw.test SET paw.test.a = 99 WHERE paw.test.b = "B";

SELECT * FROM paw.test;
