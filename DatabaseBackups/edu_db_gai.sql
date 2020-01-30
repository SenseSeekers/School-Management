-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2020 at 05:45 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edu_db_gai`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_edu_citizens`
--

CREATE TABLE `tb_edu_citizens` (
  `id` int(11) NOT NULL,
  `title` text CHARACTER SET utf8 NOT NULL,
  `image` varchar(255) NOT NULL,
  `content` text CHARACTER SET utf8 NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_edu_citizens`
--

INSERT INTO `tb_edu_citizens` (`id`, `title`, `image`, `content`, `created_at`) VALUES
(2, 'Computer science 111', 'gaiIMG_20191206_0001.jpg', ' ok ok ok 111', '2019-12-29 10:54:07'),
(4, 'citizen title', 'gaiIMG_20191212_0003.jpg', '<p>content content&nbsp;&nbsp;&nbsp;&nbsp;</p>', '2019-12-29 11:19:38'),
(5, 'test notice ', 'gaiIMG_20191212_0002.jpg', 'asdfsadf', '2019-12-29 12:12:34'),
(6, 'cat gears', 'gai66628005_1064458283943620_2340625372363620352_n.jpg', '     ', '2020-01-19 05:42:22'),
(8, 'Graphic Arts Institute1111', 'gai222.JPG', 'asdfadsf', '2019-12-29 12:13:19');

-- --------------------------------------------------------

--
-- Table structure for table `tb_edu_course`
--

CREATE TABLE `tb_edu_course` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `details` text CHARACTER SET utf8 NOT NULL,
  `cover_image` varchar(255) NOT NULL,
  `course_image` varchar(255) NOT NULL,
  `about_course` text CHARACTER SET utf8 NOT NULL,
  `apply_process` text CHARACTER SET utf8 NOT NULL,
  `curriculumn` text CHARACTER SET utf8 NOT NULL,
  `course_start` varchar(255) CHARACTER SET utf8 NOT NULL,
  `course_duration` varchar(255) CHARACTER SET utf8 NOT NULL,
  `total_semester` varchar(255) CHARACTER SET utf8 NOT NULL,
  `class_duration` varchar(255) CHARACTER SET utf8 NOT NULL,
  `shift` varchar(255) CHARACTER SET utf8 NOT NULL,
  `no_of_seat` varchar(255) CHARACTER SET utf8 NOT NULL,
  `faculty_member` varchar(255) CHARACTER SET utf8 NOT NULL,
  `success_level` varchar(255) CHARACTER SET utf8 NOT NULL,
  `version` varchar(255) CHARACTER SET utf8 NOT NULL,
  `semester_fee` varchar(255) CHARACTER SET utf8 NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_edu_course`
--

INSERT INTO `tb_edu_course` (`id`, `title`, `details`, `cover_image`, `course_image`, `about_course`, `apply_process`, `curriculumn`, `course_start`, `course_duration`, `total_semester`, `class_duration`, `shift`, `no_of_seat`, `faculty_member`, `success_level`, `version`, `semester_fee`, `status`, `created_at`) VALUES
(35, 'Class Six', 'In order to prepare potential and productive persons in industry, academia, as well as in government sector, in the undergraduate and postgraduate programs of the department of CSE of DUET, an excellent environment of teaching, learning, and research in computing and IT has been maintained from the very past. In particular, to perform world-class research in selected areas of computing (such as Speech Signal Processing, Advanced Microprocessor Architecture, Reliable and Low Power Multi-core Processor Design, Data Warehouse and Mining, Operating Systems, Wireless Network, Networking, Image Processing and Computer Vision, Artificial Intelligence and Neural Network, Algorithm Design and Analysis). The mission of the department is to earn reputation nationally and internationally for research in different areas. The faculty members are enriched in diversified fields and are involved in updated research work. To provide quality, cutting-edge educational experiences, the department aims to provide students with strong conceptual foundations, and also expose them to the forefront of the developments in the field of computing. The department?s other vision includes providing state-of-the-art computer education and training to all students at DUET to bring them to the level of knowledge and ability', 'gai', 'gaiclub.jpg', ' In order to prepare potential and productive persons in industry, academia, as well as in government sector, in the undergraduate and postgraduate programs of the department of CSE of DUET, an excellent environment of teaching, learning, and research in computing and IT has been maintained from the very past. In particular, to perform world-class research in selected areas of computing (such as Speech Signal Processing, Advanced Microprocessor Architecture, Reliable and Low Power Multi-core Processor Design, Data Warehouse and Mining, Operating Systems, Wireless Network, Networking, Image Processing and Computer Vision, Artificial Intelligence and Neural Network, Algorithm Design and Analysis). The mission of the department is to earn reputation nationally and internationally for research in different areas. The faculty members are enriched in diversified fields and are involved in updated research work. To provide quality, cutting-edge educational experiences, the department aims to provide students with strong conceptual foundations, and also expose them to the forefront of the developments in the field of computing. The department?s other vision includes providing state-of-the-art computer education and training to all students at DUET to bring them to the level of knowledge and ability.', 'ncludes providing state-of-the-art computer education and training to all students at DUET to bring them to the level of knowledge and ability', 'curriculum', '31/12/2019 18:14', '6 Month', '8', '8-12am', '2nd', '150', '150', 'n/a', '', '', 0, '2020-01-30 15:04:20'),
(42, 'Class Seven', ' In order to prepare potential and productive persons in industry, academia, as well as in government sector, in the undergraduate and postgraduate programs of the department of CSE of DUET, an excellent environment of teaching,In order to prepare potential and productive persons in industry, academia, as well as in government sector, in the undergraduate and postgraduate programs of the department of CSE of DUET, an excellent environment of teaching', '', 'gaicourse4.jpg', ' In order to prepare potential and productive persons in industry, academia, as well as in government sector, in the undergraduate and postgraduate programs of the department of CSE of DUET, an excellent environment of teaching,In order to prepare potential and productive persons in industry, academia, as well as in government sector, in the undergraduate and postgraduate programs of the department of CSE of DUET, an excellent environment of teaching,', ' In order to prepare potential and productive persons in industry, academia, as well as in government sector, in the undergraduate and postgraduate programs of the department of CSE of DUET, an excellent environment of teaching,In order to prepare potential and productive persons in industry, academia, as well as in government sector, in the undergraduate and postgraduate programs of the department of CSE of DUET, an excellent environment of teaching,', ' In order to prepare potential and productive persons in industry, academia, as well as in government sector, in the undergraduate and postgraduate programs of the department of CSE of DUET, an excellent environment of teaching,In order to prepare potential and productive persons in industry, academia, as well as in government sector, in the undergraduate and postgraduate programs of the department of CSE of DUET, an excellent environment of teaching,', '09/01/2020 19:27', '6 Month', '8', '8-12', '2nd', '150', '150', 'Higher', '', '', 0, '2020-01-30 15:12:05'),
(46, '  কম্পিউটার প্রযুক্তি', ' Department Details Department Details Department Details Department Details Department Details Department Details Department Details Department Details Department Details Department Details Department Details Department Details Department Details Department Details Department Details Department Details Department Details  Details Department Details  Details Department Details ', '', 'gaidesign.jpg', '									Department About   ', 'Apply process  ', 'Curriculum  ', '19/01/2020 11:45', '6', '8', '8-1', '2', '100', '14', 'hi', '', '', 0, '2020-01-30 15:16:06');

-- --------------------------------------------------------

--
-- Table structure for table `tb_edu_coverimg`
--

CREATE TABLE `tb_edu_coverimg` (
  `id` int(11) NOT NULL,
  `tech_img` varchar(255) NOT NULL,
  `teacher_img` varchar(255) NOT NULL,
  `student_img` varchar(255) NOT NULL,
  `notice_img` varchar(255) NOT NULL,
  `event_img` varchar(255) NOT NULL,
  `curri_img` varchar(255) NOT NULL,
  `site_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_edu_coverimg`
--

INSERT INTO `tb_edu_coverimg` (`id`, `tech_img`, `teacher_img`, `student_img`, `notice_img`, `event_img`, `curri_img`, `site_img`) VALUES
(1, 'gaigailogo1.png', 'gaitm-img-10.jpg', 'gailogoi.png', 'gaitm-img-13.jpg', 'gaitm-img-08-tn.jpg', 'gaivideo.jpg', 'gaiFB_IMG_1564828683331.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_edu_curriculum`
--

CREATE TABLE `tb_edu_curriculum` (
  `id` int(11) NOT NULL,
  `curri_id` int(11) NOT NULL,
  `curri_file` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_edu_curriculum`
--

INSERT INTO `tb_edu_curriculum` (`id`, `curri_id`, `curri_file`, `status`, `created_at`) VALUES
(8, 1, 'gaiIMG_20191212_0003.jpg', 0, '2019-12-27 11:21:17'),
(9, 30, 'gaiIMG_20191212_0006.jpg', 0, '2019-12-27 09:22:07'),
(10, 28, 'gaiid.PNG', 0, '2019-12-27 09:51:23'),
(11, 25, 'gaiIMG_20191207_0001.jpg', 0, '2019-12-27 11:19:24'),
(13, 25, 'gaibanner-home.png', 0, '2020-01-07 06:35:18'),
(14, 25, 'gaiJ59.gif', 0, '2020-01-07 06:35:28'),
(18, 26, 'gaidownload.jpg', 0, '2020-01-18 18:22:46');

-- --------------------------------------------------------

--
-- Table structure for table `tb_edu_curri_menu`
--

CREATE TABLE `tb_edu_curri_menu` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_edu_curri_menu`
--

INSERT INTO `tb_edu_curri_menu` (`id`, `name`, `status`, `created_at`) VALUES
(26, 'সিলেবাস', 0, '2020-01-18 18:16:38'),
(27, 'ডিজিটাল কনটেন্ট', 0, '2019-12-26 19:54:43'),
(28, 'ক্লাস রুটিন', 0, '2019-12-26 19:54:54'),
(29, 'পরীক্ষার রুটিন', 0, '2019-12-26 19:55:06'),
(30, 'ফলাফল', 0, '2019-12-26 19:55:17');

-- --------------------------------------------------------

--
-- Table structure for table `tb_edu_event`
--

CREATE TABLE `tb_edu_event` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `image` varchar(255) NOT NULL,
  `start_time` varchar(255) NOT NULL,
  `end_time` varchar(255) NOT NULL,
  `details` text CHARACTER SET utf8 NOT NULL,
  `venue` varchar(255) CHARACTER SET utf8 NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_edu_event`
--

INSERT INTO `tb_edu_event` (`id`, `title`, `image`, `start_time`, `end_time`, `details`, `venue`, `status`, `created_at`) VALUES
(34, 'গ্রাফিক আর্টস ইনস্টিটিউট', 'gaiFotolia_88471055_Subscription_Monthly_M.jpg', '20/12/2019 17:17', '20/12/2019 17:17', '																																													<h2 style=\"margin-top: 0px; margin-bottom: 10px; outline: 0px; font-family: NotoSansBengali; line-height: 40px; color: rgb(48, 48, 48); font-size: 32px;\"><span style=\"padding: 0px; margin: 0px; outline: 0px; color: rgb(28, 192, 236);\">গ্রাফিক আর্টস ইনস্টিটিউট</span></h2> 								 								 								 								 								 ', 'আর্টস ', 0, '2020-01-18 18:44:10'),
(37, 'গ্রাফিক আর্টস ইনস্টিটিউট', 'gaitm-img-05.jpg', '29/01/2020 00:39', '29/01/2020 00:39', '									0fdsf								 ', 'গ্রাফিক ', 0, '2020-01-30 14:50:50');

-- --------------------------------------------------------

--
-- Table structure for table `tb_edu_faculty`
--

CREATE TABLE `tb_edu_faculty` (
  `id` int(11) NOT NULL,
  `user_profile_id` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `facebook_link` varchar(255) NOT NULL,
  `principal` int(11) NOT NULL,
  `designation` varchar(255) CHARACTER SET utf8 NOT NULL,
  `department` varchar(255) CHARACTER SET utf8 NOT NULL,
  `about` text CHARACTER SET utf8 NOT NULL,
  `message` text CHARACTER SET utf8 NOT NULL,
  `experiences` varchar(255) NOT NULL,
  `educational_qualification` text CHARACTER SET utf8 NOT NULL,
  `hobby` text CHARACTER SET utf8 NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_edu_faculty`
--

INSERT INTO `tb_edu_faculty` (`id`, `user_profile_id`, `firstname`, `lastname`, `image`, `phone`, `email`, `type`, `facebook_link`, `principal`, `designation`, `department`, `about`, `message`, `experiences`, `educational_qualification`, `hobby`, `status`, `created_at`) VALUES
(27, '22', 'Masud11', 'Rana', 'gaiprincipal.PNG', '01750396004', 'mail@email.com', 'Instructor', '', 1, 'Jr. Instructor ', 'Computer Science', '<p>Since 1967, the institute approved a three years diploma (with six semesters) degree in printing technology, usually offers by the Technical Education Board. However the course is rearranged from the session (2001-2002) with four year diploma (eight semesters).</p><p>The institute is consisting of 18 Teachers (male 14 female 4) and academic staff 29 (male 22 female 7). At the moment it can absorb 400 students out of which 10% is preserved for the women and 5% for the tribal.</p>', '    Graphic Arts Institute only one Government Printing & Graphic Design Institute in Bangladesh which is established in the capital city of Dhaka in 1967, It provides us four years duration technical courses named Diploma- in- Engineering in printing. Mr. Azam Khan, Governor of the East Pakistan and Dr. Wakar Ahmed, Director General of the then Technical Education Directorate were the main initiators. Dr. RK Mollah was appointed as its founder principal of Graphic Arts Institute (1967-1972). He was sent to the South Dakota University of the USA for higher training on printing technology. Training was also given to other instructors of the institute at the Central Government Printing Press. The institute started with 25 seats.\r\n\r\nBut at present, this institute has over 1148 hundred students in two shift (Morning and Evening). There are three departments as Graphic design, Printing technology and Computer technology. Every  year about  400 students are admitted in this institute.\r\n\r\nAt present, the Graphic Arts Institute has become a complete media based institute, which is equipped with different types of printing devices and machineries like movable type, letter press, gallery type and Digital Camera, offset machine, gravure printing machine, screen printing machine (8 color),UV dryer, Glue binding machine, Folding Machine, Hydraulic cutting machine, CTP, Auto plate processor, litho film, panchromatic film etc. In order to cope with the other printing presses of the country as well as modern printing technology of the world, the computer graphic course has been incorporated with the new curriculum began from 1995-96 session. In the institute both the Apple Macintosh and IBM computers together with image setter, drum scanner, laser printer, inkjet printer etc are available.\r\n\r\nIt has technically experts\' teachers who are our confidence. It has one three storied building, one academic building, one auditorium, big size workshop, digital photography lab, screen printing lab, science lab, indoor game room, common room, rich library, reading room, design lab, DTP Lab etc. It has also own accommodation management in a silent zone.\r\n\r\nSince 1967, the institute approved a three years diploma (with six semesters) degree in printing technology, usually offers by the Technical Education Board. However the course is rearranged from the session (2001-2002) with four year diploma (eight semesters).\r\n\r\nThe institute is consisting of 18 Teachers (male 14 female 4) and academic staff 29 (male 22 female 7). At the moment it can absorb 400 students out of which 10% is preserved for the women and 5% for the tribal.', '3years', 'BSC Computer Science ', 'nothing ', 0, '2020-01-30 12:55:15'),
(28, '23', 'fahad ', 'hossain', 'gaimofakharul-islam.jpg', '', 'masudrana@mail.com', 'Instructor', '', 0, 'Jr. Instructor (TECH)', 'Graphic Design ', '', ' ', '', '', '', 0, '2020-01-24 18:45:55'),
(29, '24', 'Rana', 'Islam', 'gaiarif-rahman.jpg', '', 'fahad@mail.com', 'DepartmentalHead', '', 0, 'Jr. Instructor (TECH)', 'Printing', '', '  ', '', '', '', 0, '2020-01-19 06:06:36'),
(30, '25', 'Tanver ', 'Hossain', 'gaiteacher-details.jpg', '', 'tanver@email.com', 'DepartmentalHead', '', 0, 'Sr. Instructor ', 'Computer', '', ' ', '', '', '', 0, '2019-12-31 13:28:09'),
(31, '26', 'Masud', 'Rana', 'gaimasud.jpg', '01750396611', 'saiful@email.com', 'DepartmentalHead', 'www.facebook.com', 0, 'Jr. Instructor (TECH)', 'Computer', '', '  ', '', '', 'গ্রাফিক ', 0, '2020-01-19 06:13:11'),
(32, '61', '', '', '', '', 'masud4rana1@gmail.com', 'DepartmentalHead', '', 0, 'Programmer', 'Class Six', '', '', '', '', '', 0, '2020-01-24 18:48:47'),
(33, '62', '', '', '', '', 'masud4rana1@gmail.com', 'Instructor', '', 0, 'Programmer', 'Class Seven', '', '', '', '', '', 0, '2020-01-24 18:48:55'),
(34, '63', '', '', '', '', 'masud4rana1@gmail.com', 'Management', '', 0, 'Programmer', 'Class Seven', '', '', '', '', '', 0, '2020-01-24 18:49:05'),
(35, '64', '', '', '', '', 'arhabib111@gmail.com', 'Demonstrator', '', 0, 'Programmer', 'Class Seven', '', '', '', '', '', 0, '2020-01-24 18:49:12'),
(36, '65', '', '', '', '', 'masud4rana1@gmail.com', 'DepartmentalHead', '', 0, 'Programmer', 'Class Six', '', '', '', '', '', 0, '2020-01-24 18:49:19'),
(37, '66', '', '', '', '', 'masud4rana1@gmail.com', 'Demonstrator', '', 0, 'Programmer55', 'Class Six', '', '', '', '', '', 0, '2020-01-24 18:49:59'),
(38, '67', '', '', '', '', 'admin@mail.com', 'Administrator', '', 0, 'Programmer55', 'Class Six', '', '', '', '', '', 0, '2020-01-24 18:50:11');

-- --------------------------------------------------------

--
-- Table structure for table `tb_edu_gallery`
--

CREATE TABLE `tb_edu_gallery` (
  `id` int(11) NOT NULL,
  `caption` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_edu_gallery`
--

INSERT INTO `tb_edu_gallery` (`id`, `caption`, `image`, `type`, `content`, `status`, `created_at`) VALUES
(53, 'Caption 1', 'gaibanner2.png', 'Image', '', 0, '2020-01-20 19:29:59'),
(54, 'Caption 2', 'gairover.JPG', 'Image', '', 0, '2020-01-20 19:30:11'),
(55, 'Caption3', 'gairover.JPG', 'Image', '', 0, '2020-01-20 19:30:25'),
(56, 'Caption4', 'gaitm-img-13.jpg', 'Image', '', 0, '2020-01-20 19:31:30');

-- --------------------------------------------------------

--
-- Table structure for table `tb_edu_link`
--

CREATE TABLE `tb_edu_link` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `link` varchar(255) CHARACTER SET utf8 NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_edu_link`
--

INSERT INTO `tb_edu_link` (`id`, `title`, `link`, `status`, `created_at`) VALUES
(1, 'Bangladesh Technical Education Board', 'http://www.bteb.gov.bd/', 0, '2019-11-27 11:38:58'),
(2, 'Idea Bank', 'http://www.ideabank.gov.bd/', 0, '2019-12-19 09:20:20');

-- --------------------------------------------------------

--
-- Table structure for table `tb_edu_message`
--

CREATE TABLE `tb_edu_message` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `replay` text NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_edu_message`
--

INSERT INTO `tb_edu_message` (`id`, `name`, `email`, `subject`, `message`, `replay`, `status`, `created_at`) VALUES
(1, 'Masud Rana', 'baznayem@gmail.com', 'Subject', 'this is message box', '', 1, '2020-01-09 22:42:18'),
(2, '??????? ????? ??????????', 'masud4rana1@gmail.com', 'okk', 'sdfasdf', '', 1, '2020-01-19 07:08:16');

-- --------------------------------------------------------

--
-- Table structure for table `tb_edu_notice`
--

CREATE TABLE `tb_edu_notice` (
  `id` int(11) NOT NULL,
  `published_date` varchar(255) NOT NULL,
  `deadline_date` varchar(255) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `notice_tags` text CHARACTER SET utf8 NOT NULL,
  `notice_body` text CHARACTER SET utf8 NOT NULL,
  `notice_file` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_edu_notice`
--

INSERT INTO `tb_edu_notice` (`id`, `published_date`, `deadline_date`, `title`, `notice_tags`, `notice_body`, `notice_file`, `status`, `created_at`, `created_by`) VALUES
(26, '21/12/2019 16:44', '21/12/2019 16:44', 'Test Notice ', 'Notice', '										test Notice Content test notice content test notice content test notice content 									', 'gaidesign.jpg', 0, '2019-12-21 10:45:53', ''),
(27, '07/01/2020 15:02', '07/01/2020 15:02', 'Notice 2', 'computer', 'somethings&nbsp;', 'gaiCapture001.png', 0, '2020-01-07 23:03:31', ''),
(28, '07/01/2020 15:03', '07/01/2020 15:03', 'notice 3', 'class six', ' ', 'gaidownload.png', 0, '2020-01-07 23:04:05', ''),
(29, '07/01/2020 15:04', '07/01/2020 15:04', 'Final exam notice ', 'Design ', 'notice details', 'gai67176431_1064457373943711_6072828949019230208_n.jpg', 0, '2020-01-18 18:31:38', ''),
(30, '2020-01-14', '2020-01-15', 'Fail exam notice ', 'computer', '										notice body&nbsp;', 'gai66628005_1064458283943620_2340625372363620352_n.jpg', 0, '2020-01-18 18:30:27', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_edu_siteoption`
--

CREATE TABLE `tb_edu_siteoption` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `logo` varchar(255) NOT NULL,
  `about` text CHARACTER SET utf8 NOT NULL,
  `about_image` varchar(255) NOT NULL,
  `address` text CHARACTER SET utf8 NOT NULL,
  `map` text NOT NULL,
  `phone` varchar(255) NOT NULL,
  `online` varchar(255) NOT NULL,
  `hotline_phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `linkedln` varchar(255) NOT NULL,
  `copyright` varchar(255) NOT NULL,
  `portfolio_title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `portfolio_background` varchar(255) NOT NULL,
  `portfolio_content` text CHARACTER SET utf8 NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_by` int(11) NOT NULL,
  `visitors` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_edu_siteoption`
--

INSERT INTO `tb_edu_siteoption` (`id`, `title`, `name`, `logo`, `about`, `about_image`, `address`, `map`, `phone`, `online`, `hotline_phone`, `email`, `facebook`, `linkedln`, `copyright`, `portfolio_title`, `portfolio_background`, `portfolio_content`, `status`, `created_at`, `update_by`, `visitors`) VALUES
(1, 'Graphic Arts Institute ', 'গ্রাফিক আর্টস ইনস্টিটিউট', 'gaifooter-logo.png', '<h2 style=\"text-align: justify; \"><p style=\"margin-top: 20px; margin-bottom: 10px; outline: 0px; font-family: NotoSansBengali; font-size: 16px; color: rgb(96, 96, 96); letter-spacing: normal;\">আমার বাংলা নিয়ে প্রথম কাজ করবার সুযোগ তৈরি হয়েছিল অভ্র^ নামক এক যুগান্তকারী বাংলা সফ্‌টওয়্যার হাতে পাবার মধ্য দিয়ে। এর পর একে একে বাংলা উইকিপিডিয়া, ওয়ার্ডপ্রেস বাংলা কোডেক্সসহ বিভিন্ন বাংলা অনলাইন পত্রিকা তৈরির কাজ করতে করতে বাংলার সাথে নিজেকে বেঁধে নিয়েছি আষ্টেপৃষ্ঠে।</p><p style=\"margin-top: 20px; margin-bottom: 10px; outline: 0px; font-family: NotoSansBengali; font-size: 16px; color: rgb(96, 96, 96); letter-spacing: normal;\">সেই ডিযাইনকে কোডে রূপান্তর করবার সময় বারবার অনুভব করেছি কিছু নমুনা লেখার। যে লেখাগুলো ফটোশপে বসিয়ে বাংলায় ডিযাইন করা যাবে, আবার সেই লেখাই অনলাইনে ব্যবহার করা যাবে।<br></p></h2>									        									        									        									        									        									        ', 'gaiabout.png', 'Sat Mosjid Road, Mohammadpur, Dhaka-1207, Bangladesh', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.8422239473894!2d90.3624963144746!3d23.753005094594887!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755bf5a9024664d%3A0x50c2d4fb288ff156!2sGovernment%20Graphic%20Arts%20Institute!5e0!3m2!1sen!2sbd!4v1574789405252!5m2!1sen!2sbd\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>', '+88-02-911 38 96 00\r\n', '+880 179 836 660 57', '+880 179 836 660 57', 'Gai@mail.com', 'gaifacbook', 'gai Linkedln', 'copy right gai', 'কেন তুমি গ্রাফিক আর্টস বেছে নিবে?', 'gaigai-student-girl.png', '<div style=\"text-align: justify;\"><p style=\"margin-top: 20px; margin-bottom: 20px; outline: 0px; font-family: NotoSansBengali; font-size: 16px; letter-spacing: normal; text-align: left;\">আমার বাংলা নিয়ে প্রথম কাজ করবার সুযোগ তৈরি হয়েছিল অভ্র^ নামক এক যুগান্তকারী বাংলা সফ্‌টওয়্যার হাতে পাবার মধ্য দিয়ে। এর পর একে একে বাংলা উইকিপিডিয়া, ওয়ার্ডপ্রেস বাংলা কোডেক্সসহ বিভিন্ন বাংলা অনলাইন পত্রিকা তৈরির কাজ করতে করতে বাংলার সাথে নিজেকে বেঁধে নিয়েছি আষ্টেপৃষ্ঠে।</p><p class=\"choose-option\" style=\"margin-top: 20px; margin-bottom: 20px; outline: 0px; font-family: NotoSansBengali; font-size: 16px; letter-spacing: normal; text-align: left;\">সেই ডিযাইনকে কোডে রূপান্তর করবার সময় বারবার অনুভব করেছি কিছু নমুনা লেখার। যে লেখাগুলো ফটোশপে বসিয়ে বাংলায় ডিযাইন করা যাবে, আবার সেই লেখাই অনলাইনে ব্যবহার করা যাবে। কিন্তু দুঃখজনক হলেও সত্য যে, ইংরেজিতে লাতিন Lorem Ipsum… সূচক নমুনা লেখা (dummy texts) থাকলেও বাংলা ভাষায় এরকম কোনো লেখা নেই।<br></p></div>									        									        									        									        									        									        									        ', 0, '2020-01-24 18:09:19', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_edu_sliders`
--

CREATE TABLE `tb_edu_sliders` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_edu_sliders`
--

INSERT INTO `tb_edu_sliders` (`id`, `image`, `title`, `status`, `created_at`) VALUES
(8, 'gaifallout_new_vegas_wasteland_loner_road_hero_92839_1920x1080.jpg', 'আমার সোনার বাংলা - সোনা মিঞা কৈই ? - LOST', 1, '2020-01-30 14:33:44'),
(9, 'gaibanner2.png', 'Student', 1, '2020-01-30 14:35:05');

-- --------------------------------------------------------

--
-- Table structure for table `tb_edu_students`
--

CREATE TABLE `tb_edu_students` (
  `id` int(11) NOT NULL,
  `user_profile_id` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `trade` varchar(255) NOT NULL,
  `shift` varchar(255) NOT NULL,
  `session` varchar(255) NOT NULL,
  `board_roll` varchar(255) NOT NULL,
  `board_reg` varchar(255) NOT NULL,
  `full_name_eng` varchar(255) NOT NULL,
  `full_name_bang` varchar(255) CHARACTER SET utf8 NOT NULL,
  `image` varchar(255) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `blood_group` varchar(255) NOT NULL,
  `student_phone` varchar(255) NOT NULL,
  `student_email` varchar(255) NOT NULL,
  `present_address` text NOT NULL,
  `permanent_address` text NOT NULL,
  `guardian_name` varchar(255) NOT NULL,
  `guardian_relation` varchar(255) NOT NULL,
  `guardian_phone` varchar(255) NOT NULL,
  `guardian_nid` varchar(255) NOT NULL,
  `guardian_address` text NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_edu_students`
--

INSERT INTO `tb_edu_students` (`id`, `user_profile_id`, `type`, `trade`, `shift`, `session`, `board_roll`, `board_reg`, `full_name_eng`, `full_name_bang`, `image`, `religion`, `father_name`, `mother_name`, `dob`, `gender`, `blood_group`, `student_phone`, `student_email`, `present_address`, `permanent_address`, `guardian_name`, `guardian_relation`, `guardian_phone`, `guardian_nid`, `guardian_address`, `status`, `created_at`) VALUES
(21, '40', 'Student', 'Computer', '2nd Shif', '2017', '925728', '874331', 'Masud Rana', ' নাম বাংলায়', 'gai2.jpg', 'Muslim', 'Abdul Bareq', 'Mst Forida Akter', '2020-01-04', 'Male', 'A+', '01750396604', 'masud4rana1@gmail.com', 'dhaka mohammadpur ', 'Mymensingh', 'Islam', 'Brother', '3243423', '4234234234', '23423', 1, '2020-01-17 00:07:03'),
(25, '45', 'Student', 'Class Six', '1st Shift', '222', '3333', '4444', 'Masud Rana', 'MASUD', '', 'Muslim', 'Abdul Bareq', 'Mst Forida Akter', '2020-01-10', 'Male', 'A+', '0178989878', 'masud4rana1@gmail.com', 'koko', 'ko', 'Masud Rana', 'Brother', '01777', '05756', 'fs', 1, '2020-01-30 16:04:18'),
(26, '52', 'Student', 'Class Six', '1st Shift', '2019', '925728', '874330', 'MASUD RANA', 'মাসুদ রানা', '', 'Muslim', 'Abdul Bareq', 'Mst Forida Akter', '2020-01-10', 'Male', 'A+', '1', 'masud4rana1@gmail.com', 'DHAKA', 'MYMENSINGH', 'Islam ', 'Brothers', '010130123', '103912309123', 'dhaka', 1, '2020-01-30 16:04:49'),
(27, '68', 'Student', 'Class Six', '1st Shift', '2020', '10101', '1001', 'masud rana', ' মাসুদ রানা', '', 'Muslim', 'Abdul Bareq', 'Forida Akter', '2020-01-23', 'Male', 'A+', '01750396604', 'masud@gmail.com', 'dhaka', 'mymensing', 'islam', 'brother', '01752', '014751', 'dhaka', 1, '2020-01-30 15:48:19');

-- --------------------------------------------------------

--
-- Table structure for table `tb_edu_subscriber`
--

CREATE TABLE `tb_edu_subscriber` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_edu_user`
--

CREATE TABLE `tb_edu_user` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_edu_user`
--

INSERT INTO `tb_edu_user` (`id`, `user_id`, `password`, `user_type`, `status`, `created_at`) VALUES
(22, 'mail@email.com', '81dc9bdb52d04dc20036dbd8313ed055', 'DepartmentalHead', 1, '2020-01-16 06:03:09'),
(23, 'masudrana@mail.com', '202cb962ac59075b964b07152d234b70', 'DepartmentalHead', 1, '2020-01-10 08:15:03'),
(46, 'annmul@gmail.com', '6be4d88e6bdcc28a626ca1f66af3d00c', 'Administrator', 1, '2020-01-10 08:37:32'),
(47, 'masud4rana1@gmail.com', '8e197eacd89ceae654446c745e177bc2', 'DepartmentalHead', 0, '2020-01-12 08:01:47'),
(48, 'masud4rana11@gmail.com', 'c40d6d558152f0db8ad7947a9f7911d3', 'Instructor', 0, '2020-01-12 08:02:58'),
(49, 'baznayem@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Management', 1, '2020-01-16 07:37:27'),
(50, 'islam2311@live.com', '0220d381e5346eaee804ceeef0c139b0', 'Demonstrator', 0, '2020-01-12 08:03:36'),
(51, 'jack_nayem@yahoo.com', '4b882bb397b51c1e14bfa0fd27cf3d66', 'Administrator', 0, '2020-01-12 08:03:54'),
(52, '925728', '81dc9bdb52d04dc20036dbd8313ed055', 'Student', 1, '2020-01-16 18:56:01'),
(57, 'mail@mail.com', 'b2353e12c89bb7b27cdf21a2a4c65f56', 'Administrator', 0, '2020-01-16 22:38:47'),
(58, '22222', '202cb962ac59075b964b07152d234b70', 'Student', 1, '2020-01-17 00:06:01'),
(59, 'masud4rana1@gmail.com', '547e9f25b620e27809c20f253252d811', 'DepartmentalHead', 0, '2020-01-19 05:52:52'),
(60, 'masud4rana1@gmail.com', '2d8114318cab1e9567b90b823cda5d4f', 'DepartmentalHead', 0, '2020-01-19 05:54:48'),
(61, 'masud4rana1@gmail.com', '7d3cbad0b08fef7ee5b6cce41e2cc2c2', 'DepartmentalHead', 0, '2020-01-24 18:48:47'),
(62, 'masud4rana1@gmail.com', '41550defa5d9613d8993afae437a0dbc', 'Instructor', 0, '2020-01-24 18:48:55'),
(63, 'masud4rana1@gmail.com', '8fc1da77f3543900424500798538b7f6', 'Management', 0, '2020-01-24 18:49:05'),
(64, 'arhabib111@gmail.com', '78f16344a735ac7b6935d3ecb224a68d', 'Demonstrator', 0, '2020-01-24 18:49:12'),
(65, 'masud4rana1@gmail.com', '306fb354585d309743d98483acf80ef1', 'DepartmentalHead', 0, '2020-01-24 18:49:19'),
(66, 'masud4rana1@gmail.com', 'ce9e72872dda7358e5c2362549b2f103', 'Demonstrator', 0, '2020-01-24 18:49:59'),
(67, 'admin@mail.com', 'd3ed721ef657fb81c996aa2ad25ee83d', 'Administrator', 0, '2020-01-24 18:50:11'),
(68, '10101', '4bcf153ff9560758bca0a252086011d1', 'Student', 0, '2020-01-30 15:38:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_edu_citizens`
--
ALTER TABLE `tb_edu_citizens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_edu_course`
--
ALTER TABLE `tb_edu_course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_edu_coverimg`
--
ALTER TABLE `tb_edu_coverimg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_edu_curriculum`
--
ALTER TABLE `tb_edu_curriculum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_edu_curri_menu`
--
ALTER TABLE `tb_edu_curri_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_edu_event`
--
ALTER TABLE `tb_edu_event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_edu_faculty`
--
ALTER TABLE `tb_edu_faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_edu_gallery`
--
ALTER TABLE `tb_edu_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_edu_link`
--
ALTER TABLE `tb_edu_link`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_edu_message`
--
ALTER TABLE `tb_edu_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_edu_notice`
--
ALTER TABLE `tb_edu_notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_edu_siteoption`
--
ALTER TABLE `tb_edu_siteoption`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_edu_sliders`
--
ALTER TABLE `tb_edu_sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_edu_students`
--
ALTER TABLE `tb_edu_students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_edu_subscriber`
--
ALTER TABLE `tb_edu_subscriber`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_edu_user`
--
ALTER TABLE `tb_edu_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_edu_citizens`
--
ALTER TABLE `tb_edu_citizens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_edu_course`
--
ALTER TABLE `tb_edu_course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `tb_edu_coverimg`
--
ALTER TABLE `tb_edu_coverimg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_edu_curriculum`
--
ALTER TABLE `tb_edu_curriculum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tb_edu_curri_menu`
--
ALTER TABLE `tb_edu_curri_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tb_edu_event`
--
ALTER TABLE `tb_edu_event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tb_edu_faculty`
--
ALTER TABLE `tb_edu_faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tb_edu_gallery`
--
ALTER TABLE `tb_edu_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `tb_edu_link`
--
ALTER TABLE `tb_edu_link`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_edu_message`
--
ALTER TABLE `tb_edu_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_edu_notice`
--
ALTER TABLE `tb_edu_notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tb_edu_siteoption`
--
ALTER TABLE `tb_edu_siteoption`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_edu_sliders`
--
ALTER TABLE `tb_edu_sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_edu_students`
--
ALTER TABLE `tb_edu_students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tb_edu_subscriber`
--
ALTER TABLE `tb_edu_subscriber`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_edu_user`
--
ALTER TABLE `tb_edu_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
