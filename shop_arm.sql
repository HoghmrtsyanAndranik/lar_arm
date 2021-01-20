-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Янв 19 2021 г., 15:01
-- Версия сервера: 10.1.38-MariaDB
-- Версия PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `shop_arm`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cart`
--

CREATE TABLE `cart` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `links`
--

CREATE TABLE `links` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `hash_codes` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(37, '2014_10_12_000000_create_users_table', 1),
(38, '2014_10_12_100000_create_password_resets_table', 1),
(39, '2020_10_09_132210_create_links_table', 1),
(40, '2020_10_09_132701_create_orders_table', 1),
(41, '2020_10_09_133353_create_order_details_table', 1),
(42, '2020_10_09_134818_create_products_table', 1),
(43, '2020_10_09_140121_create_product_photo_table', 1),
(44, '2020_10_09_140345_create_wishlist_table', 1),
(45, '2020_10_12_072106_create_cart_table', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `total`, `date`) VALUES
(1, 2, 1026, '2020-06-10'),
(2, 2, 1026, '2020-06-10'),
(3, 2, 1026, '2020-06-10'),
(4, 2, 1026, '2020-06-10'),
(5, 2, 1026, '2020-06-10'),
(6, 2, 288, '2020-06-10'),
(7, 2, 288, '2020-06-10'),
(8, 2, 21, '2020-06-10'),
(9, 2, 42, '2020-06-10'),
(10, 2, 42, '2020-06-10'),
(11, 2, 42, '2020-06-10'),
(12, 7, 223, '2020-06-17'),
(13, 7, 223, '2020-06-17'),
(14, 11, 1098, '2020-10-07'),
(15, 11, 1098, '2020-10-07'),
(16, 11, 1098, '2020-10-07'),
(17, 11, 1098, '2020-10-07'),
(18, 11, 1098, '2020-10-07'),
(19, 11, 0, '2020-10-07');

-- --------------------------------------------------------

--
-- Структура таблицы `order_details`
--

CREATE TABLE `order_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `count` int(11) NOT NULL,
  `stars` tinyint(3) UNSIGNED NOT NULL,
  `feedback` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `count`, `stars`, `feedback`) VALUES
