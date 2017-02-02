-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 02 2017 г., 15:12
-- Версия сервера: 5.5.50
-- Версия PHP: 5.4.45

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `_mymaintest`
--

-- --------------------------------------------------------

--
-- Структура таблицы `chanels`
--

CREATE TABLE IF NOT EXISTS `chanels` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `currentGame` varchar(50) NOT NULL,
  `logo` varchar(150) NOT NULL,
  `streamTitle` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `chanels`
--

INSERT INTO `chanels` (`id`, `name`, `currentGame`, `logo`, `streamTitle`, `status`) VALUES
(7, 'LeaveNeed', 'Gwent: The Witcher Card Game', 'https://static-cdn.jtvnw.net/jtv_user_pictures/leaveneed-profile_image-eebdb3ce731ac39d-300x300.jpeg', 'НИЛЬФЫ. ХАЙП.', 'Offline'),
(8, 'guit88man', 'Spelunky', 'https://static-cdn.jtvnw.net/jtv_user_pictures/guit88man-profile_image-8bb1d9ef6605403c-300x300.png', '(RUS) Spelunky', 'Offline'),
(9, 'Leonidish', 'Heroes of the Storm', 'https://static-cdn.jtvnw.net/jtv_user_pictures/leonidish-profile_image-2824041c557707d4-300x300.jpeg', '<Leonid> MasterYolo  ', 'Offline'),
(10, 'Onlyhardcoree', 'Counter-Strike: Global Offensive', 'https://static-cdn.jtvnw.net/jtv_user_pictures/onlyhardcoree-profile_image-1f43866404b98c81-300x300.jpeg', 'Only Насилие!', 'Offline'),
(11, 'harrentwist', 'Resident Evil 7 biohazard', 'https://static-cdn.jtvnw.net/jtv_user_pictures/harrentwist-profile_image-b7ba702156b2765f-300x300.png', 'Семейный портрет ', 'Offline'),
(12, 'Zloi_Mikki_Mouse', 'Dark Souls III', 'https://static-cdn.jtvnw.net/jtv_user_pictures/zloi_mikki_mouse-profile_image-d6e5a51c08acd1f1-300x300.png', 'Мышь под темным соусом 3 #5', 'Offline'),
(13, 'Nuke73', 'Momodora: Reverie Under the Moonlight', 'https://static-cdn.jtvnw.net/jtv_user_pictures/nuke73-profile_image-55124af4c4b3f24c-300x300.png', 'Инди-неделя #2', 'Offline'),
(16, 'khrisbalu', 'Creative', 'https://static-cdn.jtvnw.net/jtv_user_pictures/khrisbalu-profile_image-e806f51d59251fd2-300x300.png', 'inside #digitalpainting #digitalillustration', 'Offline'),
(17, 'NakoRush', 'Until Dawn', 'https://static-cdn.jtvnw.net/jtv_user_pictures/nakorush-profile_image-8cf49f87ca7f6166-300x300.jpeg', 'Welcome to...', 'Offline'),
(19, 'TrololoLove', '', '', '', 'Offline'),
(20, 'YurA_RiOaRt', '', '', '', 'Offline'),
(21, 'mickeyinspace', '', '', '', 'Offline'),
(23, 'lefort87', 'Dead by Daylight', 'https://static-cdn.jtvnw.net/jtv_user_pictures/lefort87-profile_image-773ab15a40c126dc-300x300.jpeg', 'Никакой ламповости, только хардкор.', 'Offline'),
(24, 'Gonzo_ru', '', '', '', 'Offline'),
(27, 'c_a_k_e', 'Conan Exiles', 'https://static-cdn.jtvnw.net/jtv_user_pictures/c_a_k_e-profile_image-87e53cf864b80a1c-300x300.png', 'Варварская заварка!', 'Offline'),
(28, 'co6a4kentv', 'Dota 2', 'https://static-cdn.jtvnw.net/jtv_user_pictures/co6a4kentv-profile_image-8fde6082f8bd3614-300x300.jpeg', 'Варвары нашли оружие', 'Live');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `chanels`
--
ALTER TABLE `chanels`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `chanels`
--
ALTER TABLE `chanels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
