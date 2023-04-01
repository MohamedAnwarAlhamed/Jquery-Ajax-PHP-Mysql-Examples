Bootstrap 5
https://getbootstrap.com/docs/5.0/getting-started/introduction/
https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css

Jquery
https://jquery.com/download/
CDN : jsDelivr CDN
https://www.jsdelivr.com/package/npm/jquery
https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js

Database Table

CREATE TABLE `multiplerow_members` (
  `id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `multiplerow_members` (`id`, `firstname`, `lastname`) VALUES
(1, 'Airi ', 'Sato'),
(2, 'Bourto', 'Usumaki');

ALTER TABLE `multiplerow_members`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `multiplerow_members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;