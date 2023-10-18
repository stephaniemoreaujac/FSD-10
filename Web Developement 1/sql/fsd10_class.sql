-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3304
-- Generation Time: Oct 18, 2023 at 04:23 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fsd10_class`
--
CREATE DATABASE IF NOT EXISTS `fsd10_class` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `fsd10_class`;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `name`) VALUES
(1, 'Java'),
(2, 'PHP'),
(3, 'HTML'),
(4, 'JavaScript');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

DROP TABLE IF EXISTS `portfolio`;
CREATE TABLE `portfolio` (
  `portfolio_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `caption` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `update_time` date NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`portfolio_id`, `title`, `caption`, `body`, `image`, `update_time`, `category_id`) VALUES
(1, 'My Dynamic Website', 'Come visit my awesome website. It is really cool', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere consectetur, nesciunt ea culpa laudantium vel dolore deserunt nihil quae error magni qui aliquid optio impedit tempora ut harum recusandae reprehenderit.Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere consectetur, nesciunt ea culpa laudantium vel dolore deserunt nihil quae error magni qui aliquid optio impedit tempora ut harum recusandae reprehenderit.\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus nihil voluptas eos, inventore tempora nostrum et, hic minima libero deleniti facilis eius accusantium aliquam voluptatem ipsam doloribus? Ullam, sequi consectetur? Accusamus nihil voluptas eos, inventore tempora nostrum et, hic minima libero deleniti facilis eius accusantium aliquam voluptatem ipsam doloribus? Ullam, sequi consectetur?\r\nHow was your day?\r\nMy day was great!\r\nThanks', NULL, '2023-10-02', 2),
(2, 'Fun Java Game', 'This is a fun Java game you can play.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere consectetur, nesciunt ea culpa laudantium vel dolore deserunt nihil quae error magni qui aliquid optio impedit tempora ut harum recusandae reprehenderit.Lorem ipsum dolor sit amet consectetur adipisicing elit. \r\nFacere consectetur, nesciunt ea culpa laudantium vel dolore deserunt nihil quae error magni qui aliquid optio impedit tempora ut harum recusandae reprehenderit.\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. \r\nAccusamus nihil voluptas eos, inventore tempora nostrum et, hic minima libero deleniti facilis eius accusantium aliquam voluptatem ipsam doloribus? Ullam, sequi consectetur? \r\nAccusamus nihil voluptas eos, inventore tempora nostrum et, hic minima libero deleniti facilis eius accusantium aliquam voluptatem ipsam doloribus? \r\nUllam, sequi consectetur?', NULL, '2023-10-05', 3),
(3, 'Super Fun', 'I made this project all by myself', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere consectetur, nesciunt ea culpa laudantium vel dolore deserunt nihil quae error magni qui aliquid optio impedit tempora ut harum recusandae reprehenderit.Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere consectetur, nesciunt ea culpa laudantium vel dolore deserunt nihil quae error magni qui aliquid optio impedit tempora ut harum recusandae reprehenderit.\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus nihil voluptas eos, inventore tempora nostrum et, hic minima libero deleniti facilis eius accusantium aliquam voluptatem ipsam doloribus? Ullam, sequi consectetur? Accusamus nihil voluptas eos, inventore tempora nostrum et, hic minima libero deleniti facilis eius accusantium aliquam voluptatem ipsam doloribus? Ullam, sequi consectetur?', NULL, '2023-10-08', 2),
(4, 'John Abbott', 'This is John Abbott', 'This is a test\r\nI like to test forms\r\nGet only valid data', 'portfolio/jac-logo.jpg', '2023-10-18', 2),
(5, 'John Abbott', 'This is John Abbott', 'This is a test\r\nI like to test forms\r\nGet only valid data', 'portfolio/jac-logo.jpg', '2023-10-18', 2),
(6, 'John Abbott', 'This is John Abbott', 'This is a test\r\nI like to test forms\r\nGet only valid data', 'portfolio/jac-logo.jpg', '2023-10-18', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`portfolio_id`),
  ADD KEY `FK_category_id` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `portfolio_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD CONSTRAINT `FK_category_id` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
