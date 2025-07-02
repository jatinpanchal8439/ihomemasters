-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2025 at 08:19 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ihome`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `story_detail` text NOT NULL,
  `story_image` text NOT NULL,
  `mission_detail` text NOT NULL,
  `mission_image` text NOT NULL,
  `best_thought` text NOT NULL,
  `thought_by` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `story_detail`, `story_image`, `mission_detail`, `mission_image`, `best_thought`, `thought_by`) VALUES
(1, '\"Ecommerce\" or \"electronic commerce\" is the trading of goods and services on the internet. It is your bustling city center or brick-and-mortar shop translated into zeroes and ones on the internet superhighway. An estimated 2.14 billion people worldwide buy goods and services online, and the number of Prime members shopping Amazon stores globally now tops 200 million.\r\n\r\nEcommerce is one way people buy and sell things in retail. Some companies sell products online only, while other sellers use ecommerce as a part of a broader strategy that includes physical stores and other distribution channels. Either way, ecommerce allows startups, small businesses, and large companies to sell products at scale and reach customers across the world.', 'about-01.jpg', 'An eCommerce company is an online business that specializes in selling goods or services over the internet. It is a type of digital commerce that involves the exchange of goods and services between customers and businesses through the use of the internet. eCommerce companies provide a convenient platform for customers to purchase products or services from the comfort of their homes. The activities of eCommerce companies typically include product listing, shopping cart software, payment processing, and customer support. By using the latest technology, eCommerce companies are able to provide customers with a secure and efficient way to purchase items online. These companies may also offer other features such as product reviews, order tracking, promotional sales, and more.', 'about-02.jpg', 'Let us strive for the impossible. The great achievements throughout history have been the conquest of what seemed the impossible.', 'Charlie Chaplin');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `short_detail` text NOT NULL,
  `full_detail` text NOT NULL,
  `tag` text NOT NULL,
  `image` text NOT NULL,
  `day` text NOT NULL,
  `month` text NOT NULL,
  `year` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `short_detail`, `full_detail`, `tag`, `image`, `day`, `month`, `year`) VALUES
(1, 'Dresses in the Winter', 'dolor sit amet, consectetur adipiscing elit. Nunc sit amet est vel orci luctus sollicitudin. Duis eleifend vestibulum justo, varius semper lacus condimentum dictum. Donec pulvinar a magna ut malesuada. In posuere felis diam, vel sodales m', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet est vel orci luctus sollicitudin. Duis eleifend vestibulum justo, varius semper lacus condimentum dictum. Donec pulvinar a magna ut malesuada. In posuere felis diam, vel sodales metus accumsan in. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet est vel orci luctus sollicitudin. Duis eleifend vestibulum justo, varius semper lacus condimentum dictum. Donec pulvinar a magna ut malesuada. In posuere felis diam, vel sodales metus accumsan in. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet est vel orci luctus sollicitudin. Duis eleifend vestibulum justo, varius semper lacus condimentum dictum. Donec pulvinar a magna ut malesuada. In posuere felis diam, vel sodales metus accumsan in. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet est vel orci luctus sollicitudin. Duis eleifend vestibulum justo, varius semper lacus condimentum dictum. Donec pulvinar a magna ut malesuada. In posuere felis diam, vel sodales metus accumsan in. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet est vel orci luctus sollicitudin. Duis eleifend vestibulum justo, varius semper lacus con', 'Best-seller, Fashion, Featured', '118653blog-01.jpg', '14', 'Sep', '2023'),
(2, '8 Inspiring Ways to Wear Dresses in the Winter', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet est vel orci luctus sollicitudin. Duis eleifend vestibulum justo, varius semper lacus condimentum dictum. Donec pulvinar a magna ut malesuada. In posuere felis diam, vel sodales m', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet est vel orci luctus sollicitudin. Duis eleifend vestibulum justo, varius semper lacus condimentum dictum. Donec pulvinar a magna ut malesuada. In posuere felis diam, vel sodales metus accumsan in. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet est vel orci luctus sollicitudin. Duis eleifend vestibulum justo, varius semper lacus condimentum dictum. Donec pulvinar a magna ut malesuada. In posuere felis diam, vel sodales metus accumsan in. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet est vel orci luctus sollicitudin. Duis eleifend vestibulum justo, varius semper lacus condimentum dictum. Donec pulvinar a magna ut malesuada. In posuere felis diam, vel sodales metus accumsan in. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet est vel orci luctus sollicitudin. Duis eleifend vestibulum justo, varius semper lacus condimentum dictum. Donec pulvinar a magna ut malesuada. In posuere felis diam, vel sodales metus accumsan in. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet est vel orci luctus sollicitudin. Duis eleifend vestibulum justo, varius semper lacus condimentum dictum. Donec pulvinar a magna ut malesuada. In posuere felis diam, vel sodales metus accumsan in. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet est vel orci luctus sollicitudin. Duis eleifend vestibulum justo, varius semper lacus condimentum dictum. Donec pulvinar a magna ut malesuada. In posuere felis diam, vel sodales metus accumsan in. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet est vel orci luctus sollicitudin. Duis eleifend vestibulum justo, varius semper lacus con', 'Best-seller, Featured', '424011blog-02.jpg', '14', 'Sep', '2023'),
(3, '8 Ways to Wear Dresses in the Winter', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet est vel orci luctus sollicitudin. Duis eleifend vestibulum justo, varius semper lacus condimentum dictum. Donec pulvinar a magna ut malesuada. In posuere felis diam, vel sodales m', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet est vel orci luctus sollicitudin. Duis eleifend vestibulum justo, varius semper lacus condimentum dictum. Donec pulvinar a magna ut malesuada. In posuere felis diam, vel sodales metus accumsan in. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet est vel orci luctus sollicitudin. Duis eleifend vestibulum justo, varius semper lacus condimentum dictum. Donec pulvinar a magna ut malesuada. In posuere felis diam, vel sodales metus accumsan in. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet est vel orci luctus sollicitudin. Duis eleifend vestibulum justo, varius semper lacus condimentum dictum. Donec pulvinar a magna ut malesuada. In posuere felis diam, vel sodales metus accumsan in. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet est vel orci luctus sollicitudin. Duis eleifend vestibulum justo, varius semper lacus condimentum dictum. Donec pulvinar a magna ut malesuada. In posuere felis diam, vel sodales metus accumsan in. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet est vel orci luctus sollicitudin. Duis eleifend vestibulum justo, varius semper lacus condimentum dictum. Donec pulvinar a magna ut malesuada. In posuere felis diam, vel sodales metus accumsan in. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet est vel orci luctus sollicitudin. Duis eleifend vestibulum justo, varius semper lacus condimentum dictum. Donec pulvinar a magna ut malesuada. In posuere felis diam, vel sodales metus accumsan in. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet est vel orci luctus sollicitudin. Duis eleifend vestibulum justo, varius semper lacus con', 'Best-seller, Featured', '420807blog-03.jpg', '14', 'Sep', '2023'),
(4, 'Inspiring Ways to Wear Dresses in the Winter', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet est vel orci luctus ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet est vel orci luctus sollic in. Duis eleifend vestibulum justo, varius semper lacus condimentum dictum. Donec pulvinar a magna ut malesuada. In posuere felis diam, vel sodales metus accumsan in. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet est vel orci luctus sollicitudin. Duis eleifend vestibulum justo, varius semper lacus condimentum dictum. Donec pulvinar a magna ut malesuada. In posuere felis diam, vel sodales metus accumsan in. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet est vel orci luctus sollicitudin. Duis eleifend vestibulum justo, varius semper lacus condimentum dictum. Donec pulvinar a magna ut malesuada. In posuere felis diam, vel sodales metus accumsan in. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet est vel orci luctus sollicitudin. Duis eleifend vestibulum justo, varius semper lacus condimentum dictum. Donec pulvinar a magna ut malesuada. In posuere felis diam, vel sodales metus accumsan in. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet est vel orci luctus sollicitudin. Duis eleifend vestibulum justo, varius semper lacus con', 'Best-seller, Featured', '541925gallery-02.jpg', '14', 'Sep', '2023'),
(5, '8 Inspiring Ways to Wear Dresses in the Winter', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet est vel orci luctus sollicitudin. Duis eleifend vestibulum justo, varius semper lacus condimentum dictum. Donec pulvinar a magna ut malesuada. In posuere felis diam, vel sodales m', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet est vel orci luctus sollicitudin. Duis eleifend vestibulum justo, varius semper lacus condimentum dictum. Donec pulvinar a magna ut malesuada. In posuere felis diam, vel sodales metus accumsan in. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet est vel orci luctus sollicitudin. Duis eleifend vestibulum justo, varius semper lacus condimentum dictum. Donec pulvinar a magna ut malesuada. In posuere felis diam, vel sodales metus accumsan in. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet est vel orci luctus sollicitudin. Duis eleifend vestibulum justo, varius semper lacus condimentum dictum. Donec pulvinar a magna ut malesuada. In posuere felis diam, vel sodales metus accumsan in. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet est vel orci luctus sollicitudin. Duis eleifend vestibulum justo, varius semper lacus condimentum dictum. Donec pulvinar a magna ut malesuada. In posuere felis diam, vel sodales metus accumsan in. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet est vel orci luctus sollicitudin. Duis eleifend vestibulum justo, varius semper lacus condimentum dictum. Donec pulvinar a magna ut malesuada. In posuere felis diam, vel sodales metus accumsan in. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet est vel orci luctus sollicitudin. Duis eleifend vestibulum justo, varius semper lacus con', 'Best-seller, Featured', '949494about-02.jpg', '14', 'Sep', '2023'),
(6, 'Blog 6', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet est vel orci luctus sollicitudin. Duis eleifend vestibulum justo, varius semper lacus condimentum dictum. Donec pulvinar a magna ut malesuada. In posuere felis diam, vel sodales m', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet est vel orci luctus sollicitudin. Duis eleifend vestibulum justo, varius semper lacus condimentum dictum. Donec pulvinar a magna ut malesuada. In posuere felis diam, vel sodales metus accumsan in. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet est vel orci luctus sollicitudin. Duis eleifend vestibulum justo, varius semper lacus condimentum dictum. Donec pulvinar a magna ut malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet est vel orci luctus sollicitudin. Duis eleifend vestibulum justo, varius semper lacus condimentum dictum. Donec pulvinar a magna ut malesuada. In posuere felis diam, vel sodales metus accumsan in. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet est vel orci luctus sollicitudin. Duis eleifend vestibulum justo, varius semper lacus condimentum dictum. Donec pulvinar a magna ut malesuada. ', 'Best-seller, Fashion, Streetstyle, Lifestyle, Featured, Sale, Top-rate', '601243gallery-03.jpg', '22', 'Sep', '2023');

-- --------------------------------------------------------

--
-- Table structure for table `blog_comment`
--

CREATE TABLE `blog_comment` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `comment` text NOT NULL,
  `website` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog_comment`
