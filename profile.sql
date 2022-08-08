-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2022 at 03:27 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `profile`
--

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_bin NOT NULL,
  `city` varchar(50) COLLATE utf8_bin NOT NULL,
  `gender` varchar(50) COLLATE utf8_bin NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  `phonenumber` int(50) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(100) COLLATE utf8_bin NOT NULL,
  `qualification` varchar(200) COLLATE utf8_bin NOT NULL,
  `hobbies` varchar(300) COLLATE utf8_bin NOT NULL,
  `skills` varchar(300) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `name`, `city`, `gender`, `email`, `phonenumber`, `dob`, `address`, `qualification`, `hobbies`, `skills`) VALUES
(1, 'Aliya Ahmed', 'Rawalpindi', 'female', 'aliya.ahmed03@gmail.com', 5554356, '2009-03-10', 'House#40 street#5 Scheme-III Rawalpindi', 'Bachelors', 'reading,  writing,  playing sports,  travelling', 'Communication Skills,  ProblemSolving Abilities,  Leadership qualities,  Collaboration Talent'),
(2, 'Hassan Baig', 'Rawalpindi', 'male', 'hassan_ahmd@yahoo.com', 2147483647, '2001-12-07', 'House # 88, Plot # 247 Cantt Rawalpindi', 'Diploma', 'playing sports,  travelling', 'Communication Skills,  Leadership qualities,  Collaboration Talent'),
(3, 'Sara Batool', 'Gujranwala', 'female', 'sara@hotmail.com', 2147483647, '2001-11-21', 'House # 64, Street # 9, New Scheme Gujranwala', 'Bachelors', 'reading,  writing', 'Communication Skills,  ProblemSolving Abilities,  Collaboration Talent'),
(4, 'Sana Imran', 'Islamabad', 'female', 'sana001@gmail.com', 55523234, '2022-01-18', 'House#90 street#5 G-13 Islamabad', 'Diploma', 'reading,  writing,  playing sports', 'Communication Skills,  ProblemSolving Abilities,  Leadership qualities'),
(5, 'Muhammad Asim', 'Islamabad', 'male', 'mhmd_asim@gmail.com', 2147483647, '2000-05-16', 'G-13 street#5 Islamabad', 'Bachelors', 'reading,  writing', 'Communication Skills,  ProblemSolving Abilities,  Leadership qualities'),
(6, 'Ali Ayyaz', 'Lahore', 'male', 'ali4455@gmail.com', 2147483647, '2000-10-03', 'House#54 street#5 Askari-14 Lahore', 'Diploma', 'writing,  travelling', 'ProblemSolving Abilities,  Collaboration Talent'),
(7, 'Hadiqa Nafees', 'Multan', 'female', 'hadeeqa999@yahoo.com', 2147483647, '2000-08-27', 'House #786, Street # 29 Multan', 'Bachelors', 'writing,  playing sports,  travelling', 'Communication Skills,  ProblemSolving Abilities,  Collaboration Talent'),
(8, 'Zaima Shehbaaz', 'Islamabad', 'female', 'zaimashbz@gmail.com', 5554334, '2004-09-20', 'House#10 street#1 F-8 Islamabad', 'Bachelors', 'reading,  writing,  travelling', 'Communication Skills,  ProblemSolving Abilities,  Leadership qualities'),
(9, 'Bisma Nafees', 'Rawalpindi', 'female', 'bisma.nafees@gmail.com', 5554321, '2022-01-05', 'House#80 street#03 saddar cantt Rawalpindi', 'Bachelors', 'reading', 'ProblemSolving Abilities'),
(10, 'Afifa Nafees', 'Rawalpindi', 'female', 'afifa.nafees06@gmail.com', 5559089, '2002-01-06', 'House#40 street#5 Scheme-III Rawalpindi', 'Bachelors', 'reading,  writing,  travelling', 'Communication Skills,  ProblemSolving Abilities,  Leadership qualities,  Collaboration Talent'),
(11, 'Azhar Rehman', 'Rawalpindi', 'male', 'mohsinhassan14@gmail.com', 2147483647, '2021-12-21', 'House # A764, Plot # 229, New Scheme Mohanpura Rawalpindi', 'Bachelors', 'playing sports', 'Leadership qualities'),
(12, 'warda', 'sialkot', 'female', 'warda@gmail.com', 2147483647, '2021-12-28', 'House # A764, Plot # 229', 'Bachelors', 'reading', 'Communication Skills'),
(13, 'Basim Zahoor', 'Gujranwala', 'male', 'basimzhr009@gmail.com', 889764543, '2022-01-04', 'abc', 'Diploma', 'playing sports', 'Communication Skills,  Leadership qualities'),
(14, 'Amna Zaib', 'Rawalpindi', 'female', 'mohsina.nasim@umt.edu.pk', 2147483647, '2022-01-04', 'House # B64, Plot # 229 Scheme-III Rawalpindi', 'Bachelors', 'playing sports', 'ProblemSolving Abilities'),
(15, 'Zahra Batool', 'Karachi', 'female', 'zahra@gmail.com', 5559087, '2010-06-15', 'House#10 street#1 F-8 Karachi', 'Bachelors', 'reading,  writing,  playing sports,  travelling', 'Communication Skills,  ProblemSolving Abilities,  Leadership qualities,  Collaboration Talent'),
(16, 'Ali Mansoor', 'Sialkot', 'male', 'ali.mansoor44@gmail.com', 5554345, '2006-02-14', 'House#90 street#5 Scheme-III Sialkot', 'Bachelors', 'reading,  writing,  playing sports,  travelling', 'Communication Skills,  ProblemSolving Abilities,  Leadership qualities,  Collaboration Talent'),
(17, 'Imran Khalid', 'Karachi', 'male', 'imran12@gmail.com', 2147483647, '1996-10-26', 'House # a764, Plot # 229, New Scheme Karachi', 'Diploma', 'reading,  playing sports', 'ProblemSolving Abilities,  Leadership qualities,  Collaboration Talent'),
(18, 'Hadiqa Nafees', 'Rawalpindi', 'female', 'hadeeqa999@yahoo.com', 2147483647, '2022-01-06', 'House#33 G-Sector Sialkot', 'Diploma', 'playing sports', 'ProblemSolving Abilities'),
(19, 'Hadiqa Nafees', 'Rawalpindi', 'female', 'mohsina.nasim@umt.edu.pk', 2147483647, '2021-11-30', 'House # A764, Plot # 229 Rawalpindi', 'Bachelors', 'reading,  playing sports,  travelling', 'Communication Skills,  ProblemSolving Abilities,  Collaboration Talent'),
(20, 'Bareera Shahid', 'Islamabad', 'female', 'bareera01@gmail.com', 334567843, '2003-02-04', 'F-6 street#5 Islamabad', 'Diploma', 'reading,  writing,  playing sports', 'Communication Skills,  ProblemSolving Abilities'),
(21, 'Asifa Majid', 'Karachi', 'female', 'asifamajid99@gmail.com', 3320467, '2021-12-28', 'House # A764, Plot # 229 Karachi', 'Bachelors', 'reading,  writing,  playing sports', 'Communication Skills,  ProblemSolving Abilities,  Leadership qualities'),
(22, 'Saima Khan', 'Faisalabad', 'female', 'saima23@gmail.com', 5553167, '2004-12-15', 'House#54 street#3 abc Colony', 'Bachelors', 'reading,  playing sports,  travelling', 'Communication Skills,  ProblemSolving Abilities,  Leadership qualities'),
(23, 'Basim Khan', 'Bahawalpur', 'male', 'basimkhan01@gmail.com', 5567895, '2021-12-27', 'House#90 street#5 Scheme-III Bahawalpur', 'Diploma', 'playing sports', 'Communication Skills,  ProblemSolving Abilities,  Leadership qualities'),
(24, 'Qasim Mehmood', 'Islamabad', 'male', 'qasim@gmail.com', 5552134, '2022-01-13', 'House#40 street#5 Scheme-III Rawalpindi', 'Bachelors', 'reading,  writing,  playing sports,  travelling', 'Communication Skills,  ProblemSolving Abilities,  Collaboration Talent'),
(25, 'Asma Shahid', 'Bahawalpur', 'female', 'asma23@gmail.com', 5543432, '2008-03-13', 'House#90 street#5 Scheme-III Bahawalpur', 'Bachelors', 'reading,  playing sports', 'Communication Skills,  ProblemSolving Abilities,  Leadership qualities'),
(26, 'Asma Shahid', 'Bahawalpur', 'female', 'asma23@gmail.com', 5543432, '2008-03-13', 'House#90 street#5 Scheme-III Bahawalpur', 'Bachelors', 'reading,  playing sports', 'Communication Skills,  ProblemSolving Abilities,  Leadership qualities'),
(27, 'Amna Rizwan', 'Karachi', 'female', 'amna.rizwan23@gmail.com', 5553434, '2007-04-09', 'House#10 street#1 F-8 Karachi', 'Bachelors', 'reading,  writing,  travelling', 'Communication Skills,  ProblemSolving Abilities,  Leadership qualities,  Collaboration Talent'),
(28, 'Hassan Khan', 'Gujranwala', 'male', 'hassan.khan@gmail.com', 5556767, '2008-02-05', 'House#10 street#1 F-8 Gujranwala', 'Diploma', 'reading,  writing,  playing sports,  travelling', 'Communication Skills,  ProblemSolving Abilities,  Leadership qualities,  Collaboration Talent'),
(29, 'Qasim Mehmood', 'Islamabad', 'male', 'qasim@gmail.com', 5556789, '2012-02-07', 'House#10 street#1 F-8 Islamabad', 'Diploma', 'reading,  writing,  playing sports', 'Leadership qualities,  Collaboration Talent'),
(30, 'Muhammad Haris', 'Rawalpindi', 'male', 'haris@gmail.com', 5542312, '2000-04-04', 'House#90 street#5 G-13 Rawalpindi', 'Bachelors', 'reading,  writing,  playing sports,  travelling', 'Communication Skills,  ProblemSolving Abilities,  Leadership qualities,  Collaboration Talent'),
(31, 'Naveed Mujahid', 'Islamabad', 'male', 'naveed@gmail.com', 5558909, '2004-06-16', 'House#10 street#1 F-10 Islamabad', 'Diploma', 'reading,  writing,  playing sports,  travelling', 'Communication Skills,  ProblemSolving Abilities,  Leadership qualities,  Collaboration Talent'),
(32, 'Rimsha Ahmed', 'Karachi', 'female', 'rimsha123@gmail.com', 5554356, '2000-09-05', 'House#87 street#4 Gulshanabad Colony Karachi', 'Bachelors', 'reading,  writing,  playing sports,  travelling', 'Communication Skills,  ProblemSolving Abilities,  Leadership qualities,  Collaboration Talent'),
(33, 'Simra Zahra', 'Lahore', 'female', 'simra12zahra@gmail.com', 5554398, '2000-09-05', 'House#87 street#4 Gulberg Lahore', 'Bachelors', 'reading,  writing,  playing sports,  travelling', 'Communication Skills,  ProblemSolving Abilities,  Leadership qualities,  Collaboration Talent'),
(35, 'Aleezay Khan', 'Islamabad', 'female', 'aleeza@gmail.com', 5554345, '2007-06-05', 'House#10 street#1 F-8 Islamabad', 'Bachelors', 'reading,  writing,  playing sports,  travelling', 'Communication Skills,  ProblemSolving Abilities,  Leadership qualities,  Collaboration Talent'),
(36, 'Muhammad Ishaq', 'Rawalpindi', 'male', 'ishaq12@gmail.com', 5554321, '2007-06-05', 'House#40 street#5 Scheme-III Rawalpindi', 'Bachelors', 'reading,  writing,  playing sports,  travelling', 'Communication Skills,  ProblemSolving Abilities,  Leadership qualities,  Collaboration Talent'),
(37, 'Amir Naveed', 'Islamabad', 'male', 'amir.nvd@gmail.com', 5554378, '2011-04-09', 'House#90 street#5 G-13 Islamabad', 'Bachelors', 'reading,  writing,  playing sports,  travelling', 'Communication Skills,  ProblemSolving Abilities,  Leadership qualities,  Collaboration Talent');

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `username` varchar(100) COLLATE utf8_bin NOT NULL,
  `password` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`username`, `password`) VALUES
('aliya_ahmed', 'aliya12345'),
('hassan_baig', 'hassan12345'),
('sara_batool', 'sara12345'),
('sana_imran', 'sana12345'),
('muhammad_asim', 'asim12345'),
('ali_ayyaz', 'ali12345'),
('hadiqa_nafees', 'hadiqa12345'),
('zaima_shehbaz', 'zaima12345'),
('bisma_nafees', 'bisma12345'),
('afifa_nafees', 'afifa12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
