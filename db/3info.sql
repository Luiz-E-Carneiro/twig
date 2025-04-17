-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Abr-2025 às 16:29
-- Versão do servidor: 10.4.32-MariaDB
-- versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `3info`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `compras`
--

CREATE TABLE `compras` (
  `id` int(10) UNSIGNED NOT NULL,
  `item` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `compras`
--

INSERT INTO `compras` (`id`, `item`) VALUES
(1, 'Abacaxi? O que é?'),
(8, 'Abacaxi, the best');

-- --------------------------------------------------------

--
-- Estrutura da tabela `compromissos`
--

CREATE TABLE `compromissos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `compromissos`
--

INSERT INTO `compromissos` (`id`, `titulo`, `data`) VALUES
(1, 'Reunião de Equipe22', '2025-03-27'),
(2, 'Entrevista de Emprego', '2025-03-30'),
(3, 'Consulta Médica', '2025-04-02'),
(4, 'Reunião com Cliente', '2025-04-05'),
(5, 'Almoço de Negócios', '2025-04-07'),
(6, 'Conferência de Tecnologia', '2025-04-10'),
(7, 'Revisão de Projeto', '2025-04-12'),
(8, 'Apresentação de Resultados', '2025-04-15');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario_id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`usuario_id`, `login`, `senha`) VALUES
(1, 'Luiz', '$2y$10$low94/phQom7RilObVXGAuhlSnrv8ZmNnPNrNcpoEb/sQYzPCHzni');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `compromissos`
--
ALTER TABLE `compromissos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuario_id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `compras`
--
ALTER TABLE `compras`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `compromissos`
--
ALTER TABLE `compromissos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
