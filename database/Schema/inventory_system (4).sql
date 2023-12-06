-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 06, 2023 at 07:51 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendences`
--

CREATE TABLE `attendences` (
  `id` bigint UNSIGNED NOT NULL,
  `employee_id` bigint UNSIGNED NOT NULL,
  `attendance_date` date NOT NULL DEFAULT '2023-12-06',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `clock_in_time` time NOT NULL DEFAULT '19:19:17',
  `clock_out_time` time NOT NULL DEFAULT '19:19:17',
  `overtime_hours` decimal(5,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attendences`
--

INSERT INTO `attendences` (`id`, `employee_id`, `attendance_date`, `status`, `clock_in_time`, `clock_out_time`, `overtime_hours`, `created_at`, `updated_at`) VALUES
(1, 1, '1970-06-06', 0, '17:01:00', '23:14:00', 4.00, '2023-12-06 13:50:33', '2023-12-06 13:50:33'),
(2, 2, '2007-07-06', 1, '14:57:00', '00:55:00', 63.00, '2023-12-06 13:50:45', '2023-12-06 13:50:45');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image_url` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `image_url`, `created_at`, `updated_at`) VALUES
(1, 'Shoes', 'The meaning of DESCRIPTION is an act of describing;', 'data:image/jpeg;base64,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', '2023-12-06 13:28:57', '2023-12-06 13:28:57'),
(2, 'Laptop', 'Laptop Price in Bangladesh starts from BDT 26,999', 'data:image/jpeg;base64,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', '2023-12-06 13:43:02', '2023-12-06 13:43:02'),
(3, 'Television', 'Download the perfect television pictures.', 'data:image/jpeg;base64,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', '2023-12-06 13:43:42', '2023-12-06 13:43:42');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `loyalty_points` int DEFAULT NULL,
  `membership_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `phone_number`, `address`, `loyalty_points`, `membership_status`, `created_at`, `updated_at`) VALUES
(1, 'Rahat Khan', 'wurumuwira@mailinator.com', '+1 (998) 576-3846', 'Dhaka', 65, NULL, '2023-12-06 13:36:33', '2023-12-06 13:36:33'),
(2, 'Shabnur Islam', 'kocyt@mailinator.com', '+1 (199) 451-7825', 'Uttara', 88, NULL, '2023-12-06 13:36:53', '2023-12-06 13:36:53');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `image` text COLLATE utf8mb4_unicode_ci,
  `position` text COLLATE utf8mb4_unicode_ci,
  `department` text COLLATE utf8mb4_unicode_ci,
  `nid_no` int DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `hire_date` date DEFAULT NULL,
  `salary` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `email`, `phone_number`, `address`, `image`, `position`, `department`, `nid_no`, `date_of_birth`, `hire_date`, `salary`, `created_at`, `updated_at`) VALUES
(1, 'Saiful Islam Shaon', 'shaon@gmail.com', '01723456890', 'Khilkhet, Dhaka', '1701891235-6570cca388413.jpg', 'Senior staffer', 'Software Developer', 2334452, '2000-12-11', '2023-12-01', 400000, '2023-12-06 13:33:55', '2023-12-06 13:33:55'),
(2, 'Romana Idress Ekfa', 'ekfaeshita@gmail.com', '01714893870', 'Uttara,Dhaka', '1701891353-6570cd19c2a4e.jpg', 'Junior Staff', 'Software Developer', 3244646, '2010-06-07', '2023-12-04', 20000, '2023-12-06 13:35:53', '2023-12-06 13:35:53');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expense_date` date DEFAULT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(16, '2014_10_12_000000_create_users_table', 1),
(17, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(18, '2019_08_19_000000_create_failed_jobs_table', 1),
(19, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(20, '2023_11_13_110129_create_employees_table', 1),
(21, '2023_11_19_132755_create_customers_table', 1),
(22, '2023_11_20_160540_create_suppliers_table', 1),
(23, '2023_11_20_183752_create_expenses_table', 1),
(24, '2023_11_20_212346_create_categories_table', 1),
(25, '2023_11_26_093010_create_salaries_table', 1),
(26, '2023_11_26_093604_create_products_table', 1),
(27, '2023_11_29_150214_create_orders_table', 1),
(28, '2023_11_30_195710_create_settings_table', 1),
(29, '2023_11_30_195817_create_attendences_table', 1),
(30, '2023_11_30_195834_create_sales__reports_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint UNSIGNED NOT NULL,
  `customer_id` bigint UNSIGNED NOT NULL,
  `order_date` datetime NOT NULL,
  `total_amount` decimal(10,2) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `delivery_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `order_date`, `total_amount`, `status`, `payment_method`, `shipping_address`, `delivery_date`, `created_at`, `updated_at`) VALUES
