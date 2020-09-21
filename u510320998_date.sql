-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 21, 2020 at 10:29 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u510320998_date`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(10) UNSIGNED NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `avatar`, `created_at`, `updated_at`) VALUES
(1, '5f5b20496c445sl13.jpg', '2020-09-06 06:16:10', '2020-09-11 06:59:21');

-- --------------------------------------------------------

--
-- Table structure for table `about_translations`
--

CREATE TABLE `about_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `small_title` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_translations`
--

INSERT INTO `about_translations` (`id`, `title`, `body`, `about_id`, `locale`, `small_title`) VALUES
(1, 'من نحن', '<b>hello world in ar&nbsp;</b>', 1, 'ar', '<b>hello world in ar small</b>'),
(2, 'About Us', '<div><b>We chose to be one of the pioneers of the national vision and an active part in achieving its goals, and we launched the \"Sweet Date\" project to be the first of its kind in the Kingdom of Saudi Arabia in line with the Kingdom\'s declaration of its 2030 vision of the future, and what the entertainment, tourism and hospitality sector represents of great importance in the development of the national economy Saudi.</b></div><div><b>The passion for creativity, exploration and overcoming challenges and a love for the diversity of global cultures pushed us with pride to develop an idea, write and prepare a plan to open a lounge that is strange in its idea and beautiful in its image that reflects the luxury of taste and Arab art mixed with the elegance of the Western world in a way that makes Sweet Date a unique case that attracts everyone who wants to taste international dishes In an Arab way and in Saudi hands, and an artistic and entertainment atmosphere.</b></div>', 1, 'en', '<div style=\"direction: ltr; \"><b>We chose to be one of the pioneers of the national vision and an active part in achieving its goals, and we launched the \"Sweet Date\" project to be the first of its kind in the Kingdom of Saudi Arabia in line with the Kingdom\'s declaration of its 2030 vision of the future, and what the entertainment, tourism and hospitality sector represents of great importance in the development of the national economy Saudi.</b></div><div style=\"direction: ltr; \"><br></div>');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `avatar`, `created_at`, `updated_at`) VALUES
(1, '5f5e103e31a56Mokhtar_ali.jpg', '2020-09-11 11:48:26', '2020-09-13 12:27:42'),
(2, '5f5e0f1f77705Mokhtar_ali.jpg', '2020-09-11 11:48:40', '2020-09-13 12:22:55'),
(3, '5f5e0e302becdMokhtar_ali.jpg', '2020-09-11 11:48:51', '2020-09-13 12:18:56');

-- --------------------------------------------------------

--
-- Table structure for table `blog_translations`
--

CREATE TABLE `blog_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_translations`
--

INSERT INTO `blog_translations` (`id`, `title`, `body`, `blog_id`, `locale`, `created_at`, `updated_at`) VALUES
(1, 'Design and decor', '<p><b>\"Sweet Date\" is designed in a way that integrates modern Western style with oriental touches in a way that suits the way its international meals are presented, and to be an attractive and charming design that blends simplicity of design and luxury of the place to provide warmth and psychological comfort to the visitors and customers of \"Sweet Date\" and provides a suitable place to display all activities, events and events Which includes:</b></p><p><b>Holiday parties</b></p><p><b>And special joys</b></p><p><b>A platform for fashion show</b></p><p><b>And a theater for music and artistic events equipped with the latest sound and lighting devices.</b></p><p><b>Lounge food and juices.</b></p><p><b>And support services rooms and preparatory equipment.</b></p>', 1, 'ar', NULL, NULL),
(2, 'Decor', '<p style=\"direction: ltr; \">\"Sweet Date\" is designed in a way that integrates modern Western style with oriental touches in a way that suits the way its international meals are presented, and to be an attractive and charming design that blends simplicity of design and luxury of the place to provide warmth and psychological comfort to the visitors and customers of \"Sweet Date\" and provides a suitable place to display all activities, events and events Which includes:</p><p style=\"direction: ltr; \">Holiday parties</p><p style=\"direction: ltr; \">And special joys</p><p style=\"direction: ltr; \">A platform for fashion show</p><p style=\"direction: ltr; \">And a theater for music and artistic events equipped with the latest sound and lighting devices.</p><p style=\"direction: ltr; \">Lounge food and juices.</p><p style=\"direction: ltr; \">And support services rooms and preparatory equipment.</p>', 1, 'en', NULL, NULL),
(3, 'message', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry\'s standard dummy\r\n text ever since the 1500s, when an unknown printer took a galley of \r\ntype and scrambled it to make a type specimen book. It has survived not \r\nonly five centuries, but also the leap into electronic typesetting, \r\nremaining essentially unchanged. It was popularised in the 1960s with \r\nthe release of Letraset sheets containing Lorem Ipsum passages, and more\r\n recently with desktop publishing software like Aldus PageMaker \r\nincluding versions of Lorem Ipsum.</p>', 2, 'ar', NULL, NULL),
(4, 'Message', '<p><b>Choosing materials with high nutritional value and providing activities and activities to enrich and develop the sector of restaurants, cafes and entertainment activities in the Kingdom by providing local services with international standards, which adhere to the rules of healthy food under the supervision of a group of our competent Saudi youth who are qualified for this work so that we are the ideal place to have a healthy breakfast and a distinguished lunch or Tasty dinners with a packed atmosphere of entertainment and culture.</b><br></p>', 2, 'en', NULL, NULL),
(5, 'Menu', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry\'s standard dummy\r\n text ever since the 1500s, when an unknown printer took a galley of \r\ntype and scrambled it to make a type specimen book. It has survived not \r\nonly five centuries, but also the leap into electronic typesetting, \r\nremaining essentially unchanged. It was popularised in the 1960s with \r\nthe release of Letraset sheets containing Lorem Ipsum passages, and more\r\n recently with desktop publishing software like Aldus PageMaker \r\nincluding versions of Lorem Ipsum.</p>', 3, 'ar', NULL, NULL),
(6, 'Menu', '<p style=\"direction: ltr; \"><b>• Dishes from international restaurants.</b></p><p style=\"direction: ltr; \"><b>• Arabic meals and dishes.</b></p><p style=\"direction: ltr; \"><b>• All hot and cold drinks</b></p><p style=\"direction: ltr; \"><span style=\"font-weight: bolder; letter-spacing: 0.7px;\">•&nbsp;</span><b>sweets.</b></p><p style=\"direction: ltr; \"><span style=\"font-weight: bolder; letter-spacing: 0.7px;\">•&nbsp;</span><b>Juices.</b></p>', 3, 'en', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category_translations`
--

