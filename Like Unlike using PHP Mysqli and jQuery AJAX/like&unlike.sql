CREATE TABLE
    `posts` (
        `id` int (11) NOT NULL,
        `title` varchar(100) NOT NULL,
        `content` text NOT NULL,
        `link` varchar(255) NOT NULL,
        `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    ) ENGINE = InnoDB DEFAULT CHARSET = latin1;

INSERT INTO
    `posts` (`id`, `title`, `content`, `link`, `timestamp`)
VALUES
    (
        4,
        'What is AngularJS',
        'AngularJS is a JavaScript MVC framework  developed by Google that lets you build well structured, easily testable,  declarative and maintainable front-end applications which provides solutions to  standard infrastructure concerns.',
        'link-5',
        '2021-03-20 16:00:00'
    ),
    (
        5,
        'What is MongoDB',
        'It is a quick tutorial on MongoDB and how you can install it on your Windows OS. We will also learn some basic commands in MongoDB for example, creating and dropping a Database, Creation of a collection and some more operations related to the collection.',
        'link-6',
        '2021-03-21 16:00:00'
    ),
    (
        6,
        'Python Flask Load content Dynamically in Bootstrap Modal with Jquery AJAX and Mysqldb',
        'Python Flask Load content Dynamically in Bootstrap Modal with Jquery AJAX and Mysqldb',
        'link-6',
        '2021-03-20 16:00:00'
    ),
    (
        7,
        'AutoComplete Textbox with Image using jQuery Ajax PHP Mysql and JqueryUI',
        'AutoComplete Textbox with Image using jQuery Ajax PHP Mysql and JqueryUI',
        'link-7',
        '2021-03-14 16:00:00'
    ),
    (
        8,
        'PHP Mysql Registration Form Validation using jqBootstrapValidation with Jquery Ajax',
        'PHP Mysql Registration Form Validation using jqBootstrapValidation with Jquery Ajax',
        'link-8',
        '2021-03-20 16:00:00'
    ),
    (
        9,
        'Python Flask Registration Form Validation using jqBootstrapValidation with Jquery Ajax and Mysql',
        'Python Flask Registration Form Validation using jqBootstrapValidation with Jquery Ajax and Mysql',
        'link-9',
        '2021-03-19 16:00:00'
    ),
    (
        10,
        'Displaying Popups data on mouse hover using Jquery Ajax and PHP Mysql database',
        'Displaying Popups data on mouse hover using Jquery Ajax and PHP Mysql database',
        'link-10',
        '2021-03-15 16:00:00'
    ),
    (
        11,
        'Displaying Popups data on mouse hover using Jquery Ajax and Python Flask Mysql database',
        'Displaying Popups data on mouse hover using Jquery Ajax and Python Flask Mysql database',
        'link-11',
        '2021-03-14 16:00:00'
    );

ALTER TABLE `posts` ADD PRIMARY KEY (`id`);

ALTER TABLE `posts` MODIFY `id` int (11) NOT NULL AUTO_INCREMENT,
AUTO_INCREMENT = 12;

CREATE TABLE
    `like_unlike` (
        `id` int (11) NOT NULL,
        `userid` int (11) NOT NULL,
        `postid` int (11) NOT NULL,
        `type` int (2) NOT NULL,
        `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    ) ENGINE = InnoDB DEFAULT CHARSET = latin1;

ALTER TABLE `like_unlike` ADD PRIMARY KEY (`id`);

ALTER TABLE `like_unlike` MODIFY `id` int (11) NOT NULL AUTO_INCREMENT,
AUTO_INCREMENT = 1;