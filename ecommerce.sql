-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2023 at 10:54 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart_models`
--

CREATE TABLE `cart_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `UserId` bigint(20) UNSIGNED NOT NULL,
  `Product_id` bigint(20) UNSIGNED NOT NULL,
  `Quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cart_models`
--

INSERT INTO `cart_models` (`id`, `UserId`, `Product_id`, `Quantity`, `created_at`, `updated_at`) VALUES
(93, 2, 7, '1', '2023-03-22 19:09:19', '2023-03-22 19:09:19'),
(94, 2, 7, '3', '2023-03-22 19:09:27', '2023-03-22 19:09:27'),
(95, 2, 7, '1', '2023-03-22 19:31:27', '2023-03-22 19:31:27'),
(96, 2, 7, '1', '2023-03-22 19:31:29', '2023-03-22 19:31:29'),
(97, 2, 9, '1', '2023-03-22 19:34:38', '2023-03-22 19:34:38'),
(98, 2, 9, '1', '2023-03-22 19:34:47', '2023-03-22 19:34:47'),
(100, 2, 9, '1', '2023-03-22 22:20:17', '2023-03-22 22:20:17'),
(101, 2, 9, '2', '2023-03-22 22:20:43', '2023-03-22 22:20:43'),
(102, 2, 4, '1', '2023-03-25 18:08:41', '2023-03-25 18:08:41'),
(103, 1, 6, '1', '2023-03-25 18:09:42', '2023-03-25 18:09:42'),
(104, 1, 4, '1', '2023-03-25 18:24:15', '2023-03-25 18:24:15'),
(105, 1, 6, '1', '2023-03-26 23:26:37', '2023-03-26 23:26:37'),
(106, 2, 8, '1', '2023-03-26 23:49:33', '2023-03-26 23:49:33'),
(107, 2, 1, '8', '2023-03-29 21:47:59', '2023-03-29 21:47:59'),
(108, 2, 9, '1', '2023-03-29 23:27:46', '2023-03-29 23:27:46'),
(109, 2, 4, '1', '2023-03-29 23:49:14', '2023-03-29 23:49:14'),
(112, 3, 1, '1', '2023-04-05 17:25:08', '2023-04-05 17:25:08'),
(113, 3, 1, '1', '2023-04-05 17:27:26', '2023-04-05 17:27:26'),
(114, 3, 27, '2', '2023-04-06 03:51:34', '2023-04-06 03:51:34'),
(115, 3, 7, '1', '2023-04-06 03:51:43', '2023-04-06 03:51:43');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `image_models`
--