--

INSERT INTO `blog_comment` (`id`, `userid`, `name`, `email`, `comment`, `website`) VALUES
(10, 1, 'asfsadf', 'admin@gmail.com', 'asdsdf', ''),
(12, 1, 'asdfasf', 'asfdsaf', 'sdfasfd', '');

-- --------------------------------------------------------

--
-- Table structure for table `budget_calculations`
--

CREATE TABLE `budget_calculations` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `category` varchar(100) NOT NULL,
  `measurement_type` varchar(50) NOT NULL,
  `measurement_value` float NOT NULL,
  `page_link` text NOT NULL,
  `page_name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `budget_calculations`
--

INSERT INTO `budget_calculations` (`id`, `username`, `email`, `category`, `measurement_type`, `measurement_value`, `page_link`, `page_name`, `created_at`) VALUES
(1, 'John Doe', 'john@example.com', 'flooring', 'sqfeet', 250, 'https://example.com/budget', 'Interior Design Calculator', '2025-03-12 10:26:59'),
(7, 'iHome_Masters_', 'eeeeeegtr@gmail.com', 'flooring', 'cm', 6420, 'http://localhost/ddd/balcony.php', 'Best Interior Design Companies in Noida', '2025-03-12 10:30:33'),
(17, 'iHome_Masters_sdfsdfsafcalculator', 'gsrssgtr@gmail.com', 'wallpaper', 'sqfeet', 5623, 'http://localhost/cacl/balcony.php', 'Best Interior Design Companies in Noida', '2025-03-26 10:33:01');

-- --------------------------------------------------------

--
-- Table structure for table `calculations`
--

CREATE TABLE `calculations` (
  `id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `measurement_type` varchar(50) DEFAULT NULL,
  `measurement_value` float DEFAULT NULL,
  `page_name` varchar(255) DEFAULT NULL,
  `page_link` varchar(255) DEFAULT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `result` float DEFAULT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `measurement` varchar(10) DEFAULT NULL,
  `sqfeet_result` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `calculations`
