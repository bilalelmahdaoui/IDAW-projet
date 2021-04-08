-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 08, 2021 at 10:14 PM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `idaw_projet`
--

-- --------------------------------------------------------

--
-- Table structure for table `Aliment`
--

CREATE TABLE `Aliment` (
  `id_aliment` int(11) NOT NULL,
  `nom_aliment` text NOT NULL,
  `calories` int(11) NOT NULL,
  `eau` int(11) NOT NULL,
  `proteines` int(11) NOT NULL,
  `glucides` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Aliment`
--

INSERT INTO `Aliment` (`id_aliment`, `nom_aliment`, `calories`, `eau`, `proteines`, `glucides`) VALUES
(1, 'Multifruits - Pressade - 1,5 l', 0, 3, 0, 1),
(2, 'Ratatouille - Cassegrain - 380 g', 0, 0, 0, 2),
(3, 'Lait d’amande sans sucres - Bjorg - 1 L\r\n', 0, 0, 0, 0),
(4, 'Jus d\'orange', 0, 0, 0, 0),
(5, 'Nutella - Ferrero - 400 g', 0, 0, 0, 0),
(6, 'Biscuit pomme noisette - Gerblé - 230 g', 0, 0, 0, 0),
(7, 'Tomate', 0, 0, 0, 7),
(8, 'Sucre', 0, 0, 0, 0),
(9, 'Sel', 0, 0, 0, 0),
(10, 'Oignon en poudre', 0, 0, 0, 0),
(11, 'Tomato Ketchup BIO - Heinz - 580 g', 0, 0, 0, 0),
(13, 'hi', 19, 4, 95, 55),
(14, 'hellooooo', 1, 3, 5, 2),
(15, 'gdfgdfg', 2, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `Apport`
--

CREATE TABLE `Apport` (
  `id_apport` int(11) NOT NULL,
  `nom_apport` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Apport`
--

INSERT INTO `Apport` (`id_apport`, `nom_apport`) VALUES
(1, 'Calories'),
(2, 'Eau'),
(3, 'Protéines'),
(4, 'Glucides');

-- --------------------------------------------------------

--
-- Table structure for table `Composer`
--

CREATE TABLE `Composer` (
  `id_aliment_parent` int(11) NOT NULL,
  `id_aliment_filleule` int(11) NOT NULL,
  `ratio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Composer`
--

INSERT INTO `Composer` (`id_aliment_parent`, `id_aliment_filleule`, `ratio`) VALUES
(11, 7, 60),
(11, 8, 15),
(11, 9, 15),
(11, 10, 20);

-- --------------------------------------------------------

--
-- Table structure for table `Consommer`
--

CREATE TABLE `Consommer` (
  `login` varchar(50) NOT NULL,
  `id_aliment` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Consommer`
--

INSERT INTO `Consommer` (`login`, `id_aliment`, `date`) VALUES
('bilalelmahdaoui', 1, '2021-02-11'),
('bilalelmahdaoui', 5, '2021-04-06'),
('bilalelmahdaoui', 11, '2021-04-17');

-- --------------------------------------------------------

--
-- Table structure for table `Offrir`
--

CREATE TABLE `Offrir` (
  `id_aliment` int(11) NOT NULL,
  `id_apport` int(11) NOT NULL,
  `valeur_moyenne` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Offrir`
--

INSERT INTO `Offrir` (`id_aliment`, `id_apport`, `valeur_moyenne`) VALUES
(3, 2, 100);

-- --------------------------------------------------------

--
-- Table structure for table `Utilisateur`
--

CREATE TABLE `Utilisateur` (
  `login` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `sexe` varchar(10) NOT NULL,
  `date_naissance` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Utilisateur`
--

INSERT INTO `Utilisateur` (`login`, `password`, `nom`, `prenom`, `sexe`, `date_naissance`) VALUES
('bilalelmahdaoui', 'helloworld', 'Bilal', 'El Mahdaoui', 'Homme', '1999-11-26'),
('helloworld', 'helloworld', 'World', 'Hello', 'Femme', '2021-04-23'),
('hiworld', 'helloworld', 'World', 'Hi', 'Homme', '2021-04-16'),
('lucfabresse', 'helloworld', 'Fabresse', 'Luc', 'Homme', '1993-04-17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Aliment`
--
ALTER TABLE `Aliment`
  ADD PRIMARY KEY (`id_aliment`);

--
-- Indexes for table `Apport`
--
ALTER TABLE `Apport`
  ADD PRIMARY KEY (`id_apport`);

--
-- Indexes for table `Composer`
--
ALTER TABLE `Composer`
  ADD KEY `id_aliment_parent` (`id_aliment_parent`),
  ADD KEY `id_aliment_filleule` (`id_aliment_filleule`);

--
-- Indexes for table `Consommer`
--
ALTER TABLE `Consommer`
  ADD KEY `login` (`login`),
  ADD KEY `id_aliment` (`id_aliment`);

--
-- Indexes for table `Offrir`
--
ALTER TABLE `Offrir`
  ADD KEY `id_aliment` (`id_aliment`),
  ADD KEY `id_apport` (`id_apport`);

--
-- Indexes for table `Utilisateur`
--
ALTER TABLE `Utilisateur`
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Aliment`
--
ALTER TABLE `Aliment`
  MODIFY `id_aliment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `Apport`
--
ALTER TABLE `Apport`
  MODIFY `id_apport` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Composer`
--
ALTER TABLE `Composer`
  ADD CONSTRAINT `composer_ibfk_1` FOREIGN KEY (`id_aliment_parent`) REFERENCES `Aliment` (`id_aliment`),
  ADD CONSTRAINT `composer_ibfk_2` FOREIGN KEY (`id_aliment_filleule`) REFERENCES `Aliment` (`id_aliment`);

--
-- Constraints for table `Consommer`
--
ALTER TABLE `Consommer`
  ADD CONSTRAINT `consommer_ibfk_1` FOREIGN KEY (`login`) REFERENCES `Utilisateur` (`login`),
  ADD CONSTRAINT `consommer_ibfk_2` FOREIGN KEY (`id_aliment`) REFERENCES `Aliment` (`id_aliment`);

--
-- Constraints for table `Offrir`
--
ALTER TABLE `Offrir`
  ADD CONSTRAINT `offrir_ibfk_1` FOREIGN KEY (`id_aliment`) REFERENCES `Aliment` (`id_aliment`),
  ADD CONSTRAINT `offrir_ibfk_2` FOREIGN KEY (`id_apport`) REFERENCES `Apport` (`id_apport`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
