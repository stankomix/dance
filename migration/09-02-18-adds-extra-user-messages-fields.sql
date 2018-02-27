ALTER TABLE `userMessages`  ADD `updated_by` INT(11) NOT NULL  AFTER `created_at`,  ADD `updated_at` TIMESTAMP on update CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP  AFTER `updated_by`,  ADD `status` TINYINT(2) NOT NULL  AFTER `updated_at`;
ALTER TABLE `userMessages` CHANGE `created_at` `created_at` TIMESTAMP NULL DEFAULT NULL;
ALTER TABLE `userMessages` CHANGE `status` `status` TINYINT(2) NOT NULL DEFAULT '1';