--

INSERT INTO `calculations` (`id`, `username`, `email`, `category`, `measurement_type`, `measurement_value`, `page_name`, `page_link`, `date_time`, `result`, `user_email`, `user_name`, `measurement`, `sqfeet_result`) VALUES
(1, 'admina', 'admin@gmail.com', 'painting', 'inch', 56, 'Interior Design Calculator', '0', '2025-03-10 23:31:17', 0.036129, '', '', NULL, NULL),
(7, 'admina', 'akashrana098356@gmail.com', 'flooring', 'cm', 666, 'Interior Design Calculator', '0', '2025-03-10 23:46:02', 0.0666, '', '', NULL, NULL),
(8, 'iHome_Masters_sdfsdfsafasaaaaa', 'akashrana098356@gmail.com', 'wallpaper', 'mm', 65, 'Best Interior Design Companies in Noida', '0', '2025-03-12 10:09:59', 0.000065, '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `product_id` text NOT NULL,
  `user_id` text NOT NULL,
  `name` text NOT NULL,
  `price` int(11) NOT NULL,
  `num_product` int(11) NOT NULL,
  `image` text NOT NULL,
  `size` text NOT NULL,
  `color` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `category` varchar(50) DEFAULT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `category`, `message`, `created_at`) VALUES
(1, 'Mr Yawar Lateef', 'fefe@gmail.com', '09220367612', 'Commercial', 'sdasdsdee', '2025-03-12 08:29:10'),
(16, 'Mr Yawar Lateefpop', 'fedfefefe@gmail.com', '09220367612', 'Residence', 'sdfsf', '2025-03-26 10:30:49'),
(17, 'Mr Yawar Lateefcontactpage', 'fesadsadsadfe@gmail.com', '9220367612', 'Commercial', 'sad', '2025-03-26 10:31:10');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `msg` text NOT NULL,
  `time` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`name`, `email`, `msg`, `time`, `status`) VALUES
('pratik', 'admin@gmail.com', 'asasdasf', '2023-09-18 10:58:22', 0),
('mike', 'mike@gmail.com', 'asfasfasf', '2023-09-21 10:48:52', 0);

-- --------------------------------------------------------

--
-- Table structure for table `kitchencontact`
--

CREATE TABLE `kitchencontact` (
  `id` int(11) NOT NULL,
  `estimate_name` varchar(255) NOT NULL,
  `estimate_ph_number` varchar(20) NOT NULL,
  `estimate_email` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kitchencontact`
--

INSERT INTO `kitchencontact` (`id`, `estimate_name`, `estimate_ph_number`, `estimate_email`, `created_at`) VALUES
(65, 'Mr Yawar Lateef', '99220367612', 'dfdoppoof@mail.com', '2025-03-27 06:35:49'),
(66, 'Mr Yawar Lateef', '9220367612', 'ioioiuodfdf@mail.com', '2025-03-27 06:37:08');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `email`, `password`) VALUES
(1, 'Admin', 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `product_id` text NOT NULL,
  `user_id` text NOT NULL,
  `name` text NOT NULL,
  `price` int(11) NOT NULL,
  `num_product` int(11) NOT NULL,
  `image` text NOT NULL,
  `size` text NOT NULL,
  `color` text NOT NULL,
  `address` text NOT NULL,
  `city` text NOT NULL,
  `pincode` text NOT NULL,
  `cust_name` text NOT NULL,
  `mobile` text NOT NULL,
  `email` text NOT NULL,
  `date_time` text NOT NULL,
  `status` text NOT NULL DEFAULT 'placed',
  `payment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `product_id`, `user_id`, `name`, `price`, `num_product`, `image`, `size`, `color`, `address`, `city`, `pincode`, `cust_name`, `mobile`, `email`, `date_time`, `status`, `payment`) VALUES
