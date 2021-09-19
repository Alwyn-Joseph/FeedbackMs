-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Sep 19, 2021 at 01:03 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alvas`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_notifications`
--

CREATE TABLE `admin_notifications` (
  `n_id` int(11) NOT NULL,
  `u_name` varchar(30) DEFAULT NULL,
  `u_id` varchar(50) DEFAULT NULL,
  `u_message` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_notifications`
--

INSERT INTO `admin_notifications` (`n_id`, `u_name`, `u_id`, `u_message`) VALUES
(1, 'Victor Blackburn', 'caky@mailinator.com', 'Officia deleniti ut '),
(2, 'MacKenzie Guzman', 'kopetyr@mailinator.com', 'Consequatur aute ut '),
(3, 'Rose Olsen', 'buzesik@mailinator.com', 'Similique nemo rerum'),
(4, 'Yoshio Atkins', 'fomumo@mailinator.com', 'Ratione natus sint '),
(5, 'Alwyn Joseph', 'alwynjoseph33@gmail.com', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti ipsa quos sit! Quibusdam ab eius architecto voluptatibus cum fuga assumenda, provident dicta nihil voluptas error consectetur veniam o'),
(6, 'Alps Mhd', 'alwynjoseph15@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, molestiae. Incidunt dicta recusandae reprehenderit illo perspiciatis, quidem doloribus magni praesentium, cum totam porro repellen'),
(7, 'Alwyn Joseph', 'alwynjoseph33@gmail.com', 'jol.');

-- --------------------------------------------------------

--
-- Table structure for table `alumni_feedback`
--

CREATE TABLE `alumni_feedback` (
  `fdbk_id` int(11) NOT NULL,
  `s_id` varchar(6) DEFAULT NULL,
  `q1` int(11) DEFAULT NULL,
  `q2` int(11) DEFAULT NULL,
  `q3` int(11) DEFAULT NULL,
  `q4` int(11) DEFAULT NULL,
  `q5` int(11) DEFAULT NULL,
  `q6` int(11) DEFAULT NULL,
  `q7` int(11) DEFAULT NULL,
  `q8` int(11) DEFAULT NULL,
  `q9` int(11) DEFAULT NULL,
  `q10` int(11) DEFAULT NULL,
  `q11` int(11) DEFAULT NULL,
  `q12` int(11) DEFAULT NULL,
  `q13` int(11) DEFAULT NULL,
  `q14` int(11) DEFAULT NULL,
  `q15` int(11) DEFAULT NULL,
  `q16` int(11) DEFAULT NULL,
  `q17` int(11) DEFAULT NULL,
  `q18` int(11) DEFAULT NULL,
  `q19` int(11) DEFAULT NULL,
  `q20` int(11) DEFAULT NULL,
  `q21` int(11) DEFAULT NULL,
  `q22` int(11) DEFAULT NULL,
  `q23` int(11) DEFAULT NULL,
  `q24` int(11) DEFAULT NULL,
  `q25` int(11) DEFAULT NULL,
  `q26` int(11) DEFAULT NULL,
  `q27` int(11) DEFAULT NULL,
  `q28` int(11) DEFAULT NULL,
  `q29` int(11) DEFAULT NULL,
  `q30` int(11) DEFAULT NULL,
  `q31` int(11) DEFAULT NULL,
  `cmnt` varchar(200) DEFAULT NULL,
  `q32` int(11) DEFAULT NULL,
  `q33` int(11) DEFAULT NULL,
  `q34` int(11) DEFAULT NULL,
  `q35` int(11) DEFAULT NULL,
  `q36` int(11) DEFAULT NULL,
  `current_possition` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alumni_feedback`
--

INSERT INTO `alumni_feedback` (`fdbk_id`, `s_id`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`, `q11`, `q12`, `q13`, `q14`, `q15`, `q16`, `q17`, `q18`, `q19`, `q20`, `q21`, `q22`, `q23`, `q24`, `q25`, `q26`, `q27`, `q28`, `q29`, `q30`, `q31`, `cmnt`, `q32`, `q33`, `q34`, `q35`, `q36`, `current_possition`) VALUES
(1, 'S101', 2, 1, 4, 4, 2, 3, 5, 1, 2, 5, 1, 2, 2, 4, 1, 2, 4, 5, 1, 1, 4, 3, 4, 1, 4, 4, 4, 4, 3, 2, 2, 'Quod omnis similique', 2, 2, 2, 2, 1, 'Qui commodo ut exerc'),
(2, 'S101', 3, 4, 3, 5, 4, 1, 1, 2, 2, 1, 3, 1, 2, 4, 4, 5, 5, 4, 4, 3, 1, 5, 3, 5, 1, 2, 4, 4, 2, 3, 3, 'Laborum quia culpa ', 2, 2, 2, 2, 1, 'Deleniti quasi asper');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `c_id` varchar(5) NOT NULL,
  `c_name` varchar(20) DEFAULT NULL,
  `no_of_students` int(11) DEFAULT NULL,
  `d_id` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`c_id`, `c_name`, `no_of_students`, `d_id`) VALUES
('C101', 'BCA', 100, 'D101'),
('C102', 'BSC', 150, 'D101'),
('C103', 'BE', 150, 'D102'),
('C104', 'BTech', 150, 'D103');

-- --------------------------------------------------------

--
-- Table structure for table `course_exit`
--

CREATE TABLE `course_exit` (
  `exit_id` int(11) NOT NULL,
  `s_id` varchar(5) NOT NULL,
  `s_name` varchar(20) NOT NULL,
  `c_id` varchar(5) NOT NULL,
  `c_name` varchar(20) NOT NULL,
  `q1` int(11) NOT NULL,
  `q2` int(11) NOT NULL,
  `q3` int(11) NOT NULL,
  `q4` int(11) NOT NULL,
  `q5` int(11) NOT NULL,
  `q6` int(11) NOT NULL,
  `q7` int(11) NOT NULL,
  `q8` int(11) NOT NULL,
  `q9` int(11) NOT NULL,
  `q10` int(11) NOT NULL,
  `q11` int(11) NOT NULL,
  `q12` int(11) NOT NULL,
  `cmnts` varchar(200) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_exit`
--

INSERT INTO `course_exit` (`exit_id`, `s_id`, `s_name`, `c_id`, `c_name`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`, `q11`, `q12`, `cmnts`, `date`) VALUES
(1, 'S101', 'Sam Prakash', 'C101', 'BCA', 3, 1, 2, 1, 5, 5, 0, 0, 0, 0, 0, 0, 'Sunt pariatur In d', '2021-09-19'),
(2, 'S101', 'Sam Prakash', 'C101', 'BCA', 1, 2, 2, 5, 4, 4, 0, 0, 0, 0, 0, 0, 'Excepturi itaque min', '2021-09-19'),
(3, 'S101', 'Sam Prakash', 'C101', 'BCA', 3, 2, 5, 3, 1, 5, 0, 0, 0, 0, 0, 0, 'Ipsum impedit rerum', '2021-09-19'),
(4, 'S101', 'Sam Prakash', 'C101', 'BCA', 5, 4, 2, 4, 3, 4, 0, 0, 0, 0, 0, 0, 'Cum dolor consequatu', '2021-09-19');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `d_id` varchar(5) NOT NULL,
  `d_name` varchar(20) DEFAULT NULL,
  `n_of_faculties` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`d_id`, `d_name`, `n_of_faculties`) VALUES
('D101', 'CS', 10),
('D102', 'EC', 10),
('D103', 'MEC', 10),
('D104', 'AI', 10);

-- --------------------------------------------------------

--
-- Table structure for table `employer_details`
--

CREATE TABLE `employer_details` (
  `e_id` varchar(5) NOT NULL,
  `e_name` varchar(20) DEFAULT NULL,
  `e_mail` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employer_details`
--

INSERT INTO `employer_details` (`e_id`, `e_name`, `e_mail`) VALUES
('E101', 'Accenture', 'alwynjoseph33@gmail.com'),
('E102', 'Infosys', 'alwynjoseph15@gmail.com'),
('E103', 'Tech Mahindra', 'abhishekmgowda4727@gmail.com'),
('E110', 'Alps Mhd', 'alwynjoseph33@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `employer_feedback`
--

CREATE TABLE `employer_feedback` (
  `fdbk_id` int(11) NOT NULL,
  `q1` int(11) DEFAULT NULL,
  `q2` int(11) DEFAULT NULL,
  `q3` int(11) DEFAULT NULL,
  `q4` int(11) DEFAULT NULL,
  `q5` int(11) DEFAULT NULL,
  `q6` int(11) DEFAULT NULL,
  `q7` int(11) DEFAULT NULL,
  `q8` int(11) DEFAULT NULL,
  `q9` int(11) DEFAULT NULL,
  `q10` int(11) DEFAULT NULL,
  `q11` int(11) DEFAULT NULL,
  `q12` int(11) DEFAULT NULL,
  `q13` int(11) DEFAULT NULL,
  `q14` int(11) DEFAULT NULL,
  `q15` int(11) DEFAULT NULL,
  `q16` int(11) DEFAULT NULL,
  `q17` int(11) DEFAULT NULL,
  `q18` int(11) DEFAULT NULL,
  `cmnt1` varchar(200) DEFAULT NULL,
  `cmnt2` varchar(200) DEFAULT NULL,
  `cmnt3` varchar(200) DEFAULT NULL,
  `e_id` varchar(5) DEFAULT NULL,
  `e_name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employer_feedback`
--

INSERT INTO `employer_feedback` (`fdbk_id`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`, `q11`, `q12`, `q13`, `q14`, `q15`, `q16`, `q17`, `q18`, `cmnt1`, `cmnt2`, `cmnt3`, `e_id`, `e_name`) VALUES
(1, 3, 5, 1, 3, 4, 5, 3, 4, 4, 4, 3, 1, 1, 1, 2, 1, NULL, NULL, 'Quia esse dolore fu', 'Dignissimos mollitia', NULL, 'E101', 'Accenture'),
(2, 5, 5, 4, 5, 1, 5, 2, 5, 5, 3, 5, 2, 5, 4, 5, 5, NULL, NULL, 'Pariatur Et nulla c', 'Quia voluptatibus au', NULL, 'E101', 'Accenture'),
(3, 4, 3, 1, 1, 5, 4, 4, 3, 5, 2, 2, 3, 5, 5, 4, 3, NULL, NULL, 'Aut qui pariatur Qu', 'Suscipit deleniti ni', NULL, 'E101', 'Accenture');

-- --------------------------------------------------------

--
-- Table structure for table `event_feedback`
--

CREATE TABLE `event_feedback` (
  `fdbk_id` varchar(5) DEFAULT NULL,
  `s_id` varchar(6) DEFAULT NULL,
  `e_name` varchar(30) DEFAULT NULL,
  `q1` int(11) DEFAULT NULL,
  `q2` int(11) DEFAULT NULL,
  `q3` int(11) DEFAULT NULL,
  `q4` int(11) DEFAULT NULL,
  `q5` int(11) DEFAULT NULL,
  `q6` int(11) DEFAULT NULL,
  `q7` int(11) DEFAULT NULL,
  `q8` int(11) DEFAULT NULL,
  `q9` int(11) DEFAULT NULL,
  `q10` int(11) DEFAULT NULL,
  `q11` int(11) DEFAULT NULL,
  `q12` int(11) DEFAULT NULL,
  `q13` int(11) DEFAULT NULL,
  `q14` int(11) DEFAULT NULL,
  `q15` int(11) DEFAULT NULL,
  `q16` int(11) DEFAULT NULL,
  `q17` int(11) DEFAULT NULL,
  `q18` int(11) DEFAULT NULL,
  `cmnt` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event_feedback`
--

INSERT INTO `event_feedback` (`fdbk_id`, `s_id`, `e_name`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`, `q11`, `q12`, `q13`, `q14`, `q15`, `q16`, `q17`, `q18`, `cmnt`) VALUES
(NULL, 'S101', 'Workshop on PHP', 2, 2, 2, 1, 5, 4, 3, 1, 3, 4, 2, 1, NULL, NULL, NULL, NULL, NULL, NULL, 'Similique vitae quia'),
(NULL, 'S101', 'Workshop on PHP', 2, 5, 4, 3, 2, 2, 5, 5, 5, 2, 5, 2, NULL, NULL, NULL, NULL, NULL, NULL, 'Quaerat dolor assume'),
(NULL, 'S101', 'Workshop on PHP', 2, 1, 4, 4, 5, 5, 3, 1, 1, 2, 5, 2, NULL, NULL, NULL, NULL, NULL, NULL, 'Unde aspernatur offi'),
(NULL, 'S101', 'Workshop on PHP', 5, 4, 3, 3, 4, 1, 3, 3, 5, 4, 2, 1, NULL, NULL, NULL, NULL, NULL, NULL, 'Laboris debitis quas');

-- --------------------------------------------------------

--
-- Table structure for table `examiner_feedback`
--

CREATE TABLE `examiner_feedback` (
  `fdbk_id` int(11) NOT NULL,
  `e_id` varchar(30) NOT NULL,
  `f_id` varchar(5) DEFAULT NULL,
  `q1` int(11) DEFAULT NULL,
  `q2` int(11) DEFAULT NULL,
  `q3` int(11) DEFAULT NULL,
  `q4` int(11) DEFAULT NULL,
  `q5` int(11) DEFAULT NULL,
  `q6` int(11) DEFAULT NULL,
  `q7` int(11) DEFAULT NULL,
  `q8` int(11) DEFAULT NULL,
  `q9` int(11) DEFAULT NULL,
  `q10` int(11) DEFAULT NULL,
  `q11` int(11) DEFAULT NULL,
  `q12` int(11) DEFAULT NULL,
  `q13` int(11) DEFAULT NULL,
  `q14` int(11) DEFAULT NULL,
  `q15` int(11) DEFAULT NULL,
  `q16` int(11) DEFAULT NULL,
  `q17` int(11) DEFAULT NULL,
  `q18` int(11) DEFAULT NULL,
  `cmnt` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `examiner_feedback`
--

INSERT INTO `examiner_feedback` (`fdbk_id`, `e_id`, `f_id`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`, `q11`, `q12`, `q13`, `q14`, `q15`, `q16`, `q17`, `q18`, `cmnt`) VALUES
(1, 'EX103', 'F101', 2, 4, 2, 5, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Eveniet eos in in '),
(2, 'EX103', 'F101', 1, 4, 5, 1, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Vel et quis et asper'),
(3, 'EX101', 'F101', 4, 1, 4, 4, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Facilis soluta rerum'),
(4, 'EX103', 'F101', 4, 4, 5, 5, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sequi vitae eu anim ');

-- --------------------------------------------------------

--
-- Table structure for table `exam_details`
--

CREATE TABLE `exam_details` (
  `e_id` varchar(10) NOT NULL,
  `e_name` varchar(30) NOT NULL,
  `r_id` varchar(5) NOT NULL,
  `f_id` varchar(5) NOT NULL,
  `e_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam_details`
--

INSERT INTO `exam_details` (`e_id`, `e_name`, `r_id`, `f_id`, `e_date`) VALUES
('EX101', '1INTERNALBCA', 'R101', 'F101', '2021-09-19'),
('EX102', '1INTERNALBCAR', 'R102', 'F105', '2021-09-02'),
('EX103', '2NDINTERNALLAB2', 'R110', 'F101', '2021-09-19');

-- --------------------------------------------------------

--
-- Table structure for table `facilities_feedback`
--

CREATE TABLE `facilities_feedback` (
  `fdbk_id` int(11) NOT NULL,
  `s_id` varchar(6) DEFAULT NULL,
  `q1` int(11) DEFAULT NULL,
  `q2` int(11) DEFAULT NULL,
  `q3` int(11) DEFAULT NULL,
  `q4` int(11) DEFAULT NULL,
  `q5` int(11) DEFAULT NULL,
  `q6` int(11) DEFAULT NULL,
  `q7` int(11) DEFAULT NULL,
  `q8` int(11) DEFAULT NULL,
  `q9` int(11) DEFAULT NULL,
  `q10` int(11) DEFAULT NULL,
  `q11` int(11) DEFAULT NULL,
  `q12` int(11) DEFAULT NULL,
  `q13` int(11) DEFAULT NULL,
  `q14` int(11) DEFAULT NULL,
  `q15` int(11) DEFAULT NULL,
  `q16` int(11) DEFAULT NULL,
  `q17` int(11) DEFAULT NULL,
  `cmnt` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `facilities_feedback`
--

INSERT INTO `facilities_feedback` (`fdbk_id`, `s_id`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`, `q11`, `q12`, `q13`, `q14`, `q15`, `q16`, `q17`, `cmnt`) VALUES
(1, 'S101', 2, 4, 2, 4, 2, 1, 4, 3, 5, 5, 1, 2, 5, 3, 1, 2, 5, 'Vel voluptatem aute'),
(2, 'S101', 1, 5, 3, 4, 2, 5, 1, 3, 5, 4, 3, 1, 2, 4, 1, 4, 5, 'Quod omnis delectus'),
(3, 'S101', 2, 1, 5, 3, 1, 3, 4, 1, 5, 1, 4, 4, 4, 5, 3, 1, 3, 'Culpa nisi eos cons');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_details`
--

CREATE TABLE `faculty_details` (
  `f_id` varchar(5) NOT NULL,
  `f_name` varchar(20) DEFAULT NULL,
  `d_id` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty_details`
--

INSERT INTO `faculty_details` (`f_id`, `f_name`, `d_id`) VALUES
('F101', 'Naveen Kumar', 'D101'),
('F105', 'Jayendra Prasad', 'D102');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_feedback`
--

CREATE TABLE `faculty_feedback` (
  `fdbk_id` int(11) NOT NULL,
  `f_id` varchar(5) DEFAULT NULL,
  `s_id` varchar(5) DEFAULT NULL,
  `f_name` varchar(30) DEFAULT NULL,
  `q1` int(11) DEFAULT NULL,
  `q2` int(11) DEFAULT NULL,
  `q3` int(11) DEFAULT NULL,
  `q4` int(11) DEFAULT NULL,
  `q5` int(11) DEFAULT NULL,
  `q6` int(11) DEFAULT NULL,
  `q7` int(11) DEFAULT NULL,
  `q8` int(11) DEFAULT NULL,
  `q9` int(11) DEFAULT NULL,
  `q10` int(11) DEFAULT NULL,
  `q11` int(11) DEFAULT NULL,
  `q12` int(11) DEFAULT NULL,
  `q13` int(11) DEFAULT NULL,
  `q14` int(11) DEFAULT NULL,
  `q15` int(11) DEFAULT NULL,
  `q16` int(11) DEFAULT NULL,
  `q17` int(11) DEFAULT NULL,
  `cmnt` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty_feedback`
--

INSERT INTO `faculty_feedback` (`fdbk_id`, `f_id`, `s_id`, `f_name`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`, `q11`, `q12`, `q13`, `q14`, `q15`, `q16`, `q17`, `cmnt`) VALUES
(1, 'F101', 'S101', 'Naveen Kumar', 5, 2, 3, 5, 3, 2, 3, 2, 3, 1, 5, 4, 4, 5, 5, 1, 3, 'Sit minus cupiditat'),
(2, 'F101', 'S101', 'Naveen Kumar', 4, 3, 3, 3, 4, 1, 3, 5, 1, 2, 3, 3, 4, 2, 4, 4, 1, 'Saepe aperiam evenie'),
(3, 'F101', 'S101', 'Naveen Kumar', 2, 1, 4, 4, 5, 3, 2, 1, 4, 5, 3, 3, 5, 3, 3, 1, 2, 'Consequat Eius offi'),
(4, 'F101', 'S101', 'Naveen Kumar', 4, 1, 1, 5, 3, 1, 3, 4, 5, 3, 1, 1, 3, 4, 4, 5, 4, 'Et nisi sed quo sequ'),
(5, 'F101', 'S101', 'Naveen Kumar', 4, 3, 3, 2, 4, 1, 4, 3, 3, 3, 5, 2, 3, 2, 5, 5, 4, 'Aut in vero sint de');

-- --------------------------------------------------------

--
-- Table structure for table `forms`
--

CREATE TABLE `forms` (
  `f_id` varchar(5) NOT NULL,
  `f_name` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forms`
--

INSERT INTO `forms` (`f_id`, `f_name`) VALUES
('FM101', 'studOnFac'),
('FM102', 'studOnFacilty'),
('FM103', 'employerOnStudents'),
('FM104', 'parentOnFacility'),
('FM105', 'alumniOnOverall'),
('FM106', 'facOnSubject'),
('FM107', 'studOnCourse'),
('FM108', 'event'),
('FM109', 'examinar'),
('FM110', 'courseExit');

-- --------------------------------------------------------

--
-- Table structure for table `parent_details`
--

CREATE TABLE `parent_details` (
  `usn` varchar(15) DEFAULT NULL,
  `mother_name` varchar(50) DEFAULT NULL,
  `mother_mob_no` varchar(15) DEFAULT NULL,
  `father_name` varchar(50) DEFAULT NULL,
  `father_mob_no` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parent_details`
--

INSERT INTO `parent_details` (`usn`, `mother_name`, `mother_mob_no`, `father_name`, `father_mob_no`) VALUES
('S101', 'Sumalatha', '9353891055', 'Rakesh', '9353865926'),
('S102', 'Renuka', '8956236598', 'Govind', '7856231598');

-- --------------------------------------------------------

--
-- Table structure for table `parent_feedback`
--

CREATE TABLE `parent_feedback` (
  `fdbk_id` int(11) NOT NULL,
  `s_id` varchar(6) DEFAULT NULL,
  `q1` int(11) DEFAULT NULL,
  `q2` int(11) DEFAULT NULL,
  `q3` int(11) DEFAULT NULL,
  `q4` int(11) DEFAULT NULL,
  `q5` int(11) DEFAULT NULL,
  `q6` int(11) DEFAULT NULL,
  `q7` int(11) DEFAULT NULL,
  `q8` int(11) DEFAULT NULL,
  `q9` int(11) DEFAULT NULL,
  `q10` int(11) DEFAULT NULL,
  `q11` int(11) DEFAULT NULL,
  `q12` int(11) DEFAULT NULL,
  `q13` int(11) DEFAULT NULL,
  `q14` int(11) DEFAULT NULL,
  `q15` int(11) DEFAULT NULL,
  `cmnt` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parent_feedback`
--

INSERT INTO `parent_feedback` (`fdbk_id`, `s_id`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`, `q11`, `q12`, `q13`, `q14`, `q15`, `cmnt`) VALUES
(1, 'S101', 5, 2, 2, 5, 1, 1, 2, 1, 3, 0, 0, 1, 1, 1, NULL, 'Autem quaerat quaera'),
(2, 'S101', 4, 3, 3, 4, 3, 1, 4, 3, 1, 1, 0, 1, 1, 1, NULL, 'Consequuntur sed adi');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `q_id` int(11) NOT NULL,
  `q_desc` varchar(200) DEFAULT NULL,
  `f_id` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`q_id`, `q_desc`, `f_id`) VALUES
(101, 'Sharath is agoo teacher yeah', 'FM101'),
(102, 'Aut modi et dolore q', 'FM101'),
(103, 'Sit cupidatat cillum', 'FM101'),
(104, 'Aliquid quo vel nequ', 'FM101'),
(105, 'Cumque repudiandae a', 'FM101'),
(106, 'Iusto et delectus v', 'FM101'),
(107, 'Irure saepe lorem si', 'FM101'),
(108, 'Consectetur deserun', 'FM101'),
(109, 'Quis est consequatur', 'FM101'),
(110, 'Voluptatibus molesti', 'FM101'),
(111, 'Porro vitae non elig', 'FM101'),
(112, 'In beatae nemo adipi', 'FM101'),
(113, 'Mollit dolor facilis', 'FM101'),
(114, 'Anim iste quibusdam ', 'FM101'),
(115, 'Do quis sed quia qui', 'FM101'),
(116, 'Laborum Eaque vitae', 'FM101'),
(117, 'Corporis nihil velit', 'FM101'),
(118, 'Vitae aute molestiae', 'FM101'),
(119, 'Dolorem in cupidatat', 'FM101'),
(120, 'Vel corrupti nisi r', 'FM101'),
(121, 'Elit corporis fuga', 'FM101'),
(122, 'Placeat sunt sunt s', 'FM101'),
(123, 'Et explicabo Sit ni', 'FM101'),
(124, 'Id ullamco rerum mai', 'FM101'),
(125, 'Nobis enim nisi exce', 'FM101'),
(126, 'Et sit ab magni aut', 'FM101'),
(127, 'The level of quittance of programme educationan', 'FM102'),
(128, 'The level of quittance of programme educational objectives', 'FM102'),
(129, 'jk', 'FM102'),
(130, 'The level of quittance of programme educational objectives', 'FM102'),
(131, 'The level of quittance of programme educational objectives', 'FM102'),
(132, 'Internet facilities are available in the department.', 'FM102'),
(133, 'Online educational resources are available and accessible.', 'FM102'),
(134, 'The office staff in the department are helpful.', 'FM102'),
(135, 'Results and attendance records are displayed on time', 'FM102'),
(136, 'Toilets/washrooms are hygienic and properly maintained.', 'FM102'),
(137, 'Clean drinking water is available in the department and in the campus.', 'FM102'),
(138, 'Grievances/problems are redressed/solved well in time.', 'FM102'),
(139, 'The functioning of the placement cell in the college/department is satisfactory.', 'FM102'),
(140, 'Equipment in the labs are in working condition.', 'FM102'),
(141, 'The buildings/classrooms are accessible to differently abled persons.', 'FM102'),
(142, 'The classrooms are clean and well maintained.', 'FM102'),
(143, 'Ambiance of the campus is conducive for Teaching & Learning ', 'FM102'),
(144, 'General communication skills', 'FM103'),
(145, 'Developing practical solutions to work place problems', 'FM103'),
(146, 'Working as part of a team', 'FM103'),
(147, 'Creative in response to workplace challenges', 'FM103'),
(148, 'Their planning and organization skills', 'FM103'),
(149, 'Self-motivated and taking an appropriate level of responsibility', 'FM103'),
(150, 'Open to new ideas and learning new techniques', 'FM103'),
(151, 'Using technology and workplace equipment', 'FM103'),
(152, 'Ability to contribute to the goal of the organization', 'FM103'),
(153, 'Technical knowledge/skill ', 'FM103'),
(154, 'Ability to manage/leadership qualities', 'FM103'),
(155, 'Innovativeness, creativity', 'FM103'),
(156, 'Relationship with seniors/peers/subordinates', 'FM103'),
(157, 'Involvement in social activities', 'FM103'),
(158, 'Obligation to work beyond schedule if required', 'FM103'),
(159, 'Hostel facilities', 'FM104'),
(160, 'Library facilities', 'FM104'),
(161, 'Transport facilities', 'FM104'),
(162, 'Medical facilities', 'FM104'),
(163, 'Internet facilities', 'FM104'),
(164, 'Canteen facilities', 'FM104'),
(165, 'Counselling & Guidance', 'FM104'),
(166, 'Ambiance and environment', 'FM104'),
(167, 'Extra Curricular activities', 'FM104'),
(168, 'In aut aliqua Nisi ', 'FM105'),
(169, 'Consequatur harum c', 'FM105'),
(170, 'Aut odio voluptate a', 'FM105'),
(171, 'Assumenda minus volu', 'FM105'),
(172, 'Necessitatibus nulla', 'FM105'),
(173, 'Excepturi reprehende', 'FM105'),
(174, 'Enim ipsam ea perspi', 'FM105'),
(175, 'Aliquid deserunt ut ', 'FM105'),
(176, 'Nulla reprehenderit', 'FM105'),
(177, 'Sunt eum dolore et ', 'FM105'),
(178, 'Ullam ratione in adi', 'FM105'),
(179, 'Vel et molestiae per', 'FM105'),
(180, 'Exercitationem assum', 'FM105'),
(181, 'Blanditiis perferend', 'FM105'),
(182, 'Nostrum quos optio ', 'FM105'),
(183, 'Duis soluta dolore d', 'FM105'),
(184, 'Sit neque est qui d', 'FM105'),
(185, 'Et sunt aut nisi re', 'FM105'),
(186, 'Commodi commodo quae', 'FM105'),
(187, 'Laborum Laboriosam', 'FM105'),
(188, 'Voluptas laboriosam', 'FM105'),
(189, 'Excepturi et rerum e', 'FM105'),
(190, 'Minima cupiditate se', 'FM105'),
(191, 'Repudiandae dolorem ', 'FM105'),
(192, 'Eligendi enim unde c', 'FM105'),
(193, 'Perferendis beatae m', 'FM105'),
(194, 'Non voluptates neque', 'FM105'),
(195, 'Incidunt ipsa ulla', 'FM105'),
(196, 'Voluptas et natus do', 'FM105'),
(197, 'Est officia omnis te', 'FM105'),
(198, 'Recusandae Aliqua ', 'FM105'),
(199, '', 'FM108'),
(200, 'Id velit est non el', 'FM108'),
(201, 'Aut ut ratione nobis', 'FM108'),
(202, 'Porro laborum expedi', 'FM108'),
(203, 'Expedita omnis aliqu', 'FM108'),
(204, 'Aspernatur error dol', 'FM108'),
(205, 'Magna quis ut conseq', 'FM108'),
(206, 'Assumenda fugit exp', 'FM108'),
(207, 'Sunt dolor irure dig', 'FM108'),
(208, 'Exercitation nulla e', 'FM108'),
(209, 'Nisi sequi optio al', 'FM108'),
(210, 'Culpa quod laborum s', 'FM108'),
(211, 'The question papers were provided on time', 'FM109'),
(212, 'There where no shortage of question papers', 'FM109'),
(213, 'The students were maintaining disciplne', 'FM109'),
(214, 'The classroom was well ventilated', 'FM109'),
(215, 'Covid protocols were followed', 'FM109'),
(216, 'Est voluptas est iq', 'FM110'),
(217, 'Rem nihil consequuntq', 'FM110'),
(218, 'Aute amet ut eum esq', 'FM110'),
(219, 'Molestiae eum ut odiq', 'FM110'),
(220, 'Asperiores voluptas q', 'FM110'),
(221, 'Dicta anim hic numquq', 'FM110');

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `s_id` varchar(6) NOT NULL,
  `s_name` varchar(20) DEFAULT NULL,
  `c_id` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`s_id`, `s_name`, `c_id`) VALUES
('S101', 'Sam Prakash', 'C101'),
('S102', 'Anil Samuel', 'C102'),
('S103', 'Ankitha Lokande', 'C103'),
('S104', 'Sam Kurivila', 'C104'),
('S108', 'Hilel Pace', 'C101'),
('S109', 'Ross Larson', 'C104'),
('S110', 'Sulekha Megham', 'C103'),
('S115', 'Cherokee Velasquez', 'C102');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `sub_id` varchar(5) DEFAULT NULL,
  `sub_name` varchar(20) DEFAULT NULL,
  `f_id` varchar(5) DEFAULT NULL,
  `c_id` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`sub_id`, `sub_name`, `f_id`, `c_id`) VALUES
('SB101', 'Python', 'F105', 'C103'),
('SB102', 'JAVA', 'F101', 'C101'),
('SB103', 'Machine Learning', 'F105', 'C103'),
('SB104', 'PHP', 'F101', 'C101');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` varchar(5) NOT NULL,
  `u_name` varchar(20) DEFAULT NULL,
  `u_pass` varchar(250) DEFAULT NULL,
  `doj` datetime DEFAULT NULL,
  `u_type` varchar(10) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `u_name`, `u_pass`, `doj`, `u_type`, `status`) VALUES
('101', 'Alwyn', '202cb962ac59075b964b07152d234b70', '2021-09-21 00:00:00', 'admin', 'active'),
('102', 'Abhishek', '202cb962ac59075b964b07152d234b70', '2014-09-21 00:00:00', 'admin', 'active'),
('103', 'Sharath', '202cb962ac59075b964b07152d234b70', '2014-09-21 00:00:00', 'admin', 'active'),
('104', 'Admin', '202cb962ac59075b964b07152d234b70', '2014-09-21 00:00:00', 'admin', 'active'),
('E101', 'Accenture', '81dc9bdb52d04dc20036dbd8313ed055', NULL, 'employer', 'active'),
('E102', 'Infosys', '81dc9bdb52d04dc20036dbd8313ed055', NULL, 'employer', 'active'),
('E103', 'Tech Mahindra', '81dc9bdb52d04dc20036dbd8313ed055', NULL, 'employer', 'active'),
('E110', 'Alps Mhd', '81dc9bdb52d04dc20036dbd8313ed055', '2021-09-19 00:00:00', 'employer', 'active'),
('E120', 'Cedric Yang', '202cb962ac59075b964b07152d234b70', '2021-09-19 00:00:00', 'employer', 'active'),
('F101', 'Naveen Kumar', '202cb962ac59075b964b07152d234b70', NULL, 'faculty', 'active'),
('F105', 'Jayendra Prasad', '202cb962ac59075b964b07152d234b70', '2021-09-16 00:00:00', 'faculty', 'active'),
('S101', 'Sam Prakash', '202cb962ac59075b964b07152d234b70', '2021-09-21 00:00:00', 'student', 'inactive'),
('S102', 'Anil Samuel', '202cb962ac59075b964b07152d234b70', '2021-09-16 00:00:00', 'student', NULL),
('S103', 'Ankitha Lokande', '202cb962ac59075b964b07152d234b70', '2021-09-16 00:00:00', 'student', NULL),
('S104', 'Sam Kurivila', '202cb962ac59075b964b07152d234b70', '2021-09-16 00:00:00', 'student', 'active'),
('S106', 'Shilpa Verma', '202cb962ac59075b964b07152d234b70', '2021-09-16 00:00:00', 'student', 'active'),
('S108', 'Hilel Pace', '202cb962ac59075b964b07152d234b70', '2021-09-16 00:00:00', 'student', 'active'),
('S109', 'Ross Larson', '202cb962ac59075b964b07152d234b70', '2021-09-16 00:00:00', 'student', 'active'),
('S110', 'Sulekha Megham', '202cb962ac59075b964b07152d234b70', '2021-09-16 00:00:00', 'student', 'active'),
('S115', 'Cherokee Velasquez', '202cb962ac59075b964b07152d234b70', '2021-09-16 00:00:00', 'student', 'active'),
('S120', 'Anchal purbah', '202cb962ac59075b964b07152d234b70', '2021-09-19 00:00:00', 'student', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_notifications`
--
ALTER TABLE `admin_notifications`
  ADD PRIMARY KEY (`n_id`);

--
-- Indexes for table `alumni_feedback`
--
ALTER TABLE `alumni_feedback`
  ADD PRIMARY KEY (`fdbk_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`c_id`),
  ADD KEY `d_id` (`d_id`);

--
-- Indexes for table `course_exit`
--
ALTER TABLE `course_exit`
  ADD PRIMARY KEY (`exit_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `employer_details`
--
ALTER TABLE `employer_details`
  ADD PRIMARY KEY (`e_id`),
  ADD KEY `e_name` (`e_name`);

--
-- Indexes for table `employer_feedback`
--
ALTER TABLE `employer_feedback`
  ADD PRIMARY KEY (`fdbk_id`),
  ADD KEY `fk_e_id` (`e_id`);

--
-- Indexes for table `examiner_feedback`
--
ALTER TABLE `examiner_feedback`
  ADD PRIMARY KEY (`fdbk_id`),
  ADD KEY `f_id` (`f_id`);

--
-- Indexes for table `exam_details`
--
ALTER TABLE `exam_details`
  ADD KEY `f_id` (`f_id`);

--
-- Indexes for table `facilities_feedback`
--
ALTER TABLE `facilities_feedback`
  ADD PRIMARY KEY (`fdbk_id`);

--
-- Indexes for table `faculty_details`
--
ALTER TABLE `faculty_details`
  ADD PRIMARY KEY (`f_id`),
  ADD KEY `f_id` (`f_id`),
  ADD KEY `faculty_ibfk_1` (`d_id`),
  ADD KEY `f_name` (`f_name`);

--
-- Indexes for table `faculty_feedback`
--
ALTER TABLE `faculty_feedback`
  ADD PRIMARY KEY (`fdbk_id`),
  ADD KEY `s_id` (`s_id`),
  ADD KEY `f_id` (`f_id`),
  ADD KEY `f_name` (`f_name`);

--
-- Indexes for table `forms`
--
ALTER TABLE `forms`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `parent_details`
--
ALTER TABLE `parent_details`
  ADD KEY `usn` (`usn`);

--
-- Indexes for table `parent_feedback`
--
ALTER TABLE `parent_feedback`
  ADD PRIMARY KEY (`fdbk_id`),
  ADD KEY `s_id` (`s_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`q_id`),
  ADD KEY `f_id` (`f_id`);

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`s_id`),
  ADD KEY `students_ibfk_1` (`c_id`),
  ADD KEY `s_name` (`s_name`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD KEY `subjects_ibfk_1` (`f_id`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`),
  ADD UNIQUE KEY `u_name` (`u_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_notifications`
--
ALTER TABLE `admin_notifications`
  MODIFY `n_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `alumni_feedback`
--
ALTER TABLE `alumni_feedback`
  MODIFY `fdbk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `course_exit`
--
ALTER TABLE `course_exit`
  MODIFY `exit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employer_feedback`
--
ALTER TABLE `employer_feedback`
  MODIFY `fdbk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `examiner_feedback`
--
ALTER TABLE `examiner_feedback`
  MODIFY `fdbk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `facilities_feedback`
--
ALTER TABLE `facilities_feedback`
  MODIFY `fdbk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `faculty_feedback`
--
ALTER TABLE `faculty_feedback`
  MODIFY `fdbk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `parent_feedback`
--
ALTER TABLE `parent_feedback`
  MODIFY `fdbk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`d_id`) REFERENCES `departments` (`d_id`);

--
-- Constraints for table `employer_details`
--
ALTER TABLE `employer_details`
  ADD CONSTRAINT `employer_details_ibfk_1` FOREIGN KEY (`e_id`) REFERENCES `users` (`u_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `employer_details_ibfk_2` FOREIGN KEY (`e_name`) REFERENCES `users` (`u_name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `employer_feedback`
--
ALTER TABLE `employer_feedback`
  ADD CONSTRAINT `fk_e_id` FOREIGN KEY (`e_id`) REFERENCES `employer_details` (`e_id`);

--
-- Constraints for table `examiner_feedback`
--
ALTER TABLE `examiner_feedback`
  ADD CONSTRAINT `examiner_feedback_ibfk_1` FOREIGN KEY (`f_id`) REFERENCES `faculty_details` (`f_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `exam_details`
--
ALTER TABLE `exam_details`
  ADD CONSTRAINT `exam_details_ibfk_1` FOREIGN KEY (`f_id`) REFERENCES `faculty_details` (`f_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `faculty_details`
--
ALTER TABLE `faculty_details`
  ADD CONSTRAINT `faculty_details_ibfk_1` FOREIGN KEY (`d_id`) REFERENCES `departments` (`d_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `faculty_details_ibfk_2` FOREIGN KEY (`f_id`) REFERENCES `users` (`u_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `faculty_details_ibfk_3` FOREIGN KEY (`f_name`) REFERENCES `users` (`u_name`);

--
-- Constraints for table `faculty_feedback`
--
ALTER TABLE `faculty_feedback`
  ADD CONSTRAINT `faculty_feedback_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `student_details` (`s_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `faculty_feedback_ibfk_2` FOREIGN KEY (`f_id`) REFERENCES `faculty_details` (`f_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `faculty_feedback_ibfk_3` FOREIGN KEY (`f_name`) REFERENCES `faculty_details` (`f_name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `parent_details`
--
ALTER TABLE `parent_details`
  ADD CONSTRAINT `parent_details_ibfk_1` FOREIGN KEY (`usn`) REFERENCES `student_details` (`s_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `parent_feedback`
--
ALTER TABLE `parent_feedback`
  ADD CONSTRAINT `parent_feedback_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `student_details` (`s_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `f_id` FOREIGN KEY (`f_id`) REFERENCES `forms` (`f_id`);

--
-- Constraints for table `student_details`
--
ALTER TABLE `student_details`
  ADD CONSTRAINT `student_details_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `courses` (`c_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_details_ibfk_2` FOREIGN KEY (`s_id`) REFERENCES `users` (`u_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_details_ibfk_3` FOREIGN KEY (`s_name`) REFERENCES `users` (`u_name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subjects`
--
ALTER TABLE `subjects`
  ADD CONSTRAINT `subjects_ibfk_1` FOREIGN KEY (`f_id`) REFERENCES `faculty_details` (`f_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `subjects_ibfk_2` FOREIGN KEY (`c_id`) REFERENCES `courses` (`c_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
