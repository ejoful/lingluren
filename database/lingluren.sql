-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2016-06-26 18:55:17
-- 服务器版本： 5.5.47-MariaDB
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lingluren`
--
CREATE DATABASE IF NOT EXISTS `lingluren` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `lingluren`;

-- --------------------------------------------------------

--
-- 表的结构 `tbl_article`
--

DROP TABLE IF EXISTS `tbl_article`;
CREATE TABLE IF NOT EXISTS `tbl_article` (
  `id` int(10) unsigned NOT NULL,
  `title` varchar(300) NOT NULL,
  `des` text NOT NULL,
  `img` varchar(100) NOT NULL,
  `path` varchar(300) NOT NULL,
  `url` varchar(300) NOT NULL,
  `indexs` tinyint(4) NOT NULL,
  `position` tinyint(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tbl_article`
--

INSERT INTO `tbl_article` (`id`, `title`, `des`, `img`, `path`, `url`, `indexs`, `position`) VALUES
(1, '考研小白必读', '很多人问我为什么跨考，其实很简单，我觉得自己很难在本专业发挥出色。我读得懂本专业，成绩优良，该拿的奖也拿过，但始终无法让自己有成就感。相比我一直是有管理经验，看管理书籍很有感觉，个性也喜欢与人打交道，种种因素最终选择跨考管理类。', 'xiaobai.jpg', 'uploads/img/article/xiaobai.jpg', 'http://blog.163.com/fengziyue_hehe/blog/static/262181034201659112531250/#', 0, 1),
(2, '避免以下动机，考研就会成功', '为什么要考研？这是每位考研学子都应该问自己的问题。以下是小编给大家整理的几种错误的考研动机和危险心理，考研er千万不要成为其中一派哟！...', '14666054043778.jpg', 'uploads/img/article/14666054043778.jpg', 'http://blog.163.com/fengziyue_hehe/blog/static/26218103420165138937688/', 0, 2),
(3, '单词不会看这里吧', '单词是学英语必过的一道坎。但是很多人背单词又背得很痛苦，为什么呢？归根到底就是两点：没有毅力和没有良好的背单词习惯。首先，坚持是必须的，无论你上过多少个词汇班，如果回家不复习，不看笔记，谁也救不了你。', 'danci.jpg', 'uploads/article/danci.jpg', 'http://blog.163.com/fengziyue_hehe/blog/static/262181034201651101051987', 1, 1),
(4, '高数复习指南', '1.学习阶段划分 一阶基础全面复习(3月～6月) 二阶强化熟悉题型(7月～10月) 三阶模考查缺补漏(11月～12月15日) 四阶点睛保持状态(12月16日～考试前)', 'danci.jpg', 'uploads/article/danci.jpg', 'http://blog.163.com/fengziyue_hehe/blog/static/262181034201651101051987', 1, 1);

-- --------------------------------------------------------

--
-- 表的结构 `tbl_migration`
--

DROP TABLE IF EXISTS `tbl_migration`;
CREATE TABLE IF NOT EXISTS `tbl_migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tbl_migration`
--

INSERT INTO `tbl_migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1466324385),
('m130524_201442_init', 1466324391),
('m140209_132017_init', 1466515223),
('m140403_174025_create_account_table', 1466515224),
('m140504_113157_update_tables', 1466515224),
('m140504_130429_create_token_table', 1466515225),
('m140830_171933_fix_ip_field', 1466515226),
('m140830_172703_change_account_table_name', 1466515226),
('m141222_110026_update_ip_field', 1466515226),
('m141222_135246_alter_username_length', 1466515226),
('m150614_103145_update_social_account_table', 1466515226),
('m150623_212711_fix_username_notnull', 1466515227);

-- --------------------------------------------------------

--
-- 表的结构 `tbl_profile`
--

DROP TABLE IF EXISTS `tbl_profile`;
CREATE TABLE IF NOT EXISTS `tbl_profile` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `public_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gravatar_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gravatar_id` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bio` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `tbl_profile`
--

