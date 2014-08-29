-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 
-- Versão do Servidor: 5.5.25a
-- Versão do PHP: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Banco de Dados: `fishbox`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria_perguntas`
--

DROP TABLE IF EXISTS `categoria_perguntas`;
CREATE TABLE IF NOT EXISTS `categoria_perguntas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(245) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `categoria_perguntas`
--

INSERT INTO `categoria_perguntas` (`id`, `nome`) VALUES
(1, 'Historia'),
(2, 'Geografia'),
(3, 'Artes'),
(4, 'Ciencia'),
(5, 'Entretenimento'),
(6, 'Esportes');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cupoms`
--

DROP TABLE IF EXISTS `cupoms`;
CREATE TABLE IF NOT EXISTS `cupoms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lote_cupoms_id` int(11) NOT NULL,
  `data_criacao` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `grupos`
--

DROP TABLE IF EXISTS `grupos`;
CREATE TABLE IF NOT EXISTS `grupos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `dataCadastro` datetime DEFAULT NULL,
  `idUsuarioCadastro` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogadores`
--

DROP TABLE IF EXISTS `jogadores`;
CREATE TABLE IF NOT EXISTS `jogadores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `codigo_cupom` varchar(32) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Extraindo dados da tabela `jogadores`
--

INSERT INTO `jogadores` (`id`, `nome`, `codigo_cupom`) VALUES
(1, 'sdfaggsd', 'teste2fdgsdgsdfgsdfg'),
(2, 'Nome Teteto 2', '12435234523452345'),
(3, 'Nome Teteto 3', '12435234523452345'),
(4, 'dfhgdfhgdfg', 'hdfhgdfd'),
(5, 'dfhgdfhgdfg45y6erytertertert', 'hdfhgdfd'),
(6, 'yyyyyy', 'yyyyyyy'),
(7, 'esresresre', 'reaer'),
(8, 'awawaa', 'ewawaaea'),
(9, 'bigode2', '1112312');

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogos`
--

DROP TABLE IF EXISTS `jogos`;
CREATE TABLE IF NOT EXISTS `jogos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `uri` varchar(254) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `descricao` varchar(254) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `jogos`
--

INSERT INTO `jogos` (`id`, `nome`, `uri`, `descricao`) VALUES
(1, 'tfttd', 'dddtdd', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `lote_cupoms`
--

DROP TABLE IF EXISTS `lote_cupoms`;
CREATE TABLE IF NOT EXISTS `lote_cupoms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data_criacao` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pergunta_respostas`
--

DROP TABLE IF EXISTS `pergunta_respostas`;
CREATE TABLE IF NOT EXISTS `pergunta_respostas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria_perguntas_id` int(11) NOT NULL,
  `nome` varchar(245) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `pergunta_respostas`
--

INSERT INTO `pergunta_respostas` (`id`, `categoria_perguntas_id`, `nome`) VALUES
(1, 0, 'dsafasfas'),
(2, 0, 'dfgsdfg'),
(3, 0, 'fgherthert'),
(4, 0, 'fgherthert'),
(5, 0, 'sdfgsdfgsdf'),
(6, 0, 'rrrrrr'),
(7, 0, 'Qual o nome do meu gato?');

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `body` text CHARACTER SET utf8 COLLATE utf8_bin,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `created`, `modified`) VALUES
(1, 'teste', 0x7676767676, '2014-08-15 04:07:50', '2014-08-17 14:13:39'),
(2, 'kiuhiugig', 0x696975676967696769, '2014-08-16 23:34:01', '2014-08-16 23:34:01'),
(3, 'sdfgsdfg', 0x7364666773646667, '2014-08-17 14:13:28', '2014-08-17 14:13:28'),
(4, 'wrtwertw', 0x6572747765727477, '2014-08-25 00:41:06', '2014-08-25 00:41:06');

-- --------------------------------------------------------

--
-- Estrutura da tabela `premios`
--

DROP TABLE IF EXISTS `premios`;
CREATE TABLE IF NOT EXISTS `premios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `descricao` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `localRetirada` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `premios`
--

INSERT INTO `premios` (`id`, `nome`, `descricao`, `localRetirada`) VALUES
(1, 'adfasdfasdf', 'asdfasdfasdf', 'asdfasdfasdfasdfasdf'),
(2, 'nome layour', 'carteira', 'casa maluca'),
(3, 'Nome do PrÃªmio 01', 'alsdjfn asldf asd jfas', 'casa 123'),
(4, 'Nome do prÃªmio', 'descriÃ§Ã£o ', 'loja do prÃªmio 222');

-- --------------------------------------------------------

--
-- Estrutura da tabela `respostas`
--

DROP TABLE IF EXISTS `respostas`;
CREATE TABLE IF NOT EXISTS `respostas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pergunta_respostas_id` int(11) NOT NULL,
  `resposta` varchar(245) DEFAULT NULL,
  `correta` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `respostas`
--

INSERT INTO `respostas` (`id`, `pergunta_respostas_id`, `resposta`, `correta`) VALUES
(1, 2, NULL, NULL),
(2, 4, NULL, NULL),
(3, 0, 'teste1', NULL),
(4, 0, 'testye2', 1),
(5, 0, 'teste3', NULL),
(6, 0, 'teste4', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `created`, `modified`, `nome`, `email`, `cpfCnpj`) VALUES
(1, 'teste', '$2a$10$hBDINV.jGf/ksiAVYmKyPe9r.v.K.4RNUW4/F.vMc4zTkR/P.PWK6', NULL, '2014-08-17 03:20:01', '2014-08-17 03:20:01', 'Nome 01', 'asdasd@asdas.com', '654564454'),
(2, 'iguiguiguigu', '$2a$10$xTDDMoDXIKTKGb9qUh/gUeaEkyxq34uDlmQx6gZ33O911KwO/gb4O', NULL, '2014-08-17 03:21:02', '2014-08-17 03:21:02', 'hiugigigi', 'gigig@asdasd.com', 'gigiugigig'),
(3, 'teste', '$2a$10$kdovJ/cN7alCKbRhOVS7C.j1ccQe7qSegh6v/cx1qeDxCBWYqzyaG', NULL, '2014-08-26 01:51:23', '2014-08-26 01:51:23', 'teste', 'asdsad@asd.com', '2222222'),
(4, 'nome', '$2a$10$cDyfCiC1xD93wWS/CsiYku.O2znan/EO6R32x4QDrev8qW8wMjgkm', NULL, '2014-08-26 03:29:26', '2014-08-26 03:29:26', 'nome', 'asdasd@asdasd.com', '02114578787'),
(5, 'nome', '$2a$10$c2Jgu.TwcyYxvZXzvNobBe64J8pYG0f/tqsOWMao4pKQp1ymCnE8O', NULL, '2014-08-29 03:38:54', '2014-08-29 03:38:54', 'nome', 'asdasd@asdas.com', '656567');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
