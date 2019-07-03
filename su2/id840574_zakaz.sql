-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Мар 17 2018 г., 20:39
-- Версия сервера: 10.1.31-MariaDB
-- Версия PHP: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `id840574_zakaz`
--

-- --------------------------------------------------------

--
-- Структура таблицы `olympiad55`
--

CREATE TABLE `olympiad55` (
  `id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `question` varchar(70) NOT NULL,
  `possible_answers` text NOT NULL,
  `right_answers` text NOT NULL,
  `identi` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `olympiad55`
--

INSERT INTO `olympiad55` (`id`, `type`, `question`, `possible_answers`, `right_answers`, `identi`) VALUES
(1, 'mc', 'Какой у меня любимый фрукт?', 'груша;яблоко;апельсин;банан;ананас;', 'апельсин;банан;ананас;', '1'),
(2, 'sc', 'Какой фрукт я ненавижу', 'груша;яблоко;киви;', 'груша', '1'),
(3, 'sa', 'Есть фрукты, а еще?', '', 'овощи;нефрукты;', '1'),
(4, 'sc', 'Какой фрукт еще ненавижу?', 'абрикос;персик;гранат;никакой;', 'никакой', '2');

-- --------------------------------------------------------

--
-- Структура таблицы `olympiad56`
--

CREATE TABLE `olympiad56` (
  `id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `question` varchar(70) NOT NULL,
  `possible_answers` text NOT NULL,
  `right_answers` text NOT NULL,
  `identi` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `olympiad56`
--

INSERT INTO `olympiad56` (`id`, `type`, `question`, `possible_answers`, `right_answers`, `identi`) VALUES
(1, 'mc', 'Первый президент Казахстана', 'вылодтадлвы;выдаьждвыьажд;Назарбаев;', 'Назарбаев;', '1');

-- --------------------------------------------------------

--
-- Структура таблицы `olympiad57`
--

CREATE TABLE `olympiad57` (
  `id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `question` varchar(70) NOT NULL,
  `possible_answers` text NOT NULL,
  `right_answers` text NOT NULL,
  `identi` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `olympiad57`
--

INSERT INTO `olympiad57` (`id`, `type`, `question`, `possible_answers`, `right_answers`, `identi`) VALUES
(1, 'mc', '1?', '1;not 1;1+0;1;', '1;1+0;1;', '1'),
(2, 'sc', '2?', '2;not 2;', '2', '1'),
(3, 'sa', 'three?', '', 'three;', '1');

-- --------------------------------------------------------

--
-- Структура таблицы `olympiad61`
--

CREATE TABLE `olympiad61` (
  `id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `question` varchar(70) NOT NULL,
  `possible_answers` text NOT NULL,
  `right_answers` text NOT NULL,
  `identi` varchar(70) NOT NULL,
  `point` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `olympiad61`
--

INSERT INTO `olympiad61` (`id`, `type`, `question`, `possible_answers`, `right_answers`, `identi`, `point`) VALUES
(1, 'mc', '5+5?', '7;4+6;10;20/2;', '4+6;10;20/2;', '3', '1'),
(2, 'sc', '6*6', '36;30;', '36', '2', '1'),
(3, 'sa', 'что в квадрате дает 25?', '', 'пять;five;', '1', '2');

-- --------------------------------------------------------

--
-- Структура таблицы `olympiad62`
--

CREATE TABLE `olympiad62` (
  `id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `question` text NOT NULL,
  `possible_answers` text NOT NULL,
  `right_answers` text NOT NULL,
  `identi` varchar(70) NOT NULL,
  `point` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `olympiad62`
--

INSERT INTO `olympiad62` (`id`, `type`, `question`, `possible_answers`, `right_answers`, `identi`, `point`) VALUES
(1, 'mc', 'какие буквы есть в слове \"Абока\"', 'а;б;о;к;й;ц;у;к;', 'а;б;о;к;', '3', 4),
(2, 'sc', 'Абокен пол', 'Мужской;Женский;', 'Мужской', '3', 1),
(3, 'sa', 'Абокена фамилия', '', 'Мамыров;Mamyrov;', '3', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `olympiad63`
--

CREATE TABLE `olympiad63` (
  `id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `question` text NOT NULL,
  `possible_answers` text NOT NULL,
  `right_answers` text NOT NULL,
  `identi` varchar(70) NOT NULL,
  `point` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `olympiad63`
--

INSERT INTO `olympiad63` (`id`, `type`, `question`, `possible_answers`, `right_answers`, `identi`, `point`) VALUES
(1, 'mc', 'сколько ваш гпа?', '4,0;4,1;4,2;4,3;4,4;4,5;4,6;4,7;4,8;4,9;5,0;', '4,5;4,6;4,7;4,8;4,9;5,0;', '1', 1),
(2, 'mc', 'ваш Аелтс', '6,5;7,0;7,5;8,5;9,0;6,0;5,5;5,0;4,5;', '6,5;7,0;7,5;8,5;9,0;', '2', 1),
(3, 'mc', 'ваш сат', '0-500;500-800;800-1100;1100-1400;1400-1800;', '1100-1400;1400-1800;', '3', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `olympiad64`
--

CREATE TABLE `olympiad64` (
  `id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `question` text NOT NULL,
  `possible_answers` text NOT NULL,
  `right_answers` text NOT NULL,
  `identi` varchar(70) NOT NULL,
  `point` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `olympiads`
--

CREATE TABLE `olympiads` (
  `id` int(200) NOT NULL,
  `name` varchar(50) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `teacher` varchar(50) NOT NULL,
  `time_start` datetime NOT NULL,
  `time_end` datetime NOT NULL,
  `description` text NOT NULL,
  `first_place` text NOT NULL,
  `second_place` text NOT NULL,
  `third_place` text NOT NULL,
  `participants` text NOT NULL,
  `bands` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `olympiads`
--

INSERT INTO `olympiads` (`id`, `name`, `subject`, `teacher`, `time_start`, `time_end`, `description`, `first_place`, `second_place`, `third_place`, `participants`, `bands`) VALUES
(55, 'Фрукты', 'ict', 'Мамыров Абылайхан', '2017-04-09 21:06:00', '2017-04-10 22:06:00', 'Про мои любимые фрукты', '', '', '', 'mamyrov.abylai;', ''),
(56, 'УТС', 'ict', 'Мамыров Абылайхан', '2017-04-11 09:00:00', '2017-04-11 12:00:00', 'УТС', '', '', '', 'mamyrov.abylai;', ''),
(57, '1', 'ict', 'Мамыров Абылайхан', '2017-04-10 12:58:00', '2017-04-11 13:58:00', '1', '', '', '', 'mamyrov.abylai;', ''),
(61, 'математика', 'ict', 'Мамыров Абылайхан', '2017-04-10 18:30:00', '2017-04-30 19:30:00', 'простые вычисления', '', '', '', 'mamyrov.abylai;', ''),
(62, 'Абока', 'ict', 'Мамыров Абылайхан', '2017-04-12 10:09:00', '2017-04-12 11:09:00', 'про Абоку', '', '', '', 'mamyrov.abylai;islam.sv;', '5;6;'),
(63, ' поступление в Назарбаев Университет', 'ict', 'Мамыров Абылайхан', '2017-04-12 20:48:00', '2017-04-13 21:48:00', 'для поступлен', '', '', '', 'mamyrov.abylai;', '2;'),
(64, 'zcxsdcds', 'ict', 'Мамыров Абылайхан', '2017-04-18 07:23:00', '2017-04-18 08:23:00', 'dscdscsd', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `studentolympiads`
--

CREATE TABLE `studentolympiads` (
  `login` varchar(20) NOT NULL,
  `your_olympiads` text NOT NULL,
  `olympiad_bands` text NOT NULL,
  `your_bands` text NOT NULL,
  `score` float NOT NULL,
  `olympiad_passed` text NOT NULL,
  `places` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `studentolympiads`
--

INSERT INTO `studentolympiads` (`login`, `your_olympiads`, `olympiad_bands`, `your_bands`, `score`, `olympiad_passed`, `places`) VALUES
('dauren.ev', '', '', '', 0, '', ''),
('islam.sv', '62;', '6;', '6;', 1.66667, '1;', ''),
('mamyrov.abylai', '55;56;57;61;62;63;', '0;0;0;4;6;3;', '0;0;0;3.7;5;2;', 2.83333, '1;1;1;1;1;1;', '0;0;0;0;0;1;'),
('aslan', '', '', '', 0, '', ''),
('savbetov_04', '', '', '', 0, '', ''),
('imia.r', '', '', '', 0, '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `studentusers`
--

CREATE TABLE `studentusers` (
  `id` int(200) NOT NULL,
  `name` varchar(20) NOT NULL,
  `login` varchar(20) NOT NULL,
  `passwords` varchar(255) NOT NULL,
  `email` varchar(40) NOT NULL,
  `school` varchar(50) NOT NULL,
  `grade` varchar(2) NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `studentusers`
--

INSERT INTO `studentusers` (`id`, `name`, `login`, `passwords`, `email`, `school`, `grade`, `photo`) VALUES
(7, 'Ерменов Даурен', 'dauren.ev', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'dauren.ev@gmail.com', 'NIS', '', ''),
(8, 'Шинтемиров Ислам', 'islam.sv', '2b4bb16487625142f8b3a50ed0ce511e', 'islam.sv@gmail.com', 'NIS', '', ''),
(9, 'Мамыров Абылайхан', 'mamyrov.abylai', '0d65fb522a53dfdf40feab518c99e682', 'mamyrov.abylai@gmail.com', 'NIS', '11', 'http://www.afishka31.ru/img/actions/11220_b.jpg'),
(10, 'Нурлыбеков Аслан', 'aslan', '2811b396a2370894f24f862fa542f812', 'aslan@gmail.com', 'Не указано', '', ''),
(11, 'Савбетов Данияр', 'savbetov_04', '29f72cf7ed456243bd5db4a853ff4605', 'savbetov_04@gmail.com', 'Не указано', '', ''),
(12, 'Еркингали Мира', 'imia.r', '87f64d094216f2d3d11197408c1ba85a', 'mirayerkingali123456789@gmail.com', 'Назарбаев Школа', '11', '');

-- --------------------------------------------------------

--
-- Структура таблицы `teacherusers`
--

CREATE TABLE `teacherusers` (
  `id` int(100) NOT NULL,
  `name` varchar(20) NOT NULL,
  `login` varchar(20) NOT NULL,
  `passwords` varchar(255) NOT NULL,
  `email` varchar(40) NOT NULL,
  `subject` varchar(15) NOT NULL,
  `school` varchar(70) NOT NULL,
  `olympiads` text NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `teacherusers`
--

INSERT INTO `teacherusers` (`id`, `name`, `login`, `passwords`, `email`, `subject`, `school`, `olympiads`, `photo`) VALUES
(13, 'Узакбаев Нурлыбай', 'nurlibaj', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'nurlibaj@gmail.com', 'ict', 'NIS', '', ''),
(14, 'Мамыров Абылайхан', 'mamyrov.abylai', '0d65fb522a53dfdf40feab518c99e682', 'mamyrov.abylai@gmail.com', 'ict', 'NIS', '55;56;57;58;58;60;61;61;62;63;64;', ''),
(16, 'Шинтемиров Ислам', 'islam.sv', '2b4bb16487625142f8b3a50ed0ce511e', 'islam.sv@gmail.com', 'geography', 'NIS', '', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `olympiad55`
--
ALTER TABLE `olympiad55`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `olympiad56`
--
ALTER TABLE `olympiad56`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `olympiad57`
--
ALTER TABLE `olympiad57`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `olympiad61`
--
ALTER TABLE `olympiad61`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `olympiad62`
--
ALTER TABLE `olympiad62`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `olympiad63`
--
ALTER TABLE `olympiad63`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `olympiad64`
--
ALTER TABLE `olympiad64`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `olympiads`
--
ALTER TABLE `olympiads`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `studentusers`
--
ALTER TABLE `studentusers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`,`email`);

--
-- Индексы таблицы `teacherusers`
--
ALTER TABLE `teacherusers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `olympiad55`
--
ALTER TABLE `olympiad55`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `olympiad56`
--
ALTER TABLE `olympiad56`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `olympiad57`
--
ALTER TABLE `olympiad57`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `olympiad61`
--
ALTER TABLE `olympiad61`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `olympiad62`
--
ALTER TABLE `olympiad62`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `olympiad63`
--
ALTER TABLE `olympiad63`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `olympiad64`
--
ALTER TABLE `olympiad64`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `olympiads`
--
ALTER TABLE `olympiads`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT для таблицы `studentusers`
--
ALTER TABLE `studentusers`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `teacherusers`
--
ALTER TABLE `teacherusers`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