INSERT INTO `tbl_profile` (`user_id`, `name`, `public_email`, `gravatar_email`, `gravatar_id`, `location`, `website`, `bio`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `tbl_slide`
--

DROP TABLE IF EXISTS `tbl_slide`;
CREATE TABLE IF NOT EXISTS `tbl_slide` (
  `id` int(10) unsigned NOT NULL,
  `title` varchar(300) NOT NULL,
  `img` varchar(100) NOT NULL,
  `path` varchar(300) NOT NULL,
  `url` varchar(200) NOT NULL,
  `position` tinyint(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tbl_slide`
--

INSERT INTO `tbl_slide` (`id`, `title`, `img`, `path`, `url`, `position`) VALUES
(1, 'fdsf', 'bg.jpg', 'uploads/img/slide/bg.jpg', 'http://www.baidu.com', 3),
(3, 'sdfsdf', '14669374623702.jpg', 'uploads/img/slide/14669374623702.jpg', 'https://www.baidu.com/s?wd=%E9%98%BF%E9%87%8C%E4%BC%A0&rsv_spt=1&rsv_iqid=0xa98699310013664f&issp=1&f=8&rsv_bp=0&rsv_idx=2&ie=utf-8&tn=baiduhome_pg&rsv_enter=1&rsv_sug3=2&rsv_sug1=1&rsv_sug7=001&rsv_n', 1),
(4, '一个“菜鸟企业家” 的蜕变成长路 ——读《阿里传：这里是阿里巴巴的世界》', '14669375264486.jpg', 'uploads/img/slide/14669375264486.jpg', 'http://money.163.com/15/0902/02/B2FMJ51H00253B0H.html', 1);

-- --------------------------------------------------------

--
-- 表的结构 `tbl_social_account`
--

DROP TABLE IF EXISTS `tbl_social_account`;
CREATE TABLE IF NOT EXISTS `tbl_social_account` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `client_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `data` text COLLATE utf8_unicode_ci,
  `code` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 表的结构 `tbl_token`
--

DROP TABLE IF EXISTS `tbl_token`;
CREATE TABLE IF NOT EXISTS `tbl_token` (
  `user_id` int(11) NOT NULL,
  `code` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) NOT NULL,
  `type` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 表的结构 `tbl_user`
--

DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `confirmed_at` int(11) DEFAULT NULL,
  `unconfirmed_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `blocked_at` int(11) DEFAULT NULL,
  `registration_ip` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `flags` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `email`, `password_hash`, `auth_key`, `confirmed_at`, `unconfirmed_email`, `blocked_at`, `registration_ip`, `created_at`, `updated_at`, `flags`) VALUES
(1, 'admin', 'ruige@qq.com', '$2y$10$urylcOt9ua6Ev/YKvizoPeB/TxVbGu.jv/KptPjpAVy4H6/r/.qRK', 'MqVZeDU7IBxc-u32SPof1fZkZ5uwcieX', 1466515771, NULL, NULL, '::1', 1466515771, 1466515771, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_article`
--
ALTER TABLE `tbl_article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_migration`
--
ALTER TABLE `tbl_migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `tbl_profile`
--
ALTER TABLE `tbl_profile`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbl_slide`
--
ALTER TABLE `tbl_slide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_social_account`
--
ALTER TABLE `tbl_social_account`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `account_unique` (`provider`,`client_id`),
  ADD UNIQUE KEY `account_unique_code` (`code`),
  ADD KEY `fk_user_account` (`user_id`);

--
-- Indexes for table `tbl_token`
--
ALTER TABLE `tbl_token`
  ADD UNIQUE KEY `token_unique` (`user_id`,`code`,`type`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_unique_email` (`email`),
  ADD UNIQUE KEY `user_unique_username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_article`
--
ALTER TABLE `tbl_article`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_slide`
--
ALTER TABLE `tbl_slide`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_social_account`
--
ALTER TABLE `tbl_social_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- 限制导出的表
--

--
-- 限制表 `tbl_profile`
--
ALTER TABLE `tbl_profile`
  ADD CONSTRAINT `fk_user_profile` FOREIGN KEY (`user_id`) REFERENCES `tbl_user` (`id`) ON DELETE CASCADE;

--
-- 限制表 `tbl_social_account`
--
ALTER TABLE `tbl_social_account`
  ADD CONSTRAINT `fk_user_account` FOREIGN KEY (`user_id`) REFERENCES `tbl_user` (`id`) ON DELETE CASCADE;

--
-- 限制表 `tbl_token`
--
ALTER TABLE `tbl_token`
  ADD CONSTRAINT `fk_user_token` FOREIGN KEY (`user_id`) REFERENCES `tbl_user` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
