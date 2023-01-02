-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2023 at 12:16 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `play`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_authorized` tinyint(1) NOT NULL DEFAULT 0,
  `locale` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'en'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `name`, `email`, `password`, `avatar`, `phone`, `created_at`, `updated_at`, `is_authorized`, `locale`) VALUES
(11, 'Ahmed Abdelrhim', 'abdelrhim.admin@gmail.com', '$2y$10$H5L/.IPVfT5WcFtIQNLslu7CZWuGG.ugPpfMKhSXtEqgluPhjnSQe', 'oReF1672566983.jpg', '01152067271', '2022-12-19 10:26:16', '2023-01-01 08:19:34', 0, 'en'),
(12, 'Ismail Ashraf', 'ismail@gmail.com', '$2y$10$Xyb80oyuiddvvjTvm5jTfe6Hfk5QA2RGKbjpXEieAiK0sqs94D7J6', 'bgfU1671453343.jpg', '01116520328', '2022-12-19 10:26:16', '2022-12-19 10:35:43', 0, 'en'),
(13, 'Ahmed Azzam', 'azzam@gmail.com', '$2y$10$RLjXaMU53/fdY9xTbg4L9OR.gLqaTTxZ2TGJGKBmjqHXr9FaKyWH6', 'xeKt1671453365.jpg', '01152067272', '2022-12-19 10:26:16', '2022-12-19 10:36:05', 0, 'en'),
(14, 'Omar Sandoby', 'sandoby@gmail.com', '$2y$10$LbMaFL22XxylUy8yIiMMZunnyZRfiQbaCegFG99KBAJ9FfZf/l7EK', NULL, '01152067273', '2022-12-19 10:26:16', '2022-12-19 10:26:16', 0, 'en'),
(15, 'Anas Rabea', 'anas@gmail.com', '$2y$10$KKh7FCb.XZyU8LmC3EiA4OJzfAot/4NiYwJTBFes2MnPtqe9p6gU2', 'yneT1671453383.jpg', '01014012312', '2022-12-19 10:26:16', '2022-12-19 10:36:23', 0, 'en');

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--

CREATE TABLE `blog_posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_posts`
--

INSERT INTO `blog_posts` (`id`, `author_id`, `title`, `content`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 12, 'Chaim Moore', 'Voluptatem aliquam quia dicta voluptatibus et sed laborum. Vel id qui eligendi debitis ut. Dolorem voluptate et eos adipisci optio.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(2, 15, 'Dr. Donna Carroll PhD', 'Accusamus cumque deleniti eveniet. Et vel aspernatur laboriosam dolorum. Quam ut error quod. Eveniet deserunt temporibus ducimus est voluptatem hic.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(3, 15, 'Sheridan Walter Jr.', 'Eos et eveniet ut quisquam sunt. Sint expedita deserunt delectus perspiciatis nobis voluptas dignissimos. Quisquam debitis ea ut rerum.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(4, 13, 'Kraig Swift', 'Est quia autem repellat quod. Pariatur cupiditate aspernatur aperiam nihil assumenda et aut. Veritatis dolor sit molestiae enim suscipit qui quo. Dolores dolor quos eaque cupiditate numquam et eius.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(5, 13, 'Alexandrea Koch Jr.', 'Corporis aliquam sint et. Pariatur reprehenderit ut molestiae velit quod velit aut. Dignissimos tenetur veniam consequatur aspernatur voluptatem. Excepturi rerum repudiandae et totam beatae animi.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(6, 13, 'Chaz Schiller', 'Maiores earum id quos atque aut quas omnis. Illo quod est est deserunt saepe perspiciatis fugit. Deserunt voluptas itaque aspernatur fugiat quod est.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(7, 15, 'Mr. Orlando Ritchie PhD', 'Et necessitatibus nulla sit laudantium. Est est aspernatur occaecati. Rerum quasi accusantium iusto et perspiciatis sunt nobis occaecati. Dolores soluta velit veniam eveniet a pariatur eos qui.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(8, 15, 'Polly Deckow', 'Et aut qui inventore. Ea ea quaerat sit qui ipsam facere labore. Molestiae soluta enim rerum ipsam molestiae. Et voluptatum iste voluptas modi id est aliquam.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(9, 12, 'Francesca O\'Hara', 'Velit quaerat necessitatibus aut est quidem maxime nihil. Adipisci culpa alias odio est hic in. Saepe et mollitia commodi.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(10, 11, 'Chadd Heathcote', 'Possimus repellendus voluptas temporibus qui tempora. Id accusamus iusto maiores eos et amet optio. Quo hic voluptatem magni sit exercitationem molestiae qui.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(11, 12, 'Rhianna Romaguera', 'Vitae odit reiciendis ut. Blanditiis voluptas cumque quia nobis quis. Provident ipsam rem corrupti non esse veritatis laudantium doloribus.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(12, 15, 'Alanna Lockman', 'Ducimus aut voluptas eaque non. Quo est sapiente fugit vel atque omnis deleniti. Molestiae laboriosam iure sed sapiente autem. Unde recusandae modi magnam quas id saepe asperiores.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(13, 13, 'Prof. Devin Kemmer DVM', 'Aut ullam rerum cupiditate aliquid officia sint autem ad. Sapiente quia laboriosam in aut. Eos ad dolorem qui assumenda. Magni architecto sapiente voluptas enim eum. Adipisci eligendi illo sit.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(14, 13, 'Ms. Berneice Roob DVM', 'Aperiam in minus aut aut tempore sunt ad. Sed quam aperiam consectetur. Qui consequatur libero velit rerum. Enim assumenda labore eligendi suscipit minus atque.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(15, 11, 'Otis Brown', 'Quisquam dolores voluptatibus et aut consequatur unde deserunt et. Corrupti dolor reprehenderit impedit et. Nesciunt aut cumque rem eius. Consectetur libero aut minima non praesentium ipsam.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(16, 13, 'Mrs. Filomena Hill', 'Facere id ut iste aut. Cumque nulla enim quae quibusdam aut perferendis tenetur asperiores. Totam voluptatem sequi accusantium velit magnam temporibus quod eaque.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(17, 12, 'Geoffrey Hirthe IV', 'Aut temporibus doloremque consequuntur et distinctio suscipit. Corporis dolore nulla eum doloremque odit aut facere. Qui qui et incidunt quam dolorem aut.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(18, 14, 'Delbert Johnston', 'Magni quia repellendus vitae sequi non dolor. Omnis dolorum rem rem et occaecati corporis autem. Corrupti reiciendis consequatur quae rerum velit.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(19, 15, 'Kendra Barrows', 'Quia animi earum rerum quia repellendus. Nemo nulla sed dignissimos voluptates autem voluptatem. Et perferendis consequatur id ut dicta.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(20, 13, 'Therese Hermiston', 'Est quidem repellendus nesciunt qui maiores cum nesciunt. Et ipsum consequatur nihil eum officia ex. Omnis sed quos laboriosam sed quia saepe ipsa.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(21, 13, 'Tristin Cronin', 'Voluptatum iure in et provident sunt. Ea reprehenderit ea nisi tempora culpa. Harum cupiditate cupiditate ullam fugit quia. Fugit et dolores fugiat et unde et. Est distinctio est repellat sunt.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(22, 12, 'Kamille Little', 'Ea est aut tempore velit culpa est odit. Adipisci vitae dolorum nam quia suscipit voluptatem minus.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(23, 13, 'Katlyn Kulas', 'Natus ea iste sed aperiam. Accusantium sed qui explicabo vel et est. Incidunt voluptas rerum ullam. Accusantium animi qui voluptates repudiandae.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(24, 15, 'Rosa Cassin', 'A adipisci tempora deleniti quas minus. Aliquid praesentium ut earum inventore aut ut et porro. Non quae et rerum et at aliquid corporis.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(25, 12, 'Pamela Bradtke', 'Totam reiciendis nisi enim repudiandae atque id delectus. Et autem temporibus iure. Et delectus vel corporis dolores tenetur nihil.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(26, 13, 'Forest Becker V', 'In error accusantium unde distinctio nihil. Aut doloribus maiores ut amet mollitia temporibus quo. Voluptatem sit et corporis neque mollitia enim reprehenderit. Dolores iure deleniti laborum.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(27, 14, 'Miss Antonia Medhurst', 'Animi sequi autem omnis. Nisi nisi inventore accusantium aut ducimus dignissimos. Eveniet facere et est aspernatur.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(28, 11, 'Miss Anastasia Batz DDS', 'Voluptate corrupti quos hic harum aut. Ut facilis saepe hic eveniet non. Impedit a unde animi non. Mollitia repudiandae expedita ut qui aspernatur.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(29, 11, 'Dan Nienow', 'Nihil ab dolorum doloribus error voluptatibus. Maiores neque quas perferendis qui. Molestiae nisi ut est numquam voluptas.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(30, 13, 'Favian Lakin', 'Optio ipsum vel ut amet. Nulla odio consequatur perspiciatis occaecati. Voluptates nulla quia qui rerum quidem ut consequatur. Eligendi quaerat aut et.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(31, 15, 'Dr. Chadrick Kulas', 'Et et doloremque aut aut non. Sit omnis sed aut et libero. Esse nemo corrupti in maiores molestiae. Corporis velit amet ut perspiciatis quo.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(32, 12, 'Candace Brakus', 'Ratione labore ut illo aut quia repellat. Et neque omnis et doloribus dolores. Dignissimos laudantium consequatur dolorem aspernatur dolores consequuntur.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(33, 13, 'Mrs. Kelli O\'Conner Jr.', 'Est iste id odit est tenetur maxime laudantium. Deleniti similique aut qui. Quia quo voluptatem vero ipsum. Qui quod quia sunt id.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(34, 13, 'Keaton Jenkins', 'Harum quia libero omnis. Veritatis velit sint ab. Ut nesciunt et blanditiis delectus excepturi et repudiandae laboriosam. Et amet ducimus itaque quia.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(35, 12, 'Dr. Gaetano Satterfield V', 'Corporis debitis ratione natus debitis repellat. Reprehenderit sunt ullam et minima eos fugiat occaecati. Eos dolor aperiam esse harum qui.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(36, 13, 'Miss Hertha Dickens Jr.', 'Est iste animi et impedit. Vel fugit excepturi eaque sed ab illo.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(37, 11, 'Berta Boyle', 'Vero dolores autem quae et. Natus nisi beatae totam. Consequatur autem ut vel ex nisi quia aspernatur quidem. Ipsam ipsam nulla dolorem ut nam.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(38, 13, 'Adele Graham Jr.', 'Omnis eos et magni ipsam rerum natus magni. Totam qui delectus harum quisquam nostrum omnis esse mollitia. Animi assumenda et dignissimos est mollitia quasi.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(39, 13, 'Keeley Corkery', 'Laudantium quia quae et. Et ab et nisi accusamus aut dolore. Aut eos fugiat tempora officia qui.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(40, 14, 'Shane Prohaska', 'Ullam omnis asperiores iste architecto sequi delectus. Totam nobis quo ea neque et quae ipsum. Eum saepe voluptas enim id cumque voluptatem.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(41, 15, 'Jolie Kris Sr.', 'Quis ut atque nulla non adipisci ducimus hic. Magni quos perspiciatis ut error optio doloribus non. Ut sit est praesentium ut aut fugiat non.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(42, 15, 'Lillie Kilback', 'Officiis enim accusantium adipisci fugiat. Ut deserunt deserunt provident quod nihil. Et ratione cumque corporis nihil aut.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(43, 15, 'Ignacio Crona', 'Sit ipsum sit molestias quo hic minus. Maiores voluptatem nemo ipsa eum quasi vel.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(44, 13, 'Casandra Waters', 'Alias sit porro vel perspiciatis in. Animi esse repellendus aut ipsum. Fugit id id quod et ex unde.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(45, 12, 'Omer Schoen', 'Aperiam fugit minima id dicta. Unde et dolorum aperiam eum fuga qui et delectus. Magnam sunt eaque et quaerat est dolorem. Ut dolores incidunt quia cupiditate ullam voluptate.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(46, 13, 'Ophelia Terry', 'Odio veniam deserunt nostrum ut tenetur totam libero. Et ut voluptatibus ab enim quia.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(47, 13, 'Meda Klocko', 'Animi mollitia nisi odio consequatur repellendus quia eum. Ipsa voluptatem enim aperiam dolorem est rem.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(48, 12, 'Miss Estel Beatty Jr.', 'Ea quibusdam voluptatibus earum quod. Corrupti ut earum voluptatum similique sit. Quos eius et sed dicta sunt. Architecto vel commodi repudiandae. Itaque quo voluptas voluptatem iste minus.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(49, 12, 'Pinkie Rippin', 'Aut ipsa qui deleniti aut aspernatur quibusdam. Nobis sed fugiat earum et illo. Dolores tempore sunt aliquam vel nihil in.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(50, 11, 'Mr. Rogers Jenkins', 'Reprehenderit exercitationem est officiis in numquam. Odio aut ut ut vel voluptas. Quidem quidem non natus tenetur molestiae dicta et. Nihil ab eligendi dolor ut ut nostrum sequi.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(51, 14, 'Xavier Gerlach', 'Non tempora repellendus iure aliquam cupiditate. Asperiores corporis illum consequatur omnis itaque ad. Provident aliquid nulla facilis quod ipsam quam. Et eum nulla odit id.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(52, 12, 'Blake Rohan', 'Et doloremque omnis dolores omnis ullam. Quia omnis voluptas quod et quos nihil. Aperiam molestias dolores corrupti est.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(53, 13, 'Filiberto Watsica DDS', 'Quam accusamus velit unde. Quibusdam numquam doloribus ullam sit. Amet mollitia dolorum laudantium commodi quae.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(54, 14, 'Warren Nitzsche', 'Dolor cupiditate eaque qui quam ratione. Ut numquam numquam deserunt itaque dolorem. Tempore ratione debitis assumenda repellendus. Nam nostrum recusandae fugit tempore et cumque.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(55, 13, 'Ms. Allie Padberg IV', 'Error incidunt non velit vero iusto fuga repellendus. Cum facere alias qui eum. Nihil velit iusto repellendus.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(56, 12, 'Prof. Santina Braun', 'Non porro molestias dolor iure est. Doloribus in animi sunt corporis aut. Dolor non error error quia repudiandae. Exercitationem exercitationem eos dolores aliquid et.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(57, 13, 'Terrill Pfeffer MD', 'Voluptates sed inventore corporis ab. Esse quis ea cupiditate libero. Eius voluptatem et et consequatur ut dolorum.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(58, 12, 'Prof. Joe Johns II', 'Cupiditate molestiae doloremque quos quo et. Nesciunt rerum totam odit natus placeat.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(59, 11, 'Dolly Wyman PhD', 'Aperiam neque est quia ut qui recusandae. Consequatur asperiores quasi quidem ut. Voluptas sunt labore in omnis et.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(60, 12, 'Mireya Nitzsche DDS', 'Illo et necessitatibus vel corporis. Iste molestiae aliquam aliquid voluptas doloremque earum id. Quia sed exercitationem aut quia quia.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(61, 11, 'Prof. Dwight Kovacek PhD', 'Possimus veritatis magni quis dolorum architecto cum. Molestias optio quisquam voluptatem aliquid. Repellendus voluptatem deleniti esse velit. Eligendi vel quam tempora beatae quibusdam.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(62, 13, 'Ima Baumbach', 'Aut itaque commodi sed et autem. Dicta sed laboriosam rerum. Aspernatur vel voluptatem incidunt inventore.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(63, 15, 'Adrianna Friesen', 'Dolorem omnis exercitationem doloribus nostrum vero molestias. Ut quia non nihil rem rerum commodi itaque. Error iure qui et perspiciatis.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(64, 11, 'Giovanni Conn', 'Qui dolorum quisquam pariatur adipisci quam hic. Quia iure rem accusamus. Praesentium quaerat amet rerum et dolorem voluptas quos omnis.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(65, 12, 'Kade Skiles', 'Voluptatem expedita perspiciatis sit ut et iure est. Maiores autem dolor ut adipisci quis vitae quasi. Voluptas voluptas aliquid nemo.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(66, 14, 'Lew Robel', 'Aliquam eos ab voluptates aut modi dolores. Sequi minus laboriosam corrupti cum a aliquam excepturi.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(67, 12, 'Tianna Collins III', 'Aut delectus et ea molestiae quam voluptas sint. Quo ab amet maxime sit. Cum ut unde qui magni.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(68, 13, 'Dr. Henriette Reynolds', 'Corporis consequuntur ut distinctio laboriosam qui. Velit sint consequuntur similique et. Nulla nam quos voluptatem praesentium.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(69, 13, 'Dusty Pollich', 'Iure nulla deserunt ea soluta occaecati. Molestiae ea unde esse aspernatur quas vel accusantium. Animi culpa odio veritatis quae.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(70, 11, 'Dr. Zita Bradtke', 'Id est aut qui nihil praesentium quis velit. Exercitationem non et perspiciatis corporis esse perspiciatis. Excepturi quos quo rerum rerum ipsa consectetur. Sapiente dolor officia vel et.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(71, 15, 'Eladio Turcotte', 'Voluptatem adipisci quaerat ab in assumenda. Harum sint reprehenderit rem et. Nihil rem fugiat et in.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(72, 12, 'Pearlie Lueilwitz DVM', 'Assumenda id dolores nesciunt consequatur rerum natus dolores consequatur. Nisi porro officiis eligendi et. Voluptatem ea aut beatae totam sequi qui.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(73, 13, 'Cory Hahn', 'Doloremque dolores est aut dignissimos eveniet. Tempora fugiat alias dolor maiores rerum. Perspiciatis reprehenderit molestiae quas itaque sed illum esse.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(74, 14, 'Miss Marisol Olson', 'Corrupti reprehenderit officia totam laborum architecto veniam odit. Eos qui magni reprehenderit tempore. Magni illum dolore optio aut enim in unde.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(75, 14, 'General Kuphal', 'Quae quisquam consequatur laboriosam alias maiores at eveniet. Suscipit ipsum quia ab vel est. Minima non exercitationem dolor consectetur delectus.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(76, 12, 'Prof. Paxton Jerde', 'Aliquid dolorum quasi voluptas rerum dolor eos sunt. Exercitationem quae occaecati nesciunt. Rerum velit aut sit ipsa necessitatibus alias.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(77, 14, 'Prof. Ludwig Kiehn Jr.', 'Sint qui dolorem repudiandae omnis debitis molestiae quibusdam. Qui laudantium dolorem qui molestiae maiores. Laboriosam rerum dicta ut hic non cupiditate doloribus.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(78, 15, 'Orlando Harris', 'Debitis repellendus est neque consequatur rem ea. Sequi aut est id placeat soluta illo. Ut mollitia est vel et. Dolore eos odit similique nulla eaque.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(79, 13, 'Jarrett Strosin', 'Doloremque aut voluptatem quam in quos omnis et nisi. Ab in exercitationem voluptatibus iste. Eum nisi porro nihil corporis. Officia et odio tempore.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(80, 13, 'Emmalee Keeling', 'Nesciunt eos quisquam enim minus. Enim est quidem nesciunt voluptas saepe quia quia. Voluptatem quia beatae quisquam iusto est voluptatibus voluptas. Itaque debitis qui earum sapiente rerum eum.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(81, 15, 'Ethelyn Streich', 'Natus ipsum modi ut sit. Sunt et excepturi ducimus fugit corrupti. Sit sit in dolorem soluta. Labore ut ipsum nobis facere vero molestiae quia. Eum voluptate incidunt dolores voluptates sit.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(82, 15, 'Prof. Franz Lueilwitz II', 'Ratione non repellat possimus non iste voluptate nulla. Non quae eos neque voluptas saepe rerum consequatur. Ut dolorem mollitia quibusdam expedita quaerat.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(83, 11, 'Kiel Steuber', 'Laudantium molestiae quia iure quis ipsa repudiandae et. Ullam consectetur enim et molestiae voluptas inventore.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(84, 14, 'Catalina West', 'Modi aspernatur tenetur in numquam. Eos nihil minima nulla non labore. Minus error sed optio laborum. Ipsam blanditiis sint est eaque. Est repudiandae accusantium odit repudiandae dolores.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(85, 11, 'Ms. Kara Cole IV', 'Ab autem autem saepe ad illo. Id enim excepturi ad tempora possimus. Architecto voluptates nihil tempora voluptatem. Ut sed velit molestiae esse. Debitis qui ut enim ullam.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(86, 12, 'Liliane Schiller', 'Praesentium sunt aut dolorem molestiae. Blanditiis accusantium enim provident saepe et. Est sit maxime eos assumenda quos aut. Cumque sed fugit aspernatur illum culpa mollitia.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(87, 12, 'Leon Haley', 'In voluptatem qui reiciendis aut. Exercitationem officiis aliquam doloribus est voluptas. Aut provident rerum alias tempore aut.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(88, 12, 'Chance Baumbach', 'Tempore voluptatem neque dolorem. Hic iste omnis explicabo voluptas accusamus. Cumque quibusdam quasi est.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(89, 14, 'Noe Beatty', 'Sit voluptatem quae eius alias aliquam ex. Doloribus ut quis et voluptas corporis. Recusandae quis commodi tenetur enim iste molestias. Exercitationem nesciunt dolorem qui necessitatibus ea rerum et.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(90, 13, 'Mr. Jared Hoeger', 'Laboriosam rerum nobis ea recusandae. Praesentium autem voluptate nesciunt iure pariatur ipsum. In ab non expedita repellat aut sit qui.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(91, 15, 'Mr. Danny Barton', 'Nemo ipsam quia quis ipsa quae quos. Quae et sed impedit pariatur inventore quis. Dicta cumque exercitationem ducimus earum.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(92, 11, 'Baylee Lindgren', 'Aut quaerat libero voluptatum. Voluptatum amet et dolorem et dolorem fuga. Laboriosam eos minus amet nisi ipsum libero. Accusamus ut magni consequatur ut recusandae.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(93, 12, 'Mr. Theron Quigley VV', 'Qui perferendis velit est cum. Qui dolores maiores voluptas occaecati aut. Eum necessitatibus voluptas quos sunt. Aut dignissimos non et ipsum.', '2022-12-19 10:30:36', '2023-01-02 08:52:05', NULL),
(94, 13, 'Ms. Rosalia Hilpert PhD', 'Dicta quidem dolor magni voluptas et atque vero. Porro enim maxime dolorem corrupti. Rerum asperiores laboriosam deserunt illum nulla magni omnis.', '2022-12-19 10:30:36', '2022-12-19 10:30:36', NULL),
(95, 11, 'Johnathan Roob', 'Sint quas quam est ipsum voluptatem quis sunt. Sunt quaerat quisquam ipsum est. Ipsam est odit sit amet hic autem quam.', '2022-12-19 10:30:36', '2023-01-02 08:39:22', '2023-01-02 08:39:22'),
(96, 11, 'Oda Harvey', 'Velit blanditiis error ab autem nemo omnis corrupti. Voluptatem voluptatem dicta et totam sequi qui repudiandae. Vel vero qui et animi nesciunt et accusamus.', '2022-12-19 10:30:36', '2023-01-02 08:39:19', '2023-01-02 08:39:19'),
(97, 13, 'Lizzie Wilderman', 'Quia libero ullam sit. Corporis reiciendis mollitia assumenda repellendus ullam sit. Dolor nisi sint qui omnis.', '2022-12-19 10:30:36', '2023-01-02 08:39:13', '2023-01-02 08:39:13'),
(98, 11, 'Alexzander Glover', 'Similique et sit nam eveniet. Numquam ut error et non et odio. Rerum omnis vero consequatur.', '2022-12-19 10:30:36', '2023-01-02 08:36:45', '2023-01-02 08:36:45'),
(99, 13, 'Elmer Wolf Jr.', 'Et veniam voluptas nostrum aut. Eum corrupti illo harum similique nostrum atque non. Harum in tempora velit.', '2022-12-19 10:30:36', '2023-01-02 08:35:12', '2023-01-02 08:35:12'),
(100, 11, 'Mrs. Glenda Mante PhD', 'Laboriosam suscipit ipsum ut rerum. Ut et distinctio velit voluptatum quia esse perferendis. Recusandae recusandae odit rem eos aut. Modi et et aut consequatur.', '2022-12-19 10:30:36', '2023-01-02 08:06:50', '2023-01-02 08:06:50'),
(101, 11, 'dddddddddddddddd', 'ddddddddddddddddddddd', '2022-12-20 12:28:04', '2023-01-02 08:03:31', '2023-01-02 08:03:31');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `content`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 38, 'Quibusdam est quasi libero aut. Necessitatibus eaque optio et repudiandae et molestiae voluptas. Rem cum quod iste.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(2, 65, 'Error est praesentium accusamus velit eos. Quod aut vel non.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(3, 39, 'Sed officiis adipisci nesciunt eum. Minima debitis quia corrupti numquam vero excepturi. Labore in a maxime ipsa voluptate eos est. Nesciunt voluptates saepe tenetur.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(4, 68, 'Ea ea incidunt fugiat quasi asperiores est. Voluptatum quidem reiciendis voluptas sed et ut. Rerum nisi accusamus ab ut et placeat. Dolores natus a quia ducimus et totam eaque eos.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(5, 42, 'Cupiditate optio qui in corporis quibusdam aut excepturi. Voluptas quis ducimus debitis et molestiae et repellat.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(6, 77, 'Esse id at voluptatem ducimus dolore tenetur. Dicta a voluptatem quia doloribus qui nam id. Minus consequatur et in consequatur. Nesciunt ducimus consequatur eum delectus sunt id.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(7, 30, 'Ea adipisci non aliquid quas hic amet. Sapiente est maiores illo dicta consequuntur odit. Vitae et esse itaque cum aut inventore reiciendis.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(8, 64, 'Velit voluptatem quae quo voluptatibus sint minima et. Ut repellat beatae quia officia non non hic. Ipsum ut fugit voluptatem quae. Dolorum doloremque illo eum voluptatem fugit non.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(9, 82, 'Culpa nostrum cum accusamus nam consequatur veniam. Soluta cupiditate qui vel perspiciatis suscipit accusamus. Id ipsum in magni id ullam eos.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(10, 33, 'Quae inventore alias facere esse. Minus illo molestias et hic nulla similique. Similique ratione saepe deserunt libero iusto laudantium quasi. Sit ut ad corrupti voluptatem.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(11, 35, 'Quae quasi aperiam aliquid reiciendis porro. Et assumenda ullam vero nobis eveniet ad minima. Nobis optio laborum exercitationem repellat. Qui ex quia sed laborum vero dicta.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(12, 38, 'Dicta reiciendis iste corrupti corrupti ratione id. Esse rerum quia animi incidunt recusandae placeat saepe iusto. Tempore modi esse quis voluptas.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(13, 83, 'Porro assumenda qui aut tempora nisi non. Doloremque rem repellendus ullam ipsum. Blanditiis molestiae architecto quia reprehenderit numquam est suscipit. Iusto molestiae dolorem ut est.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(14, 49, 'Saepe velit ut et nulla. Consequatur esse sunt quibusdam illo et. Consequuntur molestiae natus earum accusamus aliquid eligendi cum.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(15, 70, 'Sint consequatur qui dolores labore reiciendis delectus. Et omnis non placeat quia et. Commodi occaecati praesentium repellat ex harum magni.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(16, 5, 'Minus unde fugiat sed natus qui. Eligendi dolorem laboriosam esse doloremque.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(17, 21, 'Aut magnam repellat magnam. Aut possimus qui est possimus doloribus cupiditate. Aliquid similique dolores facilis tempora voluptas adipisci vel asperiores.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(18, 13, 'Voluptatem necessitatibus at eaque aliquid nulla aut qui ducimus. Et delectus quis ut autem est recusandae itaque. Et maxime pariatur aut.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(19, 77, 'Harum nesciunt velit dolor et tempora. Aut sed tempore ipsam officiis ullam. Quia suscipit nulla et et qui corporis. Et iusto eaque est labore culpa asperiores.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(20, 58, 'Quia esse nam labore fugiat. Et aut blanditiis qui recusandae. In magni architecto quia officia culpa provident. Veniam totam nihil labore ut omnis.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(21, 23, 'Provident perferendis rerum temporibus assumenda vel. Aut tenetur voluptatibus enim quis. Eius dignissimos omnis dolore cum sed est. Aspernatur aut qui mollitia non ducimus nisi et sunt.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(22, 93, 'At id ut natus exercitationem. Id qui nihil facilis recusandae et et. Officia nesciunt est velit consequuntur veritatis a perspiciatis. Qui veritatis consequatur blanditiis commodi est.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(23, 36, 'Ratione labore voluptas at. Fugiat omnis quidem at aut aut. Nihil nostrum enim non consequatur ullam laboriosam veniam. Quia nulla qui sunt impedit placeat perspiciatis qui.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(24, 10, 'Ratione possimus vero ut quis rem. Eos aut fuga impedit amet repellendus unde. Distinctio quo quod cupiditate architecto velit.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(25, 48, 'Ut sit accusamus qui aspernatur veniam corporis. Ea ad eos cum odio amet fugiat. Eligendi corrupti ut accusamus pariatur iure vitae dignissimos eligendi.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(26, 74, 'At laboriosam quidem sequi nemo dolore. Debitis non qui neque ut aliquam. Ut iure enim et qui sapiente maxime voluptate vel.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(27, 86, 'Distinctio voluptate magni voluptatum rerum. Dolorem hic dicta est dolores nihil omnis tempora non. Voluptatem tempora consequuntur vel necessitatibus facere sed.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(28, 50, 'Voluptatibus asperiores pariatur non soluta. Voluptas libero autem dolores ad qui. Maxime sit laboriosam autem sint nostrum quia expedita. Aut et dicta ut et vel molestias minus.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(29, 18, 'Reprehenderit minima quae reprehenderit vero labore ut quibusdam. Distinctio quis sed officia consequatur sed. Eum dolores quis animi nihil labore.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(30, 71, 'Molestiae iste quia quam rem voluptas. Ad enim voluptas quae eius. Earum in deserunt blanditiis.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(31, 87, 'Et soluta qui modi iusto occaecati nesciunt. Non vero molestias ut qui magni voluptatibus asperiores. Vel rerum esse et laborum voluptatem excepturi.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(32, 71, 'Natus similique adipisci eum non veniam quo consequatur. Laboriosam provident sequi dolores itaque et dignissimos. Quod pariatur saepe eligendi deleniti incidunt sint sed.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(33, 39, 'Enim et rem consequatur. Doloremque ut ut neque ipsum temporibus voluptatem. Commodi cupiditate molestias laborum numquam dolorem. Porro maxime animi ab nihil non. Odit recusandae est quia est vero.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(34, 42, 'Est eos magnam earum est. Aut repudiandae est qui voluptatem at neque. Tenetur eos omnis nisi.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(35, 58, 'Laboriosam nobis eius id. Sequi dolore aperiam illo ipsa et qui. Temporibus iure veniam hic vitae aut eius mollitia. Nulla hic et hic inventore consequatur sequi id sed.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(36, 24, 'Maiores consequatur molestiae optio vitae repudiandae voluptas impedit. Id reprehenderit deleniti dolor odio. Maxime qui earum excepturi. Molestiae voluptatibus deserunt natus ut.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(37, 69, 'Aut reprehenderit eos possimus sint consectetur. Saepe voluptates pariatur tempora voluptatem. Deleniti eius nemo voluptatem ad labore explicabo dolore. Cumque ea dolores voluptate et nulla sequi.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(38, 20, 'Enim maiores modi debitis voluptatum. Magni aut eaque voluptatum non repellat dignissimos. Quos et quas voluptates illo ullam ea.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(39, 94, 'Ab dolores reprehenderit quae est voluptas dolores dolores. Ea esse repudiandae est sed. Veritatis in esse et laudantium quas. Ut recusandae fuga nihil fugit.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(40, 30, 'Omnis quod deserunt qui. Delectus error alias dolore suscipit. Qui voluptas autem non eius ut omnis.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(41, 72, 'Sunt quis error nihil omnis eius velit. Reprehenderit voluptatum culpa assumenda blanditiis quisquam aut quaerat. Ducimus magnam et aut in velit et tempora.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(42, 99, 'Nulla corrupti officiis ipsam aperiam. Praesentium tempora et autem.', '2022-12-19 10:30:37', '2023-01-02 08:35:12', '2023-01-02 08:35:12'),
(43, 4, 'Facilis est amet sed sunt placeat earum. Laudantium sint quam officiis quod. Dolorem aperiam sequi labore qui iste aut. Officia enim est quaerat sed consequatur iusto.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(44, 47, 'Adipisci qui deleniti et culpa. Non omnis vitae quia quis maxime assumenda quasi dolores. Quaerat voluptatum quia placeat possimus nobis.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(45, 72, 'Voluptas vel rerum modi dolor odit sunt. Commodi dolores totam dolorem iure dignissimos vel. Ducimus exercitationem molestiae sequi error amet et. Exercitationem ut tempore aut.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(46, 33, 'Et quia aut iure ab. Ut omnis perferendis tempora. Repellendus autem eveniet ex accusamus dignissimos dolorem magnam.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(47, 36, 'Ipsum minima optio quos expedita quos in quod. Aut rerum quisquam et. Itaque aut odio quia. Sint non voluptas minus quisquam et.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(48, 75, 'Et nihil quia repudiandae totam nostrum sint. Minus itaque et ea ea cumque ea nesciunt. Blanditiis quam et rerum odit. Autem unde ut ipsam.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(49, 61, 'Dolorum architecto fugit minus velit deleniti. Corrupti eveniet ut quisquam nihil aspernatur eaque aut. Autem omnis velit minima exercitationem tempora quis.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(50, 22, 'Quibusdam deleniti rerum facere animi. Vel omnis dolore inventore quibusdam aperiam est voluptatem. Libero aut pariatur commodi et dignissimos minus.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(51, 71, 'Nam eum doloribus voluptatibus. Quidem dolores voluptas consectetur voluptatibus. Velit voluptates repellendus sunt nulla hic molestiae sapiente.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(52, 59, 'Deleniti et sunt ducimus voluptates optio optio nobis. Dolor aut eaque id. Accusamus vero ut sequi.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(53, 75, 'Asperiores non perferendis quia numquam ab suscipit aspernatur. Fugit explicabo assumenda ipsam vel dolore ducimus.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(54, 9, 'Vel quo earum neque tempora omnis. Impedit minima qui et soluta incidunt non. Illo pariatur quia soluta dolorem. Sunt enim ut voluptatem repellat quibusdam odit.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(55, 98, 'Sit numquam voluptatem voluptatum excepturi deleniti natus non ducimus. Qui dolorem aut qui nihil ut rerum numquam beatae. Perspiciatis voluptas aut est voluptate voluptates earum.', '2022-12-19 10:30:37', '2023-01-02 08:36:44', '2023-01-02 08:36:44'),
(56, 17, 'Explicabo nulla saepe perferendis quisquam. Porro nemo in temporibus velit dolorem dolorem animi. Qui id ut explicabo deserunt odit et accusantium iure. Veritatis nobis placeat illo id blanditiis.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(57, 52, 'Autem doloremque qui velit eos velit voluptatem accusamus. Id quod adipisci aliquid assumenda eaque vel ab non. Sint et aut officia est ducimus. Quos est occaecati veniam non dolore.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(58, 86, 'Dolore mollitia et et pariatur eos. Harum earum consequatur voluptatem et aliquid tempore non. Voluptas a aut ut.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(59, 61, 'Quidem et magni eum quos optio nisi sit. Laboriosam nisi maiores voluptatum qui iste quis sunt.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(60, 16, 'A et reiciendis et ut voluptas. Dignissimos dolores aut aliquam aut. Eos odio et et vel. Quia aperiam optio possimus vero.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(61, 16, 'Ut fugit sint impedit voluptate est non voluptate. Nihil consequatur ducimus et magnam ut quia. Error vero quo est. Molestias illo et sit et repellat.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(62, 87, 'Dolore sed quisquam velit dolore. Dolor eos ullam non sint tempora modi perspiciatis. Reiciendis quo natus ipsum magnam est non. Reprehenderit quae adipisci id.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(63, 58, 'Consectetur eos recusandae quo mollitia. Minima aut nulla id. Rerum aut error vitae non placeat expedita.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(64, 96, 'Laborum iste rerum beatae nihil adipisci ut. Earum atque vel cumque illum. Quia excepturi maxime aliquam. Nam odio ea aut. Eum totam non tempore ut maxime dolor.', '2022-12-19 10:30:37', '2023-01-02 08:39:19', '2023-01-02 08:39:19'),
(65, 72, 'Est rerum libero ut quisquam aut repellat. Suscipit tempora eveniet mollitia animi nemo consequuntur. Aut quia voluptatem corporis omnis autem recusandae. Deserunt illum mollitia inventore est modi.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(66, 52, 'Sunt consequuntur ut perferendis laboriosam praesentium. Temporibus molestiae ad odio omnis neque nemo. Totam earum natus ea. Quibusdam et omnis voluptatem vel repudiandae soluta.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(67, 58, 'Est aperiam qui autem vel dolorem velit possimus. Laudantium consequatur assumenda earum quaerat. Aspernatur eos enim autem eum recusandae omnis atque.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(68, 100, 'Illo similique fugit earum iure veritatis ut. Et dolores eligendi vero ut voluptatibus quo sed. Eveniet et delectus numquam non nihil.', '2022-12-19 10:30:37', '2023-01-02 08:06:50', '2023-01-02 08:06:50'),
(69, 21, 'In ratione molestiae quos asperiores ut voluptatem. Accusamus aut sint quo molestiae aspernatur. Unde qui molestiae ipsam.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(70, 72, 'Quae voluptas soluta cum et. Qui et quam voluptatibus sed ea sint. Ab natus et similique numquam ducimus qui distinctio.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(71, 30, 'Voluptas et animi nam delectus sed tempora rerum. Omnis vero nemo perferendis sequi ipsa quod. Quibusdam tenetur perspiciatis aut in.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(72, 17, 'Eligendi optio molestiae temporibus non dignissimos odio rem. Blanditiis eaque iure similique qui dignissimos consectetur. Consequatur aut illo esse dolore autem.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(73, 22, 'Dolor aut suscipit nihil quia est et. Non et consequatur quidem rem. Itaque sint in dolorem eos.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(74, 53, 'Similique nobis pariatur quisquam debitis facere. Cupiditate aliquam nesciunt asperiores eligendi id odio quaerat.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(75, 81, 'Magnam error nemo suscipit voluptas. Asperiores dolores qui quam molestiae eum quisquam voluptatem. Fugiat minima consequuntur qui eius facere voluptatibus et. Ipsa reiciendis aut animi ullam.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(76, 29, 'Aut odit quo voluptatem ut est sed. Distinctio mollitia occaecati temporibus eum et. Ut inventore natus minus quia eius quisquam cupiditate.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(77, 38, 'Quia animi aliquam facilis et. Qui qui non sunt magnam temporibus quasi. Dolorem minima harum culpa eligendi veritatis. Et reprehenderit officiis repudiandae dignissimos nihil odio fugiat.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(78, 54, 'Non explicabo debitis non et possimus. Culpa nihil ipsam qui. Ipsum nostrum odit fugit sed.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(79, 72, 'Veniam est doloribus non ut eos quis. Impedit praesentium et id soluta omnis. Maxime ipsa aperiam consequatur nulla. Recusandae non voluptas quis enim est.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(80, 33, 'Distinctio error et ab aut. Dolor tempore non aut voluptatem. Nulla enim quaerat harum cumque autem. Optio voluptates aut dolor maiores. Velit ipsa molestias tenetur temporibus vel blanditiis.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(81, 60, 'Ad et delectus repellat. Alias magnam nulla quos consequuntur reprehenderit saepe earum. Provident ut vel consequatur perspiciatis officiis vero.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(82, 65, 'Corporis expedita voluptas fuga optio. Amet veritatis rerum impedit illum architecto iusto corrupti. Enim doloremque vero voluptatem non iste odio corrupti. At vitae accusantium esse iure.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(83, 50, 'Aliquam nisi reprehenderit a neque aut. Natus odit est explicabo totam. Nam perferendis et blanditiis voluptas. Inventore sapiente consequuntur laboriosam earum est officia molestias.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(84, 76, 'Minima quo inventore asperiores aperiam pariatur sint. Perspiciatis alias culpa rerum vel.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(85, 83, 'Voluptates optio impedit vel dolores. Sint culpa consequatur deserunt quis ipsam et commodi quis.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(86, 58, 'Omnis odio repellendus maxime harum magni eius. Eum iusto unde sapiente. Ut quia rerum nihil ut exercitationem.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(87, 58, 'Et laboriosam autem voluptatibus quia esse ut. Non repellendus eveniet nostrum est atque ratione. Voluptatum et enim delectus repellat et ratione. Et ea dolores aut non reprehenderit.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(88, 27, 'Ducimus voluptatem tempora quibusdam expedita eum cupiditate et. Cum ipsam eius nihil. Cumque qui molestiae aut ea repellat. Sit sapiente recusandae nobis porro odit commodi.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(89, 28, 'Quia accusantium sed vel fugiat. Culpa quia voluptas animi qui ab eos.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(90, 34, 'Consequatur aut rem quos nobis velit facere quis. Dolorum dolores quas ea nihil. Odit enim omnis est ut sit et. Doloribus repellendus voluptas quo ipsum aperiam.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(91, 46, 'Alias est delectus id fugit modi cupiditate nam. Quia magni velit id consectetur quae dolorem commodi.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(92, 82, 'Quia aut aut ut qui. Distinctio saepe eum delectus. Voluptate eum aut amet nemo.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(93, 26, 'Hic quae rerum voluptas vero cumque. Provident beatae adipisci vel consectetur. Enim non voluptas magni sequi aut similique.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(94, 15, 'Facilis velit maiores eaque alias. Porro provident eos maiores laborum voluptate fugiat. Rerum at nesciunt qui.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(95, 75, 'Quisquam quisquam non sapiente. Sed similique cum eligendi ut laborum dolor non repellat. Iure omnis incidunt cum facere commodi voluptatem alias occaecati. Aut non ullam quasi sint.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(96, 67, 'Ipsa aut harum repudiandae natus. Voluptatibus unde qui eligendi labore. Qui dolores impedit iure.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(97, 33, 'Aliquid vitae non cum assumenda. Libero repellat natus qui provident eos in. Placeat at architecto neque quia.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(98, 73, 'Recusandae suscipit inventore omnis porro ipsam nam voluptatibus. Voluptates doloribus delectus fugit quia voluptatibus dignissimos. Corrupti pariatur voluptas aliquam consectetur sint.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(99, 66, 'Magni suscipit dolores nam. Nisi quas neque accusamus debitis tenetur. Nemo optio magnam dicta cupiditate autem ratione.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL),
(100, 24, 'Tenetur beatae recusandae pariatur cum maiores laborum. Voluptatem quasi natus voluptas non et sed. Dicta et id ipsam voluptas quo saepe maiores magnam. Suscipit aut natus deleniti molestiae est.', '2022-12-19 10:30:37', '2022-12-19 10:30:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `currencies`
--

CREATE TABLE `currencies` (
  `iso` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `currencies`
--

INSERT INTO `currencies` (`iso`, `created_at`, `updated_at`) VALUES
('aed', '2022-12-19 10:31:26', '2022-12-19 10:31:26'),
('egp', '2022-12-19 10:31:26', '2022-12-19 10:31:26'),
('eur', '2022-12-19 10:31:26', '2022-12-19 10:31:26'),
('gbp', '2022-12-19 10:31:26', '2022-12-19 10:31:26'),
('kwd', '2022-12-19 10:31:26', '2022-12-19 10:31:26'),
('sar', '2022-12-19 10:31:26', '2022-12-19 10:31:26'),
('usd', '2022-12-19 10:31:26', '2022-12-19 10:31:26');

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
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `imageable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imageable_id` bigint(20) UNSIGNED NOT NULL,
  `src` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `imageable_type`, `imageable_id`, `src`, `type`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\Author', 5, 'profiles/1671351542.jpg', 'avatar', '2022-12-18 06:19:02', '2022-12-18 06:19:02'),
(2, 'App\\Models\\Author', 6, 'profiles/1671351963.jpg', 'avatar', '2022-12-18 06:26:03', '2022-12-18 06:26:03'),
(3, 'App\\Models\\Author', 7, 'profiles/1671352191.jpg', 'avatar', '2022-12-18 06:29:51', '2022-12-18 06:29:51');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collection_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conversions_disk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` bigint(20) UNSIGNED NOT NULL,
  `manipulations` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`manipulations`)),
  `custom_properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`custom_properties`)),
  `generated_conversions` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`generated_conversions`)),
  `responsive_images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`responsive_images`)),
  `order_column` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `model_type`, `model_id`, `uuid`, `collection_name`, `name`, `file_name`, `mime_type`, `disk`, `conversions_disk`, `size`, `manipulations`, `custom_properties`, `generated_conversions`, `responsive_images`, `order_column`, `created_at`, `updated_at`) VALUES
