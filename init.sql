CREATE DATABASE IF NOT EXISTS luz_inga_dev;
USE luz_inga_dev;
CREATE TABLE `cliente` (
  `id` int NOT NULL AUTO_INCREMENT,
  `empresa` varchar(100),
  `nome` varchar(100),
  `email` varchar(100),
  `telefone` varchar(100),
  `endereco` varchar(150),
  `cidade` varchar(150),
  `descricao` text,
  `lista` varchar(150),
  PRIMARY KEY (id)
);