CREATE TABLE `category_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` int(10) UNSIGNED NOT NULL,
  `main` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '#27ae60',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contactsections`
--

CREATE TABLE `contactsections` (
  `id` int(10) UNSIGNED NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contactsection_translations`
--

CREATE TABLE `contactsection_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ccontactsection_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `counters`
--

CREATE TABLE `counters` (
  `id` int(10) UNSIGNED NOT NULL,
  `value` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `counter_translations`
--

CREATE TABLE `counter_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `counter_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `latests`
--

CREATE TABLE `latests` (
  `id` int(10) UNSIGNED NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `latests`
--

INSERT INTO `latests` (`id`, `avatar`, `created_at`, `updated_at`) VALUES
(1, '5f5b211e2ca72sl2.jpg', NULL, '2020-09-11 07:02:54');

-- --------------------------------------------------------

--
-- Table structure for table `latest_translations`
--

CREATE TABLE `latest_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `small_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `small_body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `latest_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `latest_translations`
--

INSERT INTO `latest_translations` (`id`, `title`, `body`, `small_title`, `small_body`, `latest_id`, `locale`) VALUES
(1, 'رؤيتنا', '<span style=\"font-family: Cairo;\">تغير المفهوم التقليدي عن المطاعم و المقاهي السعوديه و تطويرها للانتقال بعالم المطاعم و المقاهي من مجرد مكان لتناول وجبة او كوب من القهوه الي مكان من الترفيه و الراحة و النكهات العالمية يجعل \"سويت ديت\" من ابرز معالم الضيافه عالمياً و محلياً.</span>', 'fdg dfg dfg dfg', 'fdg dfg dfg dfgd fg df', 1, 'ar'),
(2, 'Vision', '<span style=\"font-family: Cairo;\">Changing the traditional concept of Saudi restaurants and cafes and developing them to move the world of restaurants and cafes from just a place to have a meal or a cup of coffee to a place of entertainment, comfort and international flavors makes \"</span><span style=\"font-family: Cairo;\">Sweet Date</span><span style=\"font-family: Cairo;\">\" one of the most prominent landmarks of hospitality internationally and locally</span>', 'fdg dfg dfg dfg', 'fdg dfg dfg dfgd fg df', 1, 'en');

-- --------------------------------------------------------

--
-- Table structure for table `mails`
--

CREATE TABLE `mails` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_12_20_174043_create_blogs_table', 1),
(4, '2019_12_20_182021_create_categories_table', 1),
(5, '2019_12_20_183030_create_projects_table', 1),
(6, '2019_12_20_185249_create_abouts_table', 1),
(7, '2019_12_20_212746_create_partners_table', 1),
(8, '2019_12_20_224724_create_settings_table', 1),
(9, '2019_12_20_235354_create_scategories_table', 1),
(10, '2019_12_21_000841_create_services_table', 1),
(11, '2019_12_26_171938_create_sliders_table', 1),
(12, '2020_02_13_003912_create_blog_translations_table', 1),
(13, '2020_02_14_030434_create_slider_translations_table', 1),
(14, '2020_02_14_034209_create_about_translations_table', 1),
(15, '2020_02_14_035229_create_service_translations_table', 1),
(16, '2020_02_14_040835_create_category_translations_table', 1),
(17, '2020_02_14_054525_create_project_translations_table', 1),
(18, '2020_02_14_121453_create_tests_table', 1),
(19, '2020_02_14_121733_create_test_translations_table', 1),
(20, '2020_02_14_123803_create_teams_table', 1),
(21, '2020_02_14_123833_create_team_translations_table', 1),
(22, '2020_02_14_234458_create_mails_table', 1),
(23, '2020_03_17_012627_create_colors_table', 1),
(24, '2020_03_20_032140_create_counters_table', 1),
(25, '2020_03_20_032310_create_counter_translations_table', 1),
(26, '2020_03_20_034500_create_contactsections_table', 1),
(27, '2020_03_20_034521_create_contactsection_translations_table', 1),
(28, '2020_03_23_223203_create_videos_table', 1),
(29, '2020_03_24_105941_create_latest_translations_table', 1),
(30, '2020_03_24_105941_create_latests_table', 1),
(31, '2020_03_29_112511_create_seos_table', 1),
(32, '2020_03_29_112530_create_seo_translations_table', 1),
(33, '2020_04_22_090158_create_pcategories_table', 1),
(34, '2020_04_22_090319_create_pcategory_translations_table', 1),
(35, '2020_04_22_093125_create_products_table', 1),
(36, '2020_04_22_093152_create_product_translations_table', 1),
(37, '2020_04_27_010129_create_scategory_translations_table', 1),
(38, '2020_09_09_080710_create_reservations_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` int(10) UNSIGNED NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `avatar`, `created_at`, `updated_at`) VALUES
(1, '5f5b63111b91flogo.png', '2020-09-11 11:44:17', '2020-09-11 11:44:17'),
(2, '5f5b631cbcd3elogo.png', '2020-09-11 11:44:28', '2020-09-11 11:44:28'),
(3, '5f5b632525828logo.png', '2020-09-11 11:44:37', '2020-09-11 11:44:37'),
(4, '5f5b632c17c45logo.png', '2020-09-11 11:44:44', '2020-09-11 11:44:44'),
(5, '5f5b634bcff1elogo.png', '2020-09-11 11:45:15', '2020-09-11 11:45:15'),
(6, '5f5b6353c16cclogo.png', '2020-09-11 11:45:23', '2020-09-11 11:45:23');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pcategories`
--

CREATE TABLE `pcategories` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pcategory_translations`
--

