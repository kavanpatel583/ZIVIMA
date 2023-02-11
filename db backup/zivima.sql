-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2019 at 05:33 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zivima`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_complain`
--

CREATE TABLE `tbl_complain` (
  `complain_id` int(11) NOT NULL,
  `complain_text` text,
  `complain_description` text,
  `complain_image` text,
  `complain_latitude` decimal(10,0) DEFAULT NULL,
  `complain_longitude` decimal(10,0) DEFAULT NULL,
  `complain_address` text,
  `complain_status` varchar(8) DEFAULT 'pending',
  `complain_added_datetime` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `district_id` int(11) DEFAULT NULL,
  `complain_priority` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_complain`
--

INSERT INTO `tbl_complain` (`complain_id`, `complain_text`, `complain_description`, `complain_image`, `complain_latitude`, `complain_longitude`, `complain_address`, `complain_status`, `complain_added_datetime`, `user_id`, `district_id`, `complain_priority`) VALUES
(1, 'No Transportaion', 'There is no any transportation facility is provided in our area', 'PC_20190427033026.jpg', NULL, NULL, 'Surat', 'pending', '2019-04-23 00:00:00', 1, 12, 'high');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_complete_work`
--

CREATE TABLE `tbl_complete_work` (
  `comp_work_id` int(11) NOT NULL,
  `comp_work_description` text NOT NULL,
  `comp_work_status` text NOT NULL,
  `comp_work_image` text NOT NULL,
  `comp_work_datetime` datetime NOT NULL,
  `complain_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_district`
--

CREATE TABLE `tbl_district` (
  `district_id` int(11) NOT NULL,
  `district_name` text NOT NULL,
  `state_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_district`
--

INSERT INTO `tbl_district` (`district_id`, `district_name`, `state_id`) VALUES
(13, 'Ahmedabad', 12),
(15, 'Bharuch', 12),
(16, 'Gandhinagar', 12),
(17, 'Surat', 12),
(18, 'Mumbai', 13),
(19, 'Pune', 13),
(20, 'Dehradun', 19),
(21, 'Chennai', 20),
(22, 'Coimbatore', 20),
(23, 'Kolhapur', 13);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_district_collector`
--

CREATE TABLE `tbl_district_collector` (
  `district_collector_id` int(11) NOT NULL,
  `state_admin_id` int(11) NOT NULL,
  `district_id` int(11) NOT NULL,
  `district_collector_name` text NOT NULL,
  `district_collector_uname` text NOT NULL,
  `district_collector_pwd` text NOT NULL,
  `district_collector_contact` bigint(20) NOT NULL,
  `district_collector_isactive` varchar(4) NOT NULL DEFAULT 'yes'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_district_collector`
--

INSERT INTO `tbl_district_collector` (`district_collector_id`, `state_admin_id`, `district_id`, `district_collector_name`, `district_collector_uname`, `district_collector_pwd`, `district_collector_contact`, `district_collector_isactive`) VALUES
(7, 19, 17, 'Harsh Sanghvi', 'hs', '123', 7894561230, 'yes'),
(13, 19, 13, 'B Radhakrishnan', 'br', '123', 9632587410, 'yes'),
(14, 19, 14, 'Sh. H Dineshan', 'hd', '123', 9874563210, 'yes'),
(15, 22, 16, 'Shri Dilip Kumar Rana', 'dkr  ', '123', 8523697410, 'yes'),
(16, 23, 18, 'Amod Dwarke', 'ad', '123', 7458963213, 'yes'),
(17, 28, 20, 'Satish Kaushal', 'skd', '123', 9632587410, 'yes'),
(18, 29, 21, 'Ramkrishnan Swami', 'ram', '123', 8956231471, 'yes'),
(19, 23, 19, 'mahesh manajrekar', 'mahesh', '123', 9865898569, 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_event`
--

CREATE TABLE `tbl_event` (
  `event_id` int(11) NOT NULL,
  `event_title` text NOT NULL,
  `event_description` text NOT NULL,
  `event_datetime` datetime NOT NULL,
  `event_venue` text NOT NULL,
  `event_advantages` text NOT NULL,
  `event_landmark` text NOT NULL,
  `event_pincode` int(11) NOT NULL,
  `event_main_feature` text NOT NULL,
  `event_isactive` varchar(4) DEFAULT 'yes',
  `event_isapproved` varchar(4) NOT NULL DEFAULT 'no',
  `event_added_datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `state_admin_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_event`
--

INSERT INTO `tbl_event` (`event_id`, `event_title`, `event_description`, `event_datetime`, `event_venue`, `event_advantages`, `event_landmark`, `event_pincode`, `event_main_feature`, `event_isactive`, `event_isapproved`, `event_added_datetime`, `state_admin_id`) VALUES
(4, 'hackathon 2020', 'hack day, hackfest or codefest', '2020-01-01 00:00:00', 'Delhi IIT', 'Hackathons are proving grounds for new ideas. ', 'Delhi NCR', 395669, 'Coding festival', 'yes', 'no', '2019-04-24 13:15:49', 19),
(5, 'IT EXPO', 'SITA â€“ South Gujarat Information Technologists Association', '2020-02-02 00:00:00', 'Surat', 'Useful for computer engineering student', 'vanita visram', 654455, 'Computer sales in cheap rate', 'yes', 'no', '2019-04-24 13:19:12', 19);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_institute`
--

CREATE TABLE `tbl_institute` (
  `institute_id` int(11) NOT NULL,
  `institute_name` text NOT NULL,
  `institute_code` int(11) NOT NULL,
  `institute_address` text NOT NULL,
  `institute_landmark` text NOT NULL,
  `institute_latitude` decimal(10,0) DEFAULT NULL,
  `institute_longitude` decimal(10,0) DEFAULT NULL,
  `institute_pincode` int(11) NOT NULL,
  `institute_contact` bigint(20) NOT NULL,
  `institute_email` text NOT NULL,
  `institute_website` text NOT NULL,
  `about_institute` text NOT NULL,
  `institute_isactive` varchar(4) NOT NULL DEFAULT 'yes',
  `institute_uname` text NOT NULL,
  `institute_pwd` text NOT NULL,
  `institute_main_person` text NOT NULL,
  `institute_logo` text NOT NULL,
  `institute_coverpage` text NOT NULL,
  `institute_image1` text NOT NULL,
  `institute_image2` text NOT NULL,
  `district_id` int(11) DEFAULT NULL,
  `district_collector_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_institute`
--

INSERT INTO `tbl_institute` (`institute_id`, `institute_name`, `institute_code`, `institute_address`, `institute_landmark`, `institute_latitude`, `institute_longitude`, `institute_pincode`, `institute_contact`, `institute_email`, `institute_website`, `about_institute`, `institute_isactive`, `institute_uname`, `institute_pwd`, `institute_main_person`, `institute_logo`, `institute_coverpage`, `institute_image1`, `institute_image2`, `district_id`, `district_collector_id`) VALUES
(1, 'CK Pithawala', 608, 'Near Malvan Mandir Via Magdalla Port, Dumas Rd, Surat, Gujarat ', 'Magdalla', '963258', '693258', 395007, 963258741, 'ckp@gmail.com', 'www.ckpcet.com', 'engineering college', '1', 'ckp', '123', 'Anish Gandhi', 'ckp.jpg', '', '', '', 17, 7),
(7, 'SCET', 600, 'SCET ,Dr. R.K. Desai Marg, Opp. Mission Hospital, Athwalines ,Surat', 'Sardar Bridge', '693258', '741258', 600, 9632587410, 'scet@ac.in', 'scet.ac.in', 'Engineering & technology.', '1', 'scet', '123', 'Dr Rajendra Desai', 'scet-logo.jpg', '', '', '', 17, 7),
(10, 'Bhagvan Mahavir', 6, ' BMEF Campus, Bharthana Road, Vesu, Surat, Gujarat ', 'Vesu', '395017', '123456', 6, 9856231470, 'bm@edu.com', 'www.bhagvanmahavirsurat.com', 'Technological college', '1', 'bm', '123', 'Pritesh Borse', 'bhagvan.jpg', 'bhagvan.jpg', '', '', 17, 7),
(11, 'Jayvantrai Harrai Desai Polytechnic ', 7, 'Palsana-Baleshwar Road, Palsana Dist., Surat, Gujarat ', 'Palsana', '745896', '325416', 7, 654789321, 'JHD@ac.in', 'www.jhdesai.com', 'diploma polytechnic college', '0', 'jhd', '123', 'Vipul Kanya', 'jhd.jpg', '', '', '', 17, 7),
(12, 'Girls Polytechnic', 686, 'Jolly Plaza, Beside, Navdi Bandar Rd, Athwa Gate, Surat, Gujarat ', 'Sardar Bridge', '4759856', '3657456', 395001, 745896321, 'GP@ac.in', 'www.girlspolytechnic.com', 'ploytechnic for girls only', '0', 'gp', '123', 'Drashti patel', 'girls_clg_logo.png', '', '', '', 17, 7),
(15, 'IIT Bombay', 989, 'West Mumbai ', 'Station', NULL, NULL, 231334, 9856321470, 'iit@bombay.in', 'iitbombay@edu.in', 'Engineering and Technology college in mumbai', 'yes', 'iitb', '123', 'harish vasava', 'ST_20190428090222.png', 'ST_20190428090222.png', 'ST_20190428090222.png', 'ST_20190428090222.png', 18, 0),
(16, 'Mumbai University', 128, 'Mumbai East', 'lower parel', NULL, NULL, 231334, 9856235896, 'mumbaiuni@gmail.com', 'mumbaiuni@edu.in', 'Biggest Engineering university in mumbai', 'yes', 'muni', '123', 'yash dwarke', 'ST_20190428090635.png', 'ST_20190428090635.png', 'ST_20190428090635.png', 'ST_20190428090635.png', 18, 0),
(17, 'Apollo College of engineering', 1259, 'SNME Campus, Near S.P. Ring Road Circle, GJ SH 68, Nava Naroda,, Enasan, Ahmedabad', 'gandhi bag', NULL, NULL, 987459, 938475638, 'apollo@edu.in', 'www.appoloahmedabad.com', 'One of the best college for engineering in ahmedabad', 'yes', 'apollo', '123', 'mayur parmar', 'INS_20190428092122.jpg', 'ST_20190428092122.jpg', 'ST_20190428092122.jpg', 'ST_20190428092122.jpg', 13, 0),
(18, 'Gujarat Technological University', 990, 'chankheda near vishwakarma college ahemdabad', 'Vishwakarma college', NULL, NULL, 787889, 785986909, 'Gtuinfo@edu.in', 'www.gtuindia.com', 'Biggest university in gujarat', 'yes', 'gtu', '123', 'Anish gandhi', 'INS_20190428092358.jpg', 'ST_20190428092358.jpg', 'ST_20190428092358.jpg', 'ST_20190428092359.jpg', 13, 0),
(19, 'Dehradun Sarvajanik College', 16589, 'Dehradun Road no 13', 'Station Circle', NULL, NULL, 852369, 8523697441, 'dehcollege@edu.in', 'dehcollege@edu.in', 'Technological Institute', 'yes', 'dehclg', '123', 'dehclg', 'INS_20190429034948.JPG', 'ST_20190429034948.JPG', 'ST_20190429034948.JPG', 'ST_20190429034948.JPG', 20, 0),
(20, 'vnsgu', 123, 'university Road, Surat', 'University Road', '123', '123', 123, 9632587410, 'vnsgu@gmail.com', 'vnsgu.com', 'South Gujarat University', 'yes', 'vnsgu', '123', 'Admin@vnsgu', 'ST_20190729080740.jpg', 'ST_20190729075729.jpg', 'ST_20190729075729.jpg', 'ST_20190729075729.jpg', 17, 0),
(21, 'Nirma university', 123, 'station road, Ahmedabad', 'Railway station', '123456', '132546', 123, 9874563210, 'nirma@nirma.com', 'www.nirma.com', 'engineering institute', 'yes', 'nirma', '123', 'admin@nirma', 'ST_20190729081110.jpg', 'ST_20190729081032.jpg', 'ST_20190729081032.jpg', 'ST_20190729081032.jpg', 13, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE `tbl_news` (
  `news_id` int(11) NOT NULL,
  `news_title` text NOT NULL,
  `news_title_description` text,
  `news_image` text,
  `news_description` text NOT NULL,
  `news_isactive` varchar(4) DEFAULT 'yes',
  `news_isapproved` varchar(4) DEFAULT 'no',
  `state_admin_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`news_id`, `news_title`, `news_title_description`, `news_image`, `news_description`, `news_isactive`, `news_isapproved`, `state_admin_id`) VALUES
(14, 'Election 2019', 'Lok Sabha Election 2019', 'NEWS_20190424093817.png', 'Please do vote for our nation!', 'yes', 'no', 19),
(15, 'Result of Election 2019', 'Result of lok sabha Election 2019 declare date', 'NEWS_20190424094108.jpg', 'Results will be declared in june.', 'yes', 'no', 19);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_polling`
--

CREATE TABLE `tbl_polling` (
  `polling_id` int(11) NOT NULL,
  `polling_question` text NOT NULL,
  `polling_start_date` date NOT NULL,
  `polling_end_date` date NOT NULL,
  `answer1` text NOT NULL,
  `answer2` text NOT NULL,
  `answer3` text NOT NULL,
  `answer4` text NOT NULL,
  `answer5` text NOT NULL,
  `district_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_polling`
--

INSERT INTO `tbl_polling` (`polling_id`, `polling_question`, `polling_start_date`, `polling_end_date`, `answer1`, `answer2`, `answer3`, `answer4`, `answer5`, `district_id`) VALUES
(8, 'After checking feasibility of solution which one can be a best solution among the following?', '2017-09-30', '2018-10-29', 'water supply by vehicle', 'The underground water supply', 'centralised water storage', 'Municipal corporation water supply', '24 hour water by private firm', 12);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_problem_category`
--

CREATE TABLE `tbl_problem_category` (
  `problem_category_id` int(11) NOT NULL,
  `problem_category_name` text NOT NULL,
  `problem_category_icon` text NOT NULL,
  `problem_category_isactive` varchar(4) NOT NULL DEFAULT 'yes'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_problem_category`
--

INSERT INTO `tbl_problem_category` (`problem_category_id`, `problem_category_name`, `problem_category_icon`, `problem_category_isactive`) VALUES
(1, 'Electricity', 'ST_20190427031626.jpg', 'yes'),
(2, 'Water Related', 'ST_20190427031641.jpg', 'yes'),
(4, 'Road Damaged', 'PC_20190427032536.JPG', 'yes'),
(5, 'Traffic Related', 'PC_20190427032555.jpg', 'yes'),
(6, 'No Landline Service', 'PC_20190427032630.jpg', 'yes'),
(7, 'Transportation Related', 'PC_20190427033026.jpg', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_problem_material`
--

CREATE TABLE `tbl_problem_material` (
  `problem_material_id` int(11) NOT NULL,
  `problem_material_url` text,
  `problem_material_isactive` varchar(4) DEFAULT 'yes',
  `problem_material_type` text,
  `problem_st_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_problem_material`
--

INSERT INTO `tbl_problem_material` (`problem_material_id`, `problem_material_url`, `problem_material_isactive`, `problem_material_type`, `problem_st_id`) VALUES
(7, 'PM_20190427060331.jpg', 'yes', '', 15),
(8, 'PM_20190427060355.jpg', 'yes', '', 12),
(10, 'PM_20190428035727.JPG', 'yes', NULL, 14),
(11, 'PM_20190429065028.jpg', 'yes', NULL, 17);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_problem_statement`
--

CREATE TABLE `tbl_problem_statement` (
  `problem_st_id` int(11) NOT NULL,
  `problem_st_title` text NOT NULL,
  `problem_st_description` text NOT NULL,
  `problem_st_budget_start_amount` int(11) NOT NULL,
  `problem_st_budget_end_amount` int(11) NOT NULL,
  `problem_st_added_datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `problem_st_deadline_datetime` datetime NOT NULL,
  `problem_st_tags` text NOT NULL,
  `problem_st_advantages` text NOT NULL,
  `types_of_area` text NOT NULL,
  `problem_st_isactive` varchar(4) NOT NULL DEFAULT 'no',
  `problem_st_canvas_image` text NOT NULL,
  `district_collector_id` int(11) NOT NULL,
  `problem_category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_problem_statement`
--

INSERT INTO `tbl_problem_statement` (`problem_st_id`, `problem_st_title`, `problem_st_description`, `problem_st_budget_start_amount`, `problem_st_budget_end_amount`, `problem_st_added_datetime`, `problem_st_deadline_datetime`, `problem_st_tags`, `problem_st_advantages`, `types_of_area`, `problem_st_isactive`, `problem_st_canvas_image`, `district_collector_id`, `problem_category_id`) VALUES
(12, 'Regarding Water Supply', 'There is no water supply in GIDC area.', 100000, 500000, '2019-04-27 19:12:27', '2021-03-04 00:00:00', '#24hourswater #noworries ', '24 hours water supply', 'Irrigation and Water Management', 'yes', 'PROB_20190427034842.jpg', 15, 2),
(13, 'Regarding Road Damaged', 'Road Condition is very poor in Station area', 155000, 669000, '2019-04-27 19:33:56', '2023-08-29 00:00:00', '#notimewaste #smoothtransportation', 'People can reach from Source to Destination within minutes instead of hours.', 'Civil', 'yes', 'ST_20190427040356.JPG', 15, 4),
(14, 'No Electricity', 'There is no electricity in our district', 25000, 50000, '2019-04-27 19:36:30', '2021-04-03 00:00:00', '#smartmovetowardslight #noworries ', '#24hour #365dayelectricity #solar', 'Civil', 'yes', 'ST_20190427040630.jpg', 15, 1),
(15, 'Heavy Traffic', 'Regarding Heavy traffic in surat katargam area.', 6569000, 12350000, '2019-04-27 20:11:42', '2015-09-30 00:00:00', '#notrafficconjunction', '#flyover', 'Civil', 'no', 'ST_20190427044142.jpg', 7, 5),
(16, 'Regarding Landline Services', 'No landline service in axelor corporate office.', 16000, 20000, '2019-04-27 20:18:55', '2022-03-03 00:00:00', '#landlineService', '#landline #telephone', 'Civil', 'yes', 'ST_20190427044855.jpg', 13, 6),
(17, 'No Bus Service', 'Bus Service is not available', 200000, 600000, '2019-04-27 20:43:10', '2021-04-02 00:00:00', '#lessfuel', 'Everyday Bus service will be provided.', 'Transport management', 'yes', 'ST_20190427051310.jpg', 14, 7),
(18, 'Road Damaged', 'Road is damaged in Vesu Area', 1756890, 2500000, '2019-04-27 20:50:29', '2022-03-03 00:00:00', '#1weeksolution', '#fasterRoadDevelopment  ', 'Civil', 'no', 'ST_20190427052029.JPG', 7, 4),
(19, 'Less supply of power', 'Resolving scarcity of power supply in SBI bank', 150000, 200000, '2019-04-29 09:41:39', '2019-05-11 00:00:00', '#24hourpower', 'monotonous power supply whole day', 'Civil', 'yes', 'ST_20190429061139.jpg', 18, 1),
(20, 'Regarding heavy Traffic Conjunction ', 'Everyday traffic conjunction is increase', 5000000, 10000000, '2019-04-29 09:52:46', '2022-03-02 00:00:00', '#notraffic', 'No traffic will occur', 'Civil', 'yes', 'ST_20190429062247.jpg', 18, 5),
(21, 'No coverage', 'less coverage in sachin GIDC', 780000, 800000, '2019-04-29 11:04:03', '2019-04-27 00:00:00', '#MoreCoverage', 'will provide network service to users', 'Computer', 'no', 'ST_20190429073403.jpg', 7, 6);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_question`
--

CREATE TABLE `tbl_question` (
  `question_id` int(11) NOT NULL,
  `problem_category_id` int(11) NOT NULL,
  `question_description` text NOT NULL,
  `question_added_datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `question_title` text NOT NULL,
  `problem_st_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_question`
--

INSERT INTO `tbl_question` (`question_id`, `problem_category_id`, `question_description`, `question_added_datetime`, `question_title`, `problem_st_id`, `student_id`) VALUES
(4, 4, 'We have decided to modify our project after analysing the overall scenario.', '2019-04-17 00:00:00', 'Modification in Project', 18, 11);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_question_reply`
--

CREATE TABLE `tbl_question_reply` (
  `que_reply_id` int(11) NOT NULL,
  `que_reply_text` text NOT NULL,
  `que_reply_attachment_url` text NOT NULL,
  `question_id` int(11) NOT NULL,
  `institute_id` int(11) DEFAULT NULL,
  `district_collector_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_question_reply`
--

INSERT INTO `tbl_question_reply` (`que_reply_id`, `que_reply_text`, `que_reply_attachment_url`, `question_id`, `institute_id`, `district_collector_id`) VALUES
(1, 'First you have to submit the new abstract.', 'abc.txt', 4, 1, 7);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_solution`
--

CREATE TABLE `tbl_solution` (
  `solution_id` int(11) NOT NULL,
  `solution_project_name` text NOT NULL,
  `solution_description` text NOT NULL,
  `solution_datetime` date NOT NULL,
  `solution_isapproved_institute` varchar(4) NOT NULL DEFAULT 'no',
  `solution_added_datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `solution_is_sortlisted` tinyint(4) DEFAULT NULL,
  `solution_sortlisted_datetime` date NOT NULL,
  `problem_st_id` int(11) NOT NULL,
  `solution_material` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_solution`
--

INSERT INTO `tbl_solution` (`solution_id`, `solution_project_name`, `solution_description`, `solution_datetime`, `solution_isapproved_institute`, `solution_added_datetime`, `solution_is_sortlisted`, `solution_sortlisted_datetime`, `problem_st_id`, `solution_material`) VALUES
(1, 'Water Problem', 'desc water problem', '2016-10-30', 'yes', '2019-03-14 00:00:00', NULL, '2018-10-29', 12, NULL),
(4, 'Road Damaged', 'Rad is damaged', '2017-10-30', 'no', '2019-03-15 00:00:00', NULL, '0000-00-00', 17, NULL),
(5, 'Network Problem Solution', 'Base Station is not available in our area', '0000-00-00', 'no', '2019-04-29 11:12:10', NULL, '0000-00-00', 21, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_solution_student`
--

CREATE TABLE `tbl_solution_student` (
  `student_solution_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `solution_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_state`
--

CREATE TABLE `tbl_state` (
  `state_id` int(11) NOT NULL,
  `state_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_state`
--

INSERT INTO `tbl_state` (`state_id`, `state_name`) VALUES
(12, 'Gujarat'),
(13, 'Maharashtra'),
(14, 'Kerala'),
(15, 'Goa'),
(16, 'Uttar Pradesh'),
(17, 'Madhya Pradesh'),
(18, 'Rajasthan'),
(19, 'Uttarakhand'),
(20, 'Tamil Nadu');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_state_admin_login`
--

CREATE TABLE `tbl_state_admin_login` (
  `state_admin_id` int(11) NOT NULL,
  `state_admin_name` text NOT NULL,
  `state_admin_uname` text NOT NULL,
  `state_admin_pwd` text NOT NULL,
  `state_admin_contact` bigint(20) NOT NULL,
  `state_admin_isactive` varchar(5) NOT NULL DEFAULT 'yes',
  `state_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_state_admin_login`
--

INSERT INTO `tbl_state_admin_login` (`state_admin_id`, `state_admin_name`, `state_admin_uname`, `state_admin_pwd`, `state_admin_contact`, `state_admin_isactive`, `state_id`) VALUES
(22, 'Vijay Rupani', 'vp', '123', 789654123, 'yes', 12),
(23, 'Devendra Fadnavis', 'df', '123', 985475632, 'yes', 13),
(24, 'Pinarayi Vijayan', 'pv', '123', 854632175, 'yes', 14),
(25, 'Digambar Kamat ', 'dk', '123', 745896214, 'yes', 15),
(26, 'Yogi Adityanath', 'ya', '123', 756874563, 'yes', 16),
(27, 'Rutu Desai', 'rd', '123', 789654123, 'yes', 17),
(28, 'Sambit Kumar', 'sk', '123', 9632547895, 'yes', 19),
(29, 'Rajnikant', 'rajni', '123', 8956237410, 'yes', 20);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE `tbl_student` (
  `student_id` int(11) NOT NULL,
  `student_name` text,
  `student_contact` bigint(20) DEFAULT NULL,
  `student_uname` text,
  `student_pwd` text,
  `student_email` text,
  `student_profile_picture` text,
  `student_department` text,
  `student_dob` date DEFAULT NULL,
  `student_qualification` text,
  `student_isactive` varchar(4) DEFAULT 'yes',
  `student_isapproved` varchar(4) DEFAULT 'no',
  `student_added_datetime` datetime DEFAULT CURRENT_TIMESTAMP,
  `student_approved_datetime` date DEFAULT NULL,
  `student_address` text,
  `student_landmark` text,
  `student_pincode` int(11) DEFAULT NULL,
  `institute_id` int(11) DEFAULT NULL,
  `district_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`student_id`, `student_name`, `student_contact`, `student_uname`, `student_pwd`, `student_email`, `student_profile_picture`, `student_department`, `student_dob`, `student_qualification`, `student_isactive`, `student_isapproved`, `student_added_datetime`, `student_approved_datetime`, `student_address`, `student_landmark`, `student_pincode`, `institute_id`, `district_id`) VALUES
(11, 'Aakash Patel', 789456321, 'aakash.ckp', '123', 'Aakash@gmail.com', 'ST_20190426013159.jpg', 'Computer Engineering', '1997-12-03', 'BE', 'yes', 'yes', '2019-04-26 17:01:59', '0000-00-00', '40, galaxy royal bunglows , near saroli bridge, surat', 'Iscon Temple', 395005, 1, 12),
(12, 'Pritesh Borse', 789654123, 'pritesh.ckp', '123', 'pritesh@gmail.com', 'ST_20190426020235.jpg', 'Computer Engineering', '1995-01-31', 'BE', 'yes', 'yes', '2019-04-26 17:32:35', '0000-00-00', '602 , Rishikesh appartment, amroli char rasta , surat', 'Amroli Bridge', 369556, 1, 12),
(13, 'Deep Patel', 789654456, 'deep@scet', '123', 'deep@gmail.com', 'ST_20190426020421.jpg', 'Electrical Engineering', '2009-02-04', 'BE', 'yes', 'no', '2019-04-26 17:34:21', '0000-00-00', '104 , Rammadhi row house , adajan char raste , adajan ,surat', 'gujrat gas circle', 369556, 7, 12),
(14, 'Kamlesh basire', 789654123, 'kamlesh.jhd', '123', 'kamlesh@gmail.com', 'ST_20190426020914.jpg', 'Civil Engineering', '1993-03-30', 'Diploma', 'yes', 'no', '2019-04-26 17:39:14', '0000-00-00', '33 , Moti seri road , palsana main gali , palsana , surat', 'JHD college ', 365569, 11, 12),
(15, 'Drashti Patel', 986565325, 'drashti.gp', '123', 'drashti@gmail.com', 'ST_20190426021126.jpg', 'Computer Engineering', '1993-06-05', 'BE', 'yes', 'no', '2019-04-26 17:41:26', '0000-00-00', '103, prince palace , new bhatar , surat', 'Breadliner Circle', 365441, 12, 12),
(16, 'Yash thakore', 789654123, 'yash.bm', '123', 'yash@yahoo.com', 'ST_20190426021443.jpg', 'Mechanical Engineering', '1993-08-07', 'BE', 'yes', 'yes', '2019-04-26 17:44:43', '0000-00-00', '42 , Laxmikant Society , katargam , Surat', 'Gajera School', 387889, 10, 12),
(17, 'Priyansh Patel', 784512369, 'priyansh.bm', '123', 'priyansh@yopmail.com', 'ST_20190426021644.jpg', 'Mechanical Engineering', '1996-09-06', 'BE', 'yes', 'no', '2019-04-26 17:46:44', '0000-00-00', '39, Saniya row house , Saniya Kande gam , Surat', 'Saniya Talav', 654556, 10, 12),
(18, 'Rutu Desai', 747458596, 'rutu.ckp', '123', 'rutu@hotmail.com', 'ST_20190426021908.jpg', 'Civil Engineering', '1999-04-22', 'BE', 'yes', 'yes', '2019-04-26 17:49:08', '0000-00-00', '31 , Amrapali society , New citylight road , Surat', 'Mcdonald Cityight', 369556, 1, 12),
(19, 'Shyam Pandey', 8558885568, 'spd', '123', 'spd@gmail.com', 'ST_20190429035303.jpg', 'computer', '1997-09-30', 'BE', 'yes', 'no', '2019-04-29 07:23:03', NULL, '25, Shyam  Complex,Road no 14, Dehradun.', 'Gajera Circle', 256523, 19, 20),
(20, 'Divyesh Ahir', 8899665577, 'dad', '123', 'div@gmail.con', 'ST_20190429035543.jpg', 'computer', '1997-12-30', 'BE', 'yes', 'no', '2019-04-29 07:25:43', NULL, '12, Krishna Res., Boatnical Garden Road,Dehradun.', 'A.K. Road', 456123, 19, 20);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_super_admin_login`
--

CREATE TABLE `tbl_super_admin_login` (
  `super_admin_id` int(11) NOT NULL,
  `super_admin_name` text NOT NULL,
  `super_admin_uname` text NOT NULL,
  `super_admin_pwd` text NOT NULL,
  `super_admin_contact` bigint(20) NOT NULL,
  `super_admin_isactive` varchar(4) NOT NULL DEFAULT 'yes'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_super_admin_login`
--

INSERT INTO `tbl_super_admin_login` (`super_admin_id`, `super_admin_name`, `super_admin_uname`, `super_admin_pwd`, `super_admin_contact`, `super_admin_isactive`) VALUES
(1, 'P.M. Narendra Modi', 'modi', '123', 987654310, '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `user_password` text NOT NULL,
  `user_contact` bigint(20) NOT NULL,
  `user_email` text NOT NULL,
  `user_profile_picture` text,
  `district_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_name`, `user_password`, `user_contact`, `user_email`, `user_profile_picture`, `district_id`) VALUES
(1, 'John', '123', 9865741230, 'John@gmail.com', 'USER_20190309092208 (1).jpg', 12),
(2, 'Milind', '123', 9632587410, 'Milind@gmail.com', 'USER_20190309092208 (4).jpg', 13),
(3, 'Divyesh', '123', 9856471230, 'divyesh@gmail.com', 'USER_20190309092208 (5).jpg', 14),
(5, 'Rutu', '123', 9977665544, 'Rutu@gmail.com', 'USER_20190309092208 (3).jpg', 15),
(6, 'Drashti', '123', 9889745632, 'drashti@gmail.com', 'USER_20190309092208 (2).jpg', 16);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_complain`
--
ALTER TABLE `tbl_complain`
  ADD PRIMARY KEY (`complain_id`);

--
-- Indexes for table `tbl_complete_work`
--
ALTER TABLE `tbl_complete_work`
  ADD PRIMARY KEY (`comp_work_id`);

--
-- Indexes for table `tbl_district`
--
ALTER TABLE `tbl_district`
  ADD PRIMARY KEY (`district_id`);

--
-- Indexes for table `tbl_district_collector`
--
ALTER TABLE `tbl_district_collector`
  ADD PRIMARY KEY (`district_collector_id`);

--
-- Indexes for table `tbl_event`
--
ALTER TABLE `tbl_event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `tbl_institute`
--
ALTER TABLE `tbl_institute`
  ADD PRIMARY KEY (`institute_id`);

--
-- Indexes for table `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `tbl_polling`
--
ALTER TABLE `tbl_polling`
  ADD PRIMARY KEY (`polling_id`);

--
-- Indexes for table `tbl_problem_category`
--
ALTER TABLE `tbl_problem_category`
  ADD PRIMARY KEY (`problem_category_id`);

--
-- Indexes for table `tbl_problem_material`
--
ALTER TABLE `tbl_problem_material`
  ADD PRIMARY KEY (`problem_material_id`);

--
-- Indexes for table `tbl_problem_statement`
--
ALTER TABLE `tbl_problem_statement`
  ADD PRIMARY KEY (`problem_st_id`);

--
-- Indexes for table `tbl_question`
--
ALTER TABLE `tbl_question`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `tbl_question_reply`
--
ALTER TABLE `tbl_question_reply`
  ADD PRIMARY KEY (`que_reply_id`);

--
-- Indexes for table `tbl_solution`
--
ALTER TABLE `tbl_solution`
  ADD PRIMARY KEY (`solution_id`);

--
-- Indexes for table `tbl_solution_student`
--
ALTER TABLE `tbl_solution_student`
  ADD PRIMARY KEY (`student_solution_id`);

--
-- Indexes for table `tbl_state`
--
ALTER TABLE `tbl_state`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `tbl_state_admin_login`
--
ALTER TABLE `tbl_state_admin_login`
  ADD PRIMARY KEY (`state_admin_id`);

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `tbl_super_admin_login`
--
ALTER TABLE `tbl_super_admin_login`
  ADD PRIMARY KEY (`super_admin_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_complain`
--
ALTER TABLE `tbl_complain`
  MODIFY `complain_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_complete_work`
--
ALTER TABLE `tbl_complete_work`
  MODIFY `comp_work_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_district`
--
ALTER TABLE `tbl_district`
  MODIFY `district_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_district_collector`
--
ALTER TABLE `tbl_district_collector`
  MODIFY `district_collector_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_event`
--
ALTER TABLE `tbl_event`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_institute`
--
ALTER TABLE `tbl_institute`
  MODIFY `institute_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_polling`
--
ALTER TABLE `tbl_polling`
  MODIFY `polling_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_problem_category`
--
ALTER TABLE `tbl_problem_category`
  MODIFY `problem_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_problem_material`
--
ALTER TABLE `tbl_problem_material`
  MODIFY `problem_material_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_problem_statement`
--
ALTER TABLE `tbl_problem_statement`
  MODIFY `problem_st_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_question`
--
ALTER TABLE `tbl_question`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_question_reply`
--
ALTER TABLE `tbl_question_reply`
  MODIFY `que_reply_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_solution`
--
ALTER TABLE `tbl_solution`
  MODIFY `solution_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_solution_student`
--
ALTER TABLE `tbl_solution_student`
  MODIFY `student_solution_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_state`
--
ALTER TABLE `tbl_state`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_state_admin_login`
--
ALTER TABLE `tbl_state_admin_login`
  MODIFY `state_admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tbl_student`
--
ALTER TABLE `tbl_student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_super_admin_login`
--
ALTER TABLE `tbl_super_admin_login`
  MODIFY `super_admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
