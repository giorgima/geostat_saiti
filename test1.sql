-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Май 30 2021 г., 22:47
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

-- --------------------------------------------------------

--
-- Структура таблицы `letters`
--

CREATE TABLE `letters` (
  `id` int(11) NOT NULL,
  `gamgzavneli` varchar(50) CHARACTER SET utf8 NOT NULL,
  `mimgebi` varchar(50) CHARACTER SET utf8 NOT NULL,
  `message_text` varchar(250) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `letters`
--

INSERT INTO `letters` (`id`, `gamgzavneli`, `mimgebi`, `message_text`) VALUES
(1, 'g', 'gio', 'asodoak'),
(2, 'gio', 'g', '1111123sa1da3'),
(3, 'g', 'gio', 'asada'),
(4, 'gio', 'g', 'dasda'),
(5, 'g', 'g', 'asd');

-- --------------------------------------------------------

--
-- Структура таблицы `registracion`
--

CREATE TABLE `registracion` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `date_of_birth` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `registracion`
--

INSERT INTO `registracion` (`id`, `username`, `date_of_birth`, `gender`, `email`, `pass`) VALUES
(22, 'g', '06/11/1920', 'მამრობითი', 'g@l.ru', '202cb962ac59075b964b07152d234b70'),
(23, 'gio', '1586', 'მამრობითი', 'gio@l.ru', 'caf1a3dfb505ffed0d024130f58c5cfa');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `letters`
--
ALTER TABLE `letters`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT для таблицы `letters`
--
ALTER TABLE `letters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `registracion`
--
ALTER TABLE `registracion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
