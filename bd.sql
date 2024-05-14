-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 14, 2024 at 06:00 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` varchar(5) NOT NULL,
  `admin_name` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `username`, `password`) VALUES
('1', 'Super Admin', 'admin123', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `blood_request`
--

CREATE TABLE `blood_request` (
  `req_id` int(11) NOT NULL,
  `req_email` varchar(20) NOT NULL,
  `blood_grp` varchar(4) NOT NULL,
  `mes` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL,
  `req_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blood_request`
--

INSERT INTO `blood_request` (`req_id`, `req_email`, `blood_grp`, `mes`, `status`, `req_date`) VALUES
(1, 'shubham@gmail.com', 'A+', 'emergancy', '2', '2024-05-01'),
(2, 'shubham@gmail.com', 'A+', 'good news\r\n', '3', '2024-05-01'),
(3, 'shubham@gmail.com', 'A+', 'good news\r\n', '2', '2024-05-01'),
(4, 'shubham@gmail.com', 'A+', 'good news\r\n', '2', '2024-05-01'),
(5, 'shubham@gmail.com', 'B-', 'accident', '3', '2024-05-01'),
(6, 'shubham@gmail.com', 'B+', '', '2', '2024-05-03'),
(7, 'shubham@gmail.com', 'A-', 'good\r\n', '2', '2024-05-03'),
(8, 'shubham@gmail.com', 'O-', 'clear', '2', '2024-05-04'),
(10, 'chand@gmail.com', 'AB-', 'Brother got any accident', '1', '2012-05-24'),
(11, 'shubham@gmail.com', 'O+', 'accident ho gaya hai pls give blood 2 ltr only', '2', '2014-05-24'),
(12, 'vm20082003@gmail.com', 'AB+', 'gggg', '1', '2014-05-24'),
(13, 'vm20082003@gmail.com', 'AB+', 'gggg', '1', '2014-05-24'),
(14, 'vm20082003@gmail.com', 'A-', 'hhh', '1', '2014-05-24'),
(15, 'vm20082003@gmail.com', 'A-', 'hhh', '1', '2014-05-24'),
(16, 'vm20082003@gmail.com', 'O+', 'an acciedent\r\n', '1', '2014-05-24');

-- --------------------------------------------------------

--
-- Table structure for table `donation_camp`
--

CREATE TABLE `donation_camp` (
  `camp_id` int(11) NOT NULL,
  `camp_name` varchar(60) NOT NULL,
  `camp_date` date NOT NULL,
  `camp_place` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donation_camp`
--

