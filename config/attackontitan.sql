-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23-Fev-2021 às 18:25
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `attackontitan`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `titans`
--

CREATE TABLE `titans` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `age` int(4) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `titan` varchar(100) DEFAULT NULL,
  `height` double DEFAULT NULL,
  `height_titan` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `titans`
--

INSERT INTO `titans` (`id`, `name`, `age`, `last_name`, `titan`, `height`, `height_titan`) VALUES
(1, 'marco', 12, 'indefinido', 'mandibula', 1.69, 10),
(4, 'bertholt', 23, 'eldiano', 'colossal', 1.69, 60),
(5, 'reiner', 23, 'braus', 'encouraçado', 1.9, 17),
(6, 'eren', 24, 'yeager', 'martelo de guerra, titan de atack, fundador', 1.69, 17),
(8, 'grisha', 13, 'yeager', 'titan de ataque', 1.65, 17),
(9, 'ymir', 30, 'desconhecido', 'mandibula', 1.7, 8),
(11, 'daniel', 19, 'Rodrigues', 'fundador', 1.65, 17),
(15, 'iiiiiii', 10, 'ertthhyyy', 'mandibula', 1.15, 8);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `titans`
--
ALTER TABLE `titans`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `titans`
--
ALTER TABLE `titans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
