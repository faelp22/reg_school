-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tempo de Geração: 16/02/2014 às 01:00
-- Versão do servidor: 5.5.34
-- Versão do PHP: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de dados: `bd_reg_school`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_alunos`
--

CREATE TABLE IF NOT EXISTS `tb_alunos` (
  `id_alunos` int(11) NOT NULL AUTO_INCREMENT,
  `pessoa_id` int(11) NOT NULL,
  `aluno_status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_alunos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_cursos`
--

CREATE TABLE IF NOT EXISTS `tb_cursos` (
  `id_cursos` int(11) NOT NULL AUTO_INCREMENT,
  `curso_nome` varchar(50) NOT NULL,
  `curso_ch` int(3) NOT NULL,
  `curso_descricao` blob NOT NULL,
  PRIMARY KEY (`id_cursos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_instrutores`
--

CREATE TABLE IF NOT EXISTS `tb_instrutores` (
  `id_instrutores` int(11) NOT NULL AUTO_INCREMENT,
  `pessoa_id` int(11) NOT NULL,
  `instrutor_status` tinyint(1) NOT NULL,
  `instrutor_formacao` blob NOT NULL,
  `instrutor_salario` float NOT NULL,
  PRIMARY KEY (`id_instrutores`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_laboratorios`
--

CREATE TABLE IF NOT EXISTS `tb_laboratorios` (
  `id_laboratorios` int(11) NOT NULL AUTO_INCREMENT,
  `laboratorio_nome` varchar(50) NOT NULL,
  `laboratorio_status` tinyint(1) NOT NULL,
  `laboratorio_andar` int(4) NOT NULL,
  `laboratorio_num_pc` int(4) NOT NULL,
  PRIMARY KEY (`id_laboratorios`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_lotacoes`
--

CREATE TABLE IF NOT EXISTS `tb_lotacoes` (
  `id_lotacoes` int(11) NOT NULL AUTO_INCREMENT,
  `laboratorio_id` int(11) NOT NULL,
  `curso_id` int(11) NOT NULL,
  `instrutor_id` int(11) NOT NULL,
  `monitor_id` int(11) NOT NULL,
  `lotacao_ciclo` varchar(30) NOT NULL,
  `lotacao_inicio` date NOT NULL,
  `lotacao_termino` date NOT NULL,
  PRIMARY KEY (`id_lotacoes`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_monitores`
--

CREATE TABLE IF NOT EXISTS `tb_monitores` (
  `id_monitores` int(11) NOT NULL AUTO_INCREMENT,
  `pessoa_id` int(11) NOT NULL,
  `monitor_status` tinyint(1) NOT NULL,
  `monitor_salario` float NOT NULL,
  PRIMARY KEY (`id_monitores`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_pessoas`
--

CREATE TABLE IF NOT EXISTS `tb_pessoas` (
  `id_pessoas` int(11) NOT NULL AUTO_INCREMENT,
  `pessoa_nome` varchar(100) NOT NULL,
  `pessoa_email` varchar(60) NOT NULL,
  `pessoa_nasc` date NOT NULL,
  `pessoa_sexo` varchar(15) NOT NULL,
  PRIMARY KEY (`id_pessoas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_turmas`
--

CREATE TABLE IF NOT EXISTS `tb_turmas` (
  `id_turmas` int(11) NOT NULL AUTO_INCREMENT,
  `lotacao_id` int(11) NOT NULL,
  `aluno_id` int(11) NOT NULL,
  PRIMARY KEY (`id_turmas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