INSERT INTO `donation_camp` (`camp_id`, `camp_name`, `camp_date`, `camp_place`) VALUES
(1, 'National Blood Camp', '2024-05-15', 'Sardarpura, Jodhpur'),
(2, 'A', '2024-05-21', 'Kayalana'),
(3, 'A', '2024-05-21', 'Kayalana'),
(4, 'jodhpur blood donners', '2024-05-21', 'pal balaji');

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE `donors` (
  `donor_email` varchar(30) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `age` int(4) NOT NULL,
  `gender` text NOT NULL,
  `blood_grp` varchar(5) NOT NULL,
  `mobile_no` bigint(10) DEFAULT NULL,
  `address` longtext NOT NULL,
  `donor_status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`donor_email`, `first_name`, `last_name`, `age`, `gender`, `blood_grp`, `mobile_no`, `address`, `donor_status`) VALUES
('aakskum@gmail.com', 'Aakesh', 'Kumar', 45, 'M', 'A+', 6375894535, '609, Jawahar Nagar Road, Near Jain Hospital, Sindhi Colony, Rajapark, Jaipur', 1),
('araeans@gmail.com', 'Aarna', 'Kansara', 36, 'F', 'O-', 8562096450, 'Mohanpura Puliya, Shaitan Singh Building, Near Marudhar Kesari apartment,, Jodhpur', 1),
('bhanchd@gmail.com', 'Bhavna', 'Kapoor', 28, 'F', 'AB+', 6356854575, 'Saraswati Nagar, Basni, Jodhpur, Rajasthan ', 1),
('brivnashds@gmail.com', 'Brinda', 'Bhatt', 29, 'F', 'A-', 6165641624, 'goal Buillding, sardarpura, Jodhpur', 1),
('chand@gmail.com', 'Chandran', 'Gupta', 25, 'M', 'A-', 8592071899, '269, 4, Vashisht Marg, Raja Park, Jaipur', 1),
('darshkhk@gmail.com', 'Darsh', 'Raj', 24, 'M', 'AB-', 7611919265, 'A-15,Sindhi Colony, Kalwar Rd, opp. Bank Of India, Jhotwara, Jaipur', 1),
('ekamshi@gmail.com', 'Ekansh', 'Kansara', 26, 'M', 'B+', 9419443675, 'CK Birla Hospital RBH Gopalpura Bypass, Near, Triveni flyover, Jaipur', 1),
('ela@gmail.com', 'Ela', 'Rathi', 32, 'F', 'O-', 9895969745, 'goal Buillding, sardarpura, Jodhpur', 1),
('eshnahan@gmail.com', 'Eshana', 'Gandhi', 31, 'F', 'O-', 9845754852, '3rd B Rd, Raniji Ka Mandir, Sardarpura, Jodhpur', 1),
('evakkk@gmail.com', 'Evak', 'Singh', 35, 'M', 'O-', 9637113354, '11-12, Laxmi Nagar, Sitabadi, Tonk Rd, Near Airport, Jaipur', 1),
('flaak@gmail.com', 'Falak', 'Jain', 36, 'F', 'AB+', 9988554245, '2nd `a` Road, Sardarpura, Sardarpura, Jodhpur', 1),
('geekiti@gmail.com', 'Geetika', 'Soni', 33, 'F', 'AB-', 7689654789, '8 Jawari Market Behind Mahveer Complex, Opp Bheru Bagh, Jain Mandir Gali, Sardarpura', 1),
('girike@gmail.com', 'Girik', 'Kapoor', 32, 'M', 'O+', 7340614578, 'Lakshmi clinic, solar road, Bandhu Nagar, Jaipur', 1),
('hemnahdgsf@gmail.com', 'Hemangini', 'Ropia', 35, 'F', 'B-', 6369658457, '3/2S, MHB, 342005, Basni, Jodhpur, Rajasthan', 1),
('idkihfh@gmail.com', 'Idika', 'Mathur', 22, 'F', 'O-', 8745968547, '8 Jawari Market Behind Mahveer Complex, Opp Bheru Bagh, Jain Mandir Gali, Sardarpura', 1),
('insha@gmail.com', 'Inesh', 'Mirdha', 45, 'M', 'AB+', 9529820315, '#192, Kamala Nehru Nagar, Opp.S.S Tower, Near.Aakhaliya Circle, Jodhpur', 1),
('isahaan@gmail.com', 'Ishaan', 'Panwar', 55, 'M', 'O+', 6376896725, '17/644, Sector 17, Chopasni Housing Board, Jodhpur', 1),
('ishnahai@gmail.com', 'Ishani', 'Chandroa', 34, 'F', 'O+', 9785475456, 'Sector 14, Chopasni Housing Board, Jodhpur', 1),
('jierass@gmail.com', 'Jiera', 'Rai', 21, 'F', 'AB+', 6569686634, '3/2S, MHB, 342005, Basni, Jodhpur, Rajasthan', 1),
('JIhans3@gmail.com', 'Jihan', 'Rathi', 47, 'M', 'A+', 8562175895, 'Agarwal tower, 226, II Floor, 3rd B Rd, Sardarpura, Jodhpur', 1),
('karkisksdh@gmail.com', 'Kalki', 'Sanchora', 22, 'F', 'AB-', 9695989479, '322, III \'A\' Road Opposite ICICI Bank, Sardarpura, Jodhpur', 1),
('lekhaess@gmail.com', 'Lekha', 'Manki', 25, 'F', 'A+', 9294959874, 'Sector 14, Chopasni Housing Board, Jodhpur', 1),
('mairiissd@gmail.com', 'Maira', 'Jain', 25, 'F', 'O+', 6378485742, 'S-13 Dharamnarayan ka Hattha, B, Paota Main Rd, Paota, Jodhpur', 1),
('mayan23@gmail.com', 'Mayan', 'Parmar', 36, 'M', 'AB-', 9119141310, '8 Jawari Market Behind Mahveer Complex, Opp Bheru Bagh, Jain Mandir Gali, Sardarpura', 1),
('mihiksdha@gmail.com', 'Mihika', 'Mathur', 26, 'F', 'B+', 6363568964, 'Kudi Bhagtasni ,Housing Board, Basni Ist Phase, Jodhpur', 1),
('nihal23456@gmail.com', 'Nihal', 'Bohra', 35, 'M', 'O+', 9694554830, '3/2S, MHB, 342005, Basni, Jodhpur, Rajasthan', 1),
('pranitdse@gmail.com', 'Pranit', 'Karwal', 22, 'M', 'O+', 9460007196, '322, III \'A\' Road Opposite ICICI Bank, Sardarpura, Jodhpur', 1),
('rayayan@gmail.com', 'Rayaan', 'Jain', 29, 'M', 'O-', 9475124845, 'Sector 14, Chopasni Housing Board, Jodhpur', 1),
('samaeshh@gmail.com', 'Samesh', 'Pourohit', 30, 'M', 'A-', 8672091599, 'Kudi Bhagtasni ,Housing Board, Basni Ist Phase, Jodhpur', 1),
('shubham@gmail.com', 'shubham', 'solanki', 21, 'M', 'A-', 1111111111, 'jodhpur', 1),
('TUNINUND@gmail.com', 'Tuhin', 'Kalla', 30, 'M', 'AB+', 6374845744, 'UIT Rd, Ratanada, Jodhpur, Rajasthan 342001', 1),
('vadikhhs@gmail.com', 'Vaidik', 'Meena', 34, 'M', 'B+', 9602074318, 'New Prajapat Colony, 7, Sabji Mandi Link Rd, Mahaveer Colony, Ratanada, Jodhpur', 1),
('vdvikshsa@gmail.com', 'Advika', 'Singh', 37, 'F', 'AB-', 9495687541, 'goal Buillding, sardarpura, Jodhpur', 1),
('vk34@gmail.com', 'vivek', 'kumar', 21, 'male', 'O+', 6376896735, 'masuriya', 1),
('vm20082003@gmail.com', 'vikash', 'mirdha', 21, 'male', 'A-', 6375871622, 'PAL BALAJI', 1),
('yachidhbch@gmail.com', 'Yashica', 'Kumar', 28, 'F', 'O-', 6376896734, 'Saraswati Nagar, Basni, Jodhpur, Rajasthan ', 1),
('yashhh@gmail.com', 'Yash', 'Rajput', 35, 'M', 'O+', 7611919216, '22 Basement, Gulab Bhawan, , Below Raymond Showroom, Sanishchar Ji Ka Thaan, jodhpur', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `name` varchar(39) NOT NULL,
  `address` varchar(43) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `email` varchar(33) NOT NULL,
  `sector` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`name`, `address`, `contact`, `email`, `sector`) VALUES
('Hospital Names', 'Hospital Address', 'Contact Number', 'Email Address', 'Sector'),
('Lotus Medical Center', '123, Blossom Road, Jaipur - 302001', '+91 12345 67890', 'LotusMedicalJaipur@gmail.com', 'Private'),
('Himalaya Hospital & Research Institute', '456, Mountain View Avenue, Udaipur - 313001', '+91 98765 43210', 'HimalayaHospitalUdaipur@gmail.com', 'Government'),
('Serenity Healthcare', '789, Peace Street, Jodhpur - 342001', '+91 87654 32109', 'SerenityHealthJodhpur@gmail.com', 'Government'),
('Sunflower Hospital Group', '101, Sunshine Boulevard, Kota - 324001', '+91 76543 21098', 'SunflowerKota@gmail.com', 'Government'),
('Tranquil Wellness Hospital', '234, Serenity Lane, Ajmer - 305001', '+91 65432 10987', 'TranquilWellnessAjmer@gmail.com', 'Government'),
('Golden Gate Medical Centre', '567, Golden Gate Street, Bikaner - 334001', '+91 54321 09876', 'GoldenGateBikaner@gmail.com', 'Private'),
('Harmony Health Clinic', '321, Harmony Road, Alwar - 301001', '+91 43210 98765', 'HarmonyHealthAlwar@gmail.com', 'Government'),
('Oasis Hospital & Wellness Center', '432, Oasis Avenue, Sikar - 332001', '+91 32109 87654', 'OasisSikar@gmail.com', 'Private'),
('Rainbow Care Hospital', '876, Rainbow Drive, Bhilwara - 311001', '+91 21098 76543', 'RainbowCareBhilwara@gmail.com', 'Government'),
('Blue Sky Healthcare', '543, Skyline Road, Jaisalmer - 345001', '+91 10987 65432', 'BlueSkyJaisalmer@gmail.com', 'Government'),
('Royal Palm Medical Center', '987, Royal Palm Lane, Chittorgarh - 312001', '+91 09876 54321', 'RoyalPalmChittorgarh@gmail.com', 'Private'),
('Sunrise Surgical Hospital', '765, Sunrise Avenue, Pali - 306401', '+91 98765 43210', 'SunrisePali@gmail.com', 'Private'),
('Unity Hospital Group', '654, Unity Street, Bharatpur - 321001', '+91 87654 32109', 'UnityBharatpur@gmail.com', 'Government'),
('Divine Mercy Health Services', '321, Mercy Lane, Banswara - 327001', '+91 76543 21098', 'DivineMercyBanswara@gmail.com', 'Private'),
('Evergreen Hospital & Research Institute', '111, Evergreen Park, Dungarpur - 314001', '+91 65432 10987', 'EvergreenDungarpur@gmail.com', 'Government'),
('Lifeline Medical Center', '999, Lifeline Road, Hanumangarh - 335512', '+91 54321 09876', 'LifelineHanumangarh@gmail.com', 'Private'),
('Pearl Health Institute', '777, Pearl Avenue, Sirohi - 307001', '+91 43210 98765', 'PearlSirohi@gmail.com', 'Government'),
('Blossom Healthcare Solutions', '888, Blossom Lane, Barmer - 344001', '+91 32109 87654', 'BlossomBarmer@gmail.com', 'Private'),
('Wellness Waves Hospital', '222, Wellness Road, Nagaur - 341001', '+91 21098 76543', 'WellnessWavesNagaur@gmail.com', 'Government'),
('Starlight Medical Complex', '333, Starlight Street, Jhunjhunu - 333001', '+91 10987 65432', 'StarlightJhunjhunu@gmail.com', 'Private');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(5) NOT NULL,
  `user_email` varchar(20) NOT NULL,
  `user_pass` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_email`, `user_pass`) VALUES
