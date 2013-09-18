-- phpMyAdmin SQL Dump
-- version 3.5.8.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 19, 2013 at 12:46 AM
-- Server version: 5.5.31-0ubuntu0.13.04.1
-- PHP Version: 5.4.9-4ubuntu2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(128) NOT NULL,
  `url` varchar(255) NOT NULL,
  `auth` int(1) NOT NULL,
  `add_date` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=113 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `url`, `auth`, `add_date`) VALUES
(101, '今日话题', 'http://view.news.qq.com/', 1, '2013-9-19'),
(102, '打击儿童色情制品：中国不应成法外之地', 'http://view.news.qq.com/intouchtoday/index.htm?2554', 2, '2013-9-19'),
(103, '往期', 'http://view.news.qq.com/index/zhuanti/zt_more.htm', 3, '2013-9-19'),
(104, '贪心医护催生“没奶”妈妈', 'http://view.news.qq.com/intouchtoday/index.htm?2553', 0, '2013-9-19'),
(105, '评论', 'http://view.news.qq.com/', 3, '2013-9-19'),
(106, '送礼“隐身衣”不能游离于监管之外', 'http://view.news.qq.com/a/20130918/004717.htm', 0, '2013-9-19'),
(107, '历史', 'http://history.qq.com/', 3, '2013-9-19'),
(108, '张学良不放一枪一弹弃守锦州', 'http://view.news.qq.com/intouchtoday/history.htm?0214', 0, '2013-9-19'),
(109, '深度', 'http://view.news.qq.com/', 3, '2013-9-19'),
(110, '海军基地枪击案能推动美国“控枪”吗', 'http://view.news.qq.com/a/20130918/004601.htm', 0, '2013-9-19'),
(111, '思想', 'http://thinker.qq.com/', 3, '2013-9-19'),
(112, '秋风对谈林安梧：为传统儒学作一个辩护', 'http://cul.qq.com/a/20130918/006590.htm', 0, '2013-9-19');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
