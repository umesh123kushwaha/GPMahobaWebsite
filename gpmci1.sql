-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2021 at 01:30 PM
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
-- Database: `gpmci1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `image` int(11) NOT NULL,
  `utype` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`, `Name`, `image`, `utype`) VALUES
(1, 'umesh123', '$2y$10$wSa1KmSvuP9u6iPsTfEMwOtM.UiR0q9ah.TjTlYT7jQnwJBzD0Gmm', '0', 0, 5),
(2, 'admin123', '$2y$10$L/hlzplS/nMfTrK3MrgZvePU9s/Ff6YXwfkIHSTvdAZcEcYEVcKuO', 'Umesh Kumar', 0, 5);

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `author` int(11) NOT NULL,
  `title` text NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `category`, `image`, `description`, `author`, `title`, `status`, `created_at`, `updated_at`) VALUES
(1, 4, 'eaec70b7c7f49736e3da2666fbab4b29.jpg', 'This is article', 0, 'How to give Online Exam', 1, '2021-07-18 10:46:41', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `id` int(11) NOT NULL,
  `title` varchar(300) NOT NULL,
  `description` text NOT NULL,
  `branch` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `subject` int(11) NOT NULL,
  `file` varchar(200) NOT NULL,
  `uploaded_by` varchar(200) NOT NULL,
  `created_at` varchar(100) NOT NULL,
  `updated_at` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`id`, `title`, `description`, `branch`, `semester`, `subject`, `file`, `uploaded_by`, `created_at`, `updated_at`) VALUES
(1, 'Android Development Assignment', '', 1, 6, 1, 'umeshresult1.pdf', 'Saurbh Tiwari', '2021-07-04 04-21-38', '');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Fashion', '25a6467d38a25ecc28349353805c989b.jpg', 1, '2021-01-26 12:40:27', '2021-01-26 12:44:51'),
(3, 'Electrical Engineering', '', 1, '2021-07-04 04:24:12', '0000-00-00 00:00:00'),
(4, 'Information Technology', '7c56c975cf5cf2f16035e04677dd57cb.jpg', 1, '2021-07-18 10:39:18', '0000-00-00 00:00:00'),
(5, 'Computer Science and Engineering', '950ef3e8050c514ba3fd817c5a63bf0f.jpg', 1, '2021-07-18 10:40:20', '0000-00-00 00:00:00'),
(6, 'Electronics Enginnering', '59cec6004ec95429a992e611136e80be.jpg', 1, '2021-07-18 10:41:18', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `department_name` varchar(200) NOT NULL,
  `about` text NOT NULL,
  `department_pic` varchar(200) NOT NULL,
  `vision` text NOT NULL,
  `mission` text NOT NULL,
  `created_at` varchar(100) NOT NULL,
  `updated_at` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `department_name`, `about`, `department_pic`, `vision`, `mission`, `created_at`, `updated_at`) VALUES
(1, 'Information Technology', '<p><span style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; text-align: justify;\">The Department of Computer Science and Engineering was established in 1989 with intake of 30 students. The department is a member of the Computer Society of India (CSI) and ISTE. It offers a Three Year Diploma programme in Computer Science and Engineering with an annual intake of 60 students. The department has a Software Development Lab, Information System Lab, Computer Graphics Lab, UNIX and LINUX Lab, and a Database Management Lab. The unique feature of college is SUN Java Lab, which is not available in any other college of Polytechnic. The state-of-the-art laboratories are equipped with latest configuration hardware and software. Although, emphasis is given on use and promotion of open source software and systems, laboratories are also equipped with proprietary software such as Rational Software Architect, Rational Functional Tester and Rational Quality Manager (IBM). In the department, we have elite faculty members with excellent teaching experience. Our institute is affiliated to BTEUP, Lucknow and our curriculum has world class norms, in order to provide not only the informational but also to provide and knowledge to create wisdom in this field.</span><br></p>', 'it.jpg', '<p><span style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; text-align: justify;\">To achieve excellence in teaching and research in the area of Information Technology for generating professionals competent enough to become part of the industry and research organizations with a zeal to serve society.</span><br></p>', '<p><span style=\"color: rgb(33, 37, 41); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; text-align: justify;\">To create globally competent professionals with software computational knowledge/ability and contemporary skills. To promote excellence in teaching through research, creative thinking and problem solving skills. To impart expertise to the students for meaningful association with technical institutions and industry in computing and allied fields</span><br></p>', '2021-07-10_07-54', ''),
(2, 'Computer Science And Engineering', '', 'cs1.jpg', '', '', '2021-07-10_08-01', ''),
(3, 'Electrical Engineering', '', 'ee1.jpg', '', '', '2021-07-10_08-02', ''),
(4, 'Electronic Engineering', '', 'ec1.jpg', '', '', '2021-07-10_08-02', ''),
(5, 'Mechenical Engineering', '', 'me1.jpg', '', '', '2021-07-10_08-03', '');

