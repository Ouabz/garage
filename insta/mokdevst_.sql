-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Dim 03 Juin 2018 à 12:35
-- Version du serveur :  10.0.32-MariaDB-0+deb8u1
-- Version de PHP :  5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `mokdevst_`
--

-- --------------------------------------------------------

--
-- Structure de la table `artiste`
--

CREATE TABLE `artiste` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `name_art` varchar(255) NOT NULL,
  `adress` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `lat` int(11) NOT NULL,
  `lon` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `statut` tinyint(1) NOT NULL,
  `uploaded_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL,
  `country` varchar(255) NOT NULL,
  `last_tentative_login_ip` varchar(255) NOT NULL,
  `last_date_connexion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `artiste`
--

INSERT INTO `artiste` (`id`, `firstname`, `name_art`, `adress`, `city`, `email`, `lat`, `lon`, `password`, `salt`, `avatar`, `pseudo`, `statut`, `uploaded_at`, `deleted_at`, `country`, `last_tentative_login_ip`, `last_date_connexion`) VALUES
(134, '', '', '', 'Oran', '', 0, 0, '$2y$11$9jq60c57neutyn90l4om6eeYd/KnC5yAcifMiYMu733og5MaTAvfe', '9jq60c57neutyn90l4om6t', '', 'Mokhtar', 1, '2018-05-09 20:46:31', '0000-00-00 00:00:00', 'Algérie', '', '0000-00-00 00:00:00'),
(135, '', '', '', 'Paris', '', 0, 0, '$2y$11$9c9twohcl9e4p9jd2wmlcucxev8cfit327mRskvzcJVAOZDULaWHu', '9c9twohcl9e4p9jd2wmlcy', '', 'François', 1, '2018-05-09 20:46:50', '0000-00-00 00:00:00', 'France', '', '0000-00-00 00:00:00'),
(136, 'Tamerenktm', '', '', 'Lyon', '', 0, 0, '$2y$11$5bad9ukljdvcn13yecutrO4tXJIdeDKXCIIoA5NPpvrJdvfUAPmFW', '5bad9ukljdvcn13yecutrc', '', 'Tamerenktm', 1, '2018-05-09 20:49:25', '0000-00-00 00:00:00', 'France', '', '0000-00-00 00:00:00'),
(137, 'Mathis', 'Lorthios', '12 Avenue Des Caracapd', 'Paris', 'mathis.lorthios@gmail.com', 2147483647, 2147483647, '$2y$11$4hxl1bg3tlmqk34eeditkezOaGTbm05eVKN5cB8zjd9E16zwowQoG', '4hxl1bg3tlmqk34eeditkn', '5af491ae3a12f3865967-wallpaper-full-hd_XNgM7er.jpg', 'MathisL', 0, '2018-05-10 20:38:38', '0000-00-00 00:00:00', 'France', '', '0000-00-00 00:00:00'),
(138, 'Sdfsdfsdfsdf', '', '', 'Paris', '', 0, 0, '$2y$11$q0ywcb72xn26z9f80bxasuuxparSCDOqM5yqasjXNSByHFnSNwZNy', 'q0ywcb72xn26z9f80bxas4', '', '', 0, '2018-05-13 16:52:21', '0000-00-00 00:00:00', 'France', '', '0000-00-00 00:00:00'),
(139, 'Recaptcha Good', '', '', 'Paris', '', 0, 0, '$2y$11$77b4ga270m11qj9fhtxw1um3hs2mBo2vwpj0y.FAvtFf6Fx0Yflva', '77b4ga270m11qj9fhtxw1u', '', '', 0, '2018-05-13 16:58:10', '0000-00-00 00:00:00', 'France', '', '0000-00-00 00:00:00'),
(140, 'Faksox', '', '', 'Paris', '', 0, 0, '$2y$11$ohb1nandn1pqpod5ufeorOx/P1p.w5j7ZbK9ECNKU.iY3ZU2ZCYQ2', 'ohb1nandn1pqpod5ufeorc', '', '', 1, '2018-05-28 21:29:28', '0000-00-00 00:00:00', 'France', '', '0000-00-00 00:00:00'),
(141, 'Sdffsdfsdsfd', '', '', 'Paris', 'email@email.fr', 0, 0, 'mdp', 'pa4mgu7xh4osq6p4yfpnlh', '', 'Testeing', 1, '2018-05-28 22:51:58', '0000-00-00 00:00:00', 'France', '', '0000-00-00 00:00:00'),
(142, 'Mokhtar', 'Zizani', '45 Avenue Des Platanes', 'Paris', 'mokhtar.zizani@gmail.com', 2147483647, 2147483647, '5f4dcc3b5aa765d61d8327deb882cf99', 'fts4hxflwjfo6s9tx3mvre', '', 'Zabouni', 1, '2018-05-29 15:18:57', '0000-00-00 00:00:00', 'France', '37.173.42.149', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `artwork`
--

CREATE TABLE `artwork` (
  `art_id` int(11) NOT NULL,
  `art_title` varchar(255) NOT NULL,
  `art_desc` text NOT NULL,
  `art_media` varchar(255) NOT NULL,
  `art_artist` int(11) NOT NULL,
  `art_category` int(11) NOT NULL,
  `art_active` tinyint(1) NOT NULL,
  `art_uploaded_at` datetime NOT NULL,
  `art_deleted_at` datetime NOT NULL,
  `art_ip_poster` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `artwork`
--

INSERT INTO `artwork` (`art_id`, `art_title`, `art_desc`, `art_media`, `art_artist`, `art_category`, `art_active`, `art_uploaded_at`, `art_deleted_at`, `art_ip_poster`) VALUES
(10, 'Instagram First Post', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vulputate nibh a odio venenatis, ut lacinia lacus vulputate. Donec sollicitudin, nisi eu lobortis luctus, arcu sapien cursus nisi, aliquet rutrum lacus nulla a turpis. ', 'image1.jpg', 0, 11, 1, '2018-05-09 20:37:38', '0000-00-00 00:00:00', NULL),
(11, 'Instagram Second Post', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vulputate nibh a odio venenatis, ut lacinia lacus vulputate. Donec sollicitudin, nisi eu lobortis luctus, arcu sapien cursus nisi, aliquet rutrum lacus nulla a turpis. ', 'image2.jpg', 0, 10, 1, '2018-05-09 21:48:40', '0000-00-00 00:00:00', NULL),
(12, 'Three', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vulputate nibh a odio venenatis, ut lacinia lacus vulputate. Donec sollicitudin, nisi eu lobortis luctus, arcu sapien cursus nisi, aliquet rutrum lacus nulla a turpis. ', 'image3.jpg', 0, 10, 1, '2018-05-10 11:41:47', '0000-00-00 00:00:00', NULL),
(13, 'Second Zone', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vulputate nibh a odio venenatis, ut lacinia lacus vulputate. Donec sollicitudin, nisi eu lobortis luctus, arcu sapien cursus nisi, aliquet rutrum lacus nulla a turpis. ', 'image4.jpg', 0, 10, 1, '2018-05-10 12:30:46', '0000-00-00 00:00:00', NULL),
(15, 'Grey', 'Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit. Praesent Vulputate Nibh A Odio Venenatis, Ut Lacinia Lacus Vulputate. Donec Sollicitudin, Nisi Eu Lobortis Luctus, Arcu Sapien Cursus Nisi, Aliquet Rutrum Lacus Nulla A Turpis. ', '5af43045dd0c0150.jpg', 0, 11, 1, '2018-05-10 13:43:01', '0000-00-00 00:00:00', NULL),
(16, 'Mathis', ' Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit. Praesent Vulputate Nibh A Odio Venenatis, Ut Lacinia Lacus Vulputate. Donec Sollicitudin, Nisi Eu Lobortis Luctus, Arcu Sapien Cursus Nisi, Aliquet Rutrum Lacus Nulla A Turpis.', '5af433bd1f2ab150.jpg', 0, 11, 1, '2018-05-10 13:57:49', '0000-00-00 00:00:00', NULL),
(139, ' Nextadvance', ' Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit. Praesent Vulputate Nibh A Odio Venenatis, Ut Lacinia Lacus Vulputate. Donec Sollicitudin, Nisi Eu Lobortis Luctus, Arcu Sapien Cursus Nisi, Aliquet Rutrum Lacus Nulla A Turpis.', '5af4a6260507c150.jpg', 0, 10, 0, '2018-05-10 22:05:58', '0000-00-00 00:00:00', NULL),
(141, 'Fdp', ' Sdfsfdsdf', '5b0a882dbbe3eLOGO Aysad-01.png', 0, 10, 1, '2018-05-27 12:27:57', '0000-00-00 00:00:00', '::1'),
(142, 'Bien Et Facile !', ' Sqsqssqsqqssq', '5af4a6260507c150.jpg', 0, 10, 1, '2018-05-27 23:58:23', '0000-00-00 00:00:00', '82.245.130.15'),
(145, 'Mon Article', 'Sdqsdqsdqsqds Qqsddqsdqs Qsqdsdqsqsd Q ', '5b126d43d9032Screenshot_2.png', 0, 10, 1, '2018-06-02 12:11:15', '0000-00-00 00:00:00', '82.245.130.15');

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_title` varchar(255) NOT NULL,
  `cat_pict` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `category`
--

INSERT INTO `category` (`cat_id`, `cat_title`, `cat_pict`) VALUES
(10, 'Urbain', '5af33ce95add1structure-et-plancher-redi.jpg'),
(11, 'Moderne', '5af33cf74af91moquette-redimensionner.jpg'),
(12, 'Fdp', '');

-- --------------------------------------------------------

--
-- Structure de la table `connexion`
--

CREATE TABLE `connexion` (
  `con_id` int(11) NOT NULL,
  `con_usr_id` int(11) NOT NULL,
  `con_date_start` datetime NOT NULL,
  `con_date_end` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `history_connexion`
--

CREATE TABLE `history_connexion` (
  `id` int(11) NOT NULL,
  `email_artist` varchar(255) NOT NULL,
  `ip_login` varchar(255) NOT NULL,
  `date_login` datetime NOT NULL,
  `passwordentry` varchar(255) NOT NULL,
  `success_statut` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `history_connexion`
--

INSERT INTO `history_connexion` (`id`, `email_artist`, `ip_login`, `date_login`, `passwordentry`, `success_statut`) VALUES
(5, 'azeza', '37.173.42.149', '2018-05-29 16:06:36', '', ''),
(6, 'email', '37.173.42.149', '2018-05-29 16:08:12', 'passwordentryeaha', ''),
(7, 'bande de zfeg', '37.173.42.149', '2018-05-29 16:09:21', 'password', ''),
(8, 'bad', '37.173.42.149', '2018-05-29 16:15:57', 'combine', 'Bad combine'),
(9, 'mokhtar.zizani@gmail.com', '37.173.42.149', '2018-05-29 16:16:11', 'password', 'Login Success'),
(10, 'ssfd', '85.203.13.37', '2018-05-29 17:37:52', 'dsfsdf', 'Bad combine'),
(11, 'mokhtar.zizani@gmail.com', '85.203.13.37', '2018-05-29 17:38:01', 'pasword', 'Bad combine'),
(12, 'mokhtar.zizani@gmail.com', '85.203.13.37', '2018-05-29 17:38:08', 'password', 'Login Success'),
(13, 'sdfsfd@sdsfd.fr', '82.245.130.15', '2018-05-29 17:56:04', 'sdfsdfsfd', 'Bad combine'),
(14, 'mokhtar.zizani@gmail.com', '82.245.130.15', '2018-05-29 17:56:12', 'password', 'Login Success'),
(15, 'mokhtar.zizani@gmail.com', '82.245.130.15', '2018-05-29 17:56:44', 'password', 'Bad combine'),
(16, 'mokhtar.zizani@gmail.com', '82.245.130.15', '2018-05-29 18:00:17', 'passwird', 'Bad combine'),
(17, 'mokhtar.zizani@gmail.com', '82.245.130.15', '2018-05-29 18:00:27', 'password', 'Login Success'),
(18, 'sfdsfd@sfsf.fr', '82.245.130.15', '2018-05-29 18:04:23', 'sfdsfd', 'Bad combine'),
(19, 'sddsf@mail.com', '82.245.130.15', '2018-05-29 18:07:14', 'sfdsf', 'Bad combine'),
(20, 'fdsfsdsdf@sdsdf.fr', '82.245.130.15', '2018-05-29 18:19:00', 'sdsdf', 'Bad combine'),
(21, 'mokhtar.zizani@gmail.com', '82.245.130.15', '2018-05-29 18:19:43', 'pass', 'Bad combine'),
(22, 'mokhtar.zizani@gmail.com', '82.245.130.15', '2018-05-29 18:19:48', 'password', 'Login Success'),
(23, 'mokhtar.zizani@gmail.com', '82.245.130.15', '2018-05-29 18:21:03', 'password', 'Login Success'),
(24, 'mokhtar.zizani@gmail.com', '82.245.130.15', '2018-05-29 18:23:34', 'password', 'Login Success'),
(25, 'mokhtar.zizani@gmail.com', '82.245.130.15', '2018-05-29 18:24:06', 'password', 'Login Success'),
(26, 'dssdf@sdsdf.fr', '82.245.130.15', '2018-05-29 18:24:50', 'sdsd', 'Bad combine'),
(27, 'mokhtar.zizani@gmail.com', '82.245.130.15', '2018-05-29 18:24:56', 'password', 'Bad combine'),
(28, 'mokhtar.zizani@gmail.com', '82.245.130.15', '2018-05-29 18:25:57', 'pass', 'Bad combine'),
(29, 'mokhtar.zizani@gmail.com', '82.245.130.15', '2018-05-29 18:26:02', 'password', 'Bad combine'),
(30, 'mokhtar.zizani@gmail.com', '82.245.130.15', '2018-05-29 18:26:07', 'password', 'Bad combine'),
(31, 'mokhtar.zizani@gmail.com', '82.245.130.15', '2018-05-29 18:26:25', 'passord', 'Bad combine'),
(32, 'mokhtar.zizani@gmail.com', '82.245.130.15', '2018-05-29 18:26:36', 'password', 'Login Success'),
(33, 'Zabouni', '37.59.104.187', '2018-05-30 15:09:10', 'm2syhajn', 'Bad combine'),
(34, 'Zabouni', '37.59.104.187', '2018-05-30 15:09:18', 'slenderasia14', 'Bad combine'),
(35, 'mokhtar.zizani@gmail.com', '37.59.104.187', '2018-05-30 15:09:29', 'm2syhajn', 'Bad combine'),
(36, 'mokhtar.zizani@gmail.com', '37.59.104.187', '2018-05-30 15:09:39', 'password', 'Login Success'),
(37, 'mokhtar@pass.fr', '37.59.104.187', '2018-05-31 09:49:16', 'password', 'Bad combine'),
(38, 'dsfdsfsdf', '37.173.87.157', '2018-05-31 16:13:56', 'sdfsdfdsf', 'Bad combine'),
(39, 'dsfdsfsdf', '37.173.87.157', '2018-05-31 16:14:20', 'sdfsdfdsf', 'Bad combine'),
(40, 'dsfdsfsdf', '37.173.87.157', '2018-05-31 16:15:14', 'sdfsdfdsf', 'Bad combine'),
(41, 'dsfdsfsdf', '37.173.87.157', '2018-05-31 16:15:42', 'sdfsdfdsf', 'Bad combine'),
(42, 'dsfdsfsdf', '37.173.87.157', '2018-05-31 16:16:13', 'sdfsdfdsf', 'Bad combine'),
(43, 'dsfdsfsdf', '37.173.87.157', '2018-05-31 16:17:44', 'sdfsdfdsf', 'Bad combine'),
(44, 'dsfdsfsdf', '37.173.87.157', '2018-05-31 16:18:33', 'sdfsdfdsf', 'Bad combine'),
(45, 'dsfdsfsdf', '37.173.87.157', '2018-05-31 16:18:49', 'sdfsdfdsf', 'Bad combine'),
(46, 'mokhtar.zizani@gmail.com', '37.173.87.157', '2018-05-31 16:19:37', 'password', 'Login Success'),
(47, 'sdfdsf', '37.173.87.157', '2018-05-31 16:34:36', 'sdfdsfdsf', 'Bad combine'),
(48, 'mokhtar', '37.173.87.157', '2018-05-31 16:38:18', 'sdffsd', 'Bad combine'),
(49, 'mokhtar.zizani@gmail.com', '37.173.87.157', '2018-05-31 16:38:29', 'password', 'Login Success'),
(50, 'mokhtar.zizani@gmail.com', '37.173.87.157', '2018-05-31 16:42:05', 'password', 'Login Success'),
(51, 'mokhtar.zizani@gmail.com', '37.170.133.94', '2018-06-01 00:42:09', 'password', 'Login Success'),
(52, 'mokhtar.zizani@gmail.com', '37.170.133.94', '2018-06-01 00:55:37', 'password', 'Login Success'),
(53, 'mokhtar.zizani@gmail.com', '82.245.130.15', '2018-06-01 19:07:00', 'password', 'Login Success'),
(54, 'mokhtar.zizani@gmail.com', '82.245.130.15', '2018-06-02 12:09:11', 'password', 'Login Success');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `usr_id` int(11) NOT NULL,
  `usr_login` varchar(255) NOT NULL,
  `usr_pass` varchar(255) NOT NULL,
  `usr_salt` varchar(255) NOT NULL,
  `usr_active` tinyint(1) NOT NULL,
  `usr_updated_at` datetime NOT NULL,
  `usr_deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `artiste`
--
ALTER TABLE `artiste`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `artwork`
--
ALTER TABLE `artwork`
  ADD PRIMARY KEY (`art_id`),
  ADD KEY `fk_artiste` (`art_artist`),
  ADD KEY `fk_category` (`art_category`);

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Index pour la table `connexion`
--
ALTER TABLE `connexion`
  ADD PRIMARY KEY (`con_id`);

--
-- Index pour la table `history_connexion`
--
ALTER TABLE `history_connexion`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`usr_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `artiste`
--
ALTER TABLE `artiste`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;
--
-- AUTO_INCREMENT pour la table `artwork`
--
ALTER TABLE `artwork`
  MODIFY `art_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;
--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `connexion`
--
ALTER TABLE `connexion`
  MODIFY `con_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `history_connexion`
--
ALTER TABLE `history_connexion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `usr_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
