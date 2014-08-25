-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.5.25a - MySQL Community Server (GPL)
-- OS do Servidor:               Win32
-- HeidiSQL Versão:              8.3.0.4694
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Copiando estrutura do banco de dados para fishbox
DROP DATABASE IF EXISTS `fishbox`;
CREATE DATABASE IF NOT EXISTS `fishbox` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `fishbox`;


-- Copiando estrutura para tabela fishbox.categoria_perguntas
DROP TABLE IF EXISTS `categoria_perguntas`;
CREATE TABLE IF NOT EXISTS `categoria_perguntas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(245) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela fishbox.categoria_perguntas: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `categoria_perguntas` DISABLE KEYS */;
INSERT INTO `categoria_perguntas` (`id`, `nome`) VALUES
	(1, 'Historia'),
	(2, 'Geografia'),
	(3, 'Artes'),
	(4, 'Ciencia'),
	(5, 'Entretenimento'),
	(6, 'Esportes');
/*!40000 ALTER TABLE `categoria_perguntas` ENABLE KEYS */;


-- Copiando estrutura para tabela fishbox.cupoms
DROP TABLE IF EXISTS `cupoms`;
CREATE TABLE IF NOT EXISTS `cupoms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lote_cupoms_id` int(11) NOT NULL,
  `data_criacao` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cupoms_lote_cupoms_idx` (`lote_cupoms_id`),
  CONSTRAINT `fk_cupoms_lote_cupoms` FOREIGN KEY (`lote_cupoms_id`) REFERENCES `lote_cupoms` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela fishbox.cupoms: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `cupoms` DISABLE KEYS */;
/*!40000 ALTER TABLE `cupoms` ENABLE KEYS */;


-- Copiando estrutura para tabela fishbox.grupos
DROP TABLE IF EXISTS `grupos`;
CREATE TABLE IF NOT EXISTS `grupos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `dataCadastro` datetime DEFAULT NULL,
  `idUsuarioCadastro` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela fishbox.grupos: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `grupos` DISABLE KEYS */;
/*!40000 ALTER TABLE `grupos` ENABLE KEYS */;


-- Copiando estrutura para tabela fishbox.jogadores
DROP TABLE IF EXISTS `jogadores`;
CREATE TABLE IF NOT EXISTS `jogadores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `codigo_cupom` varchar(32) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela fishbox.jogadores: ~8 rows (aproximadamente)
/*!40000 ALTER TABLE `jogadores` DISABLE KEYS */;
INSERT INTO `jogadores` (`id`, `nome`, `codigo_cupom`) VALUES
	(1, 'sdfaggsd', 'teste2fdgsdgsdfgsdfg'),
	(2, 'Nome Teteto 2', '12435234523452345'),
	(3, 'Nome Teteto 3', '12435234523452345'),
	(4, 'dfhgdfhgdfg', 'hdfhgdfd'),
	(5, 'dfhgdfhgdfg45y6erytertertert', 'hdfhgdfd'),
	(6, 'yyyyyy', 'yyyyyyy'),
	(7, 'esresresre', 'reaer'),
	(8, 'awawaa', 'ewawaaea');
/*!40000 ALTER TABLE `jogadores` ENABLE KEYS */;


