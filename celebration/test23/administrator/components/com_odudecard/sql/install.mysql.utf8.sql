CREATE TABLE IF NOT EXISTS `#__ecard_cate` (
	`cat` int(3) NOT NULL auto_increment,
	`subcat` int(3) NOT NULL default '0',
	`name` varchar(50) NOT NULL default '',
	`banner` varchar(50) NOT NULL default '',
	`bg` varchar(50) NOT NULL default '',
	`front` char(1) NOT NULL default '',
	PRIMARY KEY  (`cat`)
) ENGINE=MyISAM;


CREATE TABLE IF NOT EXISTS `#__ecard_media` (
	`id` int(10) NOT NULL auto_increment,
	`ddate` datetime NOT NULL default '0000-00-00 00:00:00',
	`title` varchar(100) NOT NULL default '',
	`type` char(1) NOT NULL default '',
	`file` varchar(50) NOT NULL default '',
	`thumb` varchar(50) NOT NULL default '',
	`desp` text NOT NULL,
	`effect` varchar(10) NOT NULL default '',
	`cat` int(3) NOT NULL default '0',
	`point` int(10) NOT NULL default '0',
        `username` varchar(150) NOT NULL default '',
	`ordering` tinyint(1) NOT NULL,
        `published` tinyint(1) NOT NULL,
        `hits` int(10) NOT NULL default '0',
	PRIMARY KEY  (`id`)
) ENGINE=MyISAM;

 CREATE TABLE IF NOT EXISTS `#__ecard_setting` (
		`id` int(3) NOT NULL AUTO_INCREMENT,
  `a1` varchar(7) NOT NULL DEFAULT '',
  `a2` varchar(7) NOT NULL DEFAULT '',
  `a3` varchar(7) NOT NULL DEFAULT '',
  `a4` varchar(7) NOT NULL DEFAULT '',
  `card_row` int(2) NOT NULL DEFAULT '0',
  `card_page` int(2) NOT NULL DEFAULT '0',
  `from_email` varchar(50) NOT NULL DEFAULT '',
  `from_name` varchar(50) NOT NULL DEFAULT '',
  `subject_suffix` varchar(50) NOT NULL DEFAULT '',
  `fbappid` varchar(50) NOT NULL,
  `fbapikey` varchar(50) NOT NULL,
  `fbapisecret` text NOT NULL,
  `canvas_page` text NOT NULL,
  `canvas_cancel_page` text NOT NULL,
  `point` tinyint(4) NOT NULL,
  `member_restrict` tinyint(4) NOT NULL,
  `expire` int(3) NOT NULL,
  `captcha` tinyint(4) NOT NULL,
  `watermark` tinyint(4) NOT NULL,
  `share` tinyint(4) NOT NULL,
  `import` tinyint(4) NOT NULL,
  `add_rec` tinyint(4) NOT NULL,
	PRIMARY KEY  (`id`)
	) ENGINE=MyISAM;

CREATE TABLE IF NOT EXISTS `#__ecard_view` (
	`id` int(15) NOT NULL,
	`SN` varchar(50) NOT NULL default '',
	`SE` varchar(50) NOT NULL default '',
	`RN` varchar(50) NOT NULL default '',
	`RE` varchar(50) NOT NULL default '',
	`clock` date NOT NULL default '0000-00-00',
	`sub` varchar(50) NOT NULL default '',
	`body` text NOT NULL,
	`notify` char(1) NOT NULL default '',
	`status` char(1) NOT NULL default '',
	`card` int(10) NOT NULL,
	PRIMARY KEY  (`id`)
	) ENGINE=MyISAM;


 INSERT INTO `#__ecard_setting` (`id`, `a1`, `a2`, `a3`, `a4`, `card_row`, `card_page`, `from_email`, `from_name`, `subject_suffix`, `fbappid`, `fbapikey`, `fbapisecret`, `canvas_page`, `canvas_cancel_page`, `point`, `member_restrict`, `expire`, `captcha`, `watermark`, `share`, `import`, `add_rec`) VALUES
(1, 'a1', '#DDEEFF', 'a2', 'a4', 4, 10, 'info@companyname.com', 'Company Name', 'Greetings', '', '', '', 'http://apps.facebook.com/maxecard/', '', 0, 0, 90, 1, 0, 1, 1, 1);


INSERT INTO `#__ecard_cate` ( `cat`, `subcat` , `name` , `banner` , `bg` , `front`)
VALUES (1,0, 'Birthday', 'birthday_banner.jpg', 'birthday_bg.gif', 'Y');

INSERT INTO `#__ecard_media` ( `id`, `ddate` , `title`,`type` , `file` , `thumb`, `desp`, `effect`, `cat`,`username`,`published`)
VALUES (1,now(), 'Happy Birthday', 'J', 'birthday.jpg', 'birthday_ss.jpg', '', 'N', 1,'admin',1);

