-- phpMyAdmin SQL Dump
-- version 2.11.2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 25, 2020 at 08:01 PM
-- Server version: 5.0.45
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `artngallery`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(100) NOT NULL auto_increment,
  `cid` varchar(100) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `cimg` varchar(100) NOT NULL,
  `cstatus` varchar(100) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cid`, `cname`, `cimg`, `cstatus`) VALUES
(4, 'CG1', 'Painting', 'upload/7.jpg', '1'),
(5, 'CG5', 'Print Making', 'upload/8.jpg', '1'),
(6, 'CG6', 'New Media', 'upload/9.png', '1'),
(7, 'CG7', 'Collection', 'upload/10.png', '1');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cid` int(100) NOT NULL auto_increment,
  `fullname` varchar(100) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `address` text NOT NULL,
  UNIQUE KEY `cid` (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cid`, `fullname`, `uname`, `pass`, `email`, `mobile`, `address`) VALUES
(2, 'Rajat', 'rajat', '25f9e794323b453885f5181f1b624d0b', 'rajat@gmail.com', '6187999896', 'australia');

-- --------------------------------------------------------

--
-- Table structure for table `execute_payment_detail`
--

CREATE TABLE `execute_payment_detail` (
  `id` int(50) NOT NULL auto_increment,
  `cid` int(100) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `pid` varchar(100) NOT NULL,
  `sid` varchar(100) NOT NULL,
  `paymentid` varchar(100) NOT NULL,
  `token` varchar(100) NOT NULL,
  `payerid` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `pdate` varchar(100) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `execute_payment_detail`
--

INSERT INTO `execute_payment_detail` (`id`, `cid`, `cname`, `pid`, `sid`, `paymentid`, `token`, `payerid`, `amount`, `pdate`) VALUES
(2, 2, 'Rajat', 'PT2', '2', 'PAYID-L5XDMKQ7WS72425RS645031N', 'EC-51B93641BY1077624', 'VEUGBQ9L87CS4', '23', '2020-09-25');

-- --------------------------------------------------------

--
-- Table structure for table `myadmin`
--

CREATE TABLE `myadmin` (
  `id` int(100) NOT NULL auto_increment,
  `uname` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `myadmin`
--

INSERT INTO `myadmin` (`id`, `uname`, `pass`) VALUES
(1, 'admin', '25f9e794323b453885f5181f1b624d0b');

-- --------------------------------------------------------

--
-- Table structure for table `painting_booking`
--

CREATE TABLE `painting_booking` (
  `id` int(100) NOT NULL auto_increment,
  `cid` varchar(100) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `caddress` varchar(100) NOT NULL,
  `cmobile` varchar(100) NOT NULL,
  `sid` varchar(100) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `pid` varchar(100) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `pprice` varchar(100) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `painting_booking`
--

INSERT INTO `painting_booking` (`id`, `cid`, `cname`, `caddress`, `cmobile`, `sid`, `sname`, `pid`, `pname`, `pprice`) VALUES
(1, '2', 'Rajat', 'australia', '8699311697', 'admin', 'admin', 'PT3', 'aab', '23');

-- --------------------------------------------------------

--
-- Table structure for table `painting_details`
--

CREATE TABLE `painting_details` (
  `id` int(100) NOT NULL auto_increment,
  `pid` varchar(100) NOT NULL,
  `cid` varchar(100) NOT NULL,
  `sid` varchar(100) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `pdesc` text NOT NULL,
  `pprice` varchar(100) NOT NULL,
  `pquantity` varchar(150) NOT NULL,
  `pfeatures` text NOT NULL,
  `pimg` varchar(100) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `painting_details`
--

INSERT INTO `painting_details` (`id`, `pid`, `cid`, `sid`, `sname`, `pname`, `pdesc`, `pprice`, `pquantity`, `pfeatures`, `pimg`) VALUES
(2, 'PT2', 'CG5', '2', 'Harjot Kaur', 'Print Art', 'Proper Art Design', '23', '10', 'art craft', 'upload/hydrangeas.jpg'),
(3, 'PT3', 'CG1', 'admin', 'admin', 'Painting Design', 'Paint Brush', '23', '10', 'Paint Brush', 'upload/2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `sid` int(11) NOT NULL auto_increment,
  `fullname` varchar(100) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  UNIQUE KEY `sid` (`sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`sid`, `fullname`, `uname`, `pass`, `email`, `mobile`, `address`) VALUES
(2, 'Harjot Kaur', 'harjot', '25f9e794323b453885f5181f1b624d0b', 'harjot@gmail.com', '6983326667', 'australia');
