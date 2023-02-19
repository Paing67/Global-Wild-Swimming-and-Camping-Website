-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 19, 2023 at 02:36 AM
-- Server version: 5.7.34
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gwsc_pkm`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `product` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `name`, `email`, `product`, `quantity`) VALUES
(2, 'mg mg', 'kyawg@gmail.com', 'M-001', '1'),
(3, 'mg mg', 'kyawg@gmail.com', 'M-001', '1'),
(4, 'Paing', 'paing@gmail.com', 'TC-001', '2'),
(5, 'Peter', 'peter@gmail.com', 'TC-002', '3'),
(6, 'John ', 'John@gmail.com', 'M-001', '2'),
(7, 'Joe', 'Joe@yahoo.com', 'TC-002', '1'),
(8, 'Bella', 'bella@gmail.com', 'TC-002', '4');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `c_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `c_name`) VALUES
(1, 'tent'),
(2, 'motorhome'),
(3, 'tourcaravan');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `address`, `message`) VALUES
(1, 'Michael', 'michael@gmail.com', '12 Main St', 'I want to inquire a motorhome pitch.'),
(2, 'Peter', 'peter@gmail.com', '10th St', 'I want to know more about your motor pitches.'),
(3, 'John', 'John@gmail.com', '2nd St. ', 'Can I know more about your campsites?'),
(4, 'Paing', 'paing@gmail.com', '17th St', 'Does your campsite allow pets? '),
(5, 'Hla Hla', 'hlahla@gmail.com', '16th St', 'What would you recommend for pitches for 15 people camping?'),
(6, 'Kyaw G', 'kyawg@gmail.com', '6th St.', 'Can I know more about your Bagan camp site?'),
(7, 'Ana', 'ana@gmail.com', '17th St', 'Recommendation campsite for near Yangon?');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `stock` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `image`, `name`, `price`, `description`, `stock`, `category_id`) VALUES
(1, 'tent1.jpg', 'GWSC Tent T-001', '$25', 'Made from durable materials and designed with ease of use in mind, our tent pitch is easy to set up and will provide you with a stable and secure base for your tent.', 'Instock', 1),
(2, 'tent2.jpg', 'GWSC Tent T-002', '$30', 'Made with durable, weather-resistant materials, this pitch provides a secure and comfortable shelter for your tent. With a spacious and level surface, you\'ll have plenty of room to set up camp and enjoy the great outdoors.\r\n                    ', 'Instock', 1),
(3, 'motorhome1.jpg', 'GWSC Motorhome M-001', '$340', 'Introducing our premium motorhome pitch, the perfect choice for anyone who loves to travel in style and comfort! Our motorhome pitch is designed to provide you with all the space and amenities you need to enjoy your trip, no matter where you go.', 'Instock', 2),
(4, 'motorhom2.jpg', 'GWSC Motorhome M-002', '$375', 'Introducing our top-quality motorhome pitch, the perfect addition to any camping trip! Our motorhome pitch is designed to provide you with a comfortable and secure space to park your motorhome and enjoy camping experience.', 'Instock', 2),
(5, 'van1.jpg', 'GWSC Caravan V-001', '$340', 'Introducing our top-of-the-line touring caravan, the perfect choice for anyone who loves to travel and explore the great outdoors! Our touring caravan is designed to provide you with all the comfort and convenience of home with a fully-equipped kitchen.', 'Instock', 3),
(6, 'van2.jpg', 'GWSC Caravan V-002', '$280', 'With a spacious interior and all the amenities you need, our touring caravan is the perfect choice for families, couples, and solo travelers alike. From a fully-equipped kitchen to a comfortable sleeping area, our touring caravan has everything you need.', 'Instock', 3);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `name`, `location`, `comment`) VALUES
(1, 'Paing', 'The Alps', 'The best site I\'ve ever camped.'),
(2, 'Michael', 'Mount Cook National Park', 'Recommended Place for camping.'),
(3, 'Peter', 'Simien Mountains Traverse', 'Every who loves hiking should visit this place.'),
(4, 'Hla Hla', 'Bagan', 'Camping enthusiast who loves historic places should visit this place.'),
(5, 'John', 'The Toubkal Circuit', 'The best hiking place.'),
(6, 'Onana', 'Mount Cook National Park', 'The best place I\'ve ever visited.'),
(7, 'Ana', 'The Alps', 'Have a wonderful experience with this camp.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user',
  `type` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `pass`, `country`, `role`, `type`) VALUES
(1, 'Paing Khant Min', 'admin@gmail.com', 'admin123456\r\n                            ', 'Myanmar', 'admin', 0),
(2, 'Peter', 'peter@gmail.com', 'peter123456', 'USA', 'user', 1),
(3, 'Hery', 'hery@gmail.com', 'hery123456', 'Canada', 'user', 1),
(4, 'Emily', 'emily@gmail.com', 'emily123456', 'Canada', 'user', 1),
(5, 'Shen', 'shen@gmail.com', 'shen123456', 'China', 'user', 1),
(6, 'Hla Hla', 'hlahla@gmail.com', 'hlahla123456', 'USA', 'user', 1),
(7, 'Michael', 'michael@gmail.com', 'michael123456', 'Myanmar', 'user', 1),
(8, 'Paing', 'paing@gmail.com', 'paing123456', 'Myanmar', 'admin', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id fr` (`category_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `category_id fr` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
