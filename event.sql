-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 15, 2020 at 09:41 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `event`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendee`
--

DROP TABLE IF EXISTS `attendee`;
CREATE TABLE IF NOT EXISTS `attendee` (
  `attendee_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `payment_status` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  PRIMARY KEY (`attendee_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `donner`
--

DROP TABLE IF EXISTS `donner`;
CREATE TABLE IF NOT EXISTS `donner` (
  `donner_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `donated_amount` float NOT NULL DEFAULT 0,
  PRIMARY KEY (`donner_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donner`
--

INSERT INTO `donner` (`donner_id`, `user_id`, `event_id`, `donated_amount`) VALUES
(1, 4, 1, 100),
(2, 7, 5, 1000),
(3, 7, 2, 200),
(4, 6, 2, 1500),
(5, 6, 10, 100),
(6, 8, 10, 100);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `Event_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Event_Name` varchar(200) NOT NULL,
  `Description` longtext NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `Ticket_Price` int(11) NOT NULL,
  `Venue` varchar(200) NOT NULL,
  `Organiser_Name` varchar(200) NOT NULL,
  `Image` varchar(200) NOT NULL,
  PRIMARY KEY (`Event_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`Event_Id`, `Event_Name`, `Description`, `Date`, `Time`, `Ticket_Price`, `Venue`, `Organiser_Name`, `Image`) VALUES
(1, 'Yoga event', 'Feel more focused, relaxed and calm in body and mind while stretching in a tranquil, supportive environment.\r\n<br>\r\nSet yourself up to transition with ease into meditation or with energy into your everyday activities.\r\n\r\nAll levels are encouraged to join in!\r\nPlease bring your own yoga mat.\r\n', '2020-04-15', '14:00:00', 0, 'Jackson park', 'Parshwa shah', 'img/events_image/e1.jpg'),
(2, 'Children painting Event', 'Little Brushes paint parties in Toronto are tons of fun for kids, and easy breezy for parents. We plan the activities, and take care of setup and cleanup for you. Art supplies are ready and waiting when you arrive – including aprons to help protect clothing. All you need to bring are the kids and the food. (We even provide plates and utensils.) Unleash their inner artists to celebrate something special!<br><br>Kids don\'t need any artistic skills to have fun & paint at Pinot\'s Palette. Experienced instructors guide them step by step through the painting, based on the ages and skill levels of the group. The painting process is guided and well-structured, while giving kids the wiggle room they need to be kids. $30 Per Painter | Minimum of 15 Kids | Birthday Child Counts Towards the Minimum | The birthday child receives a special gift from us —the painting that our artist completes during the event, after having all of his/her guests sign the back of it!<br><br>We love letting them express their creativity! Kids can change colors, patterns or other details to make the painting their own. And of course, everyone goes home with the coolest party favor ever: their very own masterpiece to remind them of all the fun they had.', '2020-05-13', '15:00:00', 100, 'Windsor school', 'soham patel', 'img/events_image/e2.jpg'),
(3, 'Food Test Events', 'As the election were getting nearer, the enthusiasm in youth was seen. To know the views and expectation from the students GSTV news channel marched towards the Silver Oak College of Engineering and Technology.<br><br>\r\nThe reporter started asking question to the students. Students faced questions like, what are their expectation from the new Chief Minister, what changes would they want in society and education. To this students answered that they would like if their new Chief Minister or the party would focus on developing students practical skill in their respective fields. Also students wanted if they would be more encouraged for sports.<br><br>\r\nFurther female students were asked if they had any needs or expectations from the new Chief Minister, to which they replied enthusiastically that they wanted equality , help in studies as well as transportation.<br><br>\r\nAs for the conclusion the students of Silver Oak college actively answered the question of the reporter.We have planned a very pleasant Sunday afternoon for you and your loved ones to taste different foods from different countries. A lot of love and work was put into this event with a very sincere hope that you are going to participate and spread the word around in your social circles.', '2020-03-13', '14:00:00', 0, 'CAW center', 'Nishtha patel', 'img/events_image/e3.jpg'),
(4, 'Gaming events', 'The event ?Quiztrike? was the combination of Quiz and Counter Strike. Students competed each other in teams. Each team were had to face several rounds before making it to the finals. The competitions contained four rounds.<br><br>\r\nFirst Round:\r\nThe first round was all about solving the quiz. Teams were given 10 question with the time limit of 5 minutes. Both teams had to solve as many answers as they could inside 5 minutes. If the number of correct answer were same, then the time was calculated and points were given accordingly. Also on-desk registration were taken for the first round.\r\n<br><br>Second, Third and Fourth Round\r\nThe next three round consisted of Counter Strike. Teams member were in enthusiastic for this part of the event. Some of the teams were also disqualified because of not following the given rules. In 3rd round the competition between the teams got tough. Students were also allocated waiting room while they were selected for the next round. While the teams were competing, music was also played to keep the teams boosted. As the rounds went on many teams got eliminated. Finally two teams were left at the end of the day to compete each other for the last and final round. Final game was very intense and it was very hard to decide which team will win the competition.\r\n<br><br>Finally after many hustling we got the winner from the competition.\r\nOn first day of the event Smith and his team won the competition while on the second day Khusank and his team won the competition. Both the teams competed IEEE SOCET SB teams for the final clash in which IEEE SOCET SB won.\r\nFinally the event ended with much fun and joy.Celebration of gaming and pop culture. Tens of thousands of families and friends, both locals and travelers from around the world, converge in San Antonio to play hundreds of the most anticipated upcoming games from the biggest names in gaming, local rising-star developers, as well as creators from across the globe.<br><br>The all-ages convention brings together fan-favorite YouTube stars and the biggest names in game development for live gaming competitions, entertaining panels, concerts and other fun events. Attendees can enter giveaways and meet the makers of their favorite games face-to-face.', '2020-03-01', '10:00:00', 50, 'CS Lab, University of windsor', 'Ubisoft', 'img/events_image/e4.jpg'),
(5, 'Painting Event', 'You may not be able to draw a straight line to save your life, but that doesn’t mean you can’t enjoy flexing your creative muscle! Toronto is home to a huge selection of social art classes, workshops and painting events designed for absolute beginners. All materials are provided, all you need to do is reserve your spot and have fun.', '2020-04-15', '18:00:00', 0, 'Saint denis', 'Parshwa shah', 'img/events_image/e5.jpg'),
(9, 'Blood donation ', 'It is a blood donation activity. A person who wants to donate blood voluntarily can join this camp. please bring your valid id card.', '2020-04-15', '10:00:00', 0, 'CAW university of Windsor', 'Org', 'img/events_image/blood-donation.jpg'),
(10, 'VollyBall Match', 'This is a volleyball match for charity between University of Windsor and the University of Toronto.  This charity will be used for people who are suffering from blood cancer. We need donors for this good did. Any spectator can donate this event. The volunteer opportunity is also available for students.', '2020-04-19', '18:00:00', 10, 'St. Denis Sports Center ', 'Org', 'img/events_image/vollyball.jpg'),
(11, 'Campus Gardening', 'Campus gardening activity at the University of Windsor. Need Volunteers for this activity. ', '2020-03-30', '10:00:00', 0, 'Community Garden Area', 'Org', 'img/events_image/gardening.jpg'),
(12, 'Food Bank ', 'We are looking for donors who can donate food, clothes or can provide monetary help for Canterbury Foodbank. Volunteering opportunity is also available for this activity.', '2020-04-15', '11:00:00', 0, 'Canterbury Food Bank Windsor', 'Org', 'img/events_image/foodbank.jpg'),
(13, 'Volunteers for Job Fair', 'The job fair at Windsor is going to be held on next week. Any employer can join this job-fair. The desk will be provided after registration. If they need any volunteers can request for them. For registration, please contact the organizer. This is a paid event so volunteers will be paid by the organizer.', '2020-04-25', '08:30:00', 0, 'St. Denis Sports Center ', 'Org', 'img/events_image/jobfair.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`) USING HASH
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `email`, `password`) VALUES
(1, 'parshwa shah', 'p@a', '123456'),
(2, 'sahil patel', 'sahil@gmail.com', 'sahil1234'),
(3, 'aaa', 'aaa@gmail.com', 'aaa123'),
(4, 'bbb', 'bbb@gmail.com', 'bbb123'),
(5, 'ccc', 'ccc@gmail.com', 'ccc123'),
(6, 'jaimin patel', 'jp@gmail.com', 'jaimin123'),
(7, 'soham patel', 'sp@gmail.com', 'soham123'),
(8, 'parshwa', 'ps@gmail.com', 'parshwa123');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

DROP TABLE IF EXISTS `volunteer`;
CREATE TABLE IF NOT EXISTS `volunteer` (
  `volunteer_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  PRIMARY KEY (`volunteer_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`volunteer_id`, `user_id`, `event_id`, `status`) VALUES
(2, 2, 6, 1),
(3, 5, 1, 1),
(4, 4, 3, 1),
(5, 6, 10, 1),
(6, 8, 11, 1),
(7, 8, 12, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