CREATE TABLE `pcategory_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pcategory_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `peopleopenions`
--

CREATE TABLE `peopleopenions` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `services` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foodserve` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sanitization` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `waiting` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `avatar` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_translations`
--

CREATE TABLE `product_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(10) UNSIGNED NOT NULL,
  `gallery` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `gallery`, `avatar`, `video`, `created_at`, `updated_at`) VALUES
(1, 'Mokhtar_ali_5f5b685108a81_.jpg/Mokhtar_ali_5f5b68510948e_.jpg/Mokhtar_ali_5f5b685109769_.jpg/Mokhtar_ali_5f5b68549e5e2_.jpg/Mokhtar_ali_5f5b68549e89b_.jpg', 'Mokhtar_ali_5f5b6851077c5_.jpg', 'Mokhtar_ali_5f5b685107b38_.mp4', '2020-09-11 12:06:44', '2020-09-11 12:06:44'),
(2, 'Mokhtar_ali_5f5b6c252a071_.jpg/Mokhtar_ali_5f5b6c252a806_.jpg/Mokhtar_ali_5f5b6c252aa34_.jpg/Mokhtar_ali_5f5b6c252b130_.jpg/Mokhtar_ali_5f5b6c252b3e2_.jpg', 'Mokhtar_ali_5f5b6c20c7b8b_.jpg', 'Mokhtar_ali_5f5b6c252999d_.mp4', '2020-09-11 12:23:01', '2020-09-11 12:23:01'),
(3, 'Mokhtar_ali_5f5b6f020c62c_.jpg/Mokhtar_ali_5f5b6f020d013_.jpg/Mokhtar_ali_5f5b6f020d2f1_.jpg/Mokhtar_ali_5f5b6f020dbd0_.jpg/Mokhtar_ali_5f5b6f020df0d_.jpg', 'Mokhtar_ali_5f5b6f020ba1d_.jpg', 'Mokhtar_ali_5f5b6f020bdc8_.mp4', '2020-09-11 12:35:17', '2020-09-11 12:35:17');

-- --------------------------------------------------------

--
-- Table structure for table `project_translations`
--

CREATE TABLE `project_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_translations`
--

INSERT INTO `project_translations` (`id`, `title`, `body`, `project_id`, `locale`) VALUES
(1, 'title', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry\'s standard dummy\r\n text ever since the 1500s, when an unknown printer took a galley of \r\ntype and scrambled it to make a type specimen book. It has survived not \r\nonly five centuries, but also the leap into electronic typesetting, \r\nremaining essentially unchanged. It was popularised in the 1960s with \r\nthe release of Letraset sheets containing Lorem Ipsum passages, and more\r\n recently with desktop publishing software like Aldus PageMaker \r\nincluding versions of Lorem Ipsum.</p>', 1, 'ar'),
(2, 'title', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry\'s standard dummy\r\n text ever since the 1500s, when an unknown printer took a galley of \r\ntype and scrambled it to make a type specimen book. It has survived not \r\nonly five centuries, but also the leap into electronic typesetting, \r\nremaining essentially unchanged. It was popularised in the 1960s with \r\nthe release of Letraset sheets containing Lorem Ipsum passages, and more\r\n recently with desktop publishing software like Aldus PageMaker \r\nincluding versions of Lorem Ipsum.</p>', 1, 'en'),
(3, 'title', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry\'s standard dummy\r\n text ever since the 1500s, when an unknown printer took a galley of \r\ntype and scrambled it to make a type specimen book. It has survived not \r\nonly five centuries, but also the leap into electronic typesetting, \r\nremaining essentially unchanged. It was popularised in the 1960s with \r\nthe release of Letraset sheets containing Lorem Ipsum passages, and more\r\n recently with desktop publishing software like Aldus PageMaker \r\nincluding versions of Lorem Ipsum.</p>', 2, 'ar'),
(4, 'title', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry\'s standard dummy\r\n text ever since the 1500s, when an unknown printer took a galley of \r\ntype and scrambled it to make a type specimen book. It has survived not \r\nonly five centuries, but also the leap into electronic typesetting, \r\nremaining essentially unchanged. It was popularised in the 1960s with \r\nthe release of Letraset sheets containing Lorem Ipsum passages, and more\r\n recently with desktop publishing software like Aldus PageMaker \r\nincluding versions of Lorem Ipsum.</p>', 2, 'en'),
(5, 'title', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry\'s standard dummy\r\n text ever since the 1500s, when an unknown printer took a galley of \r\ntype and scrambled it to make a type specimen book. It has survived not \r\nonly five centuries, but also the leap into electronic typesetting, \r\nremaining essentially unchanged. It was popularised in the 1960s with \r\nthe release of Letraset sheets containing Lorem Ipsum passages, and more\r\n recently with desktop publishing software like Aldus PageMaker \r\nincluding versions of Lorem Ipsum.</p>', 3, 'ar'),
(6, 'title', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry\'s standard dummy\r\n text ever since the 1500s, when an unknown printer took a galley of \r\ntype and scrambled it to make a type specimen book. It has survived not \r\nonly five centuries, but also the leap into electronic typesetting, \r\nremaining essentially unchanged. It was popularised in the 1960s with \r\nthe release of Letraset sheets containing Lorem Ipsum passages, and more\r\n recently with desktop publishing software like Aldus PageMaker \r\nincluding versions of Lorem Ipsum.</p>', 3, 'en');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `name`, `email`, `phone`, `number`, `time`, `date`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Jim', 'gamel-usa@hotmail.com', '0500355566', '2', '14:53', '2020-09-21', 'Hi', '2020-09-14 23:31:53', '2020-09-14 23:31:53');

-- --------------------------------------------------------

--
-- Table structure for table `scategories`
--

CREATE TABLE `scategories` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `scategory_translations`
--

CREATE TABLE `scategory_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `scategory_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seos`
--

