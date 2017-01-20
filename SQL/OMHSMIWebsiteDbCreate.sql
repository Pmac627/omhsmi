CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Comment ID number',
  `first_name` varchar(20) NOT NULL COMMENT 'First Name',
  `last_name` varchar(20) NOT NULL COMMENT 'Last Name',
  `email` varchar(50) NOT NULL COMMENT 'Email Address',
  `phone` varchar(12) NOT NULL COMMENT 'Phone Number',
  `address` varchar(50) NOT NULL COMMENT 'Physical Address',
  `city` varchar(20) NOT NULL COMMENT 'City',
  `state` varchar(2) NOT NULL COMMENT 'State Abbr.',
  `zip` varchar(5) NOT NULL COMMENT 'Zip Code',
  `comment` varchar(500) NOT NULL COMMENT 'Comments',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;