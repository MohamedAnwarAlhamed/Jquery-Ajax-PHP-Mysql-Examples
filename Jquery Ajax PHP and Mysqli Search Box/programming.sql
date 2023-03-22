//tablebase table tblprogramming
CREATE TABLE `tblprogramming` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
 
--
-- Dumping data for table `tblprogramming`
--
 
INSERT INTO `tblprogramming` (`id`, `title`, `category`) VALUES
(1, 'HTML', 'Web Development'),
(2, 'PHP', 'Web Development'),
(3, 'C#', 'Programming Language'),
(4, 'JavaScript', 'Web Development'),
(5, 'Bootstrap', 'Web Design'),
(6, 'Python', 'Programming Language'),
(7, 'Android', 'App Development'),
(8, 'Angular JS', 'Web Delopment'),
(9, 'Java', 'Programming Language'),
(10, 'Python Django', 'Web Development'),
(11, 'Codeigniter', 'Web Development'),
(12, 'Laravel', 'Web Development'),
(13, 'Wordpress', 'Web Development');