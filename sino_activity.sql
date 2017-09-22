/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50547
Source Host           : localhost:3306
Source Database       : sino-inno

Target Server Type    : MYSQL
Target Server Version : 50547
File Encoding         : 65001

Date: 2017-09-22 18:58:19
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `sino_activity`
-- ----------------------------
DROP TABLE IF EXISTS `sino_activity`;
CREATE TABLE `sino_activity` (
  `acid` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `summary` text,
  `start_time` datetime DEFAULT NULL,
  `end_time` datetime DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `expense` varchar(8) DEFAULT NULL,
  `status` varchar(8) DEFAULT '1',
  `link` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`acid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sino_activity
-- ----------------------------
INSERT INTO `sino_activity` VALUES ('1', '新材料专场路演1', 'asdfasd', '2017-09-21 17:53:11', '2017-09-22 17:53:14', 'adfasfasdfasdf', '1002', '1', 'http://www.kesixin.xin');
INSERT INTO `sino_activity` VALUES ('3', 'dddd', 'dddd', '2017-09-22 09:56:32', '2017-09-22 11:56:35', '45646546', '100', '1', 'http://www.kesixin.xin');

-- ----------------------------
-- Table structure for `sino_admin`
-- ----------------------------
DROP TABLE IF EXISTS `sino_admin`;
CREATE TABLE `sino_admin` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `adminusername` varchar(32) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `logintime` int(11) DEFAULT NULL,
  `lastlogin` datetime DEFAULT NULL,
  `lastip` varchar(32) DEFAULT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `email` varchar(32) DEFAULT NULL,
  `regtime` datetime DEFAULT NULL,
  `role` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sino_admin
-- ----------------------------
INSERT INTO `sino_admin` VALUES ('1', 'admin', 'webadmin', '15', '2017-09-22 17:52:21', '127.0.0.1', '18819201898', '462369233@qq.com', '2017-05-11 15:20:06', '后台管理员');

-- ----------------------------
-- Table structure for `sino_article`
-- ----------------------------
DROP TABLE IF EXISTS `sino_article`;
CREATE TABLE `sino_article` (
  `arid` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `summary` text,
  `content` longtext,
  `acid` varchar(8) DEFAULT NULL,
  `status` varchar(8) DEFAULT '1',
  `read_times` int(11) DEFAULT NULL,
  `orderid` int(11) DEFAULT NULL,
  `indeximg` varchar(64) DEFAULT NULL,
  `thumbimg` varchar(64) DEFAULT NULL,
  `from` varchar(64) DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`arid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sino_article
-- ----------------------------
INSERT INTO `sino_article` VALUES ('4', 'node.js', '阿斯顿发生大发ljljl;l;', '<p>asdfa阿斯顿发生大发l;&#39;;lkkl&#39;</p>', '2', '1', '123', '1', '20170921/59c37a08b6f72.png', '20170921/59c3953faf45a.png', '阿斯蒂芬afsdf', '2017-09-28 16:36:19');

-- ----------------------------
-- Table structure for `sino_article_category`
-- ----------------------------
DROP TABLE IF EXISTS `sino_article_category`;
CREATE TABLE `sino_article_category` (
  `acid` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(64) DEFAULT NULL,
  `status` varchar(8) DEFAULT '1',
  PRIMARY KEY (`acid`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sino_article_category
-- ----------------------------
INSERT INTO `sino_article_category` VALUES ('1', '风险投资', '1');
INSERT INTO `sino_article_category` VALUES ('2', '金融产业', '1');
INSERT INTO `sino_article_category` VALUES ('3', '医疗产业', '1');
INSERT INTO `sino_article_category` VALUES ('4', '新材料产业', '1');
INSERT INTO `sino_article_category` VALUES ('5', '先进制造产业', '1');
INSERT INTO `sino_article_category` VALUES ('6', '行业资讯', '1');

-- ----------------------------
-- Table structure for `sino_banner`
-- ----------------------------
DROP TABLE IF EXISTS `sino_banner`;
CREATE TABLE `sino_banner` (
  `baid` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(64) DEFAULT NULL,
  `status` varchar(8) DEFAULT NULL,
  `orderid` varchar(8) DEFAULT NULL,
  `time` date DEFAULT NULL,
  PRIMARY KEY (`baid`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sino_banner
-- ----------------------------
INSERT INTO `sino_banner` VALUES ('12', '20170922/59c4b68b9cbe5.png', '1', '3', '2017-09-22');
INSERT INTO `sino_banner` VALUES ('11', '20170920/59c23e1c66b24.png', '1', '1', '2017-09-20');
INSERT INTO `sino_banner` VALUES ('10', '20170920/59c1de5ba89a4.png', '1', '2', '2017-09-20');

-- ----------------------------
-- Table structure for `sino_config`
-- ----------------------------
DROP TABLE IF EXISTS `sino_config`;
CREATE TABLE `sino_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `key` varchar(16) DEFAULT NULL,
  `value` longtext,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sino_config
-- ----------------------------
INSERT INTO `sino_config` VALUES ('1', 'record_no', '粤ICP备14039480号');
INSERT INTO `sino_config` VALUES ('2', 'copyright', 'Copyright © 2014-2017 中创研究院 版权所有');
INSERT INTO `sino_config` VALUES ('3', 'support', '技术支持：广东庖丁技术开发股份有限公司');
INSERT INTO `sino_config` VALUES ('4', 'address', '广州市海珠区滨江东路548-1号中大创新谷');
INSERT INTO `sino_config` VALUES ('5', 'about', '<p>研究院简介设置---按时是地地道道</p>');
INSERT INTO `sino_config` VALUES ('6', 'organization', '<p>组织架构 &nbsp;&nbsp;</p>');
INSERT INTO `sino_config` VALUES ('7', 'declaration', '<p>法律声明 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>');

-- ----------------------------
-- Table structure for `sino_cooperation`
-- ----------------------------
DROP TABLE IF EXISTS `sino_cooperation`;
CREATE TABLE `sino_cooperation` (
  `coid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) DEFAULT NULL,
  `logo` varchar(64) DEFAULT NULL,
  `link` varchar(64) DEFAULT NULL,
  `category` varchar(8) DEFAULT NULL,
  `status` varchar(8) DEFAULT NULL,
  PRIMARY KEY (`coid`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sino_cooperation
-- ----------------------------
INSERT INTO `sino_cooperation` VALUES ('2', '广东医谷', '20170920/57c8ee7166880.png', 'http://www.gdmv.cn', '1', '0');
INSERT INTO `sino_cooperation` VALUES ('5', '广东医谷', '20170921/59c317b5d9b57.png', 'http://www.gdmv.cn', '1', '1');
INSERT INTO `sino_cooperation` VALUES ('6', '订单', '20170922/59c4b67445fde.png', 'http://www.kesixin.xin', '1', '1');
INSERT INTO `sino_cooperation` VALUES ('7', '撒地方', '20170922/59c4b76106e42.png', '', '2', '1');
INSERT INTO `sino_cooperation` VALUES ('8', 'aaa', '20170922/59c4b77994590.png', 'http://www.kesixin.xin', '3', '1');

-- ----------------------------
-- Table structure for `sino_team`
-- ----------------------------
DROP TABLE IF EXISTS `sino_team`;
CREATE TABLE `sino_team` (
  `teid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) DEFAULT NULL,
  `job` varchar(64) DEFAULT NULL,
  `summary` text,
  `category` varchar(8) DEFAULT NULL,
  `orderid` varchar(8) DEFAULT NULL,
  `header` varchar(64) DEFAULT NULL,
  `status` varchar(8) DEFAULT '1',
  PRIMARY KEY (`teid`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sino_team
-- ----------------------------
INSERT INTO `sino_team` VALUES ('6', '大ddddd', '阿斯蒂芬ddd', '大ddddd', '1', '1', '20170922/59c4ebd55cd7c.png', '1');
INSERT INTO `sino_team` VALUES ('7', '阿斯蒂芬', '安抚', '阿斯蒂芬', '2', '1', '20170922/59c4d95274833.png', '0');
INSERT INTO `sino_team` VALUES ('8', '暗室逢灯', '阿斯蒂芬', '阿斯顿发送到', '2', '2', '20170922/59c4d9807c3c3.png', '1');
INSERT INTO `sino_team` VALUES ('10', '阿斯蒂芬', '阿斯蒂芬', '阿斯蒂芬', '1', '2', '20170922/59c4d9a74904e.png', '1');
