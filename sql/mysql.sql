CREATE TABLE `ntpc_openid_random_pass` (
  `uname` varchar(100) NOT NULL default '',
  `random_pass` varchar(255) NOT NULL default '',
  PRIMARY KEY (`uname`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `ntpc_openid_login_rules` (
  `sn` int unsigned NOT NULL AUTO_INCREMENT,
  `rule` text NOT NULL,
  `sort` int NOT NULL default 999,
  `enable` tinyint(1) NOT NULL default 1,
  PRIMARY KEY (`sn`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `ntpc_openid_group_rules` (
  `sn` int unsigned NOT NULL AUTO_INCREMENT,
  `rule` text NOT NULL,
  `gid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `enable` tinyint(1) NOT NULL default 1,
  PRIMARY KEY (`sn`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `ntpc_openid_officer_list` (
  `sn` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `enable` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`sn`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `ntpc_openid_custom_officer` (
  `sn` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `openid` varchar(255) NOT NULL,
  `enable` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`sn`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
