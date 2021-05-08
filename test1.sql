-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Май 08 2021 г., 19:14
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
(40, 'სტატია', 'სტატიას', 'statia', 'statias', 'Capture.PNG', 'axali_ambebi'),
(41, 'ფფფ', 'ასფ', 'dasd', 'dasd', 'Capture4.PNG', 'axali_ambebi'),
(42, 'სადასდ', 'სდასდას', 'hfdofas', 'asohdashdol', 'Capture4.PNG', 'axali_ambebi'),
(43, 'ასოფჰაოსჰფოაჰ', 'სფდლსჯფკსფჯ', 'slkfjdsfkjsdn', 'sdjflksdfks', 'quiz.PNG', 'dizaini'),
(45, 'dasd', 'asda', 'dsad', 'sad', 'Capture11.PNG', 'dizaini');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
