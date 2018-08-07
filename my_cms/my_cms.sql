-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2018 at 02:26 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `email`) VALUES
(1, 'alichampion', '456123', 'alichampion456@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`) VALUES
(8, 'work'),
(9, 'test'),
(10, 'ali  ');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `c_date` date NOT NULL,
  `status` varchar(11) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `name`, `email`, `website`, `message`, `c_date`, `status`) VALUES
(1, 'ali', 'gfhgfb', 'frhghkjb', 'ghjhujc jybv dyegfbyc', '0000-00-00', 'publish');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `p_date` date NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `author_img` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `categories` varchar(255) NOT NULL,
  `tags` varchar(255) NOT NULL,
  `post_data` text NOT NULL,
  `views` int(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'publish',
  `about_author` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `p_date`, `title`, `author`, `author_img`, `image`, `categories`, `tags`, `post_data`, `views`, `status`, `about_author`) VALUES
(5, '2018-03-31', 'This is the first post after a very hard work of about 2 hours', 'Ali Champion', 'ali.jpg', '4.jpg', 'Work', 'hours', 'jhjznxhf,mjkkyyhhgnfztjgnfmkbnmhzfm jhjznxhf,mjkkyyhhgnfztjgnfmkbnmhzfm jhjznxhf,mjkkyyhhgnfztjgnfmkbnmhzfm jhjznxhf,mjkkyyhhgnfztjgnfmkbnmhzfm jhjznxhf,mjkkyyhhgnfztjgnfmkbnmhzfm jhjznxhf,mjkkyyhhgnfztjgnfmkbnmhzfm jhjznxhf,mjkkyyhhgnfztjgnfmkbnmhzfm jhjznxhf,mjkkyyhhgnfztjgnfmkbnmhzfm jhjznxhf,mjkkyyhhgnfztjgnfmkbnmhzfm jhjznxhf,mjkkyyhhgnfztjgnfmkbnmhzfm jhjznxhf,mjkkyyhhgnfztjgnfmkbnmhzfm jhjznxhf,mjkkyyhhgnfztjgnfmkbnmhzfm jhjznxhf,mjkkyyhhgnfztjgnfmkbnmhzfm jhjznxhf,mjkkyyhhgnfztjgnfmkbnmhzfm jhjznxhf,mjkkyyhhgnfztjgnfmkbnmhzfm jhjznxhf,mjkkyyhhgnfztjgnfmkbnmhzfm jhjznxhf,mjkkyyhhgnfztjgnfmkbnmhzfm jhjznxhf,mjkkyyhhgnfztjgnfmkbnmhzfm jhjznxhf,mjkkyyhhgnfztjgnfmkbnmhzfm jhjznxhf,mjkkyyhhgnfztjgnfmkbnmhzfm jhjznxhf,mjkkyyhhgnfztjgnfmkbnmhzfm jhjznxhf,mjkkyyhhgnfztjgnfmkbnmhzfm jhjznxhf,mjkkyyhhgnfztjgnfmkbnmhzfm jhjznxhf,mjkkyyhhgnfztjgnfmkbnmhzfm jhjznxhf,mjkkyyhhgnfztjgnfmkbnmhzfm jhjznxhf,mjkkyyhhgnfztjgnfmkbnmhzfm jhjznxhf,mjkkyyhhgnfztjgnfmkbnmhzfm jhjznxhf,mjkkyyhhgnfztjgnfmkbnmhzfm jhjznxhf,mjkkyyhhgnfztjgnfmkbnmhzfm jhjznxhf,mjkkyyhhgnfztjgnfmkbnmhzfm jhjznxhf,mjkkyyhhgnfztjgnfmkbnmhzfm jhjznxhf,mjkkyyhhgnfztjgnfmkbnmhzfm jhjznxhf,mjkkyyhhgnfztjgnfmkbnmhzfm jhjznxhf,mjkkyyhhgnfztjgnfmkbnmhzfm jhjznxhf,mjkkyyhhgnfztjgnfmkbnmhzfm jhjznxhf,mjkkyyhhgnfztjgnfmkbnmhzfm jhjznxhf,mjkkyyhhgnfztjgnfmkbnmhzfm jhjznxhf,mjkkyyhhgnfztjgnfmkbnmhzfm jhjznxhf,mjkkyyhhgnfztjgnfmkbnmhzfm jhjznxhf,mjkkyyhhgnfztjgnfmkbnmhzfm ', 8, 'publish', 'jhjznxhf,mjkkyyhhgnfztjgnfmkbnmhzfm '),
(15, '2018-03-31', 'ggfH', 'ggfH', '', '', 'test', 'ggfH', 'ggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHgg fHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHg\r\ngfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHg\r\ngfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHgg fHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHg\r\ngfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHg\r\ngfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfH\r\nggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHgg fHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHg\r\ngfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHg\r\ngfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfH\r\nggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHgg fHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHg\r\ngfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHg\r\ngfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfH\r\n\r\n', 0, 'publish', 'ggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHgg fHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfHggfH');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
