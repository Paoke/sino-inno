/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50547
Source Host           : localhost:3306
Source Database       : sino-inno

Target Server Type    : MYSQL
Target Server Version : 50547
File Encoding         : 65001

Date: 2017-10-09 18:05:32
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
  `actimg` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`acid`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sino_activity
-- ----------------------------
INSERT INTO `sino_activity` VALUES ('15', '新材料专场路演2', '本期新材料专场路演，我们邀请到珠三角地区横跨汽车、能源、消费电子等诸多领域的多个新材料创新项目一同', '2017-09-30 09:00:00', '2017-09-30 12:00:00', '广州市海珠区滨江东路548-1号中大创新谷', '200', '1', 'http://www.kesixin.xin', '20171009/59daee69d4637.png');
INSERT INTO `sino_activity` VALUES ('16', '新材料专场路演3', '本期新材料专场路演，我们邀请到珠三角地区横跨汽车、能源、消费电子等诸多领域的多个新材料创新项目一同', '2017-10-28 14:00:00', '2017-10-28 17:00:00', '广州市海珠区滨江东路548-1号中大创新谷', '100', '1', 'http://www.kesixin.xin', '20171009/59daeea44085b.png');
INSERT INTO `sino_activity` VALUES ('14', '新材料专场路演1', '本期新材料专场路演，我们邀请到珠三角地区横跨汽车、能源、消费电子等诸多领域的多个新材料创新项目一同', '2017-08-30 10:30:00', '2017-08-30 17:00:00', '广州市海珠区滨江东路548-1号中大创新谷', '100', '1', 'http://www.kesixin.xin', '20171009/59daeda2d6011.png');

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
INSERT INTO `sino_admin` VALUES ('1', 'admin', 'webadmin', '20', '2017-10-09 14:51:15', '127.0.0.1', '18819201898', '462369233@qq.com', '2017-05-11 15:20:06', '后台管理员');

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
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sino_article
-- ----------------------------
INSERT INTO `sino_article` VALUES ('4', '13333333333333', '阿斯顿发生大发是的发生的发是打发是打发是的发送到发斯蒂芬', '<p>阿斯顿发生大发是的发生的发是打发是打发是的发送到发斯蒂芬</p>', '1', '1', '123', '1', '20170929/59ce0d76a6691.png', '20170929/59ce0d7f6141e.png', '阿斯蒂芬afsdf', '2017-09-28 16:36:19');
INSERT INTO `sino_article` VALUES ('6', '啊的所发生的12', '阿斯顿发生大发是的发生的发是打发是打发是的发送到发斯蒂芬', '<p>阿斯顿发生大发是的发生的发是打发是打发是的发送到发斯蒂芬</p>', '1', '1', '123', '2', '20170929/59ce0d76a6691.png', '20170929/59ce0d7f6141e.png', '阿斯蒂芬afsdf', '2017-10-09 09:18:14');
INSERT INTO `sino_article` VALUES ('7', '啊的所发生的11', '阿斯顿发生大发是的发生的发是打发是打发是的发送到发斯蒂芬', '<p>阿斯顿发生大发是的发生的发是打发是打发是的发送到发斯蒂芬</p>', '1', '1', '125', '3', '20170929/59ce0d76a6691.png', '20170929/59ce0d7f6141e.png', '阿斯蒂芬afsdf', '2017-10-09 09:24:22');
INSERT INTO `sino_article` VALUES ('8', '啊的所发生10', '阿斯顿发生大发是的发生的发是打发是打发是的发送到发斯蒂芬', '<p>阿斯顿发生大发是的发生的发是打发是打发是的发送到发斯蒂芬</p>', '1', '1', '125', '4', '20170929/59ce0d76a6691.png', '20170929/59ce0d7f6141e.png', '阿斯蒂芬afsdf', '2017-10-09 09:24:25');
INSERT INTO `sino_article` VALUES ('9', '啊的所9', '阿斯顿发生大发是的发生的发是打发是打发是的发送到发斯蒂芬', '<p>阿斯顿发生大发是的发生的发是打发是打发是的发送到发斯蒂芬</p>', '1', '1', '1258', '5', '20170929/59ce0d76a6691.png', '20170929/59ce0d7f6141e.png', '阿斯蒂芬afsdf', '2017-10-09 09:24:27');
INSERT INTO `sino_article` VALUES ('10', '啊的所发生的8', '阿斯顿发生大发是的发生的发是打发是打发是的发送到发斯蒂芬', '<p>阿斯顿发生大发是的发生的发是打发是打发是的发送到发斯蒂芬</p>', '1', '1', '1257', '6', '20170929/59ce0d76a6691.png', '20170929/59ce0d7f6141e.png', '阿斯蒂芬afsdf', '2017-10-09 09:24:30');
INSERT INTO `sino_article` VALUES ('11', '啊的所发生的7', '阿斯顿发生大发是的发生的发是打发是打发是的发送到发斯蒂芬', '<p>阿斯顿发生大发是的发生的发是打发是打发是的发送到发斯蒂芬</p>', '1', '1', '125', '7', '20170929/59ce0d76a6691.png', '20170929/59ce0d7f6141e.png', '阿斯蒂芬afsdf', '2017-10-09 09:24:32');
INSERT INTO `sino_article` VALUES ('12', '啊的所发生的6', '阿斯顿发生大发是的发生的发是打发是打发是的发送到发斯蒂芬', '<p>阿斯顿发生大发是的发生的发是打发是打发是的发送到发斯蒂芬</p>', '1', '1', '120', '8', '20170929/59ce0d76a6691.png', '20170929/59ce0d7f6141e.png', '阿斯蒂芬afsdf', '2017-10-09 09:24:35');
INSERT INTO `sino_article` VALUES ('13', '啊的所5', '阿斯顿发生大发是的发生的发是打发是打发是的发送到发斯蒂芬', '<p>阿斯顿发生大发是的发生的发是打发是打发是的发送到发斯蒂芬</p>', '1', '1', '121', '9', '20170929/59ce0d76a6691.png', '20170929/59ce0d7f6141e.png', '阿斯蒂芬afsdf', '2017-10-09 09:24:38');
INSERT INTO `sino_article` VALUES ('14', '啊的所发4', '阿斯顿发生大发是的发生的发是打发是打发是的发送到发斯蒂芬', '<p>阿斯顿发生大发是的发生的发是打发是打发是的发送到发斯蒂芬</p>', '1', '1', '122', '10', '20170929/59ce0d76a6691.png', '20170929/59ce0d7f6141e.png', '阿斯蒂芬afsdf', '2017-10-09 09:24:40');
INSERT INTO `sino_article` VALUES ('15', '啊的所发生3', '阿斯顿发生大发是的发生的发是打发是打发是的发送到发斯蒂芬', '<p>阿斯顿发生大发是的发生的发是打发是打发是的发送到发斯蒂芬</p>', '1', '1', '123', '11', '20170929/59ce0d76a6691.png', '20170929/59ce0d7f6141e.png', '阿斯蒂芬afsdf', '2017-10-09 09:24:43');
INSERT INTO `sino_article` VALUES ('16', '啊的所发生的2', '阿斯顿发生大发是的发生的发是打发是打发是的发送到发斯蒂芬', '<p>阿斯顿发生大发是的发生的发是打发是打发是的发送到发斯蒂芬</p>', '1', '1', '124', '12', '20170929/59ce0d76a6691.png', '20170929/59ce0d7f6141e.png', '阿斯蒂芬afsdf', '2017-10-09 09:24:46');
INSERT INTO `sino_article` VALUES ('17', '啊的所发生的1', '阿斯顿发生大发是的发生的发是打发是打发是的发送到发斯蒂芬', '<p>阿斯顿发生大发是的发生的发是打发是打发是的发送到发斯蒂芬</p>', '1', '1', '125', '13', '20170929/59ce0d76a6691.png', '20170929/59ce0d7f6141e.png', '阿斯蒂芬afsdf', '2017-10-09 09:24:50');
INSERT INTO `sino_article` VALUES ('18', '新材料专场路演1', 'afsadfa', '<p>asdfasdf</p>', '1', '1', '12', '14', '20171009/59dae82d3947d.png', '20171009/59dae83346caf.png', 'asdf', '2017-10-09 11:08:16');

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
INSERT INTO `sino_banner` VALUES ('12', '20170929/59ce0535ad37d.png', '1', '3', '2017-09-22');
INSERT INTO `sino_banner` VALUES ('11', '20170929/59ce05253e5e6.png', '1', '1', '2017-09-20');
INSERT INTO `sino_banner` VALUES ('10', '20170929/59ce054314176.png', '1', '2', '2017-09-20');

