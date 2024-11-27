-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2023 at 05:38 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `adminId` int(6) NOT NULL,
  `username` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`adminId`, `username`) VALUES
(1, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `requestId` int(11) NOT NULL,
  `First_Name` varchar(32) NOT NULL,
  `Last_Name` varchar(32) NOT NULL,
  `Email` varchar(64) NOT NULL,
  `Mobile` varchar(16) NOT NULL,
  `Message` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`requestId`, `First_Name`, `Last_Name`, `Email`, `Mobile`, `Message`) VALUES
(9, 'jhon', 'Doe', 'johndoe@gmail.com', '071 3254323', 'I am currently a guest at your hotel and I m experiencing an issue with the air conditioning in my room. Could you please send someone to have a look at it?');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `reservation_id` int(3) NOT NULL,
  `username` varchar(32) NOT NULL,
  `room_type` varchar(32) NOT NULL,
  `number_of_rooms` int(3) NOT NULL,
  `number_of_guests` int(3) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `special_requests` varchar(512) NOT NULL,
  `status` varchar(32) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`reservation_id`, `username`, `room_type`, `number_of_rooms`, `number_of_guests`, `checkin`, `checkout`, `special_requests`, `status`) VALUES
(29, 'Ramesh', 'Premium Room', 2, 0, '2023-06-26', '2023-06-28', '', 'Pending'),
(30, 'Ramesh', 'Deluxe Room', 1, 0, '2023-06-30', '2023-07-03', '', 'Accepted'),
(31, 'Nadeesh', 'Premium Room', 3, 0, '2023-07-14', '2023-07-17', '', 'Pending'),
(32, 'Nadeesh', 'Family Room', 2, 0, '2023-07-10', '2023-07-11', '', 'Declined'),
(33, 'Pasindu', 'Suite Room', 1, 0, '2023-06-30', '2023-07-02', '', 'Pending'),
(34, 'Sandeepa', 'Family Room', 1, 0, '2023-06-13', '2023-06-16', '', 'Pending'),
(35, 'Sandeepa', 'Deluxe Room', 2, 0, '2023-07-14', '2023-07-15', '', 'Accepted'),
(36, 'Manuji', 'Suite Room', 1, 0, '2023-07-12', '2023-07-20', '', 'Pending'),
(37, 'Manuji', 'Family Room', 3, 0, '2023-06-16', '2023-06-19', '', 'Accepted');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `reviewId` int(3) NOT NULL,
  `roomId` int(3) NOT NULL,
  `username` varchar(32) NOT NULL,
  `review` varchar(2048) NOT NULL,
  `date` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`reviewId`, `roomId`, `username`, `review`, `date`) VALUES
(24, 89, 'Ramesh', 'The hotel room was immaculately clean and well-appointed. The bed was comfortable, and the linens were fresh. The bathroom was spacious, with a luxurious shower and high-quality toiletries. The room had all the necessary amenities, including a mini-fridge and a coffee maker. The overall ambiance was cozy and inviting, making it a perfect place to relax after a long day.', '11th Jun 2023'),
(28, 91, 'Ramesh', 'Although the hotel room was small, it was efficiently designed and maximized the available space. The bed was comfortable, and the room was clean. The bathroom, although compact, had all the necessary amenities and a good shower. ', '11th Jun 2023'),
(29, 90, 'Pasindu', 'The room had a modern design and was equipped with convenient amenities like a flat-screen TV and a work desk. The bathroom was clean and stocked with plush towels.', '11th Jun 2023'),
(30, 92, 'Pasindu', 'The room had a modern design and was equipped with convenient amenities like a flat-screen TV and a work desk. The bathroom was clean and stocked with plush towels.', '11th Jun 2023'),
(31, 91, 'Pasindu', 'I was disappointed with the hotel room as it did not meet my expectations. The room was outdated and in need of renovation. The bed was uncomfortable, and the furnishings looked worn. The cleanliness was subpar, with visible dust and stains. The bathroom was cramped, and the shower lacked proper water pressure. It was an overall unpleasant experience, and I would not recommend this room to others.', '11th Jun 2023'),
(32, 89, 'Nadeesh', 'The hotel room was spacious and elegantly decorated, creating a luxurious and welcoming atmosphere. The king-sized bed was incredibly comfortable, providing a restful sleep. The room had a separate sitting area with a cozy couch, perfect for relaxation.', '11th Jun 2023'),
(33, 92, 'Nadeesh', 'The room had a separate sitting area with a cozy couch, perfect for relaxation. The bathroom was pristine, with a large bathtub and high-quality bath amenities. The attention to detail and the overall comfort of the room made my stay truly memorable.', '11th Jun 2023'),
(34, 89, 'Sandeepa', 'I was pleasantly surprised by the hotel room stunning view. The floor to ceiling windows offered breathtaking panoramic views of the city skyline and the surrounding landscape. ', '11th Jun 2023'),
(35, 90, 'Sandeepa', 'The hotel room was designed with utmost comfort in mind. The layout was spacious and thoughtfully arranged, allowing for easy movement. The bed was incredibly comfortable, with soft pillows and luxurious linens. The room had ample storage space, including a closet and drawers, making it easy to keep everything organized. The attention to detail in the room design and the thoughtful amenities provided made my stay truly enjoyable.', '11th Jun 2023'),
(36, 90, 'Manuji', 'I was impressed by the hotel room high-tech features. The room had a smart control system that allowed me to adjust the lighting, temperature, and even open and close the curtains with just a touch of a button', '11th Jun 2023'),
(37, 92, 'Manuji', 'The modern amenities, such as a large flat-screen TV and a Bluetooth speaker, added an extra level of convenience and entertainment. It was a seamless integration of technology and comfort, enhancing my overall experience.', '11th Jun 2023');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `roomId` int(6) NOT NULL,
  `roomType` varchar(32) NOT NULL,
  `price` varchar(32) NOT NULL,
  `size` varchar(32) NOT NULL,
  `capacity` varchar(32) NOT NULL,
  `bed` varchar(32) NOT NULL,
  `facilities` varchar(128) NOT NULL,
  `description` varchar(1024) NOT NULL,
  `quantity` int(3) NOT NULL,
  `roomImage` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`roomId`, `roomType`, `price`, `size`, `capacity`, `bed`, `facilities`, `description`, `quantity`, `roomImage`) VALUES
