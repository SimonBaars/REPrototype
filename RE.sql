-- ------------------------------------------------------------------
--
-- DATABASE: `RE`
--


DROP DATABASE IF EXISTS `RE`;
CREATE DATABASE IF NOT EXISTS `RE` CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `RE`;


--
-- TABLE: `Prototype`
--
DROP TABLE IF EXISTS `Prototype`;
CREATE TABLE `Prototype` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `confirmPassword` varchar(255) DEFAULT NULL,
  `activityLike` text,
  `activityDislike` text,
  `eatLike` text,
  `eatDislike` text,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `ratingNum` int(11) DEFAULT NULL,
  `ratingText` text,
  `ratingMusic` text,
  `totalTime` varchar(16) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
--
-- TABLE DATA: `Prototype`
--

-- ------------------------------------------------------------------
