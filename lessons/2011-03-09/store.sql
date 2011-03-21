USE loffelmr;

DROP TABLE IF EXISTS store_boots;
DROP TABLE IF EXISTS store_boots_colors;
DROP TABLE IF EXISTS store_colors;
DROP TABLE IF EXISTS store_boots_sizes;
DROP TABLE IF EXISTS store_sizes;

/* BOOTS */
CREATE TABLE store_boots (
	id 			INT UNSIGNED NOT NULL AUTO_INCREMENT KEY,
	name 		VARCHAR(50),
	sku			INT,
	height		VARCHAR(15),
	lining		VARCHAR(15),
	colors		VARCHAR(255),
	price		DECIMAL(7,2), /* 7 digits, maximum of 2 digits past decimal point */
	features	VARCHAR(255)
);

CREATE TABLE store_boots_colors (
	id 			INT UNSIGNED NOT NULL AUTO_INCREMENT KEY,	
	boot_id		INT,
	color_id	INT
);

CREATE TABLE store_colors (
	id 		INT UNSIGNED NOT NULL AUTO_INCREMENT KEY,
	name 	VARCHAR(50),
	value	VARCHAR(2)
);

CREATE TABLE store_boots_sizes (
	id 			INT UNSIGNED NOT NULL AUTO_INCREMENT KEY,
	boot_id		INT,
	size_id		INT
);

CREATE TABLE store_sizes (
	id 		INT UNSIGNED NOT NULL AUTO_INCREMENT KEY,
	name 	VARCHAR(50),
	value	VARCHAR(10)
);

INSERT INTO store_boots (id,name,height,lining,price,features)
VALUES 
('7177382', 'Caterpillar Tradesman Work Boot','6 inches','Leather',87.00,'<abbr>Full-grain</abbr> <abbr>oil-tanned</abbr> leather. Nylon mesh lining. Ortholite sock liner. EVA midsole. T84V Rubberlon outsole.'),
('7269643', 'Caterpillar Logger Boot','8 inches','<abbr>Cambrelle</abbr>',157.00,'<abbr>Full-grain</abbr> leather. <abbr>Cambrelle</abbr>&reg; lining. Steel safety toe. Electrical hazard protection. Poliyou&reg; cushion insole. Rubber lug outsole.'),
('7141832', 'Chippewa 17" Engineer Boot','17 inches','Leather',187.00,'<abbr>Oil-tanned</abbr> or polishable <abbr>full-grain</abbr> leather uppers. <abbr>Vibram</abbr> sole. <abbr>Goodyear welt</abbr>. Padded insole. Steel safety toe.'),
('7141833', 'Chippewa 17" Snakeproof Boot','17 inches','Leather',147.00,'<abbr>Full-grain</abbr> leather foot. 1000 Denier <abbr>Cordura</abbr> Viper cloth shaft. <abbr>Goodyear welt</abbr>. Leather Lining. Body Cushion Insole. <abbr>Vibram</abbr> Robinson Outsole.'),
('7173656', 'Chippewa 11" Engineer Boot','11 inches','None',167.00,'<abbr>Oil-tanned</abbr> <abbr>full-grain</abbr> leather uppers. <abbr>Vibram</abbr> sole. <abbr>Goodyear welt</abbr>. Padded insole. Steel safety toe. Texon&reg; insole.'),
('7141922', 'Chippewa Harness Boot','13 inches','Leather',187.00,'<abbr>Full-grain</abbr> leather uppers. Leather lining. <abbr>Vibram</abbr> sole. <abbr>Goodyear welt</abbr>.'),
('7141730', 'Danner Foreman Pro Work Boot','10 inches','Leather',287.00,'Alkali-resistant <abbr>full-grain</abbr> leather. <abbr>Cambrelle</abbr> nylon lining. Fiberglass shank. <abbr>Vibram</abbr> 4014 Cristy sole. <abbr>Stitch-down</abbr> construction.'),
('7257914', 'Danner Grouse GTX Boot','8 inches','<abbr>Gore-Tex</abbr>',207.00,'<abbr>Full-grain</abbr> leather foot. 1000 Denier <abbr>Cordura</abbr> Viper cloth shaft. <abbr>Gore-Tex</abbr> lining. Stich-down construction.');

INSERT INTO store_colors (id,name,value)
VALUES
(1,'Black Oil-tanned','bk'),
(2,'Black Polishable','br'),
(3,'Black','bk'),
(4,'Crazy Horse','br'),
(5,'Honey','hy'),
(6,'Peanut','sd'),
(7,'Brown','rw'),
(8,'Russet','br'),
(9,'Brown','br');

INSERT INTO store_sizes (id, name, value)
VALUES
(1,'9d','9 D'),
(2,'9ee','9 EE'),
(3,'95d','9\u00BD D'),
(4,'95ee','9\u00BD EE'),
(5,'95eee','9\u00BD EEE'),
(6,'10ee','10 EE'),
(7,'10eee','10 EEE'),
(8,'13e','13 E');
/*
INSERT INTO store_boots_sizes (boot_id,size_id)
VALUES
(7141832,),
(7177382,),
(),
(),
(),
(),
(),
(),
(),
();
*/
INSERT INTO store_boots_colors (boot_id,color_id)
VALUES
(7177382,1),
(7177382,2),
(7173656,3),
(7173656,4),
(7141922,3),
(7141922,4),
(7177382,5),
(7177382,6),
(7141730,7),
(7141730,5),
(7141833,8),
(7257914,9),
(7269643,3);