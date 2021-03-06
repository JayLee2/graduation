-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2018 at 01:49 PM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `aname` varchar(255) DEFAULT NULL,
  `apass` varchar(255) DEFAULT NULL,
  `level` tinyint(2) DEFAULT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM AUTO_INCREMENT=53 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `aname`, `apass`, `level`) VALUES
(52, 'test', '098f6bcd4621d373cade4e832627b4f6', 3),
(49, '122321', '3213', 1),
(48, '233333333333', '333333332', 1),
(47, '222222222222', '2222222222', 1),
(46, 'dsaas', 'dwqdwqdwqd', 3),
(45, 'sasasa', 'sassas', 3),
(19, 'chenyuzhenSB', '4297f44b13955235245b2497399d7a93', 5),
(18, 'liwenjie', '4297f44b13955235245b2497399d7a93', 1),
(44, 'zhangsan', '123123', 3),
(43, 'chenyuzhen', '123123', 3);

-- --------------------------------------------------------

--
-- Table structure for table `buy`
--

DROP TABLE IF EXISTS `buy`;
CREATE TABLE IF NOT EXISTS `buy` (
  `buyid` int(11) NOT NULL AUTO_INCREMENT,
  `conid` int(11) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `buydata` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`buyid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

DROP TABLE IF EXISTS `car`;
CREATE TABLE IF NOT EXISTS `car` (
  `carid` int(11) NOT NULL AUTO_INCREMENT,
  `conid` int(11) DEFAULT NULL COMMENT '买的东西',
  `userid` int(11) DEFAULT NULL COMMENT '买东西的人',
  `state` tinyint(255) DEFAULT NULL COMMENT '物品的状态 购物车1 订单2  买了3',
  `cardate` int(11) DEFAULT NULL,
  PRIMARY KEY (`carid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(30) DEFAULT NULL,
  `cimage` varchar(255) DEFAULT NULL,
  `cquanxian` tinyint(2) DEFAULT NULL,
  `cinfo` varchar(255) DEFAULT NULL,
  `pid` int(33) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cid`, `cname`, `cimage`, `cquanxian`, `cinfo`, `pid`) VALUES
(5, '早安故事', NULL, NULL, '', 0),
(3, 'sss', NULL, NULL, 'ssss', 1),
(4, 'eee', NULL, NULL, 'eee', 2),
(6, '晚安故事', NULL, NULL, '', 0),
(7, '热门文章', NULL, NULL, '', 0),
(8, '时政', NULL, NULL, '', 7),
(9, '热点', NULL, NULL, '', 7),
(10, '早安诗篇', NULL, NULL, '', 5),
(11, '早安语录', NULL, NULL, '', 5),
(12, 'niu', NULL, NULL, '', 7),
(13, 'asd', NULL, NULL, 'ass', 5);

-- --------------------------------------------------------

--
-- Table structure for table `collection`
--

DROP TABLE IF EXISTS `collection`;
CREATE TABLE IF NOT EXISTS `collection` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `conid` int(11) DEFAULT NULL COMMENT '收藏的内容的id',
  `uid` int(11) DEFAULT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `con`
--

DROP TABLE IF EXISTS `con`;
CREATE TABLE IF NOT EXISTS `con` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `ctitle` varchar(255) DEFAULT NULL,
  `con` varchar(10000) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  `cquanxian` int(11) DEFAULT '0',
  `thumb` varchar(255) DEFAULT NULL,
  `catid` int(11) DEFAULT NULL,
  `condate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `price` int(11) DEFAULT NULL,
  `state` int(21) DEFAULT '2' COMMENT '1.保存2.审核3.发布4.禁用',
  `pos` varchar(22) DEFAULT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `con`
--

INSERT INTO `con` (`cid`, `ctitle`, `con`, `uid`, `cquanxian`, `thumb`, `catid`, `condate`, `price`, `state`, `pos`) VALUES
(32, '答辩', '<p>答辩<br/></p>', 27, 0, '    upload/18-06-04/15281085056535aaa.png', 10, '2018-06-04 10:35:25', 12, 3, '1,3'),
(31, '嗡嗡嗡嗡嗡嗡', '<p>我我我我</p>', 26, 3, '    upload/18-06-03/15279872665514logo.png', 10, '2018-06-03 00:54:30', 1, 3, '1,2,3'),
(28, '传腾讯拟29.5亿入股绝地求生开发商 或成第二大股东', '<p>&nbsp; &nbsp; &nbsp; &nbsp;新浪美股 北京时间1日消息，据台湾《工商时报》报道，中国互联网巨头腾讯在游戏产业的布局有望再下一城。近日传出腾讯拟斥资逾5千亿韩元（折合人民币29.5亿元）收购热门网游《绝地求生：大逃杀》的韩国开发商蓝洞公司（Bluehole）至少10%股权。</p><p><br/></p><p>&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;香港《经济日报》援引韩媒称，《绝地求生》是去年最受欢迎的大型多人在线游戏，腾讯则是该游戏在大陆的独家代理运营商。去年9月，市场就传言腾讯有意收购蓝洞，但最后被蓝洞股东以资金充裕为由拒绝。该报道称，腾讯此次有意收购蓝洞至少10%股权，如交易成功，腾讯将成为蓝洞第2大股东。</p><p><br/></p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;受此消息推动，腾讯H股股价周一收报391港元，上涨0.67%。</p><p><br/></p><p>　　 尽管并未证实入股蓝洞的消息，但该公司已显示出在全球游戏产业积极布局的野心。公开资料显示，从2005年开始，腾讯就开始对海外游戏公司的收购、投资之路，布局领域涉及游戏研发、技术研发、游戏发行等。</p><p><br/></p><p>　　其中，腾讯在2015年12月全资收购英雄联盟（LOL）的美国开发商Riot Games。之后腾讯以英雄联盟玩法为原型，自行开发了手游《王者荣耀》，该款游戏更于去年5月荣登全球最赚钱手游榜首。</p><p><br/></p><p>根据腾讯财报，该公司去年游戏业务收入高达978亿元人民币，较2016年增长近4成。全球游戏市场调研公司Newzoo的数据显示，2017年大陆游戏行业的整体营收为2，189.6亿元，为全球最大游戏市场。若结合腾讯财报数据，腾讯在中国大陆游戏市场的占有率高达44.7%。</p><p><br/></p><p>　　不过，随着大陆游戏行业日趋成熟，业界正面临“产品荒”的困境，玩家不断抱怨没有好玩的新游戏面世。为应对相关问题，腾讯上月在其UP新文创大会上，将“泛娱乐”战略升级为“新文创”战略，未来腾讯将以IP（知识产权）为核心，不断拓展包含游戏业务在内的诸多文娱业务。</p><p><br/></p><p>想了解更多关于《传腾讯拟29.5亿入股绝地求生开发商 或成第二大股东》的报道，那就扫码下载和讯财经APP阅读吧。</p><p><br/></p>', 21, 3, 'upload/18-05-01/15251514121631ss.jpg', 11, '2018-05-01 05:10:17', 231, 3, '1'),
(29, '充满正能量的晚安心语', '<p class="p1"><span class="s1">&nbsp;1、人，要有梦想，才能有前进的动力，如果没有梦想，那么你的<a href="http://www.nvdc.cn/mingyan/geyan/"><span class="s2">人生</span></a>就没有方向。梦想，是人生前行的指路灯;梦想，是对美好未来的憧憬;梦想，是成功后的满足。一辈子，总要为自己的梦想拼搏一次。把梦想亮出来，不要封存梦想，朝着你喜欢的方向前进，自己选择的路，跪着也要走完。</span></p><p class="p1"><span class="s1">2、每个人的心中都有一个梦想，梦想是美好的，但是实现梦想的道路是曲折的，无数人在实现梦想的道路上遭遇了无数曲折，尽管如此，他们依旧大步向前;其实梦想就是一个人给自己定的一个大目标，必须认真的面对它，坚持了，熬过了，梦想就实现了;一个实现梦想的人，就是一个成功的人。</span></p><p class="p1"><span class="s1">3、生活不能等待别人来安排，要自已去争取和奋斗;而不论其结果是喜是悲，但可以慰藉的是，你总不枉在这世界上活了一场。有了这样的认识，你就会珍重生活，而不会玩世不恭;同时，也会给人自身注入一种强大的内在力量。晚安~</span></p><p class="p1"><span class="s1">4、不管你现在多迷茫，过得多累，走得多艰辛，请相信，生命中总有一段路是要你自己走完的，总有一段时间是“寒冷”的，不要放弃希望，不要放弃自己，再怎么冰冷也有阳光，再怎么艰辛都得努力。生命中，总得有一段回忆起来足够感动自己的时光。</span></p><p class="p1"><span class="s1">5、有事做，让每一天充实，事情没有大小，只有你爱不爱做;有所期待，生活就有希望，人不怕卑微，就怕失去希望，期待明天，期待阳光，人就会从卑微中站起来拥抱蓝天。真正的旅行，不在寻找新的景观，而在具备新的眼睛;真正的探索，不在创造更多的机会，而在触及更深的心灵。晚安~</span></p><p><img src="/ueditor/php/upload/image/20180504/1525433309112213.jpeg" title="1525433309112213.jpeg" alt="timg.jpeg"/></p>', 24, 3, '', 6, '2018-05-04 11:28:57', 1, 3, '3'),
(27, '美媒: 詹姆斯一句我累了或是在变相表达不满', '<p>&nbsp; &nbsp; &nbsp; &nbsp;北京时间4月30日，骑士队在主场通过抢七4分险胜步行者，从而晋级下一轮。全场比赛，骑士队当家球星勒布朗-詹姆斯出战43分钟，在第四一开始的时候，詹姆斯一度因为腿部抽筋而不得不返回更衣室进行检查。在赢下比赛后，詹姆斯的一句‘我累了，我想回家’更是让很多网友心疼。</p><p><br/></p><p>&nbsp; &nbsp; &nbsp; &nbsp;随后，美国媒体便指出，这很可能是詹姆斯变相的表达对泰伦-卢教练的不满，毕竟骑士队虽然失去了欧文，但是他们依旧有乐福、TT、希尔和克拉克森这样出色的球员，但是在这轮系列赛中，骑士队的阵容排布显得非常单一，而且对詹姆斯的总是过度依赖。</p><p><br/></p><p><span style="color: rgb(25, 25, 25); font-family: &quot;PingFang SC&quot;, Arial, 微软雅黑, 宋体, simsun, sans-serif; background-color: rgb(255, 255, 255);">&nbsp; &nbsp; &nbsp; 在本场比赛之前，乐福的场均得分只有11分，除了受到伤病原因，这与卢教练给她安排的角色有很大的关系。在这套阵容中，乐福就是一名中锋，他不得不去不断的卡位，并且在篮下陷入肉搏，这正是乐福所不擅长的，而在今天TT被提上首发后，乐福的状态出现了明显的回升，并在詹姆斯离场的那算时间，乐福连续命中两记关键三分，帮助骑士将优势扩大到12分</span></p>', 21, 3, 'upload/18-05-01/15251510311052ma.png', 11, '2018-05-01 05:03:55', 211, 3, '1'),
(25, '篮球', '<p>今年是火箭最接近总冠军的一年，回想一下，已经接近10年的火蜜，篮球已经成为我不可或缺的一部分了。</p>', 21, 3, 'upload/18-04-26/1524747151396qqq0.jpg', 9, '2018-04-26 12:52:35', 666, 3, '2,3'),
(26, '杂语：记2018-04-27', '<p>哈哈，祝自己生日快乐</p>', 21, 3, 'upload/18-04-27/15248126444820111img.jpg', 8, '2018-04-27 07:04:11', 222, 3, '1,2'),
(24, '杂语：记2018-04-26', '<p>今天曾经在大学家教过的一个小学生，给我打电话闲聊，哈哈满满的感动。<br/></p>', 21, 3, 'upload/18-04-26/15247467511804img-ca8f9d38568671ea3a074de1c72299dc.jpg', 8, '2018-04-26 12:46:00', 999, 3, '3'),
(23, 'qq', '', 15, 3, 'upload/18-04-18/15240557828585_20180418141056.jpg', 10, '2018-04-18 12:49:44', 1, 3, '1'),
(22, 'ee', '', 15, 3, 'upload/18-04-18/15240557333191_20180418141017.jpg', 10, '2018-04-18 12:48:54', 1, 3, '1');

-- --------------------------------------------------------

--
-- Table structure for table `fangke`
--

DROP TABLE IF EXISTS `fangke`;
CREATE TABLE IF NOT EXISTS `fangke` (
  `fid` int(11) NOT NULL AUTO_INCREMENT,
  `uid1` int(11) NOT NULL,
  `uid2` int(11) NOT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=MyISAM AUTO_INCREMENT=621 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fangke`
--

INSERT INTO `fangke` (`fid`, `uid1`, `uid2`) VALUES
(1, 1, 1),
(2, 1, 1),
(3, 1, 1),
(4, 1, 1),
(5, 1, 1),
(6, 1, 1),
(7, 1, 1),
(8, 1, 1),
(9, 1, 1),
(10, 1, 1),
(11, 1, 1),
(12, 1, 1),
(13, 1, 1),
(14, 1, 1),
(15, 1, 1),
(16, 1, 1),
(17, 1, 1),
(18, 1, 1),
(19, 1, 1),
(20, 1, 1),
(21, 1, 1),
(22, 1, 1),
(23, 1, 1),
(24, 1, 1),
(25, 1, 1),
(26, 1, 1),
(27, 1, 1),
(28, 1, 1),
(29, 1, 1),
(30, 1, 1),
(31, 1, 1),
(32, 1, 1),
(33, 1, 1),
(34, 1, 1),
(35, 1, 1),
(36, 1, 1),
(37, 1, 1),
(38, 1, 1),
(39, 1, 1),
(40, 1, 1),
(41, 1, 1),
(42, 1, 1),
(43, 1, 1),
(44, 1, 1),
(45, 1, 1),
(46, 1, 1),
(47, 1, 1),
(48, 1, 1),
(49, 1, 1),
(50, 5, 1),
(51, 5, 1),
(52, 5, 1),
(53, 5, 1),
(54, 5, 1),
(55, 5, 1),
(56, 5, 1),
(57, 5, 1),
(58, 5, 1),
(59, 5, 1),
(60, 5, 1),
(61, 5, 1),
(62, 5, 1),
(63, 5, 5),
(64, 5, 1),
(65, 5, 5),
(66, 5, 5),
(67, 5, 5),
(68, -1, 1),
(69, 1, 5),
(70, 1, 1),
(71, 1, 1),
(72, 1, 1),
(73, 1, 1),
(74, 1, 1),
(75, 1, 1),
(76, 1, 1),
(77, 1, 1),
(78, 1, 1),
(79, 1, 1),
(80, 1, 1),
(81, 1, 1),
(82, 1, 1),
(83, 1, 1),
(84, 1, 1),
(85, 1, 1),
(86, 1, 1),
(87, 1, 1),
(88, 1, 1),
(89, 1, 1),
(90, 1, 1),
(91, 1, 1),
(92, 1, 1),
(93, 1, 1),
(94, 1, 1),
(95, 1, 1),
(96, 1, 1),
(97, 1, 1),
(98, 1, 1),
(99, -1, 1),
(100, -1, 1),
(101, -1, 1),
(102, -1, 1),
(103, -1, 1),
(104, -1, 1),
(105, -1, 1),
(106, -1, 1),
(107, -1, 1),
(108, -1, 1),
(109, -1, 1),
(110, -1, 1),
(111, -1, 1),
(112, -1, 1),
(113, -1, 1),
(114, -1, 1),
(115, -1, 1),
(116, -1, 1),
(117, -1, 1),
(118, -1, 1),
(119, -1, 1),
(120, -1, 1),
(121, -1, 1),
(122, -1, 1),
(123, -1, 1),
(124, -1, 1),
(125, -1, 1),
(126, -1, 1),
(127, -1, 1),
(128, -1, 1),
(129, -1, 1),
(130, -1, 1),
(131, -1, 1),
(132, -1, 1),
(133, -1, 1),
(134, -1, 1),
(135, -1, 1),
(136, -1, 1),
(137, -1, 1),
(138, -1, 1),
(139, -1, 1),
(140, -1, 1),
(141, 1, 5),
(142, 1, 5),
(143, 1, 1),
(144, 1, 1),
(145, 1, 1),
(146, 1, 1),
(147, 1, 5),
(148, 1, 1),
(149, 1, 1),
(150, 1, 1),
(151, 1, 1),
(152, 1, 1),
(153, 1, 1),
(154, 1, 1),
(155, 1, 1),
(156, 1, 1),
(157, 1, 1),
(158, 1, 1),
(159, 1, 1),
(160, 1, 5),
(161, 1, 5),
(162, 1, 1),
(163, 1, 1),
(164, 1, 1),
(165, 1, 1),
(166, 1, 1),
(167, 1, 1),
(168, 1, 1),
(169, 1, 1),
(170, 1, 1),
(171, 1, 1),
(172, 1, 1),
(173, 1, 1),
(174, 1, 1),
(175, 1, 1),
(176, 1, 1),
(177, 1, 1),
(178, 1, 1),
(179, 1, 1),
(180, 1, 1),
(181, 1, 1),
(182, 1, 1),
(183, 1, 1),
(184, 1, 1),
(185, 1, 1),
(186, 1, 1),
(187, 1, 1),
(188, 1, 1),
(189, 1, 1),
(190, 1, 1),
(191, 11, 1),
(192, 11, 5),
(193, 11, 5),
(194, 11, 11),
(195, 11, 11),
(196, 11, 11),
(197, 11, 11),
(198, 11, 11),
(199, 11, 11),
(200, 11, 11),
(201, 11, 11),
(202, 11, 11),
(203, 11, 11),
(204, 11, 1),
(205, 11, 1),
(206, 11, 1),
(207, 11, 1),
(208, 1, 1),
(209, 1, 1),
(210, 1, 1),
(211, 1, 1),
(212, 1, 1),
(213, 1, 1),
(214, 11, 11),
(215, 11, 11),
(216, 11, 11),
(217, 1, 11),
(218, 1, 1),
(219, 1, 1),
(220, 1, 1),
(221, 1, 1),
(222, 1, 1),
(223, 1, 1),
(224, 1, 1),
(225, 1, 1),
(226, 13, 13),
(227, 13, 13),
(228, 13, 13),
(229, 14, 14),
(230, 14, 14),
(231, 14, 14),
(232, 16, 16),
(233, 16, 16),
(234, 17, 17),
(235, 17, 17),
(236, 17, 17),
(237, 17, 17),
(238, 17, 17),
(239, 17, 17),
(240, 17, 17),
(241, 17, 17),
(242, 17, 17),
(243, 17, 17),
(244, 17, 17),
(245, 16, 16),
(246, 16, 16),
(247, 16, 16),
(248, 16, 16),
(249, 16, 16),
(250, 16, 16),
(251, 16, 16),
(252, 16, 16),
(253, 16, 16),
(254, -1, 16),
(255, -1, 1),
(256, -1, 15),
(257, -1, 5),
(258, -1, 11),
(259, -1, 13),
(260, -1, 11),
(261, -1, 16),
(262, -1, 15),
(263, -1, 16),
(264, -1, 1),
(265, -1, 16),
(266, -1, 1),
(267, -1, 15),
(268, -1, 1),
(269, -1, 16),
(270, -1, 15),
(271, -1, 1),
(272, -1, 5),
(273, -1, 15),
(274, -1, 13),
(275, -1, 1),
(276, -1, 16),
(277, -1, 1),
(278, -1, 15),
(279, -1, 5),
(280, -1, 16),
(281, -1, 1),
(282, -1, 15),
(283, -1, 11),
(284, -1, 13),
(285, -1, 15),
(286, -1, 16),
(287, -1, 15),
(288, -1, 16),
(289, -1, 15),
(290, 18, 18),
(291, -1, 19),
(292, -1, 16),
(293, -1, 1),
(294, -1, 15),
(295, -1, 11),
(296, -1, 13),
(297, -1, 5),
(298, -1, 15),
(299, -1, 16),
(300, -1, 1),
(301, -1, 19),
(302, -1, 15),
(303, -1, 16),
(304, -1, 1),
(305, -1, 19),
(306, 21, 21),
(307, 21, 21),
(308, -1, 15),
(309, -1, 15),
(310, -1, 15),
(311, -1, 21),
(312, -1, 15),
(313, -1, 21),
(314, -1, 19),
(315, -1, 19),
(316, 21, 21),
(317, -1, 21),
(318, -1, 19),
(319, -1, 21),
(320, -1, 15),
(321, -1, 21),
(322, -1, 15),
(323, -1, 21),
(324, -1, 21),
(325, -1, 19),
(326, -1, 21),
(327, -1, 21),
(328, -1, 15),
(329, -1, 19),
(330, 21, 21),
(331, -1, 5),
(332, 21, 21),
(333, -1, 19),
(334, -1, 15),
(335, -1, 21),
(336, -1, 15),
(337, -1, 21),
(338, -1, 13),
(339, -1, 21),
(340, -1, 15),
(341, -1, 15),
(342, -1, 15),
(343, -1, 15),
(344, -1, 15),
(345, -1, 15),
(346, -1, 15),
(347, -1, 19),
(348, -1, 21),
(349, -1, 19),
(350, -1, 15),
(351, -1, 21),
(352, -1, 15),
(353, -1, 19),
(354, -1, 21),
(355, -1, 19),
(356, -1, 19),
(357, -1, 15),
(358, -1, 15),
(359, -1, 19),
(360, -1, 21),
(361, 24, 24),
(362, 24, 24),
(363, 21, 21),
(364, 21, 15),
(365, 21, 21),
(366, 21, 24),
(367, 21, 24),
(368, -1, 21),
(369, -1, 15),
(370, -1, 19),
(371, -1, 15),
(372, -1, 19),
(373, -1, 16),
(374, -1, 1),
(375, -1, 16),
(376, -1, 24),
(377, -1, 24),
(378, -1, 24),
(379, -1, 21),
(380, -1, 15),
(381, -1, 19),
(382, -1, 15),
(383, -1, 24),
(384, -1, 21),
(385, -1, 21),
(386, -1, 24),
(387, -1, 15),
(388, -1, 19),
(389, -1, 24),
(390, -1, 24),
(391, -1, 1),
(392, -1, 16),
(393, -1, 21),
(394, -1, 19),
(395, -1, 19),
(396, -1, 15),
(397, -1, 19),
(398, -1, 19),
(399, -1, 21),
(400, -1, 24),
(401, -1, 15),
(402, -1, 24),
(403, -1, 24),
(404, -1, 24),
(405, -1, 15),
(406, -1, 24),
(407, -1, 1),
(408, -1, 16),
(409, -1, 16),
(410, -1, 24),
(411, -1, 21),
(412, -1, 24),
(413, -1, 21),
(414, -1, 15),
(415, -1, 19),
(416, -1, 24),
(417, -1, 15),
(418, -1, 24),
(419, -1, 21),
(420, -1, 19),
(421, -1, 21),
(422, -1, 24),
(423, -1, 19),
(424, -1, 24),
(425, -1, 19),
(426, -1, 24),
(427, 21, 21),
(428, -1, 15),
(429, -1, 19),
(430, -1, 21),
(431, -1, 15),
(432, -1, 24),
(433, -1, 21),
(434, -1, 15),
(435, -1, 19),
(436, -1, 24),
(437, -1, 21),
(438, -1, 24),
(439, -1, 15),
(440, -1, 19),
(441, -1, 21),
(442, -1, 24),
(443, -1, 15),
(444, -1, 24),
(445, -1, 21),
(446, -1, 21),
(447, -1, 24),
(448, -1, 21),
(449, -1, 19),
(450, -1, 19),
(451, -1, 24),
(452, -1, 21),
(453, -1, 21),
(454, -1, 19),
(455, -1, 21),
(456, -1, 24),
(457, -1, 24),
(458, -1, 21),
(459, -1, 15),
(460, -1, 19),
(461, -1, 24),
(462, -1, 24),
(463, -1, 21),
(464, -1, 15),
(465, -1, 19),
(466, -1, 15),
(467, -1, 19),
(468, -1, 19),
(469, -1, 15),
(470, -1, 21),
(471, -1, 24),
(472, -1, 21),
(473, -1, 15),
(474, -1, 15),
(475, -1, 15),
(476, -1, 19),
(477, -1, 24),
(478, -1, 15),
(479, -1, 15),
(480, -1, 19),
(481, -1, 24),
(482, -1, 21),
(483, -1, 24),
(484, -1, 19),
(485, -1, 15),
(486, -1, 21),
(487, -1, 24),
(488, -1, 21),
(489, -1, 21),
(490, -1, 24),
(491, -1, 15),
(492, -1, 19),
(493, -1, 21),
(494, -1, 15),
(495, -1, 19),
(496, -1, 24),
(497, -1, 19),
(498, -1, 21),
(499, -1, 19),
(500, -1, 24),
(501, -1, 19),
(502, -1, 21),
(503, -1, 24),
(504, -1, 15),
(505, -1, 19),
(506, -1, 19),
(507, -1, 21),
(508, -1, 15),
(509, -1, 24),
(510, -1, 19),
(511, -1, 15),
(512, -1, 21),
(513, -1, 15),
(514, -1, 21),
(515, -1, 21),
(516, -1, 24),
(517, -1, 15),
(518, -1, 24),
(519, -1, 19),
(520, -1, 21),
(521, -1, 15),
(522, -1, 15),
(523, -1, 19),
(524, -1, 21),
(525, -1, 24),
(526, -1, 19),
(527, -1, 21),
(528, -1, 24),
(529, -1, 15),
(530, -1, 24),
(531, -1, 21),
(532, -1, 15),
(533, -1, 19),
(534, -1, 15),
(535, -1, 19),
(536, -1, 15),
(537, -1, 21),
(538, -1, 24),
(539, -1, 15),
(540, -1, 15),
(541, -1, 24),
(542, -1, 21),
(543, -1, 19),
(544, -1, 15),
(545, -1, 19),
(546, -1, 21),
(547, -1, 15),
(548, -1, 24),
(549, -1, 21),
(550, -1, 15),
(551, -1, 19),
(552, -1, 19),
(553, -1, 1),
(554, -1, 16),
(555, -1, 15),
(556, -1, 19),
(557, -1, 24),
(558, -1, 15),
(559, -1, 19),
(560, -1, 24),
(561, -1, 19),
(562, -1, 19),
(563, -1, 1),
(564, -1, 19),
(565, -1, 15),
(566, -1, 21),
(567, -1, 24),
(568, -1, 16),
(569, -1, 24),
(570, -1, 11),
(571, -1, 21),
(572, -1, 24),
(573, -1, 21),
(574, -1, 24),
(575, -1, 19),
(576, -1, 19),
(577, -1, 15),
(578, -1, 15),
(579, -1, 19),
(580, -1, 19),
(581, -1, 15),
(582, -1, 15),
(583, -1, 19),
(584, -1, 24),
(585, -1, 21),
(586, -1, 15),
(587, -1, 19),
(588, -1, 21),
(589, -1, 19),
(590, 16, 21),
(591, 21, 21),
(592, 25, 25),
(593, 25, 25),
(594, 25, 25),
(595, 25, 25),
(596, 25, 25),
(597, 25, 25),
(598, 25, 25),
(599, 25, 25),
(600, 25, 24),
(601, 25, 24),
(602, 25, 21),
(603, 26, 26),
(604, 27, 27),
(605, 27, 27),
(606, 27, 27),
(607, 27, 27),
(608, 27, 27),
(609, 27, 27),
(610, 27, 27),
(611, 27, 27),
(612, 27, 27),
(613, 27, 27),
(614, 27, 27),
(615, 27, 27),
(616, 27, 15),
(617, -1, 15),
(618, -1, 19),
(619, -1, 15),
(620, -1, 15);

-- --------------------------------------------------------

--
-- Table structure for table `follow`
--

DROP TABLE IF EXISTS `follow`;
CREATE TABLE IF NOT EXISTS `follow` (
  `gid` int(11) NOT NULL AUTO_INCREMENT,
  `uid1` int(11) DEFAULT NULL COMMENT '关注者',
  `uid2` int(11) DEFAULT NULL COMMENT '被关注者',
  PRIMARY KEY (`gid`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `follow`
--

INSERT INTO `follow` (`gid`, `uid1`, `uid2`) VALUES
(19, 11, 1),
(18, 1, 5),
(16, 5, 1),
(20, 11, 5),
(21, 1, 11),
(25, 16, 15),
(44, 21, 15),
(43, 21, 24),
(30, 16, 21),
(31, 16, 21),
(32, 16, 21),
(33, 16, 24),
(39, 25, 24);

-- --------------------------------------------------------

--
-- Table structure for table `good`
--

DROP TABLE IF EXISTS `good`;
CREATE TABLE IF NOT EXISTS `good` (
  `gid` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `conid` int(11) DEFAULT NULL,
  PRIMARY KEY (`gid`)
) ENGINE=MyISAM AUTO_INCREMENT=49 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `good`
--

INSERT INTO `good` (`gid`, `uid`, `conid`) VALUES
(12, 5, 1),
(10, 5, 2),
(11, 5, 8),
(13, 1, 9),
(17, 1, 11),
(15, 11, 8),
(16, 11, 9),
(18, 16, 22),
(48, 21, 23),
(21, 16, 26),
(47, 21, 22),
(46, 27, 31),
(44, 25, 29);

-- --------------------------------------------------------

--
-- Table structure for table `hits`
--

DROP TABLE IF EXISTS `hits`;
CREATE TABLE IF NOT EXISTS `hits` (
  `hid` int(11) NOT NULL AUTO_INCREMENT,
  `conid` int(11) DEFAULT NULL COMMENT '点击内容的id',
  `hnum` int(11) DEFAULT NULL COMMENT '点击量',
  PRIMARY KEY (`hid`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hits`
--

INSERT INTO `hits` (`hid`, `conid`, `hnum`) VALUES
(1, 1, 331),
(13, 9, 15),
(12, 8, 53),
(5, 2, 42),
(11, 4, 1),
(10, 6, 26),
(9, 5, 9),
(14, 9, 13),
(15, 10, 14),
(16, 7, 11),
(17, 11, 6),
(18, 13, 1),
(19, 14, 1),
(20, 16, 1),
(21, 18, 1),
(22, 23, 45),
(23, 22, 19),
(24, 24, 4),
(25, 25, 10),
(26, 26, 9),
(27, 27, 6),
(28, 28, 49),
(29, 29, 73),
(30, 31, 3),
(31, 32, 7);

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

DROP TABLE IF EXISTS `level`;
CREATE TABLE IF NOT EXISTS `level` (
  `lid` int(11) NOT NULL AUTO_INCREMENT,
  `lname` varchar(32) DEFAULT NULL,
  `connum` varchar(11) DEFAULT NULL,
  `messagenum` varchar(11) DEFAULT NULL,
  `adminnum` varchar(50) NOT NULL,
  `usernum` varchar(22) NOT NULL,
  PRIMARY KEY (`lid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`lid`, `lname`, `connum`, `messagenum`, `adminnum`, `usernum`) VALUES
(1, '超级管理员', '1,2,3,4', '1,2,3,4', '1,2,3,4', '1,2,3,4'),
(3, '编辑人员', '4', '4', '4', '4');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `mid` int(11) NOT NULL AUTO_INCREMENT,
  `uid1` int(44) DEFAULT NULL COMMENT '留言者',
  `uid2` int(44) DEFAULT NULL COMMENT '被留言者',
  `conid` int(11) DEFAULT NULL COMMENT '给那条内容留言',
  `mcon` varchar(500) DEFAULT NULL COMMENT '留言的内容',
  `state` int(11) DEFAULT NULL,
  PRIMARY KEY (`mid`)
) ENGINE=MyISAM AUTO_INCREMENT=71 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`mid`, `uid1`, `uid2`, `conid`, `mcon`, `state`) VALUES
(1, 5, 1, 1, '坐个沙发', 0),
(2, 5, 5, 1, '做得好', 1),
(3, 5, 5, 1, '萨达', 1),
(4, 5, 5, 1, '萨达', 1),
(5, 5, 5, 1, '萨达', 1),
(11, 5, 5, 1, '分', 1),
(15, 5, 1, 1, 'asddsadas', 0),
(16, 5, 5, 1, 'dww', 15),
(18, 5, 5, 1, 'aaa', 15),
(19, 5, 5, 1, 'www', 15),
(20, 5, 5, 1, 'wq', 15),
(39, 1, 1, 2, '沙发', 0),
(22, 5, 5, 1, '', 15),
(23, 5, 5, 1, 'sadsadsad', 15),
(28, 10, 1, 7, '测试一下', 0),
(29, 5, 1, 1, 'eeee', 0),
(38, 11, 1, 5, 'zoa', 0),
(40, 14, 5, 1, '啥', 29),
(41, 14, 1, 1, '傻B', 0),
(42, 14, 1, 1, '傻B', 0),
(43, 14, 1, 1, '傻B', 0),
(44, 14, 1, 1, '傻B', 0),
(45, 14, 1, 1, '傻B', 0),
(46, 14, 1, 1, '傻B', 0),
(47, 14, 1, 1, '傻B', 0),
(48, 14, 1, 1, '傻B\n', 0),
(49, 16, 1, 1, 'sad', 0),
(50, 16, 5, 1, '', 1),
(51, 17, 1, 10, '帅气', 0),
(52, 16, 16, 16, '刚写的文章，占个沙发', 0),
(53, 16, 15, 18, '写的是毛线吗？', 0),
(54, 18, 15, 22, 'av大咖', 0),
(55, 21, 15, 23, '拍的不错', 0),
(56, 21, 21, 28, 'ads\n', 0),
(57, 21, 21, 28, '抄袭', 56),
(58, 21, 18, 22, '上官？', 54),
(59, 21, 21, 28, '你这个是抄袭！！！', 0),
(60, 21, 21, 28, '你这个是抄袭！！！', 0),
(61, 16, 21, 26, '生日快乐', 0),
(62, 21, 24, 29, '', 0),
(63, 21, 21, 28, 'asdasd', 56),
(64, 25, 24, 29, '', 0),
(65, 21, 21, 28, 'qewqe', 0),
(66, 21, 21, 28, 'asd', 65),
(67, 26, 24, 29, '啊实打实的', 0),
(68, 26, 26, 29, '啊实打实', 67),
(69, 21, 15, 22, 'sad', 0),
(70, 21, 15, 23, 'sadsa', 0);

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

DROP TABLE IF EXISTS `position`;
CREATE TABLE IF NOT EXISTS `position` (
  `pid` int(11) NOT NULL AUTO_INCREMENT COMMENT '推荐位id',
  `pname` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`pid`, `pname`) VALUES
(1, '早安故事'),
(2, '人气榜'),
(3, '晚安故事');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `rid` int(11) NOT NULL AUTO_INCREMENT,
  `rname` varchar(30) DEFAULT NULL,
  `rwen` int(11) NOT NULL DEFAULT '0',
  `readl` int(33) NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`rid`, `rname`, `rwen`, `readl`) VALUES
(1, '普通会员', 0, 0),
(2, '黄金会员', 10, 2),
(4, '白金会员', 50, 3);

-- --------------------------------------------------------

--
-- Table structure for table `self`
--

DROP TABLE IF EXISTS `self`;
CREATE TABLE IF NOT EXISTS `self` (
  `selfid` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) DEFAULT NULL,
  `conid` int(11) DEFAULT NULL,
  `money` int(11) DEFAULT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`selfid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(30) DEFAULT NULL,
  `upass` varchar(32) DEFAULT NULL,
  `nicheng` varchar(32) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `level` tinyint(2) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `regdata` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `uname`, `upass`, `nicheng`, `photo`, `level`, `phone`, `regdata`) VALUES
(1, 'liwenjie@qq.com', '4297f44b13955235245b2497399d7a93', '阿萨德', 'upload/17-11-18/15109717675498s.jpg', 2, '111111111111', '2017-10-31 11:39:03'),
(27, 'dabianing@qq.com', '4297f44b13955235245b2497399d7a93', '答辩', '    upload/18-06-04/15281082919344timg.jpg', 1, '11112', '2018-06-04 10:30:28'),
(5, 'wenjie@qq.com', '4297f44b13955235245b2497399d7a93', '脚写的从前111', 'upload/17-11-18/15109717675498s.jpg', 0, '', '2017-11-08 14:36:45'),
(8, 'liujianfeng@qq.com', '5646', '12315', 'upload/17-11-18/15109717675498s.jpg', 2, '222222222222', '2017-11-09 14:59:36'),
(9, 'wenjian@qq.com', '45646', '1231545', 'upload/17-11-18/15109717675498s.jpg', 0, '22222', '2017-11-09 15:00:12'),
(10, 'jiewenli@qq.com', '4297f44b13955235245b2497399d7a93', NULL, 'upload/17-11-18/15109717675498s.jpg', 1, NULL, '2017-11-16 15:07:19'),
(11, 'jiezi@qq.com', '4297f44b13955235245b2497399d7a93', '我是杰子', 'upload/17-11-18/15109911074302wwq.jpg', 1, '15234494939', '2017-11-16 15:07:56'),
(12, '111111111@qq.com', 'f5bb0c8de146c67b44babbf4e6584cc0', NULL, NULL, 1, NULL, '2017-12-08 01:10:58'),
(13, '123123@qq.com', 'f5bb0c8de146c67b44babbf4e6584cc0', '詹姆斯', 'upload/17-12-08/15126956959239zhanmusi.jpg', 1, '15232162134', '2017-12-08 01:11:44'),
(14, '123456@qq.com', 'e10adc3949ba59abbe56e057f20f883e', '文杰的爸比', '', 1, '111111111111', '2018-04-18 03:23:58'),
(15, '971547691@qq.com', '80c68b1294ff8405d4679a2741ae1100', NULL, NULL, 1, NULL, '2018-04-18 06:02:34'),
(16, '123@qq.com', '4297f44b13955235245b2497399d7a93', '正点科技', 'upload/18-04-18/15240523217141img-ca8f9d38568671ea3a074de1c72299dc.jpg', 1, '12321', '2018-04-18 06:06:27'),
(17, 'liuwei@qq.com', '56fe635cbb9d4ba9d5bde50fcdd3d87d', 'liuwei', '', 1, '', '2018-04-18 11:27:42'),
(18, '321@qq.com', 'e10adc3949ba59abbe56e057f20f883e', 'av', '', 1, '', '2018-04-22 08:09:01'),
(19, '', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, 1, NULL, '2018-04-22 08:29:07'),
(20, '', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, 1, NULL, '2018-04-22 08:29:52'),
(21, '447047479@qq.com', '4297f44b13955235245b2497399d7a93', '作者本人-李文杰', 'upload/18-04-26/15247460963438img-ca8f9d38568671ea3a074de1c72299dc.jpg', 1, '15234494939', '2018-04-26 12:33:36'),
(22, '1225407@qq.com', '59f2443a4317918ce29ad28a14e1bdb7', NULL, NULL, 1, NULL, '2018-05-04 11:16:02'),
(23, '122540@qq.com', '0a69d8c89e305fe071e2057fae7d04b0', NULL, NULL, 1, NULL, '2018-05-04 11:17:09'),
(24, '1234@qq.com', 'e10adc3949ba59abbe56e057f20f883e', '你最胖了', 'upload/18-05-04/15254331254579WechatIMG2.jpeg', 1, '56734927309', '2018-05-04 11:21:22'),
(25, 'dabian@qq.com', '4297f44b13955235245b2497399d7a93', '正在答辩中', '    upload/18-05-31/15277496763105ddd.png', 1, '110', '2018-05-31 06:53:26'),
(26, '678@qq.com', '4297f44b13955235245b2497399d7a93', '答辩111', '    upload/18-06-03/1527987207825timg.jpg', 1, '1111', '2018-06-03 00:52:15');

-- --------------------------------------------------------

--
-- Table structure for table `zhanghu`
--

DROP TABLE IF EXISTS `zhanghu`;
CREATE TABLE IF NOT EXISTS `zhanghu` (
  `zhanghuid` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) DEFAULT NULL,
  `money` int(11) DEFAULT NULL,
  PRIMARY KEY (`zhanghuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
