-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2018 at 08:13 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `music3`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `AlbumID` int(11) NOT NULL,
  `Title` varchar(20) NOT NULL,
  `GenreID` int(20) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Price` decimal(4,2) NOT NULL,
  `Artist` varchar(20) NOT NULL,
  `CoverImage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`AlbumID`, `Title`, `GenreID`, `Description`, `Price`, `Artist`, `CoverImage`) VALUES
(1, 'A Girl like Me', 2, 'A Girl like Me is the second studio album by Barbadian singer Rihanna. It was released on April 10, ', '7.21', 'Rihanna', 'A_Girl_like_Me_-_Rihanna.png'),
(2, 'Crush', 1, 'Crush is the seventh studio album by American rock band Bon Jovi. It was released on June 13, 2000, ', '7.89', 'Bon Jovi', 'BonJoviCrushalbumcover.jpg'),
(3, 'Tomahawk Technique', 19, 'Tomahawk Technique is the fifth studio album by Jamaican dancehall recording artist Sean Paul, relea', '5.33', 'Sean Paul', 'All_or_Nothing.jpg'),
(4, 'The Twilight Saga: B', 17, '\"A Thousand Years\" is a song recorded by American singer-songwriter Christina Perri, and written by ', '6.67', 'Christina Perri, Dav', 'Twilightbreakingdawn2soundtrack.jpg'),
(5, 'Mad Love the Prequel', 18, 'Mad Love the Prequel is the seventh studio album by Jamaican singer Sean Paul. It is supported by th', '7.01', 'Sean Paul', 'mmadlove.jpeg'),
(6, 'Invasion of Privacy', 8, 'Invasion of Privacy is the debut studio album by American rapper Cardi B. It was released on April 5', '5.47', 'Cardi B.', 'Cardi_B_-_Invasion_of_Privacy.png'),
(7, 'Red Pill Blues', 2, 'Red Pill Blues is the sixth studio album by American pop rock band Maroon 5. It was released on Nove', '6.98', 'Maroon 5', 'Red_Pill_Blues_cover.png'),
(8, 'Scorpion', 8, 'Scorpion is the fifth studio album by Canadian rapper Drake. It was released on June 29, 2018 by You', '7.54', 'Drake', 'drake.jpg'),
(9, 'Beerbongs & Bentleys', 8, 'Beerbongs & Bentleys is the second studio album by American rapper Post Malone, released by Republic', '6.12', 'Post Malone', 'Beerbongs_&_Bentleys_by_Post_Malone.png'),
(10, 'Divide', 2, '÷ is the third studio album by English singer-songwriter Ed Sheeran. It was released on 3 March 2017', '5.99', 'Ed Sheeran', 'divide.jpg'),
(11, 'Dangerous Woman ', 2, 'Dangerous Woman is the third studio album by American singer Ariana Grande, released by Republic Rec', '6.43', 'Ariana Grande', 'arianaAlbum.png'),
(12, 'Astroworld', 8, 'Astroworld is the third studio album by American rapper Travis Scott. It was released on August 3, 2', '8.29', 'Travis Scott', 'Astroworld_by_Travis_Scott.jpg'),
(13, 'Sweetener', 2, 'Sweetener is the fourth studio album by American singer Ariana Grande. It was released on August 17,', '6.75', 'Ariana Grande', 'Sweetener_album_cover.png'),
(14, 'Queen', 2, 'Queen is the fourth studio album by American rapper and singer Nicki Minaj. It was released on Augus', '6.88', 'Nicki Minaj', 'Queen.jpg'),
(15, 'Look Up Child', 4, 'Look Up Child is the second studio album by American contemporary Christian music singer-songwriter ', '7.24', 'Lauren Daigle', 'lookupchild.png'),
(16, 'Kamikaze', 8, 'amikaze is the tenth studio album by American rapper Eminem. Previously unannounced, the album was r', '8.22', 'Eminem', 'Eminem_-_Kamikaze.jpg'),
(17, 'Purpose', 19, 'Purpose is the fourth studio album by Canadian singer and songwriter Justin Bieber. It was released ', '6.43', 'Justin Bieber', 'purpose.jpg'),
(18, 'All or Nothing', 2, 'All or Nothing is the third studio album by British R&B singer Jay Sean, released 23 November 2009 i', '6.02', 'Jay Sean', 'All_or_Nothing.jpg'),
(19, 'Swimming', 8, 'Swimming is the fifth studio album by American rapper Mac Miller and the last to be released during ', '8.34', 'Mac Miller', 'Swimmingalbumcover.jpg'),
(20, 'Egypt Station', 1, 'Egypt Station is the 18th solo studio album by Paul McCartney. It was released by Capitol Records on', '8.25', ' Paul McCartney', 'Egypt_Station\'_album.jpg'),
(21, 'Reputation', 2, 'Reputation is the sixth studio album by American singer and songwriter Taylor Swift. It was released', '6.14', 'Taylor Swift', 'Taylor_Swift_-_Reputation.png'),
(22, 'Encore', 12, 'Encore is the debut studio album by French electronic music producer DJ Snake, released on August 5,', '7.75', 'DJ Snake', 'Encore_album_cover.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `albumorder`
--

CREATE TABLE `albumorder` (
  `AlbumID` int(11) NOT NULL,
  `OrderID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `download`
--

CREATE TABLE `download` (
  `UserID` int(11) NOT NULL,
  `SongID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `GenreID` int(11) NOT NULL,
  `Type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`GenreID`, `Type`) VALUES
(1, 'Rock '),
(2, 'Pop'),
(3, 'Musical Theatre'),
(4, 'Classiacal / Contemporary'),
(5, 'Blues'),
(6, 'Metal'),
(7, 'Dance Music'),
(8, 'Hip Hop'),
(9, 'Rap'),
(10, 'Folk Music'),
(11, 'Metal'),
(12, 'Electronic Dance Music'),
(13, 'Jazz'),
(14, 'Country Music'),
(15, 'Ambient / Instrumental'),
(16, 'Jazz'),
(17, 'Soundtrack / Film'),
(18, 'Reggae'),
(19, 'Dance pop'),
(20, 'R & B'),
(21, 'Bounce'),
(22, 'Latin'),
(23, 'House Music'),
(24, 'Techno'),
(25, 'Disco');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `usertype` varchar(150) NOT NULL,
  `status` varchar(100) NOT NULL,
  `token` varchar(150) NOT NULL,
  `tokenExpire` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `email`, `usertype`, `status`, `token`, `tokenExpire`) VALUES
(1, 'Ridmie', '98a79d42ff5cd5990ed68d9c146c759108863a39', 'tinushisahathma@gmail.com', 'admin', 'Active', '510mc2uz7p', '2018-10-08 09:50:21'),
(2, 'Akaam', 'd8e5707fe7be73402a55bb7037f149c856414cf6', 'akaam@gmail.com', 'User', '', '', '0000-00-00 00:00:00'),
(3, 'Akaam', 'd8e5707fe7be73402a55bb7037f149c856414cf6', 'akaam@gmail.com', 'User', '', '', '0000-00-00 00:00:00'),
(4, 'Sachini', 'a6ba30ae7a96fbaca00893e9fcb65120fbb31d69', 'sachi@gmail.com', 'admin', '', 'pnoqueh65b', '2018-10-08 00:04:46'),
(5, 'Sajini', '5b776fe522cca1e360f2e5198f54187a3e84102f', 'saji@gmail.com', 'admin', '', '', '0000-00-00 00:00:00'),
(6, 'Priyan', 'ae2bd0d13037781f15218ea4dd88d295d765de5c', 'piyal@gmail.com', 'admin', '', '', '0000-00-00 00:00:00'),
(7, 'Alex', '86d5d3440bed478370bf03490387a68885cc5964', 'alex@gmail.com', 'User', '', '', '0000-00-00 00:00:00'),
(8, 'Maleesha', '93a8516b65d499e6720f80c80225785d8b601b7b', 'maleesha@gmail.com', 'User', '', '', '0000-00-00 00:00:00'),
(9, 'Maythree', '3284cd8916d23f14475c5cb22e2f09e99f16dedc', 'my3@gmail.com', 'admin', '', '', '0000-00-00 00:00:00'),
(10, 'Rifan', '58538427fc4e385d3ebf320d4f650dbb41956e75', 'rifan@gmail.com', 'admin', '', '', '0000-00-00 00:00:00'),
(11, 'Moveena', '77defab5dc5e3577ef64207d9cb31fc7e73734c4', 'movee@gmail.com', 'admin', '', '', '0000-00-00 00:00:00'),
(12, 'Sam', '2464ece68e95798b80363a35954b5d1462c176f8', 'sam@gmail.com', 'User', '', '', '0000-00-00 00:00:00'),
(13, 'Tom', '5259a98b3ba32887c3ff2756829d517899a1453f', 'tom@gmail.com', 'User', '', '', '0000-00-00 00:00:00'),
(15, 'John', 'd576bb8bf25e8ed54ca2a0dff319cebe41799e15', 'john@gmail.com', 'admin', '', '', '0000-00-00 00:00:00'),
(16, 'Sally', '32ebd326659c3c357bee94d7df2a0dc4cdf5e40a', 'sa@gmail.com', 'admin', '', '', '0000-00-00 00:00:00'),
(17, 'jery', 'b965e955aed0fd1ffc0465f9e7aad392df1aec01', 'jerry@gmail.com', 'admin', '', '', '0000-00-00 00:00:00'),
(18, 'jery', 'b965e955aed0fd1ffc0465f9e7aad392df1aec01', 'jerry@gmail.com', 'admin', '', '', '0000-00-00 00:00:00'),
(19, 'Jack', 'cea19be9d36c1b260a6b8b30f50a7d60b22aa2e6', 'jack@gmail.com', 'admin', '', '', '0000-00-00 00:00:00'),
(20, 'aa', 'fe1fc4e50cceefb2845a887c1133524eabd72790', 'a@gmail.com', 'admin', '', '', '0000-00-00 00:00:00'),
(21, 'johny', '50d191ca9589f579b2864f67f1fe64c7433af099', 'jony@gmail.com', 'User', '', '', '0000-00-00 00:00:00'),
(22, 'bb', '690c9bb459ccf0c23dedcf5ebd2cab9f6869906e', 'bb@gmail.com', 'admin', '', '', '0000-00-00 00:00:00'),
(23, 'Sajith', '215da9c0e64ef0c3017257528f79844e20c07164', 'sa@gmail.com', 'User', '', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `month`
--

CREATE TABLE `month` (
  `MonthID` int(20) NOT NULL,
  `Month` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `month`
--

INSERT INTO `month` (`MonthID`, `Month`) VALUES
(1, 'January'),
(2, 'February'),
(3, 'March'),
(4, 'April'),
(5, 'May'),
(6, 'June'),
(7, 'July'),
(8, 'August'),
(9, 'September'),
(10, 'October'),
(11, 'November'),
(12, 'December');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `OrderID` int(11) NOT NULL,
  `Price` varchar(20) NOT NULL,
  `CoverImage` varchar(255) NOT NULL,
  `UserID` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`OrderID`, `Price`, `CoverImage`, `UserID`) VALUES
(1, '7.99', 'grilslikeu.jpg', 6),
(2, '8.10', 'cardi-b-invasion-of-privacy.jpg', 7),
(3, '6.43', 'purpose.jpg', 8),
(4, '6.02', 'All_or_Nothing.jpg', 6),
(5, '8.22', 'Eminem_-_Kamikaze.jpg', 9);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `PaymentID` int(20) NOT NULL,
  `Date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Email` varchar(150) NOT NULL,
  `CardNo` varchar(16) NOT NULL,
  `MonthID` varchar(50) NOT NULL,
  `YearID` int(20) NOT NULL,
  `cvv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`PaymentID`, `Date`, `Email`, `CardNo`, `MonthID`, `YearID`, `cvv`) VALUES
(1, '0000-00-00 00:00:00', 'pabeyasekare@gmail.com', '1111222233334444', 'January', 2018, 123),
(2, '0000-00-00 00:00:00', 'it18040968@my.sliit.lk', '2222333355556666', 'February', 2021, 456),
(3, '0000-00-00 00:00:00', 'aab@gmail.com', '6666111133337777', 'April', 2019, 456),
(4, '0000-00-00 00:00:00', 'sliit@gmail.com', '3333666699990000', 'October', 2019, 754),
(5, '0000-00-00 00:00:00', 'pabeyasekare@gmail.com', '1111222233334444', 'March', 2018, 456),
(6, '0000-00-00 00:00:00', 'bbhrld@gmail.com', '3333888866661111', 'April', 2022, 456),
(7, '0000-00-00 00:00:00', 'aab@gmail.com', '444433332222', 'April', 2020, 123),
(8, '0000-00-00 00:00:00', 'pabeyasekare@gmail.com', '4444555588880000', 'May', 2019, 456),
(9, '0000-00-00 00:00:00', 'bbhrld@gmail.com', '1111222233334444', 'March', 2020, 123),
(10, '0000-00-00 00:00:00', 'aab@gmail.com', '2222333344447777', 'February', 2019, 456),
(11, '0000-00-00 00:00:00', 'aab@gmail.com', '2222333344447777', 'February', 2019, 456),
(12, '0000-00-00 00:00:00', 'pabeyasekare@gmail.com', '1111222244445555', '', 0, 234),
(13, '0000-00-00 00:00:00', 'pabeyasekare@gmail.com', '1111222233334444', 'April', 2020, 123),
(14, '0000-00-00 00:00:00', 'tinushisahathma@gmail.com', '1111222233334444', 'April', 2019, 123),
(15, '0000-00-00 00:00:00', 'tinushisahathma@gmail.com', '1111222233334444', 'April', 2020, 123);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `pname` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `price` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `pname`, `image`, `price`) VALUES
(1, 'alan', 'alan.png', 10),
(2, 'avicii', 'avicii.png', 10),
(3, 'black', 'black.png', 10),
(4, 'maroon', 'maroon.png', 10),
(5, 'shawn', 'shawn.png', 10);

