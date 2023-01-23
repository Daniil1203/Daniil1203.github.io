-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 18 2022 г., 18:52
-- Версия сервера: 8.0.24
-- Версия PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `galery_project`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` bigint NOT NULL COMMENT 'ID',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Название'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Арт-об\'єкти'),
(2, 'Картини');

-- --------------------------------------------------------

--
-- Структура таблицы `pictures`
--

CREATE TABLE `pictures` (
  `id` bigint NOT NULL COMMENT 'ID',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Фотография',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Название',
  `description` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci COMMENT 'Описание',
  `category_id` bigint NOT NULL COMMENT 'Категория'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `pictures`
--

INSERT INTO `pictures` (`id`, `image`, `name`, `description`, `category_id`) VALUES
(1, 'https://i.imgur.com/JGY4SS2.png', 'Соняшники', 'Картини Ван Гога \"Соняшники\" - одні з найвідоміших. Він написав їх в Арлі, на півдні Франції, в 1888 і 1889 роках.', 2),
(2, 'https://i.imgur.com/GADTzbe.jpeg', 'Зоряна ніч', 'Зоряна ніч - один із найбільш визнаних творів мистецтва у світі. Вона є абсолютно скрізь.', 2),
(3, 'https://i.imgur.com/vrhCGVI.png', 'Ваза з червоними маками', NULL, 2),
(4, 'https://i.imgur.com/xTloMCD.png', 'Гілка квітучого мигдалю в склянці та книга', NULL, 2),
(5, 'https://i.imgur.com/bHCQ4sq.png', 'Мона Ліза (Джоконда)', '\"Мона Ліза\", \"Джоконда\" або \"Портрет пані Лізи дель Джокондо\" (Ritratto di Monna Lisa del Giocondo) - найвідоміша картина Леонардо да Вінчі і, можливо, найвідоміша картина у світі.', 2),
(6, 'https://i.imgur.com/lki2ukL.jpeg', 'Водяні лілії', NULL, 2),
(7, 'https://i.imgur.com/2mOW3Ze.png', 'Сорока', 'Клод Оскар Моне - Сорока', 2),
(8, 'https://i.imgur.com/t8oxem7.png', 'Гілка лимонів', 'Клод Оскар Моне - Гілка лимонів', 2),
(9, 'https://i.imgur.com/r2NcMrL.png', 'Співоче дерево', 'Співоче дерево у Великій Британії', 1),
(10, 'https://i.imgur.com/Dw9Ad02.jpeg', 'Сіднейський оперний театр', 'Оперний театр, будинок номер 21 по Круговій набережній у Сіднеї, Новий Південний Уельс, Австралія. Одна з найвідоміших і найвпізнаваніших будівель світу, символ і \"візитна картка\" найбільшого міста країни, а також одна з головних туристичних визначних пам\'яток континенту.', 1),
(11, 'https://i.imgur.com/LkD2Kh0.png', 'Ейфелева вежа', 'Металева вежа в центрі Парижа, найвпізнаваніша його архітектурна пам\'ятка.', 1),
(12, 'https://i.imgur.com/XWq91c3.png', 'Пізанська вежа', 'Дзвінницька вежа, частина ансамблю міського собору Санта-Марія-Ассунта (Пізанський собор) у місті Піза, що здобула всесвітню популярність завдяки ненавмисному нахилу.', 1),
(13, 'https://i.imgur.com/RTjVuAo.jpeg', 'Римський Колізей', 'Колізей - символ сили, влади і вікової історії Риму, одна з найзнаменитіших пам\'яток Італії.', 1),
(14, 'https://i.imgur.com/41i5xj8.png', 'Три брати — Кий, Щек, Хорив і сестра їхня Либідь', 'Пам\'ятник засновникам Києва встановлено 1982 року на честь засновників Києва.', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `pictures`
--
ALTER TABLE `pictures`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT COMMENT 'ID', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `pictures`
--
ALTER TABLE `pictures`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT COMMENT 'ID', AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
