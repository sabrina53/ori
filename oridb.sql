-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 24, 2019 at 01:34 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oridb`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `client_fname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `client_lname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `business_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `company_name`, `client_fname`, `client_lname`, `user_id`, `business_type`, `address`, `number`, `email`, `created_at`, `updated_at`) VALUES
(1, 'teacha', 'juliany33', 'Johnsoni', '2', 'Tea Shop', '32 Blackfrists street, London, ON', '4167893121', 'teach@gmail.com', '2019-04-02 04:05:50', '2019-04-21 03:48:59'),
(2, 'Burrito Boyz', 'Kyle', 'Williams', '2', 'Food Service', '206 Central Ave. London, ON', '5196792699', 'burritoboyz@gmail.com', '2019-04-02 04:05:50', '2019-04-02 04:05:50'),
(3, 'Cherryhill Village Mall', 'Aliciaf1', 'Racine', '2', 'Commerce3', '45 Wharncliff Road, London, ON', '321 456 7689', 'cherryhill@gmail.com', '2019-04-02 04:05:50', '2019-04-17 22:59:12'),
(4, 'London Convention Center', 'David', 'Richards', '2', 'Events Service', '300 York St, London, ON N6B 1P8', '5196616200', 'londoncc.com', '2019-04-02 04:05:50', '2019-04-02 04:05:50'),
(5, 'Adrenaline MMA Gym', 'Sam', 'Stout', '2', 'Gym', '716 York St. London ON  N5W 2S8', '5194518880', 'hello@adrenaline.com', '2019-04-02 04:05:50', '2019-04-02 04:05:50'),
(6, 'CommonWealth Coffee CO', 'Karen', 'Woods', '2', 'Coffee Shop', '478 Richmond St, London, ON N6A 3E6', '5194321113', 'hello@CommonWealthCoffeco.ca', '2019-04-02 04:05:50', '2019-04-02 04:05:50'),
(7, 'Grow & Bloom Collective', 'Allison', 'Jameson', '2', 'Plant Shop', '67 Richmond Street, ON', '456 213 6754', 'BloomGrow@gmail.com', '2019-04-02 04:05:50', '2019-04-13 17:51:22'),
(46, 'BurgerBuger', 'Andres', 'Dickson', '2', 'food industry', '4328 Wharncliff Road, London ON,', '214 8493 213', 'burgerburger@gmail.com', '2019-04-21 01:36:10', '2019-04-21 01:36:10');

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
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2014_10_12_100000_create_password_resets_table', 1),
(7, '2019_02_21_173321_create_clients_table', 1),
(8, '2019_02_21_173358_create_projects_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('user@gmail.com', '$2y$10$YyoT2iV2isKR3JFJh6od2.sgD4rBY7MBi4lAst8Xn/0wrjQpP/gaS', '2019-04-03 17:41:12');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(10) UNSIGNED NOT NULL,
  `project_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_descrip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estimated_due_date` date NOT NULL,
  `quote_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_contract` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invoice_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `client_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `completion_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'current',
  `payment_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `start_date` date NOT NULL,
  `end_date` date DEFAULT NULL,
  `discount` decimal(2,2) DEFAULT NULL,
  `total` decimal(6,2) DEFAULT '0.00',
  `pay_perc_one` decimal(2,2) DEFAULT '0.00',
  `pay_perc_two` decimal(2,2) DEFAULT '0.00',
  `tax` decimal(2,2) DEFAULT '0.00',
  `item_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `item_name_two` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `item_name_three` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_one_date` date DEFAULT NULL,
  `payment_two_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `item_amount` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `item_amount_two` int(10) DEFAULT NULL,
  `item_amount_three` int(10) DEFAULT NULL,
  `total_date` date DEFAULT NULL,
  `issued` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `project_name`, `project_descrip`, `estimated_due_date`, `quote_id`, `id_contract`, `invoice_id`, `client_id`, `completion_status`, `payment_status`, `start_date`, `end_date`, `discount`, `total`, `pay_perc_one`, `pay_perc_two`, `tax`, `item_name`, `item_name_two`, `item_name_three`, `payment_one_date`, `payment_two_date`, `created_at`, `updated_at`, `item_amount`, `item_amount_two`, `item_amount_three`, `total_date`, `issued`) VALUES
