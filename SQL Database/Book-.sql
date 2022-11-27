-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 27, 2022 at 06:27 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Book`
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
(6, 'admin', 'admin', 'admin', 'admin@gmail.com', '$2y$10$RfjM8sWP8ESl8ZKUE8mIm.e29FSAR2XDVWcXjeQ47kWNabVd1bpy.', 'USA', '12345678', 'image/63780e564c4ca2.11252423profile.jpeg', '2022-03-15');

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
(6, 'Charlotte&#039;s Web', '8', 'Children Book', 'Garth Williams', 'Charlotte\'s Web is a book of children\'s literature by American author E. B. White and illustrated by Garth Williams; it was published on October 15, 1952, by Harper & Brothers. The novel tells the story of a livestock pig named Wilbur and his friendship with a barn spider named Charlotte.', 'jerry@gmail.com', 'image/63785a7baa2854.88499200625962d24ad2b4.686600871603897574-image32-1.webp', '2022-11-19 04:24:27'),
(8, 'It Starts with Us', '10.98', 'Novel', 'Coollen Hoover', 'Lily and her ex-husband, Ryle, have just settled into a civil coparenting rhythm when she suddenly bumps into her first love, Atlas, again. After nearly two years separated, she is elated that for once, time is on their side, and she immediately says yes when Atlas asks her on a date.', 'ahmed.iliyaz96@gmail.com', 'image/6382aea0b63c05.48669426book1.png', '2022-11-27 06:26:08'),
(9, 'Harry Potter and the Order of the Phoenix', '32.99', 'Adventure', 'J.K. Rowling', 'There is a door at the end of a silent corridor. And it\'s haunting Harry Potter\'s dreams. Why else would he be waking in the middle of the night, screaming in terror? It\'s not just the upcoming O.W.L. exams; a new teacher with a personality like poisoned honey; a venomous, disgruntled house-elf; or even the growing threat of He-Who-Must-Not-Be-Named. Now Harry Potter is faced with the unreliability of the very government of the magical world and the impotence of the authorities at Hogwarts. Despite this (or perhaps because of it), he finds depth and strength in his friends, beyond what even he knew; boundless loyalty; and unbearable sacrifice.', 'ahmed.iliyaz96@gmail.com', 'image/6382af737ea793.88237257harry.jpg', '2022-11-27 06:29:39'),
(10, 'Fairy Tale', '16.25', 'Adventure', 'Stephen King', 'Legendary storyteller Stephen King goes into the deepest well of his imagination in this spellbinding novel about a seventeen-year-old boy who inherits the keys to a parallel world where good and evil are at war, and the stakes could not be higher—for that world or ours.', 'ahmed.iliyaz96@gmail.com', 'image/6382b09a984048.93732368fairy.jpg', '2022-11-27 06:34:34'),
(11, 'Cat Kid Comic Club', '8.98', 'Graphic Novel', 'Dav Pilkey', 'The Cat Kid Comic Club learns to collaborate in this creative, funny, and insightful graphic novel by Dav Pilkey, the author and illustrator of Dog Man.\r\nExcitement and imagination run wild as Naomi, Melvin, Poppy, Gilbert, Curly, and their siblings get back to making comics with originality and laughter. But wait -- have they cleaned their rooms yet?!', 'ahmed.iliyaz96@gmail.com', 'image/6382b8ee0ba801.97036430cat1.jpg', '2022-11-27 07:10:06'),
(12, 'The Boys from Biloxi: A Legal Thriller', '14.97', 'Thriller', 'John Grisham', 'John Grisham returns to Mississippi with the riveting story of two sons of immigrant families who grow up as friends, but ultimately find themselves on opposite sides of the law. Grisham’s trademark twists and turns will keep you tearing through the pages until the stunning conclusion.\r\n\r\nFor most of the last hundred years, Biloxi was known for its beaches, resorts, and seafood industry. But it had a darker side. It was also notorious for corruption and vice, everything from gambling, prostitution, bootleg liquor, and drugs to contract killings. The vice was controlled by small cabal of mobsters, many of them rumored to be members of the Dixie Mafia.', 'ahmed.iliyaz96@gmail.com', 'image/6382d58fa07d30.17336895john.jpg', '2022-11-27 09:12:15'),
(13, 'Ugly Love: A Novel', '10', 'Novel', 'Coollen Hoover', 'From Colleen Hoover, the #1 New York Times bestselling author of It Starts with Us and It Ends with Us, aheart-wrenching love story that proves attraction at first sight can be messy.\r\n\r\nWhen Tate Collins meets airline pilot Miles Archer, she doesn\'t think it\'s love at first sight. They wouldn’t even go so far as to consider themselves friends. The only thing Tate and Miles have in common is an undeniable mutual attraction. Once their desires are out in the open, they realize they have the perfect set-up. He doesn’t want love, she doesn’t have time for love, so that just leaves the sex. Their arrangement could be surprisingly seamless, as long as Tate can stick to the only two rules Miles has for her.', 'ahmed.iliyaz96@gmail.com', 'image/6382d658aceac0.15594094ugly.jpg', '2022-11-27 09:15:36'),
(14, 'The Seven Husbands of Evelyn Hugo', '9.42', 'Novel', 'Tailor Jenkins Reid', 'From the New York Times bestselling author of Daisy Jones & the Six—an entrancing and “wildly addictive journey of a reclusive Hollywood starlet” (PopSugar) as she reflects on her relentless rise to the top and the risks she took, the loves she lost, and the long-held secrets the public could never imagine.\r\n\r\nAging and reclusive Hollywood movie icon Evelyn Hugo is finally ready to tell the truth about her glamorous and scandalous life. But when she chooses unknown magazine reporter Monique Grant for the job, no one is more astounded than Monique herself. Why her? Why now?', 'ahmed.iliyaz96@gmail.com', 'image/6382d6f41a4eb2.019114327.jpg', '2022-11-27 09:18:12'),
(15, 'True Crime Case Histories : 36 Disturbing True Crime Stories', '25', 'Documentary', 'Jason Neal', 'A quick word of warning. The true crime short stories within this three book collection are unimaginably gruesome. I start all of my True Crime books with a quick word of warning. Most news articles and television true crime shows skim over the vile details of truly horrible crimes. In my books I don’t gloss over the facts, regardless of how disgusting they may be. I try to give my readers a clear and accurate description on just how demented the killers really were. I do my best not to leave anything out. \r\n\r\nThe stories included in these books are not for the squeamish.What you are about to read are Volumes 4, 5, and 6 of the True Crimes Case Histories Series. The stories in this collection will make you realize just how fragile the human mind can be.', 'ahmed.iliyaz96@gmail.com', 'image/6382d837149e77.78356177crimials.jpg', '2022-11-27 09:23:35'),
(16, 'Non-Violent Resistance (Satyagraha)', '12.69', 'Documentary', 'M.K. Gandhi', 'Mohandas Gandhi gained the deep respect and admiration of people worldwide with both his unwavering struggle for truth and justice and his philosophy of non-violent resistance — a philosophy that led India to independence and that was later taken up by the American civil rights movement. \r\nThis volume presents Gandhi\'s own clear and consistent vision of that philosophy, which he calls Satyagraha — literally, \"holding on to the truth.\" Through Satyagraha, one brings about change by appealing to the reason and conscience of the opponent and puts an end to evil by converting the evil-doer.', 'ahmed.iliyaz96@gmail.com', 'image/6382d931eccc23.10111896Mahatma.jpg', '2022-11-27 09:27:45'),
(17, 'Understanding Photojournalism', '33', 'Education', 'Gennifer Good | Paul Lowe', 'Understanding Photojournalism explores the interface between theory and practice at the heart of photojournalism, mapping out the critical questions that photojournalists and picture editors consider in their daily practice and placing these in context. Outlining the history and theory of photojournalism, this textbook explains its historical and contemporary development; who creates, selects and circulates images; and the ethics, aesthetics and politics of the practice. \r\nCarefully chosen, international case studies represent a cross section of key photographers, practices and periods within photojournalism, enabling students to understand the central questions and critical concepts. Illustrated with a range of photographs and case material, including interviews with contemporary photojournalists, this book is essential reading for students taking university and college courses on photography within a wide range of disciplines and includes an annotated guide to further reading and a glossary of terms to further expand your studies.', 'ahmed.iliyaz96@gmail.com', 'image/6382da6f468756.89102423journalism.jpg', '2022-11-27 09:33:03'),
(18, 'The Pale-Faced Lie: A True Story', '13.49', 'Documentary', 'David Crow', 'A violent ex-con forces his son to commit crimes in this unforgettable memoir about family and survival.\r\n\r\nGrowing up on the Navajo Indian Reservation, David Crow and his three siblings idolized their dad, a self-taught Cherokee who loved to tell his children about his World War II feats. But as time passed, David discovered the other side of Thurston Crow, the ex-con with his own code of ethics that justified cruelty, violence, lies—even murder. Intimidating David with beatings, Thurston coerced his son into doing his criminal bidding. David’s mom, too mentally ill to care for her children, couldn’t protect him.', 'ahmed.iliyaz96@gmail.com', 'image/6382db8966c653.32382379Pale.jpg', '2022-11-27 09:37:45'),
(19, 'National Geographic Kids Dinosaur Atlas', '22.49', 'Childrens Book', 'National Geographics', 'Dig into the amazing world of dinosaurs! This one-of-a-kind atlas from National Geographic is packed with eye-popping illustrations, incredible fossil finds, and fascinating maps custom made for kids by the world leaders in mapmaking and exploration.\r\n\r\nMore than 250 million years ago, our planet looked and felt a lot different from how it does now. The seven separate continents we have today hadn’t yet taken shape. Instead, there was only one “supercontinent” called Pangaea. This was the beginning of the time of the dinosaurs.', 'ahmed.iliyaz96@gmail.com', 'image/6382dd0359e201.51556324Dinosar.jpg', '2022-11-27 09:44:03');

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
  `products` varchar(255) DEFAULT NULL,
  `grand_total` varchar(255) DEFAULT NULL,
  `status` tinyint(2) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `userid`, `country`, `firstname`, `lastname`, `street`, `city`, `county`, `zip`, `email`, `mobile`, `products`, `grand_total`, `status`) VALUES
(3, 4, 'Canada', 'Mike', 'Shayne', '6505 03', 'Toronto', 'Victoria', '12345', 'shayne@gmail.com', '12345678', 'Dr. Seuss\'s Beginner Book,Cat Kid Comic Book,Long Walk to Freedom', '972', 1),
(5, 6, 'Select Country', 'naveed', 'ahmed', '', '', '', '', 'naveed@gmail.com', '', 'Nelson Mandela', '12', 1),
(6, 6, 'Select Country', 'naveed', 'ahmed', '', '', '', '', 'naveed@gmail.com', '', 'Nelson Mandela,Charlotte\'s Web', '20', 1),
(7, 6, 'Select Country', 'naveed', 'ahmed', '', '', '', '', 'naveed@gmail.com', '', 'Nelson Mandela,Charlotte\'s Web', '20', 1),
(8, 6, 'Select Country', 'naveed', 'ahmed', '', '', '', '', 'naveed@gmail.com', '', 'Nelson Mandela,Charlotte\'s Web', '20', 0),
(9, 6, 'Australia', 'naveed', 'ahmed', '2201 Stella St, 30', 'Denton', 'TX', '76201', 'naveed@gmail.com', '', 'Nelson Mandela,Charlotte\'s Web', '20', 0),
(10, 6, 'Select Country', 'naveed', 'ahmed', '', '', '', '', 'naveed@gmail.com', '', 'Nelson Mandela,Charlotte\'s Web', '20', 0),
(11, 6, 'Select Country', 'naveed', 'ahmed', '77', '', '', '', 'naveed@gmail.com', '', 'Nelson Mandela,Charlotte\'s Web', '20', 0),
(12, 6, 'Select Country', 'naveed', 'ahmed', '2201 Stella St, 30', 'Denton', 'TX', '76201', 'naveed@gmail.com', '', 'Nelson Mandela,Charlotte\'s Web', '20', 0),
(13, 6, 'Australia', 'naveed', 'ahmed', '2201 Stella St, 30', 'Denton', 'TX', '76201', 'naveed@gmail.com', '9452082797', 'Nelson Mandela,Charlotte\'s Web', '20', 0),
(14, 6, 'Select Country', 'naveed', 'ahmed', '', '', '', '', 'naveed@gmail.com', '', 'Nelson Mandela,Charlotte\'s Web', '20', 0),
(15, 6, 'Australia', 'naveed', 'ahmed', '2201 Stella St, 30', 'Denton', 'TX', '76201', 'naveed@gmail.com', '8687687687', 'Richdad PoorDad', '24', 0);

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
(12, 'nnn', 'ahmed', 'naveed222@gmail.com', 'india', '1234', '$2y$10$QZvzkrT24ub1ZAVeX9hsO.3rHGw2rikcpfjlLTCNz2.VTvxFrUREK'),
(13, 'naveed', 'nnn', 'naveedma21954@gmail.com', 'United States', '12342', '$2y$10$OBzUao8afZHokgDHG48YYez01lxvuCgZYyCha61uhyJ9hWbU3tjnG'),
(14, 'nnn', 'nnnn', 'naveed@12gmail.com', 'india', '123456', '$2y$10$Y8fPEs3T70RdYPhOkX693uUl3q9t9Vs3l6JT6HMqRdxcrkFgMh5w2');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

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
