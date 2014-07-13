-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- ホスト: localhost
-- 生成時間: 2014 年 5 月 18 日 07:46
-- サーバのバージョン: 5.5.16
-- PHP のバージョン: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- データベース: `live_contact`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `contactId` int(11) NOT NULL AUTO_INCREMENT COMMENT 'お問い合わせID',
  `userId` int(11) NOT NULL COMMENT 'ユーザーID',
  `contactPart` int(11) NOT NULL COMMENT 'パート',
  `contactYear` int(11) NOT NULL COMMENT '年',
  `contactMonth` int(11) NOT NULL COMMENT '月',
  `contactDay` int(11) NOT NULL COMMENT '日',
  `contactPlace` int(11) NOT NULL COMMENT '会場',
  `contactTime` int(11) NOT NULL COMMENT '時間',
  `contactOption` int(11) DEFAULT NULL COMMENT 'オプション',
  PRIMARY KEY (`contactId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='お問い合わせ' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- テーブルの構造 `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `aaa` int(6) NOT NULL,
  `bbb` int(7) NOT NULL,
  PRIMARY KEY (`aaa`),
  KEY `aaa` (`aaa`),
  KEY `aaa_2` (`aaa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- テーブルの構造 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `userId` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ユーザーID',
  `userFlg` int(1) NOT NULL DEFAULT '0',
  `userMail` varchar(100) NOT NULL COMMENT 'メールアドレス',
  `userName` varchar(20) NOT NULL COMMENT '名前',
  `userPw` varchar(16) CHARACTER SET utf32 NOT NULL COMMENT 'パスワード',
  `resignReason` int(10) unsigned DEFAULT NULL COMMENT '退会理由',
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='ユーザーマスター' AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