CREATE TABLE `image_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `image_models`
--

INSERT INTO `image_models` (`id`, `Image`, `Product_id`, `created_at`, `updated_at`) VALUES
(12, '1679928943-25a694c61991611ab32d49a41b3eb4cf.jpg', 31, '2023-03-27 21:55:43', '2023-03-27 21:55:43'),
(13, '1679947527-25a694c61991611ab32d49a41b3eb4cf.jpg', 31, '2023-03-28 03:05:27', '2023-03-28 03:05:27'),
(14, '1679947664-25a694c61991611ab32d49a41b3eb4cf.jpg', 31, '2023-03-28 03:07:44', '2023-03-28 03:07:44'),
(15, '1679947671-25a694c61991611ab32d49a41b3eb4cf.jpg', 31, '2023-03-28 03:07:51', '2023-03-28 03:07:51'),
(16, '1679949593-0487ac307e8ad6cce8b136ed9ca4ae3b.jpg', 4, '2023-03-28 03:39:53', '2023-03-28 03:39:53'),
(17, '1679949885-0487ac307e8ad6cce8b136ed9ca4ae3b.jpg', 4, '2023-03-28 03:44:45', '2023-03-28 03:44:45'),
(18, '1679949900-0487ac307e8ad6cce8b136ed9ca4ae3b.jpg', 4, '2023-03-28 03:45:00', '2023-03-28 03:45:00'),
(19, '1680041384-cane-corso-italiano-2.jpg', 5, '2023-03-29 05:09:44', '2023-03-29 05:09:44'),
(20, '1680041385-640px-CaneCorso_(23).jpg', 5, '2023-03-29 05:09:45', '2023-03-29 05:09:45'),
(21, '1680041597-0487ac307e8ad6cce8b136ed9ca4ae3b.jpg', 4, '2023-03-29 05:13:17', '2023-03-29 05:13:17'),
(22, '1680041597-03e0179df99cbcb5.jpg', 4, '2023-03-29 05:13:17', '2023-03-29 05:13:17'),
(23, '1680041655-download (3).jpg', 6, '2023-03-29 05:14:15', '2023-03-29 05:14:15'),
(24, '1680041655-Caucasian-Shepherd.jpg', 6, '2023-03-29 05:14:15', '2023-03-29 05:14:15'),
(25, '1680041741-gettyimages-163524069-612x612.jpg', 7, '2023-03-29 05:15:41', '2023-03-29 05:15:41'),
(26, '1680041760-gettyimages-163524069-612x612.jpg', 7, '2023-03-29 05:16:00', '2023-03-29 05:16:00'),
(27, '1680041769-gettyimages-163524069-612x612.jpg', 7, '2023-03-29 05:16:09', '2023-03-29 05:16:09'),
(28, '1680041769-image.jpg', 7, '2023-03-29 05:16:09', '2023-03-29 05:16:09'),
(29, '1680041769-rot1.jpg', 7, '2023-03-29 05:16:09', '2023-03-29 05:16:09'),
(30, '1680041828-Siberian-Husky-standing-outdoors-in-the-winter.jpg', 8, '2023-03-29 05:17:08', '2023-03-29 05:17:08'),
(31, '1680041828-siberian-husky-1.jpg', 8, '2023-03-29 05:17:08', '2023-03-29 05:17:08'),
(32, '1680041908-download (6).jpg', 9, '2023-03-29 05:18:28', '2023-03-29 05:18:28'),
(33, '1680041908-download (5).jpg', 9, '2023-03-29 05:18:28', '2023-03-29 05:18:28'),
(34, '1680041908-download (4).jpg', 9, '2023-03-29 05:18:28', '2023-03-29 05:18:28'),
(35, '1680043204-25a694c61991611ab32d49a41b3eb4cf.jpg', 1, '2023-03-29 05:40:04', '2023-03-29 05:40:04'),
(36, '1680043204-pictures-of-german-shepherds-2000.jpg', 1, '2023-03-29 05:40:04', '2023-03-29 05:40:04'),
(37, '1680043204-Germain1.jpg', 1, '2023-03-29 05:40:04', '2023-03-29 05:40:04');

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
(19, '2014_10_12_000000_create_users_table', 1),
(20, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(21, '2019_08_19_000000_create_failed_jobs_table', 1),
(22, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(23, '2023_03_13_122340_create_user_create_models_table', 1),
(24, '2023_03_13_194003_create_products_models_table', 1),
(25, '2023_03_20_145711_create_cart_models_table', 2),
(26, '2023_03_26_171133_create_image_models_table', 3),
(27, '2023_03_27_135702_create_image_models_table', 4),
(28, '2023_04_04_105340_create_order_models_table', 5),
(29, '2023_04_04_184128_create_orders_table', 6),
(30, '2023_04_04_185853_create_orders_table', 7),
(31, '2023_04_04_190224_create_ordererd_products_table', 8),
(32, '2023_04_04_192000_create_ordered_table', 9),
(33, '2023_04_04_192000_create_ordereds_table.1', 10),
(34, '2023_04_04_201112_create_orderings_table', 10),
(35, '2023_04_04_214113_create_ordered_products', 11),
(36, '2023_04_04_214450_create_order_product_models_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `ordered`
--

CREATE TABLE `ordered` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `User_id` bigint(20) UNSIGNED NOT NULL,
  `Address1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Address2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Zip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Fone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ordereds`
--

CREATE TABLE `ordereds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `User_id` bigint(20) UNSIGNED NOT NULL,
  `Address1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Address2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Zip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Fone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orderings`
--

CREATE TABLE `orderings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `User_id` bigint(20) UNSIGNED NOT NULL,
  `Address1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Address2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Zip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tracking_id` int(255) NOT NULL,
  `Status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Fone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orderings`
--

INSERT INTO `orderings` (`id`, `User_id`, `Address1`, `Address2`, `Country`, `Zip`, `Fullname`, `Email`, `Tracking_id`, `Status`, `Fone`, `created_at`, `updated_at`) VALUES
(13, 3, 'bdqbveu', 'vuv', 'vuy', 'yvyv', 'Kelvin', 'bettybutter@gmail.com', 437544, 'Pending', 'yivf', '2023-04-10 21:16:00', '2023-04-06 03:26:57'),
(14, 3, 'hvy', 'yfyi', 'yfyv', 'ytfy', 'Kelvin', 'bettybutter@gmail.com', 993005, 'Pending', 'iyfy', '2023-04-10 21:16:00', '2023-04-06 03:50:03'),
(15, 3, 'udhu', 'ugyi', 'gyyvh', 'uhu', 'Kelvin', 'bettybutter@gmail.com', 419855, 'Pending', 'yvy', '2023-04-10 21:16:00', '2023-04-06 03:52:11');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `User_id` bigint(20) UNSIGNED NOT NULL,
  `Product_id` bigint(20) UNSIGNED NOT NULL,
  `Address1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Address2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Zip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Fone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_product_models`
--

CREATE TABLE `order_product_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `User_id` int(255) NOT NULL,
  `Order_id` bigint(20) UNSIGNED NOT NULL,
  `Product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `Quantity` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_product_models`
