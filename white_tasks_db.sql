-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3307
-- Время создания: Июн 10 2020 г., 12:15
-- Версия сервера: 8.0.12
-- Версия PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `white_tasks_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `fio` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `delivery` tinyint(1) DEFAULT '0',
  `transportation` tinyint(1) DEFAULT '0',
  `insurance` tinyint(1) DEFAULT '0',
  `equipment` tinyint(1) DEFAULT '0',
  `consultation` tinyint(1) DEFAULT '0',
  `comment` text CHARACTER SET utf8 COLLATE utf8_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `created_at`, `updated_at`, `fio`, `phone`, `email`, `delivery`, `transportation`, `insurance`, `equipment`, `consultation`, `comment`) VALUES
(5, '2020-06-09 18:14:59', '2020-06-09 18:14:59', 'Иванов Иван Иванович', '+7(900)900-11-11', 'test@mail.ru', 1, 0, 0, 0, 1, ''),
(6, '2020-06-09 18:15:53', '2020-06-09 18:15:53', 'Иванов Иван Иванович', '+7(900)900-11-11', 'test@mail.ru', 0, 0, 0, 0, 1, ''),
(7, '2020-06-09 18:16:43', '2020-06-09 18:16:43', 'Иванов Иван Иванович', '+7(900)900-11-11', 'test@mail.ru', 0, 1, 0, 0, 1, ''),
(8, '2020-06-09 22:20:37', '2020-06-09 22:20:37', 'Иванов Иван Иванович', '+7(900)900-11-11', 'test@mail.ru', 0, 1, 0, 0, 1, ''),
(9, '2020-06-09 22:20:58', '2020-06-09 22:20:58', 'Иванов Иван Иванович', '+7(900)900-11-11', 'test@mail.ru', 0, 1, 0, 0, 1, ''),
(10, '2020-06-09 22:23:08', '2020-06-09 22:23:08', 'Иванов Иван Иванович', '+7(900)900-11-11', 'test@mail.ru', 0, 1, 0, 0, 1, ''),
(11, '2020-06-09 22:23:24', '2020-06-09 22:23:24', 'Иванов Иван Иванович', '+7(900)900-11-11', 'test@mail.ru', 0, 1, 0, 0, 1, ''),
(12, '2020-06-09 22:25:15', '2020-06-09 22:25:15', 'Иванов Иван Иванович', '+7(900)900-11-11', 'test@mail.ru', 0, 1, 0, 0, 1, ''),
(13, '2020-06-09 23:04:28', '2020-06-09 23:04:28', 'Иванов Иван Иванович', '+7(900)900-11-11', 'test@mail.ru', 0, 1, 0, 0, 1, ''),
(14, '2020-06-09 23:06:27', '2020-06-09 23:06:27', 'Иванов Иван Иванович', '+7(900)900-11-11', 'test@mail.ru', 0, 1, 0, 0, 1, ''),
(15, '2020-06-09 23:07:10', '2020-06-09 23:07:10', 'Иванов Иван Иванович', '+7(900)900-11-11', 'test@mail.ru', 0, 1, 0, 0, 1, ''),
(16, '2020-06-09 23:08:55', '2020-06-09 23:08:55', 'Иванов Иван Иванович', '+7(900)900-11-11', 'test@mail.ru', 0, 1, 0, 0, 1, ''),
(17, '2020-06-09 23:09:25', '2020-06-09 23:09:25', 'Иванов Иван Иванович', '+7(900)900-11-11', 'test@mail.ru', 0, 1, 0, 0, 1, ''),
(18, '2020-06-09 23:09:30', '2020-06-09 23:09:30', 'Иванов Иван Иванович', '+7(900)900-11-11', 'test@mail.ru', 0, 1, 0, 0, 1, ''),
(19, '2020-06-09 23:16:20', '2020-06-09 23:16:20', 'Иванов Иван Иванович', '+7(900)900-11-11', 'test@mail.ru', 0, 1, 0, 0, 1, ''),
(20, '2020-06-09 23:18:12', '2020-06-09 23:18:12', 'Иванов Иван Иванович', '+7(900)900-11-11', 'test@mail.ru', 0, 1, 0, 0, 1, ''),
(21, '2020-06-09 23:18:50', '2020-06-09 23:18:50', 'Иванов Иван Иванович', '+7(900)900-11-11', 'test@mail.ru', 0, 1, 0, 0, 1, ''),
(22, '2020-06-09 23:40:55', '2020-06-09 23:40:55', 'Иванов Иван Иванович', '+7(900)900-11-1', 'test@mail.ru', 0, 0, 0, 0, 0, ''),
(23, '2020-06-10 10:34:07', '2020-06-10 10:34:07', 'Иванов Иван Иванович', '+7(900)900-11-11', 'test@mail.ru', 1, 0, 0, 0, 0, ''),
(24, '2020-06-10 12:12:19', '2020-06-10 12:12:19', 'Иванов Иван Иванович', '+7(900)900-11-11', 'test@mail.ru', 1, 0, 0, 0, 1, 'привет'),
(25, '2020-06-10 12:14:51', '2020-06-10 12:14:51', 'Иванов Иван Иванович', '+7(900)900-11-11', 'test@mail.ru', 1, 1, 0, 1, 1, 'привет'),
(26, '2020-06-10 12:15:27', '2020-06-10 12:15:27', 'Иванов Иван Иванович', '+7(900)900-11-11', 'test@mail.ru', 1, 1, 1, 1, 1, 'привет');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