(89, 'Premium Room', '100', '40', 'Max persion 2', 'Queen bed', 'En-suite bathroom, flat-screen TV, mini-fridge, air conditioning, complimentary Wi-Fi', 'Our cozy standard room is perfect for solo travelers or couples looking for a comfortable stay at an affordable price. The room features a comfortable queen bed and all the essential amenities to ensure a pleasant stay.', 10, 'premium-room.jpg'),
(90, 'Family Room', '300', '60', 'Max persion 4', 'King beds', 'En-suite bathroom with a bathtub, separate living area, work desk, flat-screen TV, mini-bar, air conditioning', 'Indulge in luxury and space with our deluxe suite. This spacious suite offers a separate living area, a plush king bed, and a comfortable sofa bed, making it ideal for families or small groups. Enjoy the added convenience of a well-appointed bathroom and a mini-bar for your refreshments.', 5, 'room-2.jpg.webp'),
(91, 'Deluxe Room', '250', '40', 'Max persion 2', 'Double Beds', 'En-suite bathroom with a rain shower, work desk, lounge chair, flat-screen TV, mini-fridge, air conditioning', 'Experience elegance and comfort in our executive room. The room features a spacious king bed, a modern bathroom with a rejuvenating rain shower, and a well-designed workspace. Unwind in the cozy lounge chair or catch up on your favorite shows on the flat-screen TV.', 15, 'room-3.jpg.webp'),
(92, 'Suite Room', '450', '70', 'Max persion 6', 'Two queen beds and a sofa bed', 'Two en-suite bathrooms, separate living area, dining table, kitchenette, flat-screen TVs, mini-fridge, air conditioning', 'Our family suite offers ample space and comfort for larger groups. With two separate bedrooms featuring queen beds and a sofa bed in the living area, this suite can accommodate up to six guests. Enjoy the convenience of two bathrooms, a kitchenette, and a designated dining area for a homely stay.', 5, 'suite.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(6) NOT NULL,
  `username` varchar(32) NOT NULL,
  `first_name` varchar(32) NOT NULL,
  `last_name` varchar(32) NOT NULL,
  `email` varchar(64) NOT NULL,
  `phone_number` varchar(16) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `first_name`, `last_name`, `email`, `phone_number`, `password`) VALUES
(5, 'Nadeesh', 'Nadeesh', 'Nimsara', 'nadeesh@gmail.com', '0765377185', 'Nadeesh123'),
(18, 'Admin', 'Admin', 'Admin', 'Admin@gmail.com', '0765377185', 'Admin123'),
(19, 'Ramesh', 'Anju', 'Ramesh', 'ramesh@gmail.com', '0765376175', 'Ramesh123'),
(20, 'Pasindu', 'Pasindu', 'Dilshan', 'pasindu@gmail.com', '0745377235', 'Pasindu123'),
(21, 'Sandeepa', 'Sandeea', 'Samarasooriya', 'sandeepa@gmail.com', '0726487185', 'Sandeepa123'),
(22, 'Manuji', 'Manuji', 'Weerasinghe', 'manuji@gmail.com', '0742346735', 'Manuji123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`requestId`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`reservation_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`reviewId`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`roomId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `adminId` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `requestId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `reservation_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `reviewId` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `roomId` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
