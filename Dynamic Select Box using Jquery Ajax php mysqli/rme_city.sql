CREATE TABLE
    `rme_city` (
        `idarea` int (11) NOT NULL,
        `city` varchar(255) NOT NULL,
        `contryid` varchar(200) NOT NULL DEFAULT ''
    ) ENGINE = MyISAM DEFAULT CHARSET = latin1;

INSERT INTO
    `rme_city` (`idarea`, `city`, `contryid`)
VALUES
    (1, 'Oakland', '4'),
    (2, 'San Diego', '4'),
    (21, 'Birmingham', '1'),
    (22, 'Montgomery', '1');

ALTER TABLE `rme_city` MODIFY `idarea` int (11) NOT NULL AUTO_INCREMENT,
AUTO_INCREMENT = 23;