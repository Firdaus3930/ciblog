-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2023 at 08:44 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ciblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`) VALUES
(1, 'Kolej Breyer KL', '2023-06-09 15:14:11'),
(2, 'Kolej Breyer Gombak', '2023-06-09 15:14:11'),
(12, 'Food', '2023-06-12 03:05:24'),
(13, 'Coding Framework', '2023-07-09 14:07:59'),
(14, 'Database', '2023-07-11 05:17:35'),
(15, 'Engine', '2023-07-11 05:19:04'),
(16, 'hello', '2023-07-12 06:16:52');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `post_image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `user_id`, `title`, `slug`, `body`, `post_image`, `created_at`) VALUES
(82, 14, 1, 'phpMyAdmin', 'phpMyAdmin', '<p>phpMyAdmin is a free and open source administration tool for MySQL and MariaDB. As a portable web application written primarily in PHP, it has become one of the most popular MySQL administration tools, especially for web hosting services.</p>\r\n', 'PhpMyAdmin.png', '2023-07-11 05:49:46'),
(83, 15, 1, 'APACHE', 'APACHE', '<p>The&nbsp;<strong>Apache HTTP Server&nbsp;</strong>is a&nbsp;<a href=\"https://en.wikipedia.org/wiki/Free_and_open-source_software\">free and open-source</a>&nbsp;cross-platform&nbsp;<a href=\"https://en.wikipedia.org/wiki/Web_server\">web server</a>&nbsp;software, released under the terms of&nbsp;<a href=\"https://en.wikipedia.org/wiki/Apache_License\">Apache License 2.0</a>. It is developed and maintained by a community of developers under the auspices of the&nbsp;<a href=\"https://en.wikipedia.org/wiki/Apache_Software_Foundation\">Apache Software Foundation</a>.&nbsp;The vast majority of Apache HTTP Server instances run on a&nbsp;<a href=\"https://en.wikipedia.org/wiki/Linux_distribution\">Linux distribution</a>,&nbsp;but current versions also run on&nbsp;<a href=\"https://en.wikipedia.org/wiki/Microsoft_Windows\">Microsoft Windows</a>,&nbsp;<a href=\"https://en.wikipedia.org/wiki/OpenVMS\">OpenVMS</a>,&nbsp;and a wide variety of&nbsp;<a href=\"https://en.wikipedia.org/wiki/Unix-like\">Unix-like</a>&nbsp;systems.&nbsp;Past versions also ran on&nbsp;<a href=\"https://en.wikipedia.org/wiki/NetWare\">NetWare</a>,&nbsp;<a href=\"https://en.wikipedia.org/wiki/OS/2\">OS/2</a>&nbsp;and other operating systems, including ports to mainframes.development of Apache began in early 1995 after work on the NCSA code stalled. Apache played a key role in the initial growth of the&nbsp;<a href=\"https://en.wikipedia.org/wiki/World_Wide_Web\">World Wide Web</a>,&nbsp;&nbsp;quickly overtaking NCSA HTTPd as the dominant&nbsp;<a href=\"https://en.wikipedia.org/wiki/HTTP\">HTTP</a>&nbsp;server.In 2009, it became the first web server software to serve more than 100 million&nbsp;<a href=\"https://en.wikipedia.org/wiki/Website\">websites</a>.</p>\r\n', 'APACHE.png', '2023-07-11 05:52:03'),
(84, 13, 1, 'CODEIGNITER', 'CODEIGNITER', '<p>CodeIgniter is loosely based on the popular&nbsp;<a href=\"https://en.wikipedia.org/wiki/Model%E2%80%93view%E2%80%93controller\">model&ndash;view&ndash;controller</a>&nbsp;(MVC) development pattern. While controller classes are a necessary part of development under CodeIgniter, models and views are optional.CodeIgniter can be also modified to use Hierarchical Model View Controller (HMVC) which allows the developers to maintain modular grouping of Controller, Models and View arranged in a sub-directory format. CodeIgniter is most often noted for its speed when compared to other PHP frameworks.&nbsp;In a critical take on PHP frameworks in general, PHP creator&nbsp;<a href=\"https://en.wikipedia.org/wiki/Rasmus_Lerdorf\">Rasmus Lerdorf</a>&nbsp;spoke at&nbsp;<a href=\"https://en.wikipedia.org/wiki/Bonn-Rhein-Sieg_University_of_Applied_Sciences_(BRSU)#FrOSCon\">frOSCon</a>&nbsp;in August 2008, noting that he liked CodeIgniter &quot;<em>because it is faster, lighter and the least like a framework.</em>&quot;</p>\r\n', 'codeigniter.png', '2023-07-11 05:59:16'),
(93, 13, 1, 'j', 'j', '<p>j</p>\r\n', 'noimage.jpg', '2023-08-02 03:27:27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `password`, `register_date`) VALUES
(1, 'Admin', 'Admin@gmail.com', 'Admin', '25f9e794323b453885f5181f1b624d0b', '2023-06-11 11:36:24'),
(2, 'aLIP', 'alipgay@gmail.com', 'Alip dan sobri', '202cb962ac59075b964b07152d234b70', '2023-06-11 07:10:48'),
(3, 'Firdaus', 'mohdfirdausnoorhisam@gmail.com', 'Firdaus', '827ccb0eea8a706c4c34a16891f84e7b', '2023-06-11 10:52:58'),
(4, 'SOBRI', 'Sobri@gmail.com', 'Alipgay', '81dc9bdb52d04dc20036dbd8313ed055', '2023-06-11 06:29:38'),
(5, 'AYED', 'gemuk@gmail.com', 'SAYA GEMUK', '08f2653fa3fe9f6f00f75b2d9faf6ef1', '2023-06-11 12:09:21'),
(6, 'Daus', 'daus@gmail.com', 'Daus', '827ccb0eea8a706c4c34a16891f84e7b', '2023-06-11 12:12:54'),
(7, 'alipbuto', 'alipbuto@gmail.com', 'alipbuto', '827ccb0eea8a706c4c34a16891f84e7b', '2023-06-12 01:24:50'),
(10, 'ayedgemuk', 'ayedgemuk@gmail.com', 'gemuksial', '81dc9bdb52d04dc20036dbd8313ed055', '2023-06-12 02:55:11'),
(11, 'ayedgemuksial', 'ayedgemuksial@gmail.com', 'ayedgemuksial', '81dc9bdb52d04dc20036dbd8313ed055', '2023-06-12 03:01:18'),
(12, 'Admin2', 'Admin2@gmail.com', 'Admin2', '827ccb0eea8a706c4c34a16891f84e7b', '2023-07-09 11:34:49'),
(13, 'Ammar ', 'Ammar134@gmail.com', 'Ammar54', 'fcea920f7412b5da7be0cf42b8c93759', '2023-07-10 02:04:13'),
(14, 'ahbeng', 'ahbeng@gmail.com', 'ahyed', '81dc9bdb52d04dc20036dbd8313ed055', '2023-07-12 06:14:49'),
(15, 'AMIRUL SYUSHAIDI', 'amirulyus@gmail.com', 'amirulyus', 'e18a9695e178a43669df19a45a0fa9a6', '2023-07-31 06:14:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