(31, '3', '6', 'Lightweight Jacket', 75, 2, '635847blog-03.jpg', 'S - Small', 'Black', 'sdfasf', 'asfasdf', '123456', 'Pratik R G', '9662624947', 'admin@gmail.com', '2023-09-21 16:16:15', 'Cancelled-By-Client', 'UPI'),
(32, '3', '6', 'Lightweight Jacket', 75, 3, '635847blog-03.jpg', 'M - Medium', 'Black', 'sdfasf', 'asfasdf', '123456', 'Pratik R G', '9662624947', 'admin@gmail.com', '2023-09-21 16:16:15', 'Cancelled-By-Supplier', 'UPI'),
(33, '2', '6', 'Black Pant', 26, 2, '278889product-detail-01.jpg', 'S - Small', 'Black', 'sdfasf', 'asfasdf', '123456', 'Pratik R G', '9662624947', 'admin@gmail.com', '2023-09-21 16:16:15', 'Cancelled-By-Client', 'UPI'),
(34, '3', '6', 'Lightweight Jacket', 75, 2, '635847blog-03.jpg', 'S - Small', 'Black', 'sdfasf', 'asfasdf', '123456', 'Pratik R G', '9662624947', 'admin@gmail.com', '2023-09-21 16:16:15', 'Cancelled-By-Supplier', 'UPI'),
(35, '2', '6', 'Black Pant', 26, 2, '278889product-detail-01.jpg', 'S - Small', 'Blue', 'ghjgj', 'fgjgj', '456131', 'Pratik R G', '9662624947', 'admin@gmail.com', '2023-09-21 16:19:30', 'Delivered', 'Cash on Delivery'),
(36, '4', '6', 'Lightweight Jacket', 67, 3, '398408product-06.jpg', 'M - Medium', 'Blue', 'ghjgj', 'fgjgj', '456131', 'Pratik R G', '9662624947', 'admin@gmail.com', '2023-09-21 16:19:30', 'Pending', 'Cash on Delivery'),
(37, '3', '6', 'Lightweight Jacket', 75, 2, '635847blog-03.jpg', 'S - Small', 'Black', 'gdgsdg', 'dfgsdg', '456413', 'Pratik R G', '9662624947', 'admin@gmail.com', '2023-09-21 16:28:26', 'Cancelled-By-Client', 'UPI'),
(38, '4', '6', 'Lightweight Jacket', 67, 2, '398408product-06.jpg', 'S - Small', 'Blue', 'ddfg', 'sdfgdg', '123456', 'Pratik R G', '9662624947', 'admin@gmail.com', '2023-09-21 16:31:30', 'Pending', 'Cash on Delivery'),
(39, '8', '6', 'Lightweight Jacket', 55, 2, '563751product-08.jpg', 'S - Small', 'Gray', 'ddfg', 'sdfgdg', '123456', 'Pratik R G', '9662624947', 'admin@gmail.com', '2023-09-21 16:31:30', 'Pending', 'Cash on Delivery'),
(41, '3', '6', 'Lightweight Jacket', 75, 2, '635847blog-03.jpg', 'M - Medium', 'Green', 'sfasf', 'asfasdf', '123456', 'Pratik R G', '9662624947', 'admin@gmail.com', '2023-09-21 16:32:14', 'Pending', 'Cash on Delivery'),
(42, '5', '6', 'Lightweight Jacket', 55, 2, '612847product-04.jpg', 'M - Medium', 'Green', 'sfasf', 'asfasdf', '123456', 'Pratik R G', '9662624947', 'admin@gmail.com', '2023-09-21 16:32:14', 'Cancelled-By-Client', 'Cash on Delivery'),
(44, '3', '6', 'Lightweight Jacket', 75, 2, '635847blog-03.jpg', 'S - Small', 'Black', 'sfsf', 'assadf', '123456', 'Pratik R G', '9662624947', 'admin@gmail.com', '2023-09-21 16:33:46', 'Pending', 'UPI'),
(45, '3', '6', 'Lightweight Jacket', 75, 2, '635847blog-03.jpg', 'S - Small', 'Black', 'sdfsdf', 'sdfasf', '456413', 'Pratik R G', '9662624947', 'admin@gmail.com', '2023-09-21 17:15:17', 'Cancelled-By-Client', 'Cash on Delivery'),
(46, '5', '6', 'Lightweight Jacket', 55, 6, '612847product-04.jpg', 'M - Medium', 'Gray', 'sdfsf', 'asfsaf', '566465', 'Pratik R G', '9662624947', 'admin@gmail.com', '2023-09-22 13:32:13', 'Pending', 'Cash on Delivery'),
(47, '5', '6', 'Lightweight Jacket', 55, 6, '612847product-04.jpg', ' L - Large', 'Black', 'sdfsf', 'asfsaf', '566465', 'Pratik R G', '9662624947', 'admin@gmail.com', '2023-09-22 13:32:13', 'Pending', 'Cash on Delivery'),
(48, '5', '6', 'Lightweight Jacket', 55, 3, '612847product-04.jpg', ' L - Large', ' Gray', 'sdfsf', 'asfsaf', '566465', 'Pratik R G', '9662624947', 'admin@gmail.com', '2023-09-22 13:32:13', 'Pending', 'Cash on Delivery'),
(49, '4', '6', 'Lightweight Jacket', 67, 2, '398408product-06.jpg', ' M - Medium', ' Blue', 'asfa', 'asf', '455555', 'Pratik R G', '9662624947', 'admin@gmail.com', '2023-09-22 13:33:45', 'Pending', 'EMI'),
(50, '2', '6', 'Black Pant', 26, 1, '278889product-detail-01.jpg', 'S - Small', 'Black', 'xyz', 'asfasdf', '111111', 'Pratik R G', '9662624947', 'admin@gmail.com', '2023-09-22 13:36:52', 'Pending', 'Cash on Delivery');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `price` text NOT NULL,
  `category` text NOT NULL,
  `tag` text NOT NULL,
  `type` text NOT NULL,
  `one_line_title` text NOT NULL,
  `size` text NOT NULL,
  `color` text NOT NULL,
  `description` text NOT NULL,
  `weight` text NOT NULL,
  `dimension` text NOT NULL,
  `material` text NOT NULL,
  `image1` text NOT NULL,
  `image2` text NOT NULL,
  `image3` text NOT NULL,
  `stock` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `category`, `tag`, `type`, `one_line_title`, `size`, `color`, `description`, `weight`, `dimension`, `material`, `image1`, `image2`, `image3`, `stock`) VALUES
