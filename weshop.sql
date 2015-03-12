-- phpMyAdmin SQL Dump
-- version 2.11.2.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015 年 03 月 04 日 15:03
-- 服务器版本: 5.0.45
-- PHP 版本: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- 数据库: `weshop`
--

-- --------------------------------------------------------

--
-- 表的结构 `ws_ad`
--

CREATE TABLE `ws_ad` (
  `adid` int(10) NOT NULL auto_increment COMMENT '广告编号，主键自增',
  `name` varchar(50) NOT NULL COMMENT '广告描述',
  `imgpath` varchar(100) NOT NULL COMMENT '封面图片路径',
  `content` text NOT NULL COMMENT '广告内容',
  `pub_time` int(15) NOT NULL COMMENT '发布时间',
  `clicks` varchar(10) NOT NULL COMMENT '点击量',
  `status` varchar(1) NOT NULL COMMENT '广告状态，1：启用，2：禁用',
  PRIMARY KEY  (`adid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='首页广告表(图片轮播)：ws_ad' AUTO_INCREMENT=1 ;

--
-- 导出表中的数据 `ws_ad`
--


-- --------------------------------------------------------

--
-- 表的结构 `ws_comment`
--

CREATE TABLE `ws_comment` (
  `commentid` int(15) NOT NULL auto_increment COMMENT '评论编号，主键自增',
  `itemid` int(15) NOT NULL COMMENT '商品编号',
  `orderno` varchar(50) NOT NULL COMMENT '订单编号',
  `fromuserid` int(10) NOT NULL COMMENT '评论来自那个用户id',
  `touserid` varchar(10) NOT NULL COMMENT '评论去往那个用户id',
  `isgood` int(1) NOT NULL COMMENT '好评，1：很好，2：一般，3：很差',
  `comment` varchar(300) NOT NULL COMMENT '评论内容',
  `img` varchar(500) NOT NULL COMMENT '评论时上传的图片',
  `f_id` int(15) NOT NULL COMMENT '回复的父级id,首次评论fid为0',
  `add_time` int(15) NOT NULL COMMENT '评论时间',
  PRIMARY KEY  (`commentid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='商品评价信息：ws_comment' AUTO_INCREMENT=1 ;

--
-- 导出表中的数据 `ws_comment`
--


-- --------------------------------------------------------

--
-- 表的结构 `ws_config`
--

CREATE TABLE `ws_config` (
  `name` varchar(50) NOT NULL COMMENT '网站名称',
  `url` varchar(100) NOT NULL COMMENT '网站地址',
  `keywords` varchar(100) NOT NULL COMMENT '网站关键字',
  `address` varchar(100) NOT NULL COMMENT '地址',
  `tel` varchar(12) NOT NULL COMMENT '联系电话',
  `icp` varchar(50) NOT NULL COMMENT '网站备案号'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='网站配置信息：ws_config';

--
-- 导出表中的数据 `ws_config`
--


-- --------------------------------------------------------

--
-- 表的结构 `ws_favorite`
--

CREATE TABLE `ws_favorite` (
  `favoriteid` int(10) NOT NULL auto_increment COMMENT '用户收藏编号，主键自增',
  `typeid` int(15) NOT NULL COMMENT '收藏类型编号，店铺或者商品编号',
  `type` int(1) NOT NULL COMMENT '收藏类型，1：店铺，2：商品',
  `userid` int(10) NOT NULL COMMENT '用户编号',
  PRIMARY KEY  (`favoriteid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='10.用户收藏：ws_favorite' AUTO_INCREMENT=1 ;

--
-- 导出表中的数据 `ws_favorite`
--


-- --------------------------------------------------------

--
-- 表的结构 `ws_item`
--

CREATE TABLE `ws_item` (
  `itemid` int(15) NOT NULL auto_increment COMMENT '商品编号,主键自增',
  `itemname` varchar(100) NOT NULL COMMENT '商品简介',
  `image` varchar(400) NOT NULL COMMENT '商品图片简介的图片路径',
  `iteminfo` text NOT NULL COMMENT '商品详细信息',
  `price` varchar(10) NOT NULL COMMENT '商品价格',
  `nowprice` varchar(10) NOT NULL COMMENT '促销价格',
  `typeid` int(5) NOT NULL COMMENT '商品所属分类id',
  `add_time` int(15) NOT NULL COMMENT '商品添加时间',
  `clicks` int(10) NOT NULL COMMENT '商品添加时间',
  `storeid` int(10) NOT NULL COMMENT '商品所属店铺的id',
  `status` int(1) NOT NULL COMMENT '商品状态，1：在售，2：下架',
  `isrecommend` int(1) NOT NULL COMMENT '推荐商品，1：推荐商品，2：非推荐商品',
  `ishotsale` int(1) NOT NULL COMMENT '是否热卖，1：热卖商品，2：非热卖商品',
  PRIMARY KEY  (`itemid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='商品信息表：ws_item' AUTO_INCREMENT=1 ;

--
-- 导出表中的数据 `ws_item`
--


-- --------------------------------------------------------

--
-- 表的结构 `ws_itemcart`
--

CREATE TABLE `ws_itemcart` (
  `cartid` int(15) NOT NULL auto_increment COMMENT '购物车编号，主键自增',
  `itemid` int(15) NOT NULL COMMENT '商品编号',
  `userid` int(10) NOT NULL COMMENT '买家编号',
  `count` int(4) NOT NULL COMMENT '购买数量',
  `price` varchar(10) NOT NULL COMMENT '商品价格',
  `add_time` int(15) NOT NULL COMMENT '添加购物车时间',
  PRIMARY KEY  (`cartid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='商品购物车：ws_itemcart' AUTO_INCREMENT=1 ;

--
-- 导出表中的数据 `ws_itemcart`
--


-- --------------------------------------------------------

--
-- 表的结构 `ws_itemcount`
--

CREATE TABLE `ws_itemcount` (
  `countid` int(15) NOT NULL auto_increment COMMENT '商品信息统计编号，主键自增',
  `itemid` int(15) NOT NULL COMMENT '商品编号',
  `salecount` int(6) NOT NULL COMMENT '商品总销量',
  `commentsum` int(10) NOT NULL COMMENT '评论总数',
  `goodcount` int(10) NOT NULL COMMENT '好评数量',
  `gencount` int(10) NOT NULL COMMENT '一般评论数量',
  `badcount` int(10) NOT NULL COMMENT '差评数量',
  PRIMARY KEY  (`countid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='商品信息统计：ws_itemcount' AUTO_INCREMENT=1 ;

--
-- 导出表中的数据 `ws_itemcount`
--


-- --------------------------------------------------------

--
-- 表的结构 `ws_itemtrade`
--

CREATE TABLE `ws_itemtrade` (
  `tradeid` int(15) NOT NULL auto_increment COMMENT '交易记录编号，主键自增',
  `orderno` varchar(50) NOT NULL COMMENT '订单编号',
  `itemid` int(15) NOT NULL COMMENT '商品编号',
  `userid` int(10) NOT NULL COMMENT '买家编号',
  `itemcount` int(4) NOT NULL COMMENT '购买商品数量',
  `price` varchar(10) NOT NULL COMMENT '商品价格',
  `uaddrid` int(15) NOT NULL COMMENT '收货地址编号',
  `buyremark` varchar(200) NOT NULL COMMENT '买家备注',
  `paytype` int(15) NOT NULL COMMENT '支付类型，1：货到付款，2：在线支付',
  `buy_time` int(1) NOT NULL COMMENT '买家下单时间',
  `pay_time` int(15) NOT NULL COMMENT '买家付款时间',
  `isshipment` int(1) NOT NULL COMMENT '卖家是否发货',
  `ship_time` int(15) NOT NULL COMMENT '卖家发货时间',
  `isreceipt` int(1) NOT NULL COMMENT '买家是否收货',
  `issuccess` int(1) NOT NULL COMMENT '交易是否成功',
  `isreturn` int(1) NOT NULL COMMENT '是否退货',
  `failremark` varchar(100) NOT NULL COMMENT '交易失败备注',
  PRIMARY KEY  (`tradeid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='商品交易详情：ws_itemtrade' AUTO_INCREMENT=1 ;

--
-- 导出表中的数据 `ws_itemtrade`
--


-- --------------------------------------------------------

--
-- 表的结构 `ws_store`
--

CREATE TABLE `ws_store` (
  `storeid` int(10) NOT NULL auto_increment COMMENT '店铺编号，主键自增',
  `storeimg` varchar(100) NOT NULL COMMENT '店铺缩略图',
  `storeinfo` text NOT NULL COMMENT '店铺简介',
  `storetel` varchar(12) NOT NULL COMMENT '店铺电话',
  `storeaddr` varchar(200) NOT NULL COMMENT '店铺地址',
  `userid` int(10) NOT NULL COMMENT '所属用户id',
  PRIMARY KEY  (`storeid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='店铺信息表：ws_store' AUTO_INCREMENT=1 ;

--
-- 导出表中的数据 `ws_store`
--


-- --------------------------------------------------------

--
-- 表的结构 `ws_type`
--

CREATE TABLE `ws_type` (
  `typeid` int(5) NOT NULL auto_increment COMMENT '商品分类编号，主键自增',
  `typename` varchar(20) NOT NULL COMMENT '商品名称',
  `f_id` int(5) NOT NULL COMMENT '父级商品id',
  `status` int(1) NOT NULL COMMENT '状态，1：通过审核，2：等待管理员审核',
  PRIMARY KEY  (`typeid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='4.商品分类表：ws_type' AUTO_INCREMENT=1 ;

--
-- 导出表中的数据 `ws_type`
--


-- --------------------------------------------------------

--
-- 表的结构 `ws_uaddr`
--

CREATE TABLE `ws_uaddr` (
  `addrid` int(10) NOT NULL auto_increment COMMENT '收货地址编号，主键自增',
  `userid` int(10) NOT NULL COMMENT '用户编号',
  `name` varchar(10) NOT NULL COMMENT '收货人姓名',
  `telphone` int(11) NOT NULL COMMENT '联系电话',
  `addrinfo` varchar(200) NOT NULL COMMENT '收货地址',
  `isdefault` int(1) NOT NULL COMMENT '是否是默认地址，1：默认地址，2：非默认地址',
  PRIMARY KEY  (`addrid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='用户收货地址：ws_uaddr' AUTO_INCREMENT=1 ;

--
-- 导出表中的数据 `ws_uaddr`
--


-- --------------------------------------------------------

--
-- 表的结构 `ws_user`
--

CREATE TABLE `ws_user` (
  `userid` int(10) NOT NULL auto_increment COMMENT '用户编号，主键自增',
  `username` varchar(25) NOT NULL COMMENT '登录名',
  `password` varchar(32) NOT NULL COMMENT '登录密码',
  `nickname` varchar(25) NOT NULL COMMENT '昵称',
  `isadmin` int(1) NOT NULL COMMENT '管理员或者是商家，1：管理员，2：商家，3：用户',
  `email` varchar(50) NOT NULL COMMENT '验证邮箱',
  `telphone` int(11) NOT NULL COMMENT '验证手机号码',
  `reg_time` int(15) NOT NULL COMMENT '注册时间',
  `last_time` int(15) NOT NULL COMMENT '上一次登录时间，unix时间格式',
  `last_ip` varchar(15) NOT NULL COMMENT '上次登录ip',
  `weixinid` varchar(100) NOT NULL COMMENT '微信唯一标识',
  `status` int(1) NOT NULL COMMENT '登录状态，1：正常，2：冻结',
  PRIMARY KEY  (`userid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='用户表：ws_user' AUTO_INCREMENT=2 ;

--
-- 导出表中的数据 `ws_user`
--

INSERT INTO `ws_user` (`userid`, `username`, `password`, `nickname`, `isadmin`, `email`, `telphone`, `reg_time`, `last_time`, `last_ip`, `weixinid`, `status`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '夏贺强', 1, 'admin@email.com', 2147483647, 0, 0, '', '', 1);

-- --------------------------------------------------------

--
-- 表的结构 `ws_wechat`
--

CREATE TABLE `ws_wechat` (
  `wechatid` int(5) NOT NULL auto_increment COMMENT '微信规则编号，主键自增',
  `event` int(1) NOT NULL COMMENT '事件类型，1：关注，2：取消关注',
  `type` int(1) NOT NULL COMMENT '推送事件类型，1：文本，2：图文',
  `keywords` varchar(100) NOT NULL COMMENT '关键字（回复时用，关键字之间用逗号隔开）',
  `title` varchar(50) NOT NULL COMMENT '图文消息标题',
  `from` varchar(30) NOT NULL COMMENT '来源',
  `img` varchar(200) NOT NULL COMMENT '图文消息图片',
  `add_time` int(15) NOT NULL COMMENT '添加时间',
  `content` text NOT NULL COMMENT '回复内容',
  `clicks` int(10) NOT NULL COMMENT '阅读量',
  `likes` int(10) NOT NULL COMMENT '赞',
  PRIMARY KEY  (`wechatid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='微信回复规则定义表：ws_wechat' AUTO_INCREMENT=1 ;

--
-- 导出表中的数据 `ws_wechat`
--