CREATE TABLE `seos` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seo_translations`
--

CREATE TABLE `seo_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `home` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `services` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `projects` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blogs` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `avatar` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `avatar`, `created_at`, `updated_at`) VALUES
(3, '5f5f3dcdd7ce7Mokhtar_ali.jpg', '2020-09-14 09:54:21', '2020-09-14 09:54:21'),
(4, '5f5f3de77df7cMokhtar_ali.jpg', '2020-09-14 09:54:49', '2020-09-14 09:54:49'),
(5, '5f5f4370ee35fMokhtar_ali.jpg', '2020-09-14 10:18:24', '2020-09-14 10:18:24');

-- --------------------------------------------------------

--
-- Table structure for table `service_translations`
--

CREATE TABLE `service_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_translations`
--

INSERT INTO `service_translations` (`id`, `title`, `body`, `service_id`, `locale`) VALUES
(5, 'service title', '<p>There are many variations of passages of Lorem Ipsum available, <br></p>', 3, 'ar'),
(6, 'service title', '<p>There are many variations of passages of Lorem Ipsum available, <br></p>', 3, 'en'),
(7, 'service title', '<p>There are many variations of passages of Lorem Ipsum available, <br></p>', 4, 'ar'),
(8, 'service title', '<p>There are many variations of passages of Lorem Ipsum available, <br></p>', 4, 'en'),
(9, 'service title', '<p>There are many variations of passages of Lorem Ipsum available, <br></p>', 5, 'ar'),
(10, 'service title', '<p>There are many variations of passages of Lorem Ipsum available, <br></p>', 5, 'en');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'logo.png',
  `logo_small` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'logo2.png',
  `itphone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `itemail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mphone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `memail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dphone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `demail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'RESIDENCE',
  `favicon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'logo.png',
  `address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `facebook`, `twitter`, `instagram`, `linkedin`, `logo`, `logo_small`, `itphone`, `itemail`, `mphone`, `memail`, `dphone`, `demail`, `name`, `favicon`, `address`, `meta`, `created_at`, `updated_at`) VALUES
(1, 'facebook.com', 'twitter.com', 'instagram.com', 'linkedin.com', '5f559b1a55a29mokhtar_ali.png', 'logo2.png', '01013033465', 'info@sweetdate.com', '00966 115 202 593', 'info@highvision.sa', '00966 115 202 593', 'info@highvision.sa', 'sweet date', '5f559b1a56734mokhtar_ali.png', 'تعديل العنوان', 'sweet date coffee', '2020-09-06 06:16:11', '2020-09-07 00:30:51');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `avatar` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `avatar`, `created_at`, `updated_at`) VALUES
(1, '5f558ff801cb2Mokhtar_ali.jpg', '2020-09-06 23:36:15', '2020-09-06 23:42:16');

-- --------------------------------------------------------

--
-- Table structure for table `slider_translations`
--

CREATE TABLE `slider_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider_translations`
--

INSERT INTO `slider_translations` (`id`, `title`, `body`, `slider_id`, `locale`) VALUES
(1, 'Sweet Date', 'Coffee Club', 1, 'ar'),
(2, 'Sweet Date', 'Coffee Club', 1, 'en');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(10) UNSIGNED NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `avatar`, `created_at`, `updated_at`) VALUES
(1, '5f5f43a1662edMokhtar_ali.jpg', '2020-09-14 10:19:13', '2020-09-14 10:19:13'),
(2, '5f5f43af69871Mokhtar_ali.jpg', '2020-09-14 10:19:27', '2020-09-14 10:19:27'),
(3, '5f5f43b9b6d4dMokhtar_ali.jpg', '2020-09-14 10:19:37', '2020-09-14 10:19:37');

-- --------------------------------------------------------

--
-- Table structure for table `team_translations`
--

CREATE TABLE `team_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `team_translations`
--

