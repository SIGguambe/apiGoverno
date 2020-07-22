-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22/07/2020 às 14:43
-- Versão do servidor: 10.4.13-MariaDB
-- Versão do PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `apigov`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `contactos`
--

CREATE TABLE `contactos` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_distrito` int(10) UNSIGNED NOT NULL,
  `id_governo_provincial` int(10) UNSIGNED NOT NULL,
  `id_instituicao_ensino` int(10) UNSIGNED NOT NULL,
  `id_orgao_central` int(10) UNSIGNED NOT NULL,
  `id_instituicao_tutelada` int(10) UNSIGNED NOT NULL,
  `id_instituicao_finaceira` int(10) UNSIGNED NOT NULL,
  `avenida` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `contactos`
--

INSERT INTO `contactos` (`id`, `id_distrito`, `id_governo_provincial`, `id_instituicao_ensino`, `id_orgao_central`, `id_instituicao_tutelada`, `id_instituicao_finaceira`, `avenida`, `numero`, `site`, `telefone1`, `telefone2`, `email`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 1, 1, 1, '25 de Setembro', '2590', 'gtt.com', '848857', '87538573', 'samuelguambe', '2020-07-22 09:23:15', '2020-07-22 09:23:15');

-- --------------------------------------------------------

--
-- Estrutura para tabela `distritos`
--

CREATE TABLE `distritos` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_provincia` int(10) UNSIGNED NOT NULL,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isCapital` tinyint(1) NOT NULL,
  `populacao_homens` int(11) NOT NULL,
  `populacao_mulheres` int(11) NOT NULL,
  `ano_censo` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `distritos`
--

INSERT INTO `distritos` (`id`, `id_provincia`, `nome`, `isCapital`, `populacao_homens`, `populacao_mulheres`, `ano_censo`, `created_at`, `updated_at`) VALUES
(1, 1, 'Inhambane', 1, 100000, 120000, 2015, '2020-07-22 09:21:35', '2020-07-22 09:21:35');

-- --------------------------------------------------------

--
-- Estrutura para tabela `governo_provincials`
--

CREATE TABLE `governo_provincials` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_provincia` int(10) UNSIGNED NOT NULL,
  `secretario_estado` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `governador` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secretario_permanente` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `governo_provincials`
--

INSERT INTO `governo_provincials` (`id`, `id_provincia`, `secretario_estado`, `governador`, `secretario_permanente`, `created_at`, `updated_at`) VALUES
(1, 1, 'SS', 'GDS', 'SP', '2020-07-22 09:17:01', '2020-07-22 09:17:01');

-- --------------------------------------------------------

--
-- Estrutura para tabela `instituicoes_ensinos`
--

CREATE TABLE `instituicoes_ensinos` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_orgao_central` int(10) UNSIGNED NOT NULL,
  `designacao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `responsavel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designacaoResponsavel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomeAdjunto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designacaoAdjunto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isPublica` tinyint(1) NOT NULL,
  `nivel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `instituicoes_ensinos`
--

INSERT INTO `instituicoes_ensinos` (`id`, `id_orgao_central`, `designacao`, `responsavel`, `designacaoResponsavel`, `nomeAdjunto`, `designacaoAdjunto`, `isPublica`, `nivel`, `created_at`, `updated_at`) VALUES
(1, 1, 'DS', 'Rs', 'DSR', 'NaD', 'DEAD', 0, 'SUPR', '2020-07-22 09:22:59', '2020-07-22 09:22:59');

-- --------------------------------------------------------

--
-- Estrutura para tabela `instituicoes_financeiras`
--

CREATE TABLE `instituicoes_financeiras` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_orgao_central` int(10) UNSIGNED NOT NULL,
  `nomePresidente` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designacao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `instituicoes_financeiras`
--

INSERT INTO `instituicoes_financeiras` (`id`, `id_orgao_central`, `nomePresidente`, `designacao`, `created_at`, `updated_at`) VALUES
(1, 1, 'NPR', 'DS', '2020-07-22 09:22:39', '2020-07-22 09:22:39');

-- --------------------------------------------------------

--
-- Estrutura para tabela `instituicoes_tuteladas`
--

CREATE TABLE `instituicoes_tuteladas` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_orgao_central` int(10) UNSIGNED NOT NULL,
  `designacao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `responsavel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adjunto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `instituicoes_tuteladas`
