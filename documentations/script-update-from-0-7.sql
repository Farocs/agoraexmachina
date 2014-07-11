
      /*
      * Script created by Quest Schema Compare at 11/07/2014 14:22:56.
      * Please back up your database before running this script.
      *
      * Synchronizing objects from agoraexmachina to aem.
      */

/* Header line. Object: delegations. Script date: 11/07/2014 14:22:56. */
CREATE TABLE `delegations` (
	`id` int(11) NOT NULL auto_increment,
	`users1` int(11) default NULL,
	`users2` int(11) default NULL,
	`categories` int(11) default NULL,
	`instances` int(11) default NULL,
	KEY `id` ( `id` ),
	PRIMARY KEY  ( `id` )
)
ENGINE = MyISAM
CHARACTER SET = latin1
AUTO_INCREMENT = 1
ROW_FORMAT = Fixed
;


