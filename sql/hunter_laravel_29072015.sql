-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2015 at 01:18 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hunter_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE IF NOT EXISTS `cities` (
  `id` int(10) unsigned NOT NULL,
  `country_id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `country_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'Ho Chi Minh', '2015-07-29 03:28:47', '2015-07-29 03:28:47'),
(2, 1, 'Ha Noi', '2015-07-29 03:28:47', '2015-07-29 03:28:47'),
(3, 1, 'Hue', '2015-07-29 03:28:47', '2015-07-29 03:28:47'),
(4, 2, 'Paris', '2015-07-29 03:28:47', '2015-07-29 03:28:47'),
(5, 3, 'London', '2015-07-29 03:28:47', '2015-07-29 03:28:47');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE IF NOT EXISTS `companies` (
  `id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `fullname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `contact_gender` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `contact_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country_id` int(10) unsigned NOT NULL,
  `city_id` int(10) unsigned NOT NULL,
  `profile_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `fax` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fax_number` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `company_size` int(11) NOT NULL,
  `about_us` longtext COLLATE utf8_unicode_ci NOT NULL,
  `why_join_us` longtext COLLATE utf8_unicode_ci NOT NULL,
  `website` text COLLATE utf8_unicode_ci NOT NULL,
  `video_url` text COLLATE utf8_unicode_ci NOT NULL,
  `logo` text COLLATE utf8_unicode_ci NOT NULL,
  `available_job` int(11) NOT NULL,
  `limit_job` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `companies_creatives`
--

CREATE TABLE IF NOT EXISTS `companies_creatives` (
  `id` int(10) unsigned NOT NULL,
  `company_id` int(10) unsigned NOT NULL,
  `apply_id` int(10) unsigned NOT NULL,
  `is_applicant` tinyint(1) NOT NULL,
  `is_stared` tinyint(1) NOT NULL,
  `saved_date` datetime NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE IF NOT EXISTS `countries` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Vietnam', '2015-07-29 03:28:46', '2015-07-29 03:28:46'),
(2, 'France', '2015-07-29 03:28:47', '2015-07-29 03:28:47'),
(3, 'England', '2015-07-29 03:28:47', '2015-07-29 03:28:47'),
(4, 'China', '2015-07-29 03:28:47', '2015-07-29 03:28:47');

-- --------------------------------------------------------

--
-- Table structure for table `creatives`
--

CREATE TABLE IF NOT EXISTS `creatives` (
  `id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `occupation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country_id` int(10) unsigned NOT NULL,
  `city_id` int(10) unsigned NOT NULL,
  `birthdate` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `about_me` longtext COLLATE utf8_unicode_ci NOT NULL,
  `exp_years` int(11) NOT NULL,
  `CV` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `available_art` int(11) NOT NULL,
  `limit_art` int(11) NOT NULL,
  `skills` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `creatives_achievements`
--

CREATE TABLE IF NOT EXISTS `creatives_achievements` (
  `id` int(10) unsigned NOT NULL,
  `creative_id` int(10) unsigned NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `creative_field` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `website` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `creatives_art_histories`
--

CREATE TABLE IF NOT EXISTS `creatives_art_histories` (
  `id` int(10) unsigned NOT NULL,
  `art_id` int(10) unsigned NOT NULL,
  `creative_id` int(10) unsigned NOT NULL,
  `action` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `creatives_coverletters`
--

CREATE TABLE IF NOT EXISTS `creatives_coverletters` (
  `id` int(10) unsigned NOT NULL,
  `creative_id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `detail` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `creatives_education`
--

CREATE TABLE IF NOT EXISTS `creatives_education` (
  `id` int(10) unsigned NOT NULL,
  `creative_id` int(10) unsigned NOT NULL,
  `school` text COLLATE utf8_unicode_ci NOT NULL,
  `degree` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `major` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `from_year` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `to_year` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `creatives_job_experiences`
--

CREATE TABLE IF NOT EXISTS `creatives_job_experiences` (
  `id` int(10) unsigned NOT NULL,
  `creative_id` int(10) unsigned NOT NULL,
  `company` text COLLATE utf8_unicode_ci NOT NULL,
  `website` text COLLATE utf8_unicode_ci NOT NULL,
  `job_title` text COLLATE utf8_unicode_ci NOT NULL,
  `country_id` int(10) unsigned NOT NULL,
  `city_id` int(10) unsigned NOT NULL,
  `from_year` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `to_year` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `creatives_language_skills`
--

CREATE TABLE IF NOT EXISTS `creatives_language_skills` (
  `id` int(10) unsigned NOT NULL,
  `creative_id` int(10) unsigned NOT NULL,
  `lang_id` int(10) unsigned NOT NULL,
  `level` enum('1','2','3','4','5') COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `creatives_software_skills`
--

CREATE TABLE IF NOT EXISTS `creatives_software_skills` (
  `id` int(10) unsigned NOT NULL,
  `creative_id` int(10) unsigned NOT NULL,
  `software_id` int(10) unsigned NOT NULL,
  `rate` enum('1','2','3','4','5') COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `creative_arts`
--

CREATE TABLE IF NOT EXISTS `creative_arts` (
  `id` int(10) unsigned NOT NULL,
  `creative_id` int(10) unsigned NOT NULL,
  `work_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `work_description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `end_client` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `your_role` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `co-owner` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `their_role` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `upload_file` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE IF NOT EXISTS `jobs` (
  `id` int(10) unsigned NOT NULL,
  `company_id` int(10) unsigned NOT NULL,
  `job_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `creative_field` text COLLATE utf8_unicode_ci NOT NULL,
  `location` text COLLATE utf8_unicode_ci NOT NULL,
  `exp_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pre_lang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `res_lang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `salary_from` int(11) NOT NULL,
  `salary_to` int(11) NOT NULL,
  `salary` enum('remember','negotiate') COLLATE utf8_unicode_ci NOT NULL,
  `contact_gender` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `contact_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `apply_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `job_desc` longtext COLLATE utf8_unicode_ci NOT NULL,
  `apply_reason` longtext COLLATE utf8_unicode_ci NOT NULL,
  `status_id` int(10) unsigned NOT NULL,
  `like_stats` int(11) NOT NULL,
  `view_stats` int(11) NOT NULL,
  `is_hot` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_alerts`
--

CREATE TABLE IF NOT EXISTS `job_alerts` (
  `id` int(10) unsigned NOT NULL,
  `creative_id` int(10) unsigned NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `frequency` enum('Daily','Once per week','Once per month') COLLATE utf8_unicode_ci NOT NULL,
  `creative_fields` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `company_keywords` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pre_lang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `min_salary` int(11) NOT NULL,
  `max_salary` int(11) NOT NULL,
  `job_type_id` int(10) unsigned NOT NULL,
  `job_level_id` int(10) unsigned NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_applicants`
--

CREATE TABLE IF NOT EXISTS `job_applicants` (
  `id` int(10) unsigned NOT NULL,
  `creative_id` int(10) unsigned NOT NULL,
  `job_id` int(10) unsigned NOT NULL,
  `resume_url` text COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `attached_CV` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sample_work_1_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sample_work_2_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sample_work_3_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `coverletter` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_histories`
--

CREATE TABLE IF NOT EXISTS `job_histories` (
  `id` int(10) unsigned NOT NULL,
  `job_id` int(10) unsigned NOT NULL,
  `action` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_levels`
--

CREATE TABLE IF NOT EXISTS `job_levels` (
  `id` int(10) unsigned NOT NULL,
  `job_id` int(10) unsigned NOT NULL,
  `level_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_skills`
--

CREATE TABLE IF NOT EXISTS `job_skills` (
  `id` int(10) unsigned NOT NULL,
  `job_id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_types`
--

CREATE TABLE IF NOT EXISTS `job_types` (
  `id` int(10) unsigned NOT NULL,
  `job_id` int(10) unsigned NOT NULL,
  `type_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE IF NOT EXISTS `languages` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'English', '2015-07-29 03:28:47', '2015-07-29 03:28:47'),
(2, 'Vietnamese', '2015-07-29 03:28:47', '2015-07-29 03:28:47'),
(3, 'French', '2015-07-29 03:28:47', '2015-07-29 03:28:47');

-- --------------------------------------------------------

--
-- Table structure for table `levels`
--

CREATE TABLE IF NOT EXISTS `levels` (
  `id` int(10) unsigned NOT NULL,
  `name` char(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `levels`
--

INSERT INTO `levels` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Entry', '2015-07-29 03:28:47', '2015-07-29 03:28:47'),
(2, 'Junior', '2015-07-29 03:28:47', '2015-07-29 03:28:47'),
(3, 'Senior', '2015-07-29 03:28:47', '2015-07-29 03:28:47'),
(4, 'Director / Manager', '2015-07-29 03:28:47', '2015-07-29 03:28:47');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(10) unsigned NOT NULL,
  `subject` text COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `sender_id` int(10) unsigned NOT NULL,
  `receiver_id` int(10) unsigned NOT NULL,
  `sender_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `receiver_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `send_date` datetime NOT NULL,
  `received_date` datetime NOT NULL,
  `status` enum('Sent','Unread','Read') COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_07_17_055504_create_companies_table', 1),
('2015_07_17_055523_create_creatives_table', 1),
('2015_07_17_060642_create_countries_table', 1),
('2015_07_17_060700_create_cities_table', 1),
('2015_07_17_060715_create_languages_table', 1),
('2015_07_17_061020_create_jobs_table', 1),
('2015_07_25_040628_create_job_applicants_table', 1),
('2015_07_25_090901_create_creatives_coverletters_table', 1),
('2015_07_25_162708_create_creatives_arts_table', 1),
('2015_07_25_164501_create_creatives_art_histories_table', 1),
('2015_07_25_170002_create_creatives_software_skills_table', 1),
('2015_07_25_170132_create_softwares_table', 1),
('2015_07_25_190917_create_creatives_language_skills_table', 1),
('2015_07_25_191920_create_creatives_job_experiences_table', 1),
('2015_07_25_191949_create_creatives_education_table', 1),
('2015_07_25_192018_create_creatives_achievements_table', 1),
('2015_07_25_192058_create_job_skills_table', 1),
('2015_07_25_192117_create_job_histories_table', 1),
('2015_07_25_192201_create_job_levels_table', 1),
('2015_07_25_192255_create_job_types_table', 1),
('2015_07_25_203015_create_subcribes_table', 1),
('2015_07_25_203105_create_messages_table', 1),
('2015_07_25_203220_create_job_alerts_table', 1),
('2015_07_25_203425_create_companies_creatives_table', 1),
('2015_07_29_100705_create_levels_table', 1),
('2015_07_29_100713_create_types_table', 1),
('2015_07_29_101022_create_statuses_table', 1),
('2015_07_29_101257_create_roles_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) unsigned NOT NULL,
  `name` char(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2015-07-29 03:28:46', '2015-07-29 03:28:46'),
(2, 'Company', '2015-07-29 03:28:46', '2015-07-29 03:28:46'),
(3, 'Creative', '2015-07-29 03:28:46', '2015-07-29 03:28:46');

-- --------------------------------------------------------

--
-- Table structure for table `softwares`
--

CREATE TABLE IF NOT EXISTS `softwares` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `softwares`
--

INSERT INTO `softwares` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Adobe Illustrator', '', '2015-07-29 03:28:47', '2015-07-29 03:28:47'),
(2, 'Adobe Photoshop', '', '2015-07-29 03:28:47', '2015-07-29 03:28:47'),
(3, 'Adobe Indesign', '', '2015-07-29 03:28:47', '2015-07-29 03:28:47');

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE IF NOT EXISTS `statuses` (
  `id` int(10) unsigned NOT NULL,
  `name` char(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Active', '2015-07-29 03:28:46', '2015-07-29 03:28:46'),
(2, 'Inactive', '2015-07-29 03:28:46', '2015-07-29 03:28:46'),
(3, 'Expired', '2015-07-29 03:28:46', '2015-07-29 03:28:46');

-- --------------------------------------------------------

--
-- Table structure for table `subcribes`
--

CREATE TABLE IF NOT EXISTS `subcribes` (
  `id` int(10) unsigned NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE IF NOT EXISTS `types` (
  `id` int(10) unsigned NOT NULL,
  `name` char(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Full-time', '2015-07-29 03:28:47', '2015-07-29 03:28:47'),
(2, 'Part-time', '2015-07-29 03:28:47', '2015-07-29 03:28:47'),
(3, 'Contract', '2015-07-29 03:28:47', '2015-07-29 03:28:47'),
(4, 'Intern', '2015-07-29 03:28:47', '2015-07-29 03:28:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  `status_id` int(10) unsigned NOT NULL,
  `activation_code` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `is_searchable` tinyint(1) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role_id`, `status_id`, `activation_code`, `is_searchable`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Trang', 'trang@example.com', '$2y$10$DHiFqSPjomJq4vvrVAzEJ.xb4e9182OFQap3YmRnSH6MOAuCVZl8C', 1, 1, '', 0, NULL, '2015-07-29 03:28:46', '2015-07-29 03:28:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`), ADD KEY `cities_country_id_index` (`country_id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`), ADD KEY `companies_user_id_index` (`user_id`), ADD KEY `companies_country_id_index` (`country_id`), ADD KEY `companies_city_id_index` (`city_id`);

--
-- Indexes for table `companies_creatives`
--
ALTER TABLE `companies_creatives`
  ADD PRIMARY KEY (`id`), ADD KEY `companies_creatives_company_id_index` (`company_id`), ADD KEY `companies_creatives_apply_id_index` (`apply_id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `creatives`
--
ALTER TABLE `creatives`
  ADD PRIMARY KEY (`id`), ADD KEY `creatives_user_id_index` (`user_id`), ADD KEY `creatives_country_id_index` (`country_id`), ADD KEY `creatives_city_id_index` (`city_id`);

--
-- Indexes for table `creatives_achievements`
--
ALTER TABLE `creatives_achievements`
  ADD PRIMARY KEY (`id`), ADD KEY `creatives_achievements_creative_id_index` (`creative_id`);

--
-- Indexes for table `creatives_art_histories`
--
ALTER TABLE `creatives_art_histories`
  ADD PRIMARY KEY (`id`), ADD KEY `creatives_art_histories_art_id_index` (`art_id`), ADD KEY `creatives_art_histories_creative_id_index` (`creative_id`);

--
-- Indexes for table `creatives_coverletters`
--
ALTER TABLE `creatives_coverletters`
  ADD PRIMARY KEY (`id`), ADD KEY `creatives_coverletters_creative_id_index` (`creative_id`);

--
-- Indexes for table `creatives_education`
--
ALTER TABLE `creatives_education`
  ADD PRIMARY KEY (`id`), ADD KEY `creatives_education_creative_id_index` (`creative_id`);

--
-- Indexes for table `creatives_job_experiences`
--
ALTER TABLE `creatives_job_experiences`
  ADD PRIMARY KEY (`id`), ADD KEY `creatives_job_experiences_creative_id_index` (`creative_id`), ADD KEY `creatives_job_experiences_country_id_index` (`country_id`), ADD KEY `creatives_job_experiences_city_id_index` (`city_id`);

--
-- Indexes for table `creatives_language_skills`
--
ALTER TABLE `creatives_language_skills`
  ADD PRIMARY KEY (`id`), ADD KEY `creatives_language_skills_creative_id_index` (`creative_id`), ADD KEY `creatives_language_skills_lang_id_index` (`lang_id`);

--
-- Indexes for table `creatives_software_skills`
--
ALTER TABLE `creatives_software_skills`
  ADD PRIMARY KEY (`id`), ADD KEY `creatives_software_skills_creative_id_index` (`creative_id`), ADD KEY `creatives_software_skills_software_id_index` (`software_id`);

--
-- Indexes for table `creative_arts`
--
ALTER TABLE `creative_arts`
  ADD PRIMARY KEY (`id`), ADD KEY `creative_arts_creative_id_index` (`creative_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`), ADD KEY `jobs_company_id_index` (`company_id`), ADD KEY `jobs_status_id_index` (`status_id`);

--
-- Indexes for table `job_alerts`
--
ALTER TABLE `job_alerts`
  ADD PRIMARY KEY (`id`), ADD KEY `job_alerts_creative_id_index` (`creative_id`), ADD KEY `job_alerts_job_type_id_index` (`job_type_id`), ADD KEY `job_alerts_job_level_id_index` (`job_level_id`);

--
-- Indexes for table `job_applicants`
--
ALTER TABLE `job_applicants`
  ADD PRIMARY KEY (`id`), ADD KEY `job_applicants_creative_id_index` (`creative_id`), ADD KEY `job_applicants_job_id_index` (`job_id`);

--
-- Indexes for table `job_histories`
--
ALTER TABLE `job_histories`
  ADD PRIMARY KEY (`id`), ADD KEY `job_histories_job_id_index` (`job_id`);

--
-- Indexes for table `job_levels`
--
ALTER TABLE `job_levels`
  ADD PRIMARY KEY (`id`), ADD KEY `job_levels_job_id_index` (`job_id`), ADD KEY `job_levels_level_id_index` (`level_id`);

--
-- Indexes for table `job_skills`
--
ALTER TABLE `job_skills`
  ADD PRIMARY KEY (`id`), ADD KEY `job_skills_job_id_index` (`job_id`);

--
-- Indexes for table `job_types`
--
ALTER TABLE `job_types`
  ADD PRIMARY KEY (`id`), ADD KEY `job_types_job_id_index` (`job_id`), ADD KEY `job_types_type_id_index` (`type_id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`), ADD KEY `messages_sender_id_index` (`sender_id`), ADD KEY `messages_receiver_id_index` (`receiver_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `softwares`
--
ALTER TABLE `softwares`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcribes`
--
ALTER TABLE `subcribes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`), ADD KEY `users_role_id_index` (`role_id`), ADD KEY `users_status_id_index` (`status_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `companies_creatives`
--
ALTER TABLE `companies_creatives`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `creatives`
--
ALTER TABLE `creatives`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `creatives_achievements`
--
ALTER TABLE `creatives_achievements`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `creatives_art_histories`
--
ALTER TABLE `creatives_art_histories`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `creatives_coverletters`
--
ALTER TABLE `creatives_coverletters`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `creatives_education`
--
ALTER TABLE `creatives_education`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `creatives_job_experiences`
--
ALTER TABLE `creatives_job_experiences`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `creatives_language_skills`
--
ALTER TABLE `creatives_language_skills`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `creatives_software_skills`
--
ALTER TABLE `creatives_software_skills`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `creative_arts`
--
ALTER TABLE `creative_arts`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `job_alerts`
--
ALTER TABLE `job_alerts`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `job_applicants`
--
ALTER TABLE `job_applicants`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `job_histories`
--
ALTER TABLE `job_histories`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `job_levels`
--
ALTER TABLE `job_levels`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `job_skills`
--
ALTER TABLE `job_skills`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `job_types`
--
ALTER TABLE `job_types`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `levels`
--
ALTER TABLE `levels`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `softwares`
--
ALTER TABLE `softwares`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `subcribes`
--
ALTER TABLE `subcribes`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