--

INSERT INTO `instituicoes_tuteladas` (`id`, `id_orgao_central`, `designacao`, `responsavel`, `adjunto`, `created_at`, `updated_at`) VALUES
(1, 1, 'DG', 'Res', 'Adj', '2020-07-22 09:22:23', '2020-07-22 09:22:23');

-- --------------------------------------------------------

--
-- Estrutura para tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(97, '2020_07_20_200500_create_orgaos_centrais_table', 1),
(98, '2020_07_20_200933_create_instituicoes_tuteladas_table', 1),
(99, '2020_07_20_201142_create_instituicoes_financeiras_table', 1),
(100, '2020_07_21_143419_create_instituicoes_ensinos_table', 1),
(101, '2020_07_21_150235_create_contactos_table', 1),
(164, '2014_10_12_000000_create_users_table', 2),
(165, '2014_10_12_100000_create_password_resets_table', 2),
(166, '2020_07_17_110252_create_zonas_table', 2),
(167, '2020_07_18_222318_create_provincias_table', 2),
(168, '2020_07_18_222356_create_governo_provincials_table', 2),
(169, '2020_07_19_122001_create_distritos_table', 2),
(170, '2020_07_22_083040_create_orgao_centrals_table', 2),
(171, '2020_07_22_091220_create_instituicoes_tuteladas_table', 2),
(172, '2020_07_22_094752_create_instituicoes_financeiras_table', 2),
(173, '2020_07_22_102037_create_instituicoes_ensinos_table', 2),
(174, '2020_07_22_105102_create_contactos_table', 2);

-- --------------------------------------------------------

--
-- Estrutura para tabela `orgao_centrals`
--

