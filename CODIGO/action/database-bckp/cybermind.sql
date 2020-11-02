-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 02-Nov-2020 às 15:10
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cybermind`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `material`
--

CREATE TABLE `material` (
  `id` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `preco` varchar(6) NOT NULL,
  `descricao_simples` varchar(175) NOT NULL,
  `descricao` varchar(300) NOT NULL,
  `nome_imagem` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `material`
--

INSERT INTO `material` (`id`, `nome`, `preco`, `descricao_simples`, `descricao`, `nome_imagem`) VALUES
(1, 'LOGICA', '24', 'GDGSDGDG', 'SGDGSDG', ''),
(2, 'LOGICA', '24', 'GDGSDGDG', 'SGDGSDG', '6dd524ceca71f9610f4949c3a1cc1ed6.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `usuario_id` int(5) NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `nome` varchar(15) NOT NULL,
  `sobrenome` varchar(35) NOT NULL,
  `email` varchar(45) NOT NULL,
  `data_cadastro` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`usuario_id`, `usuario`, `senha`, `nome`, `sobrenome`, `email`, `data_cadastro`) VALUES
(29, 'aaaa', '827ccb0eea8a706c4c34a16891f84e7b', 'aaa', 'aaa', 'aaaaaacom', '2020-11-01 17:35:04'),
(6, 'Jeangomes3', '840d9b7860ad7f6e9023876d26fa21e9', 'Jean', 'Gomes', 'jeansantosx5gmailcom', '2020-10-16 21:53:40'),
(28, 'jose', '827ccb0eea8a706c4c34a16891f84e7b', 'jose', 'silva', 'josejosecom', '2020-11-01 17:34:25'),
(19, 'kelliots', '5b306639e7ed005afa621b5f666cbbd8', 'vitor', 'lima', 'vitorlima16fatecspgovbr', '2020-10-21 13:34:58'),
(27, 'Jaum', '7d0e56c2103c41b66e0f8fb576181cdf', 'JooVitor', 'EvaristodaSilva', 'joaovitordmoutlookcom', '2020-10-27 02:26:10'),
(26, 'Sarah', '81dc9bdb52d04dc20036dbd8313ed055', 'Sarah', 'Santana', 'sarah7bvsgmailcom', '2020-10-24 17:24:00'),
(13, 'Andrereidelas696969', 'b71985397688d6f1820685dde534981b', 'Andr', 'Silva', 'jeanflamengo5hotmailcom', '2020-10-20 13:11:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuario_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `material`
--
ALTER TABLE `material`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usuario_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