-- Copiando estrutura para tabela fishbox.jogos
DROP TABLE IF EXISTS `jogos`;
CREATE TABLE IF NOT EXISTS `jogos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `uri` varchar(254) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `descricao` varchar(254) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela fishbox.jogos: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `jogos` DISABLE KEYS */;
INSERT INTO `jogos` (`id`, `nome`, `uri`, `descricao`) VALUES
	(1, 'tfttd', 'dddtdd', NULL);
/*!40000 ALTER TABLE `jogos` ENABLE KEYS */;


-- Copiando estrutura para tabela fishbox.lote_cupoms
DROP TABLE IF EXISTS `lote_cupoms`;
CREATE TABLE IF NOT EXISTS `lote_cupoms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data_criacao` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela fishbox.lote_cupoms: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `lote_cupoms` DISABLE KEYS */;
/*!40000 ALTER TABLE `lote_cupoms` ENABLE KEYS */;


-- Copiando estrutura para tabela fishbox.pergunta_respostas
DROP TABLE IF EXISTS `pergunta_respostas`;
CREATE TABLE IF NOT EXISTS `pergunta_respostas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria_perguntas_id` int(11) NOT NULL,
  `nome` varchar(245) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_pergunta_respostas_categoria_idx` (`categoria_perguntas_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela fishbox.pergunta_respostas: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `pergunta_respostas` DISABLE KEYS */;
INSERT INTO `pergunta_respostas` (`id`, `categoria_perguntas_id`, `nome`) VALUES
	(1, 0, 'dsafasfas'),
	(2, 0, 'dfgsdfg'),
	(3, 0, 'fgherthert'),
	(4, 0, 'fgherthert'),
	(5, 0, 'sdfgsdfgsdf'),
	(6, 0, 'rrrrrr');
/*!40000 ALTER TABLE `pergunta_respostas` ENABLE KEYS */;


-- Copiando estrutura para tabela fishbox.posts
DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `body` text CHARACTER SET utf8 COLLATE utf8_bin,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela fishbox.posts: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` (`id`, `title`, `body`, `created`, `modified`) VALUES
	(1, 'teste', 'vvvvv', '2014-08-15 04:07:50', '2014-08-17 14:13:39'),
	(2, 'kiuhiugig', 'iiugigigi', '2014-08-16 23:34:01', '2014-08-16 23:34:01'),
	(3, 'sdfgsdfg', 'sdfgsdfg', '2014-08-17 14:13:28', '2014-08-17 14:13:28'),
	(4, 'wrtwertw', 'ertwertw', '2014-08-25 00:41:06', '2014-08-25 00:41:06');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;


-- Copiando estrutura para tabela fishbox.premios
DROP TABLE IF EXISTS `premios`;
CREATE TABLE IF NOT EXISTS `premios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `descricao` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `localRetirada` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela fishbox.premios: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `premios` DISABLE KEYS */;
INSERT INTO `premios` (`id`, `nome`, `descricao`, `localRetirada`) VALUES
	(1, 'adfasdfasdf', 'asdfasdfasdf', 'asdfasdfasdfasdfasdf'),
	(2, 'nome layour', 'carteira', 'casa maluca'),
	(3, 'Nome do PrÃªmio 01', 'alsdjfn asldf asd jfas', 'casa do capeta');
/*!40000 ALTER TABLE `premios` ENABLE KEYS */;


-- Copiando estrutura para tabela fishbox.respostas
DROP TABLE IF EXISTS `respostas`;
CREATE TABLE IF NOT EXISTS `respostas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pergunta_respostas_id` int(11) NOT NULL,
  `resposta` varchar(245) DEFAULT NULL,
  `correta` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_respostas_pergunta_respostas1_idx` (`pergunta_respostas_id`),
  CONSTRAINT `fk_respostas_pergunta_respostas1` FOREIGN KEY (`pergunta_respostas_id`) REFERENCES `pergunta_respostas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela fishbox.respostas: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `respostas` DISABLE KEYS */;
INSERT INTO `respostas` (`id`, `pergunta_respostas_id`, `resposta`, `correta`) VALUES
	(1, 2, NULL, NULL),
	(2, 4, NULL, NULL);
/*!40000 ALTER TABLE `respostas` ENABLE KEYS */;


-- Copiando estrutura para tabela fishbox.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `role` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `nome` varchar(150) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `email` varchar(150) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `cpfCnpj` varchar(150) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela fishbox.users: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `username`, `password`, `role`, `created`, `modified`, `nome`, `email`, `cpfCnpj`) VALUES
	(1, 'teste', '$2a$10$hBDINV.jGf/ksiAVYmKyPe9r.v.K.4RNUW4/F.vMc4zTkR/P.PWK6', NULL, '2014-08-17 03:20:01', '2014-08-17 03:20:01', 'Nome 01', 'asdasd@asdas.com', '654564454'),
	(2, 'iguiguiguigu', '$2a$10$xTDDMoDXIKTKGb9qUh/gUeaEkyxq34uDlmQx6gZ33O911KwO/gb4O', NULL, '2014-08-17 03:21:02', '2014-08-17 03:21:02', 'hiugigigi', 'gigig@asdasd.com', 'gigiugigig');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;


-- Copiando estrutura para tabela fishbox.usuario
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `email` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `login` varchar(32) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `password` varchar(32) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `dataCadastro` datetime DEFAULT NULL,
  `dataAlteracao` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela fishbox.usuario: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
