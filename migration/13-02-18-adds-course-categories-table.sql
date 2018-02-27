CREATE TABLE `coursecategories` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
ALTER TABLE `coursecategories`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `coursecategories`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
ALTER TABLE `course`  ADD `categoryid` INT(11) NOT NULL DEFAULT '0'  AFTER `type`;
