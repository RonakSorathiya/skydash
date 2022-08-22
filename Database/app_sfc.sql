-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2022 at 08:33 PM
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
-- Table structure for table `add_appointment`
--

CREATE TABLE `add_appointment` (
  `appointment_id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `phone_number` varchar(10) NOT NULL,
  `email_address` varchar(64) NOT NULL,
  `message` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `add_client`
--

CREATE TABLE `add_client` (
  `client_id` int(11) NOT NULL,
  `client_name` varchar(32) NOT NULL,
  `phone_number` varchar(10) NOT NULL,
  `email_address` varchar(64) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `add_expense`
--

CREATE TABLE `add_expense` (
  `expense_id` int(11) NOT NULL,
  `expense_category` varchar(64) NOT NULL,
  `date` varchar(16) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `add_income`
--

CREATE TABLE `add_income` (
  `income_id` int(11) NOT NULL,
  `income_category` varchar(64) NOT NULL,
  `date` varchar(16) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
-- Table structure for table `after_saving`
--

CREATE TABLE `after_saving` (
  `after_saving_id` int(11) NOT NULL,
  `personal_detail_id` int(11) NOT NULL,
  `current_per_after_saving` float NOT NULL,
  `current_annualy_after_saving` int(11) NOT NULL,
  `current_monthly_after_saving` float NOT NULL,
  `rec_per_after_saving` float NOT NULL,
  `rec_annualy_after_saving` int(11) NOT NULL,
  `rec_monthly_after_saving` float NOT NULL,
  `added_on_date` date NOT NULL,
  `added_on_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `allocated_fund`
--

CREATE TABLE `allocated_fund` (
  `allocated_fund_id` int(11) NOT NULL,
  `personal_detail_id` int(11) NOT NULL,
  `fund_description` varchar(255) NOT NULL,
  `annual_fund` varchar(100) NOT NULL,
  `monthly_fund` varchar(100) NOT NULL,
  `added_on_date` date NOT NULL,
  `added_on_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `annexure_1`
--

CREATE TABLE `annexure_1` (
  `annexure_1_id` int(11) NOT NULL,
  `personal_detail_id` int(11) NOT NULL,
  `p_nominee` varchar(255) NOT NULL,
  `insurer` varchar(255) NOT NULL,
  `b_p_type` varchar(255) NOT NULL,
  `t_ppt` varchar(100) NOT NULL,
  `s_a_guaranteed` varchar(500) NOT NULL,
  `m_of_payment` varchar(500) NOT NULL,
  `y_of_maturity` varchar(100) NOT NULL,
  `added_on_date` date NOT NULL,
  `added_on_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `annexure_2`
--

CREATE TABLE `annexure_2` (
  `annexure_2_id` int(11) NOT NULL,
  `personal_detail_id` int(11) NOT NULL,
  `a_detail` varchar(500) NOT NULL,
  `a_amount` varchar(100) NOT NULL,
  `present_value` varchar(100) NOT NULL,
  `less_present_value` varchar(100) NOT NULL,
  `additional_insurance` varchar(100) NOT NULL,
  `added_on_date` date NOT NULL,
  `added_on_time` time NOT NULL
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
-- Table structure for table `before_saving`
--

CREATE TABLE `before_saving` (
  `before_saving_id` int(11) NOT NULL,
  `personal_detail_id` int(11) NOT NULL,
  `current_per_before_saving` float NOT NULL,
  `current_annualy_before_saving` int(11) NOT NULL,
  `current_monthly_before_saving` float NOT NULL,
  `rec_per_before_saving` float NOT NULL,
  `rec_annualy_before_saving` int(11) NOT NULL,
  `rec_monthly_before_saving` float NOT NULL,
  `added_on_date` date NOT NULL,
  `added_on_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cash_flow`
--

CREATE TABLE `cash_flow` (
  `cash_flow_id` int(11) NOT NULL,
  `personal_detail_id` int(11) NOT NULL,
  `current_total_per_income` float NOT NULL,
  `current_total_annualy_income` int(11) NOT NULL,
  `current_total_monthly_income` float NOT NULL,
  `rec_total_per_income` float NOT NULL,
  `rec_total_annualy_income` int(11) NOT NULL,
  `rec_total_monthly_income` float NOT NULL,
  `current_total_per_expense` float NOT NULL,
  `current_total_annualy_expense` int(11) NOT NULL,
  `current_total_monthly_expense` float NOT NULL,
  `rec_total_per_expense` float NOT NULL,
  `rec_total_annualy_expense` int(11) NOT NULL,
  `rec_total_monthly_expense` float NOT NULL,
  `current_total_per_emi` float NOT NULL,
  `current_total_annualy_emi` int(11) NOT NULL,
  `current_total_monthly_emi` float NOT NULL,
  `rec_total_per_emi` float NOT NULL,
  `rec_total_annualy_emi` int(11) NOT NULL,
  `rec_total_monthly_emi` float NOT NULL,
  `current_total_per_insurance` float NOT NULL,
  `current_total_annualy_insurance` int(11) NOT NULL,
  `current_total_monthly_insurance` float NOT NULL,
  `rec_total_per_insurance` float NOT NULL,
  `rec_total_annualy_insurance` int(11) NOT NULL,
  `rec_total_monthly_insurance` float NOT NULL,
  `current_total_per_other_exp` float NOT NULL,
  `current_total_annualy_other_exp` int(11) NOT NULL,
  `current_total_monthly_other_exp` float NOT NULL,
  `rec_total_per_other_exp` float NOT NULL,
  `rec_total_annualy_other_exp` int(11) NOT NULL,
  `rec_total_monthly_other_exp` float NOT NULL,
  `current_total_per_tax` float NOT NULL,
  `current_total_annualy_tax` int(11) NOT NULL,
  `current_total_monthly_tax` float NOT NULL,
  `rec_total_per_tax` float NOT NULL,
  `rec_total_annualy_tax` int(11) NOT NULL,
  `rec_total_monthly_tax` float NOT NULL,
  `current_total_all_per_expense` float NOT NULL,
  `current_total_all_annualy_expense` int(11) NOT NULL,
  `current_total_all_monthly_expense` float NOT NULL,
  `rec_total_all_per_expense` float NOT NULL,
  `rec_total_all_annualy_expense` int(11) NOT NULL,
  `rec_total_all_monthly_expense` float NOT NULL,
  `notes` varchar(500) NOT NULL,
  `added_on_date` date NOT NULL,
  `added_on_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contribute_assets`
--

CREATE TABLE `contribute_assets` (
  `contribute_assets_id` int(11) NOT NULL,
  `personal_detail_id` int(11) NOT NULL,
  `contribute_assets_description` varchar(500) NOT NULL,
  `current_per_contribute_assets` float NOT NULL,
  `current_annualy_contribute_assets` int(11) NOT NULL,
  `current_monthly_contribute_assets` float NOT NULL,
  `rec_per_contribute_assets` float NOT NULL,
  `rec_annualy_contribute_assets` int(11) NOT NULL,
  `rec_monthly_contribute_assets` float NOT NULL,
  `added_on_date` date NOT NULL,
  `added_on_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contribute_emergency_fund`
--

CREATE TABLE `contribute_emergency_fund` (
  `fund_id` int(11) NOT NULL,
  `personal_detail_id` int(11) NOT NULL,
  `current_total_per_fund` float NOT NULL,
  `current_total_annualy_fund` int(11) NOT NULL,
  `current_total_monthly_fund` float NOT NULL,
  `rec_total_per_fund` float NOT NULL,
  `rec_total_annualy_fund` int(11) NOT NULL,
  `rec_total_monthly_fund` float NOT NULL,
  `added_on_date` date NOT NULL,
  `added_on_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `course_master`
--

CREATE TABLE `course_master` (
  `course_id` int(11) NOT NULL,
  `course_title` varchar(64) NOT NULL,
  `course_duration` int(11) NOT NULL,
  `course_price` int(11) NOT NULL,
  `course_desc` varchar(64) NOT NULL,
  `course_coverimg` varchar(255) NOT NULL,
  `course_status` int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `course_payment`
--

CREATE TABLE `course_payment` (
  `payment_id` int(11) NOT NULL,
  `client_name` varchar(64) NOT NULL,
  `course_id` int(11) NOT NULL,
  `pay_amount` int(11) NOT NULL,
  `pay_type` varchar(8) NOT NULL,
  `pay_date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cur_assets_allocation`
--

CREATE TABLE `cur_assets_allocation` (
  `cur_allocation_id` int(11) NOT NULL,
  `personal_detail_id` int(11) NOT NULL,
  `current_class` varchar(255) NOT NULL,
  `current_amount` varchar(100) NOT NULL,
  `current_per_assets` float NOT NULL,
  `added_on_date` date NOT NULL,
  `added_on_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `emergency_fund`
--

CREATE TABLE `emergency_fund` (
  `fund_id` int(11) NOT NULL,
  `personal_detail_id` int(11) NOT NULL,
  `before_tax` varchar(200) NOT NULL,
  `balance` varchar(500) NOT NULL,
  `total_fund_amount` varchar(500) NOT NULL,
  `added_on_date` date NOT NULL,
  `added_on_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `emergency_fund_catg`
--

CREATE TABLE `emergency_fund_catg` (
  `fund_catg_id` int(11) NOT NULL,
  `personal_detail_id` int(11) NOT NULL,
  `fund_category` varchar(200) NOT NULL,
  `fund_amount` varchar(100) NOT NULL,
  `added_on_date` date NOT NULL,
  `added_on_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `emi`
--

CREATE TABLE `emi` (
  `emi_id` int(11) NOT NULL,
  `personal_detail_id` int(11) NOT NULL,
  `emi_description` varchar(500) NOT NULL,
  `current_per_emi` float NOT NULL,
  `current_annualy_emi` int(11) NOT NULL,
  `current_monthly_emi` float NOT NULL,
  `rec_per_emi` float NOT NULL,
  `rec_annualy_emi` int(11) NOT NULL,
  `rec_monthly_emi` float NOT NULL,
  `added_on_date` date NOT NULL,
  `added_on_time` time NOT NULL
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
  `financial_assets_id` int(11) NOT NULL,
  `personal_detail_id` int(11) NOT NULL,
  `financial_assets_name` varchar(1000) NOT NULL,
  `financial_assets_amount` int(11) NOT NULL,
  `financial_assets_per_amount` float NOT NULL,
  `financial_assets_total_amount` int(11) NOT NULL,
  `financial_assets_total_per_amount` float NOT NULL,
  `added_on_date` date NOT NULL,
  `added_on_time` time NOT NULL
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
-- Table structure for table `fund_for_goals`
--

CREATE TABLE `fund_for_goals` (
  `fund_for_goals_id` int(11) NOT NULL,
  `personal_detail_id` int(11) NOT NULL,
  `annual_income_surplus` varchar(100) NOT NULL,
  `monthly_income_surplus` varchar(100) NOT NULL,
  `total_annual_fund` varchar(100) NOT NULL,
  `total_monthly_fund` varchar(100) NOT NULL,
  `access_annual_fund` varchar(100) NOT NULL,
  `access_monthly_fund` varchar(100) NOT NULL,
  `added_on_date` date NOT NULL,
  `added_on_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `goal_charity`
--

CREATE TABLE `goal_charity` (
  `goal_charity_id` int(11) NOT NULL,
  `personal_detail_id` int(11) NOT NULL,
  `goal_c_gift` varchar(500) NOT NULL,
  `added_on_date` date NOT NULL,
  `added_on_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `goal_charity_analysis`
--

CREATE TABLE `goal_charity_analysis` (
  `goal_charity_analysis_id` int(11) NOT NULL,
  `personal_detail_id` int(11) NOT NULL,
  `goal_c_analysis` varchar(500) NOT NULL,
  `added_on_date` date NOT NULL,
  `added_on_time` time NOT NULL
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
-- Table structure for table `goal_education`
--

CREATE TABLE `goal_education` (
  `goal_education_id` int(11) NOT NULL,
  `personal_detail_id` int(11) NOT NULL,
  `goal_edu_req_amt` varchar(100) NOT NULL,
  `goal_edu_rem_fund` varchar(100) NOT NULL,
  `goal_edu_req_investment` varchar(100) NOT NULL,
  `added_on_date` date NOT NULL,
  `added_on_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `goal_education_analysis`
--

CREATE TABLE `goal_education_analysis` (
  `goal_education_analysis_id` int(11) NOT NULL,
  `personal_detail_id` int(11) NOT NULL,
  `goal_edu_analysis` varchar(500) NOT NULL,
  `added_on_date` date NOT NULL,
  `added_on_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `goal_education_desc_amt`
--

CREATE TABLE `goal_education_desc_amt` (
  `goal_education_desc_amt_id` int(11) NOT NULL,
  `personal_detail_id` int(11) NOT NULL,
  `goal_edu_desc` varchar(500) NOT NULL,
  `goal_edu_amount` varchar(500) NOT NULL,
  `added_on_date` date NOT NULL,
  `added_on_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `goal_education_desc_future`
--

CREATE TABLE `goal_education_desc_future` (
  `goal_education_desc_amt_id` int(11) NOT NULL,
  `personal_detail_id` int(11) NOT NULL,
  `goal_edu_a_desc` varchar(500) NOT NULL,
  `goal_edu_a_amount` int(11) NOT NULL,
  `added_on_date` date NOT NULL,
  `added_on_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `goal_education_funding`
--

CREATE TABLE `goal_education_funding` (
  `goal_education_funding_id` int(11) NOT NULL,
  `personal_detail_id` int(11) NOT NULL,
  `goal_edu_fund` varchar(500) NOT NULL,
  `added_on_date` date NOT NULL,
  `added_on_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `goal_education_observation`
--

CREATE TABLE `goal_education_observation` (
  `goal_edu_observation_id` int(11) NOT NULL,
  `personal_detail_id` int(11) NOT NULL,
  `goal_edu_observation` varchar(500) NOT NULL,
  `added_on_date` date NOT NULL,
  `added_on_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `goal_education_recommendation`
--

CREATE TABLE `goal_education_recommendation` (
  `goal_edu_rec_id` int(11) NOT NULL,
  `personal_detail_id` int(11) NOT NULL,
  `goal_edu_recommendation` varchar(500) NOT NULL,
  `added_on_date` date NOT NULL,
  `added_on_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `goal_marriage`
--

CREATE TABLE `goal_marriage` (
  `goal_marriage_id` int(11) NOT NULL,
  `personal_detail_id` int(11) NOT NULL,
  `goal_m_req_amt` varchar(100) NOT NULL,
  `goal_m_rem_fund` varchar(100) NOT NULL,
  `goal_m_req_investment` varchar(100) NOT NULL,
  `added_on_date` date NOT NULL,
  `added_on_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `goal_marriage_amt`
--

CREATE TABLE `goal_marriage_amt` (
  `goal_marriage_amt_id` int(11) NOT NULL,
  `personal_detail_id` int(11) NOT NULL,
  `goal_m_a_desc` varchar(500) NOT NULL,
  `goal_m_amount` varchar(100) NOT NULL,
  `goal_m_f_amount` varchar(100) NOT NULL,
  `added_on_date` date NOT NULL,
  `added_on_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `goal_marriage_analysis`
--

CREATE TABLE `goal_marriage_analysis` (
  `goal_mrg_analysis_id` int(11) NOT NULL,
  `personal_detail_id` int(11) NOT NULL,
  `goal_m_analysis` int(11) NOT NULL,
  `added_on_date` date NOT NULL,
  `added_on_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `goal_marriage_desc_amt`
--

CREATE TABLE `goal_marriage_desc_amt` (
  `goal_mrg_desc_amt_id` int(11) NOT NULL,
  `personal_detail_id` int(11) NOT NULL,
  `goal_m_f_g_desc` varchar(500) NOT NULL,
  `goal_m_f_g_amount` varchar(100) NOT NULL,
  `added_on_date` date NOT NULL,
  `added_on_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `goal_marriage_funding`
--

CREATE TABLE `goal_marriage_funding` (
  `goal_mrg_funding_id` int(11) NOT NULL,
  `personal_detail_id` int(11) NOT NULL,
  `goal_m_fund` varchar(500) NOT NULL,
  `added_on_date` date NOT NULL,
  `added_on_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `goal_marriage_observation`
--

CREATE TABLE `goal_marriage_observation` (
  `goal_mrg_observation_id` int(11) NOT NULL,
  `personal_detail_id` int(11) NOT NULL,
  `goal_m_observation` varchar(500) NOT NULL,
  `added_on_date` date NOT NULL,
  `added_on_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `goal_marriage_recommendation`
--

CREATE TABLE `goal_marriage_recommendation` (
  `goal_mrg_rec_id` int(11) NOT NULL,
  `personal_detail_id` int(11) NOT NULL,
  `goal_m_recommendation` varchar(500) NOT NULL,
  `added_on_date` date NOT NULL,
  `added_on_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `goal_retirement`
--

CREATE TABLE `goal_retirement` (
  `goal_retirement_notes_id` int(11) NOT NULL,
  `personal_detail_id` int(11) NOT NULL,
  `goal_rt_notes` varchar(500) NOT NULL,
  `goal_rt_f_corpus_fund` varchar(100) NOT NULL,
  `goal_rt_remaining_fund` varchar(100) NOT NULL,
  `goal_rt_const` varchar(100) NOT NULL,
  `added_on_date` date NOT NULL,
  `added_on_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `goal_retirement_analysis`
--

CREATE TABLE `goal_retirement_analysis` (
  `goal_retirement_analysis_id` int(11) NOT NULL,
  `personal_detail_id` int(11) NOT NULL,
  `goal_rt_analysis` varchar(500) NOT NULL,
  `added_on_date` date NOT NULL,
  `added_on_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `goal_retirement_desc_amt`
--

CREATE TABLE `goal_retirement_desc_amt` (
  `goal_retirement_desc_amt_id` int(11) NOT NULL,
  `personal_detail_id` int(11) NOT NULL,
  `goal_rt_f_desc` varchar(500) NOT NULL,
  `goal_rt_f_amount` int(11) NOT NULL,
  `added_on_date` date NOT NULL,
  `added_on_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `goal_retirement_detail`
--

CREATE TABLE `goal_retirement_detail` (
  `goal_retirement_detail_id` int(11) NOT NULL,
  `personal_detail_id` int(11) NOT NULL,
  `goal_rt_desc` varchar(500) NOT NULL,
  `goal_rt_today` int(11) NOT NULL,
  `goal_rt_after` int(11) NOT NULL,
  `added_on_date` date NOT NULL,
  `added_on_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `goal_retirement_funding`
--

CREATE TABLE `goal_retirement_funding` (
  `goal_retirement_fund_id` int(11) NOT NULL,
  `personal_detail_id` int(11) NOT NULL,
  `goal_rt_fund` varchar(500) NOT NULL,
  `added_on_date` date NOT NULL,
  `added_on_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `goal_retirement_observation`
--

CREATE TABLE `goal_retirement_observation` (
  `goal_retirement_observation_id` int(11) NOT NULL,
  `personal_detail_id` int(11) NOT NULL,
  `goal_rt_observation` varchar(200) NOT NULL,
  `added_on_date` date NOT NULL,
  `added_on_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `goal_retirement_recommendation`
--

CREATE TABLE `goal_retirement_recommendation` (
  `goal_rec_id` int(11) NOT NULL,
  `personal_detail_id` int(11) NOT NULL,
  `goal_rt_recommendation` varchar(500) NOT NULL,
  `added_on_date` date NOT NULL,
  `added_on_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `income`
--

CREATE TABLE `income` (
  `income_id` int(11) NOT NULL,
  `personal_detail_id` int(11) NOT NULL,
  `income_description` varchar(500) NOT NULL,
  `current_per_income` float NOT NULL,
  `current_annualy_income` int(11) NOT NULL,
  `current_monthly_income` float NOT NULL,
  `rec_per_income` float NOT NULL,
  `rec_annualy_income` int(11) NOT NULL,
  `rec_monthly_income` float NOT NULL,
  `added_on_date` date NOT NULL,
  `added_on_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `insurance`
--

CREATE TABLE `insurance` (
  `insurance_id` int(11) NOT NULL,
  `personal_detail_id` int(11) NOT NULL,
  `insurance_description` varchar(500) NOT NULL,
  `current_per_insurance` float NOT NULL,
  `current_annualy_insurance` int(11) NOT NULL,
  `current_monthly_insurance` float NOT NULL,
  `rec_per_insurance` float NOT NULL,
  `rec_annualy_insurance` int(11) NOT NULL,
  `rec_monthly_insurance` float NOT NULL,
  `added_on_date` date NOT NULL,
  `added_on_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `investment_planning`
--

CREATE TABLE `investment_planning` (
  `investment_planning_id` int(11) NOT NULL,
  `personal_detail_id` int(11) NOT NULL,
  `current_total_amount` int(11) NOT NULL,
  `current_per_total` int(11) NOT NULL,
  `current_allocation_notes` varchar(500) NOT NULL,
  `proposed_total_amount` int(11) NOT NULL,
  `proposed_per_total` int(11) NOT NULL,
  `proposed_allocation_notes` varchar(500) NOT NULL,
  `cur_total_amount` int(11) NOT NULL,
  `cur_per_total` int(11) NOT NULL,
  `rec_total_amount` int(11) NOT NULL,
  `rec_per_total` int(11) NOT NULL,
  `rep_total_amount` int(11) NOT NULL,
  `rep_per_total` int(11) NOT NULL,
  `added_on_date` int(11) NOT NULL,
  `added_on_time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `liabilities`
--

CREATE TABLE `liabilities` (
  `liabilities_id` int(11) NOT NULL,
  `personal_detail_id` int(11) NOT NULL,
  `liabilities_name` int(11) NOT NULL,
  `liabilities_amount` int(11) NOT NULL,
  `liabilities_per_amount` float NOT NULL,
  `liabilities_total_amount` int(11) NOT NULL,
  `liabilities_total_per_amount` float NOT NULL,
  `added_on_date` date NOT NULL,
  `added_on_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `living_expense`
--

CREATE TABLE `living_expense` (
  `living_expense_id` int(11) NOT NULL,
  `personal_detail_id` int(11) NOT NULL,
  `living_expense_description` varchar(500) NOT NULL,
  `current_living_per_expense` float NOT NULL,
  `current_annualy_living_expense` int(11) NOT NULL,
  `current_monthly_living_expense` float NOT NULL,
  `rec_living_per_expense` float NOT NULL,
  `rec_annualy_living_expense` int(11) NOT NULL,
  `rec_monthly_living_expense` float NOT NULL,
  `added_on_date` date NOT NULL,
  `added_on_time` time NOT NULL
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

-- --------------------------------------------------------

--
-- Table structure for table `networth`
--

CREATE TABLE `networth` (
  `net_worth_id` int(11) NOT NULL,
  `personal_detail_id` int(11) NOT NULL,
  `total_assets_amount` int(11) NOT NULL,
  `total_assets_per_amount` float NOT NULL,
  `financial_assets_total_amount` int(11) NOT NULL,
  `financial_assets_total_per_amount` float NOT NULL,
  `tangible_assets_total_amount` int(11) NOT NULL,
  `tangible_assets_total_per_amount` float NOT NULL,
  `personal_assets_total_amount` int(11) NOT NULL,
  `personal_assets_total_per_amount` float NOT NULL,
  `retirement_assets_total_amount` int(11) NOT NULL,
  `retirement_assets_total_per_amount` float NOT NULL,
  `liabilities_total_amount` int(11) NOT NULL,
  `liabilities_total_per_amount` float NOT NULL,
  `all_assets_total_amount` int(11) NOT NULL,
  `all_assets_total_per_amount` float NOT NULL,
  `net_worth_total_amount` int(11) NOT NULL,
  `net_worth_total_per_amount` float NOT NULL,
  `notes` varchar(5000) NOT NULL,
  `added_on_date` date NOT NULL,
  `added_on_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `net_worth_assets`
--

CREATE TABLE `net_worth_assets` (
  `net_worth_assets_id` int(11) NOT NULL,
  `personal_detail_id` int(11) NOT NULL,
  `assets_name` varchar(1000) NOT NULL,
  `assets_amount` int(11) NOT NULL,
  `assets_per_amount` float NOT NULL,
  `assets_total_amount` int(11) NOT NULL,
  `assets_total_per_amount` float NOT NULL,
  `added_on_date` date NOT NULL,
  `added_on_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `other_expense`
--

CREATE TABLE `other_expense` (
  `other_exp_id` int(11) NOT NULL,
  `personal_detail_id` int(11) NOT NULL,
  `other_exp_description` varchar(500) NOT NULL,
  `current_per_other_exp` float NOT NULL,
  `current_annualy_other_exp` int(11) NOT NULL,
  `current_monthly_other_exp` float NOT NULL,
  `rec_per_other_exp` float NOT NULL,
  `rec_annualy_other_exp` int(11) NOT NULL,
  `rec_monthly_other_exp` float NOT NULL,
  `added_on_date` date NOT NULL,
  `added_on_time` time NOT NULL
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

-- --------------------------------------------------------

--
-- Table structure for table `personal_assets`
--

CREATE TABLE `personal_assets` (
  `personal_assets_id` int(11) NOT NULL,
  `personal_detail_id` int(11) NOT NULL,
  `personal_assets_name` int(11) NOT NULL,
  `personal_assets_amount` int(11) NOT NULL,
  `personal_assets_per_amount` float NOT NULL,
  `personal_assets_total_amount` int(11) NOT NULL,
  `personal_assets_total_per_amount` float NOT NULL,
  `added_on_date` date NOT NULL,
  `added_on_time` time NOT NULL
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
-- Table structure for table `proposed_assets_allocation`
--

CREATE TABLE `proposed_assets_allocation` (
  `proposed_assets_id` int(11) NOT NULL,
  `personal_detail_id` int(11) NOT NULL,
  `proposed_class` varchar(255) NOT NULL,
  `proposed_amount` varchar(100) NOT NULL,
  `proposed_per_assets` float NOT NULL,
  `added_on_date` date NOT NULL,
  `added_on_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `protection_planning`
--

CREATE TABLE `protection_planning` (
  `protection_planning_id` int(11) NOT NULL,
  `personal_detail_id` int(11) NOT NULL,
  `insurance_policy` varchar(50) NOT NULL,
  `annual_premium` varchar(50) NOT NULL,
  `analysis` varchar(50) NOT NULL,
  `life_policy` varchar(50) NOT NULL,
  `annual_life_insurance` varchar(50) NOT NULL,
  `added_on_date` date NOT NULL,
  `added_on_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rep_assets_allocation`
--

CREATE TABLE `rep_assets_allocation` (
  `rep_assets_allocation_id` int(11) NOT NULL,
  `personal_detail_id` int(11) NOT NULL,
  `assets_class` varchar(255) NOT NULL,
  `cur_assets_amount` varchar(100) NOT NULL,
  `cur_per_assets` float NOT NULL,
  `rec_assets_amount` varchar(100) NOT NULL,
  `rec_per_assets` float NOT NULL,
  `rep_assets_amount` varchar(100) NOT NULL,
  `rep_per_assets` float NOT NULL,
  `added_on_date` date NOT NULL,
  `added_on_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `retirement_assets`
--

CREATE TABLE `retirement_assets` (
  `retirement_assets_id` int(11) NOT NULL,
  `personal_detail_id` varchar(255) NOT NULL,
  `retirement_assets_name` int(11) NOT NULL,
  `retirement_assets_amount` int(11) NOT NULL,
  `retirement_assets_per_amount` float NOT NULL,
  `retirement_assets_total_amount` int(11) NOT NULL,
  `retirement_assets_total_per_amount` float NOT NULL,
  `added_on_date` date NOT NULL,
  `added_on_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `saving`
--

CREATE TABLE `saving` (
  `saving_id` int(11) NOT NULL,
  `personal_detail_id` int(11) NOT NULL,
  `current_per_saving` float NOT NULL,
  `current_annualy_saving` int(11) NOT NULL,
  `current_monthly_saving` float NOT NULL,
  `rec_per_saving` float NOT NULL,
  `rec_annualy_saving` int(11) NOT NULL,
  `rec_monthly_saving` float NOT NULL,
  `added_on_date` date NOT NULL,
  `added_on_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tangible_assets`
--

CREATE TABLE `tangible_assets` (
  ` tangible_assets_id` int(11) NOT NULL,
  `personal_detail_id` int(11) NOT NULL,
  ` tangible_assets_name` varchar(1000) NOT NULL,
  ` tangible_assets_amount` int(11) NOT NULL,
  ` tangible_assets_per_amount` float NOT NULL,
  ` tangible_assets_total_amount` int(11) NOT NULL,
  `tangible_assets_total_per_amount` float NOT NULL,
  `added_on_date` date NOT NULL,
  `added_on_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tax`
--

CREATE TABLE `tax` (
  `tax_id` int(11) NOT NULL,
  `personal_detail_id` int(11) NOT NULL,
  `tax_description` varchar(500) NOT NULL,
  `current_per_tax` float NOT NULL,
  `current_annualy_tax` int(11) NOT NULL,
  `current_monthly_tax` float NOT NULL,
  `rec_per_tax` float NOT NULL,
  `rec_annualy_tax` int(11) NOT NULL,
  `rec_monthly_tax` float NOT NULL,
  `added_on_date` date NOT NULL,
  `added_on_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_appointment`
--
ALTER TABLE `add_appointment`
  ADD PRIMARY KEY (`appointment_id`);

--
-- Indexes for table `add_client`
--
ALTER TABLE `add_client`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `add_expense`
--
ALTER TABLE `add_expense`
  ADD PRIMARY KEY (`expense_id`);

--
-- Indexes for table `add_income`
--
ALTER TABLE `add_income`
  ADD PRIMARY KEY (`income_id`);

--
-- Indexes for table `add_video`
--
ALTER TABLE `add_video`
  ADD PRIMARY KEY (`video_id`);

--
-- Indexes for table `after_saving`
--
ALTER TABLE `after_saving`
  ADD PRIMARY KEY (`after_saving_id`);

--
-- Indexes for table `allocated_fund`
--
ALTER TABLE `allocated_fund`
  ADD PRIMARY KEY (`allocated_fund_id`);

--
-- Indexes for table `annexure_1`
--
ALTER TABLE `annexure_1`
  ADD PRIMARY KEY (`annexure_1_id`);

--
-- Indexes for table `annexure_2`
--
ALTER TABLE `annexure_2`
  ADD PRIMARY KEY (`annexure_2_id`);

--
-- Indexes for table `assumption`
--
ALTER TABLE `assumption`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `before_saving`
--
ALTER TABLE `before_saving`
  ADD PRIMARY KEY (`before_saving_id`);

--
-- Indexes for table `cash_flow`
--
ALTER TABLE `cash_flow`
  ADD PRIMARY KEY (`cash_flow_id`);

--
-- Indexes for table `contribute_assets`
--
ALTER TABLE `contribute_assets`
  ADD PRIMARY KEY (`contribute_assets_id`);

--
-- Indexes for table `contribute_emergency_fund`
--
ALTER TABLE `contribute_emergency_fund`
  ADD PRIMARY KEY (`fund_id`);

--
-- Indexes for table `course_master`
--
ALTER TABLE `course_master`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `course_payment`
--
ALTER TABLE `course_payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `cur_assets_allocation`
--
ALTER TABLE `cur_assets_allocation`
  ADD PRIMARY KEY (`cur_allocation_id`);

--
-- Indexes for table `emergency_fund`
--
ALTER TABLE `emergency_fund`
  ADD PRIMARY KEY (`fund_id`);

--
-- Indexes for table `emergency_fund_catg`
--
ALTER TABLE `emergency_fund_catg`
  ADD PRIMARY KEY (`fund_catg_id`);

--
-- Indexes for table `emi`
--
ALTER TABLE `emi`
  ADD PRIMARY KEY (`emi_id`);

--
-- Indexes for table `family_detail`
--
ALTER TABLE `family_detail`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `financial_assets`
--
ALTER TABLE `financial_assets`
  ADD PRIMARY KEY (`financial_assets_id`);

--
-- Indexes for table `financial_goal`
--
ALTER TABLE `financial_goal`
  ADD PRIMARY KEY (`fg_id`);

--
-- Indexes for table `fund_for_goals`
--
ALTER TABLE `fund_for_goals`
  ADD PRIMARY KEY (`fund_for_goals_id`);

--
-- Indexes for table `goal_charity`
--
ALTER TABLE `goal_charity`
  ADD PRIMARY KEY (`goal_charity_id`);

--
-- Indexes for table `goal_charity_analysis`
--
ALTER TABLE `goal_charity_analysis`
  ADD PRIMARY KEY (`goal_charity_analysis_id`);

--
-- Indexes for table `goal_detail`
--
ALTER TABLE `goal_detail`
  ADD PRIMARY KEY (`g_id`);

--
-- Indexes for table `goal_education`
--
ALTER TABLE `goal_education`
  ADD PRIMARY KEY (`goal_education_id`);

--
-- Indexes for table `goal_education_analysis`
--
ALTER TABLE `goal_education_analysis`
  ADD PRIMARY KEY (`goal_education_analysis_id`);

--
-- Indexes for table `goal_education_desc_amt`
--
ALTER TABLE `goal_education_desc_amt`
  ADD PRIMARY KEY (`goal_education_desc_amt_id`);

--
-- Indexes for table `goal_education_desc_future`
--
ALTER TABLE `goal_education_desc_future`
  ADD PRIMARY KEY (`goal_education_desc_amt_id`);

--
-- Indexes for table `goal_education_funding`
--
ALTER TABLE `goal_education_funding`
  ADD PRIMARY KEY (`goal_education_funding_id`);

--
-- Indexes for table `goal_education_observation`
--
ALTER TABLE `goal_education_observation`
  ADD PRIMARY KEY (`goal_edu_observation_id`);

--
-- Indexes for table `goal_education_recommendation`
--
ALTER TABLE `goal_education_recommendation`
  ADD PRIMARY KEY (`goal_edu_rec_id`);

--
-- Indexes for table `goal_marriage`
--
ALTER TABLE `goal_marriage`
  ADD PRIMARY KEY (`goal_marriage_id`);

--
-- Indexes for table `goal_marriage_amt`
--
ALTER TABLE `goal_marriage_amt`
  ADD PRIMARY KEY (`goal_marriage_amt_id`);

--
-- Indexes for table `goal_marriage_analysis`
--
ALTER TABLE `goal_marriage_analysis`
  ADD PRIMARY KEY (`goal_mrg_analysis_id`);

--
-- Indexes for table `goal_marriage_desc_amt`
--
ALTER TABLE `goal_marriage_desc_amt`
  ADD PRIMARY KEY (`goal_mrg_desc_amt_id`);

--
-- Indexes for table `goal_marriage_funding`
--
ALTER TABLE `goal_marriage_funding`
  ADD PRIMARY KEY (`goal_mrg_funding_id`);

--
-- Indexes for table `goal_marriage_observation`
--
ALTER TABLE `goal_marriage_observation`
  ADD PRIMARY KEY (`goal_mrg_observation_id`);

--
-- Indexes for table `goal_marriage_recommendation`
--
ALTER TABLE `goal_marriage_recommendation`
  ADD PRIMARY KEY (`goal_mrg_rec_id`);

--
-- Indexes for table `goal_retirement`
--
ALTER TABLE `goal_retirement`
  ADD PRIMARY KEY (`goal_retirement_notes_id`);

--
-- Indexes for table `goal_retirement_analysis`
--
ALTER TABLE `goal_retirement_analysis`
  ADD PRIMARY KEY (`goal_retirement_analysis_id`);

--
-- Indexes for table `goal_retirement_desc_amt`
--
ALTER TABLE `goal_retirement_desc_amt`
  ADD PRIMARY KEY (`goal_retirement_desc_amt_id`);

--
-- Indexes for table `goal_retirement_detail`
--
ALTER TABLE `goal_retirement_detail`
  ADD PRIMARY KEY (`goal_retirement_detail_id`);

--
-- Indexes for table `goal_retirement_funding`
--
ALTER TABLE `goal_retirement_funding`
  ADD PRIMARY KEY (`goal_retirement_fund_id`);

--
-- Indexes for table `goal_retirement_observation`
--
ALTER TABLE `goal_retirement_observation`
  ADD PRIMARY KEY (`goal_retirement_observation_id`);

--
-- Indexes for table `goal_retirement_recommendation`
--
ALTER TABLE `goal_retirement_recommendation`
  ADD PRIMARY KEY (`goal_rec_id`);

--
-- Indexes for table `income`
--
ALTER TABLE `income`
  ADD PRIMARY KEY (`income_id`);

--
-- Indexes for table `insurance`
--
ALTER TABLE `insurance`
  ADD PRIMARY KEY (`insurance_id`);

--
-- Indexes for table `investment_planning`
--
ALTER TABLE `investment_planning`
  ADD PRIMARY KEY (`investment_planning_id`);

--
-- Indexes for table `liabilities`
--
ALTER TABLE `liabilities`
  ADD PRIMARY KEY (`liabilities_id`);

--
-- Indexes for table `living_expense`
--
ALTER TABLE `living_expense`
  ADD PRIMARY KEY (`living_expense_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`l_id`);

--
-- Indexes for table `networth`
--
ALTER TABLE `networth`
  ADD PRIMARY KEY (`net_worth_id`);

--
-- Indexes for table `net_worth_assets`
--
ALTER TABLE `net_worth_assets`
  ADD PRIMARY KEY (`net_worth_assets_id`);

--
-- Indexes for table `other_expense`
--
ALTER TABLE `other_expense`
  ADD PRIMARY KEY (`other_exp_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `personal_assets`
--
ALTER TABLE `personal_assets`
  ADD PRIMARY KEY (`personal_assets_id`);

--
-- Indexes for table `personal_detail`
--
ALTER TABLE `personal_detail`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `proposed_assets_allocation`
--
ALTER TABLE `proposed_assets_allocation`
  ADD PRIMARY KEY (`proposed_assets_id`);

--
-- Indexes for table `protection_planning`
--
ALTER TABLE `protection_planning`
  ADD PRIMARY KEY (`protection_planning_id`);

--
-- Indexes for table `rep_assets_allocation`
--
ALTER TABLE `rep_assets_allocation`
  ADD PRIMARY KEY (`rep_assets_allocation_id`);

--
-- Indexes for table `retirement_assets`
--
ALTER TABLE `retirement_assets`
  ADD PRIMARY KEY (`retirement_assets_id`);

--
-- Indexes for table `saving`
--
ALTER TABLE `saving`
  ADD PRIMARY KEY (`saving_id`);

--
-- Indexes for table `tangible_assets`
--
ALTER TABLE `tangible_assets`
  ADD PRIMARY KEY (` tangible_assets_id`);

--
-- Indexes for table `tax`
--
ALTER TABLE `tax`
  ADD PRIMARY KEY (`tax_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_appointment`
--
ALTER TABLE `add_appointment`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `add_client`
--
ALTER TABLE `add_client`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `add_expense`
--
ALTER TABLE `add_expense`
  MODIFY `expense_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `add_income`
--
ALTER TABLE `add_income`
  MODIFY `income_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `add_video`
--
ALTER TABLE `add_video`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `after_saving`
--
ALTER TABLE `after_saving`
  MODIFY `after_saving_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `allocated_fund`
--
ALTER TABLE `allocated_fund`
  MODIFY `allocated_fund_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `annexure_1`
--
ALTER TABLE `annexure_1`
  MODIFY `annexure_1_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `annexure_2`
--
ALTER TABLE `annexure_2`
  MODIFY `annexure_2_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `assumption`
--
ALTER TABLE `assumption`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `before_saving`
--
ALTER TABLE `before_saving`
  MODIFY `before_saving_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cash_flow`
--
ALTER TABLE `cash_flow`
  MODIFY `cash_flow_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contribute_assets`
--
ALTER TABLE `contribute_assets`
  MODIFY `contribute_assets_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contribute_emergency_fund`
--
ALTER TABLE `contribute_emergency_fund`
  MODIFY `fund_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `course_master`
--
ALTER TABLE `course_master`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `course_payment`
--
ALTER TABLE `course_payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cur_assets_allocation`
--
ALTER TABLE `cur_assets_allocation`
  MODIFY `cur_allocation_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emergency_fund`
--
ALTER TABLE `emergency_fund`
  MODIFY `fund_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emergency_fund_catg`
--
ALTER TABLE `emergency_fund_catg`
  MODIFY `fund_catg_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emi`
--
ALTER TABLE `emi`
  MODIFY `emi_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `family_detail`
--
ALTER TABLE `family_detail`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `financial_assets`
--
ALTER TABLE `financial_assets`
  MODIFY `financial_assets_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `financial_goal`
--
ALTER TABLE `financial_goal`
  MODIFY `fg_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fund_for_goals`
--
ALTER TABLE `fund_for_goals`
  MODIFY `fund_for_goals_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `goal_charity`
--
ALTER TABLE `goal_charity`
  MODIFY `goal_charity_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `goal_charity_analysis`
--
ALTER TABLE `goal_charity_analysis`
  MODIFY `goal_charity_analysis_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `goal_detail`
--
ALTER TABLE `goal_detail`
  MODIFY `g_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `goal_education`
--
ALTER TABLE `goal_education`
  MODIFY `goal_education_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `goal_education_analysis`
--
ALTER TABLE `goal_education_analysis`
  MODIFY `goal_education_analysis_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `goal_education_desc_amt`
--
ALTER TABLE `goal_education_desc_amt`
  MODIFY `goal_education_desc_amt_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `goal_education_desc_future`
--
ALTER TABLE `goal_education_desc_future`
  MODIFY `goal_education_desc_amt_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `goal_education_funding`
--
ALTER TABLE `goal_education_funding`
  MODIFY `goal_education_funding_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `goal_education_observation`
--
ALTER TABLE `goal_education_observation`
  MODIFY `goal_edu_observation_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `goal_education_recommendation`
--
ALTER TABLE `goal_education_recommendation`
  MODIFY `goal_edu_rec_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `goal_marriage`
--
ALTER TABLE `goal_marriage`
  MODIFY `goal_marriage_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `goal_marriage_amt`
--
ALTER TABLE `goal_marriage_amt`
  MODIFY `goal_marriage_amt_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `goal_marriage_analysis`
--
ALTER TABLE `goal_marriage_analysis`
  MODIFY `goal_mrg_analysis_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `goal_marriage_desc_amt`
--
ALTER TABLE `goal_marriage_desc_amt`
  MODIFY `goal_mrg_desc_amt_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `goal_marriage_funding`
--
ALTER TABLE `goal_marriage_funding`
  MODIFY `goal_mrg_funding_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `goal_marriage_observation`
--
ALTER TABLE `goal_marriage_observation`
  MODIFY `goal_mrg_observation_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `goal_marriage_recommendation`
--
ALTER TABLE `goal_marriage_recommendation`
  MODIFY `goal_mrg_rec_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `goal_retirement`
--
ALTER TABLE `goal_retirement`
  MODIFY `goal_retirement_notes_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `goal_retirement_analysis`
--
ALTER TABLE `goal_retirement_analysis`
  MODIFY `goal_retirement_analysis_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `goal_retirement_desc_amt`
--
ALTER TABLE `goal_retirement_desc_amt`
  MODIFY `goal_retirement_desc_amt_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `goal_retirement_detail`
--
ALTER TABLE `goal_retirement_detail`
  MODIFY `goal_retirement_detail_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `goal_retirement_funding`
--
ALTER TABLE `goal_retirement_funding`
  MODIFY `goal_retirement_fund_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `goal_retirement_observation`
--
ALTER TABLE `goal_retirement_observation`
  MODIFY `goal_retirement_observation_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `goal_retirement_recommendation`
--
ALTER TABLE `goal_retirement_recommendation`
  MODIFY `goal_rec_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `income`
--
ALTER TABLE `income`
  MODIFY `income_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `insurance`
--
ALTER TABLE `insurance`
  MODIFY `insurance_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `investment_planning`
--
ALTER TABLE `investment_planning`
  MODIFY `investment_planning_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `liabilities`
--
ALTER TABLE `liabilities`
  MODIFY `liabilities_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `living_expense`
--
ALTER TABLE `living_expense`
  MODIFY `living_expense_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `l_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `networth`
--
ALTER TABLE `networth`
  MODIFY `net_worth_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `net_worth_assets`
--
ALTER TABLE `net_worth_assets`
  MODIFY `net_worth_assets_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `other_expense`
--
ALTER TABLE `other_expense`
  MODIFY `other_exp_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_assets`
--
ALTER TABLE `personal_assets`
  MODIFY `personal_assets_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_detail`
--
ALTER TABLE `personal_detail`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `proposed_assets_allocation`
--
ALTER TABLE `proposed_assets_allocation`
  MODIFY `proposed_assets_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `protection_planning`
--
ALTER TABLE `protection_planning`
  MODIFY `protection_planning_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rep_assets_allocation`
--
ALTER TABLE `rep_assets_allocation`
  MODIFY `rep_assets_allocation_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `retirement_assets`
--
ALTER TABLE `retirement_assets`
  MODIFY `retirement_assets_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `saving`
--
ALTER TABLE `saving`
  MODIFY `saving_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tangible_assets`
--
ALTER TABLE `tangible_assets`
  MODIFY ` tangible_assets_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tax`
--
ALTER TABLE `tax`
  MODIFY `tax_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