(58, 'App\\Models\\Author', 2, '690ac0ab-ba0d-41d0-83ee-c22efd6f548a', 'images', 'azzam', 'azzam.jpg', 'image/jpeg', 'media', 'media', 45475, '[]', '[]', '[]', '[]', 1, '2022-12-15 11:57:51', '2022-12-15 11:57:51'),
(59, 'App\\Models\\Author', 5, '4ea135dd-806f-44d0-a8a6-e845786ce2f6', 'images', 'myPic', 'myPic.jpg', 'image/jpeg', 'media', 'media', 33282, '[]', '[]', '[]', '[]', 2, '2022-12-18 06:36:39', '2022-12-18 06:36:39'),
(60, 'App\\Models\\Author', 3, '527d5bfe-4084-43f3-827c-a692331f9608', 'images', 'ismail', 'ismail.jpg', 'image/jpeg', 'media', 'media', 17338, '[]', '[]', '[]', '[]', 3, '2022-12-19 08:11:51', '2022-12-19 08:11:51'),
(61, 'App\\Models\\Author', 5, '5af0132d-2271-4949-bf6e-56831ae1eba2', 'images', 'myPic-1', 'myPic-1.jpg', 'image/jpeg', 'media', 'media', 606787, '[]', '[]', '[]', '[]', 4, '2022-12-19 09:25:42', '2022-12-19 09:25:42'),
(62, 'App\\Models\\Author', 11, 'b88947a9-ee89-4ea6-a6cb-98b7784a2be7', 'images', 'myPic-1', 'myPic-1.jpg', 'image/jpeg', 'media', 'media', 606787, '[]', '[]', '[]', '[]', 5, '2022-12-19 10:35:17', '2022-12-19 10:35:17'),
(63, 'App\\Models\\Author', 12, '68c03d9e-c3f8-4e4a-b333-53edd5c7d4e5', 'images', 'ismail', 'ismail.jpg', 'image/jpeg', 'media', 'media', 17338, '[]', '[]', '[]', '[]', 6, '2022-12-19 10:35:43', '2022-12-19 10:35:43'),
(64, 'App\\Models\\Author', 13, '75d66b27-57ff-46e9-bcaf-659c462ee6ce', 'images', 'azzam', 'azzam.jpg', 'image/jpeg', 'media', 'media', 45475, '[]', '[]', '[]', '[]', 7, '2022-12-19 10:36:05', '2022-12-19 10:36:05'),
(65, 'App\\Models\\Author', 15, '2a949031-57c0-4b73-b04b-3686e29b0a3b', 'images', 'anas', 'anas.jpg', 'image/jpeg', 'media', 'media', 37208, '[]', '[]', '[]', '[]', 8, '2022-12-19 10:36:23', '2022-12-19 10:36:23'),
(66, 'App\\Models\\Author', 11, 'f740dce6-e41d-4be4-a19a-db281ed5e0a2', 'images', 'myPic-1', 'myPic-1.jpg', 'image/jpeg', 'media', 'media', 606787, '[]', '[]', '[]', '[]', 9, '2023-01-01 07:55:47', '2023-01-01 07:55:47'),
(67, 'App\\Models\\Author', 11, '1f3a8057-24b6-40e4-b7c6-af734e79a43c', 'images', 'myPic-1', 'myPic-1.jpg', 'image/jpeg', 'media', 'media', 606787, '[]', '[]', '[]', '[]', 10, '2023-01-01 07:56:23', '2023-01-01 07:56:23');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_09_02_023832_create_authors_table', 1),
(6, '2022_09_02_024202_create_blog_posts_table', 1),
(7, '2022_09_02_024800_create_comments_table', 1),
(8, '2022_09_03_023941_create_cascade_table', 1),
(9, '2022_09_03_024357_create_cascade_to_comments_table', 1),
(10, '2022_09_03_024605_create_soft_delete_table', 1),
(11, '2022_09_03_040059_add_soft_delete_to_comments_table', 1),
(12, '2022_09_05_223754_add_is_authorized_to_authors_table', 1),
(13, '2022_09_06_161259_create_payment_platforms_table', 1),
(14, '2022_09_06_161412_create_currencies_table', 1),
(15, '2022_10_18_223724_create_images_table', 1),
(16, '2022_10_24_165330_add_locale_to_authors_table', 1),
(17, '2022_10_28_032820_create_jobs_table', 1),
(18, '2022_11_01_183546_create_verification_codes_table', 1),
(19, '2022_11_09_012754_add_columns_to_verification_codes', 1),
(20, '2022_12_11_104819_create_permission_tables', 1),
(21, '2022_12_14_115416_create_media_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\Author', 12),
(2, 'App\\Models\\Author', 13),
(3, 'App\\Models\\Author', 14),
(4, 'App\\Models\\Author', 11),
(4, 'App\\Models\\Author', 15);

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
-- Table structure for table `payment_platforms`
--