-- --------------------------------------------------------

--
-- Table structure for table `rate_album`
--

CREATE TABLE `rate_album` (
  `UserID` int(11) NOT NULL,
  `AlbumID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rate_song`
--

CREATE TABLE `rate_song` (
  `UserID` int(11) NOT NULL,
  `SongID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `song`
--

CREATE TABLE `song` (
  `SongID` int(11) NOT NULL,
  `Title` varchar(20) NOT NULL,
  `Artist` varchar(50) NOT NULL,
  `GenreID` int(20) NOT NULL,
  `Duration` time NOT NULL,
  `AlbumID` int(20) DEFAULT NULL,
  `DateReleased` date NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `CoverImage` varchar(255) NOT NULL,
  `Mp3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `song`
--

INSERT INTO `song` (`SongID`, `Title`, `Artist`, `GenreID`, `Duration`, `AlbumID`, `DateReleased`, `Description`, `CoverImage`, `Mp3`) VALUES
(1, 'I Like It', 'Cardi B, Bad Bunny &', 22, '00:04:06', 6, '2018-09-25', '\"I Like It\" is a song recorded by American rapper Cardi B with Puerto Rican recording artist Bad Bunny and Colombian singer J Balvin for her debut studio album Invasion of Privacy (2018). It was released on May 25, 2018 to radio stations through Atlantic Records as the fourth single from the album.', 'cardi-b-invasion-of-privacy.jpg', 'Cardi B, Bad Bunny & J Balvin - I Like It [Official Audio].mp3'),
(2, 'Girls Like You', 'Maroon 5 Featuring C', 2, '00:03:35', 7, '2018-05-30', '\"Girls Like You\" is a song recorded by American band Maroon 5, from their sixth studio album Red Pill Blues (2017). A remix version featuring American rapper Cardi B was released by 222 and Interscope Records as the album\'s third single on May 30, 2018.This version was written by Adam Levine, Cirkut, Cardi B, Starrah, Jason Evigan, and Gian Stone and was produced by Cirkut and Evigan.', 'girlslikeu.jpg', 'Maroon 5 - Girls Like You ft. Cardi B (192  kbps) (ytformp3.com).mp3'),
(3, 'In My Feelings', 'Drake', 21, '00:03:37', 8, '2018-07-10', '\"In My Feelings\" is a song by Canadian musician Drake from his fifth studio album Scorpion (2018). It was released to rhythmic and contemporary hit radio on July 30, 2018, as the album\'s fifth single. The song features additional vocals by the City Girls, though they are not credited on the official version.The song topped the Billboard Hot 100 chart for ten weeks and broke several records.', 'drake.jpg', 'Drake_-_In_My_Feelings_inforistic.com_.mp3'),
(4, 'Better Now', 'Post Malone', 4, '00:03:50', 9, '2018-06-05', '\"Better Now\" is a song by American rapper Post Malone from his second studio album, Beerbongs & Bentleys (2018). It was written by Post Malone, Billy Walsh, Louis Bell and Frank Dukes, with production handled by the latter two. The song was released to US contemporary hit radio on June 5, 2018, as the album\'s fifth single.', 'postmalone.jpg', 'Post_Malone_Better_Now_(mp3co.biz).mp3'),
(5, 'Delicate', 'Taylor Swift', 26, '00:03:52', 21, '2018-03-12', '\"Delicate\" is an electropop song by American singer-songwriter Taylor Swift for her sixth studio album, Reputation (2017). It was released on March 12, 2018, as the album\'s sixth single. Swift wrote the song with producers Max Martin and Shellback.', 'delicate.jpg', 'Taylor Swift - Delicate.mp3'),
(6, 'Let Me Love You', 'DJ Snake ft. Justin Bieber', 12, '00:03:26', NULL, '2016-08-05', '\"Let Me Love You\" is a song recorded by French electronic music producer DJ Snake, taken as the third single from his debut studio album, Encore (2016). It featured vocals from Canadian singer Justin Bieber. The artists co-wrote the song with Andrew Watt, Ali Tamposi, Brian Lee, and Louis Bell, while the song\'s production was handled by DJ Snake.', 'letmelvu.jpg', 'Let Me Love You.mp3'),
(7, 'Perfect', 'Ed Sheeran', 4, '00:04:23', 10, '2017-09-26', '\"Perfect\" is a song by English singer-songwriter Ed Sheeran from his third studio album, Divide (2017).After the album\'s release it charted at number four on the UK Singles Chart. On 21 August 2017, Billboard announced that \"Perfect\" would be the fourth single from the album.', 'perfect.jpg', 'Ed Sheeran - Perfect.mp3'),
(8, 'Move to Miami', 'Enrique Iglesias ft.', 2, '00:02:49', NULL, '2018-05-03', '\"Move to Miami\" is a song by Spanish singer Enrique Iglesias featuring American rapper Pitbull. It was released by RCA Records and Sony Music Latin on 3 May 2018. The track was written by Iglesias, Pitbull, Jorge Gomez, Bilal Hajji, Jimmy Joker, Marty James, Servando Primera, Jose Garcia, and its producers J.R. Rotem, Nitti Gritti and Wuki.', 'enrique.jpg', 'Enrique-Iglesias-Move-to-Miami.mp3'),
(9, 'No Lie', 'Sean Paul featuring ', 7, '00:03:41', 5, '2016-11-18', '\"No Lie\" is a song by Jamaican rapper Sean Paul featuring British singer Dua Lipa. It was released on 18 November 2016 as the lead single from Paul\'s EP Mad Love the Prequel.\"No Lie\" will be included on the complete edition of Lipa\'s eponymous debut studio album.', 'nolie.jpg', 'Sean_Paul_-_No_Lie_ft_Dua_Lipa[GrabvidtoMp3.com].mp3'),
(10, 'Into You', 'Ariana Grande', 19, '00:04:04', 11, '2016-05-06', '\"Into You\" is a song by American singer Ariana data truncGrande from her third studio album Dangerous Woman (2016). Grande co-wrote the song with Savan Kotecha, Alexander Kronlund, and its producers Max Martin and Ilya Salmanzadeh. The song was made available by digital download on May 6, 2016 via pre-order of the album and was later serviced to contemporary hit and rhythmic radio on June 28, 2016 as the album\'s second single.', 'intoyou.jpg', 'Into You.mp3'),
(11, 'Down', 'Jay Sean', 19, '00:03:32', 18, '2009-05-31', '\"Down\" is a song by British singer Jay Sean. The song was released in North America as his debut single from his first album there, All or Nothing. In other markets, including the United Kingdom, the song serves as Jay Sean\'s lead single from his third studio album.', 'down.jpg', 'Down (ft. Lil Wayne).mp3'),
(12, 'Sorry', 'Justin Bieber', 2, '00:03:20', 17, '2015-10-23', '\"Sorry\" is a song recorded by Canadian singer Justin Bieber for his fourth studio album, Purpose (2015). Written by Bieber, Julia Michaels, Justin Tranter, Sonny Moore, and Michael Tucker; the song was produced by Skrillex and BloodPop. It was released on October 23, 2015, as the second single from the album.', 'sorry.png', 'Sorry.mp3'),
(13, 'Unfaithful', 'Rihanna', 2, '00:03:49', 1, '2006-05-02', '\"Unfaithful\" is a song by Barbadian singer Rihanna from her second studio album A Girl like Me (2006). It was written by Shaffer \"Ne-Yo\" Smith with the song\'s producers StarGate. The song was released by Def Jam Recordings on May 2, 2006, as the second single from the album. \"Unfaithful\" is a pop and R&B ballad and was inspired by the music of American rock band Evanescence.', 'unfaithful.png', 'Unfaithful.mp3'),
(14, 'A Thousand Years', 'Christina Perri ', 17, '00:04:45', 4, '2011-10-18', '\"A Thousand Years\" is a song recorded by American singer-songwriter Christina Perri, and written by Perri and David Hodges, from the album The Twilight Saga: Breaking Dawn Part 1: Original Motion Picture Soundtrack (2011). The song was released as a digital download on October 18, 2011 worldwide.', '1000years.jpg', 'A Thousand Years.mp3'),
(15, 'It\'s My Life', 'Bon Jovi', 1, '00:03:44', 2, '2000-05-23', '\"It\'s My Life\" is song by American rock band Bon Jovi. It was released on May 23, 2000 as the lead single from their seventh studio album, Crush (2000). The song was written and produced by Jon Bon Jovi, Richie Sambora, and Max Martin, and co-produced by ', 'bonjovi.jpg', 'Bon_Jovi_Its_My_Life_(mp3co.biz).mp3'),
(16, 'Despacito', 'Luis Fonsi ft. Daddy', 18, '00:03:47', NULL, '2017-01-12', '\"Despacito\" (American Spanish: [despa\'sito]; English: \"Slowly\") is a song by Puerto Rican singer Luis Fonsi featuring Puerto Rican rapper Daddy Yankee from Fonsi\'s upcoming studio album. On January 12, 2017, Universal Music Latin released \"Despacito\" ', 'Despacito.png', 'Luis Fonsi Feat. Daddy Yankee - Despacito (mp3goo.com).mp3'),
(17, 'Danza Kuduro', 'Don Omar ft. Lucenzo', 18, '00:03:19', NULL, '2010-08-15', 'Danza Kuduro\" is a Spanish/Portuguese-language hit song from Don Omar\'s collaborative album Meet the Orphans released as the lead single from the album on August 15, 2010 through Machete Music and VI Music. It features singer Lucenzo, a French artist of Portuguese descent. \"Danza Kuduro\" was number one on the Hot Latin Songs.', 'danza.png', 'Danza Kuduro.mp3'),
(18, 'Got 2 Luv U', 'Sean Paul', 7, '00:03:26', 3, '2011-07-19', '\"Got 2 Luv U\" is the first single from Jamaican recording artist Sean Paul\'s fifth studio album Tomahawk Technique. The song features vocals from American singer Alexis Jordan. It was released on 19 July 2011 by Atlantic Records.', 'seanpaula.jpg', 'Got 2 Luv U.mp3'),
(19, 'Echame La Culpa', 'Luis Fonsi, Demi Lov', 18, '00:02:53', NULL, '2017-11-17', '\"Echame la Culpa\" is a song recorded by Puerto Rican singer and songwriter Luis Fonsi and American singer and songwriter Demi Lovato. Fonsi co-wrote the song with Alejandro Rengifo and its producers Andres Torres and Mauricio Rengifo.The song was first released through Universal Music Latin Entertainment, Republic Records and Island Records on November 17, 2017.', 'echame.jpg', 'Echame La Culpa - Luis Fonsi ft Demi Lovato.mp3'),
(20, 'Back To You', 'Selena Gomez', 19, '00:03:27', 19, '2018-05-10', '\"Back to You\" (stylized as \"Back 2 You \'18\" on the single cover) is a song by American singer Selena Gomez. It was written by Amy Allen, Parrish Warrington, Micah Premnath, Diederik Van Elsas, and Gomez, while the production was handled by Trackside and Ian Kirkparick. ', 'backtoyou.jpg', 'Selena_Gomez_Back_To_You_(mp3co.biz).mp3');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `UserID` int(11) NOT NULL,
  `SongID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserID` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `EmailAddress` varchar(40) NOT NULL,
  `ContactNo` char(10) NOT NULL,
  `UserRole` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `ProfilePic` varchar(255) NOT NULL,
  `Status` varchar(20) NOT NULL,
  `token` varchar(500) NOT NULL,
  `tokenExpire` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `fname`, `lname`, `EmailAddress`, `ContactNo`, `UserRole`, `username`, `Password`, `ProfilePic`, `Status`, `token`, `tokenExpire`) VALUES
(3, 'Sajini', 'Bandara', 'sajini@gmail.com', '0751258964', 'admin', 'sajini123', '98a79d42ff5cd5990ed68d9c146c759108863a39', '', 'Active', '', '0000-00-00 00:00:00'),
(4, 'Priyan', 'Abeysekare', 'priyan@gmail.com', '0778956324', 'admin', 'priyan123', 'ae2bd0d13037781f15218ea4dd88d295d765de5c', '', 'Deactivated', '', '0000-00-00 00:00:00'),
(5, 'Maithre', 'Mudalinayake', 'maithre@gmail.com', '0771254963', 'admin', 'maithre123', '3284cd8916d23f14475c5cb22e2f09e99f16dedc', '', 'Active', '', '0000-00-00 00:00:00'),
(6, 'Michael', 'Perera', 'mich@gmail.com', '0754563298', 'customer', 'michael123', '98a79d42ff5cd5990ed68d9c146c759108863a39', '', 'Deactivated', '', '0000-00-00 00:00:00'),
(7, 'Jane', 'Collins', 'jane@gmail.com', '0715642356', 'customer', 'jane123', 'cea19be9d36c1b260a6b8b30f50a7d60b22aa2e6', '', 'Active', '', '0000-00-00 00:00:00'),
(8, 'Dan', 'Fernando', 'dan@gmail.com', '0761245836', 'customer', 'dan123', '3284cd8916d23f14475c5cb22e2f09e99f16dedc', '', 'Active', '', '0000-00-00 00:00:00'),
(9, 'Tharindu', 'Bandara', 'tharindu@gmail.com', '0712456983', 'customer', 'tharindu123', 'cea19be9d36c1b260a6b8b30f50a7d60b22aa2e6', '', 'Deactivated', '', '0000-00-00 00:00:00'),
(10, 'Sam', 'De Silva', 'sam@gmail.com', '0775632981', 'customer', 'sam123', '50d191ca9589f579b2864f67f1fe64c7433af099', '', 'Activate', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `year`
--

CREATE TABLE `year` (
  `YearID` int(11) NOT NULL,
  `Year` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `year`
--

INSERT INTO `year` (`YearID`, `Year`) VALUES
(1, '2018'),
(2, '2019'),
(3, '2020'),
(4, '2021'),
(5, '2022');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`AlbumID`),
  ADD KEY `Genre1_ID` (`GenreID`);

--
-- Indexes for table `albumorder`
--
ALTER TABLE `albumorder`
  ADD PRIMARY KEY (`AlbumID`,`OrderID`),
  ADD KEY `OrderID` (`OrderID`);

--
-- Indexes for table `download`
--
ALTER TABLE `download`
  ADD PRIMARY KEY (`UserID`,`SongID`),
  ADD KEY `SongID` (`SongID`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`GenreID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `month`
--
ALTER TABLE `month`
  ADD PRIMARY KEY (`MonthID`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`OrderID`),
  ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`PaymentID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rate_album`
--
ALTER TABLE `rate_album`
  ADD PRIMARY KEY (`UserID`,`AlbumID`);

--
-- Indexes for table `rate_song`
--
ALTER TABLE `rate_song`
  ADD PRIMARY KEY (`UserID`,`SongID`),
  ADD KEY `SongID` (`SongID`),
  ADD KEY `UserID` (`UserID`),
  ADD KEY `UserID_2` (`UserID`);

--
-- Indexes for table `song`
--
ALTER TABLE `song`
  ADD PRIMARY KEY (`SongID`),
  ADD KEY `AlbumID` (`AlbumID`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`UserID`,`SongID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `year`
--
ALTER TABLE `year`
  ADD PRIMARY KEY (`YearID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `AlbumID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `GenreID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `month`
--
ALTER TABLE `month`
  MODIFY `MonthID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `OrderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `PaymentID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `song`
--
ALTER TABLE `song`
  MODIFY `SongID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `year`
--
ALTER TABLE `year`
  MODIFY `YearID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `album`
--
ALTER TABLE `album`
  ADD CONSTRAINT `album_ibfk_1` FOREIGN KEY (`GenreID`) REFERENCES `genre` (`GenreID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
