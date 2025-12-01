-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01/12/2025 às 02:32
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `strangerthings`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `relatorios`
--

CREATE DATABASE strangerthings;
USE strangerthings;

CREATE TABLE `relatorios` (
  `id` int(11) NOT NULL,
  `numero_relatorio` varchar(50) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `data_relatorio` date NOT NULL,
  `pesquisador` varchar(100) DEFAULT NULL,
  `status_relatorio` varchar(50) DEFAULT NULL,
  `descricao` text DEFAULT NULL,
  `observacoes` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `relatorios`
--

INSERT INTO `relatorios` (`id`, `numero_relatorio`, `titulo`, `data_relatorio`, `pesquisador`, `status_relatorio`, `descricao`, `observacoes`) VALUES
(2, '011-78', 'SUJEITO \"EL\" Eleven', '1983-11-09', 'Dr. Martin Brenner', 'Ativo', 'Sujeito apresenta habilidades telecinéticas e eletromagnéticas avançadas. O controle emocional continua sendo o principal fator de instabilidade, episódios de raiva extrema resultaram em distorções eletromagnéticas de até 14,6 teslas, comprometendo equipamentos.', 'Conter estimulos emocionais. Ampliar testes de isolamento'),
(3, '008-79', 'SUJEITO \"KALI\"', '1979-05-05', 'Dr. Ellis', 'Foragida', 'Sujeito capaz de induzir ilusões sensoriais em múltiplos alvos. Possui fortes traços de independência e rejeição à autoridade. Último contato registrado nos arredores de Chicago.\r\nCapacidade de alterar percepção visual e auditiva comprovada.\r\nEmite frequências cerebrais similares ao padrão de conexão interdimensional.\r\n\r\n', 'Localizar e neutralizar. Eviter confronto direto.'),
(4, '1983-UI', 'INCIDENTE \"PORTAL PRIMÁRIO\"', '1963-11-06', '...', 'Encerrado (perdas humanas)', 'Durante sessão de teste com Sujeito 011, foi aberto portal dimensional instável (\"Rasgo Dimensional Alfa\"). O contato inicial revelou estrutura biológica desconhecida designada \"Mundo Invertido\".', 'Encerramento do portal principal e sigilo absoluto sobre o evento'),
(5, '1964-DM', 'ENTIDADE \"DEMOGORGON\"', '1984-12-12', '...', 'Ameaça interdimensional nível 5', 'Criatura bípede originária do Mundo Invertido. Apresenta estrutura muscular e velocidade superiores a qualquer espécie conhecida. Alimenta de organismos vivos, preferencialmente humanos.', 'Manter espécime em sob alto calor. Se ver, fuja.'),
(6, '1986-MI', 'CONEXÃO PSÍQUICA COLETIVA', '1985-07-15', '...', '\"Devorador de Mentes\"', 'Durante colapso dimensional parcial, registrou-se comportamento coletivo em múltiplos hospedeiros humanos e animais. O ser parece controlar organismos por meio de rede neural compartilhada, conectada ao Mundo Invertido', 'Evacuar área e destruir hospedeiros infectados. Não utilizar chamas, provoca reação violenta.'),
(7, '1990', 'ANÁLISE ENEROÉTICA DO MUNDO INVERTIDO', '1990-02-02', 'Dr. Owens', 'Em andamento', 'Testes recentes indicam que o Mundo Invertido possui ressonância eletromagnética inversa no nosso plano. Tal inversão permite o fluxo de energia negativa capaz de alterar campos biológicos e mentais', 'Suspender todos os testes até segunda ordem do Departamento de Energia');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `relatorios`
--
ALTER TABLE `relatorios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `relatorios`
--
ALTER TABLE `relatorios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
