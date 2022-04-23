-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 23 avr. 2022 à 11:40
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `db`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `datepublication` varchar(200) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `extrait` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `datepublication`, `titre`, `extrait`) VALUES
(1, 'Sat, 23 Apr 2022 13:00:09 +0200', 'Au Chili, lâ€™AssemblÃ©e constituante est de plus en plus critiquÃ©e', 'Le projet de Constitution instaure lâ€™idÃ©e dâ€™un Etat solidaire. Les polÃ©miques et une communication inaudible participent au discrÃ©dit de lâ€™assemblÃ©e.'),
(2, 'Sat, 23 Apr 2022 05:20:57 +0200', 'En images | De Colombey-les-Deux-Eglises Ã  Marseille, le carnet de campagne du photographe Guillaume Herbaut', 'Pendant quatre semaines, Â«Â Le MondeÂ Â» a publiÃ© chaque jour une photo du reporter. De Colombey-les-Deux-Eglises Ã  Marseille, le photographe a saisi lâ€™atmosphÃ¨re de la France durant cette campagne prÃ©sidentielle.'),
(3, 'Sat, 23 Apr 2022 10:32:01 +0200', 'Dans un village cÃ©venol, une Â«Â nappe phrÃ©atique artificielleÂ Â» pour Ã©viter les coupures dâ€™eau', 'Dans le sud de la France, la sÃ©cheresse risque de sâ€™aggraver avec le changement climatique et menacer lâ€™accÃ¨s Ã  lâ€™eau potable. Pour y faire face, le village ardÃ©chois de Beaumont expÃ©rimente un projet de stockage souterrain dâ€™eau clarifiÃ©e.'),
(4, 'Sat, 23 Apr 2022 10:20:18 +0200', 'A JÃ©rusalem, une semaine de haute tension sur lâ€™esplanade des MosquÃ©es', 'Lâ€™intervention de la police israÃ©lienne sur lâ€™esplanade des MosquÃ©es suscite une vive Ã©motion.'),
(5, 'Fri, 22 Apr 2022 17:00:17 +0200', 'EnquÃªte | Vladimir Poutine, le culte de la guerre', 'Jamais assumÃ©e dans les mots, la violence armÃ©e est lâ€™instrument privilÃ©giÃ© par le chef du Kremlin pour imposer son pouvoir et organiser la confrontation avec lâ€™Occident.'),
(6, 'Sat, 23 Apr 2022 08:10:03 +0200', 'Lâ€™UE impose une rÃ©gulation aux rÃ©seaux sociaux comme Facebook, Instagram, Twitter ou TikTok, et aux sites de vente en ligne comme Amazon ou Leboncoin', 'Avec le Digital Services Act, les pratiques de modÃ©ration des contenus des grands services numÃ©riques seront surveillÃ©es par Bruxelles, qui pourra infliger de lourdes sanctions.'),
(7, 'Sat, 23 Apr 2022 08:00:13 +0200', 'La citÃ© des Doges affiche son soutien Ã  la culture ukrainienne', 'Les jeunes artistes de lâ€™exposition Â«Â This is UkraineÂ : Defending FreedomÂ Â» se sont fait les ambassadeurs de leur pays bombardÃ©.'),
(8, 'Sat, 23 Apr 2022 06:33:53 +0200', 'Guerre en Ukraine en directÂ : une nouvelle Ã©vacuation des civils coincÃ©s dans la derniÃ¨re poche de rÃ©sistance Ã  Marioupol est espÃ©rÃ©e ce samedi', 'Le gouvernement de Kiev affirme que Â«Â des femmes, des enfants et des personnes Ã¢gÃ©esÂ Â» vont tenter de quitter le complexe mÃ©tallurgique Azovstal, oÃ¹ sont retranchÃ©s les derniers soldats ukrainiens.'),
(9, 'Sat, 23 Apr 2022 05:15:09 +0200', 'Lâ€™Union europÃ©enne adopte son rÃ¨glement sur les services numÃ©riques', 'Les Etats membres, la Commission et le Parlement se sont mis dâ€™accord sur une nouvelle lÃ©gislation permettant de mieux lutter contre les dÃ©rives du Web, comme les discours de haine, la dÃ©sinformation ou la contrefaÃ§on.'),
(10, 'Sat, 23 Apr 2022 05:04:00 +0200', 'La guerre en Ukraine, prioritÃ© de lâ€™ElysÃ©e', 'Dans un entretien au quotidien Â«Â Ouest-FranceÂ Â», vendredi, Emmanuel Macron a reconnu que la France livrait Ã  Kiev des missiles antichars Milan et des canons Caesar.'),
(11, 'Sat, 23 Apr 2022 04:11:20 +0200', 'Etats-UnisÂ : un tireur blesse quatre personnes Ã  Washington et se suicide', 'Trois adultes et une adolescente ont Ã©tÃ© blessÃ©es vendredi dans un quartier paisible de la capitale amÃ©ricaine par un tireur. Lâ€™homme sâ€™est suicidÃ© alors quâ€™il Ã©tait sur le point dâ€™Ãªtre arrÃªtÃ© vendredi, a annoncÃ© la police.'),
(12, 'Sat, 23 Apr 2022 03:38:03 +0200', 'Mali : dans la guerre de lâ€™information, lâ€™armÃ©e franÃ§aise rÃ©plique et accuse le Groupe Wagner', 'Les militaires franÃ§ais ont filmÃ© ce quâ€™ils affirment Ãªtre des mercenaires russes en train dâ€™enterrer des corps prÃ¨s de la base de Gossi, dans le nord du Mali.'),
(13, 'Sat, 23 Apr 2022 02:26:14 +0200', 'Le gouverneur de Floride promulgue une loi qui met fin au statut favorable deÂ Disney World', 'Ron DeSantis a souhaitÃ© punir le gÃ©ant du divertissement pour les prises de position de son PDG sur la loi dite Â«Â Donâ€™t Say GayÂ Â», jugÃ©e homophobe et contraire aux valeurs du groupe propriÃ©taire du plus grand parc dâ€™attractions de lâ€™Etat.'),
(14, 'Sat, 23 Apr 2022 01:41:48 +0200', 'PrÃ©sidentielleÂ 2022Â : dans le Lot, Emmanuel Macron se fait lâ€™apÃ´tre dâ€™une France unie', 'A lâ€™occasion de son dernier meeting de campagne avant le second tour du scrutin, vendredi, Ã  Figeac, le prÃ©sident candidat a voulu se faire le contre-modÃ¨le de Marine LeÂ Pen.'),
(15, 'Sat, 23 Apr 2022 00:36:26 +0200', 'PrÃ©sidentielleÂ 2022Â : Marine LeÂ Pen clÃ´t sa campagne sur ses terres politiques nordistes', 'La candidate du Rassemblement national a recueilli compliments et encouragements lors de son dernier dÃ©placement avant le second tour du scrutin, vendredi, dans le Pas-de-Calais.'),
(16, 'Sat, 23 Apr 2022 00:14:14 +0200', 'Tournoi des six nationsÂ : le XV de France fÃ©minin domine le pays de Galles, avant la Â«Â finaleÂ Â» contre lâ€™Angleterre', 'Les Bleues, victorieuses des Galloises (33-5) vendredi Ã  Cardiff lors de la 4eÂ journÃ©e du Tournoi des six nations, ont pris rendez-vous avec les Anglaises, favorites pour remporter le Grand Chelem Ã  Bayonne le week-end prochain.'),
(17, 'Fri, 22 Apr 2022 23:15:24 +0200', 'La Belgique accorde lâ€™asile Ã  lâ€™ancien prÃ©sident Ã©quatorien Rafael Correa', 'M.Â Correa a Ã©tÃ© condamnÃ© par contumace en septembreÂ 2020 Ã  huit ans de prison pour corruption et crimes imprescriptibles tels que dÃ©tournement de fonds, extorsion et enrichissement illicite.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
