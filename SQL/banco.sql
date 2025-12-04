-- Criar banco de dados
CREATE DATABASE IF NOT EXISTS strangerthings;
USE strangerthings;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
SET NAMES utf8mb4;

START TRANSACTION;

-- -----------------------------------------------------------
-- TABELA: usuarios
-- -----------------------------------------------------------

CREATE TABLE IF NOT EXISTS `usuarios` (
  `idusuario` int(8) NOT NULL AUTO_INCREMENT,
  `nome` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  `senha` varchar(64) NOT NULL,
  `situacao` int(1) NOT NULL,
  PRIMARY KEY (`idusuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Inserção sem ID (AUTO_INCREMENT evita erros)
INSERT INTO `usuarios` (`nome`, `email`, `senha`, `situacao`) VALUES
('Martin Brenner', 'brenner@gmail.com', '1234', 1);

-- -----------------------------------------------------------
-- TABELA: relatorios
-- -----------------------------------------------------------

CREATE TABLE IF NOT EXISTS `relatorios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numero_relatorio` varchar(50) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `data_relatorio` date NOT NULL,
  `pesquisador` varchar(100) DEFAULT NULL,
  `status_relatorio` varchar(50) DEFAULT NULL,
  `descricao` text DEFAULT NULL,
  `observacoes` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `relatorios` (`numero_relatorio`, `titulo`, `data_relatorio`, `pesquisador`, `status_relatorio`, `descricao`, `observacoes`) VALUES
('011-78', 'SUJEITO "EL" Eleven', '1983-11-09', 'Dr. Martin Brenner', 'Ativo',
 'Sujeito apresenta habilidades telecinéticas e eletromagnéticas avançadas. O controle emocional continua sendo o principal fator de instabilidade, episódios de raiva extrema resultaram em distorções eletromagnéticas de até 14,6 teslas, comprometendo equipamentos.',
 'Conter estímulos emocionais. Ampliar testes de isolamento'),

('008-79', 'SUJEITO "KALI"', '1979-05-05', 'Dr. Ellis', 'Foragida',
 'Sujeito capaz de induzir ilusões sensoriais em múltiplos alvos. Possui forte rejeição à autoridade. Último contato registrado nos arredores de Chicago.',
 'Localizar e neutralizar. Evitar confronto direto.'),

('1983-UI', 'INCIDENTE "PORTAL PRIMÁRIO"', '1963-11-06', '...', 'Encerrado (perdas humanas)',
 'Durante sessão de teste com Sujeito 011, foi aberto um portal dimensional instável ("Rasgo Dimensional Alfa"). O contato inicial revelou estrutura biológica desconhecida designada "Mundo Invertido".',
 'Encerramento do portal principal e sigilo absoluto sobre o evento'),

('1964-DM', 'ENTIDADE "DEMOGORGON"', '1984-12-12', '...', 'Ameaça interdimensional nível 5',
 'Criatura bípede originária do Mundo Invertido. Estrutura muscular e velocidade superiores às de qualquer espécie conhecida.',
 'Manter espécime sob alto calor. Se ver, fuja.'),

('1986-MI', 'CONEXÃO PSÍQUICA COLETIVA', '1985-07-15', '...', 'Devorador de Mentes',
 'Durante colapso dimensional parcial, registrou-se comportamento coletivo em múltiplos hospedeiros humanos e animais.',
 'Evacuar área e destruir hospedeiros infectados. Não usar fogo.'),

('1990', 'ANÁLISE ENERGÉTICA DO MUNDO INVERTIDO', '1990-02-02', 'Dr. Owens', 'Em andamento',
 'Testes recentes indicam que o Mundo Invertido possui ressonância eletromagnética inversa ao nosso plano.',
 'Suspender todos os testes até segunda ordem do Departamento de Energia');

COMMIT;

