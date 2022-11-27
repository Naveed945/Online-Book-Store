-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2022 at 06:45 PM
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
-- Database: `book`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `secondname` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `profile` varchar(100) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `firstname`, `secondname`, `username`, `email`, `password`, `location`, `mobile`, `profile`, `date`) VALUES
(6, 'admin', 'admin', 'admin', 'admin@gmail.com', '$2y$10$vDtDte5GCio0IoTw5MeEoO/qDXFE5bviQS8VpPVYel9tCgpFJtp6.', 'USA', '12345678', 'image/63780e564c4ca2.11252423profile.jpeg', '2022-03-15');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `sellername` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `published` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `name`, `amount`, `category`, `author`, `description`, `sellername`, `image`, `published`) VALUES
(1, 'Richdad PoorDad', '24', 'Novel', 'Robert T', '<p>Rich Dad Poor Dad is a 1997 book written by Robert T. Kiyosaki and Sharon Lechter. It advocates the importance of financial literacy, financial independence and building wealth through investing in assets, real estate investing, starting and owning businesses, as well as increasing one&#39;s financial intelligence.</p>', 'admin', 'image/63781d3e0637e5.54627761richdad.webp', '2022-11-18 23:42:57'),
(5, 'Nelson Mandela', '12', 'Documentary', 'nelson', 'Nelson Rolihlahla Mandela was a South African anti-apartheid activist who served as the first president of South Africa from 1994 to 1999. He was the country\'s first black head of state and the first elected in a fully representative democratic election.', 'jerry@gmail.com', 'image/637859cd3551a1.302879846259644b4d36f3.543875301603897588-image2-1.webp', '2022-11-19 04:21:33'),
(6, 'Charlotte&#039;s Web', '8', 'Children Book', 'Garth Williams', 'Charlotte\'s Web is a book of children\'s literature by American author E. B. White and illustrated by Garth Williams; it was published on October 15, 1952, by Harper & Brothers. The novel tells the story of a livestock pig named Wilbur and his friendship with a barn spider named Charlotte.', 'jerry@gmail.com', 'image/63785a7baa2854.88499200625962d24ad2b4.686600871603897574-image32-1.webp', '2022-11-19 04:24:27');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `amount` bigint(255) DEFAULT NULL,
  `total` bigint(255) NOT NULL,
  `type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `image`, `name`, `quantity`, `amount`, `total`, `type`) VALUES
(24, 5, 'image/63781d3e0637e5.54627761richdad.webp', 'Richdad PoorDad', 2, 24, 48, 'cart'),
(26, 5, 'image/637859cd3551a1.302879846259644b4d36f3.543875301603897588-image2-1.webp', 'Nelson Mandela', 2, 12, 24, 'cart');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `productid` int(11) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `secondname` varchar(255) DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `country` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `street` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `county` varchar(255) DEFAULT NULL,
  `zip` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `cardno` varchar(255) NOT NULL,
  `expiry` varchar(255) NOT NULL,
  `cardcode` varchar(255) NOT NULL,
  `products` varchar(255) DEFAULT NULL,
  `grand_total` varchar(255) DEFAULT NULL,
  `status` tinyint(2) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `productname` varchar(255) DEFAULT NULL,
  `productimage` varchar(255) DEFAULT NULL,
  `sellername` varchar(255) DEFAULT NULL,
  `price` bigint(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `productname`, `productimage`, `sellername`, `price`, `location`, `description`) VALUES
(7, 'Charlottes Web Book', 'image/625962d24ad2b4.686600871603897574-image32-1.webp', 'book', 120, 'Australia', 'Charlottes Web is a great reminder to be kind to all living creatures. This magical story takes place on a farm where a little girl tries to save her piglet from slaughter. Fern, the little girl, enlists the help of her farm friends to execute her clever plan.'),
(8, 'Rich Dad Poor Dad', 'image/625963d460ed85.934426171603897576-image24-1.webp', 'book', 300, 'India', 'Rich Dad Poor Dad explains how wealthy people and poorer people think differently. It challenges commonly held beliefs about money and explains how you don’t need to have a high income to become rich.'),
(9, 'Long Walk to Freedom', 'image/6259644b4d36f3.543875301603897588-image2-1.webp', 'book', 400, 'South Africa', 'Lists of must-read biographies almost always include this wonderful book. Mandela started writing this autobiography in prison and finished it right before becoming the president of South Africa. This inspiring story provides a glimpse into the end of apartheid and the blatant inequality in the country.'),
(10, 'Notes from a Small Island', 'image/6259649f9e29a8.941475371603897587-image6-1.webp', 'book', 180, 'Canada', 'In Notes From a Small Island, Bill Bryson shares a hilarious commentary of his jaunt through the United Kingdom – from the center of government at Downing Street, London, to the Loch Ness in the Scottish Highlands.'),
(11, 'Cat Kid Comic Book', 'image/62596602ad9e39.58847995download.jpg', 'comics', 70, 'New York', 'The Cat Kid Comic Club is deep in discovery in the newest graphic novel in the hilarious and heartwarming worldwide bestselling series by Dav Pilkey, the author and illustrator of Dog Man.\r\nThe comic club is going in all different directions! Naomi, Melvin, and siblings are each trying to find their purpose.'),
(12, 'Dr. Seuss\'s Beginner Book', 'image/625966cebb25a0.6576036981FxtWFGiiL.jpg', 'Book', 216, 'Miami', 'Originally created by Dr. Seuss himself, Beginner Books are fun, funny, and easy to read. This unjacketed hardcover early readers encourage children to read all on their own, using simple words and illustrations. Smaller than the classic large format Seuss picture books like The Lorax and Oh, The Places You’ll Go!, these portable packages are perfect for practicing readers ages 3-7—and lucky parents too!');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `location`, `mobile`, `password`) VALUES
(4, 'Mike', 'Shayne', 'shayne@gmail.com', 'Canada', '0123456789', '$2y$10$KmHWBjJJVNGLg4naWCALne4d7MNm2bVa5VsTWJyeYxuOYMh/encA.'),
(5, 'Tom', 'Jerry', 'jerry@gmail.com', NULL, NULL, '$2y$10$bdrvhetdTOGA0BuPwlRQI.9POt1hNnnWnxfWD9Ox39epSyYdIIWEu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`productid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`productid`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
