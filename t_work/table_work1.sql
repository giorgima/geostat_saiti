-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июн 07 2021 г., 08:10
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
-- База данных: `table_work1`
--

-- --------------------------------------------------------

--
-- Структура таблицы `table1`
--

CREATE TABLE `table1` (
  `id` int(11) NOT NULL,
  `saxeoba` varchar(200) NOT NULL,
  `raodenoba` int(11) NOT NULL,
  `produqtis_dasaxeleba_zomis_erteuli` varchar(200) NOT NULL,
  `maragi_gasuli_kvartlis_dsawyissh` int(11) NOT NULL,
  `warmoeba` int(11) NOT NULL,
  `gayidva` int(11) NOT NULL,
  `gachuqeba` int(11) NOT NULL,
  `naturit_gadaxda` int(11) NOT NULL,
  `gadamushaveba` int(11) NOT NULL,
  `sakvebad` int(11) NOT NULL,
  `pirutyvis_sakvebad` int(11) NOT NULL,
  `danakargebi` int(11) NOT NULL,
  `maragi_gasuli_kvartlis_bolostvis` int(11) NOT NULL,
  `gayidul_produqciashi_agebuli_tanxa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `table1`
--

INSERT INTO `table1` (`id`, `saxeoba`, `raodenoba`, `produqtis_dasaxeleba_zomis_erteuli`, `maragi_gasuli_kvartlis_dsawyissh`, `warmoeba`, `gayidva`, `gachuqeba`, `naturit_gadaxda`, `gadamushaveba`, `sakvebad`, `pirutyvis_sakvebad`, `danakargebi`, `maragi_gasuli_kvartlis_bolostvis`, `gayidul_produqciashi_agebuli_tanxa`) VALUES
(1, 'დაკლული მსხვილფეხა რქოვანი პირუტყვი', 0, 'ხორცი (კგ)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `table1`
--
ALTER TABLE `table1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `table1`
--
ALTER TABLE `table1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
