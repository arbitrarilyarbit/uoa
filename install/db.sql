DROP TABLE IF EXISTS `y3k_uoa`.`uoa_ci_sessions`;
CREATE TABLE IF NOT EXISTS `y3k_uoa`.`uoa_ci_sessions`
(
`session_id` varchar(40) DEFAULT '0' NOT NULL,
`ip_address` varchar(16) DEFAULT '0' NOT NULL,
`user_agent` varchar(120) NOT NULL,
`last_activity` int(10) unsigned DEFAULT 0 NOT NULL,
`user_data` text NULL,
PRIMARY KEY (`session_id`),
KEY `last_activity_idx` (`last_activity`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;


DROP TABLE IF EXISTS `y3k_uoa`.`uoa_groups`;
CREATE TABLE IF NOT EXISTS `y3k_uoa`.`uoa_groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
INSERT INTO `y3k_uoa`.`uoa_groups` (`id`, `name`, `description`) VALUES
	(1,'admin','Administrator'),
	(2,'staff','Staff'),
	(3,'applicant','Applicants');


DROP TABLE IF EXISTS `y3k_uoa`.`uoa_meta`;
CREATE TABLE IF NOT EXISTS `y3k_uoa`.`uoa_meta` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
INSERT INTO `y3k_uoa`.`uoa_meta` (`id`, `user_id`, `first_name`, `last_name`, `company`, `phone`) VALUES
	('1','1','Admin','Univ','UoA','0');

DROP TABLE IF EXISTS `y3k_uoa`.`uoa_users`;
CREATE TABLE IF NOT EXISTS `y3k_uoa`.`uoa_users` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `group_id` mediumint(8) unsigned NOT NULL,
  `ip_address` char(16) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(40) NOT NULL,
  `salt` varchar(40) DEFAULT NULL,
  `email` varchar(254) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
INSERT INTO `y3k_uoa`.`uoa_users` (`id`, `group_id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `created_on`, `last_login`, `active`) VALUES
	('1','1','127.0.0.1','administrator','59beecdf7fc966e2f17fd8f65a4a9aeb09d4a3d4','9462e8eee0','admin@uoa.com','',NULL,'1268889823','1268889823','1');