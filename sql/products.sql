CREATE TABLE `products` (
  `id` int(12) NOT NULL auto_increment,
  `name` varchar(32) NOT NULL,
  `description` text NOT NULL,
  `price` int(12) NOT NULL,
  `category_id` int(12) NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14;


INSERT INTO `products` VALUES(1, 'Hat', 'Blue hat', 5, 6, '2014-06-01 01:12:26', '2014-05-31 10:12:21');
INSERT INTO `products` VALUES(2, 'Gloves', 'nice', 399, 1, '2014-06-01 01:13:45', '2014-05-31 10:13:39');
INSERT INTO `products` VALUES(3, 'Sunglasses', 'Cool Sunglasses', 1, 8, '2014-06-01 01:14:13', '2014-05-31 10:14:08');