-- --------------------------------------------------------

--
-- Table structure for table `department_slider_images`
--

CREATE TABLE `department_slider_images` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `slider_img` varchar(200) NOT NULL,
  `department_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department_slider_images`
--

INSERT INTO `department_slider_images` (`id`, `title`, `description`, `slider_img`, `department_id`) VALUES
(1, 'Lab II', '', '5588086lab25.jpg', 1),
(2, 'Lab III', '<p>This&nbsp; Description</p>', '344553lab3.jpg', 1),
(5, 'Lab I', '', '3249812lab1.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `enquiryid` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `emailid` varchar(100) NOT NULL,
  `MobNo` varchar(20) NOT NULL,
  `message` varchar(500) NOT NULL,
  `enquiry_dt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`enquiryid`, `name`, `emailid`, `MobNo`, `message`, `enquiry_dt`) VALUES
(1, 'Satyam Mishra', 'satyam@gmail.com', '765196447', 'Test message', '2020-07-03 11:45:26'),
(2, 'Ashu', 'ashu@gmail.com', '8181034747', 'I need to learn C', '2020-07-13 13:37:04'),
(3, 'Ashu', 'ashu@gmail.com', '8181034747', 'I need to learn C', '2020-07-13 13:37:13'),
(4, '', '', '', '', '2020-07-13 13:37:32');

-- --------------------------------------------------------

--
-- Table structure for table `gallary`
--

CREATE TABLE `gallary` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `created_at` varchar(100) NOT NULL,
  `updated_at` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallary`
--

INSERT INTO `gallary` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Deekshant Samaroh 2019', '6d132bf07f04934ac40583da7b35918b.jpg', '2021-07-09 01:02:01', ''),
(3, 'Deekshant Samaroh 2019', 'f7d0604122fda15cbbed672b5407cac8.jpg', '2021-07-09 01:02:46', ''),
(5, 'Deekshant Samaroh 2019', '274d3a4c1a0c1f28f1f410e53547795a.jpg', '2021-07-09 02:45:02', ''),
(6, 'Deekshant Samaroh 2019', 'ca32d757b1cccc4d93bb1fce74314804.jpg', '2021-07-09 03:14:05', ''),
(7, 'Deekshant Samaroh 2019', '4ca2dbd33942be588da73d12d0ef5dbb.jpg', '2021-07-09 03:14:21', '');

-- --------------------------------------------------------

--
-- Table structure for table `gpm_courses`
--

CREATE TABLE `gpm_courses` (
  `id` int(11) NOT NULL,
  `branch_name` varchar(200) NOT NULL,
  `branch_code` int(11) NOT NULL,
  `created_at` varchar(100) NOT NULL,
  `updated_at` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gpm_courses`
--

INSERT INTO `gpm_courses` (`id`, `branch_name`, `branch_code`, `created_at`, `updated_at`) VALUES
(1, 'Inforamation Technology', 356, '', ''),
(2, 'Computer Science And Engineering', 355, '', ''),
(3, 'Electrical Engineering', 328, '', ''),
(4, 'Electronics Engineering', 330, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `gpm_departments`
--

CREATE TABLE `gpm_departments` (
  `id` int(11) NOT NULL,
  `D_Name` varchar(200) NOT NULL,
  `D_Profile` longtext NOT NULL,
  `d_profile_pic` varchar(200) NOT NULL,
  `D_Vision` longtext NOT NULL,
  `D_Mission` longtext NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gpm_departments`
--

INSERT INTO `gpm_departments` (`id`, `D_Name`, `D_Profile`, `d_profile_pic`, `D_Vision`, `D_Mission`, `created_at`, `updated_at`) VALUES
(1, '1', 'The Department of Computer Science and Engineering was established in 1989 with intake of 30 students. The department is a member of the Computer Society of India (CSI) and ISTE. It offers a Three Year Diploma programme in Computer Science and Engineering with an annual intake of 60 students. The department has a Software Development Lab, Information System Lab, Computer Graphics Lab, UNIX and LINUX Lab, and a Database Management Lab. The unique feature of college is SUN Java Lab, which is not available in any other college of Polytechnic. The state-of-the-art laboratories are equipped with latest configuration hardware and software. Although, emphasis is given on use and promotion of open source software and systems, laboratories are also equipped with proprietary software such as Rational Software Architect, Rational Functional Tester and Rational Quality Manager (IBM). In the department, we have elite faculty members with excellent teaching experience. Our institute is affiliated to BTEUP, Lucknow and our curriculum has world class norms, in order to provide not only the informational but also to provide and knowledge to create wisdom in this field.', '', 'To achieve excellence in teaching and research in the area of Information Technology for generating professionals competent enough to become part of the industry and research organizations with a zeal to serve society.', 'To create globally competent professionals with software computational knowledge/ability and contemporary skills. To promote excellence in teaching through research, creative thinking and problem solving skills. To impart expertise to the students for meaningful association with technical institutions and industry in computing and allied fields', '2020-09-19', '2020-09-19'),
(2, '2', 'dfdfdtytyt', '', 'dfdfdtytyt', 'dfdfdtytyt', '2020-09-21', '2020-09-21'),
(3, '3', 'gfgfg', '', 'fgfgfg', 'gfgfg', '2020-09-21', '2020-09-21');

-- --------------------------------------------------------

--
-- Table structure for table `gpm_quiz`
--

CREATE TABLE `gpm_quiz` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(200) NOT NULL,
  `branch` int(11) NOT NULL,
  `semester` varchar(200) NOT NULL,
  `topic` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `duration` int(11) NOT NULL,
  `total_question` int(11) NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT '1',
  `created_at` varchar(1200) NOT NULL,
  `updated_at` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gpm_quiz`
--

INSERT INTO `gpm_quiz` (`id`, `title`, `description`, `image`, `branch`, `semester`, `topic`, `subject`, `duration`, `total_question`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Android Development Quiz', '                 			 	\r\n                 			 ', '207eb228c20408d1c6ee40d4bc59598a.jpg', 2, '6', 'Activity', '1', 10, 10, '1', '2021-07-02 02:47:10', ''),
(2, 'Cloud Computing MCQ', '                 			 	\r\n                 			 ', '', 1, '6', 'model', '3', 10, 10, '1', '2021-07-18 10:58:42', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `pass` varchar(300) NOT NULL,
  `utype` varchar(20) NOT NULL,
  `rid` int(11) NOT NULL,
  `usrname` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `pass`, `utype`, `rid`, `usrname`) VALUES
(9, '2b2eda8a913d9e6648dbf580df2d8849dd0991dc2c9eed4c46f0c3ba14ab2404b20c2940466fb074d0b060f722058aa13d7a35e968c5029e52d752ee57ff8903RgsRoRUDWRnOLXxVJUHwFgO2oJnJ5do=', '4', 13, 'santosh123'),
(10, '504648a26742be07feaa330830a5b999adbf2ae4d83e02a764904f6487131f852b6f5bbcf7c156d74f19240e2f45458997036449e5c4c2d0d5b22f01e12e23bbMFjFv1wech1RzoAwoAQhyrljid2NdQ==', '4', 14, 'yuvrajsingh'),
(11, '$2y$10$Qz8LWgL.79q79DrDUDxFeuSEZhyKdFdbG1I.jPYLOkWSbZc1UE0Ce', '2', 1, 'saurabh123gpm'),
(12, '$2y$10$QXoKPhHVY0Rdvac3Nr0mp.qhccu8GeDCWe9IPN/ncQqlaCReKnAJG', '2', 2, 'neeraj123gpm'),
(13, '$2y$10$3MAZ0IatmkZ68LHz4hgNoeyqq6x3hquyT.zZHCL6NpHzPgVZUxPfq', '1', 3, 'principal123'),
(14, 'b78685f05ff219f16f1ddeb14b872381c2f16d97927d095fb234ef802479cbbdb6a5fef1e9e8efc8f7692e7e89cdc2b7c7c78afc14a8b63d12de1dd3ccdfc7der0xXZWVF8uIWwWUHp+M+b5QkHTrnCskD', '4', 15, 'ravikant63860'),
(15, '$2y$10$CJhbq5Em.pq.TdkLvVJiFeGaGpH9cBH4KZQEVSB21jfdJZDnW1SYu', '2', 3, 'nitin123'),
(16, '$2y$10$.bXFDEIdpCHHFDu3jj0zy.jvCD4i.gllM2vVd8tPgx8aKKcBRzFya', '2', 4, 'pratul123');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `notificationid` int(11) NOT NULL,
  `message` varchar(500) NOT NULL,
  `notification_dt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`notificationid`, `message`, `notification_dt`) VALUES
(1, 'Tomorrow(11 July 2020) PHP class will be from 4:00 PM', '2020-07-10 13:44:33'),
(3, 'Exam of Java Programming is scheduled on 13th July from 9:00 AM', '2020-07-10 13:47:46'),
(4, 'Now you can find recipie of South Indian foods in this portal.', '2020-07-10 13:48:32'),
(5, 'Last date to attend test of C programming is 15th July 2020', '2020-07-10 14:06:54');

-- --------------------------------------------------------

--
-- Table structure for table `principal`
--

CREATE TABLE `principal` (
  `id` int(11) NOT NULL,
  `principal_name` varchar(200) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `qualification` varchar(200) NOT NULL,
  `principal_about` text NOT NULL,
  `principal_messages` text DEFAULT NULL,
  `mobno` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `principal_pic` text NOT NULL,
  `joining_date` varchar(100) NOT NULL,
  `leave_date` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` varchar(100) NOT NULL,
  `updated_at` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `principal`
--

INSERT INTO `principal` (`id`, `principal_name`, `gender`, `qualification`, `principal_about`, `principal_messages`, `mobno`, `email`, `principal_pic`, `joining_date`, `leave_date`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Shubhash Shukla', 'Male', 'Btech(Electrical Engineraing)', '', NULL, '8708072165', 'principal@gmail.com', '1b633e4721c2bdd4a95ecd27cd0927fc.jpg', '', '2021-06-24', 1, '2021-07-02 00:40:17', '');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `option_a` text NOT NULL,
  `option_b` text NOT NULL,
  `option_c` text NOT NULL,
  `option_d` text NOT NULL,
  `correct_ans` varchar(100) NOT NULL,
  `ans_description` text NOT NULL,
  `quiz_id` int(11) DEFAULT NULL,
  `question_no` int(11) NOT NULL,
  `created_at` varchar(200) NOT NULL,
  `updated_at` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `option_a`, `option_b`, `option_c`, `option_d`, `correct_ans`, `ans_description`, `quiz_id`, `question_no`, `created_at`, `updated_at`) VALUES
(1, 'Android is -', '&nbsp;an operating system', 'a web browser', 'a web server', 'None of the above', 'A', '<b>Answer:</b> (a) an operating system\r\nExplanation: Android is a software package and linux based operating system for mobile devices such as\r\ntablet computers and smartphones.&nbsp;                        \r\n                       ', 1, 1, '2021-07-03 16-41-04', ''),
(3, 'For which of the following Android is mainly developed?', 'Servers&nbsp;', 'Desktops', 'Laptops', '&nbsp;Mobile devices', 'D', '<p><b>Answe</b>r: (d) Mobile devices</p><p><b>\r\nExplanation:</b> Android is a software package and a Linux-based operating system specially designed for\r\ntouch-screen mobile devices like smartphones and tablets.                        \r\n                       </p>', 1, 3, '2021-07-03 17-15-35', ''),
(4, 'Under which of the following Android is licensed?', 'OSS', 'Source forge', 'Apache/MIT', 'None of the above', 'C', '<p><b>Answer</b>: (c) Apache/MIT</p><p><b>\r\nExplanation</b>: The Android platform was released under the Apache 2.0 license, and it is responsible for the\r\ncopyright of the Android Open-Source project. The Apache Foundation permits and grants licenses for\r\nsoftware uses and distribution by the copyright under the Android Open-Source Project.&nbsp;                        \r\n                       </p>', 1, 2, '2021-07-03 17-19-13', ''),
(5, 'Which of the following is the first mobile phone released that ran the Android OS?', 'HTC Hero', 'Google gPhone', 'T - Mobile G1', 'None of the above', 'C', '<p><b>Answer</b>: (c) T - Mobile G1\r\n</p><p><b>Explanation</b>: The first Android mobile was publicly released with Android 1.0 of the T-Mobile G1 (aka\r\nHTC Dream) in October 2008.&nbsp;                        \r\n                       </p>', 1, 4, '2021-07-04 03-27-37', ''),
(6, 'Which of the following virtual machine is used by the Android operating system?', 'JVM', 'Dalvik virtual machine', 'Simple virtual machine', 'None of the above', 'B', '<p><b>Answer</b>: (b) Dalvik virtual machine</p><p><b>\r\nExplanation</b>: The Dalvik Virtual Machine (DVM) is an android virtual machine optimized for mobile\r\ndevices. It optimizes the virtual machine for memory, battery life, and performance. Dalvik is a name of a\r\ntown in Iceland. The Dalvik VM was written by Dan Bornstein.                        \r\n                       </p>', 1, 5, '2021-07-04 03-29-26', ''),
(7, 'Android is based on which of the following language?', 'Java', 'C++', 'C', 'None of the above', 'A', '<p><b>Answer</b>: (a) Java</p><p><b>\r\nExplanation</b>: Java language is mainly used to write the android code even though other languages can be\r\nused                        \r\n                       </p>', 1, 6, '2021-07-04 03-31-39', ''),
(8, '&nbsp;APK stands for -', 'Android Phone Kit', 'Android Page Kit', 'Android Package Kit', '&nbsp;None of the above', 'C', '<p><b>Answer</b>: (c) Android Package Kit</p><p><b>\r\nExplanation</b>: An APK is a short form of the Android Package Kit. An APK file is the file format used to install\r\nthe applications on the android operating system.                        \r\n                       </p>                        \r\n                       ', 1, 7, '2021-07-04 03-33-35', ''),
(9, 'What does API stand for?', 'Application Programming Interface', 'Android Programming Interface', 'Android Page Interface', 'Application Page Interface', 'A', '<p><b>Answer</b>: (a) Application Programming Interface\r\n</p><p><b>Explanation</b>: API stands for application program interface. It is a set of routines, protocols, and tools for\r\nbuilding software and applications. It may be any type of system like a web-based system, operating system,\r\nor database system.                        \r\n                       </p>', 1, 8, '2021-07-04 03-38-51', ''),
(10, 'Which of the following converts Java byte code into Dalvik byte code?', 'Dalvik converter', 'Dex compiler', 'Mobile interpretive compiler (MIC)&nbsp;', 'None of the above', 'B', '<p><b>Answer</b>: (b) Dex compiler\r\n</p><p><b>Explanation</b>: The Dex compiler converts the class files into a .dex file that runs on the Dalvik VM. Multiple\r\nclass files are converted into one dex file.                        \r\n                       </p>', 1, 9, '2021-07-04 03-40-54', ''),
(11, 'How can we stop the services in android?', 'By using the stopSelf() and stopService() method', 'By using the finish() method', 'By using system.exit() method', 'None of the above&nbsp;', 'A', '<p><b>Answer</b>: (a) By using the stopSelf() and stopService() method\r\n</p><p><b>Explanation</b>: A service is started when a component (like activity) calls the startService() method; now, it\r\nruns in the background indefinitely. It is stopped by the stopService() method. The service can stop itself by\r\ncalling the stopSelf() method.                        \r\n                       </p>', 1, 10, '2021-07-04 03-42-37', '');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `doa` date DEFAULT NULL,
  `branch` varchar(200) NOT NULL,
  `quali` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mob` varchar(15) NOT NULL,
  `city` varchar(50) NOT NULL,
  `address` varchar(300) NOT NULL,
  `MyFileName` varchar(200) NOT NULL,
  `reg_dt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `gender`, `dob`, `doa`, `branch`, `quali`, `email`, `mob`, `city`, `address`, `MyFileName`, `reg_dt`) VALUES
(13, 'Santosh', 'Male', '', '2021-01-02', '356', 'BCA', 'Santosh993@yahoo.com', '08708072165', 'Jhansi', 'village-santpura post-sakrar tahsil-mau ranipur district-jhansi U.P', '', '2021-01-23 23:34:47'),
(14, 'Yuvraj', 'Male', '2000-02-03', '2018-07-01', '', 'Diploma(CS)', 'yuvraj@gmail.com', '6307025237', 'Chitrakoot', 'orai', 'Yuvraj_2552_usrimg.jpg', '2021-01-23 23:49:27'),
(15, 'RAVIKANT SHRIWAS', 'Male', '2000-06-20', '2018-07-01', '328', 'Diploma(CS)', 'ravikant63860shriwas@gmail.com', '6386031260', 'Jhansi', 'GOVT. POLYETECHNIC HOSTEL MAHOBA  Station Road, Sharafipura', 'RAVIKANT_SHRIWAS_1825_1560523principal.jpg', '2021-07-06 09:40:42');

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `id` int(11) NOT NULL,
  `semester_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`id`, `semester_name`) VALUES
(1, 'First Semester'),
(2, 'Second Semester'),
(3, 'Third Semester'),
(4, 'Fourth Semester'),
(5, 'Five Semester'),
(6, 'Six Semeter');

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

CREATE TABLE `staffs` (
  `id` int(11) NOT NULL,
  `staff_name` varchar(200) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `qualification` varchar(200) NOT NULL,
  `staff_about` text NOT NULL,
  `mobno` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `staff_pic` text NOT NULL,
  `joining_date` varchar(100) NOT NULL,
  `leave_date` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` varchar(100) NOT NULL,
  `updated_at` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staffs`
--

INSERT INTO `staffs` (`id`, `staff_name`, `gender`, `qualification`, `staff_about`, `mobno`, `email`, `staff_pic`, `joining_date`, `leave_date`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Saurbh Tiwari', 'Male', 'M.Tech', '', '7617813393', 'saurabh@gmail.com', '4de0d345b239264d44f9a18a3d7b8df1.jpeg', '2019-01-10', 'present', 1, '2021-07-02 00:15:58', ''),
(2, 'Neeraj Soni', 'Male', 'Btech', '', '6306017853', 'neeraj@gmail.com', 'ae9d44c6053012bff8273f4a7a6c537d.jpg', '2017-02-11', 'present', 1, '2021-07-02 00:17:53', ''),
(3, 'Nitin Verma', 'Male', 'M.Tech', '', '1234567890', 'nitin@gmail.com', '7ab9b2098b415ba2d81766a9075e409b.png', '2017-01-13', 'present', 1, '2021-07-09 22:06:31', ''),
(4, 'Pratul Gerg', 'Male', 'Btech', '', '6386084340', 'pratul@gmail.com', 'f31e47de082d3172af230f1fce5b17ea.png', '2015-03-01', 'present', 1, '2021-07-09 22:08:10', '');

-- --------------------------------------------------------

--
-- Table structure for table `staff_in_department`
--

CREATE TABLE `staff_in_department` (
  `id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `staff_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff_in_department`
--

INSERT INTO `staff_in_department` (`id`, `staff_id`, `department_id`, `staff_type`) VALUES
(1, 3, 1, 1),
(2, 2, 1, 3),
(3, 1, 1, 3),
(9, 4, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `staff_type`
--

CREATE TABLE `staff_type` (
  `id` int(11) NOT NULL,
  `staff_type` varchar(200) NOT NULL,
  `created_at` varchar(100) NOT NULL,
  `updated_at` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff_type`
--

INSERT INTO `staff_type` (`id`, `staff_type`, `created_at`, `updated_at`) VALUES
(1, 'hod', '', ''),
(2, 'lecturer', '', ''),
(3, 'guest faculty', '', ''),
(4, 'helper', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `student_leave`
--

CREATE TABLE `student_leave` (
  `id` int(11) NOT NULL,
  `leave_date` datetime NOT NULL,
  `leave_message` text NOT NULL,
  `student_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_leave`
--

INSERT INTO `student_leave` (`id`, `leave_date`, `leave_message`, `student_id`, `status`, `created_at`, `updated_at`) VALUES
(1, '2021-01-10 00:00:00', 'dfdfdf', 14, 0, '2021-01-24 09:04:33', '0000-00-00 00:00:00'),
(2, '2017-11-18 00:00:00', 'xfdfdfdfd', 13, 0, '2021-01-24 09:34:48', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `student_quiz_result`
--

CREATE TABLE `student_quiz_result` (
  `id` int(11) NOT NULL,
  `quiz_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `obtain_marks` int(11) NOT NULL,
  `total_marks` int(11) NOT NULL,
  `created_at` varchar(200) NOT NULL,
  `updated_at` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_quiz_result`
--

INSERT INTO `student_quiz_result` (`id`, `quiz_id`, `user_id`, `obtain_marks`, `total_marks`, `created_at`, `updated_at`) VALUES
(1, 1, 13, 6, 10, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `subject_name` varchar(200) NOT NULL,
  `created_at` varchar(100) NOT NULL,
  `updated_at` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `subject_name`, `created_at`, `updated_at`) VALUES
(1, 'Android Development', '', ''),
(2, 'Cloud Computing', '', ''),
(3, 'Advance Java', '', ''),
(4, 'IMED', '', ''),
(5, 'Computer Programming Using Python', '', ''),
(6, 'Web Development Using PHP', '', ''),
(7, 'Software Engineering', '', ''),
(8, 'Internet Of Things', '', ''),
(9, 'Object Oriented Programming Using Java', '', ''),
(10, 'DBMS', '', ''),
(11, 'Applied Physic-I', '', ''),
(12, 'Multimedia And Animation', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `subjects_in_courses`
--

CREATE TABLE `subjects_in_courses` (
  `id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `created_at` varchar(100) NOT NULL,
  `updated_at` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subjects_in_courses`
--

INSERT INTO `subjects_in_courses` (`id`, `subject_id`, `course_id`, `semester`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 6, '', ''),
(2, 1, 2, 6, '', ''),
(3, 2, 1, 6, '', ''),
(4, 2, 2, 6, '', ''),
(5, 3, 1, 6, '', ''),
(6, 3, 2, 6, '', ''),
(7, 4, 1, 6, '', ''),
(8, 4, 2, 6, '', ''),
(9, 5, 1, 5, '', ''),
(10, 5, 2, 5, '', ''),
(11, 6, 1, 5, '', ''),
(12, 6, 2, 5, '', ''),
(13, 7, 1, 5, '', ''),
(14, 7, 2, 5, '', ''),
(15, 8, 1, 5, '', ''),
(16, 8, 2, 5, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `userans`
--

CREATE TABLE `userans` (
  `id` int(11) NOT NULL,
  `quiz_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `question_no` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_ans` varchar(5) NOT NULL,
  `created_at` varchar(100) NOT NULL,
  `updated_at` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userans`
--

INSERT INTO `userans` (`id`, `quiz_id`, `question_id`, `question_no`, `user_id`, `user_ans`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 0, 13, 'A', '2021-07-04 06-33-08', '2021-07-09 06-05-50'),
(2, 1, 4, 0, 13, 'C', '2021-07-04 06-33-57', '2021-07-09 06-06-14'),
(3, 1, 3, 0, 13, 'D', '2021-07-04 06-34-02', '2021-07-09 06-06-18'),
(4, 1, 5, 0, 13, 'B', '2021-07-04 06-34-10', '2021-07-09 06-06-25'),
(5, 1, 6, 0, 13, 'B', '2021-07-04 06-34-17', '2021-07-09 06-06-29'),
(6, 1, 7, 0, 13, 'B', '2021-07-04 06-34-23', '2021-07-09 06-06-31'),
(7, 1, 8, 0, 13, 'C', '2021-07-04 06-35-37', '2021-07-09 06-06-33'),
(8, 1, 9, 0, 13, 'A', '2021-07-04 06-35-52', '2021-07-09 06-06-36'),
(9, 1, 10, 0, 13, 'D', '2021-07-04 06-36-00', '2021-07-09 06-06-40'),
(10, 1, 11, 10, 13, 'C', '2021-07-04 08-19-09', '2021-07-09 06-06-48');

-- --------------------------------------------------------

--
-- Table structure for table `userfeedback`
--

CREATE TABLE `userfeedback` (
  `feedback_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `topic` varchar(200) NOT NULL,
  `message` varchar(500) NOT NULL,
  `feedbact_dt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userfeedback`
--

INSERT INTO `userfeedback` (`feedback_id`, `user_id`, `topic`, `message`, `feedbact_dt`) VALUES
(1, 11, 'Regarding my appointment', 'question number 5 is incorrect.', '2020-07-07 11:27:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department_slider_images`
--
ALTER TABLE `department_slider_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`enquiryid`);

--
-- Indexes for table `gallary`
--
ALTER TABLE `gallary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gpm_courses`
--
ALTER TABLE `gpm_courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gpm_departments`
--
ALTER TABLE `gpm_departments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `adminzone_departmentprofile_D_Name_id_fa833da3` (`D_Name`);

--
-- Indexes for table `gpm_quiz`
--
ALTER TABLE `gpm_quiz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`notificationid`);

--
-- Indexes for table `principal`
--
ALTER TABLE `principal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staffs`
--
ALTER TABLE `staffs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_in_department`
--
ALTER TABLE `staff_in_department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_type`
--
ALTER TABLE `staff_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_leave`
--
ALTER TABLE `student_leave`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_quiz_result`
--
ALTER TABLE `student_quiz_result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects_in_courses`
--
ALTER TABLE `subjects_in_courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userans`
--
ALTER TABLE `userans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userfeedback`
--
ALTER TABLE `userfeedback`
  ADD PRIMARY KEY (`feedback_id`),
  ADD KEY `FK_Feedback_Registration` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `department_slider_images`
--
ALTER TABLE `department_slider_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `enquiryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gallary`
--
ALTER TABLE `gallary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `gpm_courses`
--
ALTER TABLE `gpm_courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gpm_departments`
--
ALTER TABLE `gpm_departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gpm_quiz`
--
ALTER TABLE `gpm_quiz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `notificationid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `principal`
--
ALTER TABLE `principal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `staffs`
--
ALTER TABLE `staffs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `staff_in_department`
--
ALTER TABLE `staff_in_department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `staff_type`
--
ALTER TABLE `staff_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student_leave`
--
ALTER TABLE `student_leave`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student_quiz_result`
--
ALTER TABLE `student_quiz_result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `subjects_in_courses`
--
ALTER TABLE `subjects_in_courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `userans`
--
ALTER TABLE `userans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `userfeedback`
--
ALTER TABLE `userfeedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
