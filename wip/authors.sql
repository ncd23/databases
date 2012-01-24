CREATE TABLE IF NOT EXISTS `Authors` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `first_name` VARCHAR(25),
  `last_name` VARCHAR(60),
  PRIMARY KEY (`id`)
) CHARACTER SET utf8;

CREATE TABLE IF NOT EXISTS `Books` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(75),
  PRIMARY KEY (`id`)
) CHARACTER SET utf8;

CREATE TABLE IF NOT EXISTS `AuthorsBooks` (
  `author_id` INT(11),
  `book_id` INT(11)
) CHARACTER SET utf8;

INSERT INTO `Authors` (`id`, `first_name`, `last_name`) VALUES
(1, 'Charles', 'Bukowski'),
(2, 'Confucius', NULL),
(3, 'Jean-Paul','Sartre');

INSERT INTO `Books` (`id`, `title`) VALUES
(1, 'Ham on Rye'),
(2, 'Post Office'),
(3, 'Analects of Confucius'),
(4, 'No Exit'),
(5, 'Being and Nothingness');

INSERT INTO `AuthorsBooks` (`author_id`, `book_id`) VALUES
(1,1),
(1,2),
(2,3),
(3,4),
(3,5);

