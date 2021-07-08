-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3301
-- Generation Time: Jun 17, 2021 at 12:56 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Table structure for table `cms`
--

CREATE TABLE `cms` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cms`
--

INSERT INTO `cms` (`id`, `title`, `description`, `status`, `image`) VALUES
(1, 'Zesty Ginger', 'Our recipe revolves around ginger, a nutritional superfood, for its long list of health benefits. Many cultures around the world use ginger as a remedy for aches, pains and inflammation, as well as aiding digestive, immune and circulatory systems.', 1, 'images/img1.jpg'),
(2, 'Spices & Herbs', 'Functional spices and herbs are then added to the recipe to enhance the ginger flavor and add unique low notes of nice and smooth flavors. Ingredients such as cloves and bay leaves are culinary spices and herbs that have been used in traditional medicine for their reputation in improving digestive and immune health.', 1, 'images/img2.jpg'),
(3, 'Functional Flavors', 'Our recipe revolves around ginger, a nutritional superfood, for its long list of health benefits. Many cultures around the world use ginger as a remedy for aches, pains and inflammation, as well as aiding digestive, immune and circulatory systems.', 1, 'images/img3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact_db`
--

CREATE TABLE `contact_db` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_db`
--

INSERT INTO `contact_db` (`id`, `name`, `email`, `phone`, `message`) VALUES
(1, 'ali', 'aaa@gjmail.com', '3245235', 'sdfs'),
(2, 'Mehdi', 'mehdi@gmail.com', '3245235', 'hello'),
(3, 'Mehdi', 'mehdi@gmail.com', '3245235', 'hello'),
(4, 'Mehdi', 'mehdi@gmail.com', '3245235', 'hello'),
(5, 'Mehdi', 'mehdi@gmail.com', '3245235', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `credentials`
--

CREATE TABLE `credentials` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` int(100) NOT NULL,
  `username` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `credentials`
--

INSERT INTO `credentials` (`id`, `email`, `password`, `username`) VALUES
(1, 'admin@gmail.com', 12345, 'admin'),
(2, 'mehdi@gmail.com', 54321, 'mehdi');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_2`
--

CREATE TABLE `tbl_2` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_2`
--

INSERT INTO `tbl_2` (`id`, `title`, `description`, `status`, `image`) VALUES
(1, 'The Power of Gingerade', 'Blacktumbler Gingerade harnesses the power of ginger, spices and herbs which are naturally rich in functional nutrients and have been used as natural remedies for centuries to treat a wide array of ailments. Their high antioxidant content and nutritional compounds have been known to help with everything from aches and pains to aiding blood circulation, digestive health and immune health.<br><br>\r\nEach bottle of Blacktumbler Gingerade offers:\r\n<br><br>\r\n<ul>\r\n                <li>Healthy and delicious taste.</li>\r\n                <li>Bold, fresh and authentic spicy-herbal-citrus flavors. </li>\r\n                <li>Real ingredients - all natural and non-GMO. </li>\r\n                <li>No artificial sweeteners or flavors.</li>\r\n              </ul>', 1, 'images/ginger.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_3`
--

CREATE TABLE `tbl_3` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_3`
--

INSERT INTO `tbl_3` (`id`, `title`, `price`, `status`, `image`) VALUES
(1, 'BLACK CHERRY 6-PACK (SIX BOTTLES- 16 FL OZ. EACH)', 22.75, 1, 'images/black_tumbler.jpg'),
(2, 'ORIGINAL + BLACK CHERRY VARIETY 6-PACK (SIX BOTTLES - 16 FL OZ. EACH, THREE OF EACH FLAVOR)', 22.75, 1, 'images/black_tumbler_2.jpg'),
(3, 'ORIGINAL GINGERADE 6-PACK (SIX BOTTLES - 16 FL OZ. EACH)', 22.75, 1, 'images/black_tumbler_3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_4`
--

CREATE TABLE `tbl_4` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `date` date NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_4`
--

INSERT INTO `tbl_4` (`id`, `title`, `description`, `status`, `date`, `image`) VALUES
(1, 'The Role of Herbs, Spices, & Fruits In Healthy Lifestyles', 'Why You Should Incorporate All of The Above Into Your Daily Diet It should come as no surprise that the foods that you put into your body – all the...', 1, '2021-06-09', 'images/lates_blog_1.jpg'),
(2, '5 Health Benefits from Drinking Blacktumbler Gingerade', 'More people than ever before are reading up on ways to improve their immunity and overall health in the face of a global pandemic. This year has awakened everyone’s desire to be healthier, more conscious in their consumption, and more holistic in what they are eating.', 1, '2021-06-23', 'images/lates_blog_2.jpg'),
(3, 'Blacktumber: The Healthy Mixer!', 'Try two flavorful mixed drinks built on our two delicious flavors.', 1, '2021-06-15', 'images/lates_blog_3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_5`
--

CREATE TABLE `tbl_5` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `title` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_5`
--

INSERT INTO `tbl_5` (`id`, `image`, `status`, `title`, `description`) VALUES
(6, 'images/slider1.jpg', 1, 'Zesty.Healthy <br> Ginger Goodness.', 'Blacktumbler Gingerade harnesses the power of ginger, spices and herbs which are naturally rich in functional nutrients'),
(7, 'images/slider1.jpg', 1, NULL, NULL),
(8, 'images/slider1.jpg', 1, NULL, NULL),
(10, 'images/slider1.jpg', 1, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cms`
--
ALTER TABLE `cms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_db`
--
ALTER TABLE `contact_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `credentials`
--
ALTER TABLE `credentials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_2`
--
ALTER TABLE `tbl_2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_3`
--
ALTER TABLE `tbl_3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_4`
--
ALTER TABLE `tbl_4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_5`
--
ALTER TABLE `tbl_5`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cms`
--
ALTER TABLE `cms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact_db`
--
ALTER TABLE `contact_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `credentials`
--
ALTER TABLE `credentials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_2`
--
ALTER TABLE `tbl_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_3`
--
ALTER TABLE `tbl_3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_4`
--
ALTER TABLE `tbl_4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_5`
--
ALTER TABLE `tbl_5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
