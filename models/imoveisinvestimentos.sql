-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 29-Maio-2019 às 13:44
-- Versão do servidor: 5.7.26
-- versão do PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imoveisinvestimentos`
--
CREATE DATABASE IF NOT EXISTS `imoveisinvestimentos` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `imoveisinvestimentos`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `apartamento`
--

DROP TABLE IF EXISTS `apartamento`;
CREATE TABLE IF NOT EXISTS `apartamento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imovel_id` int(11) DEFAULT NULL,
  `a_venda` tinyint(1) DEFAULT NULL,
  `quartos` int(11) DEFAULT NULL,
  `banheiro` int(11) NOT NULL DEFAULT '1',
  `suites` int(11) DEFAULT NULL,
  `salas` int(11) DEFAULT NULL,
  `cozinha` int(11) DEFAULT NULL,
  `varanda` int(11) DEFAULT NULL,
  `hall_social` int(11) DEFAULT NULL,
  `area_de_servico` tinyint(1) DEFAULT NULL,
  `elevador` tinyint(1) DEFAULT NULL,
  `salao_de_festa` tinyint(1) DEFAULT NULL,
  `piscina` tinyint(1) DEFAULT NULL,
  `academia` tinyint(1) DEFAULT NULL,
  `bicicletario` tinyint(1) DEFAULT NULL,
  `garagem` tinyint(1) DEFAULT NULL,
  `estacionamento` tinyint(1) DEFAULT NULL,
  `salao_de_jogos` tinyint(1) DEFAULT NULL,
  `quadra_poliesportiva` tinyint(1) DEFAULT NULL,
  `intertfone` tinyint(1) DEFAULT NULL,
  `cameras` tinyint(1) DEFAULT NULL,
  `portaria` tinyint(1) DEFAULT NULL,
  `portoes_eletronicos` tinyint(1) DEFAULT NULL,
  `area_privativa` float DEFAULT NULL,
  `area_comuns` float DEFAULT NULL,
  `area_total` float DEFAULT NULL,
  `descricao` text,
  `localizacao` text,
  PRIMARY KEY (`id`),
  KEY `imovel_id` (`imovel_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `apartamento`
--

INSERT INTO `apartamento` (`id`, `imovel_id`, `a_venda`, `quartos`, `banheiro`, `suites`, `salas`, `cozinha`, `varanda`, `hall_social`, `area_de_servico`, `elevador`, `salao_de_festa`, `piscina`, `academia`, `bicicletario`, `garagem`, `estacionamento`, `salao_de_jogos`, `quadra_poliesportiva`, `intertfone`, `cameras`, `portaria`, `portoes_eletronicos`, `area_privativa`, `area_comuns`, `area_total`, `descricao`, `localizacao`) VALUES
(1, 1, 1, 3, 1, 2, 2, 1, 1, 1, 1, 1, 1, 1, 0, 0, 1, 0, 1, 1, 1, 1, 1, 1, 60.5, 321.65, 382.15, 'Apartamento luxuoso legal', 'barra');

-- --------------------------------------------------------

--
-- Estrutura da tabela `casa`
--