INSERT INTO `team_translations` (`id`, `title`, `body`, `team_id`, `locale`, `created_at`, `updated_at`) VALUES
(1, 'Mohamed Hamada', 'Exclusive chef', 1, 'ar', NULL, NULL),
(2, 'Mohamed Hamada', 'Exclusive chef', 1, 'en', NULL, NULL),
(3, 'Mohamed Hamada', 'Exclusive chef', 2, 'ar', NULL, NULL),
(4, 'Mohamed Hamada', 'Exclusive chef', 2, 'en', NULL, NULL),
(5, 'Mohamed Hamada', 'Exclusive chef', 3, 'ar', NULL, NULL),
(6, 'Mohamed Hamada', 'Exclusive chef', 3, 'en', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `id` int(10) UNSIGNED NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `phone` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tests`
--

INSERT INTO `tests` (`id`, `avatar`, `created_at`, `updated_at`, `status`, `phone`) VALUES
(1, '5f5b639f36f8bMokhtar_ali.jpg', '2020-09-11 11:46:39', '2020-09-11 11:47:31', 1, NULL),
(2, '5f5b63a668db1Mokhtar_ali.jpg', '2020-09-11 11:46:46', '2020-09-11 11:47:27', 1, NULL),
(3, '5f5b63ac87e16Mokhtar_ali.jpg', '2020-09-11 11:46:52', '2020-09-11 11:47:21', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `test_translations`
--

CREATE TABLE `test_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `test_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `test_translations`
--

INSERT INTO `test_translations` (`id`, `title`, `body`, `test_id`, `locale`, `created_at`, `updated_at`) VALUES
(1, 'Ipsum has been', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy', 1, 'ar', NULL, NULL),
(2, 'Ipsum has been', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy</p>', 1, 'en', NULL, NULL),
(3, 'Ipsum has been', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy', 2, 'ar', NULL, NULL),
(4, 'Ipsum has been', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy</p>', 2, 'en', NULL, NULL),
(5, 'Ipsum has been', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy', 3, 'ar', NULL, NULL),
(6, 'Ipsum has been', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy</p>', 3, 'en', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `avatar`, `role_id`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Hamaky', '5f55cc0f711ab21558698_873788776119087_1866353329442468172_n.jpg', 1, 'admin@app.com', NULL, '$2y$10$gjjD1b204SQsBkY6rk9lOOaoXdm227obq8qvlnfgkT9Gsw2c1mMLq', NULL, '2020-09-06 06:16:10', '2020-09-12 14:25:57');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `link` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `link`, `status`, `created_at`, `updated_at`) VALUES
(1, 'https://www.youtube.com/watch?v=gbJHMJn5qhw&list=RDkOGqaQUuVGA&index=22', 0, NULL, '2020-09-07 03:49:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_translations`
--
ALTER TABLE `about_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `about_translations_about_id_foreign` (`about_id`),
  ADD KEY `about_translations_locale_index` (`locale`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_translations`
--
ALTER TABLE `blog_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_translations_blog_id_foreign` (`blog_id`),
  ADD KEY `blog_translations_locale_index` (`locale`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_translations`
--
ALTER TABLE `category_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_translations_category_id_foreign` (`category_id`),
  ADD KEY `category_translations_locale_index` (`locale`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactsections`
--
ALTER TABLE `contactsections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactsection_translations`
--
ALTER TABLE `contactsection_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contactsection_translations_ccontactsection_id_foreign` (`ccontactsection_id`),
  ADD KEY `contactsection_translations_locale_index` (`locale`);

--
-- Indexes for table `counters`
--
ALTER TABLE `counters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counter_translations`
--
ALTER TABLE `counter_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `counter_translations_counter_id_foreign` (`counter_id`),
  ADD KEY `counter_translations_locale_index` (`locale`);

--
-- Indexes for table `latests`
--
ALTER TABLE `latests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `latest_translations`
--
ALTER TABLE `latest_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `latest_translations_locale_index` (`locale`);

--
-- Indexes for table `mails`
--
ALTER TABLE `mails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pcategories`
--
ALTER TABLE `pcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pcategory_translations`
--
ALTER TABLE `pcategory_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pcategory_translations_pcategory_id_foreign` (`pcategory_id`),
  ADD KEY `pcategory_translations_locale_index` (`locale`);

--
-- Indexes for table `peopleopenions`
--
ALTER TABLE `peopleopenions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_translations`
--
ALTER TABLE `product_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_translations_product_id_foreign` (`product_id`),
  ADD KEY `product_translations_locale_index` (`locale`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_translations`
--
ALTER TABLE `project_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_translations_project_id_foreign` (`project_id`),
  ADD KEY `project_translations_locale_index` (`locale`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scategories`
--
ALTER TABLE `scategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scategory_translations`
--
ALTER TABLE `scategory_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `scategory_translations_scategory_id_foreign` (`scategory_id`),
  ADD KEY `scategory_translations_locale_index` (`locale`);

--
-- Indexes for table `seos`
--
ALTER TABLE `seos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_translations`
--
ALTER TABLE `seo_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `seo_translations_seo_id_foreign` (`seo_id`),
  ADD KEY `seo_translations_locale_index` (`locale`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_translations`
--
ALTER TABLE `service_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_translations_service_id_foreign` (`service_id`),
  ADD KEY `service_translations_locale_index` (`locale`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider_translations`
--
ALTER TABLE `slider_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slider_translations_slider_id_foreign` (`slider_id`),
  ADD KEY `slider_translations_locale_index` (`locale`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_translations`
--
ALTER TABLE `team_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `team_translations_team_id_foreign` (`team_id`),
  ADD KEY `team_translations_locale_index` (`locale`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test_translations`
--
ALTER TABLE `test_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `test_translations_test_id_foreign` (`test_id`),
  ADD KEY `test_translations_locale_index` (`locale`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `about_translations`
--
ALTER TABLE `about_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blog_translations`
--
ALTER TABLE `blog_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category_translations`
--
ALTER TABLE `category_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contactsections`
--
ALTER TABLE `contactsections`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contactsection_translations`
--
ALTER TABLE `contactsection_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `counters`
--
ALTER TABLE `counters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `counter_translations`
--
ALTER TABLE `counter_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `latests`
--
ALTER TABLE `latests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `latest_translations`
--
ALTER TABLE `latest_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mails`
--
ALTER TABLE `mails`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pcategories`
--
ALTER TABLE `pcategories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pcategory_translations`
--
ALTER TABLE `pcategory_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `peopleopenions`
--
ALTER TABLE `peopleopenions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_translations`
--
ALTER TABLE `product_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `project_translations`
--
ALTER TABLE `project_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `scategories`
--
ALTER TABLE `scategories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `scategory_translations`
--
ALTER TABLE `scategory_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seos`
--
ALTER TABLE `seos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seo_translations`
--
ALTER TABLE `seo_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `service_translations`
--
ALTER TABLE `service_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider_translations`
--
ALTER TABLE `slider_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `team_translations`
--
ALTER TABLE `team_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `test_translations`
--
ALTER TABLE `test_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `about_translations`
--
ALTER TABLE `about_translations`
  ADD CONSTRAINT `about_translations_about_id_foreign` FOREIGN KEY (`about_id`) REFERENCES `abouts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `blog_translations`
--
ALTER TABLE `blog_translations`
  ADD CONSTRAINT `blog_translations_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `category_translations`
--
ALTER TABLE `category_translations`
  ADD CONSTRAINT `category_translations_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `contactsection_translations`
--
ALTER TABLE `contactsection_translations`
  ADD CONSTRAINT `contactsection_translations_ccontactsection_id_foreign` FOREIGN KEY (`ccontactsection_id`) REFERENCES `contactsections` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `counter_translations`
--
ALTER TABLE `counter_translations`
  ADD CONSTRAINT `counter_translations_counter_id_foreign` FOREIGN KEY (`counter_id`) REFERENCES `counters` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pcategory_translations`
--
ALTER TABLE `pcategory_translations`
  ADD CONSTRAINT `pcategory_translations_pcategory_id_foreign` FOREIGN KEY (`pcategory_id`) REFERENCES `pcategories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_translations`
--
ALTER TABLE `product_translations`
  ADD CONSTRAINT `product_translations_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `project_translations`
--
ALTER TABLE `project_translations`
  ADD CONSTRAINT `project_translations_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `scategory_translations`
--
ALTER TABLE `scategory_translations`
  ADD CONSTRAINT `scategory_translations_scategory_id_foreign` FOREIGN KEY (`scategory_id`) REFERENCES `scategories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `seo_translations`
--
ALTER TABLE `seo_translations`
  ADD CONSTRAINT `seo_translations_seo_id_foreign` FOREIGN KEY (`seo_id`) REFERENCES `seos` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `service_translations`
--
ALTER TABLE `service_translations`
  ADD CONSTRAINT `service_translations_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `slider_translations`
--
ALTER TABLE `slider_translations`
  ADD CONSTRAINT `slider_translations_slider_id_foreign` FOREIGN KEY (`slider_id`) REFERENCES `sliders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `team_translations`
--
ALTER TABLE `team_translations`
  ADD CONSTRAINT `team_translations_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `test_translations`
--
ALTER TABLE `test_translations`
  ADD CONSTRAINT `test_translations_test_id_foreign` FOREIGN KEY (`test_id`) REFERENCES `tests` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
