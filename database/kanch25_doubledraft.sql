-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: mysql2000.my-virtual-panel.com:3306
-- Generation Time: May 10, 2021 at 11:53 AM
-- Server version: 5.5.52-cll
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kanch25_doubledraft`
--

-- --------------------------------------------------------

--
-- Table structure for table `divisions`
--

CREATE TABLE `divisions` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `leagueId` bigint(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `leagues`
--

CREATE TABLE `leagues` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sportId` bigint(20) NOT NULL,
  `realLeagueId` bigint(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `matchups`
--

CREATE TABLE `matchups` (
  `id` bigint(20) NOT NULL,
  `matchupDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `homeTeamId` bigint(20) NOT NULL,
  `awayTeamId` bigint(20) NOT NULL,
  `winningTeamId` bigint(20) DEFAULT NULL,
  `losingTeamId` bigint(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `positionId` bigint(20) NOT NULL,
  `realTeamId` bigint(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `player_team_records`
--

CREATE TABLE `player_team_records` (
  `id` bigint(20) NOT NULL,
  `isStarter` tinyint(1) NOT NULL DEFAULT '0',
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `playerId` bigint(20) NOT NULL,
  `teamId` bigint(20) NOT NULL,
  `weekId` bigint(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `positions`
--

CREATE TABLE `positions` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sportId` bigint(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `real_leagues`
--

CREATE TABLE `real_leagues` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sportId` bigint(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `real_teams`
--

CREATE TABLE `real_teams` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `realLeagueId` bigint(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seasons`
--

CREATE TABLE `seasons` (
  `id` bigint(20) NOT NULL,
  `year` int(11) NOT NULL,
  `numWeeks` int(11) NOT NULL,
  `maxTeamSize` int(11) NOT NULL,
  `scoringBreakdown` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `leagueId` bigint(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `season_lineup_position_requirements`
--

CREATE TABLE `season_lineup_position_requirements` (
  `id` bigint(20) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `num` int(11) NOT NULL,
  `seasonId` bigint(20) NOT NULL,
  `positionId` bigint(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sports`
--

CREATE TABLE `sports` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `userId` bigint(20) DEFAULT NULL,
  `divisionId` bigint(20) DEFAULT NULL,
  `leagueId` bigint(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `role` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT 'user',
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) DEFAULT '0',
  `birthday` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `gender` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip_code` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sessionid` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedAt` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `weekly_scores`
--

CREATE TABLE `weekly_scores` (
  `id` bigint(20) NOT NULL,
  `projectedScore` double NOT NULL DEFAULT '0',
  `actualScore` double NOT NULL DEFAULT '0',
  `scoringBreakdown` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `weekId` bigint(20) NOT NULL,
  `playerId` bigint(20) NOT NULL,
  `teamId` bigint(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `weeks`
--

CREATE TABLE `weeks` (
  `id` bigint(20) NOT NULL,
  `num` int(11) NOT NULL,
  `startDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `seasonId` bigint(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `divisions`
--
ALTER TABLE `divisions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_divisions_leagueId` (`leagueId`);

--
-- Indexes for table `leagues`
--
ALTER TABLE `leagues`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_leagues_sportId` (`sportId`),
  ADD KEY `fk_leagues_realLeagueId` (`realLeagueId`);

--
-- Indexes for table `matchups`
--
ALTER TABLE `matchups`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_matchups_homeTeamId` (`homeTeamId`),
  ADD KEY `fk_matchups_awayTeamId` (`awayTeamId`),
  ADD KEY `fk_matchups_winningTeamId` (`winningTeamId`),
  ADD KEY `fk_matchups_losingTeamId` (`losingTeamId`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_players_positionId` (`positionId`),
  ADD KEY `fk_players_realTeamId` (`realTeamId`);

--
-- Indexes for table `player_team_records`
--
ALTER TABLE `player_team_records`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_player_team_records_playerId` (`playerId`),
  ADD KEY `fk_player_team_records_teamId` (`teamId`),
  ADD KEY `fk_player_team_records_weekId` (`weekId`);

--
-- Indexes for table `positions`
--
ALTER TABLE `positions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_positions_sportId` (`sportId`);

--
-- Indexes for table `real_leagues`
--
ALTER TABLE `real_leagues`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_real_leagues_sportId` (`sportId`);

--
-- Indexes for table `real_teams`
--
ALTER TABLE `real_teams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_real_teams_realLeagueId` (`realLeagueId`);

--
-- Indexes for table `seasons`
--
ALTER TABLE `seasons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_seasons_leagueId` (`leagueId`);

--
-- Indexes for table `season_lineup_position_requirements`
--
ALTER TABLE `season_lineup_position_requirements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_season_lineup_position_requirements_seasonId` (`seasonId`),
  ADD KEY `fk_season_lineup_position_requirements_positionId` (`positionId`);

--
-- Indexes for table `sports`
--
ALTER TABLE `sports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_teams_userId` (`userId`),
  ADD KEY `fk_teams_divisionId` (`divisionId`),
  ADD KEY `fk_teams_leagueId` (`leagueId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`) USING BTREE;

--
-- Indexes for table `weekly_scores`
--
ALTER TABLE `weekly_scores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_weekly_scores_weekId` (`weekId`),
  ADD KEY `fk_weekly_scores_playerId` (`playerId`),
  ADD KEY `fk_weekly_scores_teamId` (`teamId`);

--
-- Indexes for table `weeks`
--
ALTER TABLE `weeks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_weeks_seasonId` (`seasonId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `divisions`
--
ALTER TABLE `divisions`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `leagues`
--
ALTER TABLE `leagues`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `matchups`
--
ALTER TABLE `matchups`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `player_team_records`
--
ALTER TABLE `player_team_records`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `positions`
--
ALTER TABLE `positions`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `real_leagues`
--
ALTER TABLE `real_leagues`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `real_teams`
--
ALTER TABLE `real_teams`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seasons`
--
ALTER TABLE `seasons`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `season_lineup_position_requirements`
--
ALTER TABLE `season_lineup_position_requirements`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sports`
--
ALTER TABLE `sports`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `weekly_scores`
--
ALTER TABLE `weekly_scores`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `weeks`
--
ALTER TABLE `weeks`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
