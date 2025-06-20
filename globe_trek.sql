-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 20 juin 2025 à 16:55
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `globe trek`
--

-- --------------------------------------------------------

--
-- Structure de la table `chambres`
--

CREATE TABLE `chambres` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `capacite` varchar(100) NOT NULL,
  `prix` double NOT NULL,
  `image` varchar(255) NOT NULL,
  `disponible` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `chambres`
--

INSERT INTO `chambres` (`id`, `nom`, `type`, `description`, `capacite`, `prix`, `image`, `disponible`) VALUES
(5, 'Suite', 'suite', 'une belle suite', '2', 250000, 'images/image(3).jpg', '0'),
(8, 'Chambre Standard', 'standard', 'une belle chambre', '4', 123000, '', '1');

-- --------------------------------------------------------

--
-- Structure de la table `destinations`
--

CREATE TABLE `destinations` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `prix` int(11) NOT NULL,
  `pays_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `destinations`
--

INSERT INTO `destinations` (`id`, `nom`, `description`, `prix`, `pays_id`, `image`) VALUES
(17, 'New York', 'une cité magnifique', 243000, 18, '6836fd276d363.jpg'),
(18, 'Mbour', 'une belle ville', 123000, 8, '6839e21a965cb.jpg'),
(19, 'Lac rose', 'un beau lac', 254000, 8, '6839e250b3628.jpg'),
(20, 'Marseille', 'Une ville magnifique', 4276000, 15, '6839e28d2fa2d.jpg'),
(21, 'Rome', 'magnifique', 429000, 16, '6839e2cc67b30.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `pays`
--

CREATE TABLE `pays` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `image` varchar(1255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `pays`
--

INSERT INTO `pays` (`id`, `nom`, `image`) VALUES
(8, 'Sénégal', ''),
(15, 'France', '6830bca90a5eb.jpg'),
(16, 'Italie', '6830bcb686894.jpg'),
(17, 'Corée du Sud', ''),
(18, 'Russie', '');

-- --------------------------------------------------------

--
-- Structure de la table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(11) NOT NULL,
  `reference` varchar(255) NOT NULL,
  `date_arrivee` date NOT NULL,
  `date_depart` date NOT NULL,
  `nombre_nuits` int(11) NOT NULL,
  `nombre_personnes` int(11) NOT NULL,
  `demandes_speciales` text NOT NULL,
  `methode_paiement` varchar(255) NOT NULL,
  `date_reservation` int(11) NOT NULL,
  `chambre_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `prix` double NOT NULL,
  `actions` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `reservations`
--

INSERT INTO `reservations` (`id`, `reference`, `date_arrivee`, `date_depart`, `nombre_nuits`, `nombre_personnes`, `demandes_speciales`, `methode_paiement`, `date_reservation`, `chambre_id`, `client_id`, `prix`, `actions`) VALUES
(4, '#ref1750431151', '2025-06-25', '2025-07-05', 10, 5, 'Avec un wifi', 'cash', 2025, 8, 19, 1230000, '0'),
(5, '#ref1750431286', '2025-06-23', '2025-07-06', 13, 2, 'Avec un wifi', 'creditCard', 2025, 5, 19, 3250000, '0');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `prenom`, `nom`, `adresse`, `tel`, `email`, `mdp`, `role`) VALUES
(16, 'Seynabou', 'Sarr', 'Guédiawaye', '755243969', 'seynabousarr322@gmail.com', '$2y$12$dAAxuuU8P8yXUV89S0buWe5ZMvT4vA.n/WXNAK1yTGx1USHh3nEV6', 'admin'),
(17, 'Modou', 'Sarr', 'Pikine', '755243969', 'client322@gmail.com', '$2y$12$wFxBKTUnwOKMWZQd/oYh6eMMDKbin0DLDT0IqZnguW5aLkB2Mbsb6', 'client'),
(19, 'Oumy', 'Sarr', 'Guédiawaye', '785302447', 'oumy322@gmail.com', '$2y$12$WsJGjkF/ZK2IzojtUYL/ZeDwfv/4.ag0IkpH6tvPn.FmTjyI3c7Yi', 'client');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `chambres`
--
ALTER TABLE `chambres`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `destinations`
--
ALTER TABLE `destinations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pays_id` (`pays_id`);

--
-- Index pour la table `pays`
--
ALTER TABLE `pays`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chambre_id` (`chambre_id`),
  ADD KEY `client_id` (`client_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `chambres`
--
ALTER TABLE `chambres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `destinations`
--
ALTER TABLE `destinations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `pays`
--
ALTER TABLE `pays`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `destinations`
--
ALTER TABLE `destinations`
  ADD CONSTRAINT `destinations_ibfk_1` FOREIGN KEY (`pays_id`) REFERENCES `pays` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
