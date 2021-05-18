-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2020 at 11:41 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oerdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `FirstName`, `LastName`, `Email`, `Message`) VALUES
(0, 'sfasfsa', 'sfas', 'safsf', 'asfsaaf');

-- --------------------------------------------------------

--
-- Table structure for table `displaytemplate`
--

CREATE TABLE `displaytemplate` (
  `id` int(6) UNSIGNED NOT NULL,
  `heading` varchar(100) NOT NULL,
  `author` varchar(60) NOT NULL,
  `src` varchar(60) NOT NULL,
  `filetype` varchar(60) NOT NULL,
  `imgsrc` varchar(60) DEFAULT NULL,
  `description` varchar(2000) DEFAULT NULL,
  `views` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `displaytemplate`
--

INSERT INTO `displaytemplate` (`id`, `heading`, `author`, `src`, `filetype`, `imgsrc`, `description`, `views`) VALUES
(1, 'An Intro to JavaScript', 'Pat Morin', 'javascript1.pdf', 'pdf', 'javaimg.jpg', NULL, 1214),
(2, 'Learn JavaScript in 1 Hour', 'Mosh Hamdani', 'https://www.youtube.com/embed/W6NZfCO5SIk', 'video', 'unnamed.jpg', 'JavaScript is one of the most popular programming languages in 2019. A lot of people are learning JavaScript to become front-end and/or back-end developers. I\'ve designed this JavaScript tutorial for beginners to learn JavaScript from scratch. We\'ll start off by answering the frequently asked questions by beginners about JavaScript and shortly after we\'ll set up our development environment and start coding. Whether you\'re a beginner and want to learn to code, or you know any programming language and just want to learn JavaScript for web development, this tutorial helps you learn JavaScript fast. You don\'t need any prior experience with JavaScript or any other programming languages. Just watch this JavaScript tutorial to the end and you\'ll be writing JavaScript code in no time. If you want to become a front-end developer, you have to learn JavaScript. It is the programming language that every front-end developer must know. You can also use JavaScript on the back-end using Node. Node is a run-time environment for executing JavaScript code outside of a browser. With Node and Express (a popular JavaScript framework), you can build back-end of web and mobile applications. If you\'re looking for a crash course that helps you get started with JavaScript quickly, this course is for you.', 6061),
(3, 'Blender cheatsheet', 'Blender Guru', 'Blender Cheatsheet v1.pdf', 'pdf', 'blender.jpg', NULL, 2320),
(4, 'Benifits of coding', 'John Asmos', 'CodingBenefits.pdf', 'pdf', 'Why2Code.jpg', NULL, 439),
(5, 'Getting started with CSS', 'Tutorialspoint', 'css_tutorial.pdf', 'pdf', 'CSS.jpg', NULL, 1234),
(6, 'Getting started with Game development', 'Dave Nickolson', 'GameDevStart.pdf', 'pdf', 'CloudGame2.png', NULL, 439),
(7, 'Getting started with HTML', 'Tutorialspoint', 'html_tutorial.pdf', 'pdf', 'html.jpg', NULL, 5434),
(8, 'Getting started with PHP', 'Tutorialspoint', 'php_tutorial.pdf', 'pdf', 'PHP.jpg', NULL, 655),
(9, 'Blender Beginner Tutorial', 'Blender Guru', 'https://www.youtube.com/embed/TPrnSACiTJ4', 'video', 'Donut.jpg', 'Blender tutorial for beginners! The long awaited reboot of the popular donut tutorial, completely remade for Blender 2.8.', 73),
(10, 'Learning Game Development and 6 months progress', 'Dani', 'https://www.youtube.com/embed/HPmD9I2b7L8', 'video', 'game.jpg', 'This is what half a year of learning Unity looks like! I\'ve had a lot of fun working with Unity these past six months, and wanted to share my progress!', 5548),
(11, 'How to protect against COVID-19', 'World Health Organization (WHO)', 'https://www.youtube.com/embed/1APwq1df6Mw', 'video', 'CovidKnowHow.jpg', 'COVID-19 is an infectious disease caused by a new coronavirus introduced to humans for the first time.', 7656),
(12, 'What is COVID-19', 'Ninja Nerd Lectures', 'https://www.youtube.com/embed/PWzbArPgo-o', 'video', 'CovidWhat.jpg', 'Everything to know about what COVID-19 is.', 5678);

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `Email`) VALUES
(5, ''),
(4, 'Saad@saad.com'),
(2, 'Salman@Salman.com'),
(1, 'something@something.com');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `First name` varchar(255) NOT NULL,
  `Last Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `First name`, `Last Name`, `Email`) VALUES
(1, 'Asad', 'Asad', 'Asad@Asad.com'),
(2, 's', 's', 's'),
(3, 'da', 'sd', 'dsd'),
(4, 'asd', 'asd', 'asd'),
(5, '123', '123', '123'),
(6, '213', '123', '123'),
(7, '123', '123', '123'),
(8, 'fs', 'fs', 's');

-- --------------------------------------------------------

--
-- Table structure for table `videotemplate`
--

CREATE TABLE `videotemplate` (
  `id` int(11) NOT NULL,
  `filetype` varchar(60) DEFAULT NULL,
  `heading` varchar(100) DEFAULT NULL,
  `src` varchar(60) DEFAULT NULL,
  `author` varchar(60) DEFAULT NULL,
  `description` varchar(2000) DEFAULT NULL,
  `imgsrc` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `videotemplate`
--

INSERT INTO `videotemplate` (`id`, `filetype`, `heading`, `src`, `author`, `description`, `imgsrc`) VALUES
(1, 'video', 'JavaScript Tutorial for Beginners: Learn JavaScript in 1 Hour', 'https://www.youtube.com/embed/W6NZfCO5SIk', 'Mosh Hamdani', 'JavaScript is one of the most popular programming languages in 2019. A lot of people are learning JavaScript to become front-end and/or back-end developers. I\'ve designed this JavaScript tutorial for beginners to learn JavaScript from scratch. We\'ll start off by answering the frequently asked questions by beginners about JavaScript and shortly after we\'ll set up our development environment and start coding. Whether you\'re a beginner and want to learn to code, or you know any programming language and just want to learn JavaScript for web development, this tutorial helps you learn JavaScript fast. You don\'t need any prior experience with JavaScript or any other programming languages. Just watch this JavaScript tutorial to the end and you\'ll be writing JavaScript code in no time. If you want to become a front-end developer, you have to learn JavaScript. It is the programming language that every front-end developer must know. You can also use JavaScript on the back-end using Node. Node is a run-time environment for executing JavaScript code outside of a browser. With Node and Express (a popular JavaScript framework), you can build back-end of web and mobile applications. If you\'re looking for a crash course that helps you get started with JavaScript quickly, this course is for you.', 'unnamed.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `displaytemplate`
--
ALTER TABLE `displaytemplate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `videotemplate`
--
ALTER TABLE `videotemplate`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `displaytemplate`
--
ALTER TABLE `displaytemplate`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
