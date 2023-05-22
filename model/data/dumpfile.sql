-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: May 22, 2023 at 09:00 AM
-- Server version: 8.0.32
-- PHP Version: 8.1.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `COURSE`
--

CREATE TABLE `COURSE` (
  `ID` int NOT NULL,
  `NAME` varchar(255) NOT NULL,
  `AUTHOR_ID` int NOT NULL,
  `NIVEAU` int DEFAULT NULL,
  `DESCRIPTION` varchar(1000) NOT NULL,
  `CREATED_AT` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `COURSE`
--

INSERT INTO `COURSE` (`ID`, `NAME`, `AUTHOR_ID`, `NIVEAU`, `DESCRIPTION`, `CREATED_AT`) VALUES
(1, 'php', 1, NULL, 'dsfsdfsdf', '2023-04-03 09:34:50'),
(2, 'phpInit', 1, NULL, 'dsfsdfsdf', '2023-04-03 09:35:05'),
(3, 'phpInit', 1, NULL, 'dsfsdfsdf', '2023-04-03 09:43:20'),
(4, 'phpInit', 1, NULL, 'dsfsdfsdf', '2023-04-03 09:44:02'),
(5, 'phpInit', 1, NULL, 'dsfsdfsdf', '2023-04-03 09:45:20'),
(6, 'phpInit', 4, NULL, 'dsfsdfsdf', '2023-04-03 09:47:06'),
(7, 'phpInit', 4, NULL, 'dsfsdfsdf', '2023-04-04 10:36:39'),
(8, 'HTML', 4, NULL, 'kjfhkefhlzfcbkfjevclzjhlck', '2023-04-04 14:04:36'),
(9, 'HTML', 4, NULL, 'kjfhkefhlzfcbkfjevclzjhlck', '2023-04-04 14:05:36'),
(10, 'HTML', 4, NULL, 'kjfhkefhlzfcbkfjevclzjhlck', '2023-04-11 15:05:18'),
(11, 'Course 1', 1, NULL, 'This is course 1', '2023-05-03 09:35:53'),
(12, 'Course 2', 2, NULL, 'This is course 2', '2023-05-03 09:35:53'),
(13, 'Course 3', 1, NULL, 'This is course 3', '2023-05-03 09:35:53'),
(14, 'Course 1', 1, NULL, 'This is course 1', '2023-05-03 09:36:30'),
(15, 'Course 2', 2, NULL, 'This is course 2', '2023-05-03 09:36:30'),
(16, 'Course 3', 1, NULL, 'This is course 3', '2023-05-03 09:36:30'),
(17, 'Course 1', 1, NULL, 'This is the description for Course 1', '2023-05-03 09:37:55'),
(18, 'Course 2', 2, NULL, 'This is the description for Course 2', '2023-05-03 09:37:55'),
(19, 'Course 3', 1, NULL, 'This is the description for Course 3', '2023-05-03 09:37:55');

-- --------------------------------------------------------

--
-- Table structure for table `FOLLOWED_COURSE`
--

CREATE TABLE `FOLLOWED_COURSE` (
  `ID` int NOT NULL,
  `USER_ID` int NOT NULL,
  `COURSE_ID` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `FOLLOWED_COURSE`
--

INSERT INTO `FOLLOWED_COURSE` (`ID`, `USER_ID`, `COURSE_ID`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3),
(4, 2, 1),
(5, 2, 2),
(6, 3, 3),
(7, 1, 1),
(8, 1, 2),
(9, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `FORUM_DISCUSSION`
--

CREATE TABLE `FORUM_DISCUSSION` (
  `ID` int NOT NULL,
  `USER_ID` int NOT NULL,
  `COURSE_ID` int NOT NULL,
  `TITLE` varchar(255) NOT NULL,
  `CREATED_AT` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `FORUM_DISCUSSION`
--

INSERT INTO `FORUM_DISCUSSION` (`ID`, `USER_ID`, `COURSE_ID`, `TITLE`, `CREATED_AT`) VALUES
(1, 1, 1, 'Discussion 4', '2023-05-03 09:34:56'),
(2, 2, 2, 'Discussion 5', '2023-05-03 09:34:56'),
(3, 3, 3, 'Discussion 6', '2023-05-03 09:34:56'),
(4, 1, 1, 'Discussion 1', '2023-05-03 09:35:53'),
(5, 2, 2, 'Discussion 2', '2023-05-03 09:35:53'),
(6, 3, 3, 'Discussion 3', '2023-05-03 09:35:53'),
(7, 1, 1, 'Discussion 1', '2023-05-03 09:36:30'),
(8, 2, 2, 'Discussion 2', '2023-05-03 09:36:30'),
(9, 3, 3, 'Discussion 3', '2023-05-03 09:36:30'),
(10, 1, 1, 'Discussion 1', '2023-05-03 09:37:55'),
(11, 2, 2, 'Discussion 2', '2023-05-03 09:37:55'),
(12, 2, 3, 'Discussion 3', '2023-05-03 09:37:55');

-- --------------------------------------------------------

--
-- Table structure for table `FORUM_MESSAGE`
--

CREATE TABLE `FORUM_MESSAGE` (
  `ID` int NOT NULL,
  `USER_ID` int NOT NULL,
  `DISCUSSION_ID` int NOT NULL,
  `CONTENT` varchar(256) NOT NULL,
  `CREATED_AT` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `FORUM_MESSAGE`
--

INSERT INTO `FORUM_MESSAGE` (`ID`, `USER_ID`, `DISCUSSION_ID`, `CONTENT`, `CREATED_AT`) VALUES
(1, 1, 1, 'Message 4', '2023-05-03 09:34:56'),
(2, 2, 2, 'Message 5', '2023-05-03 09:34:56'),
(3, 3, 3, 'Message 6', '2023-05-03 09:34:56'),
(4, 1, 1, 'Message 1', '2023-05-03 09:35:53'),
(5, 2, 2, 'Message 2', '2023-05-03 09:35:53'),
(6, 3, 3, 'Message 3', '2023-05-03 09:35:53'),
(7, 1, 1, 'Message 1', '2023-05-03 09:36:30'),
(8, 2, 2, 'Message 2', '2023-05-03 09:36:30'),
(9, 3, 3, 'Message 3', '2023-05-03 09:36:30'),
(10, 1, 1, 'This is a message in Discussion 1', '2023-05-03 09:37:55'),
(11, 2, 1, 'This is another message in Discussion 1', '2023-05-03 09:37:55'),
(12, 1, 2, 'This is a message in Discussion 2', '2023-05-03 09:37:55'),
(13, 2, 3, 'This is a message in Discussion 3', '2023-05-03 09:37:55'),
(14, 2, 11, 'fjskldjfhlksdhj', '2023-05-09 07:15:49'),
(15, 2, 12, 'jhgjkgkj\n', '2023-05-09 07:19:23'),
(16, 2, 11, 'lmkljkmljlk\n', '2023-05-09 07:19:38'),
(17, 1, 10, 'jkhklkjhk\n', '2023-05-09 07:20:09'),
(18, 1, 11, 'jkghgjkgkjh\n', '2023-05-09 07:20:22'),
(19, 2, 11, 'jgkdsfklgs', '2023-05-09 08:12:53');

-- --------------------------------------------------------

--
-- Table structure for table `TEST`
--

CREATE TABLE `TEST` (
  `ID` int NOT NULL,
  `NAME` varchar(255) NOT NULL,
  `COURSE_ID` int NOT NULL,
  `CREATED_AT` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `TEST`
--

INSERT INTO `TEST` (`ID`, `NAME`, `COURSE_ID`, `CREATED_AT`) VALUES
(1, 'Test 1', 1, '2023-05-03 09:35:53'),
(2, 'Test 2', 2, '2023-05-03 09:35:53'),
(3, 'Test 3', 3, '2023-05-03 09:35:53'),
(4, 'Test 1', 1, '2023-05-03 09:36:30'),
(5, 'Test 2', 2, '2023-05-03 09:36:30'),
(6, 'Test 3', 3, '2023-05-03 09:36:30'),
(7, 'Test 1', 1, '2023-05-03 09:37:55'),
(8, 'Test 2', 2, '2023-05-03 09:37:55'),
(9, 'Test 3', 3, '2023-05-03 09:37:55');

-- --------------------------------------------------------

--
-- Table structure for table `TEST_USER`
--

CREATE TABLE `TEST_USER` (
  `ID` int NOT NULL,
  `TEST_ID` int NOT NULL,
  `USER_ID` int NOT NULL,
  `SCORE` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `TEST_USER`
--

INSERT INTO `TEST_USER` (`ID`, `TEST_ID`, `USER_ID`, `SCORE`) VALUES
(1, 1, 1, 90.50),
(2, 2, 2, 85.00),
(3, 3, 3, 92.30),
(4, 1, 1, 85.50),
(5, 1, 2, 90.25),
(6, 2, 1, 78.00),
(7, 2, 2, 92.75),
(8, 3, 1, 89.00),
(9, 3, 2, 87.50);

-- --------------------------------------------------------

--
-- Table structure for table `USER`
--

CREATE TABLE `USER` (
  `ID` int NOT NULL,
  `FIRSTNAME` varchar(255) NOT NULL,
  `LASTNAME` varchar(255) NOT NULL,
  `EMAIL` varchar(255) DEFAULT NULL,
  `NIVEAU` int DEFAULT NULL,
  `USERNAME` varchar(255) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `ROLE` varchar(255) NOT NULL,
  `CREATED_AT` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `USER`
--

INSERT INTO `USER` (`ID`, `FIRSTNAME`, `LASTNAME`, `EMAIL`, `NIVEAU`, `USERNAME`, `PASSWORD`, `ROLE`, `CREATED_AT`) VALUES
(1, 'charles', 'charles', NULL, NULL, 'charles', 'ce5ca673d13b36118d54a7cf13aeb0ca012383bf771e713421b4d1fd841f539a', 'teacher', '2023-05-09 08:06:26'),
(2, 'charles', 'charles', NULL, NULL, 'charle', 'ce5ca673d13b36118d54a7cf13aeb0ca012383bf771e713421b4d1fd841f539a', 'student', '2023-05-03 09:30:51'),
(3, 'ciccio', 'ciccio', NULL, NULL, 'ciccio', 'ce5ca673d13b36118d54a7cf13aeb0ca012383bf771e713421b4d1fd841f539a', '3', '2023-05-03 09:30:51'),
(4, 'charles', 'charles', NULL, NULL, 'CharleT', 'ce5ca673d13b36118d54a7cf13aeb0ca012383bf771e713421b4d1fd841f539a', 'teacher', '2023-05-03 09:30:51'),
(5, 'John', 'Doe', 'john.doe@example.com', 1, 'johndoe', '0b14d501a594442a01c6859541bcb3e8164d183d32937b851835442f69d5c94e', 'student', '2023-05-03 09:35:53'),
(6, 'Jane', 'Smith', 'jane.smith@example.com', 2, 'janesmith', '6cf615d5bcaac778352a8f1f3360d23f02f34ec182e259897fd6ce485d7870d4', 'student', '2023-05-03 09:35:53'),
(7, 'Admin', 'User', 'admin@example.com', 10, 'admin', '5906ac361a137e2d286465cd6588ebb5ac3f5ae955001100bc41577c3d751764', 'teacher', '2023-05-03 09:35:53'),
(8, 'John', 'Doe', 'john.doe@example.com', 1, 'johndoe', '0b14d501a594442a01c6859541bcb3e8164d183d32937b851835442f69d5c94e', 'student', '2023-05-03 09:36:30'),
(9, 'Jane', 'Smith', 'jane.smith@example.com', 2, 'janesmith', '6cf615d5bcaac778352a8f1f3360d23f02f34ec182e259897fd6ce485d7870d4', 'student', '2023-05-03 09:36:30'),
(10, 'Admin', 'User', 'admin@example.com', 10, 'admin', '5906ac361a137e2d286465cd6588ebb5ac3f5ae955001100bc41577c3d751764', 'teacher', '2023-05-03 09:36:30');

--
-- Triggers `USER`
--
DELIMITER $$
CREATE TRIGGER `CRIPT_PASSWORD` BEFORE INSERT ON `USER` FOR EACH ROW SET NEW.PASSWORD=SHA2(NEW.PASSWORD,256)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `CRIPT_PASSWORD_UPDATE` BEFORE UPDATE ON `USER` FOR EACH ROW SET NEW.PASSWORD=SHA2(NEW.PASSWORD,256)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `INSERT_ADMIN_DENY` BEFORE INSERT ON `USER` FOR EACH ROW IF NEW.ROLE='3' THEN
        SIGNAL SQLSTATE '45000'
            SET MESSAGE_TEXT = 'Insert not possible';
    END IF
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `COURSE`
--
ALTER TABLE `COURSE`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `AUTHOR_ID` (`AUTHOR_ID`);

--
-- Indexes for table `FOLLOWED_COURSE`
--
ALTER TABLE `FOLLOWED_COURSE`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `USER_ID` (`USER_ID`),
  ADD KEY `COURSE_ID` (`COURSE_ID`);

--
-- Indexes for table `FORUM_DISCUSSION`
--
ALTER TABLE `FORUM_DISCUSSION`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `USER_ID` (`USER_ID`),
  ADD KEY `COURSE_ID` (`COURSE_ID`);

--
-- Indexes for table `FORUM_MESSAGE`
--
ALTER TABLE `FORUM_MESSAGE`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `USER_ID` (`USER_ID`),
  ADD KEY `DISCUSSION_ID` (`DISCUSSION_ID`);

--
-- Indexes for table `TEST`
--
ALTER TABLE `TEST`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `COURSE_ID` (`COURSE_ID`);

--
-- Indexes for table `TEST_USER`
--
ALTER TABLE `TEST_USER`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `USER`
--
ALTER TABLE `USER`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `COURSE`
--
ALTER TABLE `COURSE`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `FOLLOWED_COURSE`
--
ALTER TABLE `FOLLOWED_COURSE`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `FORUM_DISCUSSION`
--
ALTER TABLE `FORUM_DISCUSSION`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `FORUM_MESSAGE`
--
ALTER TABLE `FORUM_MESSAGE`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `TEST`
--
ALTER TABLE `TEST`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `TEST_USER`
--
ALTER TABLE `TEST_USER`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `USER`
--
ALTER TABLE `USER`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `COURSE`
--
ALTER TABLE `COURSE`
  ADD CONSTRAINT `COURSE_ibfk_1` FOREIGN KEY (`AUTHOR_ID`) REFERENCES `USER` (`ID`) ON DELETE CASCADE;

--
-- Constraints for table `FOLLOWED_COURSE`
--
ALTER TABLE `FOLLOWED_COURSE`
  ADD CONSTRAINT `FOLLOWED_COURSE_ibfk_1` FOREIGN KEY (`USER_ID`) REFERENCES `USER` (`ID`) ON DELETE CASCADE,
  ADD CONSTRAINT `FOLLOWED_COURSE_ibfk_2` FOREIGN KEY (`COURSE_ID`) REFERENCES `COURSE` (`ID`) ON DELETE CASCADE;

--
-- Constraints for table `FORUM_DISCUSSION`
--
ALTER TABLE `FORUM_DISCUSSION`
  ADD CONSTRAINT `FORUM_DISCUSSION_ibfk_1` FOREIGN KEY (`USER_ID`) REFERENCES `USER` (`ID`) ON DELETE CASCADE,
  ADD CONSTRAINT `FORUM_DISCUSSION_ibfk_2` FOREIGN KEY (`COURSE_ID`) REFERENCES `COURSE` (`ID`) ON DELETE CASCADE;

--
-- Constraints for table `FORUM_MESSAGE`
--
ALTER TABLE `FORUM_MESSAGE`
  ADD CONSTRAINT `FORUM_MESSAGE_ibfk_1` FOREIGN KEY (`USER_ID`) REFERENCES `USER` (`ID`) ON DELETE CASCADE,
  ADD CONSTRAINT `FORUM_MESSAGE_ibfk_2` FOREIGN KEY (`DISCUSSION_ID`) REFERENCES `FORUM_DISCUSSION` (`ID`) ON DELETE CASCADE;

--
-- Constraints for table `TEST`
--
ALTER TABLE `TEST`
  ADD CONSTRAINT `TEST_ibfk_1` FOREIGN KEY (`COURSE_ID`) REFERENCES `COURSE` (`ID`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
