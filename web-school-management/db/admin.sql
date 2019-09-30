-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2019 at 02:14 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `school_management`
--

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `email`, `password`, `phone`, `address`, `owner_status`, `username`, `status`, `birthday`, `last_os`, `last_ip`, `last_date`, `last_device`, `authentication_key`, `messages`, `notify`, `information`, `marks`, `academic`, `attendance`, `schedules`, `news`, `library`, `be`, `acc`, `class`, `school`, `polls`, `settings`, `academic_se`, `files`, `users`, `fb_token`, `fb_id`, `fb_photo`, `fb_name`, `g_oauth`, `g_fname`, `femail`, `g_lname`, `g_picture`, `link`, `g_email`, `reports`) VALUES
(1, 'Mr. Admin', 'demo@eduappgt.com', '81dc9bdb52d04dc20036dbd8313ed055', '45785478', 'Quetzaltenango, Guatemala.', 1, 'admin', 1, '07/13/2017', NULL, NULL, NULL, NULL, 'db4f2d16568924de73aee89c998a7a76', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', '', '', '', '', '', '', '', '', '', '', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
