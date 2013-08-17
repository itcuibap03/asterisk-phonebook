SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE IF NOT EXISTS `cidresolve` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `num` varchar(14) COLLATE utf8_unicode_ci NOT NULL,
  `cid` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

