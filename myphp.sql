-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2016 �?11 �?17 �?13:48
-- 服务器版本: 5.5.47
-- PHP 版本: 5.5.30

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `myphp`
--

-- --------------------------------------------------------

--
-- 表的结构 `think_goods`
--

CREATE TABLE IF NOT EXISTS `think_goods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `goodsname` varchar(20) COLLATE utf8_bin NOT NULL,
  `goodsclass` int(11) NOT NULL,
  `goodsprice` varchar(20) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='class 1：水果 2：蔬菜 3:罐头 4：鲜虾鱼类' AUTO_INCREMENT=39 ;

--
-- 转存表中的数据 `think_goods`
--

INSERT INTO `think_goods` (`id`, `goodsname`, `goodsclass`, `goodsprice`) VALUES
(11, 'apple', 2, '11'),
(16, '香蕉', 1, '11'),
(9, '蛏子', 3, '23'),
(8, '苹果', 1, '11'),
(7, '梨子', 1, '122'),
(17, '橘子', 1, '21'),
(13, '黄桃罐头', 2, '22'),
(14, '小黄鱼哈哈', 3, '121'),
(15, '梨罐头', 2, '33'),
(18, '橘子', 2, '23'),
(19, '鲫鱼', 3, '22'),
(20, '娃娃鱼', 3, '112'),
(21, '鲤鱼', 3, '11'),
(23, '石榴', 1, '22'),
(24, '石榴', 2, '11'),
(25, '苹果', 1, '11'),
(26, '苹果', 2, '33'),
(27, '海带', 3, '22'),
(28, '金针菇', 2, '22'),
(29, '黄桃', 2, '22'),
(30, 'haha', 2, '222'),
(31, '的', 3, '11'),
(32, '蘑菇', 2, '22'),
(33, '香菇', 3, '11'),
(34, '虾米', 3, '11'),
(35, '苹果梨', 2, '11'),
(36, '蔬菜', 2, '11'),
(37, '哈密瓜', 2, '11'),
(38, '玉米', 2, '11');

-- --------------------------------------------------------

--
-- 表的结构 `think_goodsclass`
--

CREATE TABLE IF NOT EXISTS `think_goodsclass` (
  `class_id` int(11) NOT NULL AUTO_INCREMENT,
  `class_name` varchar(20) NOT NULL,
  PRIMARY KEY (`class_id`),
  UNIQUE KEY `goods_class` (`class_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `think_goodsclass`
--

INSERT INTO `think_goodsclass` (`class_id`, `class_name`) VALUES
(1, '水果'),
(2, '罐头'),
(3, '海鲜水产');

-- --------------------------------------------------------

--
-- 表的结构 `think_user`
--

CREATE TABLE IF NOT EXISTS `think_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userName` varchar(11) NOT NULL,
  `userPassword` int(11) NOT NULL,
  `userLeve` int(11) NOT NULL,
  `upDate` int(11) NOT NULL,
  `creatime` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='user表' AUTO_INCREMENT=16 ;

--
-- 转存表中的数据 `think_user`
--

INSERT INTO `think_user` (`id`, `userName`, `userPassword`, `userLeve`, `upDate`, `creatime`) VALUES
(1, '测试', 0, 0, 0, 0),
(2, '111', 111, 0, 0, 0),
(3, '222', 222, 0, 0, 0),
(4, '333', 333, 0, 0, 0),
(5, '小小', 0, 0, 0, 0),
(6, '为ww', 0, 0, 0, 0),
(7, '12121231231', 0, 0, 0, 0),
(8, '1234567890', 0, 0, 0, 0),
(9, '为ww', 0, 0, 0, 0),
(10, '为ww', 0, 0, 0, 0),
(11, '为ww去', 0, 0, 0, 0),
(12, '为ww', 0, 0, 0, 0),
(13, '为ww', 0, 0, 0, 0),
(14, '为ww', 0, 0, 0, 0),
(15, '为ww', 0, 0, 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
