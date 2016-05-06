-- phpMyAdmin SQL Dump
-- version 4.6.0
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 06, 2016 at 10:16 PM
-- Server version: 5.6.28
-- PHP Version: 5.5.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `timerec`
--

-- --------------------------------------------------------

--
-- Table structure for table `imagerec`
--

CREATE TABLE `imagerec` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `createTime` varchar(32) NOT NULL,
  `timeRecId` int(11) NOT NULL,
  `field01` varchar(32) DEFAULT NULL,
  `field02` varchar(32) DEFAULT NULL,
  `field03` varchar(32) DEFAULT NULL,
  `field04` varchar(32) DEFAULT NULL,
  `field05` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `imagerec`
--

INSERT INTO `imagerec` (`id`, `name`, `createTime`, `timeRecId`, `field01`, `field02`, `field03`, `field04`, `field05`) VALUES
(4, 'c47a8033-abe7-4f05-bf04-39c2deaa727a.png', '2015-1-21 21:59:12', 9, NULL, NULL, NULL, NULL, NULL),
(5, '9a3bcb6c-847d-48cb-8019-7fdaa5e378ce.jpg', '2015-1-21 21:59:12', 9, NULL, NULL, NULL, NULL, NULL),
(6, 'f6025092-d5f5-4188-b56f-4655a0834318.png', '2015-1-21 22:00:38', 10, NULL, NULL, NULL, NULL, NULL),
(7, 'f839db51-770e-4c76-b61b-ec31a90d0576.jpg', '2015-1-21 22:00:38', 10, NULL, NULL, NULL, NULL, NULL),
(19, '21b332ae-70f7-2833-733d-c23607288f40.jpg', '2016-03-19 07:15:56', 29, NULL, NULL, NULL, NULL, NULL),
(20, '67d4a9f0-0926-ece9-a682-af0dadeb1d74.png', '2016-03-31 23:30:18', 30, NULL, NULL, NULL, NULL, NULL),
(21, 'c28d89e2-c317-b2b8-5434-179856c15468.jpg', '2016-04-09 18:36:48', 31, NULL, NULL, NULL, NULL, NULL),
(22, '64795281-35ba-30ff-7b76-a7c7198ba980.jpg', '2016-04-09 18:36:48', 31, NULL, NULL, NULL, NULL, NULL),
(23, '0a45bca0-fb8a-d68a-0f1e-e4c9e43cf030.jpg', '2016-04-17 11:08:32', 32, NULL, NULL, NULL, NULL, NULL),
(24, '1f28acde-a922-4985-37a6-0e3f7961f0b2.jpg', '2016-05-01 22:09:20', 33, NULL, NULL, NULL, NULL, NULL),
(25, 'bd693bbe-cb1f-43d9-c157-0794f26e657e.jpeg', '2016-05-02 20:18:02', 34, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `timerec`
--

CREATE TABLE `timerec` (
  `id` int(11) NOT NULL,
  `year` varchar(4) NOT NULL,
  `date` varchar(10) NOT NULL,
  `address` varchar(32) NOT NULL,
  `title` varchar(64) NOT NULL,
  `content` varchar(500) NOT NULL,
  `isPublic` varchar(4) NOT NULL,
  `author` varchar(32) NOT NULL,
  `createTime` varchar(32) NOT NULL,
  `field01` varchar(32) DEFAULT NULL,
  `field02` varchar(32) DEFAULT NULL,
  `field03` varchar(32) DEFAULT NULL,
  `field04` varchar(32) DEFAULT NULL,
  `field05` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `timerec`
--

INSERT INTO `timerec` (`id`, `year`, `date`, `address`, `title`, `content`, `isPublic`, `author`, `createTime`, `field01`, `field02`, `field03`, `field04`, `field05`) VALUES
(1, '2014', '2014-11-01', '北京 朝阳', '拍摄婚纱照', '今天去拍婚纱照了啊', '0', 'guo', '2014-12-12', NULL, NULL, NULL, NULL, NULL),
(2, '2014', '2014-12-01', '北京 大兴', '逛超市', '今天去拍逛超市了啊', '0', 'guo', '2014-12-15', NULL, NULL, NULL, NULL, NULL),
(4, '2015', '2015-01-02', '北京 大兴', '啦啦', '11111111', '0', 'admin', '2015-1-21 21:45:16', NULL, NULL, NULL, NULL, NULL),
(8, '2015', '2015-01-09', '北京 大兴', '5555', '6666', '0', 'admin', '2015-1-21 21:56:47', NULL, NULL, NULL, NULL, NULL),
(9, '2015', '2015-01-09', '北京 大兴', '5555', '6666', '0', 'admin', '2015-1-21 21:59:11', NULL, NULL, NULL, NULL, NULL),
(10, '2015', '2015-01-09', '北京 大兴', '5555', '6666', '0', 'admin', '2015-1-21 22:00:37', NULL, NULL, NULL, NULL, NULL),
(11, '2015', '2015-01-22', '北京-大兴', '做网站', '今天晚上熬夜，做我们的网站。<br/>O(∩_∩)O哈哈~<br/>1234567', '0', 'admin', '2015-1-22 23:52:28', NULL, NULL, NULL, NULL, NULL),
(29, '2016', '2016-03-19', '东方时尚驾校', '练车第二周', '第二次练车，6点半就到了，有点小冷。', '0', 'admin', '2016-03-19 07:15:56', NULL, NULL, NULL, NULL, NULL),
(30, '2016', '2016-03-31', '北京-大兴', '学习Maven', '看了一个多小时的教学视频，对MAVEN有了初步了解，<br>\r\nMaven是个好东西，<br>\r\nSpringMVC的Demo也运行起来了...', '0', 'admin', '2016-03-31 23:30:18', NULL, NULL, NULL, NULL, NULL),
(31, '2016', '2016-04-08', '北京-大兴', '吃火锅啊', '去产检后，往工地，回来后去呷哺吃火锅，99大洋<br/>\r\n吃的很饱~~~', '0', 'admin', '2016-04-09 18:36:48', NULL, NULL, NULL, NULL, NULL),
(32, '2016', '2016-04-17', '北京-大兴', '菜市场归来', '菜市场归来，买了皮皮虾<br>天空很美 O(∩_∩)O~', '0', 'admin', '2016-04-17 11:08:32', NULL, NULL, NULL, NULL, NULL),
(33, '2016', '2016-04-27', '北京-大兴', '驾驶证到手', '科目一97，科目二0，科目二90，<br/>科目三100，科目四100。', '0', 'admin', '2016-05-01 22:09:20', NULL, NULL, NULL, NULL, NULL),
(34, '2016', '2016-01-30', '北京-大兴', '结婚纪念日', '我们要在一起幸福快乐每一天', '0', 'xiaoyu', '2016-05-02 20:18:02', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` varchar(32) NOT NULL,
  `name` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `password`) VALUES
('1', 'admin', '123456'),

--
-- Indexes for dumped tables
--

--
-- Indexes for table `imagerec`
--
ALTER TABLE `imagerec`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timerec`
--
ALTER TABLE `timerec`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `imagerec`
--
ALTER TABLE `imagerec`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `timerec`
--
ALTER TABLE `timerec`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