(1, 10, 5, 2, 0, 'ok'),
(2, 11, 5, 2, 0, NULL),
(3, 12, 2, 1, 3, 'Nice product, thanks'),
(4, 12, 1, 1, 3, 'Average quality'),
(5, 13, 2, 1, 0, NULL),
(7, 15, 5, 23, 0, NULL),
(8, 15, 1, 5, 0, NULL),
(9, 16, 5, 23, 0, NULL),
(10, 16, 1, 5, 0, NULL),
(11, 17, 5, 23, 0, NULL),
(12, 17, 1, 5, 0, NULL),
(14, 18, 1, 5, 0, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `count` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `active` tinyint(3) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `count`, `description`, `user_id`, `active`) VALUES
(1, 'newprod', 123, 445, 'new style product', 1, 0),
(2, 'Oculus Rift S PC-Powered VR Gaming Headset', 100, 498, 'dkfjsldkfj', 2, 1),
(3, 'WowWee', 8, 100, 'Produced by WowWee for Pinkfong, official crea', 2, 0),
(5, 'Face Mask, UPF 50, Cools when Wet', 21, -88, 'Synthetic,Imported', 4, 0),
(6, 'user', 88888, 55, 'good', 11, 1),
(7, 'koshik', 15000, 6, 'lav koshik', 11, 1),
(8, 'shoes', 15000, 100, 'man winter shoes', 11, 1),
(9, 'shoes', 88888, 17, 'very good men shoes', 8, 1),
(10, 'computer', 185000, 3, 'pentium5', 8, 1),
(11, 'dddd', 5266, 10, 'good', 11, 1),
(12, 'computer', 200000, 77, 'thgis is good computer', 11, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `product_photo`
--

CREATE TABLE `product_photo` (
  `id` int(10) UNSIGNED NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `product_photo`
--

INSERT INTO `product_photo` (`id`, `url`, `product_id`) VALUES
(2, '1603090009news10719-main.jpeg', 9),
(3, '1603090009news10720-main.jpeg', 9),
(4, '1603090009news10721-main.jpg', 9),
(5, '1603090009news10722-main.jpeg', 9),
(6, '1603090009news10723-main.jpeg', 9),
(7, '1603178680news10727-main.jpeg', 10),
(8, '1603178680news10728-main.jpeg', 10),
(9, '1603178680news10729-main — копия.jpeg', 10),
(10, '1603178680news10730-main.jpeg', 10),
(11, '1603178680news10731-main.jpeg', 10),
(12, '1603178680news10733-main — копия.jpg', 10),
(13, '161106336515453954865c1cdd1eb0e33.png', 11),
(14, '16110635151.jpg', 12);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `surname` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` tinyint(4) DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(4) NOT NULL DEFAULT '0',
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `email`, `age`, `password`, `active`, `link`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Armine', 'Simonyan', 'armine@gmail.com', 25, '$2y$10$bfRz60gYTm6ya8nrq0eZL.IeTvWeBeNaS/rE6AxWlInoypG2TexoW', 1, '', 'admin', NULL, NULL),
(2, 'Armine', 'Simonyan', 'simonian.armine@gmail.com', 24, '$2y$10$0SR4.fQRr6TF36Zyojzh4OBexNDGr5VrGneAOL8Bk4dYqS2XMOtlC', 1, '2028072509', 'user', NULL, NULL),
(3, 'Lena', 'Ghazaryan', 'lena@gmail.com', 20, '$2y$10$/N87BZ9xcy0LvkErbtS11Ohhytd3U1uZsxOA1fXujltbQl4vXobYO', 0, '', 'user', NULL, NULL),
(4, 'Anna', 'Khachatryan', 'anna@gmail.com', 25, '$2y$10$lzju.Fom3a5zDIpyPUe7oO3HSKriYdBcb2rA1.C5zk1x5G3D42gI6', 0, '', 'user', NULL, NULL),
(7, 'Armine', 'Simonyan', 'armine1996.as@gmail.com', 23, '$2y$10$bTz6tSDRf4CUCjHnGXkyy.t7i.vNWsq0TZ8Fxmw.Q5dHknaepmGxW', 1, '', 'user', NULL, NULL),
(9, 'user', 'ՊԵՏՐՈՍՅԱՆ', 'hoghmrtsyan.and@yandex.com', 58, '$2y$10$4FV1r2pl/d.Tmuh/rH4FWOZlMvcYua3d7/7GZ16U26VLubGQN1xLy', 0, '0', 'user', NULL, NULL),
(11, 'Andranik', 'Hoghmrtsyan', 'hoghmrtsyan.and@mail.ru', 58, '$2y$10$JF5FoTbzigm4D.eKA84I9.qDrK7.thBi/mkhdHPXO93M.VrsP/PES', 1, '716096469', 'user', NULL, NULL),
(12, 'user', 'ՊԵՏՐՈՍՅԱՆ', 'hoghmrtsyan.and@yandex.ru', 33, '$2y$10$AFXikFkH7xRcp.8lphzEJufIOGvwkrP8RjRvHNsJ8T1YT3us2ujei', 0, '0', 'user', '2021-01-19 06:15:51', '2021-01-19 06:20:11');

-- --------------------------------------------------------

--
-- Структура таблицы `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `wishlist`
--

INSERT INTO `wishlist` (`id`, `user_id`, `product_id`) VALUES
(1, 2, 1),
(2, 2, 5);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cart_user_id_product_id_unique` (`user_id`,`product_id`),
  ADD KEY `cart_product_id_foreign` (`product_id`);

--
-- Индексы таблицы `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product_photo`
--
ALTER TABLE `product_photo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_photo_product_id_foreign` (`product_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Индексы таблицы `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `wishlist_user_id_product_id_unique` (`user_id`,`product_id`),
  ADD KEY `wishlist_product_id_foreign` (`product_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `links`
--
ALTER TABLE `links`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT для таблицы `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `product_photo`
--
ALTER TABLE `product_photo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `product_photo`
--
ALTER TABLE `product_photo`
  ADD CONSTRAINT `product_photo_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `wishlist_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
