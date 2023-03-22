CREATE TABLE
    IF NOT EXISTS `countries` (
        `id` int (6) NOT NULL AUTO_INCREMENT,
        `country` varchar(250) NOT NULL DEFAULT '',
        PRIMARY KEY (`id`)
    ) ENGINE = MyISAM DEFAULT CHARSET = latin1 AUTO_INCREMENT = 243;