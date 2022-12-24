-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 24 2022 г., 11:59
-- Версия сервера: 8.0.29
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `crypto-wallet landing`
--

-- --------------------------------------------------------

--
-- Структура таблицы `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Структура таблицы `countdown_date`
--

CREATE TABLE `countdown_date` (
  `id` int NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `countdown_date`
--

INSERT INTO `countdown_date` (`id`, `date`) VALUES
(1, 'Dec 22 2023 00:00:00');

-- --------------------------------------------------------

--
-- Структура таблицы `filename`
--

CREATE TABLE `filename` (
  `id` int NOT NULL,
  `filename` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `filename`
--

INSERT INTO `filename` (`id`, `filename`) VALUES
(1, 'file1.txt');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `countdown_date`
--
ALTER TABLE `countdown_date`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `filename`
--
ALTER TABLE `filename`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `countdown_date`
--
ALTER TABLE `countdown_date`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `filename`
--
ALTER TABLE `filename`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