--

INSERT INTO `order_product_models` (`id`, `User_id`, `Order_id`, `Product_id`, `Quantity`, `created_at`, `updated_at`) VALUES
(6, 3, 13, 1, 1, '2023-04-06 03:26:58', '2023-04-06 03:26:58'),
(7, 3, 14, 1, 1, '2023-04-06 03:50:03', '2023-04-06 03:50:03'),
(8, 3, 15, 1, 1, '2023-04-06 03:52:12', '2023-04-06 03:52:12');

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
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products_models`
--

CREATE TABLE `products_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `DogName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Breed` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DogType` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Image` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `Description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products_models`
--

INSERT INTO `products_models` (`id`, `DogName`, `Breed`, `Color`, `Quantity`, `DogType`, `Price`, `Image`, `Description`, `created_at`, `updated_at`) VALUES
(1, 'German Shephard', 'German Shephard', 'White', '10', 'German', '20', '1680043204=Germain1.jpg', 'Generally considered dogkind\'s finest all-purpose worker, the German Shepherd Dog is a large, agile, muscular dog of noble character and high intelligence. Loyal, confident, courageous, and steady, the German Shepherd is truly a dog lover\'s delight.', '2023-03-15 20:29:18', '2023-03-29 05:40:04'),
(4, 'Boerboel', 'Boerboel', 'White', '3', 'South Africa', '20', '1680041597=03e0179df99cbcb5.jpg', 'The Boerboel is a large dog, with a strong bone structure and well-developed muscles. The head is large, and the muzzle short. The coat is short and sleek with dense hair coverage. The recognised colours are brindle, fawn, and brown; it may or may not have a black mask.', '2023-03-20 19:53:38', '2023-03-29 05:13:17'),
(5, 'Cane Corso', 'Cane Corso', 'White', '2', 'Tokyo', '50', '1680041384=cane-corso-italiano-2.jpg', 'Corsi are intelligent, loyal, eager to please, versatile, and intensely loyal to their humans, but are also assertive and willful, and can end up owning an unwitting owner.', '2023-03-20 19:54:22', '2023-03-29 05:09:44'),
(6, 'Caucasian Shepherd', 'Caucasian Shepherd', 'White', '4', 'Belgium', '34', '1680041655=Caucasian-Shepherd.jpg', 'The Caucasian Shepherd dog is a serious guardian breed and should never be taken lightly. The Caucasian is bold, fearless, self-confident and fierce when a threat is present, but he is soft, devoted, kind and endearing to his family, including other family pets.', '2023-03-20 19:57:22', '2023-03-29 05:14:15'),
(7, 'Rottweiler', 'Rottweiler', 'White', '6', 'Canadian', '24', '1680041769=rot1.jpg', 'The Rottweiler is a robust working breed of great strength descended from the mastiffs of the Roman legions. A gentle playmate and protector within the family circle, the Rottie observes the outside world with a self-assured aloofness.', '2023-03-20 20:00:18', '2023-03-29 05:16:09'),
(8, 'Siberian Husky', 'Siberian Husky', 'White', '6', 'Korean', '22', '1680041828=siberian-husky-1.jpg', 'Siberian Husky, a thickly coated, compact sled dog of medium size and great endurance, was developed to work in packs, pulling light loads at moderate speeds over vast frozen expanses. Sibes are friendly, fastidious, and dignified.', '2023-03-20 20:03:23', '2023-03-29 05:17:08'),
(9, 'Alaskan Malamute', 'Alaskan Malamute', 'White', '3', 'Alaska', '32', '1680041908=download (6).jpg', 'An immensely strong, heavy-duty worker of spitz type, the Alaskan Malamute is an affectionate, loyal, and playful but dignified dog recognizable by his well-furred plumed tail carried over the back, erect ears, and substantial bone. The Alaskan Malamute stands 23 to 25 inches at the shoulder and weighs 75 to 85 pounds.', '2023-03-20 20:07:58', '2023-03-29 05:18:28'),
(27, 'Bull Dog', 'Bull Dog', 'White', '4', 'British', '45', '1679927440-download (2).jpg', 'Kind but courageous, friendly but dignified, the Bulldog is a thick-set, low-slung, well-muscled bruiser whose \'sourmug\' face is the universal symbol of courage and tenacity. These docile, loyal companions adapt well to town or country. You can\'t mistake a Bulldog for any other breed.', '2023-03-27 20:59:14', '2023-03-27 21:30:40'),
(31, 'German Shephard', 'German Shephard', 'White', '3', 'German', '34', '1679928179-pictures-of-german-shepherds-2000.jpg', 'Generally considered dogkind\'s finest all-purpose worker, the German Shepherd Dog is a large, agile, muscular dog of noble character and high intelligence. Loyal, confident, courageous, and steady, the German Shepherd is truly a dog lover\'s delight.', '2023-03-27 21:33:06', '2023-03-27 21:42:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_create_models`
--

CREATE TABLE `user_create_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `FullName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `UserName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_create_models`
--

INSERT INTO `user_create_models` (`id`, `FullName`, `UserName`, `Email`, `Password`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Osagioduwa Nosakhare', 'Osas', 'odusoviasuyi@gmail.com', '$2y$10$GXU/1PAaIRUumSRqX6VFZe7CLPfTLsulV5NXdo1/HkFT3JdD6eRaa', '1', '2023-03-15 20:30:01', '2023-03-15 20:30:01'),
(2, 'Nosakhare Osas', 'Kelvin', 'lvinzamani@gmail.com', '$2y$10$m8A1fTrLGZ4em1DOxZxrHu5vSniwsFS.LylXuAu1Q9v3F7qGHF312', '0', '2023-03-20 18:29:10', '2023-03-20 18:29:10'),
(3, 'Kelvin Osas', 'SasTech', 'bettybutter@gmail.com', '$2y$10$Vv5/hdX9UutUY1r4AYQ5bOrmVP1zYJFOM0bfkU5AU35eL/UboafL6', '0', '2023-04-04 02:10:14', '2023-04-04 02:10:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart_models`
--
ALTER TABLE `cart_models`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cart_models_userid_foreign` (`UserId`),
  ADD KEY `cart_models_product_id_foreign` (`Product_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `image_models`
--
ALTER TABLE `image_models`
  ADD PRIMARY KEY (`id`),
  ADD KEY `image_models_product_id_foreign` (`Product_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ordered`
--
ALTER TABLE `ordered`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ordered_user_id_foreign` (`User_id`);

--
-- Indexes for table `ordereds`
--
ALTER TABLE `ordereds`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ordereds_user_id_foreign` (`User_id`);

--
-- Indexes for table `orderings`
--
ALTER TABLE `orderings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orderings_user_id_foreign` (`User_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`User_id`);

--
-- Indexes for table `order_product_models`
--
ALTER TABLE `order_product_models`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_product_models_order_id_foreign` (`Order_id`),
  ADD KEY `order_product_models_product_id_foreign` (`Product_id`);

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
-- Indexes for table `products_models`
--
ALTER TABLE `products_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_create_models`
--
ALTER TABLE `user_create_models`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_create_models_email_unique` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart_models`
--
ALTER TABLE `cart_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `image_models`
--
ALTER TABLE `image_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `ordered`
--
ALTER TABLE `ordered`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ordereds`
--
ALTER TABLE `ordereds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orderings`
--
ALTER TABLE `orderings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_product_models`
--
ALTER TABLE `order_product_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products_models`
--
ALTER TABLE `products_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_create_models`
--
ALTER TABLE `user_create_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart_models`
--
ALTER TABLE `cart_models`
  ADD CONSTRAINT `cart_models_product_id_foreign` FOREIGN KEY (`Product_id`) REFERENCES `products_models` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cart_models_userid_foreign` FOREIGN KEY (`UserId`) REFERENCES `user_create_models` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `image_models`
--
ALTER TABLE `image_models`
  ADD CONSTRAINT `image_models_product_id_foreign` FOREIGN KEY (`Product_id`) REFERENCES `products_models` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `ordered`
--
ALTER TABLE `ordered`
  ADD CONSTRAINT `ordered_user_id_foreign` FOREIGN KEY (`User_id`) REFERENCES `user_create_models` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `ordereds`
--
ALTER TABLE `ordereds`
  ADD CONSTRAINT `ordereds_user_id_foreign` FOREIGN KEY (`User_id`) REFERENCES `user_create_models` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orderings`
--
ALTER TABLE `orderings`
  ADD CONSTRAINT `orderings_user_id_foreign` FOREIGN KEY (`User_id`) REFERENCES `user_create_models` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`User_id`) REFERENCES `user_create_models` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_product_models`
--
ALTER TABLE `order_product_models`
  ADD CONSTRAINT `order_product_models_order_id_foreign` FOREIGN KEY (`Order_id`) REFERENCES `orderings` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_product_models_product_id_foreign` FOREIGN KEY (`Product_id`) REFERENCES `products_models` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
