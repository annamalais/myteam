-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2017 at 12:14 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `maindb`
--

-- --------------------------------------------------------

--
-- Table structure for table `favorite`
--

CREATE TABLE IF NOT EXISTS `favorite` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `userid` varchar(100) NOT NULL,
  `fid` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `favorite`
--

INSERT INTO `favorite` (`id`, `userid`, `fid`) VALUES
(1, 'userid', 1),
(2, 'userid', 1),
(3, 'userid', 2),
(4, 'userid', 5),
(9, 'userid', 1);

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE IF NOT EXISTS `page` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `imgUrl` varchar(255) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `genre` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `imgUrl`, `title`, `description`, `genre`) VALUES
(1, 'image/spiderman.jpg', 'The Amazing Spiderman 2', 'When New York is put under siege by Oscorp, it is up to Spider-Man to save the city he swore to protect as well as his loved ones.', 'action'),
(2, 'image/gravity.jpg', 'Gravity', 'Two astronauts work together to survive after an accident which leaves them alone in space.', 'scifi'),
(3, 'image/lego.jpg', 'The Lego Movie', 'An ordinary Lego construction worker, thought to be the prophesied ''Special'', is recruited to join a quest to stop an evil tyrant from gluing the Lego universe into eternal stasis.', 'animation'),
(4, 'image/300.jpg', '300', 'King Leonidas of Sparta and a force of 300 men fight the Persians at Thermopylae in 480 B.C.', 'history'),
(5, 'image/walle.jpg', 'Wall-E', 'In the distant future, a small waste-collecting robot inadvertently embarks on a space journey that will ultimately decide the fate of mankind.', 'animation'),
(6, 'image/harrypotter.jpg', 'Harry Potter and The Half Blood Prince', 'As Harry Potter begins his sixth year at Hogwarts, he discovers an old book marked as "the property of the Half-Blood Prince" and begins to learn more about Lord Voldemort''s dark past.', 'fantasy'),
(7, 'image/findingnemo.jpg', 'Finding Nemo', 'After his son is captured in the Great Barrier Reef and taken to Sydney, a timid clownfish sets out on a journey to bring him home.', 'animation'),
(8, 'image/conjuring.jpg', 'The Conjuring', 'Paranormal investigators Ed and Lorraine Warren work to help a family terrorized by a dark presence in their farmhouse.', 'horror'),
(9, 'image/ironman.jpg', 'Iron Man', 'After being held captive in an Afghan cave, billionaire engineer Tony Stark creates a unique weaponized suit of armor to fight evil.\r\n', 'action');

-- --------------------------------------------------------

--
-- Table structure for table `showtime`
--

CREATE TABLE IF NOT EXISTS `showtime` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `theatrename` varchar(50) NOT NULL,
  `time1` varchar(20) NOT NULL,
  `time2` varchar(20) NOT NULL,
  `time3` varchar(20) NOT NULL,
  `time4` varchar(20) NOT NULL,
  `mid` int(10) NOT NULL,
  `moviename` varchar(50) NOT NULL,
  `imgUrl` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `showtime`
--

INSERT INTO `showtime` (`id`, `theatrename`, `time1`, `time2`, `time3`, `time4`, `mid`, `moviename`, `imgUrl`) VALUES
(1, 'Inox-Screen1', '10:30AM', '2:30PM', '6:30PM', '10:30PM', 1, 'The Amazing Spiderman 2', 'image/spiderman.jpg'),
(2, 'Inox-Screen2', '10:30AM', '2:30PM', '6:30PM', '', 2, 'Gravity', 'image/gravity.jpg'),
(3, 'Inox-Screen3', '', '2:30PM', '6:30PM', '10:30PM', 3, 'The Lego Movie', 'image/lego.jpg'),
(4, 'Inox-Screen4', '10:30AM', '2:30PM', '6:30PM', '10:30PM', 4, '300', 'image/300.jpg'),
(5, 'Inox-Screen5', '10:30AM', '2:30PM', '', '', 5, 'Wall-E', 'image/walle.jpg'),
(6, 'Big Cinema Jazz', '10:30AM', '2:30PM', '6:30PM', '10:30PM', 6, 'Harry Potter and The Half Blood Prince', 'image/harrypotter.jpg'),
(7, 'Big Cinema Arsh', '10:30AM', '2:30PM', '6:30PM', '', 7, 'Finding Nemo', 'image/findingnemo.jpg'),
(8, 'Guru Theatre', '10:30AM', '2:30PM', '6:30PM', '10:30PM', 8, 'The Conjuring', 'image/conjuring.jpg'),
(9, 'Annamalai Theatre', '10:30AM', '2:30PM', '6:30PM', '10:30PM', 9, 'Iron Man', 'image/ironman.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
