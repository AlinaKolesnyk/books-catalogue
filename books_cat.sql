-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 17 2019 г., 20:31
-- Версия сервера: 10.3.13-MariaDB
-- Версия PHP: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test_model`
--

-- --------------------------------------------------------

--
-- Структура таблицы `books_cat`
--

CREATE TABLE `books_cat` (
  `id` int(13) NOT NULL,
  `name` text NOT NULL,
  `image` longblob DEFAULT NULL,
  `author` text NOT NULL,
  `p-date` date NOT NULL,
  `p-name` text NOT NULL,
  `address` text NOT NULL,
  `tel` int(13) NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `books_cat`
--

INSERT INTO `books_cat` (`id`, `name`, `image`, `author`, `p-date`, `p-name`, `address`, `tel`, `type`) VALUES
(9, 'Алиса в стране чудес', 0x616c6963652e6a7067, 'Льюис Керрол', '1965-06-14', 'Macmillan and Co', 'Дарсбери, графство Чешир', 394848, 'сказка'),
(10, 'Три товарища', 0x7474322e6a7067, 'Эрих Мария Ремарк', '1970-06-21', 'АСТ', 'Штутгард, Германия', 8739484, 'проза'),
(11, 'Любовь живет три года', 0x6c6c33792e6a7067, ' Фредерик Бегбедер', '1996-06-22', ' Иностранка', ' Франция', 7039484, 'роман'),
(12, 'Поющие в терновнике', 0x707674312e6a706567, 'Колин Каккалоу', '1977-06-05', 'HarperCollin', 'Норфолк, Австралия', 5867483, 'роман'),
(13, 'Три товарища', 0x74742e6a7067, 'Колин Каккалоу', '2019-06-14', 'АСТ', 'Норфолк, Австралия', 8739484, 'классика');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `books_cat`
--
ALTER TABLE `books_cat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `books_cat`
--
ALTER TABLE `books_cat`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
