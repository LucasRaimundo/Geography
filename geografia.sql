-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 30-Nov-2018 às 11:01
-- Versão do servidor: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `geografia`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `prova`
--

DROP TABLE IF EXISTS `prova`;
CREATE TABLE IF NOT EXISTS `prova` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `data` date NOT NULL,
  `nota` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `usuario` varchar(220) NOT NULL,
  `senha` varchar(220) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `usuario`, `senha`) VALUES
(1, 'Denilson Lima', 'denilson174@gmail.com', 'denilson', '$2y$10$6QP0Azc3PT5SahAJe4StDer2tONEU4i94P0xi3FmbRIfw.lUTi7ye'),
(2, 'Fabricio GonÃ§alves Lima', 'denilson.l@ig.com.br', 'f', '$2y$10$E8YbcpO6F4SIMb2Egzq1f.U/YGHkzdhg6gWsyh5YSzigupHDxjk8e'),
(3, 'Denilson Lima', 'denilson@gmail.com', 'denilson12', '$2y$10$4JoxHm7BYIp1u9uCkG3yMuDYfcLmvO9KqICME1OMU/ZbRtpJdFq.C'),
(4, 'banana', 'banana@', 'banana', '$2y$10$uSfozV/3Y3EhS8SpTmlwaec/2qAL0AiqFxx6SC/xzp7eoAlK43U1G'),
(5, 'abacaxi', 'abacaxi', 'abacaxi', '$2y$10$J.HqnzfaNa4DtPcVyic.aeAojavcK0EngagBwisddB4.8O93nbZka'),
(6, 'Lucas', 'lucasraimundo2010@hotmail.com', 'Lucas', '$2y$10$kn3gX0a3cYEnaSGOnY4uSuMWJc/qRbR27dXKprer7DBHU/f1LF/sO'),
(7, 'beiso', 'beiso@hotmail.com', 'beiso', '$2y$10$MXiF9cz5Xwr5BPDnRRZrYOvaywCQNyMSeqMdu9SmQMECLF2fRXxXS'),
(8, 'Gustavo', 'guga@live.com', 'guga', '$2y$10$tDeP81i6zSVRYV0JY94X1eSdJZDkBQCGYscKeUF07A782S6DdlHBq');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
