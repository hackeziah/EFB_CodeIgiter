-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2017 at 11:58 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_efb`
--

-- --------------------------------------------------------

--
-- Table structure for table `sample`
--

CREATE TABLE `sample` (
  `emp_no` int(11) NOT NULL,
  `first_name` varchar(22) NOT NULL,
  `last_name` varchar(29) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sample`
--

INSERT INTO `sample` (`emp_no`, `first_name`, `last_name`) VALUES
(1, 'dgsdfg', 'sdfgsdfg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_attendance`
--

CREATE TABLE `tbl_attendance` (
  `attId` int(11) NOT NULL,
  `attEmpID` varchar(255) NOT NULL DEFAULT '',
  `attDate` date NOT NULL,
  `attonTime` varchar(255) NOT NULL DEFAULT '',
  `attoffTime` varchar(255) NOT NULL DEFAULT '',
  `created_date` varchar(255) NOT NULL DEFAULT '',
  `status` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_attendance`
--

INSERT INTO `tbl_attendance` (`attId`, `attEmpID`, `attDate`, `attonTime`, `attoffTime`, `created_date`, `status`) VALUES
(1, '3', '2017-08-22', '3:15 PM', '6:15 PM', '2017-08-27 10:09:24', '0'),
(2, '4', '2017-08-28', '8:45 PM', '10:45 PM', '2017-08-28 17:13:36', '0'),
(3, '3', '2017-08-04', '10:15 PM', '12:15 AM', '2017-08-28 17:13:55', '0'),
(4, '5', '2017-10-13', 'dsf', 'sdfsf', '', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_credvou`
--

CREATE TABLE `tbl_credvou` (
  `voucher_name` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `credit_account` varchar(100) NOT NULL,
  `sno` int(100) NOT NULL,
  `code` varchar(100) NOT NULL,
  `name_of_ac` varchar(100) NOT NULL,
  `amount` int(100) NOT NULL,
  `narration` varchar(50) NOT NULL,
  `total` int(100) NOT NULL,
  `authorize_by` varchar(20) NOT NULL,
  `prepared_by` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_credvou`
--

INSERT INTO `tbl_credvou` (`voucher_name`, `date`, `credit_account`, `sno`, `code`, `name_of_ac`, `amount`, `narration`, `total`, `authorize_by`, `prepared_by`) VALUES
('nana', '2017-10-18', '2332', 322, 'd23', 'fadsf', 333, 'dito', 322, 'ddddddddddd', 'hhhhh'),
('kaksdfadf', '2001-11-11', 'dsafasdf', 322, 'sdffdg', 'adfdf', 333, 'asdfsf', 33, 'asdfasd', 'dsafasdfasdf');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_debvou`
--

CREATE TABLE `tbl_debvou` (
  `voucher_name` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `debit_account` varchar(100) NOT NULL,
  `sno` int(100) NOT NULL,
  `code` varchar(100) NOT NULL,
  `name_of_ac` varchar(100) NOT NULL,
  `amount` int(100) NOT NULL,
  `narration` varchar(50) NOT NULL,
  `total` int(100) NOT NULL,
  `authorize_by` varchar(100) NOT NULL,
  `prepared_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_debvou`
--

INSERT INTO `tbl_debvou` (`voucher_name`, `date`, `debit_account`, `sno`, `code`, `name_of_ac`, `amount`, `narration`, `total`, `authorize_by`, `prepared_by`) VALUES
('12345', '0000-00-00', '2345', 333, 'vgg', 'ttggg', 222, 'jnjnjn', 222, 'kevin1', 'kevin3'),
('hahaha', '0000-00-00', 'kdk', 2323, '323', '4343', 3223, 'dfsdf', 323, 'ksdfsdf', 'sfsdfsdf');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employee`
--

CREATE TABLE `tbl_employee` (
  `empID` int(11) NOT NULL,
  `empFirstName` varchar(255) NOT NULL DEFAULT '',
  `empLastName` varchar(255) NOT NULL DEFAULT '',
  `empNO` varchar(255) NOT NULL DEFAULT '',
  `empemail` varchar(255) NOT NULL DEFAULT '',
  `empMobile` varchar(255) NOT NULL DEFAULT '',
  `empbdate` date NOT NULL,
  `empaddress` varchar(255) NOT NULL DEFAULT '',
  `empshifID_FK` varchar(255) NOT NULL DEFAULT '',
  `created_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_employee`
--

INSERT INTO `tbl_employee` (`empID`, `empFirstName`, `empLastName`, `empNO`, `empemail`, `empMobile`, `empbdate`, `empaddress`, `empshifID_FK`, `created_date`, `status`) VALUES
(5, 'KEvin paul', 'lamadrid', '1', 'lamadridkevin@gmail.com', '3233223', '2017-09-19', 'asdf', 'adf', '2017-09-30 16:17:08', 'okay na man'),
(6, 'Kevin papappa', 'asdfasd', '12', 'adfad@gmail.com', '3232', '0000-00-00', 'adsfasdf', '', '2017-10-01 07:31:11', '0'),
(7, 'Kevin papappa', 'asdfasd', '12', 'adfad@gmail.com', '3232', '0000-00-00', 'adsfasdf', '', '2017-10-01 07:31:20', '0'),
(8, 'Kevin pad', 'asdfasdf', '23', 'adsf@gmail.com', '32322', '0000-00-00', 'fsdfsdf', '', '2017-10-01 07:46:01', '0'),
(9, 'va', 'asdfasdf', '23', 'adsf@gmail.com', '32322', '0000-00-00', 'fsdfsdf', '', '2017-10-01 07:47:20', '0'),
(10, 'kakak', 'dasf', '323', 'allala@gamil.com', '323', '0000-00-00', 'asdfa', '', '2017-10-01 07:51:04', '0'),
(11, 'Toni', 'koko', '33', 'lal@gmail.com', '323234', '1999-12-12', 'adsfaldsfasdf', '', '2017-10-05 04:51:27', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employees`
--

CREATE TABLE `tbl_employees` (
  `id` int(11) NOT NULL,
  `employee_name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_employees`
--

INSERT INTO `tbl_employees` (`id`, `employee_name`, `address`, `created_at`, `updated_at`) VALUES
(4, 'Jonard', 'ffggfg', '2017-09-22', '2017-09-22'),
(5, 'kevin', 'asdfasdfasdf', '2017-09-23', '0000-00-00'),
(6, 'dfgdfg', 'sdfgsdfgsdfg', '2017-09-23', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_holiday`
--

CREATE TABLE `tbl_holiday` (
  `holID` int(11) NOT NULL,
  `holName` varchar(255) NOT NULL DEFAULT '',
  `holDate` date NOT NULL,
  `holDescription` text NOT NULL,
  `created_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_holiday`
--

INSERT INTO `tbl_holiday` (`holID`, `holName`, `holDate`, `holDescription`, `created_date`, `status`) VALUES
(1, 'Diwali', '2017-08-27', 'not avaialble', '2017-08-27 10:10:00', '0'),
(2, 'Utarayan', '2017-08-30', 'not', '2017-08-28 17:14:28', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_salary`
--

CREATE TABLE `tbl_salary` (
  `salID` int(11) NOT NULL,
  `salEmpID` varchar(255) NOT NULL DEFAULT '',
  `salBeginDate` date NOT NULL,
  `salBasicSalary` varchar(255) NOT NULL DEFAULT '',
  `salGrade` varchar(255) NOT NULL DEFAULT '',
  `created_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_salary`
--

INSERT INTO `tbl_salary` (`salID`, `salEmpID`, `salBeginDate`, `salBasicSalary`, `salGrade`, `created_date`, `status`) VALUES
(1, '1', '2017-08-01', '2000', '5000', '2017-08-27 10:09:44', '0'),
(2, '4', '2017-08-30', '2000', '1000', '2017-08-28 17:14:13', '0'),
(3, '5', '2017-10-26', '33', '33', '2017-10-01 11:57:15', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shift_allocation`
--

CREATE TABLE `tbl_shift_allocation` (
  `aloID` int(11) NOT NULL,
  `aloEmpID` varchar(255) NOT NULL DEFAULT '',
  `aloDay` date NOT NULL,
  `aloTimeIn` varchar(255) NOT NULL DEFAULT '',
  `aloTimeOut` varchar(255) NOT NULL DEFAULT '',
  `created_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_shift_allocation`
--

INSERT INTO `tbl_shift_allocation` (`aloID`, `aloEmpID`, `aloDay`, `aloTimeIn`, `aloTimeOut`, `created_date`, `status`) VALUES
(1, '2', '2017-08-02', '1:45 PM', '4:00 PM', '2017-08-27 10:05:02', '0'),
(2, '3', '2017-08-27', '1:45 PM', '4:45 PM', '2017-08-27 10:07:44', '0'),
(3, '1', '2017-08-30', '8:45 PM', '10:45 PM', '2017-08-28 17:04:51', '0'),
(4, '5', '2017-08-26', '8:45 PM', '12:00 AM', '2017-08-28 17:05:13', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shift_attendance`
--

CREATE TABLE `tbl_shift_attendance` (
  `aloID` int(11) NOT NULL,
  `aloEmpID` varchar(255) NOT NULL DEFAULT '',
  `aloDay` date NOT NULL,
  `aloTimeIn` varchar(255) NOT NULL DEFAULT '',
  `aloTimeOut` varchar(255) NOT NULL DEFAULT '',
  `created_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_shift_attendance`
--

INSERT INTO `tbl_shift_attendance` (`aloID`, `aloEmpID`, `aloDay`, `aloTimeIn`, `aloTimeOut`, `created_date`, `status`) VALUES
(1, '1', '2017-08-01', '1:45 PM', '12:15 AM', '2017-08-27 10:08:16', '0'),
(2, '3', '2017-08-27', '1:45 PM', '3:15 PM', '2017-08-27 10:08:42', '0'),
(3, '5', '2017-08-28', '8:45 PM', '10:30 PM', '2017-08-28 17:12:07', '0'),
(5, '5', '2017-10-27', '12', '12', '2017-10-01 13:03:17', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_trans`
--

CREATE TABLE `tbl_trans` (
  `voucher_name` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `credit_account` varchar(100) NOT NULL,
  `debit_account` varchar(100) NOT NULL,
  `amount` int(100) NOT NULL,
  `narration` varchar(50) NOT NULL,
  `authorize_by` varchar(20) NOT NULL,
  `prepared_by` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_trans`
--

INSERT INTO `tbl_trans` (`voucher_name`, `date`, `credit_account`, `debit_account`, `amount`, `narration`, `authorize_by`, `prepared_by`) VALUES
('2323', '0000-00-00', 'dfd', 'asdfa', 34343, 'dfgdfg', 'kevin1', 'kevin3'),
('32323', '0000-00-00', '2323', '21212', 2323, 'sdfdf', 'asdfadf', 'sdfasdf'),
('32323', '0000-00-00', '2323', '21212', 2323, 'CCCCCCCCCCCCC', 'asdfadf', 'sdfasdf'),
('dfds', '0000-00-00', 'ddd', 'dd', 2, 'ddd', 'fff', '1111'),
('dfds', '0000-00-00', 'ddd', 'dd', 2, 'ddd', 'fff', '1111'),
('232', '0000-00-00', 'adfasdf', 'adfas', 323, 'aadf', 'adsfsd', 'asdfasdf');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` varchar(255) NOT NULL DEFAULT '0',
  `date` datetime NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `name`, `email`, `username`, `phone`, `password`, `is_admin`, `date`, `status`) VALUES
(1, 'kevin paul', 'admin@bladephp.co', 'user', '9979133538', '123456', '1', '2017-04-29 03:07:07', '0'),
(2, 'mely', 'diamond@gmail.com', 'user', '9979133538', '123456', '0', '2017-04-29 13:41:07', '1'),
(3, 'paul', 'mitul@gmail.com', 'uer', '9979133538', '123456', '0', '2017-04-29 14:10:53', '0'),
(4, 'anthony', 'kevindsfadf@gmail.com', 'admin', '9979133538', 'admin', '0', '2017-04-29 14:11:40', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sample`
--
ALTER TABLE `sample`
  ADD PRIMARY KEY (`emp_no`);

--
-- Indexes for table `tbl_attendance`
--
ALTER TABLE `tbl_attendance`
  ADD PRIMARY KEY (`attId`);

--
-- Indexes for table `tbl_employee`
--
ALTER TABLE `tbl_employee`
  ADD PRIMARY KEY (`empID`);

--
-- Indexes for table `tbl_employees`
--
ALTER TABLE `tbl_employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_holiday`
--
ALTER TABLE `tbl_holiday`
  ADD PRIMARY KEY (`holID`);

--
-- Indexes for table `tbl_salary`
--
ALTER TABLE `tbl_salary`
  ADD PRIMARY KEY (`salID`);

--
-- Indexes for table `tbl_shift_allocation`
--
ALTER TABLE `tbl_shift_allocation`
  ADD PRIMARY KEY (`aloID`);

--
-- Indexes for table `tbl_shift_attendance`
--
ALTER TABLE `tbl_shift_attendance`
  ADD PRIMARY KEY (`aloID`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sample`
--
ALTER TABLE `sample`
  MODIFY `emp_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_attendance`
--
ALTER TABLE `tbl_attendance`
  MODIFY `attId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_employee`
--
ALTER TABLE `tbl_employee`
  MODIFY `empID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tbl_employees`
--
ALTER TABLE `tbl_employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_holiday`
--
ALTER TABLE `tbl_holiday`
  MODIFY `holID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_salary`
--
ALTER TABLE `tbl_salary`
  MODIFY `salID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_shift_allocation`
--
ALTER TABLE `tbl_shift_allocation`
  MODIFY `aloID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_shift_attendance`
--
ALTER TABLE `tbl_shift_attendance`
  MODIFY `aloID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
