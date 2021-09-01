-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2021 at 12:20 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `erp_alvas`
--
CREATE DATABASE IF NOT EXISTS `erp_alvas` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `erp_alvas`;

-- --------------------------------------------------------

--
-- Table structure for table `faculty_details`
--

DROP TABLE IF EXISTS `faculty_details`;
CREATE TABLE `faculty_details` (
  `faculty_id` varchar(30) NOT NULL,
  `faculty_name` varchar(50) DEFAULT NULL,
  `faculty_desg` varchar(50) DEFAULT NULL,
  `faculty_dept` varchar(30) DEFAULT NULL,
  `faculty_qulfy` varchar(50) DEFAULT NULL,
  `faculty_yoj` varchar(10) DEFAULT NULL,
  `faculty_dob` varchar(15) DEFAULT NULL,
  `faculty_email` varchar(30) DEFAULT NULL,
  `faculty_contact` varchar(15) DEFAULT NULL,
  `faculty_parmenent_address` varchar(100) DEFAULT NULL,
  `faculty_present_address` varchar(100) DEFAULT NULL,
  `faculty_teaching_exp` varchar(20) DEFAULT NULL,
  `faculty_industry_exp` varchar(20) DEFAULT NULL,
  `faculty_aicte_id` varchar(40) DEFAULT NULL,
  `faculty_ug_dept` varchar(50) DEFAULT NULL,
  `faculty_ug_year` varchar(50) DEFAULT NULL,
  `faculty_ug_college` varchar(80) DEFAULT NULL,
  `faculty_pg_dept` varchar(50) DEFAULT NULL,
  `faculty_pg_year` varchar(50) DEFAULT NULL,
  `faculty_pg_college` varchar(80) DEFAULT NULL,
  `faculty_phd_reg` varchar(50) DEFAULT NULL,
  `faculty_phd_status` varchar(50) DEFAULT NULL,
  `faculty_phd_guide` varchar(50) DEFAULT NULL,
  `faculty_phd_topic` varchar(50) DEFAULT NULL,
  `faculty_phd_domain` varchar(50) DEFAULT NULL,
  `faculty_phd_center` varchar(50) DEFAULT NULL,
  `faculty_phd_yoj` varchar(15) DEFAULT NULL,
  `faculty_phd_complition` varchar(15) DEFAULT NULL,
  `faculty_sub_handel` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty_details`
--

INSERT INTO `faculty_details` (`faculty_id`, `faculty_name`, `faculty_desg`, `faculty_dept`, `faculty_qulfy`, `faculty_yoj`, `faculty_dob`, `faculty_email`, `faculty_contact`, `faculty_parmenent_address`, `faculty_present_address`, `faculty_teaching_exp`, `faculty_industry_exp`, `faculty_aicte_id`, `faculty_ug_dept`, `faculty_ug_year`, `faculty_ug_college`, `faculty_pg_dept`, `faculty_pg_year`, `faculty_pg_college`, `faculty_phd_reg`, `faculty_phd_status`, `faculty_phd_guide`, `faculty_phd_topic`, `faculty_phd_domain`, `faculty_phd_center`, `faculty_phd_yoj`, `faculty_phd_complition`, `faculty_sub_handel`) VALUES
('132', 'Abigail Morton', 'Ut esse id consequun', 'Tempore quia dolore', 'Ex dignissimos fuga', '1991', '1998-10-27', 'worizok@mailinator.com', '435', 'Qui voluptates et re', 'Ullam consequatur C', 'Possimus quis at vo', 'Dicta similique comm', 'Ex deleniti ad hic e', 'Nihil est proident', '1981', 'Rose Mcneil', 'Non architecto qui r', '1974', 'Jillian Lucas', '1995-01-08', 'Facere molestias ass', 'Jermaine Hopkins', 'Sed temporibus ex pa', 'Optio modi incididu', 'Eaque delectus volu', '1998', '1971', 'Ipsum velit expedita'),
('25', 'Nelle Clements', 'Culpa consectetur ', 'Computer Science and Eng.', 'In deserunt illo aut', '1985', '1987-12-05', 'saqel@mailinator.com', '224', 'Sit et odit maxime ', 'Ducimus ut quod off', 'Eum culpa nisi nihil', 'Nobis incididunt occ', 'Blanditiis amet dol', 'In hic eveniet obca', '1979', 'Wynter Stevenson', 'Dolorem facilis iure', '1978', 'Kasper Baker', '1993-10-11', 'Nulla nesciunt ea e', 'Ava Harper', 'Recusandae Veritati', 'Delectus officia at', 'Quis aliquid atque i', '1994', '1997', 'Maxime quae necessit'),
('33', 'Danielle Pruitt', 'Incidunt earum ipsa', 'Inforation Science and Eng.', 'Et velit quae cum ei', '1979', '2006-02-02', 'zywe@mailinator.com', '917', 'Aut ex itaque omnis ', 'Nemo dolor alias ani', 'Repellendus Officia', 'Soluta anim labore a', 'Sunt odit nulla sunt', 'Quisquam non at sed ', '1995', 'Kai Sheppard', 'Nulla autem dolores ', '1991', 'Medge Burch', '1992-10-20', 'Recusandae In vel e', 'Amir Owen', 'Ea totam hic et non ', 'Veniam voluptas fug', 'Enim aut quas harum ', '1979', '2001', 'Adipisci doloribus a'),
('565', 'Kiayada Wilkins', 'Mollit', 'Mechanical', 'Tempore', '1999', '2018-07-12', 'xagabaji@mailinator.com', '428', 'Nobis', 'Nostrum', 'Qui', 'Earum', 'Magna', 'Consequat', '2017', 'Holmes', 'Quaerat', '2016', 'Luke', '1992-01-15', 'Molestias', 'Ann', 'Tenetur', 'Expedita', 'Consequat', '1981', '1980', 'Et'),
('654', 'Nathan Daniels', 'Molestiae temporibus', 'Est earum assumenda ', 'Enim vel irure quia ', '1980', '1971-10-20', 'ruxyho@mailinator.com', '474', 'Et quod fugit amet', 'Ad expedita adipisic', 'Incidunt in consequ', 'Debitis eu sed aut a', 'Quia quaerat ad aute', 'Ullamco recusandae ', '1971', 'Arden Holmes', 'Omnis tenetur qui et', '1984', 'Wayne Buchanan', '2018-01-31', 'Aut mollit deleniti ', 'Keith Joseph', 'Odio ab veniam inci', 'Dolorum aliquam exer', 'Voluptatem accusant', '1997', '1996', 'Nesciunt anim eveni'),
('7877', 'Jaime Bass', 'Aut laborum Consequ', 'Civil Eng,', 'Eligendi odio molest', '1990', '2021-04-01', 'qazij@mailinator.com', '522', 'Vero sequi tempora v', 'Illo ex atque conseq', 'Animi eum dolore mo', 'Tempora veniam nesc', 'Ex eius odit ullamco', 'Nisi neque nostrud q', '2003', 'Britanney Davis', 'Ex distinctio Est ', '1989', 'Lenore York', '1978-02-03', 'Doloribus perferendi', 'Pamela Flowers', 'Esse voluptatibus mo', 'Eos ipsum ut quae r', 'Nam laborum eum et o', '1979', '2008', 'In impedit consecte');

-- --------------------------------------------------------

--
-- Table structure for table `parents_details`
--

DROP TABLE IF EXISTS `parents_details`;
CREATE TABLE `parents_details` (
  `adm_no` varchar(30) DEFAULT NULL,
  `usn` varchar(15) DEFAULT NULL,
  `mother_name` varchar(50) DEFAULT NULL,
  `mother_mob_no` varchar(15) DEFAULT NULL,
  `mother_email_id` varchar(40) DEFAULT NULL,
  `mother_aadhar` varchar(15) DEFAULT NULL,
  `mother_pan_card` varchar(30) DEFAULT NULL,
  `mother_occupation` varchar(50) DEFAULT NULL,
  `father_name` varchar(50) DEFAULT NULL,
  `father_mob_no` varchar(15) DEFAULT NULL,
  `father_email_id` varchar(40) DEFAULT NULL,
  `father_aadhar` varchar(15) DEFAULT NULL,
  `father_pan_cad` varchar(30) DEFAULT NULL,
  `father_occupation` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parents_details`
--

INSERT INTO `parents_details` (`adm_no`, `usn`, `mother_name`, `mother_mob_no`, `mother_email_id`, `mother_aadhar`, `mother_pan_card`, `mother_occupation`, `father_name`, `father_mob_no`, `father_email_id`, `father_aadhar`, `father_pan_cad`, `father_occupation`) VALUES
('784', 'Consequatur lab', 'Aphrodite Ryan', 'Molestiae error', 'zedypi@mailinator.com', 'Ipsam qui sint ', 'Quas sit irure aspe', 'Facilis autem praese', 'Sasha Valentine', 'Quas quod digni', 'suvobiwyl@mailinator.com', 'Nobis ut enim v', 'Vel accusantium arch', 'Fugiat qui non totam'),
('514', 'Nostrum aperiam', 'Sara Osborne', 'Id sed quasi et', 'sigug@mailinator.com', 'Veniam omnis do', 'Tempora qui placeat', 'Voluptatem sint occa', 'Gannon Anthony', 'Minim totam qua', 'faqar@mailinator.com', 'Voluptatibus ex', 'Proident eveniet n', 'Lorem incidunt quam'),
('112', '4AL18CS005', 'Abra Pitts', 'Qui itaque nemo', 'toqy@mailinator.com', 'Ut dolore quia ', 'Qui harum tempor nob', 'Rerum ratione except', 'Castor Grant', 'Et rem minima e', 'mybi@mailinator.com', 'Aliquid nostrum', 'Ipsam eos perferendi', 'Lorem irure impedit'),
('881', '4al18cs042', 'Graham Moses', 'Reprehenderit d', 'wyrilem@mailinator.com', 'Sit voluptatem ', 'Sed rem sed dolore r', 'Qui lorem cupidatat ', 'Damon Rocha', 'Sit qui amet in', 'mahe@mailinator.com', 'Fuga Ut volupta', 'Illum nesciunt omn', 'Id in magni nihil d'),
('608', '4al18cs046', 'Elliott Warren', 'Minima irure re', 'xemo@mailinator.com', 'Illum sapiente ', 'Ullam quia consequat', 'Lorem ut in nostrud ', 'Angela Klein', 'Similique sed f', 'sabeso@mailinator.com', 'Provident conse', 'Omnis cillum a quis ', 'Quam fuga Do quam f'),
('974', '4AL18CS014', 'Macey Doyle', 'Libero quis eli', 'tiporofi@mailinator.com', 'Vel et quae ita', 'Proident dolores qu', 'Assumenda libero quo', 'Dalton Larsen', 'Laborum Corpori', 'nigobalez@mailinator.com', 'Optio elit et i', 'Fugiat dicta dicta i', 'Officia facilis quis'),
('122', 'Minim deleniti ', 'Althea Walter', 'Omnis nemo exer', 'zumaqybuda@mailinator.com', 'Sed Nam illo re', 'Doloribus ipsum mol', 'Eos dolorum nobis di', 'Alisa Vasquez', 'Cupiditate exer', 'liluh@mailinator.com', 'Ipsam molestiae', 'Iusto voluptate volu', 'Enim duis ipsum imp');

-- --------------------------------------------------------

--
-- Table structure for table `puc_details`
--

DROP TABLE IF EXISTS `puc_details`;
CREATE TABLE `puc_details` (
  `adm_no` varchar(30) DEFAULT NULL,
  `puc_school` varchar(50) DEFAULT NULL,
  `puc_board_university` varchar(50) DEFAULT NULL,
  `puc_reg_no` varchar(30) DEFAULT NULL,
  `puc_year` varchar(10) DEFAULT NULL,
  `puc_max_marks` varchar(10) DEFAULT NULL,
  `puc_obtained_marks` varchar(10) DEFAULT NULL,
  `puc_percentage` varchar(10) DEFAULT NULL,
  `puc_phy_max_marks` varchar(10) DEFAULT NULL,
  `puc_phy_obtained_marks` varchar(10) DEFAULT NULL,
  `puc_maths_max_marks` varchar(10) DEFAULT NULL,
  `puc_maths_obtained_marks` varchar(10) DEFAULT NULL,
  `puc_che_max_marks` varchar(10) DEFAULT NULL,
  `puc_che_obtained_marks` varchar(10) DEFAULT NULL,
  `puc_elective_max_marks` varchar(10) DEFAULT NULL,
  `puc_elective_obtained_marks` varchar(10) DEFAULT NULL,
  `puc_sub_total_marks` varchar(10) DEFAULT NULL,
  `puc_eng_max_marks` varchar(10) NOT NULL,
  `puc_eng_obtained_marks` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `puc_details`
--

INSERT INTO `puc_details` (`adm_no`, `puc_school`, `puc_board_university`, `puc_reg_no`, `puc_year`, `puc_max_marks`, `puc_obtained_marks`, `puc_percentage`, `puc_phy_max_marks`, `puc_phy_obtained_marks`, `puc_maths_max_marks`, `puc_maths_obtained_marks`, `puc_che_max_marks`, `puc_che_obtained_marks`, `puc_elective_max_marks`, `puc_elective_obtained_marks`, `puc_sub_total_marks`, `puc_eng_max_marks`, `puc_eng_obtained_marks`) VALUES
('784', 'Autem et neque ut co', 'Consequatur Quod se', '181', '1998', 'Aute provi', 'Dolorum no', 'Qui aut au', 'Cupiditate', 'Anim occae', 'Ad dolor s', 'Omnis est ', 'Voluptate ', 'Non error ', 'Eu cupidat', 'Omnis ut c', '0', 'Sed in eni', 'Qui repreh'),
('514', 'Consequat Aliquid a', 'Lorem sed dolore et ', '761', '1989', 'Ad animi v', 'Voluptas a', 'Expedita n', 'Suscipit c', 'Commodi vo', 'Minima sun', 'Natus impe', 'Reprehende', 'Nostrud id', 'Omnis eum ', 'Quibusdam ', '0', 'Esse tempo', 'Sed id ani'),
('112', 'Sunt irure exercitat', 'Praesentium tempore', '996', '2018', 'Provident ', 'Culpa dolo', 'Commodi ma', 'Molestiae ', 'Mollitia c', 'Odit tempo', 'Consectetu', 'Duis elit ', 'Duis in la', 'Reiciendis', 'Incidunt d', '0', 'Anim et ne', 'Perspiciat'),
('881', 'Eius neque quisquam ', 'Nulla id adipisicing', '901', '2002', 'Ex aperiam', 'Voluptas n', 'Et omnis p', 'Libero odi', 'Fugit ipsu', 'Aut qui la', 'Quam cupid', 'Culpa dolo', 'Distinctio', 'Fugiat qui', 'Dolore eos', '0', 'Est corrup', 'Adipisci d'),
('608', 'Qui animi fugiat e', 'Quis aut labore face', '373', '1986', 'Rerum qui ', 'Omnis cum ', 'Eius enim ', 'Ea est off', 'Debitis qu', 'Lorem tene', 'Rem deseru', 'Aperiam qu', 'Culpa quia', 'Quis sunt ', 'Quis debit', '0', 'Alias vero', 'Ea dolorib'),
('974', 'Culpa esse ut cupi', 'Quia voluptatem libe', '340', '1994', 'In animi p', 'Anim velit', 'Nam corrup', 'Voluptas s', 'Tempor und', 'Consequatu', 'Incididunt', 'Consectetu', 'Officiis a', 'Fugiat nul', 'Iste tempo', '0', 'Veniam vol', 'Velit nequ'),
('122', 'Atque unde libero as', 'Quas dolorem ut enim', '880', '2004', 'Inventore ', 'Labore cup', 'Dolor nobi', 'Explicabo ', 'Vitae ipsu', 'Excepteur ', 'Exercitati', 'Cupiditate', 'Consequatu', 'Cupiditate', 'Beatae qui', '0', 'Excepteur ', 'Laborum do');

-- --------------------------------------------------------

--
-- Table structure for table `sslc_details`
--

DROP TABLE IF EXISTS `sslc_details`;
CREATE TABLE `sslc_details` (
  `adm_no` varchar(30) DEFAULT NULL,
  `sslc_school` varchar(50) DEFAULT NULL,
  `sslc_board_university` varchar(50) DEFAULT NULL,
  `sslc_reg_no` varchar(30) DEFAULT NULL,
  `sslc_year` varchar(10) DEFAULT NULL,
  `sslc_max_marks` varchar(10) DEFAULT NULL,
  `sslc_obtained_marks` varchar(10) DEFAULT NULL,
  `sslc_percentage` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sslc_details`
--

INSERT INTO `sslc_details` (`adm_no`, `sslc_school`, `sslc_board_university`, `sslc_reg_no`, `sslc_year`, `sslc_max_marks`, `sslc_obtained_marks`, `sslc_percentage`) VALUES
('784', 'Debitis dolore ea fu', 'Et in tempore ullam', '3', '1994', 'Vel repreh', 'Sit eum vo', 'Eiusmod au'),
('514', 'Voluptatum non offic', 'Sunt reprehenderit r', '402', '1980', 'Tenetur in', 'Qui porro ', 'Minima ist'),
('112', 'Ut quod saepe magni ', 'Non magni quo quasi ', '425', '2011', 'Ullamco no', 'Vero Nam u', 'Sit praese'),
('881', 'Excepturi maxime qui', 'Tempora soluta place', '657', '1994', 'Ipsa eiusm', 'Voluptas e', 'Aut soluta'),
('608', 'Minima similique eni', 'Veniam optio nesci', '537', '1980', 'Asperiores', 'Enim imped', 'Fugiat ali'),
('974', 'Maxime fuga Sed mol', 'Elit amet duis ea ', '610', '2003', 'Sint digni', 'Dolor faci', 'Fuga Accus'),
('122', 'Quod modi fugit qui', 'Voluptatem officia o', '124', '1977', 'Quia et ad', 'Maiores qu', 'Dolor et q');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE `students` (
  `adm_no` varchar(30) NOT NULL,
  `usn` varchar(15) DEFAULT NULL,
  `batch` varchar(30) DEFAULT NULL,
  `semester` varchar(30) NOT NULL,
  `section` varchar(30) NOT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `mname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `branch` varchar(50) DEFAULT NULL,
  `kcet` varchar(30) DEFAULT NULL,
  `comedk` varchar(30) DEFAULT NULL,
  `jee` varchar(30) DEFAULT NULL,
  `nationality` varchar(50) DEFAULT NULL,
  `data_of_admission` varchar(30) DEFAULT NULL,
  `dob` varchar(30) DEFAULT NULL,
  `place_of_birth` varchar(50) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `mob_no` varchar(15) DEFAULT NULL,
  `email_id` varchar(40) DEFAULT NULL,
  `aadhar` varchar(15) DEFAULT NULL,
  `pan_card` varchar(15) DEFAULT NULL,
  `sc_st` varchar(10) DEFAULT NULL,
  `caste` varchar(50) DEFAULT NULL,
  `annual_income` varchar(10) DEFAULT NULL,
  `present_state` varchar(50) DEFAULT NULL,
  `present_dist` varchar(50) DEFAULT NULL,
  `present_house_no_name` varchar(100) DEFAULT NULL,
  `present_post_village` varchar(50) DEFAULT NULL,
  `present_pincode` varchar(30) DEFAULT NULL,
  `permanent_state` varchar(50) DEFAULT NULL,
  `permanent_dist` varchar(50) DEFAULT NULL,
  `permanent_house_no_name` varchar(100) DEFAULT NULL,
  `permanent_post_village` varchar(50) DEFAULT NULL,
  `permanent_pin_code` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`adm_no`, `usn`, `batch`, `semester`, `section`, `fname`, `mname`, `lname`, `branch`, `kcet`, `comedk`, `jee`, `nationality`, `data_of_admission`, `dob`, `place_of_birth`, `gender`, `mob_no`, `email_id`, `aadhar`, `pan_card`, `sc_st`, `caste`, `annual_income`, `present_state`, `present_dist`, `present_house_no_name`, `present_post_village`, `present_pincode`, `permanent_state`, `permanent_dist`, `permanent_house_no_name`, `permanent_post_village`, `permanent_pin_code`) VALUES
('112', '4AL18CS005', '2018', '1', 'A', 'Arthur', 'Ignacia', 'Sullivan', 'Computer Science & Engg.', 'Dolor', 'Molestias', 'Velit', 'Sed', '2012-09-10', '1998-11-23', 'Quidem', 'female', '239', 'rivemoba@mailinator.com', '601', '394', 'Cillum', 'Qui', '194', 'In', 'Velit', 'Cecilia', 'Et', 'Et', 'Exercitation', 'Debitis', 'Denise', 'Et', 'Excepteur'),
('122', 'Minim deleniti ', 'Omnis dolor non accu', '', '', 'Aspen Bowen', 'Fay Rose', 'Buckley', '2', 'Dolorem voluptas dol', 'Tempore quis magnam', 'Sit id rerum nostru', 'Lorem minima nostrud', '2001-06-05', '1994-03-25', 'Eu commodo do dolore', 'male', '582', 'zujofygir@mailinator.com', '577', '555', 'Quam adipi', 'Proident ipsa dolo', '11', 'Eum non voluptas ess', 'Et qui ut aperiam sa', 'Isabelle Nelson', 'Velit facilis est ea', 'Cum optio autem odi', 'Consequatur et dele', 'Esse voluptas quod m', 'Cody Bailey', 'Maiores id sed duis', 'Possimus c'),
('514', 'Nostrum aperiam', '2018', '1', 'B', 'Louis Bruce', 'Pascale Clarke', 'Dickson', 'Computer Science & Engg.', 'Sapiente possimus e', 'Sunt excepturi possi', 'Voluptatem ea earum ', 'Saepe autem elit qu', '1991-05-27', '1999-07-17', 'Explicabo Pariatur', 'male', '720', 'jamakomom@mailinator.com', '646', '5', 'In autem s', 'Dolores architecto v', '840', 'Inventore consectetu', 'Quasi est dolore do', 'Silas Richmond', 'Ut aute in ullamco e', 'Tenetur consequatur ', 'Quaerat omnis asperi', 'Sunt quod voluptas o', 'Linus Jones', 'Ut sint est repelle', 'Ut sit eni'),
('608', '4al18cs046', '2018', '', 'A', 'Stephanie Riggs', 'Garth Blankenship', 'Patrick', '1', 'Voluptatum maiores m', 'Dolor excepturi minu', 'Aliquid laborum Lor', 'Corrupti ut molesti', '1979-11-17', '2009-05-06', 'Enim ea et eius maxi', 'female', '101', 'luvacu@mailinator.com', '181', '966', 'Culpa culp', 'Dolor commodi labori', '979', 'Sed minus enim velit', 'Sed in id id rerum ', 'Lucas Walters', 'Sed neque corrupti ', 'Quam animi error co', 'Harum vitae hic nihi', 'Minus quis cupiditat', 'Aurelia Wheeler', 'Dignissimos quam nis', 'Voluptatem'),
('784', 'Consequatur lab', '2018', '1', 'A', 'Patricia', 'Risa', 'Hess', 'Computer Science & Engg.', 'Asperiores', 'Autem', 'Voluptatem', 'Placeat', '1988-04-24', '2021-08-19', 'Cillum', 'not_to_say', '821', 'zalilaq@mailinator.com', '473', '453', 'Minim', 'Accusantium', '858', 'Eius', 'Ut', 'Melinda', 'Sint', 'Lorem', 'Velit', 'Modi', 'Tara', 'Eu', 'Optio'),
('881', '4al18cs042', '2018', '1', 'B', 'Cathleen Simon', 'Kaden Tate', 'Roberson', 'Computer Science & Engg.', 'Et voluptates magna ', 'Esse sit hic modi ex', 'Omnis sunt et nihil ', 'Non non cumque id pr', '1970-11-23', '1985-12-09', 'Ullamco quos veniam', 'female', '358', 'fyxys@mailinator.com', '637', '476', 'Repellendu', 'Sit sequi magni ex ', '517', 'Sunt rerum voluptate', 'Reiciendis unde cons', 'Micah Olsen', 'Duis rem quod nemo e', 'Natus doloribus cill', 'Adipisci suscipit an', 'Enim ducimus est d', 'Abigail Estes', 'Sunt dolor quia labo', 'Minima qui'),
('974', '4AL18CS014', '2018', '1', 'A', 'Bree Mendez', 'Jesse Barrett', 'Saunders', 'Computer Science & Engg.', 'Odit maxime magna ve', 'Ullamco consequatur', 'Doloribus recusandae', 'Deleniti consequatur', '2019-04-25', '1993-06-04', 'Voluptatibus vel cum', 'male', '380', 'cocot@mailinator.com', '600', '500', 'Similique ', 'Doloribus nulla lore', '23', 'Nisi non non sunt cu', 'Molestiae natus veli', 'Ora Horn', 'Nulla corrupti prae', 'Est dolores qui dol', 'Sunt consequatur et ', 'Assumenda aut ea vol', 'Jermaine Waller', 'Veniam aut cillum r', 'Deserunt a');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'prajwal', '$2y$10$Mw5C7POcMfdeZ44c69WiCOJwVswPwbGk9QY7drH8fZ1CD8zWjOTSu', '2021-08-02 15:13:30'),
(2, 'admin', '$2y$10$8G/dnvXTa/5skRB6oOC4oe5SNFSJYsjerZFssySf3dkw71jLsHuPy', '2021-08-02 15:14:16'),
(3, 'MaceyHernandez', '$2y$10$6hi156FOif1pz7J7Cup74.UbgY4RndZx8AzngG0FgV6DGRq7PEM06', '2021-08-03 15:05:11'),
(4, 'MaceyRhodes', '$2y$10$BS8Et1c/TBHr4NtErfiPp.zaMluh4e94RAqe2A/yeZAChFy6MhdIq', '2021-08-03 15:05:38'),
(6, 'Elliott1Norton', '$2y$10$k8HQVmAJDcHdNDSziYexue.5XiDlulyJSp7Ong.vbId/tJpOjq/k.', '2021-08-03 15:09:49'),
(7, 'chethan', '$2y$10$TZe1u4nkR.ixB1vMzH7I9evdlnc81EF/HOPM4hDCrfbW6DYAl21s.', '2021-08-16 17:25:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty_details`
--
ALTER TABLE `faculty_details`
  ADD PRIMARY KEY (`faculty_id`);

--
-- Indexes for table `parents_details`
--
ALTER TABLE `parents_details`
  ADD KEY `adm_no` (`adm_no`),
  ADD KEY `usn` (`usn`);

--
-- Indexes for table `puc_details`
--
ALTER TABLE `puc_details`
  ADD KEY `adm_no` (`adm_no`);

--
-- Indexes for table `sslc_details`
--
ALTER TABLE `sslc_details`
  ADD KEY `adm_no` (`adm_no`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`adm_no`),
  ADD UNIQUE KEY `usn` (`usn`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `parents_details`
--
ALTER TABLE `parents_details`
  ADD CONSTRAINT `parents_details_ibfk_1` FOREIGN KEY (`adm_no`) REFERENCES `students` (`adm_no`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `parents_details_ibfk_2` FOREIGN KEY (`usn`) REFERENCES `students` (`usn`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `parents_details_ibfk_3` FOREIGN KEY (`adm_no`) REFERENCES `students` (`adm_no`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `parents_details_ibfk_4` FOREIGN KEY (`adm_no`) REFERENCES `students` (`adm_no`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `parents_details_ibfk_5` FOREIGN KEY (`adm_no`) REFERENCES `students` (`adm_no`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `parents_details_ibfk_6` FOREIGN KEY (`adm_no`) REFERENCES `students` (`adm_no`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `parents_details_ibfk_7` FOREIGN KEY (`usn`) REFERENCES `students` (`usn`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `parents_details_ibfk_8` FOREIGN KEY (`usn`) REFERENCES `students` (`usn`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `puc_details`
--
ALTER TABLE `puc_details`
  ADD CONSTRAINT `puc_details_ibfk_1` FOREIGN KEY (`adm_no`) REFERENCES `students` (`adm_no`) ON DELETE CASCADE,
  ADD CONSTRAINT `puc_details_ibfk_2` FOREIGN KEY (`adm_no`) REFERENCES `students` (`adm_no`) ON DELETE CASCADE,
  ADD CONSTRAINT `puc_details_ibfk_3` FOREIGN KEY (`adm_no`) REFERENCES `students` (`adm_no`) ON DELETE CASCADE;

--
-- Constraints for table `sslc_details`
--
ALTER TABLE `sslc_details`
  ADD CONSTRAINT `sslc_details_ibfk_1` FOREIGN KEY (`adm_no`) REFERENCES `students` (`adm_no`) ON DELETE CASCADE,
  ADD CONSTRAINT `sslc_details_ibfk_2` FOREIGN KEY (`adm_no`) REFERENCES `students` (`adm_no`) ON DELETE CASCADE,
  ADD CONSTRAINT `sslc_details_ibfk_3` FOREIGN KEY (`adm_no`) REFERENCES `students` (`adm_no`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
