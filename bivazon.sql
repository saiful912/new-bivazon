-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 04, 2020 at 07:20 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bivazon`
--

-- --------------------------------------------------------

--
-- Table structure for table `affiliates`
--

CREATE TABLE `affiliates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ref_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_balance` decimal(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `discount` decimal(8,2) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `sub_total` decimal(8,2) NOT NULL,
  `ip` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attribute` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `category_id`, `image`, `banner_image`, `slug`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Bag\'s', NULL, 'category5fa2e9d7ec1b34.90667750201104.jpg', 'category_banner5fa2e9d7dee118.97365637201104.jpg', 'bags', 1, NULL, '2020-11-04 17:50:15', '2020-11-04 17:50:15'),
(2, 'Toy\'s', NULL, 'category5fa2ea97851390.29565329201104.jpg', 'category_banner5fa2ea97817559.63755669201104.jpg', 'toys', 1, NULL, '2020-11-04 17:53:27', '2020-11-04 17:53:27'),
(3, 'Jewelry', NULL, 'category5fa2eaf40f0ac6.60697297201104.jpg', 'category_banner5fa2eaf406d737.01011145201104.jpg', 'jewelry', 1, NULL, '2020-11-04 17:55:00', '2020-11-04 17:55:00'),
(4, 'Cosmetics', NULL, 'category5fa2eb18f41a64.95760383201104.jpg', 'category_banner5fa2eb18eb93c0.53805732201104.jpg', 'cosmetics', 1, NULL, '2020-11-04 17:55:37', '2020-11-04 17:55:37'),
(5, 'Teddy Bear', NULL, 'category5fa2eb7d851e89.06707924201104.jpg', 'category_banner5fa2eb7d81d6e9.76971771201104.jpg', 'teddy-bear', 1, NULL, '2020-11-04 17:57:17', '2020-11-04 17:57:17'),
(6, 'Women\'s Fashion', NULL, 'category5fa2eeee011d83.99579212201105.jpg', 'category_banner5fa2eeedf18c85.32580693201105.jpg', 'womens-fashion', 1, NULL, '2020-11-04 18:11:58', '2020-11-04 18:11:58'),
(7, 'Women\'s Jeans', 6, 'category5fa2f92f52e729.20098010201105.jpg', 'category_banner5fa2f92f4f3595.20526059201105.jpg', 'womens-jeans', 1, NULL, '2020-11-04 18:55:43', '2020-11-04 18:55:43');

-- --------------------------------------------------------

--
-- Table structure for table `couriers`
--

CREATE TABLE `couriers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `district_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `couriers`
--

INSERT INTO `couriers` (`id`, `district_id`, `name`, `phone`, `address`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 2, 'Sundorbon', '01700899084', 'Motizil', NULL, '2020-11-04 19:06:50', '2020-11-04 19:06:50'),
(2, 1, 'Barisal Sadar Sundorbon Courier Service', '01700899084', 'Barisal Sador', 1, '2020-11-04 19:07:12', '2020-11-04 19:07:12');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_verified` timestamp NULL DEFAULT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `verified_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `full_name`, `phone`, `email`, `password`, `is_verified`, `ip`, `address`, `verified_token`, `created_at`, `updated_at`) VALUES
(1, 'Saiful Islam Pyada', '01700899084', NULL, '$2y$10$N8E0dmJJY10wzz7Dwgbx7u/pOAiZrJfmtQmt6i8P4wCLXIDkK6kNm', NULL, NULL, 'Barisal Sador', NULL, '2020-11-04 19:07:43', '2020-11-04 19:07:43');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `priority` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `name`, `priority`, `created_at`, `updated_at`) VALUES
(1, 'Barisal', 5, '2020-11-04 19:05:42', '2020-11-04 19:05:42'),
(2, 'Dhaka', 1, '2020-11-04 19:05:55', '2020-11-04 19:05:55'),
(3, 'Rajshai', 2, '2020-11-04 19:06:02', '2020-11-04 19:06:02'),
(4, 'Khulna', 4, '2020-11-04 19:06:09', '2020-11-04 19:06:09'),
(5, 'Chittagong', 3, '2020-11-04 19:06:22', '2020-11-04 19:06:22');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `merchants`
--