-- ----------------------------
-- Table structure for `sino_config`
-- ----------------------------
DROP TABLE IF EXISTS `sino_config`;
CREATE TABLE `sino_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `key` varchar(16) DEFAULT NULL,
  `value` longtext,
  `time` varchar(16) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sino_config
-- ----------------------------
INSERT INTO `sino_config` VALUES ('1', 'record_no', '粤ICP备14039480号', null);
INSERT INTO `sino_config` VALUES ('2', 'copyright', 'Copyright © 2014-2017 中创研究院 版权所有', null);
INSERT INTO `sino_config` VALUES ('3', 'support', '技术支持：广东庖丁技术开发股份有限公司', null);
INSERT INTO `sino_config` VALUES ('4', 'address', '广州市海珠区滨江东路548-1号中大创新谷', null);
INSERT INTO `sino_config` VALUES ('5', 'about', '<p>研究院简介设置---按时是地地道道</p>', null);
INSERT INTO `sino_config` VALUES ('6', 'organization', '<p>组织架构 &nbsp;&nbsp;</p>', null);
INSERT INTO `sino_config` VALUES ('7', 'declaration', '<p>法律声明 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>', null);
INSERT INTO `sino_config` VALUES ('9', 'summary', '<p>是的发生的 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>', '2014');
INSERT INTO `sino_config` VALUES ('10', 'summary', '<p>按时大法师法大大</p>', '2015');
INSERT INTO `sino_config` VALUES ('11', 'summary', '<p>大师法索多敷阿斯顿发生</p>', '2016');
INSERT INTO `sino_config` VALUES ('12', 'summary', '<p>阿斯顿发生大发</p>', '2017');

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
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sino_cooperation
-- ----------------------------
INSERT INTO `sino_cooperation` VALUES ('12', '电子科技', '20171009/59db152cc1b9e.jpg', '', '3', '1');
INSERT INTO `sino_cooperation` VALUES ('11', '移动通信', '20171009/59db151921c8a.jpg', '', '3', '1');
INSERT INTO `sino_cooperation` VALUES ('10', '清华珠三角研究院', '20171009/59db14e16afb0.jpg', '', '3', '1');
INSERT INTO `sino_cooperation` VALUES ('9', '中国科学院', '20171009/59db14b1b9a91.jpg', '', '3', '1');
INSERT INTO `sino_cooperation` VALUES ('13', '霍英东研究院', '20171009/59db154e28df3.jpg', '', '3', '1');
INSERT INTO `sino_cooperation` VALUES ('14', '中山大学', '20171009/59db15669c72b.jpg', '', '3', '1');
INSERT INTO `sino_cooperation` VALUES ('15', '南方医科大学', '20171009/59db15771c041.jpg', '', '3', '1');
INSERT INTO `sino_cooperation` VALUES ('16', '华南理工大学', '20171009/59db15c4a9b96.jpg', '', '3', '1');
INSERT INTO `sino_cooperation` VALUES ('17', '南京工业大学', '20171009/59db15d860065.jpg', '', '3', '1');
INSERT INTO `sino_cooperation` VALUES ('18', '西北工业大学', '20171009/59db15eb70a60.jpg', '', '3', '1');
INSERT INTO `sino_cooperation` VALUES ('19', '广东工业大学', '20171009/59db1603dca7e.jpg', '', '3', '1');
INSERT INTO `sino_cooperation` VALUES ('20', '广东医学院', '20171009/59db16117a367.jpg', '', '3', '1');
INSERT INTO `sino_cooperation` VALUES ('21', '广州医科大学', '20171009/59db16220b9aa.jpg', '', '3', '1');
INSERT INTO `sino_cooperation` VALUES ('22', '广州中医药大学', '20171009/59db1639d7cb5.jpg', '', '3', '1');
INSERT INTO `sino_cooperation` VALUES ('23', '广东食品药品职业学院', '20171009/59db165a0ed3d.png', '', '3', '1');
INSERT INTO `sino_cooperation` VALUES ('24', '中大创投', '20171009/59db169de6dd0.png', '', '1', '1');
INSERT INTO `sino_cooperation` VALUES ('25', '广东医谷', '20171009/59db16afa5ecf.png', '', '1', '1');
INSERT INTO `sino_cooperation` VALUES ('26', '庖丁众包', '20171009/59db16c34ae41.png', '', '1', '1');
INSERT INTO `sino_cooperation` VALUES ('27', '中大创新谷', '20171009/59db16d25da80.png', '', '1', '1');
INSERT INTO `sino_cooperation` VALUES ('28', '云珠沙龙', '20171009/59db16ea8740e.png', '', '1', '1');
INSERT INTO `sino_cooperation` VALUES ('29', '达安基因', '20171009/59db16fca3d3a.png', '', '1', '1');
INSERT INTO `sino_cooperation` VALUES ('30', '迈瑞', '20171009/59db170dd36e2.png', '', '1', '1');
INSERT INTO `sino_cooperation` VALUES ('31', '强生', '20171009/59db17202b791.png', '', '1', '1');
INSERT INTO `sino_cooperation` VALUES ('32', '创捷供应链', '20171009/59db173760881.png', '', '1', '1');
INSERT INTO `sino_cooperation` VALUES ('33', '启迪科技园', '20171009/59db174be17af.png', '', '1', '1');
INSERT INTO `sino_cooperation` VALUES ('34', '翔康技术', '20171009/59db175e810f7.png', '', '1', '1');
INSERT INTO `sino_cooperation` VALUES ('35', '京墨科技', '20171009/59db176c3a738.png', '', '1', '1');
INSERT INTO `sino_cooperation` VALUES ('36', '微创医疗', '20171009/59db17800b1ec.png', '', '1', '1');
INSERT INTO `sino_cooperation` VALUES ('37', '冠昊', '20171009/59db179a82e00.png', '', '1', '1');
INSERT INTO `sino_cooperation` VALUES ('38', '领晟医药', '20171009/59db17d16c344.png', '', '1', '1');
INSERT INTO `sino_cooperation` VALUES ('39', '达晨创投', '20171009/59db183c98e9f.png', '', '2', '1');
INSERT INTO `sino_cooperation` VALUES ('40', '北极光创投', '20171009/59db185fce23d.png', '', '2', '1');
INSERT INTO `sino_cooperation` VALUES ('41', 'SEQUOIA', '20171009/59db187b25167.png', '', '2', '1');
INSERT INTO `sino_cooperation` VALUES ('42', '赛伯乐投资集团', '20171009/59db18993715f.png', '', '2', '1');
INSERT INTO `sino_cooperation` VALUES ('43', '易方达基金', '20171009/59db18af49b46.png', '', '2', '1');
INSERT INTO `sino_cooperation` VALUES ('44', '粤科金融', '20171009/59db18c3a8b74.png', '', '2', '1');
INSERT INTO `sino_cooperation` VALUES ('45', '广州基金', '20171009/59db18d5d9cc5.png', '', '2', '1');
INSERT INTO `sino_cooperation` VALUES ('46', '广州南方投资', '20171009/59db18e9b5f14.png', '', '2', '1');
INSERT INTO `sino_cooperation` VALUES ('47', '高特佳投资', '20171009/59db19073478a.png', '', '2', '1');
INSERT INTO `sino_cooperation` VALUES ('48', '深圳创新投资', '20171009/59db191e89839.png', '', '2', '1');
INSERT INTO `sino_cooperation` VALUES ('49', '爱健康金融', '20171009/59db19335e1a8.png', '', '2', '1');
INSERT INTO `sino_cooperation` VALUES ('50', '兮京投资', '20171009/59db1977d0d45.png', '', '2', '1');
INSERT INTO `sino_cooperation` VALUES ('51', '中金公司', '20171009/59db198c1790a.png', '', '2', '1');
INSERT INTO `sino_cooperation` VALUES ('52', '建设银行', '20171009/59db19a19b36a.png', '', '2', '1');
INSERT INTO `sino_cooperation` VALUES ('53', '中国银行', '20171009/59db19afc4ea5.png', '', '2', '1');

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
