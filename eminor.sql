-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 31, 2020 at 11:46 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eminor`
--

-- --------------------------------------------------------

--
-- Table structure for table `corsi`
--

CREATE TABLE `corsi` (
  `strumento` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `descriptionT` text COLLATE utf8_unicode_ci NOT NULL,
  `descriptionC` json NOT NULL,
  `lessons` json NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `corsi`
--

INSERT INTO `corsi` (`strumento`, `descriptionT`, `descriptionC`, `lessons`) VALUES
('Bass', 'Welcome everyone to my bass courses, I\'m Scott and I\'ll be your bass teacher. With short but content filled video lessons, I\'m gonna teach you everything there is to know to master the bass. We are gonna go all the way from basic positioning to more advanced techniques, as well as fundamental composition aspects of your bass play. Enjoy the course and become a true bass player today!', '[\"Welcome to our entry level course for bass thought out just for you! We\'ll try to keep you entertained and interested through the whole course so we\'ll try to avoid boring you with tons and tons of music theory and instead give you     what you truly want, especially when you start approaching your instrument: basics to play the actual instrument. We\'re going to start with a positioning lesson, getting you comfortable with you bass and showing just how you should position your hands and     how you SHOULD NOT position them. We\'re then gonna start playing some major scales which will be very useful to practice our play while also introducing some music theory aspects. In the last lesson of this course we\'re instead gonna have a quick talk and what     (in my humble opinion) makes a bassist a GREAT bassist so what are you waiting for, start playing now!\", \"In this second part of our bass course, we\'re gonna learn pretty much all there is to know about all the fundamental bass techniques. These ones are pretty straight-forward, we\'re going to start with a fingerstyle focused lesson and talk about how     we can improve our speed on the bass, both on the picking and fretting hand. Then we\'re going to talk about exercises to practice our picking as well as explaining when and why you should use one. Lastly we\'re gonna take a look at the most loved     bass technique which is slap! Probably the most complex technique, it will take time to master it but luckily we\'re here to give you the right tools for it! Take your bass now and start playing there\'s lots of practice to do!\", \"We\'re almost there making you the pro bassist you always wanted to be! In the last part of our course we\'re going to explore the music composition environment and how to apply your (by now) great bass technique to form your own music!     We\'re gonna start from a tough topic that makes a lot of bassists uneasy, and that\'s mastering odd time signatures. Once we put that big obstacle behind us, we have all the tools to finally teach you all the rules to build the perfect bass groove     and fully put your bass to use. Lastly, the icing on the cake, we\'re giving you a little extra technique to truly master movement with your fretting hand. If you reached the end of this course congrats, you\'re surely a 100% pro bassist now!\"]', '{\"1.2 The Major Scale\": \"2bvgAbWRdIA?list=PLF1FD1418DFA48532\", \"1.1 Hands Positioning\": \"NsDbh0buYHE?list=PLF1FD1418DFA48532\", \"2.2 Bass Picking Exercises\": \"tu7FlXKGXdY?list=PL89184C61EF212C3B\", \"1.3 What Makes A Great Bassist\": \"Gn_takDhwfg?list=PLF1FD1418DFA48532\", \"2.3 First Steps To Master Slapping\": \"W70XkdHSQPA?list=PL89184C61EF212C3B\", \"3.2 Structuring The Perfect Groove\": \"NI-OEoWWil8?list=PL46BC3C560E3904B0\", \"3.1 Making Odd Time Signatures Easy\": \"ianWgqT9pRI?list=PLq5Wss5r1Cvu0VpWGIAL--LK1dbLoJgPC\", \"2.1 Building Speed On Fingerstyle Bass\": \"mxG0jm-dn5Y?list=PL89184C61EF212C3B\", \"3.3 Master Your Fretboard: 4 + 2 Positioning\": \"XIEQbCpIkU0?list=PL46BC3C560E3904B0\"}'),
('Drum', 'Hi I\'m Steve Wilson, and I\'m going to be your drum teacher for this course. My course is going to explain to you various techniques as well as some important grooves like the shuffle, as well as giving you competence on rhythm subdivisions. Enjoy the course!', '[\"Starting with the very basics, we\'re going to teach you how to play the drums starting fresh! In this first part we\'re mostly going to become comfortable with our drum kits, starting from the very theory behind how it works and the names you MUST know.     After introducing you to what a basic drum kit looks like, we\'re gonna go through basic stick holding and positioning to place ourselves correctly, only then we\'re going to start practicing some fills and rhythms taking the 1/16 note partial as core example.\", \"After gaining confidence in our positioning and basic rhythm playing, it\'s time to start talking about more intermediate level techniques and rhythmic patterns. We\'re going to introduce to these recurrent patterns starting from the most popular one: the shuffle groove.     Moving on we\'re going to teach you the drag groove and the four stroke ruff. Both techniques will be a powerful tool in your arsenal to diversify your play and make it more unique. Start this course now and pick up the tools to express your internal groove!\", \"To conclude our course, we\'re going to explain some more advanced techniques to polish even more your groove arsenal and give you tools for even more complex rhythms. After talking some difficult patterns, we\'re going to talk some music theory and learn everything     there is to know about rhythmic subdivisions and how they can be used to create our own personal grooves and space out with our inventive!\"]', '{\"2.3 Four Stroke Ruff\": \"gdtzxlN5DXQ?list=PLImrzCNnL5PkRCBWmb2UyrsONC1y_bvA2\", \"2.1 The Shuffle Groove\": \"NC1Dl2WukI0?list=PLImrzCNnL5PkRCBWmb2UyrsONC1y_bvA2\", \"2.2 The Drag Technique\": \"j6rAb15Uods?list=PLImrzCNnL5PkRCBWmb2UyrsONC1y_bvA2\", \"3.2 The Five Stroke Roll\": \"_LTdXKvDIMw?list=PLImrzCNnL5PmzgXAdSa8fMSAFkvU61u7u\", \"3.3 Rhythmic Sub-divisions\": \"PVj1B2YUUG4?list=PLImrzCNnL5PmzgXAdSa8fMSAFkvU61u7u\", \"1.1 Introduction To The Drum Kit\": \"HdiiXOkomKo?list=PLImrzCNnL5PkejUOlF0TX4rx7LZYaXjyD\", \"1.2 Stick Technique: An Introduction\": \"O9mt60NNbWA?list=PLImrzCNnL5PkejUOlF0TX4rx7LZYaXjyD\", \"1.3 Fills Practice: 1/16 Note Partial\": \"RnsRi6GkTZM?list=PLImrzCNnL5PkejUOlF0TX4rx7LZYaXjyD\", \"3.1 Single, Double And Paradiddle-diddle\": \"MHH-xXRJaBE?list=PLImrzCNnL5PmzgXAdSa8fMSAFkvU61u7u\"}'),
('Guitar', 'Hi I\'m Nate Savage and I welcome you to my guitar course! Throughout these classes we\'re going to learn everything you need to know to develop your own unique guitar style! Starting from the very basics, I\'ll give you a mix of rhythm and lead guitar concepts to really get a grasp on the guitar and master this instrument.', '[\"I just know you\'re aching to play some guitar so let\'s skip for now the huge amount of music theory and let\'s go right to the subject: getting our hands on guitar and learn the fundamentals! This entire course will give you both rhythm and lead lessons, so let\'s start     learning the basics for both. After going through the correct way to position ourselves, we\'re going to explain some strumming fundamentals introducing some rhythmic rules, then with the help of the extremely important scales (we\'re gonna go through five essential ones) we\'re     going to introduce some lead aspects to our guitar play.\", \"Keeping on the \'improving both lead and rhythm guitar\' track, in this intermediate level lessons of our course we\'re going to start explaining some methods and exercises to improve both your speed on your lead play and your rhythm writing complexity.     Learning both of these aspects will give you a complete picture of guitar playing so you can not only be eclectic, but also choose on which style you want to specialize your play. As an extra lesson in this part of our course we\'re giving you some fundamentals     about composition, specifically how to improve your melodic writing and how to make your play more \'cheesy\', especially when talking about some metal-inspired musicians like some of you out there!\", \"Welcome to the last part of our guitar course, we hope you enjoyed the ride so far! If you\'ve been practicing a lot and following our classes we\'re sure you\'re on the right path to become a pro guitarist. In this last part we\'re taking you through     techniques to master even more your fretboard, give you patterns to expand you composition possibilities and  helpful tips and exercises to develop your sense of timing and feeling to add to your play. All these tools should give you a full picture on how to     fully use your instrument at its best, whether you chose to use a more rhythm or lead approach to the guitar. So go on and fully master these concepts and you\'ll truly be a master at guitar!\"]', '{\"1.1 General Positioning\": \"itSLKS8UBd8?list=PLiyMO_9U8g1BNzo7ZoXwKg2Pqt5chP6CT\", \"1.3 Five Essential Scales\": \"FAJdx45MfJQ?list=PLiyMO_9U8g1AKuovoOJ0EnEgK0XGi0q4c\", \"1.2 Strumming Fundamentals\": \"PAF39Q8Xc2Y?list=PLiyMO_9U8g1BNzo7ZoXwKg2Pqt5chP6CT\", \"3.3 Developing Timing And Feeling\": \"zjL6EAYszAI?list=PLiyMO_9U8g1BZmURyVO49rMMFUYAafydP\", \"3.2 Seven Essential Scale Patterns\": \"uyoBhgwYsqA?list=PLiyMO_9U8g1DeUNntjM6IPOHNJA5R3gSJ\", \"3.1 Doubling Your Fretboard Coverage\": \"GG6Nb6lQFbg?list=PLiyMO_9U8g1DeUNntjM6IPOHNJA5R3gSJ\", \"2.1 Building Speed On The Lead Guitar\": \"A_IvPVgB5d4?list=PLiyMO_9U8g1AKuovoOJ0EnEgK0XGi0q4c\", \"2.3 Making Your Lead Play More Melodic\": \"OFPEAWjAaj0?list=PLiyMO_9U8g1DeUNntjM6IPOHNJA5R3gSJ\", \"2.2 Strumming Patterns For Rhythm Guitar\": \"EDzu848RGSQ?list=PLiyMO_9U8g1BZmURyVO49rMMFUYAafydP\"}'),
('Piano', 'Hello, I\'m Joseph Hoffman and welcome to my piano courses. I\'m a qualified teacher and I specialized in teaching Piano to a younger audience. Hopefully you can learn from my lectures, I am excited to bring you to an advanced level starting fresh with every lesson kept simple and easily explained!', '[\"In this first part of our piano course, we\'re going to start from the very basics and give you all the information you need to start reading and playing music. Starting from the musical alphabet, our goal is to be able     to read music and learn its theoretical aspects before we even get to our instrument of choice. Once we start to get a grasp of basic music theory, we\'re gonna start analyzing the fundamental position we need to keep     while playing the piano. The third lesson instead takes us again through theoretical concepts regarding measures and tempo. I\'m sure this course will give you a good start to not only play the piano, but understand music in general.\", \"Now that we have a basic understanding of how piano interacts with music theory, we\'re able to start talking about scales, melodic dictation and a rhythmic dictation, specifically syncopation. Through these three lessons, I aim to give you     tools that can help you express your own music and start you on the fundamental concepts of music composition. Keep in mind this course can\'t naturally cover every single aspect of music composition, but these powerful tools will shape your play     and help you better understand new lessons that you\'ll learn in this course and on your own during your play.\", \"Keeping our focus on music composition, the last part of our piano course will try to complete the picture we\'ve given you throughout these entire course, giving you access to a more complex approach to music composition.     Starting with complex time signatures (in this case 3/8 and 6/8), we\'re gonna explain how to further increase the complexity of your style of play and your capability in composing more intricated musical structures. The next lectures     will also give you examples of arrangements and chord progressions that can give you the tools to understand every other complex aspects of music theory.\"]', '{\"3.3 Arabesque\": \"a540JkO1P64?list=PLOpWFi5W-47r7w72E_w0W6y7N-EKi1dFz\", \"2.2 Syncopation\": \"qyBdseuX8mo?list=PLOpWFi5W-47qoAkEcgH0OLoVgI2VQ6T_I\", \"1.2 Piano Posture\": \"BmTcXlfT1OE?list=PLOpWFi5W-47oMUgHx3S0gWOAGbWuDwHPe\", \"1.1 Musical Alphabet\": \"zV1x4-1Owsw?list=PLOpWFi5W-47oMUgHx3S0gWOAGbWuDwHPe\", \"2.3 Melodic Dictation\": \"OfrymUxhlT8?list=PLOpWFi5W-47pb0LgfQH3Pbfn-zybBq9Zj\", \"2.1 D-Flat Major Pentascale\": \"aK10Q6abB38?list=PLOpWFi5W-47p9WwgnjGoZUNKE9wquJHIX\", \"3.2 Diatonic Chord Progressions\": \"HCVHODUK_AQ?list=PLOpWFi5W-47pIhkiSJQsI0Q_HcQ-cx1cL\", \"1.3 Time Signature, Measures and Barlines\": \"jhZAzUB-1Lo?list=PLOpWFi5W-47oOXp7ZiYXP5o9Kjj7gi3Vh\", \"3.1 Complex Time Signatures (3/8 and 6/8)\": \"sfFoCIeFFDQ?list=PLOpWFi5W-47oCGp4Uj6YuEOgjDs3NQm-i\"}');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `nome` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `accetto` tinyint(1) NOT NULL DEFAULT '0',
  `id` int(11) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `scoreP` int(11) NOT NULL DEFAULT '0',
  `scoreB` int(11) NOT NULL DEFAULT '0',
  `scoreG` int(11) NOT NULL DEFAULT '0',
  `scoreD` int(11) NOT NULL DEFAULT '0',
  `keycontrol` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `corsi`
--
ALTER TABLE `corsi`
  ADD PRIMARY KEY (`strumento`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
