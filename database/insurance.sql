-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2020 at 06:32 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `insurance`
--

-- --------------------------------------------------------

--
-- Table structure for table `brandlogo`
--

CREATE TABLE `brandlogo` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `short_desc` varchar(250) NOT NULL,
  `update_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brandlogo`
--

INSERT INTO `brandlogo` (`id`, `title`, `image`, `short_desc`, `update_date`) VALUES
(2, 'dcfv ', 'http://localhost/insurance/upload/brands/media-1590407758.jpg', 'nuihio', '0000-00-00 00:00:00'),
(3, 'dnc iozd', 'http://localhost/insurance/upload/brands/media-1590407775.jpg', 'nuihio', '0000-00-00 00:00:00'),
(4, 'dcfv ', 'http://localhost/insurance/upload/brands/media-1590407792.jpg', 'desc', '0000-00-00 00:00:00'),
(5, 'dnc iozd', 'http://localhost/insurance/upload/brands/media-1590407807.jpg', 'nuihio', '0000-00-00 00:00:00'),
(6, 'fxcbg', 'http://localhost/insurance/upload/brands/media-1590407824.jpg', 'nuihibgbo', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `car_brand`
--

CREATE TABLE `car_brand` (
  `id` int(11) NOT NULL,
  `brand_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `car_brand`
--

INSERT INTO `car_brand` (`id`, `brand_name`) VALUES
(1, 'bmw'),
(2, 'audi');

-- --------------------------------------------------------

--
-- Table structure for table `car_details`
--

CREATE TABLE `car_details` (
  `id` int(11) NOT NULL,
  `registration_no` varchar(11) NOT NULL,
  `maufacturer_id` int(11) NOT NULL,
  `modal_id` int(11) NOT NULL,
  `fuel_type` varchar(250) NOT NULL,
  `variant_id` int(11) NOT NULL,
  `registration_year` int(11) NOT NULL,
  `policy_expire` varchar(250) NOT NULL,
  `prev_policy` varchar(250) NOT NULL,
  `prev_insurer` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `car_details`
--

INSERT INTO `car_details` (`id`, `registration_no`, `maufacturer_id`, `modal_id`, `fuel_type`, `variant_id`, `registration_year`, `policy_expire`, `prev_policy`, `prev_insurer`) VALUES
(1, 'sdgfdh', 1, 1, 'Opera', 1, 2019, 'Opera', 'Firefox', 'Firefox'),
(2, 'asdfdg', 2, 2, 'Chrome', 2, 2019, 'Firefox', 'Firefox', 'Firefox');

-- --------------------------------------------------------

--
-- Table structure for table `car_model`
--

CREATE TABLE `car_model` (
  `id` int(11) NOT NULL,
  `model_name` varchar(250) NOT NULL,
  `brand_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `car_model`
--

INSERT INTO `car_model` (`id`, `model_name`, `brand_id`) VALUES
(1, 'Sedan', 1),
(2, 'prime sedan', 2),
(3, 'suv', 1);

-- --------------------------------------------------------

--
-- Table structure for table `car_variant`
--

CREATE TABLE `car_variant` (
  `id` int(11) NOT NULL,
  `variant_name` varchar(250) NOT NULL,
  `model_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `car_variant`
--

INSERT INTO `car_variant` (`id`, `variant_name`, `model_id`) VALUES
(1, 'Q7', 1),
(2, 'Audi Z series', 2),
(3, 'A series', 2);

-- --------------------------------------------------------

--
-- Table structure for table `houdinv_social_links`
--

CREATE TABLE `houdinv_social_links` (
  `social_id` int(200) NOT NULL,
  `twitter_url` varchar(250) NOT NULL,
  `facebook_url` varchar(250) NOT NULL,
  `youtube_url` varchar(250) NOT NULL,
  `instagram_url` varchar(250) NOT NULL,
  `pinterest_url` varchar(250) NOT NULL,
  `linkedin_url` varchar(250) NOT NULL,
  `date_time` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `houdinv_social_links`
--

INSERT INTO `houdinv_social_links` (`social_id`, `twitter_url`, `facebook_url`, `youtube_url`, `instagram_url`, `pinterest_url`, `linkedin_url`, `date_time`) VALUES
(1, 'www.twitter.com', 'www.fb.com', 'www.youtube.com', '', '', 'www.linkedin.com', '1590405808');

-- --------------------------------------------------------

--
-- Table structure for table `kelam_gallery`
--

CREATE TABLE `kelam_gallery` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `short_desc` varchar(250) DEFAULT NULL,
  `update_date` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelam_gallery`
--

INSERT INTO `kelam_gallery` (`id`, `title`, `image`, `short_desc`, `update_date`) VALUES
(40, 'dnc iozd', '', 'desc', '1590404572'),
(41, 'dnc iozd', 'http://localhost/insurance/../upload/brands/media-1590404920.jpg', 'desc', '1590404920'),
(42, 'dcfv ', 'http://localhost/insurance/../upload/brands/media-1590404989.jpg', 'dvcf', '1590404989'),
(43, 'dnc iozd', 'http://localhost/insurance/upload/brands/media-1590405341.jpg', 'nuihio', '1590405341'),
(44, 'noino', 'http://localhost/insurance/upload/brands/media-1590405356.jpg', 'nuihio', '1590405356'),
(45, 'dnc iozd', 'http://localhost/insurance/upload/brands/media-1590405385.png', 'nuihibgbo', '1590405385');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brandlogo`
--
ALTER TABLE `brandlogo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_brand`
--
ALTER TABLE `car_brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_details`
--
ALTER TABLE `car_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_model`
--
ALTER TABLE `car_model`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_variant`
--
ALTER TABLE `car_variant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `houdinv_social_links`
--
ALTER TABLE `houdinv_social_links`
  ADD PRIMARY KEY (`social_id`);

--
-- Indexes for table `kelam_gallery`
--
ALTER TABLE `kelam_gallery`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brandlogo`
--
ALTER TABLE `brandlogo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `car_brand`
--
ALTER TABLE `car_brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `car_details`
--
ALTER TABLE `car_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `car_model`
--
ALTER TABLE `car_model`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `car_variant`
--
ALTER TABLE `car_variant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `houdinv_social_links`
--
ALTER TABLE `houdinv_social_links`
  MODIFY `social_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kelam_gallery`
--
ALTER TABLE `kelam_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
