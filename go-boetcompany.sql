-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2020 at 06:27 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `go-boetcompany`
--

-- --------------------------------------------------------

--
-- Table structure for table `goboet_comments`
--

CREATE TABLE `goboet_comments` (
  `id` int(11)  PRIMARY KEY NOT NULL,
  `goboet_judul` varchar(255) NOT NULL,
  `goboet_comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `goboet_comments`
--

INSERT INTO `goboet_comments` (`id`, `goboet_judul`, `goboet_comment`) VALUES
(1, 'Daniel Imut dan lucu', 'Daniel is the best people i never met. he is really cool,handsome and beautiful.!!!! and iam from holland'),
(2, 'Stevo Revi Kusnandar', 'Hi, Iam the coolest person in the world. and you are ugly!!!!!! iam clever and good very very good n1c33333!!!'),
(3, 'Adinata Susanti', 'Hi, iam the new fulltime assistant, iam really clever and smart. i like coding very much.!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!'),
(4, 'Djohan DJYasmin', 'Hi, iam new fulltime assistant, iam really clever and smart. i like coding very much and music DJ COOLEEEEESTTTTTTTTTT.!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!'),
(5, 'Ketoprak Mentah', 'Ingredients not good!!. stove is not g0000000000000000000000000000000000dZZZZZ!!!'),
(6, 'Stevi And Kevin', 'I REALLY REALLY LOVE KEVIN VERY MUCH!!!!! AND I LOVE CODING TOOO!!!!!! KEVIN DO YOU LIKE ME?'),
(7, 'Kevin Engkong', 'I LIKE CODING AND IAM ALREADY OLD. MY AGE IS 89 YEARS OLD!!! DO YOU KNOW WHO I AM? IAM BAKIMAN FROM SUPERHERO!!!!!!!!!!!!!!!'),
(8, 'j0k0 S.Kom', 'HI IAM ALREADY GRADUATED. I LIKE GIRLS AND I LIKE TEO CHICKEN AND I LIKE CODING ESPECIALLY BACKEND USING GOLANG,JAVA,Node.JS'),
(9, 'Erin Si Pelaut', 'My Name is Erin. Erin Marine. Marine is good for sailor. because iam really really beauTIFULLLLLLLL!!!!!');

-- --------------------------------------------------------

--
-- Table structure for table `goboet_employee`
--

CREATE TABLE `goboet_employee` (
  `id` int(11) NOT NULL,
  `employee_name` varchar(25) NOT NULL,
  `employee_position` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `goboet_employee`
--

INSERT INTO `goboet_employee` (`id`, `employee_name`, `employee_position`) VALUES
(1, 'Eboet Loedijanto', 'CEO of GoBoet'),
(2, 'Daniel Holland', 'Manager of GoBoet Holland'),
(3, 'Ardiant Ukhtimo', 'Head Of Network Administrator'),
(4, 'Reinardus Ronaldikin', 'Staff Cleaning Service'),
(5, 'Tidorus Nathani Chicken', 'Head Of Chef GoBoet'),
(6, 'Wilboy rusdy', 'Outsourcing GoBoet'),
(7, 'Keping Bekti Sontoloso', 'Head Of Technology GoBoet'),
(8, 'Joki Sitohang', 'Software Destructor'),
(9, 'Vincent Lie', 'Staff IT GoBoet'),
(10, 'Frandi Rinatok', 'Staff Marketing'),
(11, 'Erine Marine', 'Secretary GoBoet'),
(12, 'Adinata Susanti', 'New Lab Assistant 20-1 and Assistant GoBoet'),
(13, 'Djohan DJ', 'DJ Of GoBoet');


--
-- Indexes for dumped tables
--

--
-- Indexes for table `goboet_employee`
--
ALTER TABLE `goboet_employee`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `goboet_employee`
--
ALTER TABLE `goboet_employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
