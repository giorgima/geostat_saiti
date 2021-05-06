-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Май 06 2021 г., 12:17
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
-- База данных: `test1`
--

-- --------------------------------------------------------

--
-- Структура таблицы `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `title_ka` varchar(50) NOT NULL,
  `texts_ka` varchar(200) NOT NULL,
  `title_en` varchar(50) NOT NULL,
  `texts_en` varchar(200) NOT NULL,
  `foto_name` varchar(200) NOT NULL,
  `categoris` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `article`
--

INSERT INTO `article` (`id`, `title_ka`, `texts_ka`, `title_en`, `texts_en`, `foto_name`, `categoris`) VALUES
(40, 'სტატია', 'სტატიას', 'statia', 'statias', 'Capture.PNG', 'london'),
(41, 'asdas', 'asddas', 'dasd', 'dasd', 'Capture4.PNG', 'TOKIO'),
(42, 'სადასდ', 'სდასდას', 'hfdofas', 'asohdashdol', 'Capture4.PNG', 'PARIS'),
(43, 'ასოფჰაოსჰფოაჰ', 'სფდლსჯფკსფჯ', 'slkfjdsfkjsdn', 'sdjflksdfks', 'quiz.PNG', 'PARIS');

-- --------------------------------------------------------

--
-- Структура таблицы `categori_search`
--

CREATE TABLE `categori_search` (
  `id` int(11) NOT NULL,
  `categori` text CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `title` varchar(50) CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `texts` varchar(255) CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `categori_search`
--

INSERT INTO `categori_search` (`id`, `categori`, `title`, `texts`) VALUES
(1, 'game', 'satauri', 'game_texts'),
(2, 'game', 'satauri_2', 'game_texts_2');

-- --------------------------------------------------------

--
-- Структура таблицы `registracion`
--

CREATE TABLE `registracion` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `registracion`
--

INSERT INTO `registracion` (`id`, `username`, `email`, `pass`) VALUES
(22, 'g', 'g@l.ru', 'c4ca4238a0b923820dcc509a6f75849b');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `categori_search`
--
ALTER TABLE `categori_search`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `registracion`
--
ALTER TABLE `registracion`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT для таблицы `categori_search`
--
ALTER TABLE `categori_search`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `registracion`
--
ALTER TABLE `registracion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
