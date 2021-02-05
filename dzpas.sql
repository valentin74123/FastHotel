-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 21 2021 г., 09:00
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `dzpas`
--

-- --------------------------------------------------------

--
-- Структура таблицы `reg`
--

CREATE TABLE `reg` (
  `id` int(11) NOT NULL,
  `login` varchar(25) COLLATE utf8_bin NOT NULL,
  `password_bcrypt` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `password_md5` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `salt` varchar(100) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Дамп данных таблицы `reg`
--

INSERT INTO `reg` (`id`, `login`, `password_bcrypt`, `password_md5`, `salt`) VALUES
(1, 'qwerty', '$2y$10$8q5qHQZJsndS2a8Wf/FicuOnUXMuYTXBf6bNmIi1ahb.TWx.0H9Da', 'c9c98790a64dceda81f88029966ceaaf', '70fdbbb59c0ccf4d8497'),
(3, 'qwerty', '$2y$10$2kCuBkEEuoCXfr4VkwANyealpot.QC8IiAv/9gGSHdxiijaO.i3AW', 'e9c71ac961c89a3fe22afc9f2292160e', 'e81ea6dec85530fef17d');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `reg`
--
ALTER TABLE `reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
