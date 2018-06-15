-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 15-Jun-2018 às 03:13
-- Versão do servidor: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `academici`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

DROP TABLE IF EXISTS `alunos`;
CREATE TABLE IF NOT EXISTS `alunos` (
  `idalunos` int(11) NOT NULL AUTO_INCREMENT,
  `nome_completo` varchar(80) CHARACTER SET utf8 COLLATE utf8_croatian_ci DEFAULT NULL,
  `data_nascimento` varchar(45) CHARACTER SET utf8 COLLATE utf8_croatian_ci DEFAULT NULL,
  `cpf` varchar(45) CHARACTER SET utf8 COLLATE utf8_croatian_ci DEFAULT NULL,
  `email` varchar(80) CHARACTER SET utf8 COLLATE utf8_croatian_ci DEFAULT NULL,
  `empresa_atual` varchar(45) CHARACTER SET utf8 COLLATE utf8_croatian_ci DEFAULT NULL,
  `cargo_atual` varchar(80) CHARACTER SET utf8 COLLATE utf8_croatian_ci DEFAULT NULL,
  `admissao_ano` year(4) DEFAULT NULL,
  `nivel_cargo` varchar(45) CHARACTER SET utf8 COLLATE utf8_croatian_ci DEFAULT NULL,
  `telefone` int(11) DEFAULT NULL,
  `celular` int(11) DEFAULT NULL,
  `sexo` varchar(45) CHARACTER SET utf8 COLLATE utf8_croatian_ci DEFAULT NULL,
  `rua` varchar(80) CHARACTER SET utf8 COLLATE utf8_croatian_ci DEFAULT NULL,
  `cep` int(11) DEFAULT NULL,
  `bairro` varchar(45) CHARACTER SET utf8 COLLATE utf8_croatian_ci DEFAULT NULL,
  `cidade` varchar(45) CHARACTER SET utf8 COLLATE utf8_croatian_ci DEFAULT NULL,
  `uf` varchar(2) CHARACTER SET utf8 COLLATE utf8_croatian_ci DEFAULT NULL,
  `rg` int(11) DEFAULT NULL,
  `universidade` varchar(80) CHARACTER SET utf8 COLLATE utf8_croatian_ci DEFAULT NULL,
  `curso` varchar(80) CHARACTER SET utf8 COLLATE utf8_croatian_ci DEFAULT NULL,
  `ra` int(11) DEFAULT NULL,
  `data_inicio` int(11) DEFAULT NULL,
  `data_formacao` varchar(45) CHARACTER SET utf8 COLLATE utf8_croatian_ci DEFAULT NULL,
  `usuario` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `section` varchar(80) NOT NULL,
  PRIMARY KEY (`idalunos`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`idalunos`, `nome_completo`, `data_nascimento`, `cpf`, `email`, `empresa_atual`, `cargo_atual`, `admissao_ano`, `nivel_cargo`, `telefone`, `celular`, `sexo`, `rua`, `cep`, `bairro`, `cidade`, `uf`, `rg`, `universidade`, `curso`, `ra`, `data_inicio`, `data_formacao`, `usuario`, `senha`, `section`) VALUES
(1, 'Kaithleen de Andrade', '08051998', '46457039863', 'kaithy@hotmail.com', 'apple', 'Analista', 2010, 'Pleno', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', ''),
(2, 'aaa', '54', '54', '54', '54', '54', 2054, 'Pleno', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', ''),
(3, 'leticia', '2021210', '445412578', '54', 'google', 'lolo', 2012, 'Pleno', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', ''),
(4, 'Lucas', '08051998', '12345678', 'lucas@gmail.com', 'Mc', 'atendente', 2018, 'SupervisÃ£o/CoordenaÃ§Ã£o', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', ''),
(5, 'joana', '44', '4445', '44', '44', '4', 2004, 'TÃ©cnico', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', ''),
(6, 'leticia cintra', '08021997', '44541257831', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'leticia@gmail.com', 'daniela', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
