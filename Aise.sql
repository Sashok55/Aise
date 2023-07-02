-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июл 02 2023 г., 21:39
-- Версия сервера: 10.4.24-MariaDB
-- Версия PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `aise`
--

-- --------------------------------------------------------

--
-- Структура таблицы `agents`
--

CREATE TABLE `agents` (
  `id_agents` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `contact_number` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `agents`
--

INSERT INTO `agents` (`id_agents`, `name`, `contact_number`, `email`) VALUES
(1, 'Васильев', '990', 'vas@aise.ru'),
(2, 'Станислав', '991', 'sta@aise.ru'),
(3, 'Кузнецова', '1', 'kuz@aise.ru'),
(4, 'Савельев', '2', 'sav@aise.ru');

-- --------------------------------------------------------

--
-- Структура таблицы `clients`
--

CREATE TABLE `clients` (
  `id_clients` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `budget` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `clients`
--

INSERT INTO `clients` (`id_clients`, `name`, `budget`) VALUES
(1, 'Соколов', '10000000.00'),
(2, 'Сидоров', '200000.00'),
(3, 'Морозова', '1345600.00'),
(4, 'Синичкина', '300000.00'),
(5, 'Сорокин', '450000.00'),
(6, 'Васильков', '60000.00'),
(7, 'Флоров', '900000.00'),
(8, 'Пуфендуй', '7900000.00'),
(9, 'Мотильдова', '45000000.00'),
(10, 'Коханюк', '4000.00');

-- --------------------------------------------------------

--
-- Структура таблицы `deals`
--

CREATE TABLE `deals` (
  `id_deals` int(11) NOT NULL,
  `home_id` int(11) DEFAULT NULL,
  `client_id` int(11) DEFAULT NULL,
  `agent_id` int(11) DEFAULT NULL,
  `deal_amount` decimal(10,2) DEFAULT NULL,
  `deal_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `deals`
--

INSERT INTO `deals` (`id_deals`, `home_id`, `client_id`, `agent_id`, `deal_amount`, `deal_date`) VALUES
(1, 1, 1, 1, '11.00', '0000-00-00'),
(2, 2, 2, 2, '2000000.00', '2023-06-03'),
(3, 3, 4, 4, '1242300.00', '2023-06-01'),
(4, 4, 3, 3, '300000.00', '2023-06-03'),
(5, 5, 5, 4, '8909990.00', '2023-06-07'),
(6, 6, 6, 3, '6700000.00', '2023-06-15'),
(7, 7, 7, 2, '430000.00', '2023-06-27'),
(8, 8, 8, 3, '1230000.00', '2023-06-13'),
(9, 1, 1, 1, '1.00', '0000-00-00');

-- --------------------------------------------------------

--
-- Структура таблицы `district`
--

CREATE TABLE `district` (
  `id_district` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `district`
--

INSERT INTO `district` (`id_district`, `name`) VALUES
(1, 'Солнцево'),
(2, 'Тучево'),
(3, 'Облачково'),
(4, 'Пасмурново');

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id_product` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `description` longtext NOT NULL,
  `img` longtext DEFAULT NULL,
  `district_id` int(11) DEFAULT NULL,
  `type_id` int(11) DEFAULT NULL,
  `agent_id` int(11) DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL,
  `rooms_id` int(11) DEFAULT NULL,
  `area` decimal(10,2) DEFAULT NULL,
  `sale_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id_product`, `name`, `price`, `description`, `img`, `district_id`, `type_id`, `agent_id`, `status_id`, `rooms_id`, `area`, `sale_date`) VALUES
(1, 'Одноэтажный дом', '100000.00', 'Наше дело не так однозначно, как может показаться: перспективное планирование создаёт необходимость включения в производственный план целого ряда внеочередных мероприятий с учётом комплекса направлений прогрессивного развития.', '../img/Rectangle 3719.png', 1, 1, 1, 1, 3, '340.00', '2023-07-18'),
(2, 'Двухэтаэжный дом', '30000.00', 'Наше дело не так однозначно, как может показаться: перспективное планирование создаёт необходимость включения в производственный план целого ряда внеочередных мероприятий с учётом комплекса направлений прогрессивного развития.', '../img/Rectangle 3719.png', 1, 1, 2, 1, 5, '540.00', '0000-00-00'),
(3, 'Двухэтаэжный дом', '10000.00', 'Наше дело не так однозначно, как может показаться: перспективное планирование создаёт необходимость включения в производственный план целого ряда внеочередных мероприятий с учётом комплекса направлений прогрессивного развития.', '../img/Rectangle 3719.png', 1, 1, 3, 2, 4, '360.00', '2023-07-03'),
(4, 'Двухэтаэжный дом', '2330000.00', 'Наше дело не так однозначно, как может показаться: перспективное планирование создаёт необходимость включения в производственный план целого ряда внеочередных мероприятий с учётом комплекса направлений прогрессивного развития.', '../img/Rectangle 3719.png', 2, 2, 4, 1, 5, '640.00', NULL),
(5, 'Одноэтажный дом', '120000.00', 'Наше дело не так однозначно, как может показаться: перспективное планирование создаёт необходимость включения в производственный план целого ряда внеочередных мероприятий с учётом комплекса направлений прогрессивного развития.', '../img/Rectangle 3719.png', 4, 2, 4, 3, 4, '340.00', '2023-06-02'),
(6, 'Трехэтажный дом', '1530000.00', 'Наше дело не так однозначно, как может показаться: перспективное планирование создаёт необходимость включения в производственный план целого ряда внеочередных мероприятий с учётом комплекса направлений прогрессивного развития.', '../img/Rectangle 3719.png', 3, 2, 2, 3, 2, '140.00', '0000-00-00'),
(7, 'Трехэтажный дом', '567890.00', 'Наше дело не так однозначно, как может показаться: перспективное планирование создаёт необходимость включения в производственный план целого ряда внеочередных мероприятий с учётом комплекса направлений прогрессивного развития.', '../img/Rectangle 3719.png', 3, 2, 2, 2, 2, '344.00', '2023-06-15'),
(8, 'Одноэтажный дом', '1330000.00', 'Наше дело не так однозначно, как может показаться: перспективное планирование создаёт необходимость включения в производственный план целого ряда внеочередных мероприятий с учётом комплекса направлений прогрессивного развития.', '../img/Rectangle 3719.png', 4, 3, 4, 1, 4, '670.00', NULL),
(9, 'Двухэтаэжный дом', '89000.00', 'Наше дело не так однозначно, как может показаться: перспективное планирование создаёт необходимость включения в производственный план целого ряда внеочередных мероприятий с учётом комплекса направлений прогрессивного развития.', '../img/Rectangle 3719.png', 3, 4, 4, 3, 4, '3400.00', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `rooms`
--

CREATE TABLE `rooms` (
  `id_rooms` int(11) NOT NULL,
  `name` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `rooms`
--

INSERT INTO `rooms` (`id_rooms`, `name`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9);

-- --------------------------------------------------------

--
-- Структура таблицы `status`
--

CREATE TABLE `status` (
  `id_status` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `status`
--

INSERT INTO `status` (`id_status`, `name`) VALUES
(1, 'продается'),
(2, 'продан'),
(3, 'идет ремонт');

-- --------------------------------------------------------

--
-- Структура таблицы `type`
--

CREATE TABLE `type` (
  `id_type` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `type`
--

INSERT INTO `type` (`id_type`, `name`) VALUES
(1, 'одноэтажный'),
(2, 'двухэтажный'),
(3, 'трехэтажный'),
(4, 'четырехэтажный');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `is_admin` int(1) DEFAULT NULL,
  `verification_code` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id_users`, `login`, `email`, `password`, `is_admin`, `verification_code`) VALUES
(1, '123', '123@123.ru', '123', 1, ''),
(7, 'Sashok', 'Sashok@mail.ru', '123', NULL, ''),
(22, 'test', 'deoships@mail.ru', '123', NULL, '846551'),
(23, '31', 'isip_a.o.okolskiy@mpt.ru', '123', NULL, '980044'),
(24, '1236', 'isip_a.o.okolskiy@mpt.ru', '123', NULL, '359157'),
(25, '1', '1', '1', NULL, ''),
(27, '546', 'isip_a.o.okolskiy@mpt.ru', '123', NULL, '379733'),
(28, '12111', 'isip_a.o.okolskiy@mpt.ru', '123', NULL, '922907'),
(29, '111', 'isip_a.o.okolskiy@mpt.ru', '123', NULL, '622831'),
(30, '5432', 'isip_a.o.okolskiy@mpt.ru', '123', NULL, '886392'),
(31, '141', 'isip_a.o.okolskiy@mpt.ru', '123', NULL, '112892');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`id_agents`);

--
-- Индексы таблицы `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id_clients`);

--
-- Индексы таблицы `deals`
--
ALTER TABLE `deals`
  ADD PRIMARY KEY (`id_deals`),
  ADD KEY `deals_ibfk_1` (`agent_id`),
  ADD KEY `client_id` (`client_id`),
  ADD KEY `home_id` (`home_id`);

--
-- Индексы таблицы `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`id_district`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `rooms_id` (`rooms_id`),
  ADD KEY `district_id` (`district_id`),
  ADD KEY `status_id` (`status_id`),
  ADD KEY `type_id` (`type_id`),
  ADD KEY `agent_id` (`agent_id`);

--
-- Индексы таблицы `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id_rooms`);

--
-- Индексы таблицы `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- Индексы таблицы `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id_type`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `agents`
--
ALTER TABLE `agents`
  MODIFY `id_agents` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `clients`
--
ALTER TABLE `clients`
  MODIFY `id_clients` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `deals`
--
ALTER TABLE `deals`
  MODIFY `id_deals` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `district`
--
ALTER TABLE `district`
  MODIFY `id_district` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT для таблицы `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id_rooms` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `status`
--
ALTER TABLE `status`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `type`
--
ALTER TABLE `type`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `deals`
--
ALTER TABLE `deals`
  ADD CONSTRAINT `deals_ibfk_1` FOREIGN KEY (`agent_id`) REFERENCES `agents` (`id_agents`),
  ADD CONSTRAINT `deals_ibfk_2` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id_clients`),
  ADD CONSTRAINT `deals_ibfk_3` FOREIGN KEY (`home_id`) REFERENCES `product` (`id_product`);

--
-- Ограничения внешнего ключа таблицы `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`rooms_id`) REFERENCES `rooms` (`id_rooms`),
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`district_id`) REFERENCES `district` (`id_district`),
  ADD CONSTRAINT `product_ibfk_3` FOREIGN KEY (`status_id`) REFERENCES `status` (`id_status`),
  ADD CONSTRAINT `product_ibfk_4` FOREIGN KEY (`type_id`) REFERENCES `type` (`id_type`),
  ADD CONSTRAINT `product_ibfk_5` FOREIGN KEY (`agent_id`) REFERENCES `agents` (`id_agents`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
