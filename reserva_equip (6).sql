-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 23-Mar-2017 às 23:20
-- Versão do servidor: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reserva_equip`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `t_check`
--

CREATE TABLE `t_check` (
  `cod_check` int(11) NOT NULL,
  `info_check` varchar(150) COLLATE latin1_spanish_ci NOT NULL,
  `data_check` date NOT NULL,
  `t_usuario_cod_usuario` int(11) NOT NULL,
  `t_reserva_cod_reserva` int(11) NOT NULL,
  `realiza_check` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Extraindo dados da tabela `t_check`
--

INSERT INTO `t_check` (`cod_check`, `info_check`, `data_check`, `t_usuario_cod_usuario`, `t_reserva_cod_reserva`, `realiza_check`) VALUES
(28, 'JJJJJ', '2017-03-17', 26, 14, 1),
(29, 'nnnn', '2017-03-17', 26, 14, 1),
(30, 'fghjklÃ§', '2017-03-18', 26, 14, 1),
(31, 'hhhhhhhhhhhhhhhhhhhhhh', '2017-03-23', 26, 14, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `t_item`
--

CREATE TABLE `t_item` (
  `cod_item` int(20) NOT NULL,
  `t_tipo` varchar(45) COLLATE latin1_spanish_ci DEFAULT NULL,
  `descricao_item` varchar(150) COLLATE latin1_spanish_ci NOT NULL,
  `valor_item` double DEFAULT NULL,
  `conteudo_item` varchar(150) COLLATE latin1_spanish_ci DEFAULT NULL,
  `ativo_item` tinyint(1) NOT NULL DEFAULT '1',
  `data_cadastro` date NOT NULL,
  `usuario_cadastro` varchar(15) COLLATE latin1_spanish_ci NOT NULL,
  `obs_item` varchar(150) COLLATE latin1_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Extraindo dados da tabela `t_item`
--

INSERT INTO `t_item` (`cod_item`, `t_tipo`, `descricao_item`, `valor_item`, `conteudo_item`, `ativo_item`, `data_cadastro`, `usuario_cadastro`, `obs_item`) VALUES
(3251, 'etut', 'jyytgretg', 100, 'gethrh', 1, '2017-01-26', 'Professor', ''),
(7987, '', 'violino', 0, '', 1, '2017-01-26', 'Controle de Res', ''),
(8765, 'ghj', 'Abobora VERDE\r\n', 456, 'jjj', 0, '2017-01-25', 'Administrador', ''),
(98766, 'chifre', 'hahhah', 0, 'dente', 0, '2017-01-26', 'Administrador', 'arapuca'),
(123321, '', 'zxczxcz', 0, '', 1, '2017-02-24', 'Desenvolvedor', ''),
(231564, 'EletrÃ´nico', 'Microfone sem fio USEX', 150, 'UtilizaÃ§Ã£o em auditÃ³rio', 1, '2017-01-27', 'Desenvolvedorrr', ''),
(345435, 'EletrÃ´nico', 'Computador de Mesa DELL', 4000, '', 1, '2017-01-27', 'Desenvolvedorrr', ''),
(653289, 'Cordas', 'Guitarra', 426.75, 'basdas', 1, '2017-02-24', 'Desenvolvedor', 'anskdnasd'),
(8475394, '', 'violoncelo', 0, '', 1, '2017-01-26', 'Controle de Res', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `t_nivel`
--

CREATE TABLE `t_nivel` (
  `cod_nivel` int(11) NOT NULL,
  `nome_nivel` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `descricao_nivel` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `ativo_nivel` varchar(1) COLLATE latin1_spanish_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Extraindo dados da tabela `t_nivel`
--

INSERT INTO `t_nivel` (`cod_nivel`, `nome_nivel`, `descricao_nivel`, `ativo_nivel`) VALUES
(1, 'Usuario', 'Utilizar o Sistema para a realização de Reservas', '1'),
(2, 'Administrador', 'Gerenciamento Geral', '1'),
(3, 'Controlador', 'Gerenciamento de usuários e  reservas', '1'),
(4, 'Professor', 'Realizar reservas', '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `t_reserva`
--

CREATE TABLE `t_reserva` (
  `cod_reserva` int(11) NOT NULL,
  `data_reserva` date NOT NULL,
  `data_inicio` date NOT NULL,
  `hora_inicio` time NOT NULL,
  `data_fim` date NOT NULL,
  `hora_fim` time NOT NULL,
  `desc_reserva` varchar(150) COLLATE latin1_spanish_ci NOT NULL,
  `cancela_reserva` varchar(1) COLLATE latin1_spanish_ci NOT NULL DEFAULT '0',
  `t_item_cod_item` int(20) NOT NULL,
  `t_usuario_cod_usuario` int(11) NOT NULL,
  `t_check_cod_check` int(11) DEFAULT NULL,
  `timestamp_inicio` int(11) NOT NULL,
  `timestamp_fim` int(11) NOT NULL,
  `reserva_checada` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Extraindo dados da tabela `t_reserva`
--

INSERT INTO `t_reserva` (`cod_reserva`, `data_reserva`, `data_inicio`, `hora_inicio`, `data_fim`, `hora_fim`, `desc_reserva`, `cancela_reserva`, `t_item_cod_item`, `t_usuario_cod_usuario`, `t_check_cod_check`, `timestamp_inicio`, `timestamp_fim`, `reserva_checada`) VALUES
(6, '2017-03-13', '2017-03-13', '23:05:00', '2017-03-13', '23:10:00', 'asd', '1', 8475394, 26, 28, 1489457100, 1489457400, 0),
(7, '2017-03-14', '2017-03-15', '10:00:00', '2017-03-16', '22:00:00', 'gavsd', '1', 3251, 26, 28, 1489582800, 1489712400, 0),
(8, '2017-03-17', '2017-03-30', '00:00:00', '2017-03-31', '00:00:00', 'hhhh', '1', 3251, 26, 28, 1490842800, 1490929200, 0),
(9, '2017-03-17', '2017-03-31', '09:09:00', '2017-03-22', '00:00:00', 'jjjjj', '1', 3251, 26, 28, 1490962140, 1490151600, 0),
(10, '2017-03-17', '2017-03-21', '00:00:00', '2017-03-16', '00:00:00', 'hhh', '1', 3251, 26, 28, 1490065200, 1489633200, 0),
(11, '2017-03-17', '2017-03-25', '00:00:00', '2017-03-24', '00:00:00', 'hhhh', '1', 3251, 26, 28, 1490410800, 1490324400, 0),
(12, '2017-03-17', '2017-03-30', '00:00:00', '2017-03-29', '00:00:00', 'HHHHH', '1', 3251, 26, 28, 1490842800, 1490756400, 0),
(13, '2017-03-17', '2017-03-18', '00:00:00', '2017-03-24', '00:00:00', 'jjjj', '1', 3251, 26, 28, 1489806000, 1490324400, 0),
(14, '2017-03-17', '2017-03-18', '00:00:00', '2017-03-18', '01:00:00', 'KKKKKKK', '0', 3251, 26, 28, 1489806000, 1489809600, 1),
(15, '2017-03-23', '2017-03-27', '09:06:00', '2017-03-28', '08:06:00', 'JGFVBNNNN', '1', 3251, 26, 28, 1490616360, 1490699160, 0),
(16, '2017-03-23', '2017-03-24', '09:09:00', '2017-03-25', '08:08:00', 'JJJJJ', '1', 123321, 26, 28, 1490357340, 1490440080, 0),
(17, '2017-03-23', '2017-03-23', '17:00:00', '2017-03-23', '17:02:00', 'gabrieeeeel', '0', 3251, 26, NULL, 1490299200, 1490299320, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `t_rotina`
--

CREATE TABLE `t_rotina` (
  `cod_rotina` int(11) NOT NULL,
  `nome_rotina` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `descricao_rotina` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `ativa_rotina` varchar(1) COLLATE latin1_spanish_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Extraindo dados da tabela `t_rotina`
--

INSERT INTO `t_rotina` (`cod_rotina`, `nome_rotina`, `descricao_rotina`, `ativa_rotina`) VALUES
(1, 'Logar', 'Realizar login', '1'),
(2, 'Sair', 'Realizar logout', '1'),
(3, 'cadastar_item', 'Realizar cadastro de itens', '1'),
(4, 'excluir_item', 'Realizar exclusão de itens', '1'),
(5, 'alterar_item', 'Realizar alteração de itens', '1'),
(6, 'inativar_item', 'Inativar itens', '1'),
(7, 'ativar_item', 'Ativar itens', '1'),
(8, 'cadastrar_usuario', 'Realizar cadastro de usuarios', '1'),
(9, 'excluir_usuario', 'Realizar exclusão de usuarios', '1'),
(10, 'alterar_usuario', 'Realizar alteração de usuarios', '1'),
(11, 'inativar_usuario', 'Inativar usuario', '1'),
(12, 'ativar_usuario', 'Ativar usuário', '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `t_rotina_has_t_nivel`
--

CREATE TABLE `t_rotina_has_t_nivel` (
  `t_rotina_cod_rotina` int(11) NOT NULL,
  `t_nivel_cod_nivel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Extraindo dados da tabela `t_rotina_has_t_nivel`
