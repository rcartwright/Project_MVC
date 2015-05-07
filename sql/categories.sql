CREATE TABLE `categories` (
  `id` int(12) NOT NULL auto_increment,
  `name` varchar(256) NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4;


INSERT INTO `categories` VALUES(1, 'fun', '2014-06-01 00:35:07', '2014-05-31 09:34:33');
INSERT INTO `categories` VALUES(2, 'cool', '2014-06-01 00:35:07', '2014-05-31 09:34:33');
INSERT INTO `categories` VALUES(3, 'nice', '2014-06-01 00:35:07', '2014-05-31 09:34:54');