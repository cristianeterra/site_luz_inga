CREATE DATABASE IF NOT EXISTS luz_inga_dev;
USE luz_inga_dev;
CREATE TABLE `orcamento` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_usuario` int,
  `id_produto` int,
  `descricao` varchar(150),
  `efetivado` BOOLEAN, 
  PRIMARY KEY (id),
  FOREIGN KEY (id_usuario) REFERENCES usuario(id),
	FOREIGN KEY (id_produto) REFERENCES produto(id)
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
  `receberpromocao` BOOLEAN NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
);

CREATE TABLE `produto` (
  `id` int NOT NULL AUTO_INCREMENT, 
  `nome` varchar(100), 
  `tipo` varchar(100),
  `foto` varchar(100),
  PRIMARY KEY (`id`)
);

INSERT INTO `usuario` (`login`, `senha`) VALUES ( 'usuario1', 'senha1');

INSERT INTO `produto` (`nome`, `tipo`, `foto`) VALUES ( 'Lustre moderno de madeira', 'lustres', 'lustre.png');
INSERT INTO `produto` (`nome`, `tipo`, `foto`) VALUES ( 'Lustre moderno Led', 'lustres', 'lustre2.png');
INSERT INTO `produto` (`nome`, `tipo`, `foto`) VALUES ( 'Lustre de madeira Gota', 'lustres', 'lustre3.png');

INSERT INTO `produto` (`nome`, `tipo`, `foto`) VALUES ( 'Luminária com madeira', 'luminarias', 'luminaria1.png');
INSERT INTO `produto` (`nome`, `tipo`, `foto`) VALUES ( 'Luminária preta', 'luminarias', 'luminaria2.png');
INSERT INTO `produto` (`nome`, `tipo`, `foto`) VALUES ( 'Luminária rosé', 'luminarias', 'luminaria3.png');

INSERT INTO `produto` (`nome`, `tipo`, `foto`) VALUES ( 'Fita de Led RGB', 'lampadas', 'lampada1.png');
INSERT INTO `produto` (`nome`, `tipo`, `foto`) VALUES ( 'Lâmpada retrô', 'lampadas', 'lampada2.png');
INSERT INTO `produto` (`nome`, `tipo`, `foto`) VALUES ( 'Lâmpada inteligente RGB', 'lampadas', 'lampada3.png');

INSERT INTO `produto` (`nome`, `tipo`, `foto`) VALUES ( 'Interruptor duplo', 'acessorios', 'acessorio1.png');
INSERT INTO `produto` (`nome`, `tipo`, `foto`) VALUES ( 'Disjuntor 10a', 'acessorios', 'acessorio2.png');
INSERT INTO `produto` (`nome`, `tipo`, `foto`) VALUES ( 'Fio de 2,5mm', 'acessorios', 'acessorio3.png');

