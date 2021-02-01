-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 21 jan. 2021 à 10:38
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mabase`
--

-- --------------------------------------------------------

--
-- Structure de la table `monprojet`
--

CREATE TABLE `monprojet` (
  `EMAIL` varchar(30) NOT NULL,
  `NOM` varchar(50) NOT NULL,
  `PRENOM` varchar(50) NOT NULL,
  `DATE` date NOT NULL,
  `FORMATION` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `monprojet`
--

INSERT INTO `monprojet` (`EMAIL`, `NOM`, `PRENOM`, `DATE`, `FORMATION`) VALUES
('', '', '', '0000-00-00', ''),
('amadou@yahoo.fr', 'AMADOU', 'BA', '2021-01-14', 'dev'),
('ari@gmail.com', 'Alakoutou', 'oussale Ariane', '2021-01-13', 'Dev Web/Web Mobile'),
('b,rdnxh@77gmail.fr', 'bh rsd', 'tyby', '2021-01-14', 'nsy'),
('Baa@gmail.com', 'Bassina', 'Rebecca', '2021-01-28', 'Dev Web/Web Mobile'),
('ciaa@hotmail.com', 'Cissé', 'Aboubakary', '2021-01-05', 'Dev Web/Web Mobile'),
('dd@gmail.com', 'Diebré', 'Davy', '2021-01-30', 'Dev Web/Web Mobile'),
('douk@gmail.com', 'Doukouré', 'Amara', '2021-02-18', 'Dev Web/Web Mobile'),
('ek@gmail.com', 'Ezin', 'Kokou', '2021-03-10', 'Dev Web/Web Mobile'),
('ga@gmail.com', 'Guigma', 'Alain', '2021-05-19', 'Dev Web/Web Mobile'),
('ggg@hotmail.com', 'Bakyono', 'Max Aymar', '2021-01-26', 'Dev Web/Web Mobile'),
('kf@gmail.com', 'Kaboré', 'Félicité', '2021-05-12', 'Dev Web/Web Mobile'),
('lm@gmail.com', 'Lankouandé', 'Maxime', '2021-01-27', 'Dev Web/Web Mobile'),
('mha@gmail.com', 'Mihin', 'Aimé', '2021-01-28', 'Dev Web/Web Mobile'),
('na@gmail.com', 'Nana', 'Aicha', '2021-01-03', 'Dev Web/Web Mobile'),
('nar@gmail.com', 'Nana', 'Abdoul-Razack', '2021-02-19', 'Dev Web/Web Mobile'),
('nata@gmail', 'Bazié', 'Sara', '2021-01-10', 'Dev Web/Web Mobile'),
('ny@hotmail.com', 'Nione', 'Yasmine', '2021-01-22', 'Dev Web/Web Mobile'),
('oi@gmail.com', 'Ouiya', 'Ismael', '2021-01-10', 'Dev Web/Web Mobile'),
('ov@gmail.com', 'Ouedraogo', 'Victorien', '2021-02-24', 'Dev Web/Web Mobile'),
('ptl@hotmail.com', 'Tiendrebeogo', 'Leila', '2021-01-09', 'Dev Web/Web Mobile'),
('s2@gmail.com', 'Sylga', 'Souleymane', '2021-06-22', 'Dev Web/Web Mobile'),
('sp@gmail.com', 'Sawadogo', 'G.S.Prisca', '2021-01-21', 'Dev Web/Web Mobile'),
('tfa@gmail.com', 'Traoré', 'Franck Arnaud', '2021-01-01', 'Dev Web/Web Mobile'),
('tn@gmail.com', 'Tapsoba', 'Naffissatou', '2021-01-07', 'Dev Web/Web Mobile'),
('yaya@gmail.com', 'Yarbanga', 'Yaya', '2021-01-30', 'Dev Web/Web Mobile'),
('zoub@gmail.fr', 'Zouba', 'Jean-Francois', '2021-01-27', 'Dev Web/Web Mobile'),
('zr@gmail.com', 'Zoanga', 'Rafihatou', '2021-02-28', 'Dev Web/Web Mobile');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `monprojet`
--
ALTER TABLE `monprojet`
  ADD PRIMARY KEY (`EMAIL`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
