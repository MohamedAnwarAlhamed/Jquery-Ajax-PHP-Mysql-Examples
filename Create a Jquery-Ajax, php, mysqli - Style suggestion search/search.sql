CREATE TABLE IF NOT EXISTS `searchs` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`name` varchar(255) NOT NULL,
`img` varchar(255) NOT NULL,
`desc` text NOT NULL,
`url` text NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;