CREATE DATABASE IF NOT EXISTS luz_inga_dev;
USE luz_inga_dev;
CREATE TABLE `orcamento` (
  `id` int NOT NULL AUTO_INCREMENT,
  `descricao` varchar(150),
  PRIMARY KEY (id)
);

CREATE TABLE `usuario` (
  `id` int NOT NULL AUTO_INCREMENT, 
  `nome` varchar(100),
  `email` varchar(100),
  `telefone` varchar(100),
  `endereco` varchar(150),
  `cidade` varchar(150),
  `login` varchar (100), 
  `senha` varchar(100), 
  PRIMARY KEY (`id`)
);

CREATE TABLE `produto` (
  `id` int NOT NULL AUTO_INCREMENT, 
  `nome` varchar(100), 
  PRIMARY KEY (`id`)
);