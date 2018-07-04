-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 04 juil. 2018 à 17:00
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
(4, 1, 'Q7');

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
(1, '', 'mokhtar.zizani@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'Mokhtar', 'ZIZANI', 1);

-- --------------------------------------------------------

--
-- Structure de la table `vehicules`
--

CREATE TABLE `vehicules` (
  `veh_id` int(11) NOT NULL,
  `veh_immat` varchar(20) NOT NULL,
  `veh_etat` varchar(255) DEFAULT 'Neuf',
  `veh_mod` int(11) NOT NULL,
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

INSERT INTO `vehicules` (`veh_id`, `veh_immat`, `veh_etat`, `veh_mod`, `veh_date_post`, `veh_date_buy`, `veh_price_achat`, `veh_price_vente`, `veh_pics`, `veh_statut`, `veh_poster`) VALUES
(1, '22-505-HS', 'Neuf', 2, '2018-07-18 00:00:00', '0000-00-00 00:00:00', 5000, 8000, '', 'Vendu', ''),
(2, 'AB-578-SQ', 'Pour pièce', 2, '2018-07-18 00:00:00', '0000-00-00 00:00:00', 2600, 8000, '', 'Non-vendu', ''),
(3, '36-012-FG', 'Abimé', 2, '2018-07-18 00:00:00', '0000-00-00 00:00:00', 4200, 9000, '', 'Vendu', ''),
(4, 'AS-852-AS', 'Problème moteur', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1600, 3000, '', 'Vendu', ''),
(5, 'AS-852-AS', 'Neuf', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2500, 0, '', '', ''),
(9, 'Full price + plaque', 'Neuf', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2500, 3000, '', 'Non-vendu', ''),
(10, '99-741-852', 'Neuf', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2500, 8555, '', 'Non-vendu', ' '),
(12, 'AS-852-AS', 'Neuf', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 3500, 8900, '', 'Non-vendu', 'Mokhtar ZIZANI'),
(13, 'new teste', 'Neuf', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 8500, 8900, '', 'Non-vendu', 'Mokhtar ZIZANI'),
(14, 'AS-852-AS', 'Neuf', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 8500, 8500, '', 'Non-vendu', 'Mokhtar ZIZANI'),
(15, 'zeze', 'Neuf', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 515151, 5515, '', 'Non-vendu', 'Mokhtar ZIZANI'),
(16, '', 'Neuf', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', 'Non-vendu', 'Mokhtar ZIZANI'),
(17, '62626661', 'Neuf', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 6666, 2222, '', 'Non-vendu', 'Mokhtar ZIZANI');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `constructeur`
--
ALTER TABLE `constructeur`
  ADD PRIMARY KEY (`const_id`);

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
-- AUTO_INCREMENT pour la table `history_connexion`
--
ALTER TABLE `history_connexion`
  MODIFY `con_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `modele`
--
ALTER TABLE `modele`
  MODIFY `mod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `usr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `vehicules`
--
ALTER TABLE `vehicules`
  MODIFY `veh_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