CREATE TABLE `merchants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shop_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shop_type` enum('retail','wholesale') COLLATE utf8mb4_unicode_ci NOT NULL,
  `shop_banner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `current_balance` decimal(8,2) NOT NULL DEFAULT '0.00',
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commission` decimal(8,2) DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extra` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `merchants`
--

INSERT INTO `merchants` (`id`, `shop_name`, `shop_type`, `shop_banner`, `category_id`, `current_balance`, `city`, `commission`, `address`, `extra`, `created_at`, `updated_at`) VALUES
(1, 'Own Choice24', 'wholesale', 'upload__5fa2f2c9eda001.90709318201105.jpg', 6, '0.00', NULL, '4.00', 'Mugdapara, Dhaka', NULL, '2020-11-04 18:13:45', '2020-11-04 18:35:14'),
(2, 'Own Choice', 'retail', 'upload__5fa2f4ec7db785.01767582201105.jpg', 6, '0.00', NULL, '5.00', NULL, NULL, '2020-11-04 18:16:30', '2020-11-04 18:37:32');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `send_at` timestamp NOT NULL,
  `seen_at` timestamp NOT NULL,
  `text` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from_id` bigint(20) UNSIGNED NOT NULL,
  `to_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_0000004_create_customers_table', 1),
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2020_04_20_005426_create_units_table', 1),
(6, '2020_09_03_205837_create_settings_table', 1),
(7, '2020_09_05_190228_create_categories_table', 1),
(8, '2020_09_05_191307_create_products_table', 1),
(9, '2020_09_05_193742_create_merchants_table', 1),
(10, '2020_09_05_194307_create_affiliates_table', 1),
(11, '2020_09_05_200813_create_carts_table', 1),
(12, '2020_09_05_200839_create_orders_table', 1),
(13, '2020_09_19_211538_create_sliders_table', 1),
(14, '2020_09_20_003749_create_order_items_table', 1),
(15, '2020_09_20_005708_create_messages_table', 1),
(16, '2020_09_20_010118_create_payments_table', 1),
(17, '2020_09_21_005924_create_districts_table', 1),
(18, '2020_09_21_005959_create_couriers_table', 1),
(19, '2020_10_29_003944_create_payment_request_table', 1),
(20, '2020_10_30_212632_create_feedback_table', 1),
(21, '2020_11_04_115741_create_galleries_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ip` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `merchant_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `invoice_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `district_id` bigint(20) UNSIGNED DEFAULT NULL,
  `courier_id` bigint(20) UNSIGNED DEFAULT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `courier_at` timestamp NULL DEFAULT NULL,
  `delivery_at` timestamp NULL DEFAULT NULL,
  `status` enum('failed','completed','confirmed','pending','onhold','processing','canceled') COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('retail') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_amount` decimal(8,2) NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci,
  `advance_amount` decimal(8,2) NOT NULL,
  `delivery_charge_outside_dhaka` decimal(8,2) DEFAULT NULL,
  `delivery_charge_inside_dhaka` decimal(8,2) DEFAULT NULL,
  `total_discount` decimal(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `ip`, `merchant_id`, `customer_id`, `invoice_no`, `user_id`, `email`, `name`, `phone`, `address`, `district_id`, `courier_id`, `payment_method`, `courier_at`, `delivery_at`, `status`, `type`, `total_amount`, `note`, `advance_amount`, `delivery_charge_outside_dhaka`, `delivery_charge_inside_dhaka`, `total_discount`, `created_at`, `updated_at`) VALUES
(1, '127.0.0.1', NULL, 1, 'INV_000000001', NULL, NULL, 'Saiful Islam Pyada', '01700899084', 'Barisal Sador', 1, 2, 'cash_on', NULL, NULL, 'failed', NULL, '4060.00', 'Nothing to say', '0.00', NULL, NULL, NULL, '2020-11-04 19:07:43', '2020-11-04 19:07:43');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `merchant_id` bigint(20) UNSIGNED DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `attribute` text COLLATE utf8mb4_unicode_ci,
  `line_total` decimal(8,2) NOT NULL,
  `unit_price` decimal(8,2) NOT NULL,
  `unit_discount` decimal(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `merchant_id`, `quantity`, `attribute`, `line_total`, `unit_price`, `unit_discount`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 2, 1, NULL, '4000.00', '4000.00', NULL, '2020-11-04 19:07:43', '2020-11-04 19:07:43');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `merchant_id` bigint(20) UNSIGNED NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` decimal(8,2) NOT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment_request`
--

CREATE TABLE `payment_request` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `invoice_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` longtext COLLATE utf8mb4_unicode_ci,
  `long_description` longtext COLLATE utf8mb4_unicode_ci,
  `price` decimal(22,2) DEFAULT NULL,
  `discount` decimal(8,2) DEFAULT NULL,
  `images` json DEFAULT NULL,
  `attribute` json DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `is_hot` tinyint(1) DEFAULT NULL,
  `sku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `short_description`, `long_description`, `price`, `discount`, `images`, `attribute`, `status`, `is_hot`, `sku`, `type`, `code`, `category_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Black Knit Denim High waist Jeans ( 10 )', 'black-knit-denim-high-waist-jeans-10', '<p><span style=\"color: #666666; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Fit: Super skinny fit</span><br style=\"box-sizing: border-box; color: #666666; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><span style=\"color: #666666; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Length: 38″-42″<br /></span>Size: 26-36<br style=\"box-sizing: border-box; color: #666666; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><span style=\"color: #666666; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Composition: Cotton 64%, Polyester 34%, Elastane 2%</span></p>', '<p><span style=\"color: #666666; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Fit: Super skinny fit</span><br style=\"box-sizing: border-box; color: #666666; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><span style=\"color: #666666; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Length: 38″-42″<br /></span>Size: 26-36<br style=\"box-sizing: border-box; color: #666666; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; background-color: #ffffff;\" /><span style=\"color: #666666; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">Composition: Cotton 64%, Polyester 34%, Elastane 2%</span></p>', '4200.00', '4000.00', '[\"product5fa2fa7a4da477.18815664201105.jpg\"]', NULL, 1, NULL, '#OWB10', 'wholesale', '#OWB10', 7, 2, '2020-11-04 19:01:14', '2020-11-04 19:04:47');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES
(1, 'logo', 'upload__5fa2fe13e68f42.82106191201105.png', '2020-11-04 17:39:26', '2020-11-04 19:16:36'),
(2, 'mobile_logo', '', '2020-11-04 17:39:26', '2020-11-04 17:39:26'),
(3, 'app_name', 'Bivazon.com', '2020-11-04 17:39:26', '2020-11-04 17:39:26'),
(4, 'copyright', 'Bivazon.com', '2020-11-04 17:39:26', '2020-11-04 17:39:26'),
(5, 'terms_and_condition', 'Bivazon.com', '2020-11-04 17:39:26', '2020-11-04 17:39:26'),
(6, 'address', 'Nothing', '2020-11-04 17:39:26', '2020-11-04 19:16:35'),
(7, 'google_map_url', '', '2020-11-04 17:39:26', '2020-11-04 17:39:26'),
(8, 'favicon', '', '2020-11-04 17:39:26', '2020-11-04 17:39:26'),
(9, 'delivery_charge_dhaka', '60', '2020-11-04 17:39:26', '2020-11-04 17:39:26'),
(10, 'delivery_charge_dhaka_outside', '60', '2020-11-04 17:39:26', '2020-11-04 17:39:26'),
(11, 'email', 'bivazon@gmail.com', '2020-11-04 17:39:26', '2020-11-04 17:39:26'),
(12, 'lang', 'en', '2020-11-04 17:39:26', '2020-11-04 17:39:26'),
(13, 'facebook_url', '', '2020-11-04 17:39:26', '2020-11-04 17:39:26'),
(14, 'instagram_url', '', '2020-11-04 17:39:26', '2020-11-04 17:39:26'),
(15, 'is_maintained', '', '2020-11-04 17:39:27', '2020-11-04 17:39:27'),
(16, 'invoice_date_format', 'Y-M-D', '2020-11-04 17:39:27', '2020-11-04 17:39:27'),
(17, 'currency', '৳', '2020-11-04 17:39:27', '2020-11-04 17:39:27'),
(18, 'money_format', '00', '2020-11-04 17:39:27', '2020-11-04 17:39:27'),
(19, 'timezone', 'Asia/Dhaka', '2020-11-04 17:39:27', '2020-11-04 17:39:27'),
(20, 'is_database_backup', '', '2020-11-04 17:39:27', '2020-11-04 17:39:27'),
(21, 'bkash', '000', '2020-11-04 17:39:27', '2020-11-04 17:39:27'),
(22, 'nagod', '000', '2020-11-04 17:39:27', '2020-11-04 17:39:27'),
(23, 'rocket', '', '2020-11-04 17:39:27', '2020-11-04 17:39:27'),
(24, 'min_wholesale_order_limit', '2000', '2020-11-04 17:39:27', '2020-11-04 17:39:27'),
(25, 'min_retail_order_limit', '2000', '2020-11-04 17:39:27', '2020-11-04 17:39:27'),
(26, 'affiliate_registration', '1', '2020-11-04 17:39:27', '2020-11-04 17:39:27');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extra` json DEFAULT NULL,
  `priority` int(11) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `image`, `button_text`, `button_link`, `extra`, `priority`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Summer 50% Discount Offer', '1604515365.jpg', 'Shop Now', 'https://bivazon.com', NULL, 1, 1, '2020-11-04 18:42:46', '2020-11-04 18:42:46'),
