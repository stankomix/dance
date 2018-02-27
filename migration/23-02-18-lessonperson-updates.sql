ALTER TABLE `lessonperson` CHANGE `waiting_since` `waiting_since` TIMESTAMP NULL DEFAULT NULL;
ALTER TABLE `lessonperson`  ADD `trial` TINYINT(2) NULL DEFAULT '0'  AFTER `waiting_since`;
