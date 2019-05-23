-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 23-Maio-2019 às 15:02
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

-- --------------------------------------------------------

--
-- Estrutura da tabela `img_imovel`
--

DROP TABLE IF EXISTS `img_imovel`;
CREATE TABLE IF NOT EXISTS `img_imovel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_arquivo` varchar(50) NOT NULL,
  `data` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `img_imovel`
--

INSERT INTO `img_imovel` (`id`, `nome_arquivo`, `data`) VALUES
(22, 'f55f15f20f6427703161e1ea8677ea43.png', '2019-05-23 11:20:47'),
(23, '3c5eeac016f6b7fce87829f44a261bf6.png', '2019-05-23 11:24:10'),
(21, '69201de8dfd778fd8ecea28ab7dca041.png', '2019-05-23 11:20:25'),
(17, 'cac64339bad4ed97c6054696cccc9bbbe', '2019-05-23 11:12:34'),
(18, '2283bb1b1f76a7c3038b54a87eca8842e', '2019-05-23 11:12:55'),
(19, '932211e354eb83fe717bea1998411534.jpg', '2019-05-23 11:13:19'),
(20, 'bfbb228c958d7444429719df4c92cf0f.png', '2019-05-23 11:14:21'),
(24, 'fd2932f5c120bee6be30d678b5065115.jpg', '2019-05-23 11:24:30'),
(25, '47be1139de82c1d567e9340597fb5469jpeg', '2019-05-23 11:25:30'),
(26, '29dc3161ec4a9e27a85915cf3d68230a.jpeg', '2019-05-23 11:26:17');

-- --------------------------------------------------------

--
-- Estrutura da tabela `loja`
--

DROP TABLE IF EXISTS `loja`;
CREATE TABLE IF NOT EXISTS `loja` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) DEFAULT NULL,
  `area` int(11) NOT NULL,
  `mezzanino` tinyint(1) NOT NULL,
  `shopping` tinyint(1) NOT NULL,
  `centrocomercial` tinyint(1) NOT NULL,
  `pavimentacao` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `loja`
--

INSERT INTO `loja` (`id`, `titulo`, `area`, `mezzanino`, `shopping`, `centrocomercial`, `pavimentacao`) VALUES
(9, 'loja ', 2, 3, 2, 2, 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
