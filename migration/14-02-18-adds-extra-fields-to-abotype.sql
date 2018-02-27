ALTER TABLE `abotype`  ADD `promodescription` VARCHAR(10240) NOT NULL  AFTER `Description`,  ADD `filename` VARCHAR(64) NOT NULL  AFTER `promodescription`;
