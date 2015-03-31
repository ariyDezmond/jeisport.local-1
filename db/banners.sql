-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Мар 29 2015 г., 16:16
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `jeisport`
--

-- --------------------------------------------------------

--
-- Структура таблицы `banners`
--

DROP TABLE IF EXISTS `banners`;
CREATE TABLE IF NOT EXISTS `banners` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) NOT NULL,
  `pos` enum('main','news','blog','') NOT NULL,
  `clicks` int(11) NOT NULL,
  `views` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(2) NOT NULL,
  `max_clicks` int(11) NOT NULL,
  `max_shows` int(11) NOT NULL,
  `payment` enum('clicks','shows') NOT NULL,
  `order` int(11) NOT NULL,
  `active` varchar(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Дамп данных таблицы `banners`
--

INSERT INTO `banners` (`id`, `url`, `pos`, `clicks`, `views`, `image`, `status`, `max_clicks`, `max_shows`, `payment`, `order`, `active`) VALUES
(1, 'http://filezilla.ru/', 'main', 0, 10, 'cfdeaab665d10378ee62812c62bdce8f.jpg', '0', 25, 10, 'shows', 0, 'on'),
(2, 'http://vk.com/bestad', 'news', 14, 113, '80cd8478295674887819f8cc4a12df48.jpg', 'on', 20, 110, 'clicks', 0, 'on'),
(7, 'http://www.google.com', 'main', 7, 100, '4f625bd4aaf13d0cfaedd40141575380.jpg', '0', 7, 100, 'shows', 0, 'on'),
(8, 'http://www.mail.ru', 'news', 2, 6, '48379c6b515db97932dd26907a5f0710.png', '0', 0, 0, 'clicks', 0, 'on'),
(10, 'http://app.yaware.ru/', 'main', 2, 20, '725359ee56a5935dbbd6847bc0ea0395.jpg', '0', 2, 20, 'shows', 0, 'on'),
(12, 'http://www.google.com', 'main', 0, 9, 'cfd98c24acda7f2199f373ea2909a3a9.jpg', '0', 0, 50, 'shows', 0, '0'),
(13, 'http://app.yaware.ru/', 'main', 0, 9, 'f38bb7904da2eddcb174f8f4cc6bdf0e.jpg', '0', 20, 20, 'shows', 0, '0'),
(14, 'http://filezilla.ru/', 'main', 0, 0, 'f771c6929489a4b91abc7db0d75939b9.jpg', '0', 0, 5, 'shows', 0, '0');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
