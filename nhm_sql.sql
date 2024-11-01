-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2023 at 09:32 AM
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
-- Database: `nhm`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cid` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cid`, `username`, `phone`, `email`, `password`) VALUES
(1, 'Olivia Wright', '6828563009', 'olivia.wright@email.com', 'password123'),
(2, 'Isaac Martinez', '8654895678', 'isaac.martinez@email.com', '12345678ab'),
(3, 'Lila Patel', '8753459012', 'lila.patel@email.com', 'password789'),
(4, 'Elijah Bailey', '7578563956', 'elijah.bailey@gmail.com', 'passwordabc'),
(5, 'Mia Nguyen', '7890928244', 'mia.nguyen@email.com', 'passworddef'),
(6, 'Jack Lee', '8563124529', 'jack.lee@email.com', 'passwordghi'),
(7, 'Emily Adams', '8563126789', 'emily.adams@email.com', 'passwordjkl'),
(8, 'William Turner', '8563124023', 'william.turner@gmail.com', 'passwordmno'),
(9, 'Victoria Johnson', '8563124567', 'victoria.johnson@email.com', 'passwordpqr'),
(10, 'Benjamin Young', '8563124891', 'benjamin.young@email.com', 'passwordstu'),
(11, 'Charlotte Davis', '8563132345', 'charlotte.davis@email.com', 'passwordvwx'),
(12, 'Alexander Perez', '8563124679', 'alexander.perez@email.com', 'passwordyz'),
(13, 'Harper Rodriguez', '8563124023', 'harper.rodriguez@email.com', 'password123'),
(14, 'Lucas Brown', '8563124567', 'lucas.brown@email.com', 'password456'),
(15, 'Samantha Scott', '8563124801', 'samantha.scott@email.com', 'password789'),
(16, 'Owen Wilson', '8563124245', 'owen.wilson@email.com', 'passwordabc'),
(17, 'Elizabeth Campbell', '8563124678', 'elizabeth.campbell@gmail.com', 'passworddef'),
(18, 'Michael Flores', '7894567890', 'mflores@yahooo.com', 'password123'),
(19, 'Ava Collins', '7645678901', 'acollins@email.com', 'qwerty123'),
(20, 'Henry Edwards', '9056789012', 'hedwards@email.com', 'letmein123'),
(21, 'Isabella Carter', '6567890123', 'isacarter@email.com', 'mypassword'),
(22, 'Ethan Cooper', '9678901234', 'ecooper@email.com', 'hello123'),
(23, 'Grace Hill', '6789012345', 'gracehill@yahoo.com', 'abc123'),
(24, 'Noah Parker', '7890123456', 'nparker@email.com', 'password'),
(25, 'Amelia Foster', '8901234567', 'afoster@email.com', '1234567ab'),
(26, 'Jacob Rivera', '9012345678', 'jrivera@example.com', 'iloveyou'),
(27, 'Madison Sullivan', '7123456789', 'msullivan@example.co', 'welcome123'),
(28, 'Daniel Cook', '9876543210', 'dcook@example.com', 'password123'),
(29, 'Natalie Long', '8765432109', 'nlong@example.com', 'qwerty123'),
(30, 'Christopher Ramirez', '7654321098', 'cramirez@example.com', 'letmein123'),
(31, 'Chloe Brooks', '6543210987', 'cbrooks@example.com', 'mypassword'),
(32, 'Matthew Morris', '6432109876', 'mmorris@example.com', 'hello123'),
(33, 'Sophie Ross', '9321098765', 'sross@example.com', 'abc123'),
(34, 'Gabriel Green', '8210987654', 'ggreen@example.com', 'password'),
(35, 'Addison Reyes', '7709876543', 'areyes@example.com', '123456'),
(36, 'David Cooper', '6798765432', 'dcooper@example.com', 'iloveyou'),
(37, 'Scarlett Kim', '9987654321', 'skim@example.com', 'welcome123'),
(38, 'Andrew Woods', '9876543210', 'awoods@example.com', 'password123'),
(39, 'Mia Stone', '8765432109', 'mstone@example.com', 'qwerty123'),
(40, 'William Richardson', '7654321098', 'wrichardson@example.', 'letmein123'),
(41, 'Ella Gray', '6543210987', 'egray@example.com', 'mypassword'),
(42, 'Alexander James', '9432109876', 'ajames@example.com', 'hello123'),
(43, 'Sofia Bailey', '6721098765', 'sbailey@example.com', 'abc123'),
(44, 'Joseph Coleman', '9210987654', 'jcoleman@example.com', 'password'),
(45, 'Caroline Reyes', '9909876543', 'creyes@example.com', '123456'),
(46, 'Samuel Morgan', '7898765432', 'smorgan@example.com', 'youver12'),
(47, 'Aria Patel', '9321098766', 'ariapatel@gmail.com', 'abcd123'),
(48, 'Jonathan Flores', '8210987644', 'jflores@gmail.com', 'password34'),
(49, 'Lily Rogers', '7709876843', 'rogers@gmail.com', '1234567'),
(50, 'Joshua Baker', '6798700492', 'baker@gmail.com', 'password99'),
(51, 'Fatma', '8777619872', 'fatma@gmail.com', 'abcdef');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pid` int(11) NOT NULL,
  `pname` varchar(50) DEFAULT NULL,
  `type` varchar(15) NOT NULL,
  `brand` varchar(15) NOT NULL,
  `price` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `pname`, `type`, `brand`, `price`) VALUES
(1, 'Drill Machine', 'PowerTools', 'Bosch', '2500.00'),
(2, 'Chopsaw Machine', 'PowerTools', 'Bosch', '10500.00'),
(3, 'De-spanner', 'HandTools', 'Taparia', '500.00'),
(4, 'Bolts,Nuts,Washer', 'SpareTools', 'Unbrako', '350.00'),
(5, 'Vernier Calliper', 'MeasuringTools', 'Mityupoyo', '800.00'),
(6, 'Circular Saw Machine', 'PowerTools', 'Bosch', '3500.00'),
(7, 'Marble Cutter Machine', 'PowerTools ', 'Bosch', '2400.00'),
(8, 'Pipe Bending Machine', 'HeavyMachinery', 'Bosch', '17000.00'),
(9, 'Cotton Candy Machine', 'HeavyMachinery', 'Universal', '12000.00'),
(10, 'Ice-gola Machine', 'HeavyMachinery', 'Universal', '4500.00'),
(11, 'Welding machine', 'HeavyMachinery', 'Camel', '4500.00'),
(12, 'Monoblock Pump', 'MotorPump', 'Crompton', '3000.00'),
(13, 'Heat Gun', 'PowerTools', 'Stanley', '1800.00'),
(14, 'Plastic Sealing Machine', 'HandTools', 'Seepack', '1500.00'),
(15, 'Bag Closing Machine', 'PowerTools', 'JK', '5000.00'),
(16, 'Pressure Washer', 'HeavyMachinery', 'Karcher', '5500.00'),
(17, 'Vacuum Cleaner', 'HeavyMachinery', 'Karcher', '8000.00'),
(18, 'Hydraulic Test Pump', 'MotorPump', 'Farheen', '3500.00'),
(19, 'Micrometer', 'MeasuringTools', 'Forbes', '2500.00'),
(20, 'Clampmeter', 'MeasuringTools', 'Waco', '1800.00'),
(21, 'Armature', 'SpareTools', 'Universal', '1500.00'),
(22, 'Carbon Brush', 'SpareTools', 'Ideal', '120.00'),
(23, 'Field Coil', 'SpareTools', 'Masteck', '900.00'),
(24, 'Bearing', 'SpareTools', 'HCH', '20.00'),
(25, 'Ring Spanner Set', 'HandTools', 'Taparia', '700.00'),
(26, 'Ballpen Hammer', 'HandTools', 'Venus', '210.00'),
(27, 'Claw Hammer', 'HandTools', 'Baum', '280.00'),
(28, 'Digital Thermometer', 'MeasuringTools', 'ArrowSpace', '2650.00'),
(29, 'Wire Gauge', 'MeasuringTools', 'Kristeel', '550.00'),
(30, 'Blower', 'PowerTools', 'PlanetPower', '1500.00'),
(31, 'Planer', 'PowerTools', 'KPT', '3200.00'),
(32, 'Mitersaw Machine', 'PowerTools', 'Electro', '7800.00'),
(33, 'Slab Cutter Machine', 'PowerTools', 'ExtraPower', '16000.00'),
(34, 'Profile Cutting Machine', 'HeavyMachinery', 'Cruxweld', '68000.00'),
(35, 'Bench Grinder ', 'HeavyMachinery', 'Bosch', '8800.00'),
(36, 'Sheet Bending Machine', 'HeavyMachinery', 'Metro', '98000.00'),
(37, 'Pillar Drill Machine', 'HeavyMachinery', 'Vishal', '38000.00'),
(38, 'Submersible Pump', 'MotorPump', 'Kirloskar', '27000.00'),
(39, 'Openweld Pump', 'MotorPump', 'CRI ', '19000.00'),
(40, '5HP Motor', 'MotorPump', 'Crompton', '29000.00'),
(41, '2HP Motor', 'MotorPump', 'Crompton', '10800.00'),
(42, 'Socket Set', 'HandTools', 'Jhalani', '4200.00'),
(43, 'Pipe Wrench', 'HandTools', 'Ajay', '280.00'),
(44, 'Electric Chain Saw', 'PowerTools', 'ICann', '3600.00'),
(45, 'Paint Mixture', 'PowerTools', 'HighMaxx', '2600.00'),
(46, 'Hammer Drill Machine', 'PowerTools', 'Advance', '3500.00'),
(47, 'Gear Pinion', 'SpareTools', 'Ideal', '380.00'),
(48, 'Depthmeter', 'MeasuringTools', 'Forbes', '1200.00'),
(49, 'Height Gauge', 'MeasuringTools', 'Forbes', '1800.00'),
(50, 'Ball Press Machine', 'HeavyMachinery', 'JK', '105000.00');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `rid` int(11) NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `cid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`rid`, `description`, `pid`, `cid`) VALUES
(1, 'I purchased this 2hp motor pump for my farm and it has exceeded my expectations. It pumps water quickly and efficiently, and the motor runs smoothly without any issues. I\'m very happy with this purchase and would highly recommend it to anyone in need of a reliable motor pump.', 41, 1),
(2, 'This product is good, but could be better. I wish it had more features.', 41, 2),
(3, 'I\'ve been using this 5hp motor pump for my farm for over a year now and it\'s been working great. It has enough power to pump water from a deep well and it\'s very reliable. I haven\'t had any issues with it and I\'m glad I invested in this quality pump.', 40, 3),
(4, 'This 5hp motor pump is a beast! It can handle heavy-duty pumping tasks with ease. I use it for my industrial cleaning business and it has never let me down. It\'s also surprisingly quiet for a pump of this size.', 40, 4),
(5, 'I was skeptical about buying an armature online, but I am so glad I did. The armature arrived quickly and it was exactly what I needed. The price was very reasonable compared to other retailers I had checked. I am very satisfied with my purchase and will definitely buy from this seller again.', 21, 5),
(6, 'I purchased the armature for my power tool and it was a perfect replacement. The quality of the product is excellent and it was easy to install. My power tool now works like new again. I highly recommend this armature.', 21, 6),
(7, 'The bag closing machine I bought works decently well. It gets the job done, but it\'s not the fastest or most efficient machine out there. It requires frequent maintenance and adjustments to keep it running smoothly. While it\'s not perfect, it\'s a decent option for someone on a budget looking for a basic bag closing machine.', 15, 7),
(8, 'I am extremely satisfied with the bag closing machine I purchased. It has made my work so much easier and efficient. The machine is easy to operate and maintain. It does a great job of closing bags quickly and neatly.', 15, 8),
(9, 'I\'ve been using the ball press machine for a few months now and it has been fantastic. It\'s durable and sturdy, and I\'ve had no issues with it so far. The press is easy to operate, and the balls it produces are of high quality. It\'s also very easy to clean and maintain. Overall, I\'m very satisfied with my purchase.', 50, 9),
(10, 'The ball press machine is decent for its price, but I\'ve had some issues with it. It sometimes jams and requires manual intervention to clear, which can be frustrating. The balls it produces are not always consistent in size and shape, which can be a problem if you need uniform balls for your project. It\'s not the best machine out there, but it gets the job done if you\'re on a budget.', 50, 10),
(11, 'This hammer is excellent! The weight feels just right, and the ballpeen end is great for shaping metal. The handle is comfortable to grip, and the overall quality is top-notch.', 26, 11),
(12, 'I was disappointed with this ballpeen hammer. The handle felt flimsy, and after only a few uses, the head started to wobble. I ended up having to replace it with a more durable option. Not worth the money.', 26, 12),
(13, 'I  needed a replacement bearing for my bike and decided to try out this brand. I was pleasantly surprised by the quality and durability of the bearing. It has been performing smoothly for months now, even with daily use.', 24, 13),
(14, 'I recently purchased a set of these bearings for a DIY project and was disappointed with their performance. They seemed to wear down quickly and caused a lot of friction, making my project difficult to complete.', 24, 14),
(15, 'This bench grinder is great for sharpening my tools. It\'s powerful and gets the job done quickly.', 35, 15),
(16, 'Easy to assemble and use. The adjustable speed control is a nice feature, and the wheels stay balanced during use.', 35, 16),
(17, 'The blower is a little heavy, but it gets the job done. It\'s perfect for cleaning out the garage or blowing away snow from the sidewalks.', 30, 17),
(18, 'This blower is amazing! It\'s so powerful and can easily blow away leaves, dirt, and debris from my driveway and yard. Highly recommend it.', 30, 18),
(19, 'I\'ve used a lot of different bolts, nuts, and washers over the years, but these are some of the best. They\'re well-made and fit together perfectly.', 4, 19),
(20, 'These bolts, nuts, and washers worked perfectly for my DIY project. They were easy to use and held everything together securely.', 4, 20),
(21, 'These carbon brushes work fine, but they seem to wear out faster than expected. They get the job done, but I have to replace them more often than I\'d like them.', 22, 21),
(22, 'These carbon brushes were a waste of money. They didn\'t fit properly and barely worked at all. I ended up having to buy a different brand.', 22, 22),
(23, 'I recently purchased the chop saw machine and it has been a game changer for my woodworking projects. It\'s powerful and accurate, making clean cuts every time. Great value for the price!', 2, 23),
(24, 'The chop saw machine is decent for small projects but I\'ve had some issues with accuracy and it can be a bit loud. It gets the job done but I think there are better options out there.', 2, 24),
(25, 'This circular saw machine is simply amazing! It is very easy to use and the precision of the cuts is remarkable. I have used it to cut various types of wood and it has never disappointed me. I highly recommend this product to anyone looking for a reliable circular saw.', 6, 25),
(26, ' I recently purchased this circular saw machine and I am very pleased with my purchase. It is well-built and sturdy, and the blade is sharp enough to make clean cuts. The machine is also very easy to adjust and the depth gauge is very accurate. Overall, I am very happy with this product.', 6, 26),
(27, 'This clamp meter is a game changer for anyone working with electrical circuits. It\'s accurate, easy to use, and the LCD display is clear and easy to read. I\'m very impressed with the build quality and performance of this tool.', 20, 27),
(28, 'This clamp meter is okay, but I\'ve had some issues with accuracy. It seems to work fine for smaller currents, but when I tried to measure a larger current, it gave me inconsistent readings. It\'s a decent tool for the price, but I would suggest looking at other options if you need something more reliable.', 20, 28),
(29, 'I\'ve used this claw hammer on multiple projects and it\'s held up really well. The grip is comfortable and provides a secure hold, and the hammer itself is sturdy and well-made. ', 27, 29),
(30, 'This claw hammer is the perfect size and weight for home repairs. The claw is sharp and easily removes nails without damaging the surrounding area', 27, 30),
(31, 'I absolutely love this cotton candy machine! It\'s easy to use and produces fluffy and delicious cotton candy in just minutes. Perfect for parties and events.', 9, 31),
(32, 'This machine is amazing! It\'s easy to set up and clean, and the cotton candy comes out perfectly every time. The kids at my daughter\'s birthday party couldn\'t get enough.', 9, 32),
(33, 'The De-spanner is a decent tool, but it\'s nothing special. It does the job, but it\'s not as comfortable to hold as some other spanners I\'ve used. Overall, it\'s an okay choice if you need a new spanner and don\'t want to spend too much.', 3, 33),
(34, 'I\'ve used the De-spanner for a few projects now, and it has performed flawlessly. The grip is comfortable and the jaws are precise, making it easy to use on a variety of bolts and nuts.', 3, 34),
(35, 'The depth meter worked perfectly for my diving trip. Accurate readings and easy to use.', 48, 35),
(36, 'The depth meter did its job, but I found the instructions a bit confusing and had to figure things out on my own.', 48, 36),
(37, 'This thermometer is super accurate and gives a reading in just a few seconds. I love how easy it is to use, and it\'s perfect for taking temperatures of both adults and children.', 28, 37),
(38, 'I\'m really disappointed in this thermometer. It\'s incredibly slow and sometimes gives me an error message instead of a temperature reading.', 28, 38),
(39, 'This drill machine is amazing! It\'s very powerful and easy to use. I was able to complete my DIY project in no time with this drill.', 1, 39),
(40, 'I\'m very impressed with this drill machine. It\'s very well-built and durable, and it comes with a lot of different drill bits. It\'s definitely a great value for the price.', 1, 40),
(41, 'I was hesitant to buy an electric chainsaw, but this one exceeded my expectations. It\'s much quieter than a gas chainsaw and has plenty of power. Great value for the price.', 44, 41),
(42, 'It\'s a decent chainsaw. It does the job, but I wish it had a longer bar and chain. Also, the chain tensioning system is a bit finicky.', 44, 42),
(43, 'The field coil was easy to install and my machine is running smoothly again.', 23, 43),
(44, 'This field coil did the job, but it wasn\'t as durable as I had hoped. It started to wear down after a few months of use.', 23, 44),
(45, 'Great quality gear pinion, smooth operation and easy to install. Very satisfied with my purchase.', 47, 45),
(46, 'The gear pinion works flawlessly and has greatly improved the efficiency of my machine.', 47, 46),
(47, 'I\'m very happy with this hammer drill. It\'s well-made, durable, and has a lot of useful features. Definitely worth the investment.', 46, 47),
(48, 'This hammer drill is a beast! It\'s powerful, easy to handle, and got the job done quickly. Highly recommend it.', 46, 48),
(49, 'The heat gun works fine, but it\'s not as powerful as I expected. It takes a while to heat up and doesn\'t work well on thicker materials.', 13, 49),
(50, 'This heat gun is amazing! It heats up quickly and does a great job of shrinking plastic wrap on my windows. I highly recommend it!', 13, 50),
(51, 'The height gauge is decent. It gets the job done, but it\'s not as accurate as I was hoping for.', 49, 1),
(52, 'I was disappointed with this height gauge. The measurement markings were difficult to read and the tool felt flimsy in my hands.', 49, 2),
(53, 'This hydraulic pump is a game changer! It has made my work so much easier and faster.', 18, 3),
(54, 'I\'ve been using this hydraulic pump for a few months now and it hasn\'t let me down yet. It\'s powerful, reliable and easy to use. Definitely worth the investment.', 18, 4),
(55, 'This ice gola machine is amazing! It makes perfect shaved ice every time and is so easy to use. My family loves it!', 10, 5),
(56, 'I bought this ice gola machine for my daughter\'s birthday party and it was a huge hit! All the kids loved it and the ice was so refreshing on a hot day.', 10, 6),
(57, 'The marble cutter machine is an absolute game-changer. It\'s easy to use, cuts smoothly, and saves a lot of time compared to manual cutting. I love it!', 7, 7),
(58, 'I\'m impressed with this marble cutter machine. It cuts through the toughest of materials with ease and precision. Highly recommended!', 7, 8),
(59, ' I\'ve used a lot of different micrometers in my time, and this one is by far the best. It\'s incredibly precise and very easy to read, even on small measurements.', 19, 9),
(60, 'This micrometer works fine, but it\'s nothing special. It gets the job done, but I\'ve used others that were easier to handle and read.', 19, 10),
(61, 'This mitersaw is easy to use and has a smooth cutting action. The dust collection system is efficient and keeps the work area clean. A great addition to any workshop.', 32, 11),
(62, 'The mitersaw is an excellent tool for precision cutting. The laser guide is very helpful and the blade is sharp and powerful.', 32, 12),
(63, 'I am extremely satisfied with this pump. It\'s been working flawlessly for months and has improved the water flow in my home significantly.', 12, 13),
(64, 'The pump works fine, but it\'s a bit noisy and doesn\'t seem to be as powerful as I was expecting.', 12, 14),
(65, 'This openwell pump is excellent! It\'s powerful and efficient, and has been working perfectly for my water supply needs.', 39, 15),
(66, 'This openwell pump is okay. It gets the job done, but I\'ve had a few issues with the motor overheating and shutting off. It\'s not bad for the price, though.', 39, 16),
(67, 'I love this paint mixer! It\'s so easy to use and it saves me so much time. The machine is also very durable and well-made.', 45, 17),
(68, 'This paint mixer is amazing! It blends paint quickly and efficiently, making my job much easier. ', 45, 18),
(69, 'The pillar drill is an excellent addition to my workshop. It\'s sturdy and well-built, and I\'ve had no issues drilling through a variety of materials.', 37, 19),
(70, 'The pillar drill is a decent tool for the price. It gets the job done, but I\'ve had some issues with the chuck loosening during use. Overall, it\'s a decent option if you\'re on a budget.', 37, 20),
(71, 'This pipe bending machine is fantastic! It\'s easy to use and gets the job done quickly. I highly recommend it to anyone in the industry.', 8, 21),
(72, 'I am impressed by the accuracy and precision of this pipe bending machine. It makes my job so much easier and I have never had any issues with it.', 8, 22),
(73, 'I was really disappointed with this pipe wrench. It didn\'t have the grip I was looking for, and the handle felt flimsy. It\'s definitely not worth the money.', 43, 23),
(74, 'The size and weight of this pipe wrench make it easy to handle. I appreciate the high-quality materials used in its construction.', 43, 24),
(75, 'I was really disappointed with this planer. It broke after just a few uses, and the customer service was terrible. I wouldn\'t recommend it to anyone.', 31, 25),
(76, 'I\'ve used a lot of planers in my time, but this one is the best by far. It\'s sturdy, well-built, and gets the job done quickly and efficiently.', 31, 26),
(77, 'This plastic sealing machine is a game changer! It\'s so easy to use and produces perfect seals every time.', 14, 27),
(78, 'This plastic sealing machine is okay. It does the job, but I\'ve had some issues with it jamming and the seals not coming out as clean as I would like.', 14, 28),
(79, 'Excellent pressure washer with great cleaning power. I use it for washing my car and it does an amazing job. No complaints at all.', 16, 29),
(80, 'This pressure washer is a game-changer! It makes cleaning my deck a breeze and is easy to operate. Highly recommend!', 16, 30),
(81, 'This profile cutting machine is a game-changer! It has drastically reduced the amount of time and effort it takes to cut profiles. I\'m very happy with my purchase.', 34, 31),
(82, 'This profile cutting machine gets the job done, but it\'s not the most user-friendly. It took me a little while to figure out how to use it properly. It\'s not a bad machine, but there are probably better options out there.', 34, 32),
(83, 'I bought this set for my workshop and I\'m very happy with it. The spanners are well made and durable. Great value for the price.', 25, 33),
(84, 'The ring spanner set is decent.The sizes are perfect, it is what I expected for the price.', 25, 34),
(85, 'This machine is a game-changer! It makes bending metal sheets so much easier and faster. The results are always precise and uniform.', 36, 35),
(86, 'This machine works fine, but it\'s not very user-friendly. It takes some time and practice to get used to it. The bending angle is also a bit limited.', 36, 36),
(87, 'This slab cutter made cutting through concrete slabs a breeze. It was easy to use and the blades lasted a long time.', 33, 37),
(88, 'The slab cutter worked fine, but I was expecting it to be a bit more powerful. It got the job done, but it took longer than I had hoped.', 33, 38),
(89, 'This socket set is excellent! The sockets fit perfectly and the ratchet feels solid. Would highly recommend.', 42, 39),
(90, 'For the price, this socket set is really impressive. The sockets are well-made and the case is sturdy. A great value!', 42, 40),
(91, 'This submersible pump is amazing! It works perfectly and has made my life so much easier. ', 38, 41),
(92, 'I had a terrible experience with this submersible pump. It didn\'t work properly from the start, and ended up breaking down completely after only a few uses. I do not recommend this product.', 38, 42),
(93, 'This vacuum cleaner is amazing! It picks up even the tiniest of dust particles, and the attachments make cleaning every surface a breeze.', 17, 43),
(94, 'I\'m really impressed with this vacuum cleaner. It\'s lightweight, easy to maneuver, and has great suction power.', 17, 44),
(95, 'This Vernier caliper is a great tool for accurate measurements. The build quality is impressive, and it provides precise readings every time.', 5, 45),
(96, 'The vernier caliper is easy to use and lightweight, making it perfect for measuring small parts. It has a smooth slide and accurate readings.', 5, 46),
(97, 'I\'ve used a lot of welding machines in my career, but this one is by far the best. It\'s reliable, efficient, and easy to use.', 11, 47),
(98, 'The welding machine is decent. It gets the job done, but there\'s nothing particularly special about it. It\'s a bit on the heavy side and takes a while to warm up.', 11, 48),
(99, 'Amazing wire gauge! Accurate and easy to use. Highly recommended.', 29, 49),
(100, 'This wire gauge is decent. It gets the job done, but not the most precise. Average.', 29, 50),
(128, 'bzdjgsdhgghdv', 1, 51);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `tid` int(11) NOT NULL,
  `status` varchar(50) DEFAULT NULL,
  `billno` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `cid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`rid`),
  ADD KEY `pid` (`pid`),
  ADD KEY `cid` (`cid`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`tid`),
  ADD KEY `pid` (`pid`),
  ADD KEY `cid` (`cid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_fk1` FOREIGN KEY (`cid`) REFERENCES `customer` (`cid`),
  ADD CONSTRAINT `review_fk2` FOREIGN KEY (`pid`) REFERENCES `product` (`pid`);

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `product` (`pid`),
  ADD CONSTRAINT `transactions_ibfk_2` FOREIGN KEY (`cid`) REFERENCES `customer` (`cid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
