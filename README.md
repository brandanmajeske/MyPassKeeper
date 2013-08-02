MyPassKeeper
============

MyPassKeeper - a simple, secure PHP-driven password keeper

Problem(s): 
Too many personal passwords to remember; Writing them down on paper is insecure, can get disorganized and difficult to track; Storing in Excel spreadsheet is slow and can also be insecure; Excel takes time to initialize the app and load spreadsheet, this gets frustrating if you're in a hurry. 

Solution: 
MyPassKeeper can encrypt and store passwords in personal database record. The user profiles are password protected, with password being hashed/salted so there is no way to decrypt it. The WebApp is faster than excel and uses less system resources. Passwords are not stored in plain text; they are encrypted going into database and decrypted coming out of database, so only the user knows for sure what their passwords are. Storing passwords in a database makes it easy to keep them organized and editable when needed. 

============================================================

Database

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mpkdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `passwords`
--

CREATE TABLE IF NOT EXISTS `passwords` (
  `username` varchar(255) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `application` varchar(255) DEFAULT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=77 ;


--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(10) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;


--
-- Table structure for table `user_profiles`
--

CREATE TABLE IF NOT EXISTS `user_profiles` (
  `username` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `user_bio` text,
  `join_date` tinytext,
  `user_image` tinytext,
  KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Constraints for table `user_profiles`
--
ALTER TABLE `user_profiles`
  ADD CONSTRAINT `user_profiles_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