--

INSERT INTO `t_rotina_has_t_nivel` (`t_rotina_cod_rotina`, `t_nivel_cod_nivel`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(2, 1),
(2, 2),
(2, 3),
(2, 4),
(3, 1),
(3, 2),
(4, 1),
(4, 2),
(5, 1),
(5, 2),
(6, 1),
(6, 2),
(6, 3),
(7, 1),
(7, 2),
(7, 3),
(8, 1),
(8, 3),
(9, 1),
(9, 3),
(10, 1),
(10, 3),
(11, 1),
(11, 3),
(12, 1),
(12, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `t_usuario`
--

CREATE TABLE `t_usuario` (
  `cod_usuario` int(11) NOT NULL,
  `login_usuario` varchar(15) COLLATE latin1_spanish_ci NOT NULL,
  `senha_usuario` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `nome_usuario` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `ativo_usuario` tinyint(1) NOT NULL DEFAULT '1',
  `data_cadastro` date NOT NULL,
  `usu_cadastro` varchar(15) COLLATE latin1_spanish_ci NOT NULL,
  `t_nivel_cod_nivel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Extraindo dados da tabela `t_usuario`
--

INSERT INTO `t_usuario` (`cod_usuario`, `login_usuario`, `senha_usuario`, `nome_usuario`, `ativo_usuario`, `data_cadastro`, `usu_cadastro`, `t_nivel_cod_nivel`) VALUES
(1, 'desenvolvedor', 'd42d0ac94b49920b9db773905fa3069c', 'Desenvolvedor', 1, '0000-00-00', 'Sistema', 1),
(4, 'professor', '647431b5ca55b04fdf3c2fce31ef1915', 'gggg', 1, '0000-00-00', 'Sistema', 4),
(22, 'Jana', '9439aec52eb100234ad0d3bf4471b575', 'Janaina', 1, '2017-01-24', 'Administrador', 4),
(23, 'Bubu Cabral', '098eb8ba2cc924fad0ec05acd869a4eb', 'Chico', 0, '2017-01-27', 'Desenvolvedorrr', 4),
(24, 'Cabrito Teves', 'ad8bfeb1fc3da81e71687a2d57383697', 'Bartolomeu Brito', 0, '2017-01-27', 'Desenvolvedorrr', 4),
(25, 'administrador', '91f5167c34c400758115c2a6826ec2e3', 'Administrador', 1, '2017-01-27', 'Desenvolvedorrr', 2),
(26, 'gabriel', '647431b5ca55b04fdf3c2fce31ef1915', 'Gabriel', 1, '2017-02-09', 'Desenvolvedor', 1),
(27, 'claudio', 'f6a47a638824180d57f0a561fd5843c6', 'claudio', 1, '2017-02-17', 'Gabriel', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_check`
--
ALTER TABLE `t_check`
  ADD PRIMARY KEY (`cod_check`,`t_usuario_cod_usuario`),
  ADD KEY `fk_t_check_t_usuario1_idx` (`t_usuario_cod_usuario`),
  ADD KEY `t_reserva_cod_reserva` (`t_reserva_cod_reserva`);

--
-- Indexes for table `t_item`
--
ALTER TABLE `t_item`
  ADD PRIMARY KEY (`cod_item`),
  ADD UNIQUE KEY `cod_item` (`cod_item`);

--
-- Indexes for table `t_nivel`
--
ALTER TABLE `t_nivel`
  ADD PRIMARY KEY (`cod_nivel`);

--
-- Indexes for table `t_reserva`
--
ALTER TABLE `t_reserva`
  ADD PRIMARY KEY (`cod_reserva`,`t_item_cod_item`,`t_usuario_cod_usuario`),
  ADD KEY `fk_t_reserva_t_item1_idx` (`t_item_cod_item`),
  ADD KEY `fk_t_reserva_t_usuario1_idx` (`t_usuario_cod_usuario`),
  ADD KEY `fk_t_reserva_t_check1_idx` (`t_check_cod_check`);

--
-- Indexes for table `t_rotina`
--
ALTER TABLE `t_rotina`
  ADD PRIMARY KEY (`cod_rotina`);

--
-- Indexes for table `t_rotina_has_t_nivel`
--
ALTER TABLE `t_rotina_has_t_nivel`
  ADD PRIMARY KEY (`t_rotina_cod_rotina`,`t_nivel_cod_nivel`),
  ADD KEY `fk_t_rotina_has_t_nivel_t_nivel1_idx` (`t_nivel_cod_nivel`),
  ADD KEY `fk_t_rotina_has_t_nivel_t_rotina_idx` (`t_rotina_cod_rotina`);

--
-- Indexes for table `t_usuario`
--
ALTER TABLE `t_usuario`
  ADD PRIMARY KEY (`cod_usuario`,`t_nivel_cod_nivel`),
  ADD UNIQUE KEY `login_usuario_UNIQUE` (`login_usuario`),
  ADD KEY `fk_t_usuario_t_nivel1_idx` (`t_nivel_cod_nivel`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_check`
--
ALTER TABLE `t_check`
  MODIFY `cod_check` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `t_nivel`
--
ALTER TABLE `t_nivel`
  MODIFY `cod_nivel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `t_reserva`
--
ALTER TABLE `t_reserva`
  MODIFY `cod_reserva` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `t_rotina`
--
ALTER TABLE `t_rotina`
  MODIFY `cod_rotina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `t_usuario`
--
ALTER TABLE `t_usuario`
  MODIFY `cod_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `t_check`
--
ALTER TABLE `t_check`
  ADD CONSTRAINT `fk_t_check_t_usuario1` FOREIGN KEY (`t_usuario_cod_usuario`) REFERENCES `t_usuario` (`cod_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `t_check_ibfk_1` FOREIGN KEY (`t_reserva_cod_reserva`) REFERENCES `t_reserva` (`cod_reserva`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `t_reserva`
--
ALTER TABLE `t_reserva`
  ADD CONSTRAINT `fk_t_reserva_t_item1` FOREIGN KEY (`t_item_cod_item`) REFERENCES `t_item` (`cod_item`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_t_reserva_t_usuario1` FOREIGN KEY (`t_usuario_cod_usuario`) REFERENCES `t_usuario` (`cod_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `t_reserva_ibfk_1` FOREIGN KEY (`t_check_cod_check`) REFERENCES `t_check` (`cod_check`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `t_rotina_has_t_nivel`
--
ALTER TABLE `t_rotina_has_t_nivel`
  ADD CONSTRAINT `fk_t_rotina_has_t_nivel_t_nivel1` FOREIGN KEY (`t_nivel_cod_nivel`) REFERENCES `t_nivel` (`cod_nivel`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_t_rotina_has_t_nivel_t_rotina` FOREIGN KEY (`t_rotina_cod_rotina`) REFERENCES `t_rotina` (`cod_rotina`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `t_usuario`
--
ALTER TABLE `t_usuario`
  ADD CONSTRAINT `fk_t_usuario_t_nivel1` FOREIGN KEY (`t_nivel_cod_nivel`) REFERENCES `t_nivel` (`cod_nivel`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