DROP TABLE IF EXISTS `casa`;
CREATE TABLE IF NOT EXISTS `casa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imovel_id` int(11) DEFAULT NULL,
  `a_venda` tinyint(1) DEFAULT NULL,
  `quartos` int(11) DEFAULT NULL,
  `banheiro` int(11) NOT NULL DEFAULT '1',
  `suites` int(11) DEFAULT NULL,
  `salas` int(11) DEFAULT NULL,
  `cozinha` int(11) DEFAULT NULL,
  `varanda` int(11) DEFAULT NULL,
  `hall_social` int(11) DEFAULT NULL,
  `area_de_servico` tinyint(1) DEFAULT NULL,
  `condominio` tinyint(1) DEFAULT NULL,
  `pavimentos` int(11) DEFAULT NULL,
  `area_terreno` float DEFAULT NULL,
  `area_construida` float DEFAULT NULL,
  `area_total` float DEFAULT NULL,
  `descricao` text,
  `localizacao` text,
  PRIMARY KEY (`id`),
  KEY `imovel_id` (`imovel_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `casa`
--

INSERT INTO `casa` (`id`, `imovel_id`, `a_venda`, `quartos`, `banheiro`, `suites`, `salas`, `cozinha`, `varanda`, `hall_social`, `area_de_servico`, `condominio`, `pavimentos`, `area_terreno`, `area_construida`, `area_total`, `descricao`, `localizacao`) VALUES
(2, 2, 0, 6, 1, 4, 5, 2, 0, 0, 1, 1, 0, 3, 402.8, 200, 'casa gigantesca', 'vilas do atlantico');

-- --------------------------------------------------------

--
-- Estrutura da tabela `img_imovel`
--

DROP TABLE IF EXISTS `img_imovel`;
CREATE TABLE IF NOT EXISTS `img_imovel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imovel_id` int(11) DEFAULT NULL,
  `nome_arquivo` varchar(255) DEFAULT NULL,
  `data` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `imovel_id` (`imovel_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `img_imovel`
--

INSERT INTO `img_imovel` (`id`, `imovel_id`, `nome_arquivo`, `data`) VALUES
(1, 24, '../imgs/d60e0c8d1c31042331c655b33447f203.jpg', '2019-05-25 21:26:03'),
(2, 25, '../imgs/1186bc6881f9a9b7dcb0a079af9acf3a.png', '2019-05-25 21:26:52'),
(3, 26, '../imgs/76448bf3900154f6d1a3e3cbb85f80c0.png', '2019-05-25 21:31:34'),
(4, 27, '../imgs/6e4f4eaa8442d0d1427963271919e59e.jpg', '2019-05-25 21:34:13'),
(5, 27, '../imgs/6e4f4eaa8442d0d1427963271919e59e.jpeg', '2019-05-25 21:34:13'),
(6, 27, '../imgs/6e4f4eaa8442d0d1427963271919e59e.png', '2019-05-25 21:34:13');

-- --------------------------------------------------------

--
-- Estrutura da tabela `imovel`
--

DROP TABLE IF EXISTS `imovel`;
CREATE TABLE IF NOT EXISTS `imovel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL,
  `destaque` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=59 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `imovel`
--

INSERT INTO `imovel` (`id`, `titulo`, `destaque`) VALUES
(58, 'Loja 4', NULL),
(57, 'Loja 3', NULL),
(56, 'Loja 2', NULL),
(55, 'Loja 1', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `loja`
--

DROP TABLE IF EXISTS `loja`;
CREATE TABLE IF NOT EXISTS `loja` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imovel_id` int(11) DEFAULT NULL,
  `tem_mezzanino` tinyint(1) DEFAULT NULL,
  `frente_rua` tinyint(1) DEFAULT NULL,
  `shopping` tinyint(1) DEFAULT NULL,
  `centro_comercial` tinyint(1) DEFAULT NULL,
  `tipo_de_rua` int(11) DEFAULT NULL,
  `area` float DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `imovel_id` (`imovel_id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `loja`
--

INSERT INTO `loja` (`id`, `imovel_id`, `tem_mezzanino`, `frente_rua`, `shopping`, `centro_comercial`, `tipo_de_rua`, `area`) VALUES
(27, 58, 1, 1, 1, 1, 1, 4),
(26, 57, 1, 0, 1, 1, 0, 2),
(25, 56, 1, 1, 1, 1, 1, 2),
(24, 55, 2, 1, 1, 1, 1, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sala`
--

DROP TABLE IF EXISTS `sala`;
CREATE TABLE IF NOT EXISTS `sala` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imovel_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `merchant_id` int(11) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `imovel_id` (`imovel_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `terreno`
--

DROP TABLE IF EXISTS `terreno`;
CREATE TABLE IF NOT EXISTS `terreno` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imovel_id` int(11) DEFAULT NULL,
  `a_venda` tinyint(1) DEFAULT NULL,
  `tipo_de_rua` int(11) DEFAULT NULL,
  `tem_muro` tinyint(1) DEFAULT NULL,
  `tem_vegetacao` tinyint(1) DEFAULT NULL,
  `area_testada` float DEFAULT NULL,
  `area_profundidade` float DEFAULT NULL,
  `area_total` float DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `imovel_id` (`imovel_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `terreno`
--

INSERT INTO `terreno` (`id`, `imovel_id`, `a_venda`, `tipo_de_rua`, `tem_muro`, `tem_vegetacao`, `area_testada`, `area_profundidade`, `area_total`) VALUES
(1, 4, 1, 2, 0, 1, 32, 4, 40);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
