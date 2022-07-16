-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2022 at 11:45 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app_sfc`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_video`
--

CREATE TABLE `add_video` (
  `video_id` int(11) NOT NULL,
  `video_url` varchar(255) NOT NULL,
  `upload_date` date NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `assumption`
--

CREATE TABLE `assumption` (
  `a_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `a_description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `family_detail`
--

CREATE TABLE `family_detail` (
  `f_id` int(11) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `f_rel` varchar(255) NOT NULL,
  `f_age` int(11) NOT NULL,
  `f_dpn` varchar(255) NOT NULL,
  `p_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `financial_assets`
--

CREATE TABLE `financial_assets` (
  `f_id` int(11) NOT NULL,
  `f_ass_nm` varchar(255) NOT NULL,
  `f_amt` int(11) NOT NULL,
  `f_total_am` int(11) NOT NULL,
  `f_ass_total` int(11) NOT NULL,
  `_per_ass_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `financial_goal`
--

CREATE TABLE `financial_goal` (
  `fg_id` int(11) NOT NULL,
  `note` varchar(1000) NOT NULL,
  `risk_level` varchar(1000) NOT NULL,
  `p_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `goal_detail`
--

CREATE TABLE `goal_detail` (
  `g_id` int(11) NOT NULL,
  `g_dsc` varchar(255) NOT NULL,
  `g_freq` varchar(255) NOT NULL,
  `g_value` int(11) NOT NULL,
  `g_Inflation` int(11) NOT NULL,
  `g_st_year` int(11) NOT NULL,
  `g_end_year` int(11) NOT NULL,
  `g_priority` varchar(255) NOT NULL,
  `p_id` int(11) NOT NULL,
  `fg_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `liabilities`
--

CREATE TABLE `liabilities` (
  `l_id` int(11) NOT NULL,
  `l_ass_nm` varchar(255) NOT NULL,
  `l_amt` int(11) NOT NULL,
  `l_total_am` int(11) NOT NULL,
  `l_ass_total` int(11) NOT NULL,
  `l_per_ass_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `l_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `pswd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`l_id`, `name`, `pswd`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `networth`
--

CREATE TABLE `networth` (
  `id` int(11) NOT NULL,
  `Total_Liabilities` int(11) NOT NULL,
  `Total_NetWorth` int(11) NOT NULL,
  `notes` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `net_worth_assets`
--

CREATE TABLE `net_worth_assets` (
  `nw_id` int(11) NOT NULL,
  `nw_ass_nm` varchar(255) NOT NULL,
  `nw_amt` int(11) NOT NULL,
  `nw_total_am` int(11) NOT NULL,
  `nm_ass_total` int(11) NOT NULL,
  `nm_per_ass_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `payment_type` varchar(100) NOT NULL,
  `payment_date` date NOT NULL,
  `client_name` varchar(1000) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `payment_type`, `payment_date`, `client_name`, `image`) VALUES
(2, 'hgvjbn', '2022-07-06', 'ftguyhnjm', '979338fa3dcf3725dd553da0f0e04b46.png');

-- --------------------------------------------------------

--
-- Table structure for table `personal_assets`
--

CREATE TABLE `personal_assets` (
  `p_id` int(11) NOT NULL,
  `p_ass_nm` varchar(255) NOT NULL,
  `p_amt` int(11) NOT NULL,
  `p_total_am` int(11) NOT NULL,
  `p_ass_total` int(11) NOT NULL,
  `p_per_ass_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `personal_detail`
--

CREATE TABLE `personal_detail` (
  `p_id` int(11) NOT NULL,
  `s_name` varchar(255) NOT NULL,
  `s_age` int(11) NOT NULL,
  `s_pan` varchar(255) NOT NULL,
  `s_occ` varchar(255) NOT NULL,
  `sp_name` varchar(255) NOT NULL,
  `sp_age` int(11) NOT NULL,
  `sp_pan` varchar(255) NOT NULL,
  `sp_occ` varchar(255) NOT NULL,
  `p_add` varchar(255) NOT NULL,
  `p_email` varchar(255) NOT NULL,
  `p_contact` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `retirement_assets`
--

CREATE TABLE `retirement_assets` (
  `r_id` int(11) NOT NULL,
  `r_ass_nm` varchar(255) NOT NULL,
  `r_amt` int(11) NOT NULL,
  `r_total_am` int(11) NOT NULL,
  `r_ass_total` int(11) NOT NULL,
  `r_per_ass_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tangible_assets`
--

CREATE TABLE `tangible_assets` (
  `t_id` int(11) NOT NULL,
  `t_ass_nm` varchar(255) NOT NULL,
  `t_amt` int(11) NOT NULL,
  `t_total_am` int(11) NOT NULL,
  `t_ass_total` int(11) NOT NULL,
  `t_per_ass_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_video`
--
ALTER TABLE `add_video`
  ADD PRIMARY KEY (`video_id`);

--
-- Indexes for table `assumption`
--
ALTER TABLE `assumption`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `family_detail`
--
ALTER TABLE `family_detail`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `financial_assets`
--
ALTER TABLE `financial_assets`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `financial_goal`
--
ALTER TABLE `financial_goal`
  ADD PRIMARY KEY (`fg_id`);

--
-- Indexes for table `goal_detail`
--
ALTER TABLE `goal_detail`
  ADD PRIMARY KEY (`g_id`);

--
-- Indexes for table `liabilities`
--
ALTER TABLE `liabilities`
  ADD PRIMARY KEY (`l_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`l_id`);

--
-- Indexes for table `networth`
--
ALTER TABLE `networth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `net_worth_assets`
--
ALTER TABLE `net_worth_assets`
  ADD PRIMARY KEY (`nw_id`,`nw_amt`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `personal_assets`
--
ALTER TABLE `personal_assets`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `personal_detail`
--
ALTER TABLE `personal_detail`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `retirement_assets`
--
ALTER TABLE `retirement_assets`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `tangible_assets`
--
ALTER TABLE `tangible_assets`
  ADD PRIMARY KEY (`t_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_video`
--
ALTER TABLE `add_video`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `assumption`
--
ALTER TABLE `assumption`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `family_detail`
--
ALTER TABLE `family_detail`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `financial_assets`
--
ALTER TABLE `financial_assets`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `financial_goal`
--
ALTER TABLE `financial_goal`
  MODIFY `fg_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `goal_detail`
--
ALTER TABLE `goal_detail`
  MODIFY `g_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `liabilities`
--
ALTER TABLE `liabilities`
  MODIFY `l_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `l_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `networth`
--
ALTER TABLE `networth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `net_worth_assets`
--
ALTER TABLE `net_worth_assets`
  MODIFY `nw_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_assets`
--
ALTER TABLE `personal_assets`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_detail`
--
ALTER TABLE `personal_detail`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `retirement_assets`
--
ALTER TABLE `retirement_assets`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tangible_assets`
--
ALTER TABLE `tangible_assets`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
