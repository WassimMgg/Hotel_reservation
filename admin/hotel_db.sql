-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2024 at 04:01 PM
-- Server version: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username_ad` varchar(255) NOT NULL,
  `email_ad` varchar(255) NOT NULL,
  `password_ad` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id_C` int(11) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `Feedback` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id_C`, `phone_number`, `Email`, `fullname`, `Feedback`) VALUES
(1, '0792214324', 'mgg@gmail.com', 'wassim', 'Hello world');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id_Res` int(11) NOT NULL,
  `fullname_res` varchar(255) NOT NULL,
  `date_reservation` date NOT NULL,
  `card_number` int(11) NOT NULL,
  `cvv` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_room` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id_Res`, `fullname_res`, `date_reservation`, `card_number`, `cvv`, `id_user`, `id_room`) VALUES
(1, 'wassim', '2024-05-26', 123456789, 111, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id_room` int(11) NOT NULL,
  `room_name` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `Description` text NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id_room`, `room_name`, `price`, `Description`, `image`) VALUES
(1, 'Deluxe Room', 4500, 'Enjoy a luxurious stay in our Deluxe room, which offers a spacious area filled with plush furnishing and elegant décor. It comes complete with a large comfortable bed, modern ensuite bathroom, flat-screen television, coffee maker, and a stunning view of the city from the high-rise window. Perfect for both relaxation and working, it includes a well-lit desk area.', 'room (1).jpg'),
(2, 'Standard Room', 2525, 'Ideal for budget-conscious travelers looking for comfort and convenience. Our Standard Room offers cozy lodging with a comfortable queen-sized bed, an ensuite bathroom, a working desk and chair, and a flat-screen TV. Despite the compact size, the room does not compromise on the amenities or the comfort it provides.', 'room (3).jpg'),
(3, 'Junior Suite', 2000, 'Step into a world of leisure and sophistication in our Junior Suite that promises a stay filled with comfort. This spacious suite features a separate living area to entertain guests or to relax after a long day, a bedroom with a plush king-sized bed, and a lavish bathroom equipped with top-of-the-line toiletries. Its vast windows overlook the beautiful city landscape.', 'room (4).jpg'),
(4, 'Family Room', 5000, 'Our Family Room is designed to comfortably accommodate families. The room features two double beds, a spacious living area, ensuite bathroom fully equipped with necessities and a flat-screen TV. Decorated with warm tones and comfortable furniture, this room offers a relaxing atmosphere for the whole family to enjoy.', 'room (7).jpg'),
(5, 'Executive Suite', 10000, 'Experience the pinnacle of luxury in our Executive Suite. This expansive suite comes with a separate living and dining area, a master bedroom with a king-sized bed, and an extravagant bathroom with a whirlpool tub. In-room amenities include a state-of-the-art entertainment system, high-speed internet, and a mini-bar. The floor-to-ceiling windows offer a panoramic view of the city skyline, providing an ultra-luxurious stay for our guests.', 'room (9).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `last_name`, `first_name`, `username`, `email`, `password`, `phone`) VALUES
(1, 'mgg', 'wassim', 'wassimmgg', 'meguellatiwassim1@gmail.com', '$2y$10$.36vLUtj7Xlyq5FoWx6KZ./QGsFk1bu4JIMUtYTJUDWuTzlJQYXfK', '0792214324'),
(4, 'bezazi', 'ahmed', 'bezboz', 'simoootkboy@gmail.com', '$2y$10$qlOnWv3vI0W4Np6AGphnJ.NG3kiUaFoBAvgr.jWJ4ugPu/61JYcZ2', '0792214328'),
(12, 'bezazi', 'wassim', 'wassimmgg', 'simoootkboy@gmail.com', '$2y$10$KPTpIERZAO15oZ9nwJgPnOf4EOGv073gJImunBpIjrx.ZcbbfvcGS', '0792214324'),
(13, '', '', '', '', '$2y$10$Em2X9boxWhdxMnnO1vqS8.qvWqOM6sUCMcXUq74Ygfe/TEgob.ycC', ''),
(14, 'bezazi', 'wassim', 'tech.geeks.guelma ', 'simoootkboy@gmail.com', '$2y$10$/8pTFSGkP1ENKllHT4Rvw.WkQWjU9Gm0Xp9d8ZLKtfljui0JvLebe', '0792214328'),
(15, 'bezazi', 'wassim', 'wassimmgg', 'meguellatiwassim1@gmail.com', '$2y$10$m4TtG0n3.Yd6WGGT1v1Y1uQopkGI3vZVvxo6hJmrnzZeIAmwukts.', '0792214324');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id_C`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id_Res`),
  ADD KEY `id_room` (`id_room`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id_room`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id_C` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id_Res` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id_room` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
