/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50547
Source Host           : localhost:3306
Source Database       : sino-inno

Target Server Type    : MYSQL
Target Server Version : 50547
File Encoding         : 65001

Date: 2017-10-10 18:00:32
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
INSERT INTO `sino_admin` VALUES ('1', 'admin', 'webadmin', '21', '2017-10-10 11:16:17', '127.0.0.1', '18819201898', '462369233@qq.com', '2017-05-11 15:20:06', '后台管理员');

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
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

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
INSERT INTO `sino_article` VALUES ('19', '111111111', '阿斯顿发生大发是的发生的发是打发是打发是的发送到发斯蒂芬', '<p>阿斯顿发生大发是的发生的发是打发是打发是的发送到发斯蒂芬</p>', '2', '1', '123', '1', '20170929/59ce0d76a6691.png', '20170929/59ce0d7f6141e.png', '阿斯蒂芬afsdf', '2017-09-28 16:36:19');
INSERT INTO `sino_article` VALUES ('20', '啊的所发生的13', '阿斯顿发生大发是的发生的发是打发是打发是的发送到发斯蒂芬', '<p>阿斯顿发生大发是的发生的发是打发是打发是的发送到发斯蒂芬</p>', '2', '1', '123', '2', '20170929/59ce0d76a6691.png', '20170929/59ce0d7f6141e.png', '阿斯蒂芬afsdf', '2017-10-09 09:18:14');
INSERT INTO `sino_article` VALUES ('21', '啊的所发生的14', '阿斯顿发生大发是的发生的发是打发是打发是的发送到发斯蒂芬', '<p>阿斯顿发生大发是的发生的发是打发是打发是的发送到发斯蒂芬</p>', '6', '1', '125', '3', '20170929/59ce0d76a6691.png', '20170929/59ce0d7f6141e.png', '阿斯蒂芬afsdf', '2017-10-09 09:24:22');
INSERT INTO `sino_article` VALUES ('22', '啊的所发生15', '阿斯顿发生大发是的发生的发是打发是打发是的发送到发斯蒂芬', '<p>阿斯顿发生大发是的发生的发是打发是打发是的发送到发斯蒂芬</p>', '6', '1', '125', '4', '20170929/59ce0d76a6691.png', '20170929/59ce0d7f6141e.png', '阿斯蒂芬afsdf', '2017-10-09 09:24:25');
INSERT INTO `sino_article` VALUES ('23', '啊的所16', '阿斯顿发生大发是的发生的发是打发是打发是的发送到发斯蒂芬', '<p>阿斯顿发生大发是的发生的发是打发是打发是的发送到发斯蒂芬</p>', '6', '1', '1258', '5', '20170929/59ce0d76a6691.png', '20170929/59ce0d7f6141e.png', '阿斯蒂芬afsdf', '2017-10-09 09:24:27');
INSERT INTO `sino_article` VALUES ('24', '啊的所发生的17', '阿斯顿发生大发是的发生的发是打发是打发是的发送到发斯蒂芬', '<p>阿斯顿发生大发是的发生的发是打发是打发是的发送到发斯蒂芬</p>', '6', '1', '1257', '6', '20170929/59ce0d76a6691.png', '20170929/59ce0d7f6141e.png', '阿斯蒂芬afsdf', '2017-10-09 09:24:30');
INSERT INTO `sino_article` VALUES ('25', '啊的所发生的18', '阿斯顿发生大发是的发生的发是打发是打发是的发送到发斯蒂芬', '<p>阿斯顿发生大发是的发生的发是打发是打发是的发送到发斯蒂芬</p>', '6', '1', '125', '7', '20170929/59ce0d76a6691.png', '20170929/59ce0d7f6141e.png', '阿斯蒂芬afsdf', '2017-10-09 09:24:32');
INSERT INTO `sino_article` VALUES ('26', '啊的所发生的19', '阿斯顿发生大发是的发生的发是打发是打发是的发送到发斯蒂芬', '<p>阿斯顿发生大发是的发生的发是打发是打发是的发送到发斯蒂芬</p>', '6', '1', '120', '8', '20170929/59ce0d76a6691.png', '20170929/59ce0d7f6141e.png', '阿斯蒂芬afsdf', '2017-10-09 09:24:35');
INSERT INTO `sino_article` VALUES ('27', '啊的所20', '阿斯顿发生大发是的发生的发是打发是打发是的发送到发斯蒂芬', '<p>阿斯顿发生大发是的发生的发是打发是打发是的发送到发斯蒂芬</p>', '6', '1', '121', '9', '20170929/59ce0d76a6691.png', '20170929/59ce0d7f6141e.png', '阿斯蒂芬afsdf', '2017-10-09 09:24:38');
INSERT INTO `sino_article` VALUES ('28', '啊的所发21', '阿斯顿发生大发是的发生的发是打发是打发是的发送到发斯蒂芬', '<p>阿斯顿发生大发是的发生的发是打发是打发是的发送到发斯蒂芬</p>', '6', '1', '122', '10', '20170929/59ce0d76a6691.png', '20170929/59ce0d7f6141e.png', '阿斯蒂芬afsdf', '2017-10-09 09:24:40');
INSERT INTO `sino_article` VALUES ('29', '啊的所发生22', '阿斯顿发生大发是的发生的发是打发是打发是的发送到发斯蒂芬', '<p>阿斯顿发生大发是的发生的发是打发是打发是的发送到发斯蒂芬</p>', '2', '1', '123', '11', '20170929/59ce0d76a6691.png', '20170929/59ce0d7f6141e.png', '阿斯蒂芬afsdf', '2017-10-09 09:24:43');
INSERT INTO `sino_article` VALUES ('30', '啊的所发生的23', '阿斯顿发生大发是的发生的发是打发是打发是的发送到发斯蒂芬', '<p>阿斯顿发生大发是的发生的发是打发是打发是的发送到发斯蒂芬</p>', '6', '1', '124', '12', '20170929/59ce0d76a6691.png', '20170929/59ce0d7f6141e.png', '阿斯蒂芬afsdf', '2017-10-09 09:24:46');
INSERT INTO `sino_article` VALUES ('31', '啊的所发生的24', '阿斯顿发生大发是的发生的发是打发是打发是的发送到发斯蒂芬', '<p>阿斯顿发生大发是的发生的发是打发是打发是的发送到发斯蒂芬</p>', '3', '1', '125', '13', '20170929/59ce0d76a6691.png', '20170929/59ce0d7f6141e.png', '阿斯蒂芬afsdf', '2017-10-09 09:24:50');
INSERT INTO `sino_article` VALUES ('32', '新材料专场路演25', 'afsadfa', '<p>电动车与后市场是目前汽车行业的两大热点话题。那么，未来的新能源汽车后市场会呈现哪些创新与合作？新能源汽车售后服务的现状与未来发展趋势是什么？对此，罗兰贝格提出四大主要观点。</p><p><br/></p><p><img src=\"/rub5/Public/upload/images/20171010/1507605492129572.png\" title=\"1507605492129572.png\" alt=\"xyfx-wz-pic1.png\"/></p><p><br/></p><p>总体拥有成本，燃料价格差异是关键。</p><p>由于电池成本很高，纯电动汽车的动力传动系统成本高于其他所有电源类型传动系统的成本。混合动力汽车在6.7年内可以达到盈亏平衡，而纯电动汽车模型由于其高成本的电池，需要9.7年才可以达到盈亏平衡。</p><p>由于电池成本很高，纯电动汽车的动力传动系统成本高于其他所有电源类型传动系统的成本。混合动力汽车在6.7年内可以达到盈亏平衡，而纯电动汽车模型由于其高成本的电池，需要9.7年才可以达到盈亏平衡。</p><p>由于电池成本很高，纯电动汽车的动力传动系统成本高于其他所有电源类型传动系统的成本。混合动力汽车在6.7年内可以达到盈亏平衡，而纯电动汽车模型由于其高成本的电池，需要9.7年才可以达到盈亏平衡。</p><p>由于电池成本很高，纯电动汽车的动力传动系统成本高于其他所有电源类型传动系统的成本。混合动力汽车在6.7年内可以达到盈亏平衡，而纯电动汽车模型由于其高成本的电池，需要9.7年才可以达到盈亏平衡。</p><p>由于电池成本很高，纯电动汽车的动力传动系统成本高于其他所有电源类型传动系统的成本。混合动力汽车在6.7年内可以达到盈亏平衡，而纯电动汽车模型由于其高成本的电池，需要9.7年才可以达到盈亏平衡。</p><p>由于电池成本很高，纯电动汽车的动力传动系统成本高于其他所有电源类型传动系统的成本。混合动力汽车在6.7年内可以达到盈亏平衡，而纯电动汽车模型由于其高成本的电池，需要9.7年才可以达到盈亏平衡。</p><p>由于电池成本很高，纯电动汽车的动力传动系统成本高于其他所有电源类型传动系统的成本。混合动力汽车在6.7年内可以达到盈亏平衡，而纯电动汽车模型由于其高成本的电池，需要9.7年才可以达到盈亏平衡。</p><p>由于电池成本很高，纯电动汽车的动力传动系统成本高于其他所有电源类型传动系统的成本。混合动力汽车在6.7年内可以达到盈亏平衡，而纯电动汽车模型由于其高成本的电池，需要9.7年才可以达到盈亏平衡。</p><p><img src=\"http://sino.com/rub5/Public/upload/images/20171010/1507605492129572.png\" title=\"1507605492129572.png\" alt=\"xyfx-wz-pic1.png\" style=\"white-space: normal;\"/></p><p>由于电池成本很高，纯电动汽车的动力传动系统成本高于其他所有电源类型传动系统的成本。混合动力汽车在6.7年内可以达到盈亏平衡，而纯电动汽车模型由于其高成本的电池，需要9.7年才可以达到盈亏平衡。</p><p>由于电池成本很高，纯电动汽车的动力传动系统成本高于其他所有电源类型传动系统的成本。混合动力汽车在6.7年内可以达到盈亏平衡，而纯电动汽车模型由于其高成本的电池，需要9.7年才可以达到盈亏平衡。</p><p>由于电池成本很高，纯电动汽车的动力传动系统成本高于其他所有电源类型传动系统的成本。混合动力汽车在6.7年内可以达到盈亏平衡，而纯电动汽车模型由于其高成本的电池，需要9.7年才可以达到盈亏平衡。</p><p>由于电池成本很高，纯电动汽车的动力传动系统成本高于其他所有电源类型传动系统的成本。混合动力汽车在6.7年内可以达到盈亏平衡，而纯电动汽车模型由于其高成本的电池，需要9.7年才可以达到盈亏平衡。</p>', '3', '1', '12', '14', '20171009/59dae82d3947d.png', '20171009/59dae83346caf.png', 'asdf', '2017-10-09 11:08:16');

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
INSERT INTO `sino_config` VALUES ('5', 'about', '<p style=\"text-align: center;\"><span style=\"font-size: 32px; font-family: 微软雅黑, &quot;Microsoft YaHei&quot;; color: rgb(0, 0, 0);\">中创产业研究院简介<span style=\"font-size: 32px; font-family: 微软雅黑, &quot;Microsoft YaHei&quot;; color: rgb(0, 0, 0);\"></span></span></p><p>我国现代意义上的智库发展与改革开放进程同步，至今已有30多年的历史。目前，我国的智库主要有官方智库、半官方智库、大学智库和民间智库等四种，这四种智库在机构属性、资源特点、研究力量方面各有特点，在决策咨询方面发挥着不同的作用，同时也都存在各自的问题。</p><p>2014年，国务院发展研究中心发表文章《大力推动民间智库发展辅助政府决策》，文章提到：民间智库是推进我国政府决策民主化和科学化的重要力量，其研究成果相对更加独立、公正，同时能够整合更多来自社会各界的智力资源，为政府的决策服务。并且，随着时代的发展与进步，我国逐渐跨入了转型的关键时期，社会多元化带来了政治、战略、体制、社会和改革等多方面的困惑，尤其需要集思广益、集中各方智慧。在这种情况下，应当大力推动民间智库的发展，辅助政府提高决策水平和社会治理能力。</p><p>在此背景下，中创产业研究院于2014年正式成立。中创产业研究院是由国内外著名高校支持、广州创业谷、中大创投和各知名产业集团联合筹措成立的新型科研组织，是全省创新协同发展体系的重要组成部分。研究院聚集创新资源，以“研究产业，服务产业，发展产业”为理念，以服务产业和引领产业创新协同发展为根本，通过开展以战略性新兴产业发展和传统产业转型为主的集中研究攻关，创新体制机制，着力先行先试，力争构建成一个多方建设、体系开放、水平一流的新型研发组织，同时成为广东省乃至全国产业特别是战略性新兴产业发展的重要研究中心和民间智库。</p><p>中创产业研究院的基本方向，是着力构建新兴产业发展研究基地和智库。研究院特别注重把握战略性新兴产业的发展方向，通过合理整合高校、企业和产业集团的资源，对涉及产业结构、产业组织运营、产业政策和产业竞争等展开集中研究攻关，打造中国产业发展智库和产业发展体系。</p><p>中创产业研究院最主要的两大功能是为国家产业发展提供智库支持和促进产业投融资活动的高效开展。展开科研攻关、合作交流，不断完善开放共建科研平台的建设，为广东省乃至全国的产业发展提供战略支持，定制产业发展战略、规划和路径，为政府部门、企业和产业集团提供战略管理咨询意见。同时，研究院在研究产业发展的基础上，面向转型产业特别是战略性新兴产业的市场需求，通过创新科研组织机制，加强分工协作和统筹性工作，推进产业研究和项目投融资方案的对接，推动战略性新兴产业的健康发展。</p><p>同时，中创产业研究院整合了国内外各大著名高校和产研院科研平台、政府以及企业、大产业集团三大资源，使研究院成为高水平的科研机构共同体、高层次人才的聚集地和创业资源聚集地，实现研究产业、服务产业和发展产业创新机制体制的建立。</p>', null);
INSERT INTO `sino_config` VALUES ('6', 'organization', '<p style=\"text-align: center;\"><span style=\"font-size: 32px; color: rgb(0, 0, 0);\"></span></p><p style=\"text-align: center;\"><span style=\"font-size: 32px; color: rgb(0, 0, 0);\">组织架构</span></p><p><span style=\"font-size: 16px;\">中创产业研究院组织架构清晰明确，设有院长1名，执行院长1名，下设一个秘书处和五个研究所。秘书处有秘书长1名。五个研究所包括风险投资研究所、金融产业研究所、医疗产业研究所、新材料产业研究所和先进制造研究所，这些研究所里包含副院长1名以及研究员若干名。</span></p><p style=\"text-align: center;\"><span style=\"color: rgb(0, 0, 0); font-size: 16px;\"><img src=\"/rub5/Public/upload/images/20171010/1507624580598615.png\" title=\"1507624580598615.png\" alt=\"gywm-tdcy-zjjg.png\"/></span></p><p style=\"text-align: center;\"><span style=\"font-size: 32px; color: rgb(0, 0, 0);\">团队成员</span></p><p><span style=\"font-size: 16px;\">本专家团队充分集合了来自国内知名高校和研究机构、商贸行业领域专家和产业专家的力量，依托专业背景和多学科交叉研究的丰富经验，长期从事产业升级与协调发展、区域经济发展规划、实体经济发展对策研究等方面的专项研究，致力于为政府机关和行业提供专业解决方案。</span></p>', null);
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
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sino_team
-- ----------------------------
INSERT INTO `sino_team` VALUES ('18', '彭震伟', '中国城市规划学会理事。同济大学建筑与城市规划学院教授，博士生导师，现任同济大学建筑与城市规划学院党委书记。', '兼任中国城市规划学会理事，中国城市规划学会小城镇规划学术委员会副主任委员，中国城市规划学会城市经济与区域规划学术委员会委员，中国城市经济学会大城市专业委员会委员、《城市规划学刊》杂志编委等职。', '2', '1', '20171010/59dc91f6282b2.png', '1');
INSERT INTO `sino_team` VALUES ('12', '舒元', '中创产业研究院 院长', '中大创投董事长，中大创新谷联合创始人，广东天使会终身名誉会长，中山大学岭南学院董事会副主席，岭南学院校友会名誉会长，中山大学国际商学院校友会会长，复旦大学广东校友会会长。<br><br>经济学教授，博士生导师，复旦大学经济学博士，美国春田大学人文学荣誉博士，国务院特殊津贴获得者<br><br>曾任复旦大学经济学系主任，复旦大学中美经济学培训中心主任，英国伦敦经济学院访问学者，美国麻省理工学院访问教授，中山大学岭南学院、国际商学院院长，广东省政府发展研究中心特约研究员，广州市人民政府决策咨询专家', '1', '1', '20171010/59dc8496d7441.png', '1');
INSERT INTO `sino_team` VALUES ('13', '郑贵辉', '中创产业研究院  执行院长', '中大创投总裁，广州创业谷联合创始人，中大创新谷联合创始人，广东医谷联合创始人，海鳖众筹联合创始人，庖丁技朮联合创始人，云珠沙龙联合创始人，SME联合创始人，广东天使会联合创始人、执行会长，广东省物流与供应链协会金融专业委员会主任。<br><br>中山大学／麻省理工学院国际MBA，高级经济师，中山大学金融硕士导师。中国火炬创业导师，中央电视台创业英雄汇投资人评委，暨南大学创业导师、黑马大赛评委，中国青年创新创业大赛评委，中国青年APP大赛评委。<br><br>曾任广东健力宝集团有限公司代理总裁、常务副总裁，多家企业董事长和总经理，擅长基金运作、企业运营及整合，熟悉资本运作、收购兼并、改制上市、投融资业务。', '1', '2', '20171010/59dc8555cf30c.png', '1');
INSERT INTO `sino_team` VALUES ('14', '谢嘉生', '中创产业研究院  常务副院长', '广东医谷执行总裁，中国医疗产业联盟副理事长、秘书长，中大/麻省理工IMBA，华南理工大学工学硕士。在民营上市公司、大型跨国外企及商业地产集团公司从事管理岗位多年。<br><br>四川省医药与健康产业发展战略顾问，广东省“众创杯”创业创新大赛创业导师，珠海市创业导师，有丰富的私募股权投资和项目并购的成功经验，曾任中大创投的投资副总监和广东银马集团总经理，主导投资的项目有迈奇化学（股票代码：831325）、江苏天元、马岗综合市场、海舶库存服饰交易平台等。', '1', '3', '20171010/59dc85790b649.png', '1');
INSERT INTO `sino_team` VALUES ('15', '耿雪辉', '中创产业研究院   副院长', '中国政法大学民商法学硕士，中大创投执行总裁，中创学院常务副院长，萌芽基金投委会委员，中大创新谷联合创始人，广州创业谷执行董事，海鳖众筹联合创始人，云珠沙龙联合创始人，庖丁技术执行董事，广东医谷执行董事。<br><br>中国火炬创业导师，广东财经大学金融硕士导师，广州股权交易中心创业导师 ，华南农业大学创业导师。曾先后于健力宝集团、安利中国、省广股份（002400）担任高管多年，并担任多家企业董事。对产业投资、资本运营有深入理解和实践经验，曾参与或主导对多个项目的投资及退出。', '1', '4', '20171010/59dc859ae238b.png', '1');
INSERT INTO `sino_team` VALUES ('16', '徐容', '中创产业研究院  副院长', '海鳖众筹执行总裁，中大创新谷联合创始人，《众筹之路》联合作者，庖丁技术监事会主席。2015广 东青年创新创业大赛评委，广东省大学生创业技能大赛评委。<br><br>曾任中大创投风控部经理、海鳖众筹运营总监，泰和泰律师事 务所证券律师，曾任职新筑股份（002480）证券部、投资部。擅 长众筹平台运营、种子、天使项目投资及基金运作。', '1', '5', '20171010/59dc85b771953.png', '1');
INSERT INTO `sino_team` VALUES ('19', '陈朝晖', '美国创新领导力研究中心（CCL）大中华区总裁，美国智库美国企业研究所兼职研究员、英国牛津分析兼职分析师。', '诺贝尔经济学奖得主蒙代尔的关门弟子，曾任教于伦敦经济学院经济系，兼任金融市场研究中心研究员。1995-1999任国际货币基金组织经济学家，参与国际金融市场巡视、以及印度、泰国、美国、约旦、美国、中国以及亚洲金融危机期间韩国等国家的项目评审工作。1999-2001任美国摩根大通银行副总裁，2002-2007任全球教育管理集团中国CEO，创立了中国首个中外合资高等院校。', '2', '2', '20171010/59dc922a58043.png', '1');
INSERT INTO `sino_team` VALUES ('20', '刘斌', '教授，同济大学交通工程学院交通系统规划与管理专业博士。先后担任上海商学院物流管理教研室主任、连锁经营管理系副主任。', '现任上海商学院上海商业发展研究院副院长、教授、上海商业储运研究会秘书长。主编了立信出版社的《物流实务手册》；编著了《物流配送营运与管理》，参编《超级市场营销管理》《商贸物流》《电子商务概论》《电子商务网络营销》《现代流通》等教材。', '2', '3', '20171010/59dc924b2bcc0.png', '1');
INSERT INTO `sino_team` VALUES ('21', '金笑天', '博士，上海商业发展研究院首席研究员，高级咨询师。', '16年国内外商业规划、商业分析成功经验，获得过上海市科技进步二等奖2次、三等奖1次。', '2', '4', '20171010/59dc926e79aed.png', '1');
INSERT INTO `sino_team` VALUES ('22', '李吟枫', '上海现代城市与区域发展规划研究院院长。', '香港New Venture公司CEO、香港Fudan Parters公司董事长。中国航天集团投资顾问。曾任美国哈佛大学、芝加哥大学客座教授。', '2', '5', '20171010/59dc92939d1d1.png', '1');
INSERT INTO `sino_team` VALUES ('23', '杨建文', '上海社科院部门经济研究所所长、博士生导师。上海工商联副主席、政府委派赴美国访问学者，上海市政府决策咨询顾问', '参与过上海文化发展战略规划、大上海物流、投融资体制改革、长江三角洲一体化研究等。上海现代城市与区域发展规划研究院副院长。', '2', '6', '20171010/59dc92b331666.png', '1');
INSERT INTO `sino_team` VALUES ('24', '曹嘉明', '上海现代建筑设计集团副总裁，国家一级注册建筑师、教授级高级工程师。', '中国建筑学会资深会员、英国皇家特许建造学会(CIOB)会员，香港建筑学会会员。上海虹桥综合交通枢纽工程设计总指挥。', '2', '7', '20171010/59dc92d7ed69d.png', '1');
INSERT INTO `sino_team` VALUES ('25', '李小钢', '上海社会科学院外国投资研究中心主任，主要从事外国投资的研究与咨询，包括项目投资的技术经济分析。', '上海社会科学院外国投资研究中心主任，主要从事外国投资的研究与咨询，包括项目投资的技术经济分析。', '2', '8', '20171010/59dc92f93dda5.png', '1');
