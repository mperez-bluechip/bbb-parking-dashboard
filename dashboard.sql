

--
-- Table structure for table `photographs`
--

DROP TABLE IF EXISTS `photographs`;
CREATE TABLE `photographs` (
  `id` int(11) NOT NULL auto_increment,
  `filename` varchar(255) NOT NULL,
  `type` varchar(100) NOT NULL,
  `size` int(11) NOT NULL,
  `caption` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) AUTO_INCREMENT=9;

--
-- Dumping data for table `photographs`
--
INSERT INTO `photographs` VALUES (1,'spot1.jpg','image/jpeg',265437,'spot1'),(5,'spot2.jpg','image/jpeg',394552,'spot2'),(4,'spot3.jpg','image/jpeg',322870,'spot3'),(6,'spot4.jpg','image/jpeg',261152,'spot4')/jpeg',353050,'spot4');

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  PRIMARY KEY  (`id`)
) AUTO_INCREMENT=4;

--
-- Dumping data for table `users`
--
INSERT INTO `users` VALUES (1,'mperez','pwthis','Manny','Perez');
