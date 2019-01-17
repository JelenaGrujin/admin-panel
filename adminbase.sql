-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2019 at 06:19 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adminbase`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_location_1`
--

CREATE TABLE `data_location_1` (
  `id_location_1` int(11) NOT NULL,
  `name_location_1` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_location_1`
--

INSERT INTO `data_location_1` (`id_location_1`, `name_location_1`) VALUES
(1, 'Location a'),
(3, 'Location b'),
(5, 'Location c');

-- --------------------------------------------------------

--
-- Table structure for table `data_location_2`
--

CREATE TABLE `data_location_2` (
  `id_location_2` int(11) NOT NULL,
  `name_location_2` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_location_2`
--

INSERT INTO `data_location_2` (`id_location_2`, `name_location_2`) VALUES
(5, 'Loc 3'),
(7, 'loc');

-- --------------------------------------------------------

--
-- Table structure for table `data_location_3`
--

CREATE TABLE `data_location_3` (
  `id_location_3` int(11) NOT NULL,
  `name_location_3` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_location_3`
--

INSERT INTO `data_location_3` (`id_location_3`, `name_location_3`) VALUES
(1, 'loc a'),
(2, 'loc b'),
(3, 'loc c');

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE `equipment` (
  `id_equipment` int(11) NOT NULL,
  `name_equipment` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipment`
--

INSERT INTO `equipment` (`id_equipment`, `name_equipment`) VALUES
(1, '1'),
(2, '2'),
(3, '3'),
(4, '0');

-- --------------------------------------------------------

--
-- Table structure for table `owners`
--

CREATE TABLE `owners` (
  `id_owner` int(11) NOT NULL,
  `data_insert` varchar(11) NOT NULL,
  `data_update` varchar(11) NOT NULL,
  `owner_name` varchar(20) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `phone_1` varchar(13) NOT NULL,
  `e_mail` varchar(50) NOT NULL,
  `source` varchar(20) NOT NULL,
  `b_day` varchar(10) NOT NULL,
  `title` varchar(20) NOT NULL,
  `owner_type` varchar(20) NOT NULL,
  `owner_address` varchar(50) NOT NULL,
  `e_mail_owner` varchar(50) NOT NULL,
  `name_3` varchar(20) NOT NULL,
  `phone_3` varchar(13) NOT NULL,
  `e_mail_3` varchar(50) NOT NULL,
  `name_4` varchar(30) NOT NULL,
  `phone_4` varchar(13) NOT NULL,
  `e_mail_4` varchar(50) NOT NULL,
  `name_5` varchar(30) NOT NULL,
  `phone_5` varchar(13) NOT NULL,
  `e_mail_5` varchar(50) NOT NULL,
  `name_6` varchar(30) NOT NULL,
  `phone_6` varchar(13) NOT NULL,
  `e_mail_6` varchar(50) NOT NULL,
  `name_7` varchar(30) NOT NULL,
  `phone_7` varchar(13) NOT NULL,
  `e_mail_7` varchar(50) NOT NULL,
  `name_8` varchar(30) NOT NULL,
  `phone_8` varchar(13) NOT NULL,
  `e_mail_8` varchar(50) NOT NULL,
  `name_9` varchar(30) NOT NULL,
  `phone_9` varchar(13) NOT NULL,
  `e_mail_9` varchar(50) NOT NULL,
  `company_name` varchar(30) NOT NULL,
  `tin` int(13) NOT NULL,
  `company_num` int(6) NOT NULL,
  `activity_code` int(4) NOT NULL,
  `company_adres` varchar(50) NOT NULL,
  `responsible_person` varchar(50) NOT NULL,
  `id_num` int(6) NOT NULL,
  `UMCN` int(13) NOT NULL,
  `agent` varchar(20) NOT NULL,
  `type_owner` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `owners`
--

INSERT INTO `owners` (`id_owner`, `data_insert`, `data_update`, `owner_name`, `phone`, `phone_1`, `e_mail`, `source`, `b_day`, `title`, `owner_type`, `owner_address`, `e_mail_owner`, `name_3`, `phone_3`, `e_mail_3`, `name_4`, `phone_4`, `e_mail_4`, `name_5`, `phone_5`, `e_mail_5`, `name_6`, `phone_6`, `e_mail_6`, `name_7`, `phone_7`, `e_mail_7`, `name_8`, `phone_8`, `e_mail_8`, `name_9`, `phone_9`, `e_mail_9`, `company_name`, `tin`, `company_num`, `activity_code`, `company_adres`, `responsible_person`, `id_num`, `UMCN`, `agent`, `type_owner`) VALUES
(9, '', '', 'busudfhfd', '123145', '0', 'saefq@sadf.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', 0, 0, '', 'corporate'),
(10, '', '', '', '114654', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', 0, 0, '', 'corporate'),
(11, '', '', '', '16156', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', 0, 0, '', 'corporate');

-- --------------------------------------------------------

--
-- Table structure for table `owners_doc`
--

CREATE TABLE `owners_doc` (
  `id_doc` int(11) NOT NULL,
  `name_doc` varchar(50) NOT NULL,
  `id_owner` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `owners_doc`
--

INSERT INTO `owners_doc` (`id_doc`, `name_doc`, `id_owner`) VALUES
(1, 'bsidfb.pdf', 9);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id_products` int(11) NOT NULL,
  `id_euro` int(11) NOT NULL,
  `date_insert` varchar(11) NOT NULL,
  `date_update` varchar(11) NOT NULL,
  `location_data_1` varchar(30) NOT NULL,
  `location_data_2` varchar(30) NOT NULL,
  `location_data_3` varchar(30) NOT NULL,
  `addres_location` varchar(130) NOT NULL,
  `adres_num` varchar(5) NOT NULL,
  `number` varchar(5) NOT NULL,
  `object` varchar(30) NOT NULL,
  `flors` int(3) NOT NULL,
  `of_flors` int(3) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `min_price` decimal(8,2) NOT NULL,
  `deposit` decimal(8,2) NOT NULL,
  `commission` int(3) NOT NULL,
  `payment` varchar(30) NOT NULL,
  `square` int(5) NOT NULL,
  `surface_area` int(5) NOT NULL,
  `equipment` varchar(20) NOT NULL,
  `celing_height` float NOT NULL,
  `structure` float NOT NULL,
  `heating` varchar(30) NOT NULL,
  `carpentry` varchar(30) NOT NULL,
  `kitchen` varchar(15) NOT NULL,
  `num_rooms` float NOT NULL,
  `num_bath` int(3) NOT NULL,
  `num_wc` int(3) NOT NULL,
  `num_terrace` int(3) NOT NULL,
  `level` int(3) NOT NULL,
  `salon_m` int(4) NOT NULL,
  `security` varchar(30) NOT NULL,
  `num_elevator` int(2) NOT NULL,
  `construc_year` int(4) NOT NULL,
  `num_air_con` int(3) NOT NULL,
  `num_garages` int(3) NOT NULL,
  `note` varchar(30) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `active` varchar(8) NOT NULL,
  `active_data` varchar(11) NOT NULL,
  `info` varchar(20) NOT NULL,
  `electricity` varchar(20) NOT NULL,
  `network` varchar(20) NOT NULL,
  `maintenance` varchar(20) NOT NULL,
  `accessories` varchar(30) NOT NULL,
  `garage` varchar(30) NOT NULL,
  `provider` varchar(30) NOT NULL,
  `type_terrace` varchar(30) NOT NULL,
  `type_bath` varchar(30) NOT NULL,
  `product_type` varchar(20) NOT NULL,
  `business_status` varchar(20) NOT NULL,
  `id_owner` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id_products`, `id_euro`, `date_insert`, `date_update`, `location_data_1`, `location_data_2`, `location_data_3`, `addres_location`, `adres_num`, `number`, `object`, `flors`, `of_flors`, `price`, `min_price`, `deposit`, `commission`, `payment`, `square`, `surface_area`, `equipment`, `celing_height`, `structure`, `heating`, `carpentry`, `kitchen`, `num_rooms`, `num_bath`, `num_wc`, `num_terrace`, `level`, `salon_m`, `security`, `num_elevator`, `construc_year`, `num_air_con`, `num_garages`, `note`, `description`, `active`, `active_data`, `info`, `electricity`, `network`, `maintenance`, `accessories`, `garage`, `provider`, `type_terrace`, `type_bath`, `product_type`, `business_status`, `id_owner`) VALUES
(8, 0, '22-12-2018', '', 'Location b', '2', 'loc b', 'name', '132', '132', '2', 4564, 63565, '45644.00', '0.00', '0.00', 0, '', 0, 0, '', 0, 0, '', '', '', 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 9),
(9, 0, '23-12-2018', '', 'Location a', '2', 'loc b', 'buig', '23', '5646', '2', 216, 1616, '646.00', '0.00', '0.00', 0, '', 0, 0, '', 0, 0, '', '', '', 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 10),
(10, 0, '23-12-2018', '', 'Location b', '2', 'loc b', 'vyivgfy', '154', '1516', '2', 545, 45646, '456.00', '0.00', '0.00', 0, '', 0, 0, '', 0, 0, '', '', '', 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 11);

-- --------------------------------------------------------

--
-- Table structure for table `products_photos`
--

CREATE TABLE `products_photos` (
  `id_photo` int(11) NOT NULL,
  `name_photo` varchar(50) NOT NULL,
  `id_products` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products_photos`
--

INSERT INTO `products_photos` (`id_photo`, `name_photo`, `id_products`) VALUES
(1, '9Chrysanthemum.jpg', 9),
(2, '9Desert.jpg', 9),
(3, '9Hydrangeas.jpg', 9),
(4, '9Jellyfish.jpg', 9),
(5, '9Koala.jpg', 9),
(6, '9Lighthouse.jpg', 9),
(7, '9Penguins.jpg', 9),
(8, '9Tulips.jpg', 9),
(11, '10Hydrangeas.jpg', 10),
(12, '10Jellyfish.jpg', 10),
(13, '10Koala.jpg', 10),
(15, '10Penguins.jpg', 10),
(16, '10Tulips.jpg', 10);

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

CREATE TABLE `product_type` (
  `id_pro_type` int(11) NOT NULL,
  `name_pro_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_type`
--

INSERT INTO `product_type` (`id_pro_type`, `name_pro_type`) VALUES
(1, 'ABC'),
(2, 'DBC'),
(3, 'kgb');

-- --------------------------------------------------------

--
-- Table structure for table `structure`
--

CREATE TABLE `structure` (
  `id_structure` int(11) NOT NULL,
  `name_structure` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `structure`
--

INSERT INTO `structure` (`id_structure`, `name_structure`) VALUES
(3, 1.5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `name_surname` varchar(30) NOT NULL,
  `username` varchar(10) NOT NULL,
  `e_mail` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(30) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `control` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_users`, `name_surname`, `username`, `e_mail`, `password`, `address`, `phone`, `control`) VALUES
(1, 'user', 'user', 'email@gmail.com', '63ac2a8ee381801fdd9685fc873b3949', 'address', '123456', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_location_1`
--
ALTER TABLE `data_location_1`
  ADD PRIMARY KEY (`id_location_1`);

--
-- Indexes for table `data_location_2`
--
ALTER TABLE `data_location_2`
  ADD PRIMARY KEY (`id_location_2`);

--
-- Indexes for table `data_location_3`
--
ALTER TABLE `data_location_3`
  ADD PRIMARY KEY (`id_location_3`);

--
-- Indexes for table `equipment`
--
ALTER TABLE `equipment`
  ADD PRIMARY KEY (`id_equipment`);

--
-- Indexes for table `owners`
--
ALTER TABLE `owners`
  ADD PRIMARY KEY (`id_owner`);

--
-- Indexes for table `owners_doc`
--
ALTER TABLE `owners_doc`
  ADD PRIMARY KEY (`id_doc`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_products`);

--
-- Indexes for table `products_photos`
--
ALTER TABLE `products_photos`
  ADD PRIMARY KEY (`id_photo`);

--
-- Indexes for table `product_type`
--
ALTER TABLE `product_type`
  ADD PRIMARY KEY (`id_pro_type`);

--
-- Indexes for table `structure`
--
ALTER TABLE `structure`
  ADD PRIMARY KEY (`id_structure`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_location_1`
--
ALTER TABLE `data_location_1`
  MODIFY `id_location_1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `data_location_2`
--
ALTER TABLE `data_location_2`
  MODIFY `id_location_2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `data_location_3`
--
ALTER TABLE `data_location_3`
  MODIFY `id_location_3` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `equipment`
--
ALTER TABLE `equipment`
  MODIFY `id_equipment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `owners`
--
ALTER TABLE `owners`
  MODIFY `id_owner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `owners_doc`
--
ALTER TABLE `owners_doc`
  MODIFY `id_doc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id_products` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products_photos`
--
ALTER TABLE `products_photos`
  MODIFY `id_photo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `product_type`
--
ALTER TABLE `product_type`
  MODIFY `id_pro_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `structure`
--
ALTER TABLE `structure`
  MODIFY `id_structure` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
