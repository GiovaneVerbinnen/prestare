-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25-Nov-2020 às 02:49
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `prestare`
--
CREATE DATABASE IF NOT EXISTS `prestare`;
USE `prestare`;
-- --------------------------------------------------------

--
-- Estrutura da tabela `itens`
--

CREATE TABLE `itens` (
  `item_id` int(32) NOT NULL,
  `data_cadastro` datetime(6) NOT NULL,
  `item` varchar(32) NOT NULL,
  `mutuante` varchar(32) NOT NULL,
  `mutuario` varchar(32) NOT NULL,
  `data_devolucao` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `itens`
--

INSERT INTO `itens` (`item_id`, `data_cadastro`, `item`, `mutuante`, `mutuario`, `data_devolucao`) VALUES
(1, '2020-11-20 00:44:19.000000', 'caneta azul', 'giovane', 'fabio', '2020-11-22 03:56:14.000000'),
(2, '2020-11-02 01:13:03.000000', 'bolo', 'Maria', 'giovane', '2020-11-22 03:56:53.000000'),
(16, '2020-11-24 20:07:14.000000', 'mascara', 'giovane', 'MATHEUS', '0000-00-00 00:00:00.000000');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoas`
--

CREATE TABLE `pessoas` (
  `userID` int(11) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `userLogin` varchar(10) NOT NULL,
  `userPassword` varchar(32) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pessoas`
--

INSERT INTO `pessoas` (`userID`, `userName`, `userLogin`, `userPassword`, `admin`) VALUES
(1, 'Giovane', 'giovane', '240380', 0),
(2, 'admin', 'admin', 'admin', 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `itens`
--
ALTER TABLE `itens`
  ADD PRIMARY KEY (`item_id`);

--
-- Índices para tabela `pessoas`
--
ALTER TABLE `pessoas`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `userLogin` (`userLogin`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `itens`
--
ALTER TABLE `itens`
  MODIFY `item_id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `pessoas`
--
ALTER TABLE `pessoas`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
