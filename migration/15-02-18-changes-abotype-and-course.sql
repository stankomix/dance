ALTER TABLE `abotype` CHANGE `course_based` `based_on` TINYINT(2) NOT NULL DEFAULT '1' COMMENT '1-courses;2-lessons';
UPDATE `abotype` set based_on=2 WHERE based_on=0;
ALTER TABLE `course` CHANGE `based_on` `based_on` TINYINT(2) NOT NULL DEFAULT '1' COMMENT '1-courses;2-lessons';
