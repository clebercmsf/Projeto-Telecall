-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 22-Nov-2023 às 17:34
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_telecall`
--
CREATE DATABASE IF NOT EXISTS `db_telecall` DEFAULT CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci;
USE `db_telecall`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `perfil`
--

DROP TABLE IF EXISTS `perfil`;
CREATE TABLE IF NOT EXISTS `perfil` (
  `id_Perfil` int NOT NULL,
  `Descricao_Perfil` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_Perfil`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Extraindo dados da tabela `perfil`
--

INSERT INTO `perfil` (`id_Perfil`, `Descricao_Perfil`) VALUES
(1, 'Master'),
(2, 'Comum');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id_Usuario` int NOT NULL AUTO_INCREMENT,
  `Nome_Usuario` varchar(60) NOT NULL,
  `Nascimento_Usuario` varchar(10) NOT NULL,
  `Sexo_Usuario` varchar(45) NOT NULL,
  `Nome_Materno` varchar(60) NOT NULL,
  `CPF_Usuario` varchar(14) NOT NULL,
  `Celular_Usuario` varchar(18) NOT NULL,
  `Telefone_Usuario` varchar(17) NOT NULL,
  `Endereco_Usuario` varchar(250) NOT NULL,
  `Login_Usuario` varchar(6) NOT NULL,
  `Senha_Usuario` varchar(20) NOT NULL,
  `Perfil_Usuario` int NOT NULL,
  PRIMARY KEY (`id_Usuario`),
  KEY `fk_Usuario_Telecall_perfis` (`Perfil_Usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_Usuario_Telecall_perfis` FOREIGN KEY (`Perfil_Usuario`) REFERENCES `perfil` (`id_Perfil`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
