-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 29, 2020 at 01:48 AM
-- Server version: 5.6.41-84.1
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tadjoe96_RestaurentDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `message` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`name`, `email`, `subject`, `message`) VALUES
('Victor Anyanwu', 'vanyanwu393@gmail.com', 'fghj', 'sdfghjkjhgfds\r\n'),
('Victor Anyanwu', 'vanyanwu393@gmail.com', 'fvsacd', 'wdcacsd'),
('wdcwe', 'vanyanwu393@gmail.com', 'wdcqwedc', 'wecwedcwc'),
('CSCE', 'user@gmail.com', '3444', 'this sucks'),
('', '', '', ''),
('Patrick', 'patrick.s.friedman@gmail.com', 'hello', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `Coupons`
--

CREATE TABLE `Coupons` (
  `Coupon_ID` int(16) NOT NULL,
  `Coupon_Type` text COLLATE utf8_unicode_ci NOT NULL,
  `Coupon_Start` date NOT NULL,
  `Coupon_End` date NOT NULL,
  `Coupon_Avail` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Coupons`
--

INSERT INTO `Coupons` (`Coupon_ID`, `Coupon_Type`, `Coupon_Start`, `Coupon_End`, `Coupon_Avail`) VALUES
(1203, 'FREE_DESSERT', '2020-04-01', '2020-07-16', 1),
(1204, 'Discount', '0000-00-00', '0000-00-00', 0),
(1205, 'FREE_LEMONADE', '2020-02-01', '2020-11-16', 0);

-- --------------------------------------------------------

--
-- Table structure for table `CustomerAccount`
--

CREATE TABLE `CustomerAccount` (
  `name` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rewardPoints` int(11) DEFAULT NULL,
  `birthday` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `CustomerAccount`
--

INSERT INTO `CustomerAccount` (`name`, `email`, `rewardPoints`, `birthday`) VALUES
('Victor Anyanwu', 'vanyanwu393@gmail.com', NULL, '11/05/1999'),
('Patrick', 'patrick.s.friedman@gmail.com', NULL, '12/01/98'),
('tad', 'tadjoe96@gmail.com', NULL, '09/16/1996'),
('tad', 'tadjoe96@gmail.com', NULL, '09/16/1996'),
('mik', 'mike@mike', NULL, '696969'),
('Brady Barnett', 'barnettbrady@gmail.com', NULL, '02-18-1996'),
('matt', 'matthewcheney@my.unt.edu', NULL, '06/09/1999'),
('', 'vanyanwu393@gmail.com', NULL, '11/05/1999'),
('Victor', 'yooo@gmail.com', NULL, '11/05/1999'),
('Victor', 'yoooo@gmail.com', NULL, '11/05/1999'),
('1234', 'user@gmail.com', NULL, '14/99/100'),
('kubiat', 'kubiat@gmail.com', NULL, '14/99/100'),
('A', 'a@a.com', NULL, '5/2/1919');

-- --------------------------------------------------------

--
-- Table structure for table `Ingredients`
--

CREATE TABLE `Ingredients` (
  `id` int(11) NOT NULL,
  `Name` char(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Ingredients`
--

INSERT INTO `Ingredients` (`id`, `Name`, `Quantity`) VALUES
(2, 'Cinnamon', 28),
(3, 'Rice', 20),
(4, 'Honey', 20),
(5, 'Onion', 20),
(6, 'Tomato', 20),
(7, 'Garlic', 20),
(8, 'Parsley', 20),
(9, 'Peach', 20),
(10, 'Brown Sugar', 20),
(11, 'Pecans', 20),
(12, 'Butter', 20),
(13, 'Eggs', 20),
(14, 'Sausage', 20),
(15, 'Salt', 20),
(16, 'Pepper', 20),
(17, 'Cheese', 20),
(18, 'Peas', 20),
(19, 'Celery', 20),
(20, 'Chicken', 20),
(21, 'Carrots', 20),
(22, 'Avocado', 100),
(23, 'Crab', 20),
(24, 'Cucumber', 20),
(25, 'Mayonnaise', 20),
(27, 'Broccoli', 20),
(28, 'Scallions', 20),
(29, 'Black Beans', 20),
(30, 'Chili Powder', 20),
(31, 'Eggplant', 20),
(32, 'Pepper Beans', 20),
(33, 'Cilantro', 20),
(34, 'Ginger', 20),
(35, 'Shrimp', 20),
(36, 'Red Lentils', 20),
(37, 'Red Curry Paste', 20),
(38, 'Bread Crumbs', 20),
(39, 'Brioche', 20),
(40, 'Orange', 20),
(41, 'Ceylon Tea', 20),
(42, 'Sparkling Water', 20),
(43, 'Lemon', 20),
(44, 'Mint', 20),
(45, 'Strawberries', 20),
(46, 'Caramel', 20),
(47, 'Granola', 20),
(48, 'Whipped Cream', 20),
(49, 'Vanilla Ice Cream', 20),
(50, 'Strawberry Ice Cream', 20),
(51, 'Chocolate Ice Cream', 20),
(52, 'Chocolate', 20),
(53, 'Winking Owl Wine', 20),
(54, 'Tempranillo', 20),
(55, 'Sangiovese', 20),
(56, 'Syrah', 20);

-- --------------------------------------------------------

--
-- Table structure for table `Menu`
--

CREATE TABLE `Menu` (
  `Menu_ItemID` int(20) NOT NULL DEFAULT '1',
  `Menu_Name` text COLLATE utf8_unicode_ci,
  `Menu_Ingredients` text COLLATE utf8_unicode_ci,
  `Menu_Availability_Start` date NOT NULL,
  `Menu_Availability_End` date NOT NULL,
  `Menu_Item_Picture` text COLLATE utf8_unicode_ci NOT NULL,
  `kidsMeal` tinyint(1) DEFAULT NULL,
  `Price` decimal(5,2) DEFAULT NULL,
  `Allergens` char(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Description` char(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Calories` int(255) DEFAULT NULL,
  `category` int(10) NOT NULL,
  `total_orders` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Menu`
--

INSERT INTO `Menu` (`Menu_ItemID`, `Menu_Name`, `Menu_Ingredients`, `Menu_Availability_Start`, `Menu_Availability_End`, `Menu_Item_Picture`, `kidsMeal`, `Price`, `Allergens`, `Description`, `Calories`, `category`, `total_orders`) VALUES
(1, 'Apple Cinnamon Rice Cake', 'Apple, Cinnamon, Rice, Honey', '2020-04-14', '2020-12-31', 'uploads/images/Rice_cake.png', 0, '4.00', NULL, ' Crunchy and sweet!', 50, 1, 4),
(2, 'Rice and Fried Egg', 'Egg, Onion, Rice, Tomato, Garlic, Parsley', '2020-04-14', '2020-12-31', 'uploads/images/rice_and_fried_egg.png', 0, '7.00', NULL, ' Great to start the day with', 75, 1, 5),
(3, 'Breakfast Rice Pudding', 'Peaches, Brown Sugar, Rice, Pecans, Butter', '2020-04-14', '2020-12-31', 'uploads/images/breakfast_rice_pudding.png', 0, '7.00', NULL, 'No chewing necessary', 50, 1, 1),
(4, 'Breakfast Fried Rice', 'Eggs, Sausage, Onion, Rice, Salt, Pepper, Cheese, Peas, Parsley', '2020-04-14', '2020-12-31', 'uploads/images/breakfast_fried_rice.png', 0, '9.99', NULL, ' Hope you like rice for breakfast', 75, 1, 0),
(5, 'Chicken Rice Soup', 'Chicken, Rice, Celery, Carrots, Salt, Pepper', '2020-04-14', '2020-12-31', 'uploads/images/chicken_rice_soup.png', 0, '10.00', NULL, 'For the cold mornings', 75, 2, 0),
(6, 'California Roll', 'Avocado, Crab, Cucumber, Mayonnaise, Rice', '2020-04-14', '2020-12-31', 'uploads/images/california_roll.png', 0, '12.00', NULL, ' No fish necessary', 100, 2, 0),
(7, 'Dirty Rice', 'Andouille Sausage, Broccoli, Garlic, Scallions, Salt, Pepper', '2020-04-14', '2020-12-31', 'uploads/images/dirty_rice.png', 0, '9.00', NULL, 'Dirty and clean at the same time', 100, 2, 0),
(8, 'Chicken Burrito Bowl', 'Chicken, Rice, Corn, Tomatoes, Black Beans, Chili Powder', '2020-04-14', '2020-12-31', 'uploads/images/chicken_burrito_bowl.png', 0, '12.00', NULL, ' Tortillas were so 2000', 100, 2, 0),
(9, 'Eggplant and Rice Bowl', 'Eggplant, Rice, Salt, Pepper Beans, Cilantro', '2020-04-14', '2020-12-31', 'uploads/images/eggplant_and_rice_bowl.png', 0, '15.00', NULL, 'This one is for all the vegans', 100, 3, 0),
(10, 'Honey Garlic Shrimp Rice Casserole', 'Rice, Garlic, Onion, Ginger, Pepper, Honey, Broccoli, Shrimp', '2020-04-14', '2020-12-31', 'uploads/images/honey_garlic_shrimp.png', 0, '15.00', NULL, ' Just like your mommas casserole....maybe', 120, 3, 0),
(11, 'Rice Bowl with Red Lentil Curry', 'Rice, Butter, Onion, Garlic, Ginger, Red Lentils, Red Curry Paste, Cilantro', '2020-04-14', '2020-12-31', 'uploads/images/rice_bowl_with_red_lentil_curry.png', 0, '13.00', NULL, 'Add some spice to your life', 100, 3, 0),
(12, 'Rice Burger', 'Rice, Onion, Celery, Garlic, Breadcrumbs, Egg, Brioche', '2020-04-14', '2020-12-31', 'uploads/images/rice_burger.png', 0, '14.00', '', 'You may puke if you finish this whole thing', 200, 3, 0),
(13, 'Orange Juice', 'Orange, Parsley', '2020-04-14', '2020-12-31', '/images/drink-3.jpg', 0, '9.00', NULL, 'Vitamin C kills corona virus', 25, 4, 0),
(14, 'Sweet Iced Tea', 'Ceylon Tea, Sparkling Water', '2020-04-14', '2020-12-31', '/images/drink-4.jpg', 0, '5.00', NULL, ' sweet like Texas', 255, 4, 0),
(15, 'Lemonade', 'Lemon, Sparkling Water, Mint', '2020-04-14', '2020-12-31', '/images/drink-5.jpg', 0, '8.00', NULL, 'Pucker up!', 255, 4, 0),
(16, 'Peach Tea', 'Peach, Strawberries, Mint', '2020-04-14', '2020-12-31', '/images/drink-6.jpg', 0, '9.00', NULL, 'Get crafty', 255, 4, 0),
(17, 'Pancakes with Caramel', 'Caramel, Strawberries, Cinnamon', '2020-04-14', '2020-12-31', '/images/dessert-1.jpg', 0, '12.00', NULL, 'This may give you diabetes', 255, 5, 0),
(18, 'Strawberry Parfait', 'Strawberries, Granola, Whipped Cream', '2020-04-14', '2020-12-31', '/images/dessert-2.jpg', 0, '10.00', NULL, 'Might be a dessert, might be breakfast', 150, 5, 0),
(19, 'Waffle Cone Ice Cream', 'Vanilla, Strawberry, Chocolate', '2020-04-14', '2020-12-31', '/images/dessert-4.jpg', 0, '6.00', NULL, 'Handles the sweet tooth', 255, 5, 0),
(20, 'Molten Lava Cake', 'Chocolate, Cinnamon, Caramel', '2020-04-14', '2020-12-31', '/images/dessert-3.jpg', 0, '12.00', NULL, 'Chocolate heaven', 255, 5, 0),
(21, 'Winking Owl Wine', 'Winking Owl Wine', '2020-04-14', '2020-12-31', '/images/wine-1.jpg', 0, '19.00', NULL, 'Pinkies out', 75, 6, 0),
(22, 'Tempranillo', 'Tempranillo', '2020-04-14', '2020-12-31', '/images/wine-2.jpg', 0, '29.00', NULL, 'Bet you can\'t say it 5 times fast', 75, 6, 0),
(23, 'Sangiovese', 'Sangiovese', '2020-04-14', '2020-12-31', '/images/wine-3.jpg', 0, '49.00', NULL, 'Might be a country', 70, 6, 0),
(24, 'Syrah', 'Syrah', '2020-04-14', '2020-12-31', '/images/wine-4.jpg', 0, '12.00', NULL, 'You wont be disappointed', 1, 6, 0),
(-2, 'Combo #2', 'Peaches, Brown Sugar, Rice, Pecans, Butter, Strawberries, Granola, Whipped Cream', '2020-04-01', '2020-04-18', 'uploads/images/2.jpg', 0, '4.99', NULL, 'Breakfast Rice Pudding with a Strawberry Parfait', 1250, 0, 1),
(-3, 'Combo #1', '	\r\nApple, Cinnamon, Rice, Honey, Bananas, Strawberries', '2020-04-01', '2020-04-18', 'uploads/images/1.jpg', 0, '4.99', NULL, 'Apple Cinnamon Rice Cake with Choice of any Drink', 1600, 0, 2),
(-1, 'Combo #3', 'Eggplant, Rice, Salt, Pepper Beans, Cilantro', '2020-04-01', '2020-04-16', 'uploads/images/3.jpg', 0, '4.99', NULL, 'Eggplant and Rice Bowl with Choice of any Drink', 2000, 0, 0),
(0, 'Combo #4', 'Avocado, Crab, Cucumber, Mayonnaise, Rice', '2020-04-01', '2020-04-16', 'uploads/images/4.jpg', 0, '4.99', NULL, 'California Roll with Choice of any Glass of Wine (Non-Refillable)', 8050, 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `Orders`
--

CREATE TABLE `Orders` (
  `Order_ID` int(11) NOT NULL,
  `Table_Number` int(16) UNSIGNED NOT NULL,
  `Status` char(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Menu_ItemID` int(20) DEFAULT NULL,
  `Quantity` int(25) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Orders`
--

INSERT INTO `Orders` (`Order_ID`, `Table_Number`, `Status`, `Menu_ItemID`, `Quantity`) VALUES
(232, 13, 'in_progress', 0, 0),
(231, 13, 'in_progress', 0, 0),
(230, 15, 'Help', NULL, NULL),
(229, 13, 'in_progress', 0, 25),
(228, 8, 'Help', NULL, NULL),
(227, 1, 'Help', NULL, NULL),
(226, 1, 'Refill', NULL, NULL),
(225, 13, 'in_progress', 2, 3),
(224, 13, 'in_progress', 3, 1),
(223, 12, 'Help', NULL, NULL),
(222, 4, 'Help', NULL, NULL),
(220, 1, 'Help', NULL, NULL),
(219, 13, 'in_progress', -2, 1),
(218, 13, 'in_progress', -3, 1),
(221, 1, 'Refill', NULL, NULL),
(215, 13, 'in_progress', 2, 1),
(216, 13, 'in_progress', 2, 1),
(214, 13, 'in_progress', 1, 1),
(213, 5, 'Refill', NULL, NULL),
(212, 3, 'Help', NULL, NULL),
(211, 13, 'in_progress', -3, 1),
(209, 13, 'completed', 6, 1),
(233, 13, 'in_progress', 0, 0),
(234, 13, 'in_progress', 0, 0),
(235, 13, 'in_progress', 0, 0),
(236, 13, 'in_progress', -3, 1),
(238, 13, 'in_progress', 2, 4),
(239, 13, 'in_progress', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `receipts`
--

CREATE TABLE `receipts` (
  `transaction_id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `total` double NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `receipts`
--

INSERT INTO `receipts` (`transaction_id`, `customer_id`, `total`, `date`) VALUES
(48, 6, 24, '2020-04-23 15:10:43'),
(49, 6, 14.875, '2020-04-23 15:15:51'),
(50, 6, 24.4375, '2020-04-23 15:18:51'),
(51, 6, 19.125, '2020-04-23 15:35:04'),
(52, 6, 7.3, '2020-04-23 15:59:38'),
(53, 6, 4.25, '2020-04-23 16:40:05'),
(54, 6, 7.4375, '2020-04-23 16:44:29'),
(55, 6, 7.4375, '2020-04-23 16:45:57'),
(56, 6, 10.60375, '2020-04-24 12:49:56'),
(57, 6, 29.75, '2020-04-24 16:35:37'),
(58, 6, 132.546875, '2020-04-24 16:38:48'),
(59, 6, 0, '2020-04-24 16:42:32'),
(60, 6, 5.301875, '2020-04-24 17:00:56'),
(61, 6, 29.75, '2020-04-27 13:18:44'),
(62, 6, 7.4375, '2020-04-27 13:19:27');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `time` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `people` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`name`, `email`, `phone`, `time`, `people`) VALUES
('', 'vanyanwu393@gmail.com', '2147483647', 'drfdfbv', ''),
('', 'vanyanwu393@gmail.com', '2147483647', 'drfdfbv', ''),
('', 'vanyanwu393@gmail.com', '2147483647', 'drfdfbv', 'srfbdsfb'),
('', 'vanyanwu393@gmail.com', '4697034334', 'dcfvgbhjk', 'dfghjkl'),
('', 'vanyanwu393@gmail.com', '4697034334', 'dcfvgbhjk', 'dfghjkl'),
('', 'vanyanwu393@gmail.com', '1234567', '234567', '1234'),
('', 'vanyanwu393@gmail.com', '4697034334', '234567', '1234'),
('wedrfghjkl.;', 'vanyanwu393@gmail.com', '4697034334', '111', '111'),
('mike', 'mike@gmail.com', '1234567', '4:20', '7'),
('Yeni', 'user@gon.com', '7877777777', '7:00pm', '3'),
('K', 'tadjoe96@gmail.com', '9403046181', '10:45', '3');

-- --------------------------------------------------------

--
-- Table structure for table `Revenue`
--

CREATE TABLE `Revenue` (
  `Date` date DEFAULT NULL,
  `Amount` decimal(20,2) DEFAULT NULL,
  `Description` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Revenue`
--

INSERT INTO `Revenue` (`Date`, `Amount`, `Description`) VALUES
('2020-04-15', '10000.00', NULL),
('2020-04-19', '4.25', 6),
('2020-04-19', '0.00', 7),
('2020-04-19', '0.00', 8),
('2020-04-19', '0.00', 12),
('2020-04-19', '7.44', 13),
('2020-04-19', '4.25', 14),
('2020-04-19', '12.75', 15),
('2020-04-19', '8.50', 16),
('2020-04-19', '32.94', 17),
('2020-04-19', '4.25', 18),
('2020-04-19', '4.25', 19),
('2020-04-19', '0.00', 20),
('2020-04-19', '4.25', 21),
('2020-04-19', '4.25', 22),
('2020-04-19', '3.46', 23),
('2020-04-19', '4.06', 24),
('2020-04-19', '3.61', 25),
('2020-04-19', '7.44', 26),
('2020-04-19', '8.50', 27),
('2020-04-19', '3.61', 28),
('2020-04-19', '9.93', 29),
('2020-04-19', '4.25', 30),
('2020-04-19', '4.25', 33),
('2020-04-19', '4.25', 34),
('2020-04-19', '3.61', 35),
('2020-04-19', '10.84', 36),
('2020-04-23', '0.00', 37),
('2020-04-23', '0.00', 38),
('2020-04-23', '0.00', 39),
('2020-04-23', '0.00', 40),
('2020-04-23', '0.00', 41),
('2020-04-23', '0.00', 42),
('2020-04-23', '0.00', 43),
('2020-04-23', '0.00', 44),
('2020-04-23', '0.00', 45),
('2020-04-23', '0.00', 46),
('2020-04-23', '0.00', 47),
('2020-04-23', '21.21', 48),
('2020-04-23', '14.88', 49),
('2020-04-23', '20.77', 50),
('2020-04-23', '19.13', 51),
('2020-04-23', '5.30', 52),
('2020-04-23', '4.25', 53),
('2020-04-23', '7.44', 54),
('2020-04-23', '7.44', 55),
('2020-04-24', '9.01', 56),
('2020-04-24', '25.29', 57),
('2020-04-24', '132.55', 58),
('2020-04-24', '0.00', 59),
('2020-04-24', '5.30', 60),
('2020-04-27', '29.75', 61),
('2020-04-27', '7.44', 62);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `Staff_ID` int(16) NOT NULL,
  `Staff_Name` text COLLATE utf8_unicode_ci NOT NULL,
  `Staff_Clockout` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `Staff_Hours` decimal(11,0) NOT NULL,
  `Rank` int(11) DEFAULT NULL,
  `Staff_Clockin` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`Staff_ID`, `Staff_Name`, `Staff_Clockout`, `Staff_Hours`, `Rank`, `Staff_Clockin`) VALUES
(11, 'MD K', '0000-00-00 00:00:00', '0', 3, '0000-00-00 00:00:00'),
(6, 'Timmy', '2020-04-23 20:43:54', '39', 1, '2020-04-23 17:33:25'),
(10, 'Mike', '0000-00-00 00:00:00', '1000', 3, '0000-00-00 00:00:00'),
(12, 'Kubebe', '0000-00-00 00:00:00', '0', 2, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `staff_id`
--

CREATE TABLE `staff_id` (
  `rank_id` int(11) NOT NULL,
  `rank_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff_id`
--

INSERT INTO `staff_id` (`rank_id`, `rank_name`) VALUES
(1, 'Manager'),
(2, 'Wait'),
(3, 'Kitchen');

-- --------------------------------------------------------

--
-- Table structure for table `Subscription`
--

CREATE TABLE `Subscription` (
  `Email` char(30) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Subscription`
--

INSERT INTO `Subscription` (`Email`) VALUES
('mrivera95@hotmail.com'),
('tadjoe96@gmail.com'),
('5303622548'),
('michaelrivera3@my.unt.edu'),
('test123'),
('anothertest'),
('tadjoe96@gmail.com'),
(''),
(''),
('tadjoe96@gmail.com'),
(''),
(''),
('');

-- --------------------------------------------------------

--
-- Table structure for table `Tables`
--

CREATE TABLE `Tables` (
  `Table_Number` int(16) NOT NULL,
  `Order_Number` int(11) NOT NULL,
  `Server_ID` int(11) NOT NULL,
  `Status` text COLLATE utf8_unicode_ci NOT NULL,
  `Bill` decimal(10,2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Coupons`
--
ALTER TABLE `Coupons`
  ADD PRIMARY KEY (`Coupon_ID`);

--
-- Indexes for table `Ingredients`
--
ALTER TABLE `Ingredients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Menu`
--
ALTER TABLE `Menu`
  ADD PRIMARY KEY (`Menu_ItemID`);

--
-- Indexes for table `Orders`
--
ALTER TABLE `Orders`
  ADD PRIMARY KEY (`Order_ID`);

--
-- Indexes for table `receipts`
--
ALTER TABLE `receipts`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`Staff_ID`);

--
-- Indexes for table `staff_id`
--
ALTER TABLE `staff_id`
  ADD PRIMARY KEY (`rank_id`);

--
-- Indexes for table `Tables`
--
ALTER TABLE `Tables`
  ADD PRIMARY KEY (`Table_Number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Ingredients`
--
ALTER TABLE `Ingredients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `Orders`
--
ALTER TABLE `Orders`
  MODIFY `Order_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;

--
-- AUTO_INCREMENT for table `receipts`
--
ALTER TABLE `receipts`
  MODIFY `transaction_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `Staff_ID` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
