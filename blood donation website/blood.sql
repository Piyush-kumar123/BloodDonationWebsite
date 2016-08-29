create database blood;
use blood;

CREATE TABLE IF NOT EXISTS `feeds` (
  `name` varchar(50) NOT NULL,
  `cno` int(11) NOT NULL,
  `eid` varchar(70) NOT NULL,
  `cmnt` varchar(10000) NOT NULL,
  PRIMARY KEY (`cno`)
) ;


INSERT INTO `feeds` (`name`, `cno`, `eid`, `cmnt`) VALUES
('Vikash', 2147483647, 'vikash.mishra123@gmail.com', 'asedf');

CREATE TABLE IF NOT EXISTS `siteuser` (
  `username` varchar(30) NOT NULL,
  `pwd` varchar(20) DEFAULT NULL,
  `firstname` varchar(10) DEFAULT NULL,
  `lastname` varchar(20) DEFAULT NULL,
  `bg` varchar(4) DEFAULT NULL,
  `sname` varchar(20) NOT NULL,
  `cname` varchar(20) NOT NULL,
  `gender` varchar(6) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `contact` varchar(10) DEFAULT NULL,
  `hintq` varchar(250) DEFAULT NULL,
  `hinta` varchar(50) DEFAULT NULL,
  `role` varchar(10) DEFAULT NULL,
  `active` varchar(3) DEFAULT NULL,
  PRIMARY KEY (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `email_2` (`email`),
  UNIQUE KEY `contact` (`contact`)
);


INSERT INTO `siteuser` (`username`, `pwd`, `firstname`, `lastname`, `bg`, `sname`, `cname`, `gender`, `email`, `contact`, `hintq`, `hinta`, `role`, `active`) VALUES
('sarvesh', 'zxcvbn', 'Sarvesh', 'Chandra', 'B+', 'Bihar-', 'Samastipur', 'male', 'sarveshchandra@mail.com', '8871614618', 'what is your pet name?', 'facky', 'doner', 'yes'),
('vikash', 'zxcvb', 'Vikash', 'Mishra', 'B+', 'Madhya Pradesh', 'Bhopal', 'male', 'vikash.mishra123@gmail.com', '8989161520', 'what is your pet name?', 'tommy', 'doner', 'yes');

