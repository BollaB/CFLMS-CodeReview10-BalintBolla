-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2020 at 05:12 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cr10_balintbolla_biglibrary`
--
CREATE DATABASE IF NOT EXISTS `cr10_balintbolla_biglibrary` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cr10_balintbolla_biglibrary`;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `title` varchar(155) NOT NULL,
  `image` varchar(155) NOT NULL,
  `ISBN` varchar(50) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `publish_date` date NOT NULL,
  `publisher_name` varchar(155) NOT NULL,
  `publisher_address` varchar(155) NOT NULL,
  `publisher_size` varchar(50) NOT NULL,
  `media_type` varchar(50) NOT NULL,
  `availability` varchar(50) NOT NULL,
  `author_fname` varchar(55) NOT NULL,
  `author_lname` varchar(55) NOT NULL,
  `active` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `title`, `image`, `ISBN`, `description`, `publish_date`, `publisher_name`, `publisher_address`, `publisher_size`, `media_type`, `availability`, `author_fname`, `author_lname`, `active`) VALUES
(1, 'Eloquent JavaScript, Second Edition', 'https://eloquentjavascript.net/img/cover.jpg', '9781593275846', 'JavaScript lies at the heart of almost every modern web application, from social apps to the newest browser-based games. Though simple for beginners to pick up and play with, JavaScript is a flexible, complex language that you can use to build full-scale applications.', '2014-12-14', 'No Starch Press', '245 8th St, San Francisco, CA 94103, USA', 'small', 'Book', 'Available', 'Marijn', 'Haverbeke', 0),
(2, 'Learning JavaScript Design Patterns', 'https://images2.medimops.eu/product/f8fc80/M01449331815-large.jpg', '9781449331818', 'With Learning JavaScript Design Patterns, you\'ll learn how to write beautiful, structured, and maintainable JavaScript by applying classical and modern design patterns to the language. If you want to keep your code efficient, more manageable, and up-to-date with the latest best practices, this book is for you.', '2012-07-01', 'O\'Reilly Media', '5 St Georges, Farnham GU9 7LW, UK', 'small', 'Book', 'Available', 'Addy', 'Osmani', 0),
(3, 'Speaking JavaScript', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRekwJTd1jiaB2cvUbTJklAPw916Ozo5lwb4PjKpqrScZyzZEQ&s', '9781449365035', 'Like it or not, JavaScript is everywhere these days-from browser to server to mobile-and now you, too, need to learn the language or dive deeper than you have. This concise book guides you into and through JavaScript, written by a veteran programmer who once found himself in the same position.', '2014-02-01', 'O\'Reilly Media', '5 St Georges, Farnham GU9 7LW, UK', 'small', 'Book', 'Available', 'Axel', 'Rauschmayer', 0),
(4, 'Programming JavaScript Applications', 'https://images-na.ssl-images-amazon.com/images/I/512Hli3f6FL._SX218_BO1,204,203,200_QL40_ML2_.jpg', '9781491950296', 'Take advantage of JavaScript\'s power to build robust web-scale or enterprise applications that are easy to extend and maintain. By applying the design patterns outlined in this practical book, experienced JavaScript developers will learn how to write flexible and resilient code that\'s easier-yes, easier-to work with as your code base grows.', '2014-07-01', 'O\'Reilly Media', '5 St Georges, Farnham GU9 7LW, UK', 'small', 'Book', 'Reserved', 'Eric', 'Elliott', 0),
(5, 'Das wohltemperierte Klavier. Vol. I.', 'https://images2.medimops.eu/product/e2f5f9/M09638303026-large.jpg', '2894143882', '2 sound discs (111 min.) : digital, stereo. ; 4 3/4 in. + 1 guide. For piano; originally for unspecified keyboard instrument.\r\nCompact discs. Notes by Eric Wen in English with French and German translations (43 pages : ill.) inserted in container.\r\nIssued also on conventional disc and cassette.', '1986-01-01', 'Walthamstow', 'Town Hall, Forest Rd, Walthamstow, London E17 4JF, UK', 'Medium', 'CD', 'Available', 'Johann Sebastian', 'Bach', 0),
(6, 'Das wohltemperierte Klavier. Vol. II.', 'https://media1.jpc.de/image/w600/front/0/0034571173030.jpg', '2984172362', '2 sound discs (145 min.) : digital, stereo. ; 4 3/4 in. For piano; originally for unspecified keyboard instrument.\r\nAdditional parallel title on container: Le clavier bien tempere.\r\nLondon: 417 236-2 (417 237-2--417 238-2).\r\nCompact discs.\r\nDigital recording.\r\nNotes by Eric Wen and Andras Schiff in English, with French and German translations (42 pages : ill.) inserted in container.\r\nIssued also on analog disc (417 236-1) and cassette (417 236-4).', '1985-01-01', 'Walthamstow', 'Town Hall, Forest Rd, Walthamstow, London E17 4JF, UK', 'Medium', 'CD', 'Reserved', 'Johann Sebastian', 'Bach', 0),
(7, 'Die Meistersinger von Nürnberg', 'https://images2.medimops.eu/product/a92d59/M0B003P4XLVI-large.jpg', '2894152782', '4 sound discs (264 min.) : digital, stereo. ; 4 3/4 in. Compact disc.\r\nDeutsche Grammophon: 415 278-2 (415 279-2--415 282-2).\r\nOpera in 3 acts.\r\nLibretto by the composer.\r\nProgram notes, synopsis, and libretto, all in German, English and French (263 pages : ill.) inserted in container.\r\nSung in German.', '1985-01-01', 'Deutsche Grammophon', 'Stralauer Allee 1, 10245 Berlin, Germany', 'Big', 'CD', 'Available', 'Richard', 'Wagner', 0),
(8, 'Food safety', 'https://e7.pngegg.com/pngimages/169/329/png-clipart-food-safety-dvd-video-stxe6fin-gr-eur-food-safety-temperature-danger-zone-food-hand.png', '2984172367', '1 videodisc (17 min.) : sound, color ; 4 3/4 in.\r\nNarrator: Judé L. Routh.	\r\nIn this video, tips are given on proper food handling procedures to avoid contamination and the spread of bacteria.', '2002-01-01', 'Educational Video Network Inc.', '1401 19th St, Huntsville, TX 77340, USA', 'Big', 'DVD', 'Available', 'Nancy', 'Rabuck Wilson', 0),
(9, 'An introductory guide to wine', 'https://images-na.ssl-images-amazon.com/images/I/41OP0TyT17L.jpg', '2984172364', '1 videodisc : sound, color ; 4 3/4 in.\r\nAn introductory guide to wine demonstrates the basics needed to understand and appreciate this intriguing beverage. Through interviews and demonstrations with leading sommeliers, winemakers, wine educators and other industry professionals, discover how to describe and choose preferences to waiters and retailers. Learn how to find quality wines at value prices.', '2007-01-01', 'Delta Education', '80 Northwest Blvd, Nashua, NH 03063, USA', 'Medium', 'DVD', 'Reserved', 'Lynn', 'Stevenson', 0),
(10, 'The everyday gourmet : rediscovering the lost art of cooking', 'https://images-na.ssl-images-amazon.com/images/I/91RfL4LKmqL.jpg', '2984172369', 'I kit (4 videodiscs (720 min.) : sound, color ; 4 3/4 in. + 1 course guidebook (v, 200 paages : color illustrations ; 24 cm)).\r\n24 lessons / 30 minutes per lesson--Container.\r\nAccompanied by course guidebook with same title.', '2012-01-01', 'The Teaching Company', '4840 Westfields Blvd #500, Chantilly, VA 20151, USA', 'Medium', 'DVD', 'Reserved', 'Bill', 'Briwa', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
