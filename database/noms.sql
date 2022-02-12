/*!40101 SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO" */;
/*!40101 SET time_zone = "+00:00" */;


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

-- --------------------------------------------------------

--
-- Table structure for table `noms`
--

DROP TABLE IF EXISTS `noms`;
CREATE TABLE IF NOT EXISTS `noms` (
  `id` integer NOT NULL /*!40101 AUTO_INCREMENT */,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `age` tinyint(3) /*!40101 UNSIGNED */ NOT NULL,
  PRIMARY KEY (`id`)
) /*!40101 ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 */;

--
-- Dumping data for table `noms`
--

INSERT INTO `noms` (`id`, `nom`, `prenom`, `age`) VALUES
(1, 'Dupont', 'Jean', 36),
(2, 'Petit', 'Nicolas', 19),
(3, 'David', 'Michel', 20),
(4, 'Dubois', 'Anne-Sophie', 19),
(5, 'Lilian', 'Thuram', 25),
(6, 'Vieira', 'Patrick', 28),
(7, 'Henry', 'Thierry', 29),
(8, 'Trezeguet ', 'David', 28),
(9, 'Bartez', 'Fabien', 32),
(10, 'Fabien', 'Lara', 35);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
