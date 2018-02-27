ALTER TABLE `courseperson` CHANGE `waiting_since` `waiting_since` TIMESTAMP NULL DEFAULT NULL;
ALTER TABLE `courseperson`  ADD `trial` TINYINT(2) NOT NULL DEFAULT '0'  AFTER `waiting_since`;
ALTER TABLE `Kursteilnahme`  ADD `trial` TINYINT NOT NULL DEFAULT '0'  AFTER `breakable`;
ALTER TABLE `Kursteilnahme` CHANGE `trial` `trial` TINYINT(2) NOT NULL DEFAULT '0';