(1, 'aakskum@gmail.com', '1234'),
(2, 'aaravkh@gmail.com', '1234'),
(26, 'araeans@gmail.com', '1234'),
(28, 'bhanchd@gmail.com', '1234'),
(29, 'brivnashds@gmail.com', '1234'),
(3, 'chand@gmail.com', '1234'),
(30, 'chnakiariri@gmail.co', '1234'),
(31, 'dakhsaw@gmail.com', '1234'),
(4, 'darshkhk@gmail.com', '1234'),
(5, 'ekamshi@gmail.com', '1234'),
(32, 'ela@gmail.com', '1234'),
(33, 'eshnahan@gmail.com', '1234'),
(6, 'evakkk@gmail.com', '1234'),
(34, 'flaak@gmail.com', '1234'),
(35, 'geekiti@gmail.com', '1234'),
(7, 'girike@gmail.com', '1234'),
(14, 'gmandirse23@gmail.co', '1234'),
(36, 'hemnahdgsf@gmail.com', '1234'),
(8, 'Hrednha@gmail.com', '1234'),
(38, 'idkihfh@gmail.com', '1234'),
(9, 'insha@gmail.com', '1234'),
(10, 'isahaan@gmail.com', '1234'),
(37, 'ishnahai@gmail.com', '1234'),
(39, 'jierass@gmail.com', '1234'),
(11, 'JIhans3@gmail.com', '1234'),
(40, 'karkisksdh@gmail.com', '1234'),
(12, 'lashds33@gmail.com', '1234'),
(41, 'lekhaess@gmail.com', '1234'),
(13, 'lohitkhusne@gmail.co', '1234'),
(43, 'mairiissd@gmail.com', '1234'),
(15, 'mayan23@gmail.com', '1234'),
(42, 'mihiksdha@gmail.com', '1234'),
(16, 'nihal23456@gmail.com', '1234'),
(44, 'nyrakjifg4534@gmail.', '1234'),
(45, 'oishihfgh5667@gmail.', '1234'),
(17, 'oviyanrkaushe23@gmai', '1234'),
(18, 'pranitdse@gmail.com', '1234'),
(46, 'prishndhfbattau@gmai', '1234'),
(19, 'rayayan@gmail.com', '1234'),
(47, 'sairaksjnvhgk@gmail.', '1234'),
(48, 'sairashhchb@gmail.co', '1234'),
(20, 'samaeshh@gmail.com', '1234'),
(21, 'sanatttt2344322@gmai', '1234'),
(32, 'shubham@gmail.com', '123456'),
(22, 'TUNINUND@gmail.com', '1234'),
(49, 'turiviihuhu@gmail.co', '1234'),
(23, 'umanhdgcgf34243@gmai', '1234'),
(34, 'user_email', 'user_pass'),
(24, 'vadikhhs@gmail.com', '1234'),
(27, 'vdvikshsa@gmail.com', '1234'),
(33, 'vikash@gmail.com', '123456'),
(52, 'vk34@gmail.com', '123456'),
(51, 'vm20082003@gmail.com', '123456789'),
(50, 'yachidhbch@gmail.com', '1234'),
(25, 'yashhh@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `user_activity`
--

CREATE TABLE `user_activity` (
  `user_id` varchar(8) NOT NULL,
  `username` varchar(30) NOT NULL,
  `donate_date` date NOT NULL DEFAULT current_timestamp(),
  `camp_id` int(11) NOT NULL,
  `status` int(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_activity`
--

INSERT INTO `user_activity` (`user_id`, `username`, `donate_date`, `camp_id`, `status`) VALUES
('1', 'shubham@gmail.com', '2024-02-12', 1, 2),
('', 'chand@gmail.com', '0000-00-00', 1, 2),
('', 'vm20082003@gmail.com', '0000-00-00', 4, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `blood_request`
--
ALTER TABLE `blood_request`
  ADD PRIMARY KEY (`req_id`),
  ADD KEY `EmailMatch` (`req_email`);

--
-- Indexes for table `donation_camp`
--
ALTER TABLE `donation_camp`
  ADD PRIMARY KEY (`camp_id`);

--
-- Indexes for table `donors`
--
ALTER TABLE `donors`
  ADD PRIMARY KEY (`donor_email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_email`) USING BTREE,
  ADD KEY `user_id` (`user_id`) USING BTREE;

--
-- Indexes for table `user_activity`
--
ALTER TABLE `user_activity`
  ADD KEY `Camp Id Match` (`camp_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blood_request`
--
ALTER TABLE `blood_request`
  MODIFY `req_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `donation_camp`
--
ALTER TABLE `donation_camp`
  MODIFY `camp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blood_request`
--
ALTER TABLE `blood_request`
  ADD CONSTRAINT `EmailMatch` FOREIGN KEY (`req_email`) REFERENCES `donors` (`donor_email`);

--
-- Constraints for table `donors`
--
ALTER TABLE `donors`
  ADD CONSTRAINT `Email` FOREIGN KEY (`donor_email`) REFERENCES `users` (`user_email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_activity`
--
ALTER TABLE `user_activity`
  ADD CONSTRAINT `Camp Id Match` FOREIGN KEY (`camp_id`) REFERENCES `donation_camp` (`camp_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
