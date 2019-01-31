-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2019 at 09:15 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `airports`
--

CREATE TABLE `airports` (
  `id` int(11) NOT NULL,
  `icao` varchar(5) NOT NULL DEFAULT '',
  `name` text NOT NULL,
  `city` varchar(50) NOT NULL DEFAULT '',
  `lat` float NOT NULL DEFAULT '0',
  `lng` float NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `airports`
--

INSERT INTO `airports` (`id`, `icao`, `name`, `city`, `lat`, `lng`) VALUES
(20, 'VAAH', 'Sardar Vallabhbhai Patel International Airport', 'Ahmedabad', 23.0734, 72.6266),
(21, 'VABB', 'Chhatrapati Shivaji International Airport', 'Mumbai, Maharashtra', 19.0896, 72.8656),
(22, 'VABO', 'Vadodara Airport', 'Vadodara, Gujarat', 22.3308, 73.2176),
(23, 'VAGO', 'Goa International Airport', 'Vasco da Gama, Goa', 15.3803, 73.835),
(24, 'VAID', 'Devi Ahilyabai Holkar Airport', 'Indore, Madhya-Pradesh', 22.7278, 75.8046),
(25, 'VANP', 'Dr. Babasaheb Ambedkar International Airport', 'Naqpur, Maharashtra', 21.0908, 79.0547),
(26, 'VAPO', 'Pune Airport', 'Pune, Maharashtra', 18.5791, 73.9087),
(27, 'VARK', 'Rajkot Airport', 'Rajkot, Gujarat', 22.3092, 70.7795),
(28, 'VASU', 'Surat Airport', ', Gujarat', 21.1141, 72.7418),
(29, 'VAUD', 'Maharana Pratap international Airport', 'Udaipur, Rajasthan', 24.62, 73.8904),
(30, 'VCBI', 'Bandaranaike International Airport', 'Colombo, Western', 7.18076, 79.8841),
(31, 'VEAT', 'Agartala Airport ', 'Agartala, Tripura', 23.8927, 91.2443),
(32, 'VEBD', 'Bagdogra Airport', 'Siliguri, West-Bengal', 26.6815, 88.3297),
(33, 'VEBN', 'Lal Bahadur Shastri International Airport (Varanasi)', 'India', 25.4521, 82.861),
(34, 'VEBS', 'Biju Patnaik International Airport', 'Bhubaneswar, Odisha', 20.2546, 85.816),
(35, 'VECC', 'Netaji Subhas Chandra Bose International Airport', 'Kolkata, West-Bengal', 22.652, 88.4463),
(36, 'VEGT', 'Lokpriya Gopinath Bordoloi International Airport', 'Guwahati, Assam', 26.1065, 91.586),
(37, 'VEIM', 'Tulihal International Airport', 'Imphal, Manipur', 24.7644, 93.8973),
(38, 'VEMN', 'Dibrugarh Airport', 'Dibrugarh, Assam', 27.484, 95.0229),
(39, 'VEMR', 'Dimapur Airport', 'Dimapur, Nagaland', 25.8815, 93.7742),
(40, 'VEPT', 'Lok Nayak Jayaprakash Airport', 'Patna, Bihar', 25.5944, 85.0908),
(41, 'VERC', 'Birsa Munda Airport', 'Ranchi, Jharkhand', 23.3171, 85.3253),
(42, 'VERP', 'Swami Vivekananda Airport', 'India', 21.186, 81.7404),
(43, 'VHHH', 'Chek Lap Kok International Airport', 'Hong Kong, ', 22.3089, 113.915),
(44, 'VIAR', 'Amritsar', 'Amritsar, Punjab', 31.7054, 74.8067),
(45, 'VICG', 'Chandigarh International Airport', 'Chandigarh, Chandigarh', 30.6684, 76.7862),
(46, 'VIDN', 'Jolly Grant Airport', 'Dehradun, Uttar-Pradesh', 30.195, 78.1921),
(47, 'VIDP', 'Indira Gandhi International Airport', 'New Delhi, NCT', 28.5562, 77.1),
(48, 'VIJP', 'Jaipur International Airport', 'Jaipur, Rajasthan', 26.8277, 75.8061),
(49, 'VIJU', 'Satwari Airport', 'Jammu, Jammu-and-Kashmir', 32.6902, 74.8424),
(50, 'VILK', 'Lucknow Airport', 'Lucknow, Uttar-Pradesh', 26.7606, 80.8893),
(51, 'VISR', 'Srinagar International Airport', 'Srinagar, Jammu-and-Kashmir', 34.0023, 74.7622),
(52, 'VNKT', 'Tribhuvan International Airport', 'Kathmandu, Central-Region', 27.6981, 85.3592),
(53, 'VOBL', 'Kempegowda International Airport', 'Bangalore, Karnataka', 13.1986, 77.7066),
(54, 'VOBZ', 'Vijayawada Airport', ', Andhra-Pradesh', 16.5304, 80.7968),
(55, 'VOCB', 'Coimbatore International Airport', 'Coimbatore, Tamil-Nadu', 11.0307, 77.0406),
(56, 'VOCI', 'Cochin International Airport', 'Cochin, Kerala', 10.1518, 76.393),
(57, 'VOCL', 'Calicut International Airport', 'Calicut, Kerala', 11.1399, 75.9511),
(58, 'VOHS', 'Rajiv Gandhi International Airport', 'Hyderabad, Telangana', 17.2403, 78.4294),
(59, 'VOMD', 'Madurai Airport', 'Madurai, Tamil-Nadu', 9.8386, 78.0895),
(60, 'VOML', 'Mangalore Airport', 'Mangalore, Karnataka', 12.9613, 74.8901),
(61, 'VOMM', 'Anna International Airport', 'Chennai, Tamil-Nadu', 12.9941, 80.1709),
(62, 'VOPB', 'Vir Savarkar International Airport', 'Port Blair, Andaman-and-Nicobar', 11.6503, 92.7328),
(63, 'VOPC', 'Pondicherry Airport', ', Tamil-Nadu', 11.9655, 79.8149),
(64, 'VOTR', 'Tiruchirapally Civil Airport', 'Tiruchirappally, Tamil-Nadu', 10.7654, 78.7097),
(65, 'VOTV', 'Trivandrum International Airport', 'Trivandrum, Kerala', 8.4834, 76.9198),
(66, 'VOVZ', 'Visakhapatnam Airport', 'India', 17.7277, 83.2237),
(67, 'VQPR', 'Paro Airport', 'Paro, Paro', 27.4032, 89.4246),
(68, 'VTBS', 'Suvarnabhumi Airport', 'Bangkok, Samut-Prakan', 13.69, 100.75),
(69, 'WSSS', 'Singapore Changi International Airport', 'Singapore, North-East', 1.3644, 103.992);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(4) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `airports`
--
ALTER TABLE `airports`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `icao` (`icao`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `airports`
--
ALTER TABLE `airports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;
COMMIT;
