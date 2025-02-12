-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2025-02-12 06:42:27
-- 伺服器版本： 10.4.32-MariaDB
-- PHP 版本： 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `website_01`
--

-- --------------------------------------------------------

--
-- 資料表結構 `about`
--

CREATE TABLE `about` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text NOT NULL,
  `title2` text NOT NULL,
  `title3` text NOT NULL,
  `text` text NOT NULL,
  `img` text NOT NULL,
  `img2` text NOT NULL,
  `img3` text NOT NULL,
  `img4` text NOT NULL,
  `nb` int(10) UNSIGNED NOT NULL,
  `nb2` int(10) UNSIGNED NOT NULL,
  `nb3` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `about`
--

INSERT INTO `about` (`id`, `title`, `title2`, `title3`, `text`, `img`, `img2`, `img3`, `img4`, `nb`, `nb2`, `nb3`) VALUES
(1, 'about us', 'Welcome to', '天空小品', '天空小品休閒農場 · 晨曦能量谷\r\n為「參與式農場」位於新北市淡水區-滬尾休閒農業區，\r\n其農產品採自然農法種植，吸收日月精華之健康農產品為主軸。 \r\n\r\n本農場為三個姊妺與三個先生同心經營，主張「3+3」經營理念，\r\n第一個「3」為：共耕、共饗、共好；\r\n第二個「3」為：生產、生活、生態。 \r\n\r\n希望來到本農場活動和一起生活的人們皆能感受到三生有幸般地幸福洋溢。', '02.jpg', '06.webp', '08.webp', '07.webp', 5, 8, 12);

-- --------------------------------------------------------

--
-- 資料表結構 `admin`
--

CREATE TABLE `admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `acc` text NOT NULL,
  `pw` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `admin`
--

INSERT INTO `admin` (`id`, `acc`, `pw`) VALUES
(1, 'admin', '1234'),
(2, 'root123', '123456');

-- --------------------------------------------------------

--
-- 資料表結構 `bottom`
--

CREATE TABLE `bottom` (
  `id` int(11) NOT NULL,
  `bottom` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `bottom`
--

INSERT INTO `bottom` (`id`, `bottom`) VALUES
(1, '2024 Manda@泰山');

-- --------------------------------------------------------

--
-- 資料表結構 `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` text NOT NULL,
  `text` text NOT NULL,
  `text2` text NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `images`
--

INSERT INTO `images` (`id`, `img`, `text`, `text2`, `sh`) VALUES
(1, '01.jpg', '共耕 共饗 共好', 'Farming. Eating. Enjoying.', 1),
(2, '05.webp', '共耕', '體驗農耕樂趣', 1),
(4, '06.webp', '共饗', '享受現採有機耕作食材烹飪美食', 1),
(5, '04_1.jpg', '共好', '共享遠離都市的美好時光', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `lists`
--

CREATE TABLE `lists` (
  `id` int(10) UNSIGNED NOT NULL,
  `href` text NOT NULL,
  `text` text NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL DEFAULT 1,
  `main_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `lists`
--

INSERT INTO `lists` (`id`, `href`, `text`, `sh`, `main_id`) VALUES
(2, '#about_us', 'about us', 1, 0),
(3, '#room', '夜宿', 1, 0),
(4, '#farming', '共耕', 1, 0),
(12, '#map', '導覽', 1, 0);

-- --------------------------------------------------------

--
-- 資料表結構 `logo`
--

CREATE TABLE `logo` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` text NOT NULL,
  `text` text NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `logo`
--

INSERT INTO `logo` (`id`, `img`, `text`, `sh`) VALUES
(2, 'theskyland_sw.png', '', 1),
(3, 'theskyland2.png', '', 0),
(12, 'apple-icon-180x180.webp', '', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `map`
--

CREATE TABLE `map` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` text NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `map`
--

INSERT INTO `map` (`id`, `img`, `sh`) VALUES
(1, 'farm-map.jpg', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `rooms`
--

CREATE TABLE `rooms` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` text NOT NULL,
  `text` text NOT NULL,
  `price` text NOT NULL,
  `beds` int(10) UNSIGNED NOT NULL,
  `people` int(10) UNSIGNED NOT NULL,
  `info` text NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `rooms`
--

INSERT INTO `rooms` (`id`, `img`, `text`, `price`, `beds`, `people`, `info`, `sh`) VALUES
(1, 'hotel-room_01.webp', '清嵐', ' 4,600', 1, 2, '客房特色，五感體驗情境內容：視覺、聽覺、味覺、嗅覺、觸覺，帶入具體的美好想像', 1),
(2, 'hotel-room_02.webp', '沐陽／棲霞', '5,800', 1, 2, '客房特色，五感體驗情境內容：視覺、聽覺、味覺、嗅覺、觸覺，帶入具體的美好想像。', 1),
(3, 'hotel-room_03.webp', '沐月', '8,200', 2, 4, '客房特色，五感體驗情境內容：視覺、聽覺、味覺、嗅覺、觸覺，帶入具體的美好想像。', 1),
(4, 'hotel-room_04.webp', '翔雲', '8,800', 2, 4, '客房特色，五感體驗情境內容：視覺、聽覺、味覺、嗅覺、觸覺，帶入具體的美好想像。', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `icon_class` text NOT NULL,
  `text` text NOT NULL,
  `text2` text NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `services`
--

INSERT INTO `services` (`id`, `icon_class`, `text`, `text2`, `sh`) VALUES
(1, 'fa fa-hotel', 'Rooms & Appartment', 'Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.', 1),
(5, 'fa fa-utensils', 'Food & Restaurant', 'Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.', 1),
(6, 'fa fa-seedling', 'Farming & planting', 'Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.', 1),
(7, 'fa fa-parking', 'Parking', '', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `total`
--

CREATE TABLE `total` (
  `id` int(10) UNSIGNED NOT NULL,
  `total` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `total`
--

INSERT INTO `total` (`id`, `total`) VALUES
(1, 121);

-- --------------------------------------------------------

--
-- 資料表結構 `vedio`
--

CREATE TABLE `vedio` (
  `id` int(10) UNSIGNED NOT NULL,
  `text` text NOT NULL,
  `text2` text NOT NULL,
  `text3` text NOT NULL,
  `href` text NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `vedio`
--

INSERT INTO `vedio` (`id`, `text`, `text2`, `text3`, `href`, `sh`) VALUES
(1, '採天然農法', 'Health Lifestyle', '無化肥、無農藥，就是要吃的健康', 'https://youtu.be/Ncab1fB5Xkk?si=Po_2bpt3fZzLu1n', 1);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `bottom`
--
ALTER TABLE `bottom`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `lists`
--
ALTER TABLE `lists`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `map`
--
ALTER TABLE `map`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `total`
--
ALTER TABLE `total`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `vedio`
--
ALTER TABLE `vedio`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `about`
--
ALTER TABLE `about`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `bottom`
--
ALTER TABLE `bottom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `lists`
--
ALTER TABLE `lists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `map`
--
ALTER TABLE `map`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `total`
--
ALTER TABLE `total`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `vedio`
--
ALTER TABLE `vedio`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
