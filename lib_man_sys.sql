-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 13, 2022 at 02:45 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lib_man_sys`
--

-- --------------------------------------------------------

--
-- Table structure for table `accountant_registration`
--

CREATE TABLE `accountant_registration` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `address` varchar(40) DEFAULT NULL,
  `phone` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accountant_registration`
--

INSERT INTO `accountant_registration` (`id`, `name`, `username`, `password`, `email`, `address`, `phone`) VALUES
(1, 'parimal', 'parimal00', 'password', 'parimalbhattarai00@gmail.com', 'inaruwa', '12343484');

-- --------------------------------------------------------

--
-- Table structure for table `add_books`
--

CREATE TABLE `add_books` (
  `id` int(11) NOT NULL,
  `ssid` int(11) NOT NULL,
  `books_name` varchar(20) DEFAULT NULL,
  `books_author_name` varchar(20) DEFAULT NULL,
  `Edition` varchar(30) NOT NULL,
  `books_price` varchar(20) DEFAULT NULL,
  `books_publication_name` varchar(20) DEFAULT NULL,
  `books_purchase_date` varchar(20) DEFAULT NULL,
  `books_qty` int(20) DEFAULT NULL,
  `available_qty` int(20) DEFAULT NULL,
  `librarian_username` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_books`
--

INSERT INTO `add_books` (`id`, `ssid`, `books_name`, `books_author_name`, `Edition`, `books_price`, `books_publication_name`, `books_purchase_date`, `books_qty`, `available_qty`, `librarian_username`) VALUES
(171, 1000, 'physics', 'parimal', '17', '2000', 'publication', '12-23-12', 10, 9, 'jack00'),
(172, 1001, 'physics', 'parimal', '17', '2000', 'publication', '12-23-12', 10, 9, 'jack00'),
(173, 1002, 'physics', 'parimal', '17', '2000', 'publication', '12-23-12', 10, 9, 'jack00'),
(174, 1003, 'physics', 'parimal', '17', '2000', 'publication', '12-23-12', 10, 9, 'jack00'),
(175, 1004, 'physics', 'parimal', '17', '2000', 'publication', '12-23-12', 10, 9, 'jack00'),
(176, 1005, 'physics', 'parimal', '17', '2000', 'publication', '12-23-12', 10, 9, 'jack00'),
(177, 1006, 'physics', 'parimal', '17', '2000', 'publication', '12-23-12', 10, 9, 'jack00'),
(178, 1007, 'physics', 'parimal', '17', '2000', 'publication', '12-23-12', 10, 9, 'jack00'),
(179, 1008, 'physics', 'parimal', '17', '2000', 'publication', '12-23-12', 10, 9, 'jack00'),
(180, 1009, 'physics', 'parimal', '17', '2000', 'publication', '12-23-12', 10, 9, 'jack00'),
(181, 1000, 'hello', 'author', '10', '2000', 'jfsl', '12-12-12', 5, 5, 'jack00'),
(182, 1001, 'hello', 'author', '10', '2000', 'jfsl', '12-12-12', 5, 5, 'jack00'),
(183, 1002, 'hello', 'author', '10', '2000', 'jfsl', '12-12-12', 5, 5, 'jack00'),
(184, 1003, 'hello', 'author', '10', '2000', 'jfsl', '12-12-12', 5, 5, 'jack00'),
(185, 1004, 'hello', 'author', '10', '2000', 'jfsl', '12-12-12', 5, 5, 'jack00'),
(186, 1200, 'chemistry', 'authro', '17', '2000', 'publication', '12-12-12', 10, 10, 'jack00'),
(187, 1201, 'chemistry', 'authro', '17', '2000', 'publication', '12-12-12', 10, 10, 'jack00'),
(188, 1202, 'chemistry', 'authro', '17', '2000', 'publication', '12-12-12', 10, 10, 'jack00'),
(189, 1203, 'chemistry', 'authro', '17', '2000', 'publication', '12-12-12', 10, 10, 'jack00'),
(190, 1204, 'chemistry', 'authro', '17', '2000', 'publication', '12-12-12', 10, 10, 'jack00'),
(191, 1205, 'chemistry', 'authro', '17', '2000', 'publication', '12-12-12', 10, 10, 'jack00'),
(192, 1206, 'chemistry', 'authro', '17', '2000', 'publication', '12-12-12', 10, 10, 'jack00'),
(193, 1207, 'chemistry', 'authro', '17', '2000', 'publication', '12-12-12', 10, 10, 'jack00'),
(194, 1208, 'chemistry', 'authro', '17', '2000', 'publication', '12-12-12', 10, 10, 'jack00'),
(195, 1209, 'chemistry', 'authro', '17', '2000', 'publication', '12-12-12', 10, 10, 'jack00');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `firstname` varchar(30) DEFAULT NULL,
  `lastname` varchar(30) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `username` varchar(40) DEFAULT NULL,
  `password` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `firstname`, `lastname`, `email`, `username`, `password`) VALUES
(1, 'parimal', 'bhattarai', 'parimalbhattarai00@gmail.com', 'parimal00', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` int(11) NOT NULL,
  `author_name` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `books_edition_info`
--

CREATE TABLE `books_edition_info` (
  `id` int(11) NOT NULL,
  `books_name` varchar(40) NOT NULL,
  `edition` varchar(40) DEFAULT NULL,
  `total_books` varchar(40) DEFAULT NULL,
  `price` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bus_account`
--

CREATE TABLE `bus_account` (
  `id` int(11) NOT NULL,
  `roll_no` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `edition`
--

CREATE TABLE `edition` (
  `id` int(11) NOT NULL,
  `books_id` int(11) DEFAULT NULL,
  `author_id` int(11) DEFAULT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `issue_books`
--

CREATE TABLE `issue_books` (
  `id` int(11) NOT NULL,
  `ssid` int(11) NOT NULL,
  `student_enrollment` varchar(20) DEFAULT NULL,
  `student_name` varchar(20) DEFAULT NULL,
  `student_sem` varchar(20) DEFAULT NULL,
  `student_email` varchar(20) DEFAULT NULL,
  `books_name` varchar(20) DEFAULT NULL,
  `books_issue_date` varchar(20) DEFAULT NULL,
  `books_return_date` varchar(20) DEFAULT NULL,
  `student_username` varchar(20) DEFAULT NULL,
  `penalty` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issue_books`
--

INSERT INTO `issue_books` (`id`, `ssid`, `student_enrollment`, `student_name`, `student_sem`, `student_email`, `books_name`, `books_issue_date`, `books_return_date`, `student_username`, `penalty`) VALUES
(242, 1009, '016331', 'first', '1', 'parimal@gmail.com', 'physics', '22-03-06', NULL, 'parimal00', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `librarian_registration`
--

CREATE TABLE `librarian_registration` (
  `id` int(11) NOT NULL,
  `firstname` varchar(19) DEFAULT NULL,
  `lastname` varchar(19) DEFAULT NULL,
  `username` varchar(19) DEFAULT NULL,
  `password` varchar(19) DEFAULT NULL,
  `email` varchar(19) DEFAULT NULL,
  `contact` varchar(19) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `librarian_registration`
--

INSERT INTO `librarian_registration` (`id`, `firstname`, `lastname`, `username`, `password`, `email`, `contact`) VALUES
(1, '', 'sdadsasd', '', '', '', ''),
(2, 'saddsajf', '', '', '', '', ''),
(3, 'jack ', 'is ', 'sexy', 'and ', 'jack ', 'knows it '),
(4, 'jack ', 'is ', 'sexy', 'and ', 'jack ', 'knows it '),
(5, 'jack ', 'is ', 'sexy', 'and ', 'jack ', 'knows it '),
(6, '', '', '', '', '', 'cxvxcv'),
(7, 'parimal', 'bhattarai', 'parimal1', '1234', 'sjda', 'sdjdl'),
(8, 'jack', 'jones', 'jack00', '1234', 'jack@gmail', '98423');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `susername` varchar(20) DEFAULT NULL,
  `dusername` varchar(20) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `message` varchar(500) DEFAULT NULL,
  `readss` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `scholarships`
--

CREATE TABLE `scholarships` (
  `roll_no` varchar(11) NOT NULL,
  `student_name` varchar(50) DEFAULT NULL,
  `lastname` varchar(30) DEFAULT NULL,
  `scholarship_sem` varchar(30) DEFAULT NULL,
  `scholarship_percentage` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scholarships`
--

INSERT INTO `scholarships` (`roll_no`, `student_name`, `lastname`, `scholarship_sem`, `scholarship_percentage`) VALUES
('016332', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ssids`
--

CREATE TABLE `ssids` (
  `id` int(11) NOT NULL,
  `books_id` int(11) DEFAULT NULL,
  `librarian_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `students_with_due_balance`
--

CREATE TABLE `students_with_due_balance` (
  `id` int(11) NOT NULL,
  `roll_no` varchar(11) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `semester` varchar(20) DEFAULT NULL,
  `due_amount` int(11) DEFAULT NULL,
  `date` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_account`
--

CREATE TABLE `student_account` (
  `roll_no` varchar(11) NOT NULL,
  `semester_fee` int(11) NOT NULL,
  `balance_due` varchar(40) DEFAULT NULL,
  `scholarship` varchar(30) NOT NULL,
  `bus_fee` int(11) NOT NULL,
  `total_fee` int(11) NOT NULL,
  `paid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_account`
--

INSERT INTO `student_account` (`roll_no`, `semester_fee`, `balance_due`, `scholarship`, `bus_fee`, `total_fee`, `paid`) VALUES
('016331', 103000, '3000', '0', 0, 103000, 'not_paid');

-- --------------------------------------------------------

--
-- Table structure for table `student_registration`
--

CREATE TABLE `student_registration` (
  `id` int(11) NOT NULL,
  `firstname` varchar(19) DEFAULT NULL,
  `lastname` varchar(19) DEFAULT NULL,
  `username` varchar(19) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `email` varchar(19) DEFAULT NULL,
  `contact` varchar(19) DEFAULT NULL,
  `semester` int(19) DEFAULT NULL,
  `roll_no` varchar(19) DEFAULT NULL,
  `status` varchar(5) NOT NULL,
  `passed_out` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_registration`
--

INSERT INTO `student_registration` (`id`, `firstname`, `lastname`, `username`, `password`, `email`, `contact`, `semester`, `roll_no`, `status`, `passed_out`) VALUES
(52, 'first', 'last', 'parimal00', '5f4dcc3b5aa765d61d8327deb882cf99', 'parimal@gmail.com', '1234', 1, '016331', 'yes', 0),
(53, 'hello', 'jack', 'hello00', '5f4dcc3b5aa765d61d8327deb882cf99', 'hello@gmail.com', '1234', 2, '015234', 'no', 0),
(54, 'user', 'name', 'username', '5f4dcc3b5aa765d61d8327deb882cf99', 'user@gmail.com', '1234', 2, '012334', 'no', 0);

-- --------------------------------------------------------

--
-- Table structure for table `update_books`
--

CREATE TABLE `update_books` (
  `id` int(11) NOT NULL,
  `books_name` varchar(40) DEFAULT NULL,
  `total_quantity` int(11) DEFAULT NULL,
  `available_qty` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `update_books`
--

INSERT INTO `update_books` (`id`, `books_name`, `total_quantity`, `available_qty`) VALUES
(11, 'physics', 20, 21),
(12, 'physics', 20, 19),
(13, 'physics', 10, 10),
(14, 'hello', 5, 5),
(15, 'chemistry', 10, 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accountant_registration`
--
ALTER TABLE `accountant_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_books`
--
ALTER TABLE `add_books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books_edition_info`
--
ALTER TABLE `books_edition_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bus_account`
--
ALTER TABLE `bus_account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `edition`
--
ALTER TABLE `edition`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issue_books`
--
ALTER TABLE `issue_books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `librarian_registration`
--
ALTER TABLE `librarian_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scholarships`
--
ALTER TABLE `scholarships`
  ADD PRIMARY KEY (`roll_no`);

--
-- Indexes for table `ssids`
--
ALTER TABLE `ssids`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students_with_due_balance`
--
ALTER TABLE `students_with_due_balance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_account`
--
ALTER TABLE `student_account`
  ADD PRIMARY KEY (`roll_no`);

--
-- Indexes for table `student_registration`
--
ALTER TABLE `student_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `update_books`
--
ALTER TABLE `update_books`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accountant_registration`
--
ALTER TABLE `accountant_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `add_books`
--
ALTER TABLE `add_books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=196;

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `books_edition_info`
--
ALTER TABLE `books_edition_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bus_account`
--
ALTER TABLE `bus_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `edition`
--
ALTER TABLE `edition`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `issue_books`
--
ALTER TABLE `issue_books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=243;

--
-- AUTO_INCREMENT for table `librarian_registration`
--
ALTER TABLE `librarian_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ssids`
--
ALTER TABLE `ssids`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students_with_due_balance`
--
ALTER TABLE `students_with_due_balance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `student_registration`
--
ALTER TABLE `student_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `update_books`
--
ALTER TABLE `update_books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
