-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2017 at 02:34 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `barcode`
--

CREATE TABLE `barcode` (
  `id` int(11) NOT NULL,
  `barcode_name` varchar(255) NOT NULL,
  `imgbarcode` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barcode`
--

INSERT INTO `barcode` (`id`, `barcode_name`, `imgbarcode`, `created_at`) VALUES
(15, '1235856684', '1235856684.png', '0000-00-00 00:00:00'),
(16, 'sasa52', 'sasa52.png', '0000-00-00 00:00:00'),
(17, 'dsadas', 'dsadas.png', '0000-00-00 00:00:00'),
(18, '10265225855', '10265225855.png', '0000-00-00 00:00:00'),
(19, '10101020202', '10101020202.png', '0000-00-00 00:00:00'),
(20, '25365874235', '25365874235.png', '0000-00-00 00:00:00'),
(21, '111112553664', '111112553664.png', '0000-00-00 00:00:00'),
(22, '123666666654', '123666666654.png', '0000-00-00 00:00:00'),
(23, '7777777777777', '7777777777777.png', '0000-00-00 00:00:00'),
(24, '9999999999999999999999999999999999999', '9999999999999999999999999999999999999.png', '0000-00-00 00:00:00'),
(25, '1111112', '1111112.png', '0000-00-00 00:00:00'),
(26, '123456789', '123456789.png', '0000-00-00 00:00:00'),
(27, '112555', '112555.png', '0000-00-00 00:00:00'),
(28, '9999999999999854442', '9999999999999854442.png', '0000-00-00 00:00:00'),
(29, '22222222222225', '22222222222225.png', '0000-00-00 00:00:00'),
(30, '1744556', '1744556.png', '0000-00-00 00:00:00'),
(31, '12333', '12333.png', '0000-00-00 00:00:00'),
(32, '114778523', '114778523.png', '2017-08-23 16:46:26'),
(33, '', '.png', '2017-08-24 03:33:55'),
(34, '1010101253', '1010101253.png', '2017-08-24 03:34:20'),
(35, 'asasssssssss', 'sass', '2017-08-24 03:40:09'),
(36, '123456789', '123456789.png', '2017-08-24 03:44:42'),
(37, '182233588', '182233588.png', '2017-08-24 03:48:15'),
(38, '222222', '222222.png', '2017-08-24 03:48:22'),
(39, '12235874222', '12235874222.png', '2017-08-28 19:27:14');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `created_at`) VALUES
(1, 'bussiness', '2017-08-17 00:10:01'),
(2, 'Technology', '2017-08-17 00:10:01'),
(3, 'history', '2017-08-17 17:34:31'),
(4, 'history', '2017-08-17 17:53:12'),
(5, 'history', '2017-08-17 17:54:04'),
(6, 'history', '2017-08-17 17:56:22'),
(7, 'new', '2017-08-20 20:58:03');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `post_id`, `name`, `email`, `body`, `created_at`) VALUES
(1, 22, 'michael', 'michaelmarkos@gmial.com', 'perfect', '2017-08-17 20:19:29'),
(2, 18, 'Michael Markos', 'michaelmarkos22@gmail.com', 'this blog is very exiting and very beatu =D', '2017-08-27 16:53:00'),
(3, 22, 'melad', 'melad@gmail.com', 'good', '2017-08-27 17:00:17'),
(4, 23, 'andrew', 'andre@fsggsd.com', 'good', '2017-08-28 17:26:06');

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
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `user_id`, `title`, `slug`, `body`, `post_image`, `created_at`) VALUES
(10, 1, 1, 'aaaaaa', 'aaaaaa', '<p>aaaaaaaaaaaaa</p>', '7ml.png', '2017-08-28 19:40:56'),
(12, 2, 1, 'Post Five', 'Post-Five', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec imperdiet, lacus in mollis blandit, lectus ex luctus justo, non mattis risus risus et sem. Vivamus suscipit mauris et est porta suscipit. Integer nec metus erat. Nam eget luctus nulla, id fringilla magna. Quisque consectetur justo eget venenatis consectetur. Quisque at velit dignissim, accumsan elit quis, ullamcorper felis. Nunc ac dignissim massa, a imperdiet urna. Duis et eros at nunc viverra mollis a at odio. In tempor at nibh id tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec nec nunc a enim suscipit rhoncus in nec orci. Proin et hendrerit nisi. Praesent quis lectus a mauris sodales eleifend. Duis vestibulum, odio sed sodales varius, ex arcu dignissim tellus, a tincidunt risus urna quis tellus. Donec ac leo ut justo ultricies fringilla. Donec eget dignissim libero.</p>', 'noimage.jpg', '2017-08-28 19:40:39'),
(13, 3, 1, 'post One', 'post-One', '<p>Mauris lectus dui, sollicitudin eu dui vitae, iaculis porta erat. Nullam vehicula vestibulum dui, vitae sollicitudin enim rhoncus et. Nullam a sollicitudin nunc, porttitor egestas massa. Sed facilisis efficitur dignissim. Mauris bibendum maximus elit, eget scelerisque enim vestibulum vitae. Fusce scelerisque, nulla sed posuere dignissim, quam leo fermentum felis, non luctus metus tortor eu leo. Ut eget ante a ex consequat pulvinar. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus interdum tristique vulputate.</p><p>Vivamus at odio magna. In mattis maximus convallis. Donec at ipsum ac mi placerat aliquam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non ex turpis. Nam consequat risus quis est fringilla, ac luctus dolor convallis. Donec consectetur condimentum ex, vitae vulputate dui. Curabitur et sagittis tellus. Maecenas porta mauris eu erat tincidunt tempor. Quisque eros enim, volutpat sed suscipit vitae, sodales vel tortor.</p>', 'noimage.jpg', '2017-08-28 19:40:46'),
(14, 1, 1, 'asdas', 'asdas', '<p>asd</p>', '7ml.png', '2017-08-28 19:41:00'),
(17, 1, 1, 'zzzz', 'zzzz', '<p>zzzzzzzz</p>', 'steve.jpg', '2017-08-28 19:40:31'),
(18, 2, 1, 'post Two', 'post-Two', '<p>Nulla laoreet justo vitae enim egestas consequat. Mauris eu sapien in metus porttitor elementum. Morbi ullamcorper rutrum eros non elementum. Aenean et augue tincidunt, vestibulum elit eget, semper sapien. Phasellus finibus nisl in sapien laoreet semper. Aenean tempus eros libero, nec sodales enim convallis tempus. Suspendisse lacinia placerat elit, vel pellentesque justo accumsan in. Donec commodo nisl eu arcu mollis consectetur.</p><p>Donec finibus est sit amet ligula venenatis, a feugiat turpis lobortis. Aliquam scelerisque nisl ex, et suscipit lorem varius vitae. Cras a ipsum eros. Aenean non dui at augue luctus iaculis eu accumsan ante. Nulla tempus elementum rutrum. Proin accumsan nibh vitae vehicula vulputate. Fusce malesuada faucibus convallis. Cras tellus odio, laoreet nec molestie sed, placerat ut tortor. Morbi pretium, libero eget ultrices ullamcorper, augue metus semper diam, id venenatis sapien velit vitae dui. Cras porttitor ipsum at congue egestas. Phasellus vulputate magna at est condimentum, et mattis libero dapibus. Proin mollis suscipit leo, in pellentesque metus. Nulla nulla orci, bibendum ut tempor sit amet, blandit a neque. Sed diam massa, pharetra vel egestas nec, suscipit nec nibh.</p>', 'leah.jpg', '2017-08-28 19:41:05'),
(22, 2, 1, 'post six', 'post-six', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec imperdiet, lacus in mollis blandit, lectus ex luctus justo, non mattis risus risus et sem. Vivamus suscipit mauris et est porta suscipit. Integer nec metus erat. Nam eget luctus nulla, id fringilla magna. Quisque consectetur justo eget venenatis consectetur. Quisque at velit dignissim, accumsan elit quis, ullamcorper felis. Nunc ac dignissim massa, a imperdiet urna. Duis et eros at nunc viverra mollis a at odio. In tempor at nibh id tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec nec nunc a enim suscipit rhoncus in nec orci. Proin et hendrerit nisi. Praesent quis lectus a mauris sodales eleifend. Duis vestibulum, odio sed sodales varius, ex arcu dignissim tellus, a tincidunt risus urna quis tellus. Donec ac leo ut justo ultricies fringilla. Donec eget dignissim libero.</p><p>Nulla laoreet justo vitae enim egestas consequat. Mauris eu sapien in metus porttitor elementum. Morbi ullamcorper rutrum eros non elementum. Aenean et augue tincidunt, vestibulum elit eget, semper sapien. Phasellus finibus nisl in sapien laoreet semper. Aenean tempus eros libero, nec sodales enim convallis tempus. Suspendisse lacinia placerat elit, vel pellentesque justo accumsan in. Donec commodo nisl eu arcu mollis consectetur.</p>', 'mic.jpg', '2017-08-28 19:41:16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `zipcode` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `register_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `zipcode`, `email`, `username`, `password`, `register_created`) VALUES
(1, 'Michael Markos', '1235', 'michaelmarkos22@gmail.com', 'michael', '827ccb0eea8a706c4c34a16891f84e7b', '2017-08-27 19:15:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barcode`
--
ALTER TABLE `barcode`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
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
-- AUTO_INCREMENT for table `barcode`
--
ALTER TABLE `barcode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
