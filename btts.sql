-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2022 at 04:24 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `btts`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `Course_name` varchar(50) NOT NULL,
  `Course_code` varchar(8) NOT NULL,
  `Started_year` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`Course_name`, `Course_code`, `Started_year`) VALUES
('B.COM(hons.)', '112', '0000-00-00'),
('BCA', '151', '2019-04-01'),
('B.Tech', '211', '2019-08-01');

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `course_name` char(50) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL,
  `subject` char(50) DEFAULT NULL,
  `subject_code` varchar(10) DEFAULT NULL,
  `date_of_exam` date DEFAULT NULL,
  `start_time` time DEFAULT NULL,
  `end_time` time DEFAULT NULL,
  `scheduled_by` varchar(20) DEFAULT NULL,
  `Question_paper_name` varchar(50) NOT NULL,
  `exam_type` varchar(20) DEFAULT NULL,
  `answer_file_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`course_name`, `semester`, `subject`, `subject_code`, `date_of_exam`, `start_time`, `end_time`, `scheduled_by`, `Question_paper_name`, `exam_type`, `answer_file_name`) VALUES
('BCA', 6, 'JAVA', 'BCA-405', '2022-04-24', '18:55:00', '19:50:00', 'Dheeraj Gupta', 'BCA_6_JAVA_20220424032456.txt', 'objective', 'BCA_6_JAVA_20220424032456.txt'),
('BCA', 6, 'C++', 'bca-152', '2022-04-25', '09:36:00', '09:40:00', 'Dheeraj Gupta', 'BCA_6_C++_20220425060448.txt', 'objective', 'BCA_6_C++_20220425060448.txt'),
('BCA', 4, 'C Programming', 'bca-152', '2022-05-14', '12:00:00', '13:00:00', 'Dheeraj Gupta', 'BCA_4_C Programming_20220514074219.txt', 'sel', 'BCA_4_C Programming_20220514074219.txt'),
('BCA', 6, 'JAVA', 'BCA 402', '2022-05-18', '10:17:00', '10:20:00', 'Dheeraj Gupta', 'BCA_6_JAVA_20220518064551.txt', 'objective', 'BCA_6_JAVA_20220518064551.txt'),
('BCA', 6, 'JAVA', 'BCA 402', '2022-05-18', '11:43:00', '00:41:00', 'Dheeraj Gupta', 'BCA_6_JAVA_20220518081200.txt', 'objective', 'BCA_6_JAVA_20220518081200.txt');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `date_of_exam` date DEFAULT NULL,
  `student_fullname` varchar(50) NOT NULL,
  `student_rollno` bigint(20) NOT NULL,
  `correct_answers` int(11) NOT NULL,
  `incorrect_answers` int(11) NOT NULL,
  `total_marks` int(11) NOT NULL,
  `total_questions` int(11) NOT NULL,
  `left_questions` int(11) NOT NULL,
  `obtained_marks` int(11) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `submitted_at` time NOT NULL,
  `course` varchar(50) NOT NULL,
  `semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`date_of_exam`, `student_fullname`, `student_rollno`, `correct_answers`, `incorrect_answers`, `total_marks`, `total_questions`, `left_questions`, `obtained_marks`, `subject`, `submitted_at`, `course`, `semester`) VALUES
('2022-05-18', 'John Wick', 1228402012, 3, 2, 5, 5, 0, 3, '', '06:47:34', 'BCA', 6),
('2022-05-18', 'jhon wick', 1228402013, 0, 5, 5, 5, 0, 0, '', '07:11:47', 'BCA', 6),
('2022-04-24', 'Dheeraj gupta', 1228402019, 3, 2, 5, 5, 0, 3, 'Java', '12:00:00', 'BCA', 6),
('2022-04-25', 'pushpa raj', 1228402020, 3, 2, 5, 5, 0, 3, '', '07:05:13', 'B.Tech', 4),
('2022-05-14', 'John Doe', 1228402025, 3, 2, 5, 5, 0, 3, '', '08:30:58', 'BCA', 6);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `First_Name` varchar(15) NOT NULL,
  `Last_Name` varchar(15) NOT NULL,
  `Date_of_Birth` date NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Mobile_Number` bigint(20) NOT NULL,
  `Roll_Number` bigint(20) NOT NULL,
  `Course` char(30) NOT NULL,
  `Semester` int(11) NOT NULL,
  `Login_Password` varchar(100) NOT NULL,
  `registered_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`First_Name`, `Last_Name`, `Date_of_Birth`, `Address`, `Mobile_Number`, `Roll_Number`, `Course`, `Semester`, `Login_Password`, `registered_at`) VALUES
('Pradeep', 'Singh', '2000-08-16', 'Lakshmi nagar', 9958581842, 228402019, 'BCA', 6, 'febc8f8ac083f5fc27e032c81e7b536a', '2022-04-23 00:00:00'),
('Chetan', 'Sharma', '2000-09-17', 'Shanti nagar', 9650747364, 624802019, 'BCA', 6, '3b8ebe34e784a3593693a37baaacb016', '2022-04-23 00:00:00'),
('John', 'Wick', '2022-05-04', 'Dakshinpuri', 1245786532, 1228402012, 'BCA', 6, '36e3fb42cbce08b6e53bc542e7a523d0', '2022-05-18 06:41:49'),
('jhon', 'wick', '2022-05-18', 'Dakshinpuri', 9625169604, 1228402013, 'BCA', 6, '3b8ebe34e784a3593693a37baaacb016', '2022-05-18 07:11:04'),
('Dheeraj', 'Gupta', '2000-04-17', 'Dakshinpuri', 9810685369, 1228402019, 'BCA', 6, 'd9c59c1aa00818c948423d8d9f141f30', '2022-04-23 10:16:10'),
('pushpa', 'raj', '2000-04-17', 'Dakshinpuri', 8178156191, 1228402020, 'B.Tech', 4, '4fabd1a9048486c0dd4e9ef91197e1a3', '2022-04-23 00:00:00'),
('John', 'Doe', '2022-05-12', 'xyz', 1234567890, 1228402025, 'BCA', 6, '6579e96f76baa00787a28653876c6127', '2022-05-14 08:22:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `First_name` varchar(15) NOT NULL,
  `Last_name` varchar(15) NOT NULL,
  `Employee_ID` varchar(15) NOT NULL,
  `Designation` varchar(20) NOT NULL,
  `Email_ID` varchar(30) NOT NULL,
  `User_name` varchar(20) NOT NULL,
  `Login_password` varchar(50) NOT NULL,
  `Phone_number` bigint(20) DEFAULT NULL,
  `Address` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`First_name`, `Last_name`, `Employee_ID`, `Designation`, `Email_ID`, `User_name`, `Login_password`, `Phone_number`, `Address`) VALUES
('John', 'Doe', 'D123', 'Developer', 'djgupta@gmail.com', 'johndoe', 'd9c59c1aa00818c948423d8d9f141f30', 9810685369, 'Dakshinpuri'),
('Dheeraj', 'Gupta', 'DJ123', 'Associate', 'djgupta820@gmail.com', 'djgupta820', 'd9c59c1aa00818c948423d8d9f141f30', 9810685236, 'Faridabad');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`Course_code`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`student_rollno`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`Roll_Number`),
  ADD UNIQUE KEY `Mobile_Number` (`Mobile_Number`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Employee_ID`),
  ADD UNIQUE KEY `Email_ID` (`Email_ID`),
  ADD UNIQUE KEY `User_name` (`User_name`),
  ADD UNIQUE KEY `Phone_number` (`Phone_number`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
