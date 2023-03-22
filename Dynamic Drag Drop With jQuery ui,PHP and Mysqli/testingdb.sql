create database testingdb
use testingdb

CREATE TABLE IF NOT EXISTS `dragdrop` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`text` varchar(255) DEFAULT NULL,
`listorder` int(11) DEFAULT NULL,
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

INSERT INTO `dragdrop` (`id`, `text`, `listorder`) VALUES
(1, 'Ajax', 4),
(2, 'Jquery', 2),
(3, 'PHP', 3),
(4, 'Mysql', 1),
(5, 'Javascript', 7),
(6, 'CSS', 6),
(7, 'HTML', 5);

select * from dragdrop