(1, 1, '2018-12-31 00:00:00', 8500.00, 'Acti', 'Bkash', 'Culpa vitae volupta', '2016-03-15', '2023-12-06 13:47:30', '2023-12-06 13:47:30'),
(2, 2, '1987-11-21 00:00:00', 690.00, 'Consequatur dolore', 'Nogod', 'Aut sunt magna exerc', '2020-10-21', '2023-12-06 13:48:36', '2023-12-06 13:48:36');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `quantity` int NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image_url` text COLLATE utf8mb4_unicode_ci,
  `manufacturer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expiration_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category_id`, `quantity`, `price`, `description`, `image_url`, `manufacturer`, `expiration_date`, `created_at`, `updated_at`) VALUES
(1, 'Bata Shoes', 1, 170, 1500.00, 'Ipsum reprehenderit', 'data:image/jpeg;base64,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', 'Quia quia in fugit', '1986-04-19', '2023-12-06 13:29:58', '2023-12-06 13:29:58'),
(2, 'Dell', 2, 302, 262000.00, 'Dolores ut vitae qui', 'data:image/jpeg;base64,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', 'Et non qui quia aliq', '1973-05-04', '2023-12-06 13:45:22', '2023-12-06 13:45:22'),
(3, 'Walton Television', 2, 799, 36100.00, 'Et id nihil est non', 'data:image/jpeg;base64,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', 'Quos libero consequa', '2000-09-03', '2023-12-06 13:46:14', '2023-12-06 13:46:14');

-- --------------------------------------------------------

--
-- Table structure for table `salaries`
--

CREATE TABLE `salaries` (
  `id` bigint UNSIGNED NOT NULL,
  `employee_id` bigint UNSIGNED NOT NULL,
  `month` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` int NOT NULL,
  `salary_amount` decimal(10,2) NOT NULL,
  `tax_deductions` decimal(8,2) DEFAULT NULL,
  `bonus` decimal(8,2) DEFAULT NULL,
  `overtime_hours` decimal(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `salaries`
--

INSERT INTO `salaries` (`id`, `employee_id`, `month`, `year`, `salary_amount`, `tax_deductions`, `bonus`, `overtime_hours`, `created_at`, `updated_at`) VALUES
(1, 1, '12', 1979, 400000.00, 12.00, 5000.00, 2.00, '2023-12-06 13:41:40', '2023-12-06 13:41:40'),
(2, 2, '5', 1970, 20000.00, 71.00, 900.00, 2.00, '2023-12-06 13:42:20', '2023-12-06 13:42:20');

-- --------------------------------------------------------

--
-- Table structure for table `sales__reports`
--

CREATE TABLE `sales__reports` (
  `id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `order_id` bigint UNSIGNED NOT NULL,
  `quantity_sold` int NOT NULL,
  `total_amount` decimal(10,2) NOT NULL,
  `sale_date` date NOT NULL,
  `profit_margin` decimal(8,2) DEFAULT NULL,
  `discount_amount` decimal(10,2) DEFAULT NULL,
  `taxes` decimal(10,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sales__reports`
--

INSERT INTO `sales__reports` (`id`, `product_id`, `order_id`, `quantity_sold`, `total_amount`, `sale_date`, `profit_margin`, `discount_amount`, `taxes`, `created_at`, `updated_at`) VALUES
(1, 2, 2, 808, 60.00, '2014-12-08', 94.00, 3.00, 30.00, '2023-12-06 13:49:30', '2023-12-06 13:49:30'),
(2, 1, 1, 520, 36.00, '2022-09-07', 1.00, 39.00, 87.00, '2023-12-06 13:49:46', '2023-12-06 13:49:46'),
(3, 3, 2, 538, 3.00, '1998-01-26', 53.00, 5.00, 37.00, '2023-12-06 13:50:05', '2023-12-06 13:50:05');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `data_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `default_value` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `value`, `description`, `data_type`, `default_value`, `created_at`, `updated_at`) VALUES
(1, 'Ariel Fitzgerald', 'Dolore vel earum mod', 'Enim elit distincti', 'Excepturi unde dolor', 'Ducimus iste impedi', '2023-12-06 13:51:00', '2023-12-06 13:51:00');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `contact_person` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_balance` int DEFAULT NULL,
  `payment_terms` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`, `email`, `phone_number`, `address`, `contact_person`, `account_balance`, `payment_terms`, `created_at`, `updated_at`) VALUES
(1, 'Salman Khan', 'dezo@mailinator.com', '+1 (881) 372-1514', 'Khailkhet', '+1 (777) 998-5931', 7800, 'Bkash', '2023-12-06 13:37:20', '2023-12-06 13:37:52'),
(2, 'Sharuf Khan', 'zyjozovyr@mailinator.com', '+1 (358) 724-5705', 'Uttara', '+1 (912) 168-1315', 6800, 'Nagad', '2023-12-06 13:38:29', '2023-12-06 13:38:29'),
(3, 'Purnima Khatun', 'difujefo@mailinator.com', '+1 (843) 871-3187', 'Dhaka', '+1 (517) 979-9723', 500, 'Rocket', '2023-12-06 13:39:10', '2023-12-06 13:39:10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Cody Knowles', 'qyly@mailinator.com', NULL, '$2y$12$0prr9.5UJQsE9.AnRu5T4.ZFbh8NYpXGfoZ0aTbi729vV5tKTdDkG', NULL, '2023-12-06 13:27:32', '2023-12-06 13:27:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendences`
--
ALTER TABLE `attendences`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attendences_employee_id_foreign` (`employee_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_customer_id_foreign` (`customer_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `salaries`
--
ALTER TABLE `salaries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `salaries_employee_id_foreign` (`employee_id`);

--
-- Indexes for table `sales__reports`
--
ALTER TABLE `sales__reports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sales__reports_product_id_foreign` (`product_id`),
  ADD KEY `sales__reports_order_id_foreign` (`order_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
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
-- AUTO_INCREMENT for table `attendences`
--
ALTER TABLE `attendences`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `salaries`
--
ALTER TABLE `salaries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sales__reports`
--
ALTER TABLE `sales__reports`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendences`
--
ALTER TABLE `attendences`
  ADD CONSTRAINT `attendences_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `salaries`
--
ALTER TABLE `salaries`
  ADD CONSTRAINT `salaries_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sales__reports`
--
ALTER TABLE `sales__reports`
  ADD CONSTRAINT `sales__reports_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `sales__reports_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
