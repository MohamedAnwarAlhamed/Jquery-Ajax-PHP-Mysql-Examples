Bootstrap 5
https://getbootstrap.com/docs/5.0/getting-started/introduction/
https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css

Jquery
https://jquery.com/download/
CDN : jsDelivr CDN
https://www.jsdelivr.com/package/npm/jquery
https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js

CREATE TABLE `country` (
  `id` int(6) NOT NULL,
  `country` varchar(250) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `country` (`id`, `country`) VALUES
(1, 'Afghanistan'),
(2, 'Aringland Islands'),
(3, 'Albania'),
(4, 'Algeria'),
(5, 'American Samoa'),
(6, 'Andorra'),
(7, 'Angola'),
(8, 'Anguilla'),
(9, 'Antarctica'),
(10, 'Antigua and Barbuda'),
(11, 'Argentina'),
(12, 'Armenia'),
(13, 'Aruba'),
(14, 'Australia'),
(15, 'Austria'),
(16, 'Azerbaijan'),
(17, 'Bahamas'),
(18, 'Bahrain'),
(19, 'Bangladesh'),
(20, 'Barbados');

ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);
  
ALTER TABLE `country`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;