(1, 'Teacha Website Development', 'Create an informative single page website for local tea shop. Their products are all \"home-made\" and of the best quality. Will also need to take some pictures of the products for the webpage and other uses in the future.', '2019-03-28', '', '', '', '1', 'current', 'unpaid', '2019-02-28', '2019-04-03', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-02 04:05:50', '2019-04-24 04:39:11', NULL, NULL, NULL, NULL, NULL),
(2, 'Burrito Boyz - Mobile App Design', 'Re design Burrito Boyz original website into a more simple single page website. Cutting down on such large font sizes and pictures and only leaving in necessary information.', '2019-02-20', '', '', '', '2', 'past', 'paid', '2019-02-28', '2019-02-25', '0.00', '1000.00', '0.00', '0.00', '0.00', NULL, NULL, NULL, '2003-03-18', '2003-05-18', '2019-04-02 04:05:50', '2019-04-02 04:05:50', '50', NULL, NULL, NULL, NULL),
(3, 'Cherryhill Village Mall Website', 'Re design Cherryhill Mall website to something more modern and up to date with latest trends, this includes using more photography and animation. The page should also be responsive. ', '2018-06-15', '', '', '', '3', 'past', 'paid', '2018-05-15', '2018-06-17', '0.00', '1400.00', '0.00', '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, '2019-04-02 04:05:50', '2019-04-02 04:05:50', NULL, NULL, NULL, NULL, NULL),
(4, 'London Convention Center Website', 'Design London Convention Center\'s website. All inforamation and copy\'s that will go on the page will be provided before-hand. Important to have a section with upcoming event dates as well a section where tickets can be purchased.', '2017-05-01', '', '', '', '4', 'past', 'paid', '2017-03-06', '2017-05-15', '0.00', '1800.00', '0.00', '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, '2019-04-02 04:05:50', '2019-04-02 04:05:50', NULL, NULL, NULL, NULL, NULL),
(5, 'Adrenaline Gym Schedule', 'Add a updatable class schedule card to the website. Also a section where upcoming events will posted.', '2019-09-08', '', '', '', '5', 'current', 'unpaid', '2019-08-06', '2019-09-01', '0.00', '400.00', '0.00', '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, '2019-04-02 04:05:50', '2019-04-02 04:05:50', NULL, NULL, NULL, NULL, NULL),
(6, 'Adrenaline Gym Events Calender ', 'Add a updatable section where upcoming events will posted.', '2019-07-02', '', '', '', '5', 'current', 'unpaid', '2019-06-01', '2019-07-02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-02 04:05:50', '2019-04-23 02:07:12', NULL, NULL, NULL, NULL, NULL),
(7, ' Single-page Promotional website ', 'Design and code a singe page website for local coffeshop in London. This site should include menu, about, contact and link to social media. Photos and copys will be provided. ', '2019-08-08', '', '', '', '6', 'current', 'unpaid', '2019-07-02', '2019-08-08', '0.00', '700.00', '0.00', '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, '2019-04-02 04:05:50', '2019-04-02 04:05:50', NULL, NULL, NULL, NULL, NULL),
(8, 'BoxCar Donuts - Instagram feed', ' Create a section for BoxCar Donuts in the CommonWealth Coffe Co website.', '2019-08-15', '', '', '', '6', 'current', 'unpaid', '2019-08-02', '2019-08-15', '0.20', '300.00', '0.00', '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, '2019-04-02 04:05:50', '2019-04-02 04:05:50', NULL, NULL, NULL, NULL, NULL),
(9, 'Grow & Bloom Co Website', ' Redesign Grow & Bloom Co website. More organized and clean look. Adding in pictures of the shop', '2019-06-10', '', '', '', '7', 'past', 'paid', '2019-05-01', '2019-06-10', '0.00', '500.00', '0.00', '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, '2019-04-02 04:05:50', '2019-04-02 04:05:50', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `fname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personalLogo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profession` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pnumber` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `personalLogo`, `profession`, `pnumber`, `address`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Angie', 'Ramirez', 'user@gmail.com', 'logo.jpg', 'Web Developer', '4168187041', '1235 Richmond Street', NULL, '123456', NULL, '2019-04-02 04:05:50', '2019-04-02 04:05:50'),
(2, 'Sabrina', 'Gomez', 'sabrinagomez@gmail.com', 'SabrinaGmez19.jpg', 'graphic design', '4168187041', '32 Blackfriars street', NULL, '$2y$10$W.7LwzoZ5pbakBLGN9V/wOhToWp60JbQt8ifjdbUG3kRHsxzlhy3e', 'U7l6T34xDQ0AebbQKWxpQVKTmB0PqcIT9Ns5i8CG0qAqsDuNDKznGWT4TTEt', '2019-04-03 17:42:14', '2019-04-03 17:42:14'),
(3, 'Omar', 'Higuera', 'omi@holi.com', 'Screen Shot 2019-04-03 at 8.56.58 AM.png', 'communicator', '765890', '253 astoria', NULL, '$2y$10$8/I0017EPHK3hvx.D66Tsej9lcqp9F8U4pOv.9XgPfMjTSKX69tEW', 'tf6IxUK8tPvSFb1d2onmnvPK75H7yCqULNAoBA9i6a5OqUaoHrf5LsJGw39F', '2019-04-04 23:04:38', '2019-04-04 23:04:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `clients_email_unique` (`email`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