CREATE TABLE `payment_platforms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'write post', 'author', '2022-12-14 06:55:54', '2022-12-14 06:55:54'),
(2, 'edit post', 'author', '2022-12-14 06:55:54', '2022-12-14 06:55:54'),
(3, 'publish post', 'author', '2022-12-14 06:55:54', '2022-12-14 06:55:54'),
(4, 'delete post', 'author', '2023-01-02 09:13:07', '2023-01-02 09:13:07');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'writer', 'author', '2022-12-14 06:55:54', '2022-12-14 06:55:54'),
(2, 'editor', 'author', '2022-12-14 06:55:54', '2022-12-14 06:55:54'),
(3, 'publisher', 'author', '2022-12-14 06:55:54', '2022-12-14 06:55:54'),
(4, 'admin', 'author', '2022-12-14 06:55:54', '2022-12-14 06:55:54');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 4),
(2, 2),
(2, 4),
(3, 3),
(3, 4),
(4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('OWHH1Y4MDueJwyFccJIkTNVKQfkvTiTjvdzYe8pK', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiU05Ib0dkRkRvTENUR2tUOG5IcWhxN015ajJpb2x0cTg0NXlMZ0p1bSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6MTA0MC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyNjoiaHR0cDovLzEyNy4wLjAuMToxMDQwL2hvbWUiO319', 1671442395),
('OWHH1Y4MDueJwyFccJIkTNVKQfkvTiTjvdzYe8pK', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiU05Ib0dkRkRvTENUR2tUOG5IcWhxN015ajJpb2x0cTg0NXlMZ0p1bSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6MTA0MC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyNjoiaHR0cDovLzEyNy4wLjAuMToxMDQwL2hvbWUiO319', 1671442395);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_team` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `user_id`, `name`, `personal_team`, `created_at`, `updated_at`) VALUES
(1, 1, 'Ria\'s Team', 1, '2022-12-19 07:20:04', '2022-12-19 07:20:04'),
(1, 1, 'Ria\'s Team', 1, '2022-12-19 07:20:04', '2022-12-19 07:20:04');

