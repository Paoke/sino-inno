/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50547
Source Host           : localhost:3306
Source Database       : sino-inno

Target Server Type    : MYSQL
Target Server Version : 50547
File Encoding         : 65001

Date: 2017-09-20 18:28:32
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `sino_cooperation`
-- ----------------------------
DROP TABLE IF EXISTS `sino_cooperation`;
CREATE TABLE `sino_cooperation` (
  `coid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) DEFAULT NULL,
  `logo` varchar(64) DEFAULT NULL,
  `link` varchar(64) DEFAULT NULL,
  `orderid` varchar(8) DEFAULT NULL,
  `status` varchar(8) DEFAULT NULL,
  PRIMARY KEY (`coid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sino_cooperation
-- ----------------------------
INSERT INTO `sino_cooperation` VALUES ('2', '广东医谷', '20170920/57c8ee7166880.png', 'http://www.gdmv.cn', '1', '1');
INSERT INTO `sino_cooperation` VALUES ('4', '广东医谷', '20170920/59c23fc60f225.png', 'http://www.gdmv.cn', '2', '1');

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
INSERT INTO `sino_admin` VALUES ('1', 'admin', 'webadmin', '12', '2017-09-20 16:17:53', '127.0.0.1', '18819201898', '462369233@qq.com', '2017-05-11 15:20:06', '后台管理员');

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
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sino_banner
-- ----------------------------
INSERT INTO `sino_banner` VALUES ('11', '20170920/59c23e1c66b24.png', '1', '2', '2017-09-20');
INSERT INTO `sino_banner` VALUES ('10', '20170920/59c1de5ba89a4.png', '1', '1', '2017-09-20');

-- ----------------------------
-- Table structure for `sino_config`
-- ----------------------------
DROP TABLE IF EXISTS `sino_config`;
CREATE TABLE `sino_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(16) DEFAULT NULL,
  `value` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sino_config
-- ----------------------------
INSERT INTO `sino_config` VALUES ('1', 'record_no', '粤ICP备14039480号');
INSERT INTO `sino_config` VALUES ('2', 'copyright', 'Copyright © 2014-2017 中创研究院 版权所有');
INSERT INTO `sino_config` VALUES ('3', 'support', '技术支持：广东庖丁技术开发股份有限公司');
INSERT INTO `sino_config` VALUES ('4', 'address', '广州市海珠区滨江东路548-1号中大创新谷');
