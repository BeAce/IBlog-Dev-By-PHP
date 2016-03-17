-- phpMyAdmin SQL Dump
-- version 3.3.8.1
-- http://www.phpmyadmin.net
--
-- 主机: w.rdc.sae.sina.com.cn:3307
-- 生成日期: 2016 年 03 月 17 日 09:08
-- 服务器版本: 5.6.23
-- PHP 版本: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `app_beace`
--

-- --------------------------------------------------------

--
-- 表的结构 `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` char(100) COLLATE utf8_bin NOT NULL,
  `author` char(50) COLLATE utf8_bin NOT NULL,
  `description` varchar(255) COLLATE utf8_bin NOT NULL,
  `content` text COLLATE utf8_bin NOT NULL,
  `dateline` int(11) NOT NULL,
  `label` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=39 ;

--
-- 转存表中的数据 `articles`
--

INSERT INTO `articles` (`id`, `title`, `author`, `description`, `content`, `dateline`, `label`) VALUES
(9, '太美了', '李世民', '嘻嘻', 0xe59388e59388, 1439357133, 'Informal essay');

-- --------------------------------------------------------

--
-- 表的结构 `introduce`
--

CREATE TABLE IF NOT EXISTS `introduce` (
  `about` text COLLATE utf8_bin,
  `contact` text COLLATE utf8_bin
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 转存表中的数据 `introduce`
--

INSERT INTO `introduce` (`about`, `contact`) VALUES
(0x3c646c3e3c64743ee68891e79a84e58d9ae5aea2e79a84e4b8bbe8a681e58685e5aeb93c2f64743e3c64643ee983bde698afe585b3e4ba8ee68891e887aae5b7b1e5afb9e5898de7abafe79a84e5ada6e4b9a0e8bf87e7a88be79a84e8aeb0e5bd95e5928ce5afb9e5898de7abafe698afe8aea4e8af86efbc8ce4bba5e58f8ae887aae5b7b1e79a84e4bd9ce59381e79a84e5b195e7a4bae7ad89e7ad89e380823c64643e3c2f646c3e, 0x3c7072653ee4b88ae6b5b7e5b7a5e7a88be68a80e69cafe5a4a7e5ada6203c62722f3ee8aea1e7ae97e69cbae7b3bb2de8aea1e7ae97e69cbae7a791e5ada6e4b88ee68a80e69caf3c62722f3e74656cefbc9a31383831373833343436373c2f7072653e);

-- --------------------------------------------------------

--
-- 表的结构 `signin`
--

CREATE TABLE IF NOT EXISTS `signin` (
  `username` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL COMMENT '用户名',
  `password` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL COMMENT '密码'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='管理员登陆表';

--
-- 转存表中的数据 `signin`
--

INSERT INTO `signin` (`username`, `password`) VALUES
('beace', 'beace'),
('beace', 'beace');