-- --------------------------------------------------------

--
-- Table structure for table `team_invitations`
--

CREATE TABLE `team_invitations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `team_user`
--

CREATE TABLE `team_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `verification_codes`
--

CREATE TABLE `verification_codes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` int(11) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `otp` int(11) NOT NULL,
  `expire_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `authors_name_unique` (`name`),
  ADD UNIQUE KEY `authors_email_unique` (`email`),
  ADD UNIQUE KEY `authors_phone_unique` (`phone`);

--
-- Indexes for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_posts_author_id_foreign` (`author_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_post_id_foreign` (`post_id`);

--
-- Indexes for table `currencies`
--
ALTER TABLE `currencies`
  ADD PRIMARY KEY (`iso`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_imageable_type_imageable_id_index` (`imageable_type`,`imageable_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `media_model_type_model_id_index` (`model_type`,`model_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payment_platforms`
--
ALTER TABLE `payment_platforms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `verification_codes`
--
ALTER TABLE `verification_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `verification_codes_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `payment_platforms`
--
ALTER TABLE `payment_platforms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `verification_codes`
--
ALTER TABLE `verification_codes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD CONSTRAINT `blog_posts_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `authors` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `blog_posts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `verification_codes`
--
ALTER TABLE `verification_codes`
  ADD CONSTRAINT `verification_codes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `authors` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
