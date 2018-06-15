-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 15-Jun-2018 às 04:27
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
CREATE DATABASE IF NOT EXISTS `academici` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `academici`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `administracao`
--

DROP TABLE IF EXISTS `administracao`;
CREATE TABLE IF NOT EXISTS `administracao` (
  `idadministracao` int(11) NOT NULL,
  `nome_completo` varchar(45) NOT NULL,
  `cpf` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idadministracao`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Estrutura da tabela `questionario`
--

DROP TABLE IF EXISTS `questionario`;
CREATE TABLE IF NOT EXISTS `questionario` (
  `id_questionario` int(11) NOT NULL AUTO_INCREMENT,
  `pergunta1` varchar(200) CHARACTER SET utf8 COLLATE utf8_croatian_ci DEFAULT NULL,
  `pergunta2` varchar(200) CHARACTER SET utf8 COLLATE utf8_croatian_ci DEFAULT NULL,
  `pergunta3` varchar(200) CHARACTER SET utf8 COLLATE utf8_croatian_ci DEFAULT NULL,
  `pergunta4` varchar(200) CHARACTER SET utf8 COLLATE utf8_croatian_ci DEFAULT NULL,
  `pergunta5` varchar(200) CHARACTER SET utf8 COLLATE utf8_croatian_ci DEFAULT NULL,
  `pergunta6` varchar(200) CHARACTER SET utf8 COLLATE utf8_croatian_ci DEFAULT NULL,
  `pergunta7` varchar(200) CHARACTER SET utf8 COLLATE utf8_croatian_ci DEFAULT NULL,
  `pergunta8` varchar(200) CHARACTER SET utf8 COLLATE utf8_croatian_ci DEFAULT NULL,
  `pergunta9` varchar(200) CHARACTER SET utf8 COLLATE utf8_croatian_ci DEFAULT NULL,
  `pergunta10` varchar(200) CHARACTER SET utf8 COLLATE utf8_croatian_ci DEFAULT NULL,
  `pergunta11` varchar(200) CHARACTER SET utf8 COLLATE utf8_croatian_ci DEFAULT NULL,
  `pergunta12` varchar(200) CHARACTER SET utf8 COLLATE utf8_croatian_ci DEFAULT NULL,
  `pergunta13` varchar(200) CHARACTER SET utf8 COLLATE utf8_croatian_ci DEFAULT NULL,
  `pergunta14` varchar(200) CHARACTER SET utf8 COLLATE utf8_croatian_ci DEFAULT NULL,
  `pergunta15` varchar(200) CHARACTER SET utf8 COLLATE utf8_croatian_ci DEFAULT NULL,
  `pergunta16` varchar(200) CHARACTER SET utf8 COLLATE utf8_croatian_ci DEFAULT NULL,
  `pergunta17` varchar(200) CHARACTER SET utf8 COLLATE utf8_croatian_ci DEFAULT NULL,
  `pergunta18` varchar(200) CHARACTER SET utf8 COLLATE utf8_croatian_ci DEFAULT NULL,
  `pergunta19` varchar(200) CHARACTER SET utf8 COLLATE utf8_croatian_ci DEFAULT NULL,
  `pergunta20` varchar(200) CHARACTER SET utf8 COLLATE utf8_croatian_ci DEFAULT NULL,
  `pergunta21` varchar(200) CHARACTER SET utf8 COLLATE utf8_croatian_ci DEFAULT NULL,
  `pergunta22` varchar(200) CHARACTER SET utf8 COLLATE utf8_croatian_ci DEFAULT NULL,
  `pergunta23` varchar(200) CHARACTER SET utf8 COLLATE utf8_croatian_ci DEFAULT NULL,
  PRIMARY KEY (`id_questionario`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `questionario`
--

INSERT INTO `questionario` (`id_questionario`, `pergunta1`, `pergunta2`, `pergunta3`, `pergunta4`, `pergunta5`, `pergunta6`, `pergunta7`, `pergunta8`, `pergunta9`, `pergunta10`, `pergunta11`, `pergunta12`, `pergunta13`, `pergunta14`, `pergunta15`, `pergunta16`, `pergunta17`, `pergunta18`, `pergunta19`, `pergunta20`, `pergunta21`, `pergunta22`, `pergunta23`) VALUES
(1, '2013', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, '2013', '8', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, '2014', '10', 'Sim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, '2014', '10', 'Sim', 'Sim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, '2018', '8', 'Sim', 'Sim', 'Feminino', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, '2018', '10', 'Sim', 'Sim', 'Feminino', 'Abaixo de 21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, '2018', '10', 'Sim', 'Sim', 'Feminino', 'Abaixo de 21', 'NÃ£o procurou um emprego', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, '2013', '10', 'Sim', 'Sim', 'Feminino', 'Abaixo de 21', 'NÃ£o procurou um emprego', 'AgÃªncia do trabalhador', 'Mais fÃ¡cil', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, '2015', '10', 'Sim', 'Sim', 'Feminino', 'Abaixo de 21', 'NÃ£o procurou um emprego', 'AgÃªncia do trabalhador', 'Mais fÃ¡cil', 'Empregado', 'Ãrea vinculada indiretamente Ã  Ã¡rea de graduaÃ§Ã£o', 'Micro(AtÃ© 9 empregrados)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, '2018', '10', 'Sim', 'Sim', 'Feminino', 'Abaixo de 21', 'NÃ£o procurou um emprego', 'AgÃªncia do trabalhador', 'Mais fÃ¡cil', 'Empregado', 'Ãrea vinculada indiretamente Ã  Ã¡rea de graduaÃ§Ã£o', 'Micro(AtÃ© 9 empregrados)', 'DireÃ§Ã£o/GerÃªncia', 'AtÃ© 2 salÃ¡rios (R$ 1.448,00)', 'sim', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, '2018', '10', 'Sim', 'Sim', 'Feminino', 'Abaixo de 21', 'NÃ£o procurou um emprego', 'AgÃªncia do trabalhador', 'Mais fÃ¡cil', 'Empregado', 'Ãrea vinculada indiretamente Ã  Ã¡rea de graduaÃ§Ã£o', 'Micro(AtÃ© 9 empregrados)', 'DireÃ§Ã£o/GerÃªncia', 'AtÃ© 2 salÃ¡rios (R$ 1.448,00)', 'sim', 'EspecializaÃ§Ã£o ou MBA', 'Aumento de salÃ¡rio', 'Estou desempregado e pretendo arrumar um emprego', NULL, NULL, NULL, NULL, NULL),
(14, '2018', '10', 'Sim', 'Sim', 'Feminino', 'Abaixo de 21', 'NÃ£o procurou um emprego', 'AgÃªncia do trabalhador', 'Mais fÃ¡cil', 'Empregado', 'Ãrea vinculada indiretamente Ã  Ã¡rea de graduaÃ§Ã£o', 'Micro(AtÃ© 9 empregrados)', 'DireÃ§Ã£o/GerÃªncia', 'AtÃ© 2 salÃ¡rios (R$ 1.448,00)', 'sim', 'EspecializaÃ§Ã£o ou MBA', 'Aumento de salÃ¡rio', 'Estou desempregado e pretendo arrumar um emprego', 'Sim', 'Extremamente relevante', 'Extremamente relevante', NULL, NULL),
(15, '2015', '9', 'Sim', 'Sim', 'Feminino', 'Abaixo de 21', 'NÃ£o procurou um emprego', 'AgÃªncia do trabalhador', 'Mais fÃ¡cil', 'Empregado', 'Ãrea vinculada indiretamente Ã  Ã¡rea de graduaÃ§Ã£o', 'Micro(AtÃ© 9 empregrados)', 'DireÃ§Ã£o/GerÃªncia', 'AtÃ© 2 salÃ¡rios (R$ 1.448,00)', 'sim', 'EspecializaÃ§Ã£o ou MBA', 'Aumento de salÃ¡rio', 'Estou desempregado e pretendo arrumar um emprego', 'Sim', 'Extremamente relevante', 'Extremamente relevante', '', ''),
(16, '2015', '10', 'Sim', 'Sim', 'Feminino', 'Abaixo de 21', 'NÃ£o procurou um emprego', 'AgÃªncia do trabalhador', 'Mais fÃ¡cil', 'Empregado', 'Ãrea vinculada indiretamente Ã  Ã¡rea de graduaÃ§Ã£o', 'Micro(AtÃ© 9 empregrados)', 'DireÃ§Ã£o/GerÃªncia', 'AtÃ© 2 salÃ¡rios (R$ 1.448,00)', 'sim', 'EspecializaÃ§Ã£o ou MBA', 'Aumento de salÃ¡rio', 'Estou desempregado e pretendo arrumar um emprego', 'Sim', 'Extremamente relevante', 'Extremamente relevante', 'lasjdl', 'aslÃ§dkÃ§as'),
(17, 'Selecione a resposta', '10', 'Sim', 'Sim', 'Feminino', 'Abaixo de 21', 'NÃ£o procurou um emprego', 'AgÃªncia do trabalhador', 'Mais fÃ¡cil', 'Empregado', 'Ãrea vinculada indiretamente Ã  Ã¡rea de graduaÃ§Ã£o', 'Micro(AtÃ© 9 empregrados)', 'DireÃ§Ã£o/GerÃªncia', 'AtÃ© 2 salÃ¡rios (R$ 1.448,00)', 'sim', 'EspecializaÃ§Ã£o ou MBA', 'Aumento de salÃ¡rio', 'Estou desempregado e pretendo arrumar um emprego', 'Sim', 'Extremamente relevante', 'Extremamente relevante', 'alskjd', 'alksdjals'),
(18, '2018', '10', 'Sim', 'Sim', 'Feminino', 'Abaixo de 21', 'NÃ£o procurou um emprego', 'AgÃªncia do trabalhador', 'Mais fÃ¡cil', 'Empregado', 'Ãrea vinculada indiretamente Ã  Ã¡rea de graduaÃ§Ã£o', 'Micro(AtÃ© 9 empregrados)', 'DireÃ§Ã£o/GerÃªncia', 'AtÃ© 2 salÃ¡rios (R$ 1.448,00)', 'sim', 'EspecializaÃ§Ã£o ou MBA', 'Aumento de salÃ¡rio', 'Estou desempregado e pretendo arrumar um emprego', 'Sim', 'Extremamente relevante', 'Extremamente relevante', 'skd', 'Ã§sdl'),
(19, '2016', '9', 'NÃ£o', 'NÃ£o', 'Masculino', 'Entre 21 e 25', 'NÃ£o procurou um emprego, pois ja estava trabalhando', 'AgÃªncia de emprego privado', 'Inalterada', 'Trabalho no prÃ³prio negÃ³cio/ AutÃ´nomo', 'Ãrea vinculada diretamente Ã  Ã¡rea de graduaÃ§Ã£o', 'Pequena(De 10 atÃ© 9 empregrados)', 'SupervisÃ£o/Chefia', 'Mais de 2 atÃ© 4 salÃ¡rios mÃ­nimos (R$ 1.449,00 atÃ© R$ 2.896,00)', 'NÃ£o', 'Mestrado', 'Oportunidade de viagem para treinamento/qualificaÃ§Ã£o profissional', 'Fazer carreira na empresa onde trabalho', 'NÃ£o', 'Relevante', 'Relevante', 'sdkjfds', 'sjdhsj'),
(20, 'Selecione a resposta', 'Selecione a resposta', 'Selecione a resposta', 'Selecione a resposta', 'Selecione a resposta', 'Selecione a resposta', 'Selecione a resposta', 'Selecione a resposta', 'Selecione a resposta', 'Selecione a resposta', 'Selecione a resposta', 'Selecione a resposta', 'Selecione a resposta', 'Selecione a resposta', 'Selecione a resposta', 'Selecione a resposta', 'Selecione a resposta', 'Selecione a resposta', 'Selecione a resposta', 'Selecione a resposta', 'Selecione a resposta', '', ''),
(21, '2018Æª', '10t', 'Sim', 'Sim', 'Femininoi', 'Abaixo de 21', 'NÃ£o procurou um emprego', 'Selecione a resposta', 'Mais fÃ¡cil', 'Empregado', 'Ãrea vinculada indiretamente Ã  Ã¡rea de graduaÃ§Ã£o', 'Micro(AtÃ© 9 empregrados)', 'DireÃ§Ã£o/GerÃªncia', 'AtÃ© 2 salÃ¡rios (R$ 1.448,00)', 'sim', 'EspecializaÃ§Ã£o ou MBA', 'Aumento de salÃ¡rio', 'Estou desempregado e pretendo arrumar um emprego', 'Sim', 'Extremamente relevante', 'Extremamente relevante', '', 'chuchu'),
(22, '20175', '90', 'NÃ£o', 'NÃ£o', 'Masculino', 'Entre 21 e 25', 'NÃ£o procurou um emprego, pois ja estava trabalhando', 'AgÃªncia de emprego privado', 'Inalterada', 'Trabalho no prÃ³prio negÃ³cio/ AutÃ´nomo', 'Ãrea vinculada diretamente Ã  Ã¡rea de graduaÃ§Ã£o', 'Pequena(De 10 atÃ© 9 empregrados)', 'DireÃ§Ã£o/GerÃªncia', 'Mais de 2 atÃ© 4 salÃ¡rios mÃ­nimos (R$ 1.449,00 atÃ© R$ 2.896,00)', 'NÃ£o', 'Mestradoi', 'Aumento de salÃ¡rio', 'Fazer carreira na empresa onde trabalho', 'NÃ£o', 'Extremamente relevante', 'Relevante', 'loal', 'laoals');

-- --------------------------------------------------------

--
-- Estrutura da tabela `secretaria`
--

DROP TABLE IF EXISTS `secretaria`;
CREATE TABLE IF NOT EXISTS `secretaria` (
  `idSecretaria` int(11) NOT NULL AUTO_INCREMENT,
  `nome_completo` varchar(45) NOT NULL,
  `cpf` varchar(45) NOT NULL,
  `cargo` varchar(45) NOT NULL,
  `admissao` varchar(45) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `section` varchar(50) NOT NULL,
  PRIMARY KEY (`idSecretaria`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `secretaria`
--

INSERT INTO `secretaria` (`idSecretaria`, `nome_completo`, `cpf`, `cargo`, `admissao`, `usuario`, `senha`, `section`) VALUES
(1, 'Rafael Silva Gomes', '445445445', 'secretario', '2222', 'rafael@gmail.com', 'daniela', ''),
(2, 'Rafael Silva Gomes', '445445445', 'secretario', '2222', 'rafael@gmail.com', 'daniela', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `aluno` varchar(100) NOT NULL,
  `adm` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`id`, `email`, `senha`, `aluno`, `adm`) VALUES
(1, 'Leticia@gmail.com', '12345', 'leticia', 1),
(2, 'Kaithleen@gmail.com', '12345', 'kaithleen', 2),
(3, 'gabrielle@gmail.com', '123456', 'gabi', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `idUsuarios` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(45) DEFAULT NULL,
  `senha` varchar(45) DEFAULT NULL,
  `section` varchar(45) DEFAULT NULL,
  `nivel_usuario` int(11) NOT NULL,
  PRIMARY KEY (`idUsuarios`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`idUsuarios`, `usuario`, `senha`, `section`, `nivel_usuario`) VALUES
(1, 'leticia@gmail.com', 'alexandrakaue', NULL, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
