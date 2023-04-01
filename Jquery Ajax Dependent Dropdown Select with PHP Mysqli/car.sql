Bootstrap 5
https://getbootstrap.com/docs/5.0/getting-started/introduction/
https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css

Jquery
https://jquery.com/download/
CDN : jsDelivr CDN
https://www.jsdelivr.com/package/npm/jquery
https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js

Database Table

CREATE TABLE `carbrands` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `carbrands` (`brand_id`, `brand_name`) VALUES
(1, 'Toyota'),
(2, 'Honda'),
(3, 'Suzuki'),
(4, 'Mitsubishi'),
(5, 'Hyundai');

ALTER TABLE `carbrands`
  ADD PRIMARY KEY (`brand_id`);

ALTER TABLE `carbrands`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
  
CREATE TABLE `carmodels` (
  `model_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `car_models` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `carmodels` (`model_id`, `brand_id`, `car_models`) VALUES
(1, 1, 'Toyota Corolla'),
(2, 2, 'Toyota Camry'),
(3, 1, 'Toyota Yaris'),
(4, 1, 'Toyota Sienna'),
(5, 1, 'Toyota RAV4'),
(6, 1, 'Toyota Highlander'),
(7, 2, 'Honda HR-V'),
(8, 2, 'Honda Odyssey'),
(9, 3, 'Swift'),
(10, 3, 'Celerio'),
(11, 3, 'Ertiga'),
(12, 3, 'Vitara'),
(13, 4, 'Mirage'),
(14, 4, 'Mirage G4'),
(15, 4, 'Xpander Cross'),
(16, 4, 'Montero Sport'),
(17, 4, 'Strada Athlete'),
(18, 5, 'Reina '),
(19, 5, 'Accent'),
(20, 5, 'Elantra'),
(21, 5, 'Tucson');

ALTER TABLE `carmodels`
  ADD PRIMARY KEY (`model_id`),
  ADD KEY `industry_id` (`brand_id`);

ALTER TABLE `carmodels`
  MODIFY `model_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;