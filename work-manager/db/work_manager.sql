-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2021 at 07:46 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `work_manager`
--

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `team_id` int(20) NOT NULL,
  `team_name` varchar(50) NOT NULL,
  `team_desc` varchar(255) NOT NULL,
  `createdby` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `teams_members`
--

CREATE TABLE `teams_members` (
  `teams_members_id` int(20) NOT NULL,
  `teams_id` int(20) NOT NULL,
  `members_email` varchar(50) NOT NULL,
  `members_role` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `teams_work`
--

CREATE TABLE `teams_work` (
  `teams_work_id` int(20) NOT NULL,
  `teams_id` int(11) NOT NULL,
  `works_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `fullName` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `work`
--

CREATE TABLE `work` (
  `work_id` int(20) NOT NULL,
  `work_name` varchar(50) NOT NULL,
  `work_desc` varchar(255) NOT NULL,
  `createdby` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `workfile`
--

CREATE TABLE `workfile` (
  `workid` int(20) NOT NULL,
  `workfileId` int(20) NOT NULL,
  `workfileName` varchar(100) NOT NULL,
  `createdAt` datetime NOT NULL,
  `createdBy` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `works_member`
--

CREATE TABLE `works_member` (
  `works_member_id` int(20) NOT NULL,
  `works_id` int(20) NOT NULL,
  `members_email` varchar(50) NOT NULL,
  `members_role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `worktext`
--

CREATE TABLE `worktext` (
  `worktextId` int(20) NOT NULL,
  `worktextBy` varchar(50) NOT NULL,
  `worktext` varchar(200) NOT NULL,
  `worktextRole` varchar(50) NOT NULL,
  `worktextAt` datetime NOT NULL DEFAULT current_timestamp(),
  `worktextWorkid` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`team_id`);

--
-- Indexes for table `teams_members`
--
ALTER TABLE `teams_members`
  ADD PRIMARY KEY (`teams_members_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `work`
--
ALTER TABLE `work`
  ADD PRIMARY KEY (`work_id`);

--
-- Indexes for table `workfile`
--
ALTER TABLE `workfile`
  ADD PRIMARY KEY (`workfileId`);

--
-- Indexes for table `works_member`
--
ALTER TABLE `works_member`
  ADD PRIMARY KEY (`works_member_id`);

--
-- Indexes for table `worktext`
--
ALTER TABLE `worktext`
  ADD PRIMARY KEY (`worktextId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `team_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `teams_members`
--
ALTER TABLE `teams_members`
  MODIFY `teams_members_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `work`
--
ALTER TABLE `work`
  MODIFY `work_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `workfile`
--
ALTER TABLE `workfile`
  MODIFY `workfileId` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `works_member`
--
ALTER TABLE `works_member`
  MODIFY `works_member_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `worktext`
--
ALTER TABLE `worktext`
  MODIFY `worktextId` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
