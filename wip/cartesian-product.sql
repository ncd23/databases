CREATE TABLE IF NOT EXISTS `Letters` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Letter` char(1) NOT NULL,
  PRIMARY KEY (`ID`)
);

CREATE TABLE IF NOT EXISTS `Numbers` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Number` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
);

INSERT INTO `Letters` (`Letter`) VALUES ('a'), ('b'), ('c');
INSERT INTO `Numbers` (`Number`) VALUES (1), (2), (3);

/*
mysql> SELECT Letter, Number FROM Letters, Numbers;
+--------+--------+
| Letter | Number |
+--------+--------+
| a      |      1 |
| b      |      1 |
| c      |      1 |
| a      |      2 |
| b      |      2 |
| c      |      2 |
| a      |      3 |
| b      |      3 |
| c      |      3 |
+--------+--------+
9 rows in set (0.00 sec)
 */
