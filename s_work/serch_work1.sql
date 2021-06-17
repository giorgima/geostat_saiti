-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июн 13 2021 г., 16:05
-- Версия сервера: 10.4.18-MariaDB
-- Версия PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `serch_work1`
--

-- --------------------------------------------------------

--
-- Структура таблицы `serch1`
--

CREATE TABLE `serch1` (
  `id` int(11) NOT NULL,
  `mwarmoebeli` varchar(20) NOT NULL,
  `modeli` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `serch1`
--

INSERT INTO `serch1` (`id`, `mwarmoebeli`, `modeli`) VALUES
(1, 'AUD', 'A1'),
(2, 'AUD', 'A2'),
(3, 'AUD', 'A3'),
(4, 'BMW', '114'),
(5, 'BMW', '116'),
(6, 'BMW', '118');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `serch1`
--
ALTER TABLE `serch1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `serch1`
--
ALTER TABLE `serch1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
