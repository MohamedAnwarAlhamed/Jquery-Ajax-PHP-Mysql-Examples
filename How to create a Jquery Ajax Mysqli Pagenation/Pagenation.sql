Create Database table
CREATE TABLE
    IF NOT EXISTS `paginate` (
        `id` int (11) NOT NULL AUTO_INCREMENT,
        `name` varchar(60) NOT NULL,
        `message` text NOT NULL,
        PRIMARY KEY (`id`)
    ) ENGINE = InnoDB DEFAULT CHARSET = latin1 AUTO_INCREMENT = 51;