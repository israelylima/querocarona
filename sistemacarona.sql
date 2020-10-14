-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 14-Out-2020 às 13:41
-- Versão do servidor: 10.4.10-MariaDB
-- versão do PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sistemacarona`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `motorista`
--

DROP TABLE IF EXISTS `motorista`;
CREATE TABLE IF NOT EXISTS `motorista` (
  `idmotorista` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `dt` varchar(10) DEFAULT NULL,
  `destinomotorista` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idmotorista`)
) ENGINE=MyISAM AUTO_INCREMENT=60 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `motorista`
--

INSERT INTO `motorista` (`idmotorista`, `nome`, `dt`, `destinomotorista`) VALUES
(57, 'Israely', '2020-10-16', 'Russas, CE'),
(58, 'Clara', '2020-10-22', 'Palhano, CE'),
(59, 'Isabely', '2020-10-22', 'Mossoró, RN');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `idusuario` int(3) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `dt` date DEFAULT NULL,
  `destino` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idusuario`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nome`, `dt`, `destino`) VALUES
(14, 'Bela', '2020-10-21', 'Canindé, CE'),
(17, 'Baia', '2020-10-16', 'Russas, CE');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
