-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2015 at 09:00 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `projetphp`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `id_client` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `cin` int(11) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `login` varchar(100) NOT NULL,
  `mdp` varchar(100) NOT NULL,
  `role` int(11) NOT NULL,
  `nb_achat` int(11) NOT NULL,
  `tel` int(11) NOT NULL,
  PRIMARY KEY (`id_client`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id_client`, `nom`, `prenom`, `cin`, `adresse`, `mail`, `login`, `mdp`, `role`, `nb_achat`, `tel`) VALUES
(1, 'DKHILI', 'Bilel arslaine', 9015880, 'manouba', 'bilel@gmail.com', 'ok', 'ok', 1, 3, 21761091),
(2, 'Smida', 'souheib', 25641225, 'menzah 9 ', 'souheib@gmail.com', 'sou', 'sou', 0, 4, 23798117),
(3, 'Benlellahom', 'omar', 42659865, 'biert', 'omar@gmail.com', 'omar', 'omar', 0, 9, 68956563),
(4, 'mezlini', 'mohamed', 6255885, 'bizert', 'mezlini@gmail.com', 'mez', 'mez', 1, 4, 55225522),
(5, 'belhadj', 'rom', 253656565, 'bardo', 'rom@rom.com', 'rom', 'rom', 1, 1, 21546598);

-- --------------------------------------------------------

--
-- Table structure for table `client1`
--

CREATE TABLE IF NOT EXISTS `client1` (
  `id_client` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `adresse` varchar(30) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `tel` varchar(30) NOT NULL,
  `cin` varchar(30) NOT NULL,
  `login` varchar(30) NOT NULL,
  `mdp` varchar(30) NOT NULL,
  `role` varchar(30) NOT NULL,
  `nb_achat` int(11) NOT NULL,
  PRIMARY KEY (`id_client`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `client1`
--

INSERT INTO `client1` (`id_client`, `nom`, `prenom`, `adresse`, `mail`, `tel`, `cin`, `login`, `mdp`, `role`, `nb_achat`) VALUES
(1, 'bilel', 'arslaine', 'bilel', 'bilel', 'bilel', 'bilel', 'ok', 'ok', '1', 92),
(2, 'smida', 'med souheib', '01 menzah', 'smidal@gmail.com', '21761091', '258586548', 'sou', 'sou', '0', 13),
(5, 'bilel', 'bilel', 'bilel', 'bilel', 'bilel', 'bilel', 'aa', 'aa', 'bilel', 5),
(6, 'bilel', 'bilel', 'bilel', 'bilel@gmail.com', '555555', '5555', 'bilel', 'bilel', '0', 0),
(7, '3abbas', 'hamza', 'ben arous', 'hamza@gmail.com', '21548798', '002565983', 'hamza', 'hamza', '1', 0),
(11, 'omar', 'omar', 'omar', 'a@a.com', '2222', '00000', 'omar', 'omar', '1', 0),
(25, 'mezlini', 'med', 'mater', 'mer@yahoo.com', '25693655', '08825478', 'mez', 'mez', '0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `compte`
--

CREATE TABLE IF NOT EXISTS `compte` (
  `id_cpt` int(11) NOT NULL AUTO_INCREMENT,
  `id_clt` int(11) NOT NULL,
  `solde` int(11) NOT NULL,
  PRIMARY KEY (`id_cpt`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `compte`
--

INSERT INTO `compte` (`id_cpt`, `id_clt`, `solde`) VALUES
(1, 1, 981790),
(2, 2, 848865),
(3, 3, 630815),
(4, 4, 819990),
(5, 5, 883000);

-- --------------------------------------------------------

--
-- Table structure for table `compte1`
--

CREATE TABLE IF NOT EXISTS `compte1` (
  `id_cpt` int(11) NOT NULL AUTO_INCREMENT,
  `id_clt` int(11) DEFAULT NULL,
  `solde` int(11) NOT NULL,
  PRIMARY KEY (`id_cpt`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `compte1`
--

INSERT INTO `compte1` (`id_cpt`, `id_clt`, `solde`) VALUES
(1, 1, 52057),
(2, 2, 439989),
(3, 3, 100000),
(4, 4, 79200),
(6, 6, 100000),
(7, 7, 1000000),
(19, NULL, 100000);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id_con` int(11) NOT NULL AUTO_INCREMENT,
  `idclt` int(11) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `objet` varchar(30) NOT NULL,
  `sujet` varchar(200) NOT NULL,
  `etat` varchar(20) NOT NULL,
  PRIMARY KEY (`id_con`),
  KEY `idclt` (`idclt`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=58 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id_con`, `idclt`, `mail`, `objet`, `sujet`, `etat`) VALUES
(47, 2, 'souhei@gmail.com', 'question', 'voyage paris', 'lu!'),
(48, 2, 'admin@admin', 'test', 'aa', 'reponse!'),
(49, 2, 'bilel@gmail.com', 'tawa', 'aaaa', 'lu!'),
(50, 2, 'bilel@gmail.com', 'salut', 'salut', 'lu!'),
(51, 2, 'admin@admin', 'reponse', 'paris bientot', 'reponse!'),
(52, 2, 'bilel@gmail.com', 'question', 'quant', 'non lu'),
(53, 5, 'rom@rom.com', 'rom', 'rom', 'lu!'),
(54, 5, 'admin@admin', 'aa', 'aaa', 'reponse!'),
(55, 2, 'admin@admin', 'aa', 'aaaaa', 'reponse!'),
(56, 2, 'smidal@gmail.com', 'tawa', 'sssss', 'lu!'),
(57, 2, 'admin@admin', 'd', 'ed', 'reponse!');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE IF NOT EXISTS `newsletter` (
  `id_nl` int(11) NOT NULL AUTO_INCREMENT,
  `mail` varchar(30) NOT NULL,
  PRIMARY KEY (`id_nl`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id_nl`, `mail`) VALUES
(2, 'biell@gmail.comnnnnnnnnnnnnnnn'),
(3, 'a@a.com');

-- --------------------------------------------------------

--
-- Table structure for table `panier`
--

CREATE TABLE IF NOT EXISTS `panier` (
  `id_pan` int(11) NOT NULL AUTO_INCREMENT,
  `id_clt` int(11) NOT NULL,
  `id_voy` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `pays` varchar(200) NOT NULL,
  `total` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  `date_achat` date NOT NULL,
  PRIMARY KEY (`id_pan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `panier`
--

INSERT INTO `panier` (`id_pan`, `id_clt`, `id_voy`, `prix`, `pays`, `total`, `quantite`, `date_achat`) VALUES
(1, 2, 10, 13000, 'Franceeeeeaaaa', 65000, 5, '2015-11-29'),
(2, 4, 10, 13000, 'Franceeeeeaaaa', 39000, 3, '2015-11-29'),
(3, 3, 14, 2505, 'portugal', 20040, 8, '2015-11-29'),
(4, 3, 1, 1200, 'tunis', 3600, 3, '2015-11-29'),
(5, 5, 10, 13000, 'Franceeeeeaaaa', 117000, 9, '2015-11-29'),
(6, 3, 1, 1200, 'tunis', 3600, 3, '2015-11-29'),
(7, 1, 11, 1200, 'Maroc', 3600, 3, '2015-11-29'),
(8, 2, 1, 1200, 'tunis', 3600, 3, '2015-11-29');

-- --------------------------------------------------------

--
-- Table structure for table `panier1`
--

CREATE TABLE IF NOT EXISTS `panier1` (
  `id_pan` int(11) NOT NULL AUTO_INCREMENT,
  `id_clt` int(11) NOT NULL,
  `id_voy` int(11) NOT NULL,
  `etat` varchar(30) NOT NULL DEFAULT 'nonp',
  `prix` int(11) NOT NULL,
  `pays` varchar(1000) NOT NULL,
  `total` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  `date_achat` date NOT NULL,
  PRIMARY KEY (`id_pan`),
  KEY `id_clt` (`id_clt`,`id_voy`),
  KEY `id_voy` (`id_voy`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `voyage`
--

CREATE TABLE IF NOT EXISTS `voyage` (
  `id_voy` int(11) NOT NULL AUTO_INCREMENT,
  `pays` varchar(30) NOT NULL,
  `image` varchar(100) NOT NULL,
  `ville_d` varchar(30) NOT NULL,
  `ville_a` varchar(30) NOT NULL,
  `date_d` date NOT NULL,
  `date_a` date NOT NULL,
  `prix` double NOT NULL,
  `disponible` int(11) NOT NULL,
  PRIMARY KEY (`id_voy`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `voyage`
--

INSERT INTO `voyage` (`id_voy`, `pays`, `image`, `ville_d`, `ville_a`, `date_d`, `date_a`, `prix`, `disponible`) VALUES
(1, 'tunis', 'Desert.jpg', 'beja', '   belgique', '2015-12-03', '2015-12-03', 1200, 331),
(7, 'maldive', 'ban_img2.jpg', 'tunis', '2015-11-14', '2015-11-10', '2015-11-14', 2800, 22),
(8, 'france ', 'page2_img3.jpg', 'tunis', '2015-11-15', '2015-11-08', '2015-11-15', 3200, 87),
(9, 'Spain', 'internaute.png', 'monastir', '2015-11-18', '2015-11-15', '2015-11-18', 950, 9),
(10, 'France', 'ban_img3.jpg', 'France', ' france', '2015-12-25', '2015-12-25', 13000, 270),
(11, 'Maroc', 'page2_img2.jpg', 'tunis', 'casa', '2015-12-02', '2015-12-02', 1200, 40),
(12, 'italie', 'page2_img8.jpg', 'Djerbaaa', 'Romeeee', '2015-12-04', '2015-12-04', 1800, 61),
(13, 'suisse', 'page2_img1.jpg', 'tunis', 'suisse', '2015-11-02', '2015-11-29', 1900, 65),
(14, 'portugal', 'page3_img2.jpg', 'tunis', 'porto', '2015-12-01', '2015-12-25', 2505, 2),
(15, 'TOGO', 'ban_img1.jpg', 'tunis', ' Togo', '2015-11-05', '2015-11-28', 2050, 77),
(16, 'BLA', 'ban_img1.jpg', 'A', ' AA', '2015-11-12', '2015-12-05', 55, 55),
(17, 'sou', 'ban_img1.jpg', 'tunis', ' milano', '2015-11-05', '2015-12-06', 444, 44),
(18, 'ssssssss', 'Sans titre.png', 'tunis', 'milano', '2015-11-05', '2015-12-06', 444, 44),
(22, 'algerie', 'ban_img1.jpg', 'tunis', 'alger', '2015-12-01', '2015-12-06', 800, 55);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contact`
--
ALTER TABLE `contact`
  ADD CONSTRAINT `contact_ibfk_1` FOREIGN KEY (`idclt`) REFERENCES `client1` (`id_client`);

--
-- Constraints for table `panier1`
--
ALTER TABLE `panier1`
  ADD CONSTRAINT `panier1_ibfk_1` FOREIGN KEY (`id_clt`) REFERENCES `client1` (`id_client`),
  ADD CONSTRAINT `panier1_ibfk_2` FOREIGN KEY (`id_voy`) REFERENCES `voyage` (`id_voy`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
