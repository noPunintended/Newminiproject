-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2017 at 05:06 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moviereview2`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `commentid` int(11) NOT NULL,
  `commenttext` text NOT NULL,
  `commentofusername` int(11) NOT NULL,
  `movieid` int(11) NOT NULL,
  `commentscore` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `movieid` int(11) NOT NULL,
  `moviename` varchar(30) NOT NULL,
  `Movie-intro` text NOT NULL,
  `moviedetail` text NOT NULL,
  `c_moviescore` int(11) NOT NULL,
  `u_moviescore` int(11) NOT NULL,
  `Movie_spic` varchar(50) NOT NULL,
  `moviepic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`movieid`, `moviename`, `Movie-intro`, `moviedetail`, `c_moviescore`, `u_moviescore`, `Movie_spic`, `moviepic`) VALUES
(1, 'Godfather(1972)', 'The aging patriarch of an organized crime dynasty transfers control of his clandestine empire to his reluctant son.', '        <p> &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;When the aging head of a famous crime family decides to transfer his position to one of his subalterns, a series of unfortunate events start happening to the family, and a war begins between all the well-known families leading to insolence, deportation, murder and revenge, and ends with the favorable successor being finally chosen. Written by J. S. Golden</p>\r\n        <h3 class=\"my-3\">Details</h3>\r\n\r\n        <!-- Add link from IMDb -->\r\n\r\n        <h6>Official Sites:\r\n            <a href=\"http://www.paramount.com/movies/godfather-trilogy\" rel=\"nofollow\" itemprop=\"ur1\">GodFather Oficial Site</a>\r\n            \r\n        </h6>\r\n\r\n\r\n        <h6>Release Date:\r\n            <a >6 May 1972 (USA)</a>      \r\n        </h6>', 8, 9, 'images/god-intro.png', 'images/god1.jpg'),
(2, 'IT', 'A group of bullied kids band together when a shapeshifting monster, taking the appearance of a clown, begins hunting children.', 'Seven young outcasts in Derry, Maine, are about to face their worst nightmare -- an ancient, shape-shifting evil that emerges from the sewer every 27 years to prey on the town\'s children. Banding together over the course of one horrifying summer, the friends must overcome their own personal fears to battle the murderous, bloodthirsty clown known as Pennywise.', 7, 8, 'images/It-intro.png', 'images/it.jpg'),
(3, 'God of Egypt', 'An Egyptian god battles his vengeful uncle with the aid of a mortal in Alex Proyas\' fantasy-adventure film.', '<p> &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;In this spectacular action-adventure inspired by the classic mythology of Egypt, the survival of mankind hangs in the balance as an unexpected mortal hero Bek [Brenton Thwaites] undertakes a thrilling journey to save the world and rescue his true love. In order to succeed, he must enlist the help of the powerful god Horus [Nikolaj Coster-Waldau] in an unlikely alliance against Set [Gerard Butler], the merciless god of darkness, who has usurped Egypt\'s throne, plunging the once peaceful and prosperous empire into chaos and conflict. As their breathtaking battle against Set and his henchmen takes them into the afterlife and across the heavens, both god and mortal must pass tests of courage and sacrifice if they hope to prevail in the epic final confrontation.</p>\r\n        <h3 class=\"my-3\">Details</h3>\r\n\r\n        <!-- Add link from IMDb -->\r\n\r\n        <h6>Official Sites:\r\n            <a href=\"http://www.paramount.com/movies/godfather-trilogy\" rel=\"nofollow\" itemprop=\"ur1\">GodFather Oficial Site</a>\r\n            \r\n        </h6>\r\n\r\n\r\n        <h6>Release Date:\r\n            <a >6 May 1972 (USA)</a>      \r\n        </h6>', 2, 4, 'images/gode-intro.jpg', 'images/God of Egypt poster.jpg'),
(4, 'Spider-man', 'Peter Parker balances his life as an ordinary high school student in Queens with his superhero alter-ego Spider-Man.', 'Thrilled by his experience with the Avengers, young Peter Parker returns home to live with his Aunt May. Under the watchful eye of mentor Tony Stark, Parker starts to embrace his newfound identity as Spider-Man. He also tries to return to his normal daily routine -- distracted by thoughts of proving himself to be more than just a friendly neighborhood superhero. Peter must soon put his powers to the test when the evil Vulture emerges to threaten everything that he holds dear.', 8, 8, 'images/spi-intro.jpg', 'images/spiderman-poster.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `userpicture` blob,
  `usertype` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `name`, `userpicture`, `usertype`) VALUES
(1, 'ponbung1234', '123', 'thanpon', NULL, 'Top Critic'),
(2, 'test1', '123', 'pon', NULL, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `typeid` int(11) NOT NULL,
  `profilepicture` int(11) DEFAULT NULL,
  `usertype` int(11) DEFAULT NULL,
  `id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`commentid`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`movieid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`typeid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `commentid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `movieid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `typeid` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
