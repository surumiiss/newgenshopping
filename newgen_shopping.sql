-- phpMyAdmin SQL Dump
-- version 4.2.0
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 01, 2016 at 12:45 PM
-- Server version: 5.6.17
-- PHP Version: 5.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `newgen_shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_post`
--

CREATE TABLE IF NOT EXISTS `admin_post` (
`id` int(11) NOT NULL,
  `post_name` varchar(100) NOT NULL,
  `admin` varchar(100) NOT NULL,
  `products` varchar(100) NOT NULL,
  `orders` int(11) NOT NULL,
  `coupons` int(11) NOT NULL,
  `cms` int(11) NOT NULL,
  `masters` int(11) NOT NULL,
  `user_details` int(11) NOT NULL,
  `reports` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `CB` int(100) NOT NULL,
  `UB` int(100) NOT NULL,
  `DOC` date NOT NULL,
  `DOU` date NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin_post`
--

INSERT INTO `admin_post` (`id`, `post_name`, `admin`, `products`, `orders`, `coupons`, `cms`, `masters`, `user_details`, `reports`, `status`, `CB`, `UB`, `DOC`, `DOU`) VALUES
(1, 'admin', '1', '1', 1, 1, 1, 1, 0, 1, 1, 4, 4, '2016-05-25', '2016-05-25'),
(2, 'user', '0', '0', 0, 0, 0, 0, 1, 0, 1, 4, 0, '2016-05-25', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

CREATE TABLE IF NOT EXISTS `admin_user` (
`id` int(11) NOT NULL,
  `admin_post_id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `cb` int(100) NOT NULL,
  `UB` int(100) NOT NULL,
  `DOC` date NOT NULL,
  `DOU` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `admin_user`
--

INSERT INTO `admin_user` (`id`, `admin_post_id`, `username`, `password`, `name`, `email`, `phone`, `cb`, `UB`, `DOC`, `DOU`) VALUES
(10, 1, 'admin', 'admin', 'Aathira', 'aathira@intersmart.in', '1234567891', 0, 1, '2016-07-14', '2016-07-14 06:56:24');

-- --------------------------------------------------------

--
-- Table structure for table `buyer_details`
--

CREATE TABLE IF NOT EXISTS `buyer_details` (
`id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_no_1` varchar(100) NOT NULL,
  `phone_no_2` varchar(100) NOT NULL,
  `password` varchar(225) NOT NULL,
  `confirm` varchar(225) NOT NULL,
  `newsletter` int(11) NOT NULL,
  `wallet_amt` decimal(10,0) NOT NULL,
  `verification_code` varchar(10) NOT NULL,
  `email_verification` varchar(11) NOT NULL,
  `status` int(11) NOT NULL,
  `bad_attempts` int(11) NOT NULL,
  `CB` int(11) NOT NULL,
  `UB` int(11) NOT NULL,
  `DOC` datetime NOT NULL,
  `DOU` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `last_login` datetime NOT NULL,
  `field1` int(11) DEFAULT NULL,
  `field2` int(11) DEFAULT NULL,
  `field3` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `buyer_details`
--

INSERT INTO `buyer_details` (`id`, `first_name`, `last_name`, `dob`, `gender`, `email`, `phone_no_1`, `phone_no_2`, `password`, `confirm`, `newsletter`, `wallet_amt`, `verification_code`, `email_verification`, `status`, `bad_attempts`, `CB`, `UB`, `DOC`, `DOU`, `last_login`, `field1`, `field2`, `field3`) VALUES
(1, 'aathira', 'vp', '1992-02-13', 'female', 'avpin1992@gmail.com', '1234567890', '', '1234', '1234', 0, '0', '', '', 1, 0, 10, 0, '2016-08-01 00:00:00', '2016-08-01 06:22:58', '0000-00-00 00:00:00', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE IF NOT EXISTS `contact_us` (
`id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(225) NOT NULL,
  `phone` int(11) NOT NULL,
  `comment` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE IF NOT EXISTS `countries` (
`id` int(11) NOT NULL,
  `country_name` varchar(100) NOT NULL,
  `zone` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=240 ;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country_name`, `zone`) VALUES
(1, 'Afghanistan', 9),
(2, 'Albania', 0),
(3, 'Algeria', 0),
(4, 'American Samoa', 0),
(5, 'Andorra', 0),
(6, 'Angola', 0),
(7, 'Anguilla', 0),
(8, 'Antarctica', 0),
(9, 'Antigua and Barbuda', 0),
(10, 'Argentina', 0),
(11, 'Armenia', 0),
(12, 'Aruba', 0),
(13, 'Australia', 0),
(14, 'Austria', 0),
(15, 'Azerbaijan', 0),
(16, 'Bahamas', 0),
(17, 'Bahrain', 0),
(18, 'Bangladesh', 0),
(19, 'Barbados', 0),
(20, 'Belarus', 0),
(21, 'Belgium', 0),
(22, 'Belize', 0),
(23, 'Benin', 0),
(24, 'Bermuda', 0),
(25, 'Bhutan', 0),
(26, 'Bolivia', 0),
(27, 'Bosnia and Herzegovina', 0),
(28, 'Botswana', 0),
(29, 'Bouvet Island', 0),
(30, 'Brazil', 0),
(31, 'British Indian Ocean Territory', 0),
(32, 'Brunei Darussalam', 0),
(33, 'Bulgaria', 0),
(34, 'Burkina Faso', 0),
(35, 'Burundi', 0),
(36, 'Cambodia', 0),
(37, 'Cameroon', 0),
(38, 'Canada', 0),
(39, 'Cape Verde', 0),
(40, 'Cayman Islands', 0),
(41, 'Central African Republic', 0),
(42, 'Chad', 0),
(43, 'Chile', 0),
(44, 'China', 0),
(45, 'Christmas Island', 0),
(46, 'Cocos (Keeling) Islands', 0),
(47, 'Colombia', 0),
(48, 'Comoros', 0),
(49, 'Congo', 0),
(50, 'Congo, the Democratic Republic of the', 0),
(51, 'Cook Islands', 0),
(52, 'Costa Rica', 0),
(53, 'Cote D''Ivoire', 0),
(54, 'Croatia', 0),
(55, 'Cuba', 0),
(56, 'Cyprus', 0),
(57, 'Czech Republic', 0),
(58, 'Denmark', 0),
(59, 'Djibouti', 0),
(60, 'Dominica', 0),
(61, 'Dominican Republic', 0),
(62, 'Ecuador', 0),
(63, 'Egypt', 0),
(64, 'El Salvador', 0),
(65, 'Equatorial Guinea', 0),
(66, 'Eritrea', 0),
(67, 'Estonia', 0),
(68, 'Ethiopia', 0),
(69, 'Falkland Islands (Malvinas)', 0),
(70, 'Faroe Islands', 0),
(71, 'Fiji', 0),
(72, 'Finland', 0),
(73, 'France', 0),
(74, 'French Guiana', 0),
(75, 'French Polynesia', 0),
(76, 'French Southern Territories', 0),
(77, 'Gabon', 0),
(78, 'Gambia', 0),
(79, 'Georgia', 0),
(80, 'Germany', 0),
(81, 'Ghana', 0),
(82, 'Gibraltar', 0),
(83, 'Greece', 0),
(84, 'Greenland', 0),
(85, 'Grenada', 0),
(86, 'Guadeloupe', 0),
(87, 'Guam', 0),
(88, 'Guatemala', 0),
(89, 'Guinea', 0),
(90, 'Guinea-Bissau', 0),
(91, 'Guyana', 0),
(92, 'Haiti', 0),
(93, 'Heard Island and Mcdonald Islands', 0),
(94, 'Holy See (Vatican City State)', 0),
(95, 'Honduras', 0),
(96, 'Hong Kong', 0),
(97, 'Hungary', 0),
(98, 'Iceland', 0),
(99, 'India', 7),
(100, 'Indonesia', 0),
(101, 'Iran, Islamic Republic of', 0),
(102, 'Iraq', 0),
(103, 'Ireland', 0),
(104, 'Israel', 0),
(105, 'Italy', 0),
(106, 'Jamaica', 0),
(107, 'Japan', 0),
(108, 'Jordan', 0),
(109, 'Kazakhstan', 0),
(110, 'Kenya', 0),
(111, 'Kiribati', 0),
(112, 'Korea, Democratic People''s Republic of', 0),
(113, 'Korea, Republic of', 0),
(114, 'Kuwait', 0),
(115, 'Kyrgyzstan', 0),
(116, 'Lao People''s Democratic Republic', 0),
(117, 'Latvia', 0),
(118, 'Lebanon', 0),
(119, 'Lesotho', 0),
(120, 'Liberia', 0),
(121, 'Libyan Arab Jamahiriya', 0),
(122, 'Liechtenstein', 0),
(123, 'Lithuania', 0),
(124, 'Luxembourg', 0),
(125, 'Macao', 0),
(126, 'Macedonia, the Former Yugoslav Republic of', 0),
(127, 'Madagascar', 0),
(128, 'Malawi', 0),
(129, 'Malaysia', 0),
(130, 'Maldives', 0),
(131, 'Mali', 0),
(132, 'Malta', 0),
(133, 'Marshall Islands', 0),
(134, 'Martinique', 0),
(135, 'Mauritania', 0),
(136, 'Mauritius', 0),
(137, 'Mayotte', 0),
(138, 'Mexico', 0),
(139, 'Micronesia, Federated States of', 0),
(140, 'Moldova, Republic of', 0),
(141, 'Monaco', 0),
(142, 'Mongolia', 0),
(143, 'Montserrat', 0),
(144, 'Morocco', 0),
(145, 'Mozambique', 0),
(146, 'Myanmar', 0),
(147, 'Namibia', 0),
(148, 'Nauru', 0),
(149, 'Nepal', 0),
(150, 'Netherlands', 0),
(151, 'Netherlands Antilles', 0),
(152, 'New Caledonia', 0),
(153, 'New Zealand', 0),
(154, 'Nicaragua', 0),
(155, 'Niger', 0),
(156, 'Nigeria', 0),
(157, 'Niue', 0),
(158, 'Norfolk Island', 0),
(159, 'Northern Mariana Islands', 0),
(160, 'Norway', 0),
(161, 'Oman', 0),
(162, 'Pakistan', 0),
(163, 'Palau', 0),
(164, 'Palestinian Territory, Occupied', 0),
(165, 'Panama', 0),
(166, 'Papua New Guinea', 0),
(167, 'Paraguay', 0),
(168, 'Peru', 0),
(169, 'Philippines', 0),
(170, 'Pitcairn', 0),
(171, 'Poland', 0),
(172, 'Portugal', 0),
(173, 'Puerto Rico', 0),
(174, 'Qatar', 0),
(175, 'Reunion', 0),
(176, 'Romania', 0),
(177, 'Russian Federation', 0),
(178, 'Rwanda', 0),
(179, 'Saint Helena', 0),
(180, 'Saint Kitts and Nevis', 0),
(181, 'Saint Lucia', 0),
(182, 'Saint Pierre and Miquelon', 0),
(183, 'Saint Vincent and the Grenadines', 0),
(184, 'Samoa', 0),
(185, 'San Marino', 0),
(186, 'Sao Tome and Principe', 0),
(187, 'Saudi Arabia', 0),
(188, 'Senegal', 0),
(189, 'Serbia and Montenegro', 0),
(190, 'Seychelles', 0),
(191, 'Sierra Leone', 0),
(192, 'Singapore', 0),
(193, 'Slovakia', 0),
(194, 'Slovenia', 0),
(195, 'Solomon Islands', 0),
(196, 'Somalia', 0),
(197, 'South Africa', 0),
(198, 'South Georgia and the South Sandwich Islands', 0),
(199, 'Spain', 0),
(200, 'Sri Lanka', 0),
(201, 'Sudan', 0),
(202, 'SUR', 0),
(203, 'Svalbard and Jan Mayen', 0),
(204, 'Swaziland', 0),
(205, 'Sweden', 0),
(206, 'Switzerland', 0),
(207, 'Syrian Arab Republic', 0),
(208, 'Taiwan, Province of China', 0),
(209, 'Tajikistan', 0),
(210, 'Tanzania, United Republic of', 0),
(211, 'Thailand', 0),
(212, 'Timor-Leste', 0),
(213, 'Togo', 0),
(214, 'Tokelau', 0),
(215, 'Tonga', 0),
(216, 'Trinidad and Tobago', 0),
(217, 'Tunisia', 0),
(218, 'Turkey', 0),
(219, 'Turkmenistan', 0),
(220, 'Turks and Caicos Islands', 0),
(221, 'Tuvalu', 0),
(222, 'Uganda', 0),
(223, 'Ukraine', 0),
(224, 'United Arab Emirates', 0),
(225, 'United Kingdom', 7),
(226, 'United States', 6),
(227, 'United States Minor Outlying Islands', 0),
(228, 'Uruguay', 0),
(229, 'Uzbekistan', 0),
(230, 'Vanuatu', 0),
(231, 'Venezuela', 0),
(232, 'Viet Nam', 0),
(233, 'Virgin Islands, British', 0),
(234, 'Virgin Islands, U.s.', 0),
(235, 'Wallis and Futuna', 0),
(236, 'Western Sahara', 0),
(237, 'Yemen', 0),
(238, 'Zambia', 0),
(239, 'Zimbabwe', 0);

-- --------------------------------------------------------

--
-- Table structure for table `currency`
--

CREATE TABLE IF NOT EXISTS `currency` (
`id` int(11) NOT NULL,
  `country` varchar(50) NOT NULL,
  `currency` varchar(50) NOT NULL,
  `currency_code` varchar(50) NOT NULL,
  `symbol` varchar(225) NOT NULL,
  `rate` float NOT NULL,
  `image` varchar(225) NOT NULL,
  `cb` int(11) NOT NULL,
  `ub` int(11) NOT NULL,
  `doc` date NOT NULL,
  `dou` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `currency`
--

INSERT INTO `currency` (`id`, `country`, `currency`, `currency_code`, `symbol`, `rate`, `image`, `cb`, `ub`, `doc`, `dou`) VALUES
(3, 'India', 'Rupee', 'INR', 'fa-inr', 1, 'jpg', 0, 0, '0000-00-00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE IF NOT EXISTS `districts` (
`Id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `district_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `forgot_password`
--

CREATE TABLE IF NOT EXISTS `forgot_password` (
`id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `code` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `DOC` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `make_payment`
--

CREATE TABLE IF NOT EXISTS `make_payment` (
`id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `product_code` varchar(15) NOT NULL,
  `message` text NOT NULL,
  `amount_type` varchar(15) NOT NULL,
  `total_amount` varchar(25) NOT NULL,
  `payment_mode` varchar(15) NOT NULL COMMENT '1=wallet,2=gateway,3=paypal,4=wallet+netbanking ',
  `netbanking` varchar(100) NOT NULL,
  `paypal` varchar(100) NOT NULL,
  `wallet` varchar(100) NOT NULL,
  `date` datetime NOT NULL,
  `status` int(15) NOT NULL COMMENT '0:notpaid, 1:paid, 2:failed',
  `transaction_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `master_category_tags`
--

CREATE TABLE IF NOT EXISTS `master_category_tags` (
`id` int(11) NOT NULL,
  `category_tag` varchar(200) NOT NULL,
  `CB` int(11) NOT NULL,
  `UB` int(11) NOT NULL,
  `DOC` date NOT NULL,
  `DOU` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `master_category_tags`
--

INSERT INTO `master_category_tags` (`id`, `category_tag`, `CB`, `UB`, `DOC`, `DOU`) VALUES
(11, 'wedding', 4, 4, '2016-07-20', '2016-07-20 09:01:44'),
(12, 'gifts', 4, 4, '2016-07-20', '2016-07-20 09:02:16'),
(13, 'wedding-gifts', 4, 4, '2016-07-20', '2016-07-20 09:02:23'),
(14, 'wedding-store', 4, 4, '2016-07-20', '2016-07-20 09:02:30'),
(15, 'Wedding Favors Gifts', 4, 4, '2016-07-20', '2016-07-20 09:04:48'),
(16, 'roses', 4, 4, '2016-07-20', '2016-07-20 09:18:40'),
(17, 'dfg', 10, 10, '2016-07-25', '2016-07-25 07:33:23'),
(18, '1', 10, 10, '2016-07-25', '2016-07-25 08:23:14'),
(19, 'nm', 10, 10, '2016-07-25', '2016-07-25 08:42:57');

-- --------------------------------------------------------

--
-- Table structure for table `master_history_type`
--

CREATE TABLE IF NOT EXISTS `master_history_type` (
`id` int(11) NOT NULL,
  `type` varchar(200) NOT NULL,
  `credit_debit` int(11) NOT NULL COMMENT '1=>credit,2=>debit',
  `field1` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `master_shipping_types`
--

CREATE TABLE IF NOT EXISTS `master_shipping_types` (
`id` int(11) NOT NULL,
  `shipping_type` varchar(100) NOT NULL,
  `shipping_rate` float NOT NULL,
  `status` int(11) NOT NULL,
  `cb` int(11) NOT NULL,
  `ub` int(11) NOT NULL,
  `doc` date NOT NULL,
  `dou` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `master_shipping_types`
--

INSERT INTO `master_shipping_types` (`id`, `shipping_type`, `shipping_rate`, `status`, `cb`, `ub`, `doc`, `dou`) VALUES
(1, 'er', 34, 1, 4, 0, '2016-07-21', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `merchant`
--

CREATE TABLE IF NOT EXISTS `merchant` (
`id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `confirm` varchar(100) NOT NULL,
  `verification_code` varchar(50) NOT NULL,
  `email_verification` varchar(11) NOT NULL,
  `product_categories` varchar(250) NOT NULL,
  `merchant_type` int(11) NOT NULL,
  `product_count` int(11) NOT NULL,
  `shop_name` varchar(250) NOT NULL,
  `shop_logo` varchar(250) DEFAULT NULL,
  `shop_banner` varchar(250) DEFAULT NULL,
  `address` text NOT NULL,
  `pincode` int(11) NOT NULL,
  `city` varchar(100) NOT NULL,
  `locality` varchar(100) NOT NULL,
  `district` int(11) NOT NULL,
  `state` int(11) NOT NULL,
  `country` int(11) NOT NULL,
  `vat_tin` varchar(100) DEFAULT NULL,
  `status` varchar(100) NOT NULL,
  `last_login` datetime NOT NULL,
  `bad_attempts` int(11) NOT NULL,
  `CB` int(11) NOT NULL,
  `UB` int(11) NOT NULL,
  `DOC` date NOT NULL,
  `DOU` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `is_payment_done` int(11) NOT NULL,
  `field1` int(11) DEFAULT NULL,
  `field2` int(11) DEFAULT NULL,
  `field3` int(11) DEFAULT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `merchant`
--

INSERT INTO `merchant` (`id`, `fullname`, `email`, `phone_number`, `password`, `confirm`, `verification_code`, `email_verification`, `product_categories`, `merchant_type`, `product_count`, `shop_name`, `shop_logo`, `shop_banner`, `address`, `pincode`, `city`, `locality`, `district`, `state`, `country`, `vat_tin`, `status`, `last_login`, `bad_attempts`, `CB`, `UB`, `DOC`, `DOU`, `is_payment_done`, `field1`, `field2`, `field3`) VALUES
(3, 'fd', 'df@gmail.com', '56', '4', '1', '4', '1', '4', 0, 4, '4', NULL, NULL, '4', 4, '4', '4', 4, 0, 4, '', '1', '0000-00-00 00:00:00', 0, 4, 0, '0000-00-00', '0000-00-00 00:00:00', 0, NULL, NULL, NULL),
(4, 'f', 'f@gmail.com', '1', '1', '1', '', '1', '23,', 1, 0, '', NULL, NULL, 'a', 2, 'd', 'd', 0, 1, 14, '', '1', '0000-00-00 00:00:00', 0, 10, 0, '2016-07-27', '2016-07-27 11:20:56', 0, NULL, NULL, NULL),
(5, 'f', 't@gmail.com', '1', '1', '1', '', '1', '23,', 1, 0, '', 'jpg', 'jpg', 'a', 2, 'd', 'd', 0, 1, 14, '', '1', '0000-00-00 00:00:00', 0, 10, 0, '2016-07-27', '2016-07-27 11:21:07', 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
`id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `total_amount` decimal(10,2) NOT NULL,
  `order_date` datetime NOT NULL,
  `coupon_id` int(11) NOT NULL,
  `discount_rate` decimal(10,2) NOT NULL,
  `gift_option` int(11) NOT NULL COMMENT '0=no giftpack , 1= giftpack option',
  `rate` double NOT NULL,
  `ship_address_id` int(11) NOT NULL,
  `bill_address_id` int(11) NOT NULL,
  `currency_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `payment_mode` varchar(100) NOT NULL COMMENT '1=wallet,2=gateway,3=paypal,4=wallet+netbanking ',
  `admin_comment` text NOT NULL,
  `transaction_id` int(11) NOT NULL,
  `payment_status` int(11) NOT NULL COMMENT '0=notpay,1=success,2=failed',
  `admin_status` int(11) NOT NULL,
  `status` int(11) NOT NULL COMMENT '0=notplaced,1=Not Delivered,2=Success,3=failed',
  `DOC` date NOT NULL,
  `netbanking` int(11) NOT NULL,
  `paypal` decimal(10,2) NOT NULL,
  `wallet` decimal(10,2) NOT NULL,
  `shipping_method` int(11) NOT NULL,
  `newgen_gift` int(11) NOT NULL COMMENT '1:gift order; 0:other'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `user_id`, `total_amount`, `order_date`, `coupon_id`, `discount_rate`, `gift_option`, `rate`, `ship_address_id`, `bill_address_id`, `currency_id`, `comment`, `payment_mode`, `admin_comment`, `transaction_id`, `payment_status`, `admin_status`, `status`, `DOC`, `netbanking`, `paypal`, `wallet`, `shipping_method`, `newgen_gift`) VALUES
(3, 1, '1000.00', '0000-00-00 00:00:00', 1, '1.00', 1, 1, 3, 3, 1, '1', '1', '1', 1, 1, 1, 1, '0000-00-00', 1, '1.00', '1.00', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_history`
--

CREATE TABLE IF NOT EXISTS `order_history` (
`id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `order_status_comment` varchar(500) NOT NULL,
  `order_status` int(11) NOT NULL,
  `shipping_type` int(11) NOT NULL,
  `tracking_id` varchar(225) NOT NULL,
  `date` datetime NOT NULL,
  `status` int(11) NOT NULL,
  `cb` int(11) NOT NULL,
  `ub` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `order_products`
--

CREATE TABLE IF NOT EXISTS `order_products` (
`id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `DOC` date NOT NULL,
  `status` int(11) NOT NULL,
  `gift_option` int(11) NOT NULL,
  `rate` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `order_status`
--

CREATE TABLE IF NOT EXISTS `order_status` (
`id` int(11) NOT NULL,
  `title` varchar(225) NOT NULL,
  `description` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
`id` int(11) NOT NULL,
  `category_id` varchar(200) NOT NULL,
  `product_name` varchar(225) NOT NULL,
  `product_code` varchar(225) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `merchant_id` int(11) NOT NULL,
  `merchant_type` int(11) NOT NULL,
  `description` text NOT NULL,
  `main_image` varchar(200) NOT NULL,
  `gallery_images` varchar(200) NOT NULL,
  `hover_image` varchar(150) NOT NULL,
  `canonical_name` varchar(200) NOT NULL,
  `meta_title` varchar(225) NOT NULL,
  `meta_description` text NOT NULL,
  `meta_keywords` varchar(225) NOT NULL,
  `header_visibility` int(11) NOT NULL,
  `sort_order` int(11) NOT NULL,
  `display_category_name` int(11) NOT NULL,
  `price` float NOT NULL,
  `wholesale_price` float NOT NULL,
  `is_discount_available` int(11) NOT NULL,
  `discount` float NOT NULL,
  `discount_type` varchar(225) NOT NULL,
  `discount_rate` float NOT NULL,
  `quantity` int(11) NOT NULL,
  `requires_shipping` int(11) NOT NULL,
  `enquiry_sale` int(11) NOT NULL,
  `new_from` date NOT NULL,
  `new_to` date NOT NULL,
  `sale_from` date NOT NULL,
  `sale_to` date NOT NULL,
  `special_price_from` date NOT NULL,
  `special_price_to` date NOT NULL,
  `tax` float NOT NULL,
  `gift_option` int(11) NOT NULL,
  `stock_availability` int(11) NOT NULL,
  `video_link` varchar(225) NOT NULL,
  `video` varchar(150) NOT NULL,
  `weight` float NOT NULL,
  `weight_class` int(11) NOT NULL,
  `status` varchar(225) NOT NULL,
  `exchange` int(11) NOT NULL,
  `search_tag` varchar(225) NOT NULL,
  `related_products` varchar(225) NOT NULL,
  `is_cod_available` int(11) NOT NULL,
  `is_available` int(11) NOT NULL,
  `is_featured` int(11) NOT NULL,
  `is_admin_approved` int(11) NOT NULL,
  `CB` int(11) NOT NULL,
  `UB` int(11) NOT NULL,
  `DOC` date NOT NULL,
  `DOU` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `product_name`, `product_code`, `brand_id`, `merchant_id`, `merchant_type`, `description`, `main_image`, `gallery_images`, `hover_image`, `canonical_name`, `meta_title`, `meta_description`, `meta_keywords`, `header_visibility`, `sort_order`, `display_category_name`, `price`, `wholesale_price`, `is_discount_available`, `discount`, `discount_type`, `discount_rate`, `quantity`, `requires_shipping`, `enquiry_sale`, `new_from`, `new_to`, `sale_from`, `sale_to`, `special_price_from`, `special_price_to`, `tax`, `gift_option`, `stock_availability`, `video_link`, `video`, `weight`, `weight_class`, `status`, `exchange`, `search_tag`, `related_products`, `is_cod_available`, `is_available`, `is_featured`, `is_admin_approved`, `CB`, `UB`, `DOC`, `DOU`) VALUES
(6, '23,', 'Titan 9154YM ', 'Titan1245', 0, 4, 0, '<ul>\r\n	<li>\r\n		<span style="color:#800080;">Case: Brass</span></li>\r\n	<li>\r\n		<span style="color:#800080;">Strap: Sheet Metal </span></li>\r\n	<li>\r\n		<span style="color:#800080;">Dial Color: Champagne</span></li>\r\n	<li>\r\n		<span style="color:#800080;">Functionality: Date </span></li>\r\n	<li>\r\n		<span style="color:#800080;">Water resistance: 30meters </span></li>\r\n	<li>\r\n		<span style="color:#800080;">Gender: Men</span></li>\r\n</ul>\r\n', 'jpg', '', 'jpg', 'Titan 9154YM ', '', '', '', 0, 0, 0, 0, 0, 0, 0, '1', 0, 0, 1, 0, '2016-07-27', '2016-07-30', '2016-07-27', '2016-07-28', '2016-07-27', '2016-07-29', 0, 1, 1, '', '', 0, 0, '1', 0, '', '', 0, 1, 1, 1, 4, 4, '0000-00-00', '2016-07-26 18:30:00'),
(7, '9,', 'Roses', 'ROSE132', 0, 4, 0, '<p>\r\n	<span style="font-family: &quot;Open Sans&quot;, sans-serif; font-size: 12px; line-height: 15px;">You will fall in love with these beautiful red roses without a doubt! These roses look really warm and passionate and will delight any recipient. This pack contains twelve such roses and these have been immaculately packed in premium and expensive tissue paper. This lends a sophisticated and elegant air to the gift pack while there is a matching ribbon bow on top. This has been tied for added effect and certainly scales up the attractiveness of this gift pack. These flowers can be used as nice gifts on a variety of occasions. Product Details: 12 Red Roses, Tissue Paper with Ribbon Bow</span></p>\r\n', 'jpg', '', '', 'roses', 'rose', 'You will fall in love with these beautiful red roses without a doubt! These roses look really warm and passionate and will delight any recipient. This pack contains twelve such roses and these have been immaculately packed in', '', 0, 0, 0, 1000, 0, 1, 0, '1', 0, 200, 1, 0, '1970-01-01', '1970-01-01', '1970-01-01', '1970-01-01', '1970-01-01', '1970-01-01', 0, 1, 1, '', '', 0, 0, '1', 0, '', '', 0, 1, 1, 1, 4, 4, '2016-07-20', '2016-07-19 18:30:00'),
(9, '25,23,', 'watch', 'wtch23564', 0, 0, 0, '<ul>\r\n	<li>\r\n		stylish watches</li>\r\n	<li>\r\n		awsome designs</li>\r\n	<li>\r\n		custom offers</li>\r\n</ul>\r\n', 'jpg', '', 'jpg', 'watch', 'watch', 'watchwatchwatchwatchwatch watch', 'watch', 0, 1, 0, 1000.9, 1, 1, 83, '1', 1, 1, 1, 0, '2016-07-26', '2016-07-31', '2016-07-26', '2016-10-26', '2016-07-28', '2016-07-28', 1, 1, 1, '1', '1', 1, 3, '1', 1, 'wedding,gifts,wedding-store,', '7', 1, 1, 1, 1, 0, 0, '2016-07-26', '2016-07-26 11:08:28'),
(10, '23,', 'gift', 'gift', 0, 0, 0, '<p>\r\n	gift</p>\r\n', 'jpg', '', '', 'gift', 'gift', 'gift`', 'gift', 0, 124, 0, 2342, 3534, 1, 23, '1', 45, 6, 1, 0, '2016-07-26', '2016-07-27', '2016-07-25', '2016-07-27', '2016-07-25', '2016-07-27', 67, 1, 1, '0', '89', 0, 3, '1', 1, '', '', 1, 1, 1, 1, 0, 0, '2016-07-26', '2016-07-26 11:19:23'),
(11, '25,', 'g', 'g', 0, 0, 0, '<p>\r\n	g</p>\r\n', '', '', '', 'g', 'g', 'g', 'g', 0, 1, 0, 5, 0, 1, 0, '1', 0, 0, 1, 0, '1970-01-01', '1970-01-01', '1970-01-01', '1970-01-01', '1970-01-01', '1970-01-01', 0, 1, 1, '', '', 0, 0, '1', 1, '', '', 1, 1, 1, 1, 4, 4, '2016-07-27', '2016-07-26 18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE IF NOT EXISTS `product_category` (
`id` int(11) NOT NULL,
  `parent` varchar(225) NOT NULL,
  `category_name` varchar(225) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(225) NOT NULL,
  `sort_order` int(100) NOT NULL,
  `meta_title` varchar(225) NOT NULL,
  `meta_description` text NOT NULL,
  `meta_keywords` varchar(225) NOT NULL,
  `header_visibility` int(11) NOT NULL,
  `search_tag` varchar(225) NOT NULL,
  `status` int(11) NOT NULL,
  `canonical_name` varchar(225) NOT NULL,
  `CB` int(11) NOT NULL,
  `UB` int(11) NOT NULL,
  `DOC` date NOT NULL,
  `DOU` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`id`, `parent`, `category_name`, `description`, `image`, `sort_order`, `meta_title`, `meta_description`, `meta_keywords`, `header_visibility`, `search_tag`, `status`, `canonical_name`, `CB`, `UB`, `DOC`, `DOU`) VALUES
(23, '23', 'Gifts', '<p>\r\n	Give the wedding gift they&#39;ll always remember by making it personalized. Our collection has elegant, whimsical, and joyful gifts for engagements, weddings, showers, and bridal parties. Personalized coasters, picture frames, wall art, cake cutters, champagne flutes, and tree ornaments all celebrate and commemorate the happy day and couple.</p>\r\n', 'jpg', 0, '', '', '', 1, '', 1, 'gifts', 4, 0, '2016-07-26', '2016-07-26 05:30:06'),
(25, '23', 'Gifts for him', '<p>\r\n	Standard gifts for your best ones . We are providing rare collections.</p>\r\n', 'jpg', 0, '', '', '', 1, '', 1, 'gifts-for-him', 4, 4, '2016-07-26', '2016-07-25 18:30:00'),
(27, '23', 'edgg', '<p>\r\n	sfg</p>\r\n', 'jpg', 0, '', '', '', 1, '', 1, 'edgg', 4, 0, '2016-07-26', '2016-07-26 10:40:24');

-- --------------------------------------------------------

--
-- Table structure for table `product_category_path`
--

CREATE TABLE IF NOT EXISTS `product_category_path` (
`id` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `parent` int(11) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `product_category_path`
--

INSERT INTO `product_category_path` (`id`, `category`, `parent`, `level`) VALUES
(1, 5, 5, 0),
(2, 6, 6, 0),
(3, 7, 7, 0),
(4, 8, 7, 1),
(5, 9, 7, 1),
(6, 10, 10, 0),
(7, 11, 8, 2),
(8, 9, 9, 0),
(9, 10, 9, 2),
(10, 11, 9, 2),
(11, 12, 11, 3),
(12, 13, 9, 2),
(13, 14, 9, 2),
(14, 15, 11, 3),
(15, 16, 9, 2),
(16, 17, 9, 2),
(17, 18, 10, 1),
(18, 19, 10, 1),
(19, 20, 11, 3),
(20, 21, 9, 2),
(21, 22, 22, 0),
(22, 23, 23, 0),
(23, 24, 23, 1),
(24, 27, 23, 1);

-- --------------------------------------------------------

--
-- Table structure for table `shipping_charges`
--

CREATE TABLE IF NOT EXISTS `shipping_charges` (
`id` int(11) NOT NULL,
  `country` int(11) NOT NULL,
  `shipping_rate` double NOT NULL,
  `doc` date NOT NULL,
  `dou` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `cb` int(11) NOT NULL,
  `ub` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `sort_order` int(11) NOT NULL,
  `zone` int(11) NOT NULL,
  `weight` float(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE IF NOT EXISTS `states` (
`Id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `state_name` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`Id`, `country_id`, `state_name`) VALUES
(2, 99, 'Andhra Pradesh'),
(3, 99, 'Arunachal Pradesh'),
(4, 99, 'Assam'),
(5, 99, 'Chhattisgarh'),
(6, 99, 'Goa'),
(7, 99, 'Gujarat'),
(8, 99, 'Haryana'),
(9, 99, 'Himachal Pradesh'),
(10, 99, 'Jammu & Kashmir'),
(11, 99, 'Jharkhand'),
(12, 99, 'Karnataka'),
(13, 99, 'Kerala'),
(14, 99, 'Madhya Pradesh'),
(15, 99, 'Maharashtra'),
(16, 99, 'Manipur'),
(17, 99, 'Meghalaya'),
(18, 99, 'Nagaland'),
(19, 99, 'Orissa'),
(20, 99, 'Punjab'),
(21, 99, 'Rajasthan'),
(22, 99, 'Sikkim'),
(23, 99, 'Tamil Nadu'),
(24, 99, 'Telangana '),
(25, 99, 'Tripura'),
(26, 99, 'Uttar Pradesh'),
(27, 99, 'Uttarakhand'),
(28, 99, 'West Bengal');

-- --------------------------------------------------------

--
-- Table structure for table `user_address`
--

CREATE TABLE IF NOT EXISTS `user_address` (
`id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `contact_number` varchar(100) NOT NULL,
  `address_1` text NOT NULL,
  `address_2` text NOT NULL,
  `city` varchar(100) NOT NULL,
  `district` int(11) NOT NULL,
  `postcode` varchar(111) NOT NULL,
  `country` int(11) NOT NULL,
  `state` int(11) NOT NULL,
  `default_billing_address` varchar(111) NOT NULL,
  `default_shipping_address` varchar(111) NOT NULL,
  `CB` int(11) NOT NULL,
  `UB` int(11) NOT NULL,
  `DOC` date NOT NULL,
  `DOU` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user_address`
--

INSERT INTO `user_address` (`id`, `userid`, `first_name`, `last_name`, `company`, `contact_number`, `address_1`, `address_2`, `city`, `district`, `postcode`, `country`, `state`, `default_billing_address`, `default_shipping_address`, `CB`, `UB`, `DOC`, `DOU`) VALUES
(3, 0, 'yui', 'yio', 'y8', '', 'tyi', 't78i', 'ti', 0, '576', 99, 0, '', '', 10, 0, '2016-07-25', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `wallet_history`
--

CREATE TABLE IF NOT EXISTS `wallet_history` (
`id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `entry_date` datetime NOT NULL,
  `credit_debit` int(11) NOT NULL COMMENT '1=>credit, 2=>debit',
  `balance_amt` decimal(10,2) NOT NULL,
  `ids` int(11) NOT NULL COMMENT 'eg:purchase_id',
  `field1` varchar(200) NOT NULL COMMENT 'comment',
  `field2` int(11) NOT NULL COMMENT 'status',
  `payment_method` int(11) NOT NULL COMMENT '1=>admin,2=>credit/debit/netbanking,3=>paypal',
  `transaction_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `weight_class`
--

CREATE TABLE IF NOT EXISTS `weight_class` (
`id` int(11) NOT NULL,
  `title` varchar(225) NOT NULL,
  `unit` varchar(100) NOT NULL,
  `CB` int(11) NOT NULL,
  `UB` int(11) NOT NULL,
  `DOC` date NOT NULL,
  `DOU` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `weight_class`
--

INSERT INTO `weight_class` (`id`, `title`, `unit`, `CB`, `UB`, `DOC`, `DOU`) VALUES
(3, 'kilograms', 'kg', 10, 0, '2016-07-21', '2016-07-20 18:30:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_post`
--
ALTER TABLE `admin_post`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_user`
--
ALTER TABLE `admin_user`
 ADD PRIMARY KEY (`id`), ADD KEY `admin_post_id` (`admin_post_id`);

--
-- Indexes for table `buyer_details`
--
ALTER TABLE `buyer_details`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `currency`
--
ALTER TABLE `currency`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
 ADD PRIMARY KEY (`Id`), ADD KEY `country_id` (`country_id`), ADD KEY `state_id` (`state_id`);

--
-- Indexes for table `forgot_password`
--
ALTER TABLE `forgot_password`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `make_payment`
--
ALTER TABLE `make_payment`
 ADD PRIMARY KEY (`id`), ADD KEY `userid` (`userid`);

--
-- Indexes for table `master_category_tags`
--
ALTER TABLE `master_category_tags`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_history_type`
--
ALTER TABLE `master_history_type`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_shipping_types`
--
ALTER TABLE `master_shipping_types`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `merchant`
--
ALTER TABLE `merchant`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
 ADD PRIMARY KEY (`id`), ADD KEY `user_id` (`user_id`), ADD KEY `address_book_id` (`ship_address_id`), ADD KEY `admin_status` (`admin_status`), ADD KEY `user_id_2` (`user_id`), ADD KEY `coupon_id` (`coupon_id`), ADD KEY `ship_address_id` (`ship_address_id`), ADD KEY `bill_address_id` (`bill_address_id`), ADD KEY `transaction_id` (`transaction_id`), ADD KEY `user_id_3` (`user_id`);

--
-- Indexes for table `order_history`
--
ALTER TABLE `order_history`
 ADD PRIMARY KEY (`id`), ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `order_products`
--
ALTER TABLE `order_products`
 ADD PRIMARY KEY (`id`), ADD KEY `order_id` (`order_id`), ADD KEY `product_id` (`product_id`), ADD KEY `order_id_2` (`order_id`), ADD KEY `product_id_2` (`product_id`), ADD KEY `order_id_3` (`order_id`), ADD KEY `product_id_3` (`product_id`), ADD KEY `order_id_4` (`order_id`), ADD KEY `product_id_4` (`product_id`);

--
-- Indexes for table `order_status`
--
ALTER TABLE `order_status`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
 ADD PRIMARY KEY (`id`), ADD KEY `merchant_id` (`merchant_id`,`merchant_type`), ADD KEY `merchant_type` (`merchant_type`), ADD KEY `merchant_id_2` (`merchant_id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_category_path`
--
ALTER TABLE `product_category_path`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipping_charges`
--
ALTER TABLE `shipping_charges`
 ADD PRIMARY KEY (`id`), ADD KEY `country` (`country`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
 ADD PRIMARY KEY (`Id`), ADD KEY `country_id` (`country_id`), ADD KEY `country_id_2` (`country_id`), ADD KEY `country_id_3` (`country_id`);

--
-- Indexes for table `user_address`
--
ALTER TABLE `user_address`
 ADD PRIMARY KEY (`id`), ADD KEY `country` (`country`), ADD KEY `state` (`state`), ADD KEY `state_2` (`state`), ADD KEY `country_2` (`country`), ADD KEY `country_3` (`country`), ADD KEY `default_billing_address` (`default_billing_address`), ADD KEY `country_4` (`country`), ADD KEY `district` (`district`);

--
-- Indexes for table `wallet_history`
--
ALTER TABLE `wallet_history`
 ADD PRIMARY KEY (`id`), ADD KEY `type_id` (`type_id`), ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `weight_class`
--
ALTER TABLE `weight_class`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_post`
--
ALTER TABLE `admin_post`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `admin_user`
--
ALTER TABLE `admin_user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `buyer_details`
--
ALTER TABLE `buyer_details`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=240;
--
-- AUTO_INCREMENT for table `currency`
--
ALTER TABLE `currency`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `forgot_password`
--
ALTER TABLE `forgot_password`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `make_payment`
--
ALTER TABLE `make_payment`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `master_category_tags`
--
ALTER TABLE `master_category_tags`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `master_history_type`
--
ALTER TABLE `master_history_type`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `master_shipping_types`
--
ALTER TABLE `master_shipping_types`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `merchant`
--
ALTER TABLE `merchant`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `order_history`
--
ALTER TABLE `order_history`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `order_products`
--
ALTER TABLE `order_products`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `order_status`
--
ALTER TABLE `order_status`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `product_category_path`
--
ALTER TABLE `product_category_path`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `shipping_charges`
--
ALTER TABLE `shipping_charges`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `user_address`
--
ALTER TABLE `user_address`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `wallet_history`
--
ALTER TABLE `wallet_history`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `weight_class`
--
ALTER TABLE `weight_class`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `order`
--
ALTER TABLE `order`
ADD CONSTRAINT `order_ibfk_3` FOREIGN KEY (`bill_address_id`) REFERENCES `user_address` (`id`),
ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `buyer_details` (`id`),
ADD CONSTRAINT `order_ibfk_2` FOREIGN KEY (`ship_address_id`) REFERENCES `user_address` (`id`);

--
-- Constraints for table `order_products`
--
ALTER TABLE `order_products`
ADD CONSTRAINT `order_products_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
ADD CONSTRAINT `order_products_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`);

--
-- Constraints for table `states`
--
ALTER TABLE `states`
ADD CONSTRAINT `states_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