CREATE TABLE `orgao_centrals` (
  `id` int(10) UNSIGNED NOT NULL,
  `designacao` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `responsavel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adjunto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designacao_adjunto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `orgao_centrals`
--

INSERT INTO `orgao_centrals` (`id`, `designacao`, `responsavel`, `adjunto`, `designacao_adjunto`, `created_at`, `updated_at`) VALUES
(1, 'Presidencia da Republica', 'resp', 'adjs', 'deAdj', '2020-07-22 09:21:51', '2020-07-22 09:21:51');

-- --------------------------------------------------------

--
-- Estrutura para tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `provincias`
--

CREATE TABLE `provincias` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_zona` int(10) UNSIGNED NOT NULL,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `capital` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `provincias`
--

INSERT INTO `provincias` (`id`, `id_zona`, `nome`, `capital`, `created_at`, `updated_at`) VALUES
(1, 2, 'Manica', 'Chimoio', '2020-07-22 09:15:32', '2020-07-22 09:15:32'),
(2, 1, 'Inhambane', 'Imhambane', '2020-07-22 09:16:05', '2020-07-22 09:16:05');

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `zonas`
--

CREATE TABLE `zonas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `zonas`
--

INSERT INTO `zonas` (`id`, `nome`, `created_at`, `updated_at`) VALUES
(1, 'ZONA SUL', '2020-07-22 09:13:53', '2020-07-22 09:13:53'),
(2, 'ZONA CENTRO', '2020-07-22 09:14:22', '2020-07-22 09:14:22'),
(3, 'ZONA NORTE', '2020-07-22 09:14:32', '2020-07-22 09:14:32');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contactos_id_distrito_foreign` (`id_distrito`),
  ADD KEY `contactos_id_governo_provincial_foreign` (`id_governo_provincial`),
  ADD KEY `contactos_id_instituicao_ensino_foreign` (`id_instituicao_ensino`),
  ADD KEY `contactos_id_orgao_central_foreign` (`id_orgao_central`),
  ADD KEY `contactos_id_instituicao_tutelada_foreign` (`id_instituicao_tutelada`),
  ADD KEY `contactos_id_instituicao_finaceira_foreign` (`id_instituicao_finaceira`);

--
-- Índices de tabela `distritos`
--
ALTER TABLE `distritos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `distritos_nome_unique` (`nome`),
  ADD KEY `distritos_id_provincia_foreign` (`id_provincia`);

--
-- Índices de tabela `governo_provincials`
--
ALTER TABLE `governo_provincials`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `governo_provincials_secretario_estado_unique` (`secretario_estado`),
  ADD UNIQUE KEY `governo_provincials_governador_unique` (`governador`),
  ADD KEY `governo_provincials_id_provincia_foreign` (`id_provincia`);

--
-- Índices de tabela `instituicoes_ensinos`
--
ALTER TABLE `instituicoes_ensinos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `instituicoes_ensinos_id_orgao_central_foreign` (`id_orgao_central`);

--
-- Índices de tabela `instituicoes_financeiras`
--
ALTER TABLE `instituicoes_financeiras`
  ADD PRIMARY KEY (`id`),
  ADD KEY `instituicoes_financeiras_id_orgao_central_foreign` (`id_orgao_central`);

--
-- Índices de tabela `instituicoes_tuteladas`
--
ALTER TABLE `instituicoes_tuteladas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `instituicoes_tuteladas_id_orgao_central_foreign` (`id_orgao_central`);

--
-- Índices de tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `orgao_centrals`
--
ALTER TABLE `orgao_centrals`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Índices de tabela `provincias`
--
ALTER TABLE `provincias`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `provincias_nome_unique` (`nome`),
  ADD UNIQUE KEY `provincias_capital_unique` (`capital`),
  ADD KEY `provincias_id_zona_foreign` (`id_zona`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Índices de tabela `zonas`
--
ALTER TABLE `zonas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `zonas_nome_unique` (`nome`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `distritos`
--
ALTER TABLE `distritos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `governo_provincials`
--
ALTER TABLE `governo_provincials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `instituicoes_ensinos`
--
ALTER TABLE `instituicoes_ensinos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `instituicoes_financeiras`
--
ALTER TABLE `instituicoes_financeiras`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `instituicoes_tuteladas`
--
ALTER TABLE `instituicoes_tuteladas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=175;

--
-- AUTO_INCREMENT de tabela `orgao_centrals`
--
ALTER TABLE `orgao_centrals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `provincias`
--
ALTER TABLE `provincias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `zonas`
--
ALTER TABLE `zonas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `contactos`
--
ALTER TABLE `contactos`
  ADD CONSTRAINT `contactos_id_distrito_foreign` FOREIGN KEY (`id_distrito`) REFERENCES `distritos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `contactos_id_governo_provincial_foreign` FOREIGN KEY (`id_governo_provincial`) REFERENCES `governo_provincials` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `contactos_id_instituicao_ensino_foreign` FOREIGN KEY (`id_instituicao_ensino`) REFERENCES `instituicoes_ensinos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `contactos_id_instituicao_finaceira_foreign` FOREIGN KEY (`id_instituicao_finaceira`) REFERENCES `instituicoes_financeiras` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `contactos_id_instituicao_tutelada_foreign` FOREIGN KEY (`id_instituicao_tutelada`) REFERENCES `instituicoes_tuteladas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `contactos_id_orgao_central_foreign` FOREIGN KEY (`id_orgao_central`) REFERENCES `orgao_centrals` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `distritos`
--
ALTER TABLE `distritos`
  ADD CONSTRAINT `distritos_id_provincia_foreign` FOREIGN KEY (`id_provincia`) REFERENCES `provincias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `governo_provincials`
--
ALTER TABLE `governo_provincials`
  ADD CONSTRAINT `governo_provincials_id_provincia_foreign` FOREIGN KEY (`id_provincia`) REFERENCES `provincias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `instituicoes_ensinos`
--
ALTER TABLE `instituicoes_ensinos`
  ADD CONSTRAINT `instituicoes_ensinos_id_orgao_central_foreign` FOREIGN KEY (`id_orgao_central`) REFERENCES `orgao_centrals` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `instituicoes_financeiras`
--
ALTER TABLE `instituicoes_financeiras`
  ADD CONSTRAINT `instituicoes_financeiras_id_orgao_central_foreign` FOREIGN KEY (`id_orgao_central`) REFERENCES `orgao_centrals` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `instituicoes_tuteladas`
--
ALTER TABLE `instituicoes_tuteladas`
  ADD CONSTRAINT `instituicoes_tuteladas_id_orgao_central_foreign` FOREIGN KEY (`id_orgao_central`) REFERENCES `orgao_centrals` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `provincias`
--
ALTER TABLE `provincias`
  ADD CONSTRAINT `provincias_id_zona_foreign` FOREIGN KEY (`id_zona`) REFERENCES `zonas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