(2, 'Black Pant', '25.50', 'Men', 'Best-seller, Featured, Sale', 'Cotton-pent', 'Nulla eget sem vitae eros pharetra viverra. Nam vitae luctus ligula. Mauris consequat ornare feugiat', 'S - Small, M - Medium, L - Large, XL - Extra Large, XXL - Extra Extra Large', 'Black, Blue, Red, White', 'Aenean sit amet gravida nisi. Nam fermentum est felis, quis feugiat nunc fringilla sit amet. Ut in blandit ipsum. Quisque luctus dui at ante aliquet, in hendrerit lectus interdum. Morbi elementum sapien rhoncus pretium maximus. Nulla lectus enim, cursus et elementum sed, sodales vitae eros. Ut ex quam, porta consequat interdum in, faucibus eu velit. Quisque rhoncus ex ac libero varius molestie. Aenean tempor sit amet orci nec iaculis. Cras sit amet nulla libero. Curabitur dignissim, nunc nec lao', '10 kg', '10 x 100 cm', 'Cotton', '278889product-detail-01.jpg', '850528banner-05.jpg', '124164product-detail-03.jpg', 'In Stock'),
(3, 'Lightweight Jacket', '75', 'Women', 'Best-seller, Sale', 'T-shirt', 'asdasf', 'S - Small, M - Medium, L - Large, XXL - Extra Extra Large', 'Black, Gray, Green', 'asdasdf', '12 kg', '100 x 100 cm', 'Cotton', '635847blog-03.jpg', '452627slide-04.jpg', '867332blog-03.jpg', 'Out of Stock'),
(4, 'Lightweight Jacket', '66.50', 'Accessories', 'Featured, Sale', 'Watch', 'asasdf', 'S - Small, M - Medium, XL - Extra Large', 'Black, Blue, Gray, White', 'asdfasf', '10 kg', '110 x 110 cm', 'Cotton', '398408product-06.jpg', '300845item-cart-03.jpg', '16134banner-07.jpg', 'In Stock'),
(5, 'Lightweight Jacket', '55', 'Women', 'Best-seller, Sale', 'T-shirt', 'asdasf', 'S - Small, M - Medium, L - Large, XXL - Extra Extra Large', 'Black, Gray, Green', 'asdasdf', '12 kg', '100 x 100 cm', 'Cotton', '612847product-04.jpg', '452627slide-04.jpg', '867332blog-03.jpg', 'In Stock'),
(6, 'Lightweight Jacket', '65.50', 'Accessories', 'Featured, Sale', 'Watch', 'asasdf', 'S - Small, M - Medium, XL - Extra Large', 'Black, Blue, Gray, White', 'asdfasf', '10 kg', '110 x 110 cm', 'Cotton', '48783banner-08.jpg', '300845item-cart-03.jpg', '16134banner-07.jpg', 'In Stock'),
(7, 'Black Pant', '25.50', 'Men', 'Best-seller, Featured, Sale', 'Cotton-pent', 'Nulla eget sem vitae eros pharetra viverra. Nam vitae luctus ligula. Mauris consequat ornare feugiat', 'S - Small, M - Medium, L - Large, XL - Extra Large, XXL - Extra Extra Large', 'Black, Blue, Red, White', 'Aenean sit amet gravida nisi. Nam fermentum est felis, quis feugiat nunc fringilla sit amet. Ut in blandit ipsum. Quisque luctus dui at ante aliquet, in hendrerit lectus interdum. Morbi elementum sapien rhoncus pretium maximus. Nulla lectus enim, cursus et elementum sed, sodales vitae eros. Ut ex quam, porta consequat interdum in, faucibus eu velit. Quisque rhoncus ex ac libero varius molestie. Aenean tempor sit amet orci nec iaculis. Cras sit amet nulla libero. Curabitur dignissim, nunc nec lao', '10 kg', '10 x 100 cm', 'Cotton', '147851product-03.jpg', '850528banner-05.jpg', '124164product-detail-03.jpg', 'In Stock'),
(8, 'Lightweight Jacket', '55', 'Women', 'Best-seller, Sale', 'T-shirt', 'asdasf', 'S - Small, M - Medium, L - Large, XXL - Extra Extra Large', 'Black, Gray, Green', 'asdasdf', '12 kg', '100 x 100 cm', 'Cotton', '563751product-08.jpg', '452627slide-04.jpg', '867332blog-03.jpg', 'In Stock'),
(9, 'Lightweight Jacket', '65.50', 'Accessories', 'Featured, Sale', 'Watch', 'asasdf', 'S - Small, M - Medium, XL - Extra Large', 'Black, Blue, Gray, White', 'asdfasf', '10 kg', '110 x 110 cm', 'Cotton', '603434banner-06.jpg', '300845item-cart-03.jpg', '16134banner-07.jpg', 'In Stock'),
(10, 'Lightweight Jacket', '55', 'Women', 'Best-seller, Sale', 'T-shirt', 'asdasf', 'S - Small, M - Medium, L - Large, XXL - Extra Extra Large', 'Black, Gray, Green', 'asdasdf', '12 kg', '100 x 100 cm', 'Cotton', '886386product-10.jpg', '452627slide-04.jpg', '867332blog-03.jpg', 'In Stock'),
(11, 'Lightweight Jacket', '65.50', 'Accessories', 'Featured, Sale', 'Watch', 'asasdf', 'S - Small, M - Medium, XL - Extra Large', 'Black, Blue, Gray, White', 'asdfasf', '10 kg', '110 x 110 cm', 'Cotton', '189582banner-03.jpg', '300845item-cart-03.jpg', '16134banner-07.jpg', 'In Stock'),
(12, 'Black Pant', '25.50', 'Men', 'Best-seller, Featured, Sale', 'Cotton-pent', 'Nulla eget sem vitae eros pharetra viverra. Nam vitae luctus ligula. Mauris consequat ornare feugiat', 'S - Small, M - Medium, L - Large, XL - Extra Large, XXL - Extra Extra Large', 'Black, Blue, Red, White', 'Aenean sit amet gravida nisi. Nam fermentum est felis, quis feugiat nunc fringilla sit amet. Ut in blandit ipsum. Quisque luctus dui at ante aliquet, in hendrerit lectus interdum. Morbi elementum sapien rhoncus pretium maximus. Nulla lectus enim, cursus et elementum sed, sodales vitae eros. Ut ex quam, porta consequat interdum in, faucibus eu velit. Quisque rhoncus ex ac libero varius molestie. Aenean tempor sit amet orci nec iaculis. Cras sit amet nulla libero. Curabitur dignissim, nunc nec lao', '10 kg', '10 x 100 cm', 'Cotton', '969745product-11.jpg', '850528banner-05.jpg', '124164product-detail-03.jpg', 'In Stock'),
(13, 'Black Pant', '25.50', 'Men', 'Best-seller, Featured, Sale', 'Cotton-pent', 'Nulla eget sem vitae eros pharetra viverra. Nam vitae luctus ligula. Mauris consequat ornare feugiat', 'S - Small, M - Medium, L - Large, XL - Extra Large, XXL - Extra Extra Large', 'Black, Blue, Red, White', 'Aenean sit amet gravida nisi. Nam fermentum est felis, quis feugiat nunc fringilla sit amet. Ut in blandit ipsum. Quisque luctus dui at ante aliquet, in hendrerit lectus interdum. Morbi elementum sapien rhoncus pretium maximus. Nulla lectus enim, cursus et elementum sed, sodales vitae eros. Ut ex quam, porta consequat interdum in, faucibus eu velit. Quisque rhoncus ex ac libero varius molestie. Aenean tempor sit amet orci nec iaculis. Cras sit amet nulla libero. Curabitur dignissim, nunc nec lao', '10 kg', '10 x 100 cm', 'Cotton', '942043product-detail-02.jpg', '850528banner-05.jpg', '124164product-detail-03.jpg', 'In Stock'),
(14, 'Black Pant', '25.50', 'Men', 'Best-seller, Featured, Sale', 'Cotton-pent', 'Nulla eget sem vitae eros pharetra viverra. Nam vitae luctus ligula. Mauris consequat ornare feugiat', 'S - Small, M - Medium, L - Large, XL - Extra Large, XXL - Extra Extra Large', 'Black, Blue, Red, White', 'Aenean sit amet gravida nisi. Nam fermentum est felis, quis feugiat nunc fringilla sit amet. Ut in blandit ipsum. Quisque luctus dui at ante aliquet, in hendrerit lectus interdum. Morbi elementum sapien rhoncus pretium maximus. Nulla lectus enim, cursus et elementum sed, sodales vitae eros. Ut ex quam, porta consequat interdum in, faucibus eu velit. Quisque rhoncus ex ac libero varius molestie. Aenean tempor sit amet orci nec iaculis. Cras sit amet nulla libero. Curabitur dignissim, nunc nec lao', '10 kg', '10 x 100 cm', 'Cotton', '734411banner-02.jpg', '850528banner-05.jpg', '124164product-detail-03.jpg', 'In Stock'),
(15, 'Black Pant', '25.50', 'Men', 'Best-seller, Featured, Sale', 'Cotton-pent', 'Nulla eget sem vitae eros pharetra viverra. Nam vitae luctus ligula. Mauris consequat ornare feugiat', 'S - Small, M - Medium, L - Large, XL - Extra Large, XXL - Extra Extra Large', 'Black, Blue, Red, White', 'Aenean sit amet gravida nisi. Nam fermentum est felis, quis feugiat nunc fringilla sit amet. Ut in blandit ipsum. Quisque luctus dui at ante aliquet, in hendrerit lectus interdum. Morbi elementum sapien rhoncus pretium maximus. Nulla lectus enim, cursus et elementum sed, sodales vitae eros. Ut ex quam, porta consequat interdum in, faucibus eu velit. Quisque rhoncus ex ac libero varius molestie. Aenean tempor sit amet orci nec iaculis. Cras sit amet nulla libero. Curabitur dignissim, nunc nec lao', '10 kg', '10 x 100 cm', 'Cotton', '446456product-11.jpg', '850528banner-05.jpg', '124164product-detail-03.jpg', 'In Stock'),
(16, 'Black Pant', '25.50', 'Men', 'Best-seller, Featured, Sale', 'Cotton-pent', 'Nulla eget sem vitae eros pharetra viverra. Nam vitae luctus ligula. Mauris consequat ornare feugiat', 'S - Small, M - Medium, L - Large, XL - Extra Large, XXL - Extra Extra Large', 'Black, Blue, Red, White', 'Aenean sit amet gravida nisi. Nam fermentum est felis, quis feugiat nunc fringilla sit amet. Ut in blandit ipsum. Quisque luctus dui at ante aliquet, in hendrerit lectus interdum. Morbi elementum sapien rhoncus pretium maximus. Nulla lectus enim, cursus et elementum sed, sodales vitae eros. Ut ex quam, porta consequat interdum in, faucibus eu velit. Quisque rhoncus ex ac libero varius molestie. Aenean tempor sit amet orci nec iaculis. Cras sit amet nulla libero. Curabitur dignissim, nunc nec lao', '10 kg', '10 x 100 cm', 'Cotton', '278889product-detail-01.jpg', '850528banner-05.jpg', '124164product-detail-03.jpg', 'In Stock'),
(17, 'Black Pant', '25.50', 'Men', 'Best-seller, Featured, Sale', 'Cotton-pent', 'Nulla eget sem vitae eros pharetra viverra. Nam vitae luctus ligula. Mauris consequat ornare feugiat', 'S - Small, M - Medium, L - Large, XL - Extra Large, XXL - Extra Extra Large', 'Black, Blue, Red, White', 'Aenean sit amet gravida nisi. Nam fermentum est felis, quis feugiat nunc fringilla sit amet. Ut in blandit ipsum. Quisque luctus dui at ante aliquet, in hendrerit lectus interdum. Morbi elementum sapien rhoncus pretium maximus. Nulla lectus enim, cursus et elementum sed, sodales vitae eros. Ut ex quam, porta consequat interdum in, faucibus eu velit. Quisque rhoncus ex ac libero varius molestie. Aenean tempor sit amet orci nec iaculis. Cras sit amet nulla libero. Curabitur dignissim, nunc nec lao', '10 kg', '10 x 100 cm', 'Cotton', '403410product-03.jpg', '850528banner-05.jpg', '124164product-detail-03.jpg', 'In Stock'),
(18, 'Black Pant', '25.50', 'Men', 'Best-seller, Featured, Sale', 'Cotton-pent', 'Nulla eget sem vitae eros pharetra viverra. Nam vitae luctus ligula. Mauris consequat ornare feugiat', 'S - Small, M - Medium, L - Large, XL - Extra Large, XXL - Extra Extra Large', 'Black, Blue, Red, White', 'Aenean sit amet gravida nisi. Nam fermentum est felis, quis feugiat nunc fringilla sit amet. Ut in blandit ipsum. Quisque luctus dui at ante aliquet, in hendrerit lectus interdum. Morbi elementum sapien rhoncus pretium maximus. Nulla lectus enim, cursus et elementum sed, sodales vitae eros. Ut ex quam, porta consequat interdum in, faucibus eu velit. Quisque rhoncus ex ac libero varius molestie. Aenean tempor sit amet orci nec iaculis. Cras sit amet nulla libero. Curabitur dignissim, nunc nec lao', '10 kg', '10 x 100 cm', 'Cotton', '722564product-detail-02.jpg', '850528banner-05.jpg', '124164product-detail-03.jpg', 'In Stock'),
(19, 'Black Pant', '25.50', 'Men', 'Best-seller, Featured, Sale', 'Cotton-pent', 'Nulla eget sem vitae eros pharetra viverra. Nam vitae luctus ligula. Mauris consequat ornare feugiat', 'S - Small, M - Medium, L - Large, XL - Extra Large, XXL - Extra Extra Large', 'Black, Blue, Red, White', 'Aenean sit amet gravida nisi. Nam fermentum est felis, quis feugiat nunc fringilla sit amet. Ut in blandit ipsum. Quisque luctus dui at ante aliquet, in hendrerit lectus interdum. Morbi elementum sapien rhoncus pretium maximus. Nulla lectus enim, cursus et elementum sed, sodales vitae eros. Ut ex quam, porta consequat interdum in, faucibus eu velit. Quisque rhoncus ex ac libero varius molestie. Aenean tempor sit amet orci nec iaculis. Cras sit amet nulla libero. Curabitur dignissim, nunc nec lao', '10 kg', '10 x 100 cm', 'Cotton', '278889product-detail-01.jpg', '850528banner-05.jpg', '124164product-detail-03.jpg', 'In Stock'),
(20, 'Lightweight Jacket', '55', 'Women', 'Best-seller, Sale', 'T-shirt', 'asdasf', 'S - Small, M - Medium, L - Large, XXL - Extra Extra Large', 'Black, Gray, Green', 'asdasdf', '12 kg', '100 x 100 cm', 'Cotton', '729060product-01.jpg', '452627slide-04.jpg', '867332blog-03.jpg', 'In Stock'),
(21, 'Lightweight Jacket', '55', 'Women', 'Best-seller, Sale', 'T-shirt', 'asdasf', 'S - Small, M - Medium, L - Large, XXL - Extra Extra Large', 'Black, Gray, Green', 'asdasdf', '12 kg', '100 x 100 cm', 'Cotton', '378457slide-04.jpg', '452627slide-04.jpg', '867332blog-03.jpg', 'In Stock'),
(22, 'Lightweight Jacket', '55', 'Women', 'Best-seller, Sale', 'T-shirt', 'asdasf', 'S - Small, M - Medium, L - Large, XXL - Extra Extra Large', 'Black, Gray, Green', 'asdasdf', '12 kg', '100 x 100 cm', 'Cotton', '739434product-02.jpg', '452627slide-04.jpg', '867332blog-03.jpg', 'In Stock'),
(23, 'Lightweight Jacket', '55', 'Women', 'Best-seller, Sale', 'T-shirt', 'asdasf', 'S - Small, M - Medium, L - Large, XXL - Extra Extra Large', 'Black, Gray, Green', 'asdasdf', '12 kg', '100 x 100 cm', 'Cotton', '49911product-16.jpg', '452627slide-04.jpg', '867332blog-03.jpg', 'In Stock'),
(24, 'Lightweight Jacket', '55', 'Women', 'Best-seller, Sale', 'T-shirt', 'asdasf', 'S - Small, M - Medium, L - Large, XXL - Extra Extra Large', 'Black, Gray, Green', 'asdasdf', '12 kg', '100 x 100 cm', 'Cotton', '546391product-13.jpg', '452627slide-04.jpg', '867332blog-03.jpg', 'In Stock'),
(25, 'Lightweight Jacket', '55', 'Women', 'Best-seller, Sale', 'T-shirt', 'asdasf', 'S - Small, M - Medium, L - Large, XXL - Extra Extra Large', 'Black, Gray, Green', 'asdasdf', '12 kg', '100 x 100 cm', 'Cotton', '925928product-05.jpg', '452627slide-04.jpg', '867332blog-03.jpg', 'In Stock'),
(26, 'Lightweight Jacket', '65.50', 'Accessories', 'Featured, Sale', 'Watch', 'asasdf', 'S - Small, M - Medium, XL - Extra Large', 'Black, Blue, Gray, White', 'asdfasf', '10 kg', '110 x 110 cm', 'Cotton', '369899blog-03.jpg', '300845item-cart-03.jpg', '16134banner-07.jpg', 'In Stock'),
(27, 'Lightweight Jacket', '65.50', 'Accessories', 'Featured, Sale', 'Watch', 'asasdf', 'S - Small, M - Medium, XL - Extra Large', 'Black, Blue, Gray, White', 'asdfasf', '10 kg', '110 x 110 cm', 'Cotton', '349099product-09.jpg', '300845item-cart-03.jpg', '16134banner-07.jpg', 'In Stock'),
(28, 'Lightweight Jacket', '65.50', 'Accessories', 'Featured, Sale', 'Watch', 'asasdf', 'S - Small, M - Medium, XL - Extra Large', 'Black, Blue, Gray, White', 'asdfasf', '10 kg', '110 x 110 cm', 'Cotton', '391421product-15.jpg', '300845item-cart-03.jpg', '16134banner-07.jpg', 'In Stock'),
(29, 'Lightweight Jacket', '65.50', 'Accessories', 'Featured, Sale', 'Watch', 'asasdf', 'S - Small, M - Medium, XL - Extra Large', 'Black, Blue, Gray, White', 'asdfasf', '10 kg', '110 x 110 cm', 'Cotton', '763997gallery-01.jpg', '300845item-cart-03.jpg', '16134banner-07.jpg', 'In Stock'),
(30, 'Lightweight Jacket', '65.50', 'Accessories', 'Featured, Sale', 'Watch', 'asasdf', 'S - Small, M - Medium, XL - Extra Large', 'Black, Blue, Gray, White', 'asdfasf', '10 kg', '110 x 110 cm', 'Cotton', '659805product-09.jpg', '300845item-cart-03.jpg', '16134banner-07.jpg', 'In Stock'),
(31, 'Lightweight Jacket', '65.50', 'Accessories', 'Featured, Sale', 'Watch', 'asasdf', 'S - Small, M - Medium, XL - Extra Large', 'Black, Blue, Gray, White', 'asdfasf', '10 kg', '110 x 110 cm', 'Cotton', '792682product-12.jpg', '300845item-cart-03.jpg', '16134banner-07.jpg', 'In Stock'),
(32, 'Lightweight Jacket', '65.50', 'Accessories', 'Featured, Sale', 'Watch', 'asasdf', 'S - Small, M - Medium, XL - Extra Large', 'Black, Blue, Gray, White', 'asdfasf', '10 kg', '110 x 110 cm', 'Cotton', '636599banner-09.jpg', '300845item-cart-03.jpg', '16134banner-07.jpg', 'In Stock'),
(33, 'White Pant', '200', 'Men', 'Best-seller, Sale', 'Cotton-pent', 'Pant', 'M - Medium, L - Large, XL - Extra Large, XXL - Extra Extra Large', 'Black, White', 'White Pant', '40kg', '200cm', 'Cotton', '898219product-detail-01.jpg', '37119product-detail-02.jpg', '862080product-detail-01.jpg', 'In Stock');

