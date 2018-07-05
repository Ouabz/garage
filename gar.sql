-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 06 juil. 2018 à 16:45
-- Version du serveur :  10.1.33-MariaDB
-- Version de PHP :  7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `garage`
--

-- --------------------------------------------------------

--
-- Structure de la table `constructeur`
--

CREATE TABLE `constructeur` (
  `const_id` int(11) NOT NULL,
  `const_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `constructeur`
--

INSERT INTO `constructeur` (`const_id`, `const_name`) VALUES
(1, 'Audi'),
(2, 'Renault'),
(3, 'Peugeot'),
(4, 'Opel'),
(5, 'Mercedes Benz');

-- --------------------------------------------------------

--
-- Structure de la table `garages`
--

CREATE TABLE `garages` (
  `gar_id` int(11) NOT NULL,
  `gar_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gar_space` int(11) NOT NULL,
  `gar_statut` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Disponible'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `garages`
--

INSERT INTO `garages` (`gar_id`, `gar_name`, `gar_space`, `gar_statut`) VALUES
(3, 'Louvres', 120, 'Non-disponible'),
(5, 'Paris', 852, 'Disponible'),
(7, 'Essonne', 360, 'Disponible '),
(9, 'Saint-Denis', 150, 'Disponible'),
(10, 'Vincenne', 300, 'Disponible'),
(11, 'Grigny', 520, 'Disponible'),
(14, 'Auber', 330, 'Disponible'),
(15, 'Roissy', 300, 'Disponible'),
(16, 'Hoche', 10, 'Disponible'),
(17, 'Opera', 300, 'Disponible'),
(18, 'Orly', 300, 'Disponible');

-- --------------------------------------------------------

--
-- Structure de la table `history_connexion`
--

CREATE TABLE `history_connexion` (
  `con_id` int(11) NOT NULL,
  `con_date` int(11) NOT NULL,
  `con_email` int(11) NOT NULL,
  `con_ip` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `modele`
--

CREATE TABLE `modele` (
  `mod_id` int(11) NOT NULL,
  `mod_const_id` int(11) NOT NULL,
  `mod_name` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `modele`
--

INSERT INTO `modele` (`mod_id`, `mod_const_id`, `mod_name`) VALUES
(1, 5, 'Classe E'),
(2, 5, 'Classe S'),
(3, 1, 'A4'),
(4, 1, 'Q7'),
(5, 4, 'Opel Astra'),
(6, 4, 'Opel Zafira'),
(9, 3, 'Peugeot 300'),
(10, 3, 'Peugeot 208');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `usr_id` int(11) NOT NULL,
  `usr_pics` varchar(255) NOT NULL,
  `usr_email` varchar(255) NOT NULL,
  `usr_password` varchar(255) NOT NULL,
  `usr_firstname` varchar(255) NOT NULL,
  `usr_lastname` varchar(255) NOT NULL,
  `usr_statut` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`usr_id`, `usr_pics`, `usr_email`, `usr_password`, `usr_firstname`, `usr_lastname`, `usr_statut`) VALUES
(1, '', 'mokhtar.zizani@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'Mokhtar', 'ZIZANI', 1),
(2, 'assets/img/avatar.png', 'sdffdq', 'bed5380fa09be1345ce4b0d89ac0c315', 'qdsqds', 'qdsdqs', 1),
(3, 'assets/img/avatar.png', 'demo@demo.fr', 'fe01ce2a7fbac8fafaed7c982a04e229', 'demo', 'demo', 1);

-- --------------------------------------------------------

--
-- Structure de la table `vehicules`
--

CREATE TABLE `vehicules` (
  `veh_id` int(11) NOT NULL,
  `veh_immat` varchar(20) NOT NULL,
  `veh_etat` varchar(255) DEFAULT 'Neuf',
  `veh_mod` int(11) NOT NULL,
  `veh_gar_id` int(11) NOT NULL,
  `veh_date_post` datetime NOT NULL,
  `veh_date_buy` datetime NOT NULL,
  `veh_price_achat` int(25) NOT NULL,
  `veh_price_vente` int(11) NOT NULL,
  `veh_pics` varchar(255) NOT NULL,
  `veh_statut` varchar(255) NOT NULL DEFAULT 'Non-vendu',
  `veh_poster` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `vehicules`
--

INSERT INTO `vehicules` (`veh_id`, `veh_immat`, `veh_etat`, `veh_mod`, `veh_gar_id`, `veh_date_post`, `veh_date_buy`, `veh_price_achat`, `veh_price_vente`, `veh_pics`, `veh_statut`, `veh_poster`) VALUES
(1, '22-505-HS', 'Neuf', 2, 3, '2018-07-18 00:00:00', '0000-00-00 00:00:00', 5000, 8000, '', 'Vendu', ''),
(2, 'AB-578-SQ', 'Pour pièce', 2, 5, '2018-07-18 00:00:00', '0000-00-00 00:00:00', 2600, 8000, '', 'Non-vendu', ''),
(3, '36-012-FG', 'Abimé', 2, 3, '2018-07-18 00:00:00', '0000-00-00 00:00:00', 4200, 9000, '', 'Vendu', ''),
(4, 'AS-852-AS', 'Problème moteur', 1, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1600, 3000, '', 'Vendu', ''),
(5, 'AS-852-AS', 'Neuf', 0, 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2500, 0, '', 'Vendu', ''),
(9, 'Full price + plaque', 'Neuf', 0, 9, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2500, 3000, '', 'Vendu', ''),
(10, '99-741-852', 'Neuf', 0, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2500, 8555, '', 'Non-vendu', ' '),
(12, 'AS-852-AS', 'Neuf', 0, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 3500, 8900, '', 'Non-vendu', 'Mokhtar ZIZANI'),
(13, 'new teste', 'Neuf', 0, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 8500, 8900, '', 'Non-vendu', 'Mokhtar ZIZANI'),
(14, 'AS-852-AS', 'Neuf', 0, 9, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 8500, 8500, '', 'Non-vendu', 'Mokhtar ZIZANI'),
(15, 'zeze', 'Neuf', 0, 9, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2600, 5515, '', 'Non-vendu', 'Mokhtar ZIZANI'),
(16, '', 'Neuf', 0, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', 'Non-vendu', 'Mokhtar ZIZANI'),
(17, '62626661', 'Neuf', 1, 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1000, 2222, '', 'Non-vendu', 'Mokhtar ZIZANI'),
(18, '123456', 'Neuf', 1, 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2500, 6020, '', 'Non-vendu', 'Mokhtar ZIZANI'),
(19, '123456', 'Neuf', 1, 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2500, 6020, '', 'Non-vendu', 'Mokhtar ZIZANI'),
(20, 'BALENCIAGOAAAA', 'Neuf', 2, 7, '2018-07-05 13:54:19', '0000-00-00 00:00:00', 2500, 78900, '', 'Non-vendu', 'Mokhtar ZIZANI'),
(21, 'AS-999-3A', 'Neuf', 3, 17, '2018-07-06 15:53:32', '0000-00-00 00:00:00', 6666, 4588, '', 'Non-vendu', 'Mokhtar ZIZANI');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `constructeur`
--
ALTER TABLE `constructeur`
  ADD PRIMARY KEY (`const_id`);

--
-- Index pour la table `garages`
--
ALTER TABLE `garages`
  ADD PRIMARY KEY (`gar_id`);

--
-- Index pour la table `history_connexion`
--
ALTER TABLE `history_connexion`
  ADD PRIMARY KEY (`con_id`);

--
-- Index pour la table `modele`
--
ALTER TABLE `modele`
  ADD PRIMARY KEY (`mod_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usr_id`);

--
-- Index pour la table `vehicules`
--
ALTER TABLE `vehicules`
  ADD PRIMARY KEY (`veh_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `constructeur`
--
ALTER TABLE `constructeur`
  MODIFY `const_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `garages`
--
ALTER TABLE `garages`
  MODIFY `gar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `history_connexion`
--
ALTER TABLE `history_connexion`
  MODIFY `con_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `modele`
--
ALTER TABLE `modele`
  MODIFY `mod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `usr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `vehicules`
--
ALTER TABLE `vehicules`
  MODIFY `veh_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
