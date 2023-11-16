-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2023 at 10:29 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registosumarios`
--

-- --------------------------------------------------------

--
-- Table structure for table `cursos`
--

CREATE TABLE `cursos` (
  `id_curso` int(11) NOT NULL,
  `nome_curso` varchar(250) NOT NULL,
  `codigo_curso` varchar(250) NOT NULL,
  `duracao_curso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `data_nascimento` datetime NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `curso_de_formacao` varchar(255) NOT NULL,
  `uc_a_leccionar` varchar(255) NOT NULL,
  `painel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `nome`, `data_nascimento`, `email`, `senha`, `status`, `curso_de_formacao`, `uc_a_leccionar`, `painel`) VALUES
(1, 'Administrador', '2023-11-10 00:00:00', 'root@gmail.com', 'root', 'activo', 'Engenharia Informatica', 'Programacao Web', 'admin'),
(2, 'estudante', '2023-11-09 23:52:55', 'estudante@gmail.com', 'estudante', 'activo', 'Engenharia Informatica', 'WebDesign', 'estudante'),
(3, 'docente', '2023-11-10 00:22:34', 'docente@gmail.com', 'docente', 'activo', 'Informatica', 'Introducao a Informatica', 'docente'),
(4, 'Registo Academico', '2023-11-10 01:06:01', 'registo@gmail.com', 'registo', 'activo', 'Nao Aplicado', 'Nao Aplicado', 'RegistoAcademico'),
(5, 'Usuario Inactivo', '2023-11-10 01:26:27', 'inactivo@gmail.com', 'inactivo', 'inactivo', 'Engenharia Informatica', 'Redes de Computadores', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id_curso`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id_curso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
