-- Adminer 4.6.2 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

USE `ci4ama`;

SET NAMES utf8mb4;

CREATE TABLE `edit_history` (
  `edit_id` int(11) NOT NULL AUTO_INCREMENT,
  `reg_num` bigint(20) NOT NULL,
  `edited_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `edited_details` blob NOT NULL,
  PRIMARY KEY (`edit_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reg_num` bigint(20) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `aadhaar` bigint(20) DEFAULT NULL,
  `mother` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `occupation` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `income` bigint(20) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE `students_reg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reg_num` bigint(20) NOT NULL,
  `student_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aadhaar` bigint(20) DEFAULT NULL,
  `blood_group` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `religion` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationality` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_img` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_person` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cp_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cp_rel` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_occup` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_qual` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_mob` bigint(20) NOT NULL,
  `father_occup` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_qual` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_mob` bigint(20) NOT NULL,
  `income` bigint(20) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE `tmp_students_reg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token_num` bigint(20) DEFAULT NULL,
  `student_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `mobile` bigint(20) DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aadhaar` bigint(20) DEFAULT NULL,
  `blood_group` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `religion` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nationality` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_img` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address1` text COLLATE utf8mb4_unicode_ci,
  `address2` text COLLATE utf8mb4_unicode_ci,
  `contact_person` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cp_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cp_rel` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_occup` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_qual` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_mob` bigint(20) DEFAULT NULL,
  `father_occup` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_qual` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_mob` bigint(20) DEFAULT NULL,
  `income` bigint(20) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `step` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


-- 2021-02-15 23:28:54