(2, 'Summer 50% Discount Offer 2', '1604515388.jpg', 'Shop Now', 'https://bivazon.com', NULL, 2, 1, '2020-11-04 18:43:08', '2020-11-04 18:43:08'),
(3, 'Winter 50% Discount Offer', '1604515409.png', 'Shop Now', 'https://bivazon.com', NULL, 3, 1, '2020-11-04 18:43:30', '2020-11-04 18:43:30');

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('admin','merchant','affiliate','retail') COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `is_confirmed` tinyint(1) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `merchant_id` bigint(20) UNSIGNED DEFAULT NULL,
  `affiliate_id` bigint(20) UNSIGNED DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `phone`, `type`, `status`, `is_confirmed`, `image`, `merchant_id`, `affiliate_id`, `password`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Riaz', 'admin@gmail.com', '01770146189', 'admin', 0, NULL, NULL, NULL, NULL, '$2y$10$f3uKPSd.pTnqBOBpMt6zieMb9..4EW3r43cqmhFqD.QzSz1orVuti', NULL, NULL, '2020-11-04 17:39:26', '2020-11-04 18:27:07'),
(2, 'Saiful Islam', 'mdsaifulislampyada@gmail.com', '01700899084', 'merchant', 0, NULL, 'upload__5fa2ef594d1f88.87078324201105.jpg', 1, NULL, '$2y$10$cYKnIGm.TKxvH16W5iSTNuxBdXaa2yD1ObcsObleBUbNh7f4QIT0O', NULL, NULL, '2020-11-04 18:13:45', '2020-11-04 18:35:14'),
(3, 'Ariful Islam', 'saiful@gmail.com', '01935901315', 'merchant', 0, NULL, 'upload__5fa2effe84e544.42139535201105.jpg', 2, NULL, '$2y$10$QWV/8lA8TqeriDirdxAVv.Gf3bm8tNW/fc4XnDm.z72lKlkb362Y6', NULL, NULL, '2020-11-04 18:16:30', '2020-11-04 18:37:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `affiliates`
--
ALTER TABLE `affiliates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`),
  ADD KEY `categories_category_id_foreign` (`category_id`);

--
-- Indexes for table `couriers`
--
ALTER TABLE `couriers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `couriers_district_id_foreign` (`district_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_phone_unique` (`phone`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `merchants`
--
ALTER TABLE `merchants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

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
  ADD UNIQUE KEY `orders_invoice_no_unique` (`invoice_no`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payments_merchant_id_foreign` (`merchant_id`);

--
-- Indexes for table `payment_request`
--
ALTER TABLE `payment_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_name_unique` (`name`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`),
  ADD KEY `products_category_id_foreign` (`category_id`),
  ADD KEY `products_user_id_foreign` (`user_id`);

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
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `affiliates`
--
ALTER TABLE `affiliates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `couriers`
--
ALTER TABLE `couriers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `merchants`
--
ALTER TABLE `merchants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_request`
--
ALTER TABLE `payment_request`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `couriers`
--
ALTER TABLE `couriers`
  ADD CONSTRAINT `couriers_district_id_foreign` FOREIGN KEY (`district_id`) REFERENCES `districts` (`id`);

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`);

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_merchant_id_foreign` FOREIGN KEY (`merchant_id`) REFERENCES `merchants` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
