-- phpMyAdmin SQL Dump
-- version 5.2.2deb1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mar. 23 sep. 2025 à 05:54
-- Version du serveur : 8.4.6-0ubuntu0.25.04.3
-- Version de PHP : 8.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `flashculture`
--

-- --------------------------------------------------------

--
-- Structure de la table `mdl_config_plugins`
--

CREATE TABLE `mdl_config_plugins` (
  `id` bigint NOT NULL,
  `plugin` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'core',
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '',
  `value` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='Moodle modules and plugins configuration variables' ROW_FORMAT=COMPRESSED;

--
-- Déchargement des données de la table `mdl_config_plugins`
--

INSERT INTO `mdl_config_plugins` (`id`, `plugin`, `name`, `value`) VALUES
(5577, 'theme_boost_magnific', 'version', '2025091900'),
(5579, 'theme_boost_magnific', 'background_profile_image', '/user-modal-background.jpg'),
(5580, 'theme_boost_magnific', 'brandcolor_background_menu', '1'),
(5581, 'theme_boost_magnific', 'top_scroll_fix', '1'),
(5582, 'theme_boost_magnific', 'top_scroll_background_color', '#5c5d5f'),
(5583, 'theme_boost_magnific', 'top_scroll_text_color', '#FFFFFF'),
(5584, 'theme_boost_magnific', 'logo_write', '0'),
(5585, 'theme_boost_magnific', 'backgroundimage', ''),
(5586, 'theme_boost_magnific', 'loginbackgroundimage', ''),
(5587, 'theme_boost_magnific', 'scsspre', ''),
(5588, 'theme_boost_magnific', 'scss', ':target {\r\n  scroll-margin-top: 80px; /* Ajuste la valeur selon la hauteur du header */\r\n}\r\n'),
(5589, 'theme_boost_magnific', 'course_summary', '0'),
(5590, 'theme_boost_magnific', 'course_summary_banner', '0'),
(5591, 'theme_boost_magnific', 'enable_accessibility', '0'),
(5592, 'theme_boost_magnific', 'enable_vlibras', '0'),
(5593, 'theme_boost_magnific', 'footer_background_color', '#1a2a6c'),
(5594, 'theme_boost_magnific', 'footer_title_1', ''),
(5595, 'theme_boost_magnific', 'footer_html_1', ''),
(5596, 'theme_boost_magnific', 'footer_title_2', ''),
(5597, 'theme_boost_magnific', 'footer_html_2', ''),
(5598, 'theme_boost_magnific', 'footer_title_3', ''),
(5599, 'theme_boost_magnific', 'footer_html_3', ''),
(5600, 'theme_boost_magnific', 'footer_title_4', ''),
(5601, 'theme_boost_magnific', 'footer_html_4', ''),
(5602, 'theme_boost_magnific', 'footer_show_copywriter', '1'),
(5603, 'theme_boost_magnific', 'startcolor', '#000'),
(5637, 'theme_boost_magnific', 'scsspos', ''),
(5638, 'theme_boost_magnific', 'logintheme', 'aurora'),
(5639, 'theme_boost_magnific', 'course_summary_banner_3', '1'),
(5640, 'theme_boost_magnific', 'course_summary_banner_11', '1'),
(5641, 'theme_boost_magnific', 'course_summary_banner_6', '1'),
(5642, 'theme_boost_magnific', 'course_summary_banner_5', '1'),
(5647, 'theme_boost_magnific', 'course_summary_banner_2', '1');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `mdl_config_plugins`
--
ALTER TABLE `mdl_config_plugins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mdl_confplug_plunam_uix` (`plugin`,`name`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `mdl_config_plugins`
--
ALTER TABLE `mdl_config_plugins`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5684;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