-- --------------------------------------------------------

--
-- Table structure for table `product_comment`
--

CREATE TABLE `product_comment` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `rating` text NOT NULL,
  `review` text NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_comment`
--

INSERT INTO `product_comment` (`id`, `userid`, `rating`, `review`, `name`, `email`) VALUES
(80, 2, '3', 'asdfas', 'asdfsdaf', 'admin@gmail.com'),
(81, 2, '3', 'asdfas', 'asdfsdaf', 'admin@gmail.com'),
(83, 3, '4', 'dsdfg', 'asdfas', 'amit@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `details` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `title`, `details`, `image`) VALUES
(3, 'Slider 1', 'Slider 1 Details', '139784slide-02.jpg'),
(5, 'Slider 2', 'Slider 2 Details', '876065slide-01.jpg'),
(6, 'Slider 3', 'Details of Slider 3', '198828slide-04.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_register`
--

CREATE TABLE `user_register` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `mobile_number` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_register`
--

INSERT INTO `user_register` (`id`, `name`, `email`, `mobile_number`, `password`) VALUES
(2, 'Jatin', 'jatinviswakarma619@gmail.com', '9662624947', 'admin'),
(4, 'jatin', 'admin@gmail.com', '9662624868', 'adminf'),
(6, 'jatin', 'admin@gmail.com', '9662624947', 'admine');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_comment`
--
ALTER TABLE `blog_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `budget_calculations`
--
ALTER TABLE `budget_calculations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `calculations`
--
ALTER TABLE `calculations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `kitchencontact`
--
ALTER TABLE `kitchencontact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_comment`
--
ALTER TABLE `product_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_register`
--
ALTER TABLE `user_register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `blog_comment`
--
ALTER TABLE `blog_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `budget_calculations`
--
ALTER TABLE `budget_calculations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `calculations`
--
ALTER TABLE `calculations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `kitchencontact`
--
ALTER TABLE `kitchencontact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `product_comment`
--
ALTER TABLE `product_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_register`
--
ALTER TABLE `user_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
